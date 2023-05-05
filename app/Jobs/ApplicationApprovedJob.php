<?php

namespace App\Jobs;

use App\Mail\ApplicationApprovedMail;
use App\Models\Application;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ApplicationApprovedJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public Application $application
    ) {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $link = generateApplicationLink();
        $this->application->update([
            'link' => $link
        ]);
        Mail::to($this->application->email)->send(new ApplicationApprovedMail($this->application, $link));
    }
}
