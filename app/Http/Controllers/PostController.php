<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //



    
    public function createPost()
    {
        $user = User::find(3); // Giả sử người dùng có ID là 1

        if ($user) {
            $user->posts()->create([
                'title' => 'My First Post',
                'content' => 'This is the content of my first post.'
            ]);

            return "Post created successfully!";
        } else {
            return "User not found.";
        }
    }
}
