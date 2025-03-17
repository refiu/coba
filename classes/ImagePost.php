<?php 

include_once '../classes/Post.php';

class ImagePost extends Post {
    public function getContent() {
        return "<img src='" . parent::getContent() . "' alt='Image Post'>"; // Override untuk menampilkan gambar
    }   
}

?>