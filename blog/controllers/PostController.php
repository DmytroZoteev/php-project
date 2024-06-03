<?php

require_once 'models/Post.php';
require_once 'core/View.php';

class PostController {
    public function index() {
        $posts = Post::all();
        View::render('post/index', ['posts' => $posts]);
    }

    public function create() {
        View::render('post/create');
    }

    public function store() {
        $title = $_POST['title'];
        $content = $_POST['content'];
        Post::create($title, $content);
        header('Location: /');
    }

    public function edit() {
        $id = $_GET['id'];
        $post = Post::find($id);
        View::render('post/edit', ['post' => $post]);
    }

    public function update() {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        Post::update($id, $title, $content);
        header('Location: /');
    }

    public function delete() {
        $id = $_GET['id'];
        Post::delete($id);
        header('Location: /');
    }

    public function show() {
        $id = $_GET['id'];
        $post = Post::find($id);
        View::render('post/show', ['post' => $post]);
    }
}
?>
