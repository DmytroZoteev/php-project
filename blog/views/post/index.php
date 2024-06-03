<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
</head>
<body>
    <h1>Blog Posts</h1>
    <a href="/post/create">Create New Post</a>
    <ul>
        <?php foreach ($posts as $post): ?>
            <li>
                <a href="/post/show?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
                <a href="/post/edit?id=<?= $post['id'] ?>">Edit</a>
                <a href="/post/delete?id=<?= $post['id'] ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>