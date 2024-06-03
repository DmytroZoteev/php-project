<?php

require_once 'core/View.php';

class PostController {
    private $posts = [
        ['id' => 1, 'title' => 'First Post', 'content' => 'This is the content of the first post.', 'created_at' => '2023-01-01 00:00:00'],
        ['id' => 2, 'title' => 'Second Post', 'content' => 'This is the content of the second post.', 'created_at' => '2023-01-02 00:00:00'],
    ];

    public function index() {
        $posts = $this->posts;
        View::render('post/index', ['posts' => $posts]);
    }

    public function create() {
        View::render('post/create');
    }

    public function store() {
        // Симуляція збереження даних
        header('Location: /');
    }

    public function edit() {
        $id = $_GET['id'];
        $post = $this->findPostById($id);
        View::render('post/edit', ['post' => $post]);
    }

    public function update() {
        // Симуляція оновлення даних
        header('Location: /');
    }

    public function delete() {
        // Симуляція видалення даних
        header('Location: /');
    }

    public function show() {
        $id = $_GET['id'];
        $post = $this->findPostById($id);
        View::render('post/show', ['post' => $post]);
    }

    private function findPostById($id) {
        foreach ($this->posts as $post) {
            if ($post['id'] == $id) {
                return $post;
            }
        }
        return null;
    }
}
?>
