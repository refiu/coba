<?php 

include_once '../classes/Post.php';

class VideoPost extends Post {
    public function getContent() {
        return "<video src='" . parent::getContent() . "' controls></video>"; // Override untuk menampilkan video
    }
}

?>