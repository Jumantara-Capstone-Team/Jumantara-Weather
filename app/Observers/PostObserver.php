<?php

// App\Observers\PostObserver.php

namespace App\Observers;

use Illuminate\Support\Str;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

// class PostObserver
// {
//     public function created(Post $post)
//     {
//         $this->createNotification($post, 'Post Created');
//     }

//     public function updated(Post $post)
//     {
//         $this->createNotification($post, 'Post Updated');
//     }


//     protected function createNotification(Post $post, $action)
// {
//     // Hasilkan 'slug' yang unik
//     $slug = Str::slug($post->title);

//     // Periksa apakah 'slug' yang dihasilkan sudah ada
//     $count = DB::table('posts')->where('slug', $slug)->count();
//     if ($count > 0) {
//         // Jika 'slug' sudah ada, tambahkan pengidentifikasi unik
//         $slug = Str::slug($post->title) . '-' . uniqid();
//     }

//     $notificationData = [
//         'title' => $action,
//         'body' => "Post dengan ID {$post->id} telah {$action}.",
//         'user_id' => $post->user_id,
//         'slug' => $slug,
//         'selected_country' => $post->selected_country,
//         'author' => $post->author,
//         'created_at' => now(),
//     ];

//     DB::table('posts')->insert($notificationData);
// }
// }
