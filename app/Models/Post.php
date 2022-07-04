<?php

namespace Blog\App\Models;

use Blog\database\Database;

class Post extends Database
{
 
    public $postId;
    public $postTitle;
    public $post;
    public $postAuthor;
    public $datePosted;
    
    function __construct($inpostId=null, $inpostTitle=null, $inPost=null, $inAuthorId=null, $inDatePosted=null)
    {
        if (!empty($inpostId))
        {
            $this->postId = $inpostId;
        }
        if (!empty($inpostTitle))
        {
            $this->postTitle = $inpostTitle;
        }
        if (!empty($inPost))
        {
            $this->post = $inPost;
        }
    
        if (!empty($inDatePosted))
        {
            $splitDate = explode("-", $inDatePosted);
            $this->datePosted = $splitDate[1] . "/" . $splitDate[2] . "/" . $splitDate[0];
        }
    
        if (!empty($inAuthorId))
        {
            $sql = "SELECT first_name, last_name FROM people WHERE postId = " . $inAuthorId;
            $row = $this->connect()->query($sql)->fetch_assoc();
            $this->postAuthor = $row["first_name"] . " " . $row["last_name"];
        }
    }

    function add_post($postTitle, $post, $postAuthor = false) 
    {
        try {
            $sql = "INSERT INTO blog_posts (postTitle,post,postAuthor) VALUES ('$postTitle', '$post', '$postAuthor')";
            $result = $this->connect()->query($sql);

            if ($result->num_rows > 0) {
                return true;
            }
            return false;

        } catch(\Exception $e) {
             echo $e->getMessage();
        }
    }

    function delete_post($postId)
     {
        if (!is_numeric($postId) || empty($postId) || is_null($postId)) {
            return false;
        }
        try {
            $sql = "DELETE FROM posts WHERE postId = '$postId'";
            $result = $this->connect()->query($sql);

            if ($result->num_rows > 0) {
                return true;
            }

            return false;

        } catch(\Exception $e) {
             echo $e->getMessage();
        }
    }

    function get_all_posts() 
    {
        try {
            $sql = "SELECT postId, postTitle, post, datePosted, postAuthor FROM posts ORDER BY postId";
            $result = $this->connect()->query($sql);
            $row = $result->fetch_all();
            return $row;

        } catch(\Exception $e) {
            echo $e->getMessage();
        }
    }

    function get_post_with_id($postId) 
    {
        try {
            $sql = "SELECT postTitle, post, datePosted, postAuthor FROM posts WHERE postId = '$postId'";
            $result = $this->connect()->query($sql);
            $row = $result->fetch_assoc();
            return $row;
        } catch(\Exception $e) {
            echo $e->getMessage();
        }
    }

    function post_exist($postId) 
    {
        try {
            $sql = "SELECT * FROM posts WHERE postId = '$postId'";
            $result = $this->connect()->query($sql);
            $row = $result->fetch_assoc();
            if (!$row) {
                return false;
            }
            return true;

        } catch(\Exception $e) {
            echo $e->getMessage();
        }
    }

    function get_post($postId) 
    {
        try {
            $sql = "SELECT postId, postTitle, post FROM posts WHERE postId = '$postId'";
            $result = $this->connect()->query($sql);
            $row = $result->fetch_assoc();
            return $row;
        } catch(\Exception $e) {
            echo $e->getMessage();
        }
    }

    function update_post($postId, $postTitle) 
    {
        try {
            $sql = "UPDATE posts SET postTitle = '$postTitle', post = '$post' WHERE postId = '$postId'";
            $result = $this->connect()->query($sql);
            if ($result->num_rows > 0) {
                return true;
            }
            return false;
        } catch(\Exception $e) {
             echo $e->getMessage();
        }
    }

    function post_belongs_to_user($postId) 
    {
        try {
            $sql = "SELECT author FROM posts WHERE postId = '$postId'";
            $result = $this->connect()->query($sql);
            $row = $result->fetch_assoc();
            if ($row['author'] == $_SESSION['login']) {
               return true;
            }
            return false;

        } catch(\Exception $e) {
            echo $e->getMessage();
        }
    }

}