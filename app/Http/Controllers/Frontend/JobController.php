<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\JobRequest;
use App\Models\Block;
use App\Models\JobApply;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index($id)
    {
        $job = Block::findOrFail($id);
        $relatedJobs = Block::where('type', Block::TYPE_JOBS)->where('id', '!=', $job->id)->get();
        return view('frontend.jobs.index', compact('job', 'relatedJobs'));
    }

    public function store(JobRequest $request, $id)
    {
        $data = $request->validated();
        $data['block_id'] = $id;
        JobApply::create($data);
        toast(__('common.added_successfully'),'success','top-right');
        return redirect()->back();
    }
}
