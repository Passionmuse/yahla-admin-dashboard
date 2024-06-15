<?php

namespace App\Http\Controllers\Api;

use Share;
use FFMpeg\FFMpeg;
use App\Models\Feed;
use App\Models\Post;
use App\Models\Reaction;
use App\Models\PostGallery;
use App\Traits\UploadMedia;
use Illuminate\Http\Request;
use FFMpeg\Coordinate\TimeCode;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\Comment;

class FeedController extends Controller
{

    
    public function shareWidget()
    {
        $shareComponent = Share::page('https://www.codesolutionstuff.com/generate-rss-feed-in-laravel/', 'dummy text')
            ->facebook()
            ->whatsapp()
            ->twitter()
            ->linkedin()
            ->reddit()
            ->telegram();

        return view('content.dummy', compact('shareComponent'));
    }
    // public function generateThumbnail($videoUrl)
    // {
    //     try {
    //         $ffmpeg = FFMpeg::create([
    //             'ffmpeg.binaries' => config('filesystems.disks.ffmpeg.ffmpeg.binaries'),
    //             'ffprobe.binaries' => config('filesystems.disks.ffmpeg.ffprobe.binaries'),
    //         ]);
    
    //         // Download the remote video to a temporary file (or use an existing storage mechanism)
    //         $tempVideoPath = storage_path('app/temp_video.mp4');
    //         file_put_contents($tempVideoPath, file_get_contents($videoUrl));
    
    //         // Open the temporary video file
    //         $videoFile = $ffmpeg->open($tempVideoPath);
    
    //         // Generate a thumbnail at the 10-second mark (adjust as needed)
    //         $frame = $videoFile->frame(TimeCode::fromSeconds(10));
    
    //         // Save the frame as an image (JPEG) to a temporary file
    //         $tempImagePath = storage_path('app/temp_thumbnail.jpg');
    //         $frame->save($tempImagePath);
    
    //         // Clean up the temporary files
    //         unlink($tempVideoPath);
    
    //         // Create an HTTP response with the image data
    //         $imageData = file_get_contents($tempImagePath);
    //         unlink($tempImagePath); // Remove the temporary image file
    
    //         $response = new Response();
    //         $response->header('Content-Type', 'image/jpeg');
    //         $response->setContent($imageData);
    
    //         return $response;
    //     } catch (\Exception $e) {
    //         // Log the error message
    //         \Log::error('Thumbnail generation error: ' . $e->getMessage());
    //         return response()->json(['error' => 'Thumbnail generation failed'], 500);
    //     }
    // }


    public function add_feed(Request $request)
    {

        $post = new Post();
        $post->title = $request->title ?? '';
        $post->description = $request->description;
        $post->type = $request->type;
        $post->status = $request->status;

        if ($request->has('backgroundId'))
            $post->background_id = $request->backgroundId;

        if ($request->has('userId'))
            $post->user_id = $request->userId;

        if ($request->has('fanpageId'))
            $post->fanpage_id = $request->fanpageId;

        // $post->media = $request->has('media') ? json_encode($request->media) : '{}';

        if ($post->save()) {
            $id = $post->id;
            foreach ($request->media  as $media) {
                $mediaType = $media['type'];
                $mediaGallery = $media['path'];
                $post_gallery = new PostGallery();
                $post_gallery->post_id = $id;
                $post_gallery->media_url = $mediaGallery;
                $post_gallery->media_type = $mediaType;
                $post_gallery->user_id = $request->userId;
                if ($request->has('news_id')) {
                    $post_gallery->news_id = $request->news_id;
                }
                if ($request->has('vote_id')) {
                    $post_gallery->post_id = $request->post_id;
                }
                if ($request->has('history_id')) {
                    $post_gallery->history_id = $request->history_id;
                }
                $post_gallery->save();
            }

            return response()->json(['success' => true, 'message' => 'post successfully added.']);
        } else {
            return response()->json(['success' => false, 'data' => 'Failed to add post.']);
        }
    }

    public function get_first_feed($user_id)
    {
        $post = Post::where('user_id', $user_id)->with(['background', 'user', 'gallery'])->first();
        if (isset($post)) {
            $post->media = json_decode($post->media);
            return response()->json(['success' => true, 'data' => $post]);
        }
    }

    public function get_feed($user_id)
    {
        $posts = Post::with(['background', 'user', 'gallery'])->where('user_id', $user_id)->get();

        if ($posts != '[]')
            foreach ($posts as $post) {
                $post->media = json_decode($post->media);
            }

        return response()->json(['success' => true, 'data' => $posts]);
    }


    public function fetch_feed(Request $request, $id = "")
    {
        // phpinfo();
        // exit();
        $offset = $request->offset;
        $limit = $request->limit;

        $posts = Post::with([
            'background:id,title,image,created_at',
            'user:id,name,image,level',
            'gallery' => function ($query) {
                $query->where('media_type', '!=', 1);
            }
        ])->offset($offset)->limit($limit)->get();
        
        $posts->each(function ($post) {
            $post->gallery = $post->gallery->where('media_type', '!=', 1);
        });
        


        if ($posts->isNotEmpty()) {
            $posts->each(function ($post) use ($id) {
                $post->media = json_decode($post->media);

                if ($id !== "") {
                    $reaction_exist = Reaction::where('user_id', $id)->where('feed_id', $post->id)->first();

                    if ($reaction_exist !== null) {
                        $post->reaction = $reaction_exist;
                    }
                }
            });
        }

        $data = $posts->filter(function ($item) {
            return $item->user !== null;
        });

        $data->map(function ($item){
            $item->like_count = Reaction::where('feed_id', $item->id)->count();

            $item->comments_count = Comment::where('post_id', $item->id)->count();
        });

        $response = ['success' => true, 'data' => $data];

        // if (!$datai->sEmpty()) {
        //     $existPost = Post::find(++$data[sizeof($data) - 1]->id);
        //     if ($existPost == "") {
        //         $response['completed'] = true;
        //     }
        // }

        return response()->json($response);
    }


    // Feed image get

    public function get_feed_bg($id)
    {

        // $post_bg = Post::select('media')->where('user_id', $id)->get();
        $post_bg = PostGallery::select('media_url', 'media_type')->where('user_id', $id)->get();

        if (isset($post_bg)) {

            // Create an empty array to store the converted data
            $convertedDataArray = [];

            // Loop through the array and convert the "media" values
            foreach ($post_bg as $data) {
                if ($data->media_type == 0) {
                    $convertedDataArray[] = $data->media_url;
                }
            }

            $images = array_slice($convertedDataArray, 0, 4);
            return ['success' => true, 'data' => $images];
        }

        return ['success' => false, 'message' => 'No image found..'];
    }

    // Feed get all imge
    public function get_all($id)
    {
        // $post_bg = Post::select('media')->where('user_id', $id)->get();
        $post_bg = PostGallery::select('media_url', 'media_type')->where('user_id', $id)->get();

        if (isset($post_bg)) {

            // Create an empty array to store the converted data
            $convertedDataArray = [];

            // Loop through the array and convert the "media" values
            foreach ($post_bg as $data) {
                if ($data->media_type == 0) {
                    $convertedDataArray[] = $data->media_url;
                }
            }

            return ['success' => true, 'data' => $convertedDataArray];
        }

        return ['success' => false, 'message' => 'No image found..'];
    }

    public function get_feed_background_video($id)
    {
        // $post_video = Post::select('media')->where('user_id', $id)->get();
        $post_video = PostGallery::select('media_url', 'media_type')->where('user_id', $id)->get();

        if (isset($post_video)) {
            // create empty array
            $converteedDataArray = [];

            foreach ($post_video as $data) {
                if ($data->media_type == 1) {
                    $converteedDataArray[] = $data->media_url;
                }
            }

            $videos = array_slice($converteedDataArray, 0, 4);
            return response()->json(['success' => true, 'data' => $videos]);
        }
        return ['error' => false, 'message' => 'No video found .'];
    }

    public function get_all_feed_videos($id)
    {
        // $post_videos = Post::select('media')->where('user_id', $id)->get();
        $post_videos = PostGallery::select('media_url', 'media_type')->where('user_id', $id)->get();

        if (isset($post_videos)) {
            $convertedDataArray = [];
            foreach ($post_videos as $data) {
                if ($data->media_type == 1) {
                    $convertedDataArray[] = $data->media_url;
                }
            }
            return ['success' => true, 'data' => $convertedDataArray];
        }
        return ['success'  => false, 'message' => 'No videos found..'];
    }

    public function get_feed_media($id)
    {
        $post = Post::find($id);
        $new_post = $post->load('gallery');
        return  $new_post;
        if ($post == '')
            return response()->json(['success' => false, 'message' => 'No post found by the id.']);

        $media = json_decode($post->media);

        return response()->json(['success' => true, 'data' => $media]);
    }


    // checking thisssssssssssss.................................................
    public function feed_media_delete(Request $request)
    {

        $feeds = Post::with('gallery')->where('user_id', $request->user_id)->get();

        foreach ($feeds as $feed) {
            $feed->delete();
            foreach ($feed->gallery as $gallery) {
                $gallery->delete();
            }
        }

        return response()->json(['success' => true, 'message' => 'Posts deleted successfully.']);
    }
}
