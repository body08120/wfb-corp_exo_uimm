<?php
require_once('src/model/classes/Connect.php');
require_once('src/model/classes/User.php');

class Article
{
    private int $id_article;

    private string $title;

    private string $enunciate;

    private string $intro;

    private string $p1;

    private string $p2;

    private string $p3;

    private string $conclusion;

    private string $date;

    private int $id_category_article;

    private int $id_user;

    private string $image;

    private string $category_article;

    public function __construct()
    {

    }

    public function getIdArticle(): int
    {
        return $this->id_article;
    }

    public function setIdArticle(int $id_article)
    {
        $this->id_article = $id_article;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getEnunciate(): string
    {
        return $this->enunciate;
    }

    public function setEnunciate(string $enunciate)
    {
        $this->enunciate = $enunciate;
    }

    public function getIntro(): string
    {
        return $this->intro;
    }

    public function setIntro(string $intro)
    {
        $this->intro = $intro;
    }

    public function getP1(): string
    {
        return $this->p1;
    }

    public function setP1(string $p1)
    {
        $this->p1 = $p1;
    }

    public function getP2(): string
    {
        return $this->p2;
    }

    public function setP2(string $p2)
    {
        $this->p2 = $p2;
    }

    public function getP3(): string
    {
        return $this->p3;
    }

    public function setP3(string $p3)
    {
        $this->p3 = $p3;
    }

    public function getConclusion(): string
    {
        return $this->conclusion;
    }

    public function setConclusion(string $conclusion)
    {
        $this->conclusion = $conclusion;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate(string $date)
    {
        $this->date = $date;
    }

    public function getIdCategoryArticle(): int
    {
        return $this->id_category_article;
    }

    public function setIdCategoryArticle(int $id_category_article)
    {
        $this->id_category_article = $id_category_article;
    }

    public function getIdUser(): int
    {
        return $this->id_user;
    }

    public function setIdUser(int $id_user)
    {
        $this->id_user = $id_user;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image)
    {
        $this->image = $image;
    }

    public function getCategoryArticle(): string
    {
        return $this->category_article;
    }

    public function setCategoryArticle(string $category_article)
    {
        $this->category_article = $category_article;
    }
}

class ArticleRepository extends Connect
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getArticles()
    {
        $sql = "SELECT a.*, ca.category, i.image_head, i.image_content, u.name AS user_name, u.firstname AS user_firstname
                FROM articles AS a 
                LEFT JOIN users AS u ON u.id_user = a.id_user
                LEFT JOIN images AS i ON a.id_article = i.id_article
                LEFT JOIN category_articles AS ca ON a.id_category_article = ca.id_category_article
                ORDER BY a.date DESC";
        $stmt = $this->getDb()->prepare($sql);
        $stmt->execute();
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $posts = [];

        if ($articles !== null) {
            foreach ($articles as $post) {
                $article = new Article();
                $article->setIdArticle($post['id_article']);
                $article->setTitle($post['title']);
                $article->setEnunciate($post['enunciate']);
                $article->setIntro($post['intro']);
                $article->setP1($post['p1']);
                $article->setP2($post['p2']);
                $article->setP3($post['p3']);
                $article->setConclusion($post['conclusion']);
                $article->setDate($post['date']);
                $article->setIdCategoryArticle($post['id_category_article']);
                $article->setIdUser($post['id_user']);
                $article->setImage($post['image_head']);
                $article->setCategoryArticle($post['category']);
                $posts[] = $article;
            }
        }

        return $posts;
    }

    public function getArticlesByCategory(int $category, $limit = null)
    {
        $sql = "SELECT a.*, i.*, u.firstname, u.name, ca.category FROM articles AS a
                LEFT JOIN users AS u ON u.id_user = a.id_user
                LEFT JOIN images AS i ON a.id_article = i.id_article
                LEFT JOIN category_articles AS ca ON a.id_category_article = ca.id_category_article
                WHERE ca.id_category_article = :category
                ORDER BY a.date DESC";

    if ($limit !== null) {
        $sql .= " LIMIT :limit";
    }

    $stmt = $this->getDb()->prepare($sql);
    $stmt->bindParam(':category', $category);

    if ($limit !== null) {
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
    }

    $stmt->execute();
    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $posts = [];

        if ($articles !== null) {
            foreach ($articles as $post) {
                $article = new Article();
                $article->setIdArticle($post['id_article']);
                $article->setTitle($post['title']);
                $article->setEnunciate($post['enunciate']);
                $article->setIntro($post['intro']);
                $article->setP1($post['p1']);
                $article->setP2($post['p2']);
                $article->setP3($post['p3']);
                $article->setConclusion($post['conclusion']);
                $article->setDate($post['date']);
                $article->setIdCategoryArticle($post['id_category_article']);
                $article->setIdUser($post['id_user']);
                $article->setImage($post['image_head']);
                $article->setCategoryArticle($post['category']);
                $posts[] = $article;
            }
        }

        // var_dump($posts);

        return $posts;

    }
}