<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // policy 
        $this->authorize("viewAny", Job::class);

        $filters = $request->only(
            "search", 
            "min_salary", 
            "max_salary", 
            "experience", 
            "category"
        );

        $jobs = Job::with("employer")->latest()->filter($filters)->latest()->get();

        return view(
            "job.index", 
            [
                "jobs" => $jobs
            ]
        );
    }


    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        $this->authorize("view", $job); // policy with one paramater

        return view(
            "job.show", 
            [
                "job" => $job->load("employer.jobs")
            ]
        ); // load all the jobs from this employer relationship but also the employer
    }

}
