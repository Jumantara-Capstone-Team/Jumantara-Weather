<?php

// App\Observers\PostObserver.php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostObserver
{
    public function created(Post $post)
    {
        $this->createNotification($post, 'Post Created');
    }

    public function updated(Post $post)
    {
        $this->createNotification($post, 'Post Updated');
    }

    protected function createNotification(Post $post, $action)
    {
        // Add logic to create admin notification
        $notificationData = [
            'title' => $action,
            'body' => "Post with ID {$post->id} has been {$action}.",
            'post_id' => $post->id,
            'created_at' => now(),
        ];

        DB::table('info-cuaca')->insert($notificationData);
    }
}
