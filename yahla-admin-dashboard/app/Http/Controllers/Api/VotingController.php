<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Voting;
use App\Models\VotingReaction;

class VotingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['Voting' => Voting::get()], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'category_id' => 'required',
            'description' => 'required'
        ]);

        $imagePath  = $request->audio;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('/images/voting/', 'public');
            $imagePath = $path;
        }
        $voting = Voting::create([
            'name' => $request->name,
            'image' => $imagePath,
            'category_id' => $request->category_id,
            'description' => $request->description,
        ]);

        return response()->json([
            "success" => true,
            "message" => "Voting successfully created.",
            "data" => $voting
        ], 200);
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vote = Voting::find($id);
        $vote->name = $request->name ?? $vote->name;
        $vote->category_id = $request->category_id ?? $vote->category_id;
        $vote->description = $request->description ?? $vote->description;

        if ($request->hasFile('image')) {
            if (isset($vote->banner)) {
                $image_path = public_path('storage/' . $vote->banner);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
                $path = $request->file('image')->store('/images/voting', 'public');
                $vote->banner = $path;
            }
        }
        if ($vote->update()) {
            return response()->json('Voting Updated Successfully', 200);
        } else {
            return response()->json('Failed to updated voting', 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vote = Voting::find($id);
        if ($vote->banner) {
            $image_path = public_path('storage/' . $vote->banner);
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }
        if ($vote->delete($vote->id)) {
            return response()->json('Voting Deleted Successfully', 200);
        } else {
            return response()->json('Failed to delete vote', 400);
        }
    }

    public function get_cover($id = null)
    {
        $voting = Voting::select('id', 'name', 'category_id', 'description', 'status')->with('gallery')->orderBy('created_at', 'desc')->take(1)->get();

        if (sizeof($voting) > 0) {
            // $voting[0]->banner = url('/') . '/storage/' . $voting[0]->banner;

            $voting_reaction = VotingReaction::where('user_id', $id)->where('vote_id', $voting[0]->id)->first();

            $voting[0]->user_reaction = $voting_reaction;
        }

        return response()->json(['success' => true, 'data' => $voting]);
    }

    public function fetch($id = null)
    {
        $voting = Voting::select('id', 'name', 'category_id', 'description', 'status')->orderBy('created_at', 'desc')->take(5)->with(['voting_category', 'gallery'])->get();
        foreach ($voting as $item) {
            // $item->banner = url('/') . '/storage/' . $item->banner;

            $voting_reaction = VotingReaction::where('user_id', $id)->where('vote_id', $item->id)->first();

            $item->user_reaction = $voting_reaction;
        }

        return response()->json(['success' => true, 'data' => $voting]);
    }

    public function fetch_all($id = null)
    {
        $voting = Voting::select('id', 'description', 'name', 'category_id', 'status')->orderBy('created_at', 'desc')->with(['voting_category', 'gallery'])->get();
        foreach ($voting as $item) {
            // $item->banner = url('/') . '/storage/' . $item->banner;

            $voting_reaction = VotingReaction::where('user_id', $id)->where('vote_id', $item->id)->first();

            $item->user_reaction = $voting_reaction;
        }

        return response()->json(['success' => true, 'data' => $voting]);
    }

    public function get_details($id, $user_id = null)
    {
        $voting = Voting::with(['voting_category', 'gallery'])->find($id);

        if ($voting != "") {
            // $voting->banner = url('/') . '/storage/' . $voting->banner;

            $voting_reaction = VotingReaction::where('user_id', $user_id)->where('vote_id', $voting->id)->first();

            $voting->user_reaction = $voting_reaction;
        }

        return response()->json(['success' => true, 'data' => $voting]);
    }

    public function store_reaction(Request $request)
    {
        $credentails = $request->validate([
            'user_id' => 'required',
            'vote_id' => 'required',
            'type' => 'required',
        ]);

        $existing_voting = VotingReaction::where('user_id', $request->user_id)->where('vote_id', $request->vote_id)->first();

        if ($existing_voting != "") {
            if ($existing_voting->type == $request->type) {
                $existing_voting->delete();

                return response()->json(['success' => true, 'message' => 'Vote removed.']);
            } else {
                $existing_voting->type = $request->type;
                $existing_voting->save();

                return response()->json(['success' => true, 'message' => 'Vote updated.']);
            }
        }

        VotingReaction::create($credentails);

        return response()->json(['success' => true, 'message' => 'Vote saved.']);
    }

    public function stats($id)
    {
        $users = VotingReaction::where('vote_id', $id)->with('user')->get();

        $ages = [];
        $genders = [];

        foreach ($users as $votingReaction) {
            $user = $votingReaction->user;

            $dob = $user->dob;

            $age = now()->diffInYears($dob);

            $ages[] = $age;
            $genders[] = $user->gender;
        }

        $ageGroupCounts = [
            '18-24' => 0,
            '25-32' => 0,
            '33-39' => 0,
            '40+'   => 0,
        ];

        $genderCounts = [
            '18-24' => [
                'male'   => 0,
                'female' => 0,
            ],
            '25-32' => [
                'male'   => 0,
                'female' => 0,
            ],
            '33-39' => [
                'male'   => 0,
                'female' => 0,
            ],
            '40+'   => [
                'male'   => 0,
                'female' => 0,
            ],
        ];

        $ageGroups = [
            '18-24' => [18, 24],
            '25-32' => [25, 32],
            '33-39' => [33, 39],
            '40+'   => [40, PHP_INT_MAX],
        ];

        foreach ($ages as $key => $age) {
            foreach ($ageGroups as $group => $range) {
                if ($age >= $range[0] && $age <= $range[1]) {
                    $ageGroupCounts[$group]++;

                    $gender = $genders[$key];
                    $genderCounts[$group][$gender]++;

                    break;
                }
            }
        }

        $result = [];

        foreach ($ageGroupCounts as $group => $count) {
            $ageGroupPercentage = count($ages) > 0 ? ($count / count($ages)) * 100 : 0;

            $result['age_group_percentages'][$group] = [
                'total_percentage' => number_format($ageGroupPercentage, 2) . '%',
                'male'            => $count > 0 ? number_format(($genderCounts[$group]['male'] / $count) * 100, 2) . '%' : '0%',
                'female'          => $count > 0 ? number_format(($genderCounts[$group]['female'] / $count) * 100, 2) . '%' : '0%',
            ];
        }

        $types = VotingReaction::where('vote_id', $id)
            ->pluck('type');

        $typeCounts = [
            '0' => 0,
            '1' => 0,
            '2' => 0,
        ];

        foreach ($types as $type) {
            if (array_key_exists($type, $typeCounts)) {
                $typeCounts[$type]++;
            }
        }

        $totalVotes = count($types);

        $typePercentages = [];

        if ($totalVotes > 0) {
            foreach ($typeCounts as $value => $count) {
                $percentage = ($count / $totalVotes) * 100;
                $typePercentages[$value] = number_format($percentage, 2);
            }
        } else {
            $typePercentages = [0, 0, 0];
        }

        $total_reactiions = VotingReaction::where('vote_id', $id)->count();

        $negative_reactions = VotingReaction::where('vote_id', $id)->where('type', 0)->count();
        $normal_reactions = VotingReaction::where('vote_id', $id)->where('type', 1)->count();
        $positive_reactions = VotingReaction::where('vote_id', $id)->where('type', 2)->count();

        return response()->json([
            'success' => true,
            'data' => [
                'age_stats' => $result,
                'type_stats' => $typePercentages,
                'total' => $total_reactiions,
                'negative' => $negative_reactions,
                'normal' => $normal_reactions,
                'positive' => $positive_reactions
            ]
        ]);
    }
}

// 18 - 24
// 25 - 32
// 33 - 39
// 40+