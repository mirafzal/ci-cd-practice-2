<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Storage;

class UploadSomeFile implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public $file_name="hello.txt", public $file_content='123321')
    {

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Storage::put("mylaraveluploadfolder/{$this->file_name}", "{$this->file_content}");
    }
}
