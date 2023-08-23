<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Jorenvh\Share\Share;  //pkg installed using command:  composer require jorenvanhocht/laravel-share
                          // publish provider using command: php artisan vendor:publish --provider="Jorenvh\Share\Providers\ShareServiceProvider"

class SiteController extends Controller
{
    public function sharePosts()
    {
        $shareButtons = \Share::page(
            'https://onlinewebtutorblog.com/',
            'What you are writing, just share to world to learn!!',
        )
            ->facebook()
            ->twitter()
            ->linkedin()
            ->telegram()
            ->whatsapp()
            ->reddit();

        $posts = Post::get();

        return view("share-post", compact('shareButtons', 'posts'));
    }
}
