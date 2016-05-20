<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Mail\Mailer;
use Mail;

class SendOrderEmail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    public $email;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    
    public function handle()
    {
        
        Mail::send('emails.order', ['email' => $this->email], function ($m) {
            
            // $m->from('shubhamgahlot@instaveritas.com', 'Store App');

            $m->to($this->email)->subject('Order Successfull');
        });

    }
}
