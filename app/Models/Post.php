<?php

namespace Blog\App\Models;

use Blog\database\Connection;
use Exception;

class Post extends Connection
{    
    public function add_post(string $postTitle, string $postBody,int $postAuthorId)
    {
        try {
            $sql = "INSERT INTO posts (posts_title, posts_body, user_id)
                     VALUES ('$postTitle', '$postBody', '$postAuthorId')";
            $result = $this->connect()->query($sql);

            if ($result->num_rows > 0) {
                return true;
            }
            return false;
        } catch(Exception $e) {
             echo $e->getMessage();
        }
    }

    public function view_post()
    {
        try {
            $sql = "SELECT  * from posts";
            $result = $this->connect()->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<h1>{$row['posts_title']}</h1>"
                         ."<p>{$row['posts_body']}</p>"
                         ."<span>Created_At: {$row['created_at']}</span>"
                         ." " . "<span>Updated_At{$row['updated_at']}</span>";
                }
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    // function delete_post(int $postId)
    //  {
    //     try {
    //         if (!empty($postId)) {
    //             $sql = "DELETE FROM posts WHERE postId = '$postId'";
    //             $result = $this->connect()->query($sql);
    
    //             if ($result->num_rows > 0) {
    //                 return true;
    //             }
    //             return false;
    //         }
    //     } catch(Exception $e) {
    //          echo $e->getMessage();
    //     }
    // }

    // function get_all_posts() 
    // {
    //     try {
    //         $sql = "SELECT postId, postTitle, post, datePosted, postAuthor FROM posts ORDER BY postId";
    //         $result = $this->connect()->query($sql);
    //         $row = $result->fetch_all();
    //         return $row;

    //     } catch(Exception $e) {
    //         echo $e->getMessage();
    //     }
    // }

    // function get_post_with_id($postId) 
    // {
    //     try {
    //         $sql = "SELECT postTitle, post, datePosted, postAuthor FROM posts WHERE postId = '$postId'";
    //         $result = $this->connect()->query($sql);
    //         $row = $result->fetch_assoc();
    //         return $row;
    //     } catch(Exception $e) {
    //         echo $e->getMessage();
    //     }
    // }

    // function post_exist($postId) 
    // {
    //     try {
    //         $sql = "SELECT * FROM posts WHERE postId = '$postId'";
    //         $result = $this->connect()->query($sql);
    //         $row = $result->fetch_assoc();
    //         if (!$row) {
    //             return false;
    //         }
    //         return true;

    //     } catch(Exception $e) {
    //         echo $e->getMessage();
    //     }
    // }

    // function get_post($postId) 
    // {
    //     try {
    //         $sql = "SELECT postId, postTitle, post FROM posts WHERE postId = '$postId'";
    //         $result = $this->connect()->query($sql);
    //         $row = $result->fetch_assoc();
    //         return $row;
    //     } catch(Exception $e) {
    //         echo $e->getMessage();
    //     }
    // }

    // function update_post($postId, $postTitle, $post) 
    // {
    //     try {
    //         $sql = "UPDATE posts SET postTitle = '$postTitle', post = '$post' WHERE postId = '$postId'";
    //         $result = $this->connect()->query($sql);
    //         if ($result->num_rows > 0) {
    //             return true;
    //         }
    //         return false;
    //     } catch(Exception $e) {
    //          echo $e->getMessage();
    //     }
    // }

    // function post_belongs_to_user($postId) 
    // {
    //     try {
    //         $sql = "SELECT author FROM posts WHERE postId = '$postId'";
    //         $result = $this->connect()->query($sql);
    //         $row = $result->fetch_assoc();
    //         if ($row['author'] == $_SESSION['login']) {
    //            return true;
    //         }
    //         return false;

    //     } catch(Exception $e) {
    //         echo $e->getMessage();
    //     }
    // }
}
