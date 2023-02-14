<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;
use App\Notifications\QueueNotification;
use App\Models\Queue;
use App\Models\User;
use Carbon\Carbon;

class SentReminderNotifiactions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reminder:notification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sent a notification to users';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Get all queue


        $reminders = Queue::where('status','รอ')->get();

        // Group notifications
        $data = [];
        foreach ( $reminders as $reminder) {
            if (Carbon::now('Asia/Bangkok')->diffInMinutes($reminder->start) > 10 && Carbon::now('Asia/Bangkok')->diffInMinutes($reminder->start) < 70) {
                $data[$reminder->user_id][] = $reminder->toArray();
            }
        }
        // dd($data);

        foreach ($data as $userId => $reminders) {
            $user = User::find($userId);
            Notification::send($user, new QueueNotification('กรุณาเตรียมตัวอีก 10 นาทีจะถึงคิวของคุณ',$userId));
        }

        // Send notification
    }
    function sendNotification($userId,$reminders) {

    }
}
