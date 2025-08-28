<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class InventoryCreatedJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
        \Mail::raw('New inventory has been created.', function ($message) {
            $message->to('admin@example.com')
                    ->subject('New Inventory Created');
        });
    }
}
