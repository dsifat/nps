<?php
namespace App\Jobs;
use App\Mail\UserCreatedAgentMail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;
use Mail;
class SendAgentCreationEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $details, $password, $name;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($details, $name, $password)
    {
        $this->details = $details;
        $this->name = $name;
        $this->password = $password;
    }
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
//        dd($this->details['email']);
        Log::debug($this->name .'   '. $this->password);
        $email = new UserCreatedAgentMail($this->name, $this->password);
        Mail::to($this->details['email'])->send($email);

    }
}
