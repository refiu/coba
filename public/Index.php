<?php
include '../classes/User.php';
include '../classes/Post.php';
include '../classes/Admin.php';
include '../classes/Quest.php';
include '../classes/ImagePost.php';
include '../classes/videoPost.php';

$userObj = new User();
$adminObj = new Admin();
$questObj = new Quest();

$userObj  -> setUserData(1, 'jhon doe', 'jhon@example.com');
$adminObj -> setUserData(2, 'jhon doe', 'adm@example.com');
$questObj -> setUserData(3, 'jhon doe', 'admin@example.com');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna dan Postingan</title>
</head>
<body>
    <h2>Daftar Pengguna dan Postingan</h2>

    <h3>Pengguna Biasa:</h3>
    <p><?php echo $userObj->getName(); ?> (<?php echo $userObj->getEmail(); ?>)</p>

    <h3>Admin:</h3>
    <p><?php echo $adminObj->getName(); ?> (<?php echo $adminObj->getEmail(); ?>)</p>

    <h3>Guest:</h3>
    <p><?php echo $questObj->getName(); ?> (<?php echo $questObj->getEmail(); ?>)</p>

    <!-- Menampilkan Postingan -->
    <?php
    $postObj = new Post();
    $posts = $postObj->getPostsByUser(1);
    while ($postRow = $posts->fetch_assoc()) {
        $postObj->setPostData($postRow['id'], $postRow['user_id'], $postRow['title'], $postRow['content']);
        echo "<strong>{$postObj->getTitle()}</strong>: {$postObj->getContent()}<br>";
    }
    ?>

    <!-- Menampilkan Postingan Khusus -->
    <h3>Postingan Khusus:</h3>
    <?php
    $imagePost = new ImagePost();
    $imagePost->setPostData(1, 1, 'Image Post', 'https://www.ilovepdf.com/img/ilovepdf/social/en-US/imagepdf.png' );
    $videoPost = new VideoPost();
    $videoPost->setPostData(2, 1, 'Video Post', 'https://www.youtube.com/watch?v=gL86CR7JqqQ');
    ?>

    <p><?php echo $imagePost->getTitle(); ?>: <?php echo $imagePost->getContent(); ?></p>
    <p><?php echo $videoPost->getTitle(); ?>: <?php echo $videoPost->getContent(); ?></p>

</body>
</html>