<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Http\Requests\UpdateRequest;
use App\Http\Resources\V1\SkillCollection;
use App\Http\Resources\V1\SkillResource;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    function index()
    {
        return new SkillCollection(Skill::orderBy('created_at', 'DESC')->paginate(10));
    }

    function store(StoreRequest $request)
    {
        Skill::create($request->validated());

        return response()->json([
            "Skill Successfully Store!",
        ]);
    }

    function show($id)
    {
        $skill = Skill::findOrFail(intval($id));
        return new SkillResource($skill);
    }

    function update(UpdateRequest $request, $id)
    {
        $skill = Skill::findOrFail(intval($id));

        $skill->update($request->validated());


        return response()->json([
            "Skill Updated Successfully!",
        ]);
    }

    function destroy($id)
    {
        $skill = Skill::findOrFail(intval($id));
        $skill->delete();

        return response()->json([
            "Skill deleted Successfully!"
        ]);
    }
}
