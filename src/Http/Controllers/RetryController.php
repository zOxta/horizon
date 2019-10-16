<?php

namespace Laravel\Horizon\Http\Controllers;

use Laravel\Horizon\Jobs\RetryFailedJob;
use Laravel\Horizon\Jobs\RetryPendingJob;

class RetryController extends Controller
{
    /**
     * Retry a failed job.
     *
     * @param  string  $id
     * @return void
     */
    public function store($id)
    {
        if (request()->job_status == 'pending') {
            dispatch(new RetryPendingJob($id));
        } else {
            dispatch(new RetryFailedJob($id));
        }
    }
}
