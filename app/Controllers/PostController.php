<?php

namespace Blog\App\Controllers;

use Blog\App\Models\Post;
use Exception;

class PostController 
{
    public function viewPosts()
    {
        try {
            $post = new Post();
            $post->view_post();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}