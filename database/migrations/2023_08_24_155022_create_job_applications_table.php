<?php

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();

            // relationship to the user 
            $table->foreignIdFor(User::class)->constrained();
            // relationship to a job 
            $table->foreignIdFor(Job::class)->constrained();
                // ->onDelete("cascade");

            $table->unsignedInteger("expected_salary");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};