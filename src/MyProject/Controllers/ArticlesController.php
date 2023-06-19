<?php

namespace MyProject\Controllers;

use MyProject\Services\Db;
use MyProject\View\View;

class ArticlesController
{
    private $view;

    private $db;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
        $this->db = new Db();
    }
    public function view(int $articleId)
    {
        $article = $this->db->query("SELECT * FROM `articles` WHERE id = $articleId;");

        if($article === []){
            $this->view->renderHtml('errors/404.php', [], 404);
            return;
        }
        $authorId = $article[0]["author_id"];
        $author = $this->db->query("SELECT * FROM users WHERE id = $articleId");

        $this->view->renderHtml('articles/view.php', ['article' => $article[0], 'title' => 'Article', 'author' => $author[0]]);


    }
}