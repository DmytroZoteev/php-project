<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Post</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <h1>Create New Post</h1>
    <form action="/post/store" method="POST">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required><br>
        <label for="content">Content:</label>
        <textarea name="content" id="content" required></textarea><br>
        <button type="submit">Submit</button>
    </form>
    <a href="/">Back to Blog</a>
</body>
</html>
