<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\User;
use App\Models\FlaggedUser;
use Illuminate\Http\Request;
use App\Models\AnimationEmoji;
use App\Models\BackgroundFeed;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show = "all";
        if (request()->show)
            $show = request()->show;
        
        switch ($show) {
            case "all":
                $posts = Post::with('gallery')->orderBy("updated_at", "desc")->get();
                $animated_emoji =[];
                break;
            case "fanpage":
                $posts = Post::with('gallery')->orderBy("updated_at", "desc")->get();
                $animated_emoji=[];
                break;
            case "reported":
                $posts = Post::whereExists(function ($query) {
                    $query->select(DB::raw(1))
                        ->from('reports')
                        ->whereColumn('reports.reported_post_id', 'posts.id')
                        ->where('status', 0);
                })->orderBy("posts.updated_at", "desc")->get();
                $animated_emoji=[];
                break;
            case "admin":
                $posts = Post::where("user_id", null)->orderBy("updated_at", "desc")->get();
                $animated_emoji=[];
                break;
            case "background":
                $background_post = BackgroundFeed::get();
                $posts =[];
                $animated_emoji=[];
                break; 
            case "animated" :
                $animated_emoji = AnimationEmoji::get();
                $posts =[];
                
        }
        $allPosts = $posts ;
        if ($show !== "all")
            $allPosts = Post::orderBy("updated_at", "desc")->get();
        
        $totalPosts = $allPosts->count();
        $totalUserPosts = $allPosts->filter(function ($post) {
            return $post->user_id !== null;
        })->count();
        $totalAdminPosts = $allPosts->filter(function ($post) {
            return $post->user_id === null;
        })->count();

        $background_post = BackgroundFeed::get();
        $animated = AnimationEmoji::get();

        return view('content.posts.index', compact("posts", "totalPosts", "totalUserPosts", "totalAdminPosts" , "background_post" , "show" , "animated_emoji"));
    }
    
    
    
     public function indextwo()
    {
        $show = "all";
        if (request()->show)
            $show = request()->show;
        
        switch ($show) {
            case "all":
                $posts = Post::with('gallery')->orderBy("updated_at", "desc")->get();
                $animated_emoji =[];
                break;
            case "fanpage":
                $posts = Post::with('gallery')->orderBy("updated_at", "desc")->get();
                $animated_emoji=[];
                break;
            case "reported":
                $posts = Post::whereExists(function ($query) {
                    $query->select(DB::raw(1))
                        ->from('reports')
                        ->whereColumn('reports.reported_post_id', 'posts.id')
                        ->where('status', 0);
                })->orderBy("posts.updated_at", "desc")->get();
                $animated_emoji=[];
                break;
            case "admin":
                $posts = Post::where("user_id", null)->orderBy("updated_at", "desc")->get();
                $animated_emoji=[];
                break;
            case "background":
                $background_post = BackgroundFeed::get();
                $posts =[];
                $animated_emoji=[];
                break; 
            case "animated" :
                $animated_emoji = AnimationEmoji::get();
                $posts =[];
                
        }
        $allPosts = $posts ;
        if ($show !== "all")
            $allPosts = Post::orderBy("updated_at", "desc")->get();
        
        $totalPosts = $allPosts->count();
        $totalUserPosts = $allPosts->filter(function ($post) {
            return $post->user_id !== null;
        })->count();
        $totalAdminPosts = $allPosts->filter(function ($post) {
            return $post->user_id === null;
        })->count();

        $background_post = BackgroundFeed::get();
        $animated = AnimationEmoji::get();

        return view('content.posts.indextwo', compact("posts", "totalPosts", "totalUserPosts", "totalAdminPosts" , "background_post" , "show" , "animated_emoji"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("content.posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $validated = $request->validated();

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->image->store("/posts", "public");
            $validated["image"] = $imagePath;
        }

        $post = Post::create($validated);

        return back()->with("success", "Post successfully created.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view("content.posts.edit", compact("post"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id               
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, $id)
    {
        $validated = $request->validated();

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->image->store("/posts", "public");
            $validated["image"] = $imagePath;
        }

        $post = Post::find($id);
        $post->fill($validated);
        $post->save();

        return back()->with("success", "Post successfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        // Delete Image
        if ($post->image)
            Storage::delete($post->image);

        $post->delete();

        return back()->with("success", "Post successfully deleted.");
    }

    public function destroyAndFlagUser($id, $user_id)
    {
        $post = Post::find($id);

        // Delete Image
        if ($post->image)
            Storage::delete($post->image);

        $post->delete();

        $flaggedUser = FlaggedUser::where('user_id', $user_id)->first();
        if ($flaggedUser) {
            return back()->with("success", "Post deleted. User already flagged.");
        }

        $flaggedUser = FlaggedUser::create([
            "user_id" => $user_id,
            "reason" => "Flagged by admin for inappropriate post."
        ]);

        return back()->with("success", "Post deleted and user flagged.");
    }

    public function destroyAndBlockUser($id, $user_id)
    {
        
        $post = Post::find($id);

        // Delete Image
        if ($post->image)
            Storage::delete($post->image);

        $post->delete();

        $user = User::find($user_id);
        $user->status = 0;
        $user->save();

        return back()->with("success", "Post deleted and user blocked.");
    }

    public function destroyAndRemoveUser($user_id)
    {
        $posts = Post::where("user_id", $user_id)->get();
        $posts->map(function ($post) {
            // Delete Image
            if ($post->image)
                Storage::delete($post->image);
            $post->delete();
        });

        $user = User::find($user_id);
        $user->delete();

        return back()->with("success", "User account successfully removed.");
    }
}
