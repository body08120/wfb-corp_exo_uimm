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

    private Datetime $date;

    private int $id_category_article;

    private int $id_user;

    public function __construct()
    {

    }

    public function getIdArticle(): int
    {
        return $this->id_article;
    }

    public function setIdArticle(int $id_article): Article
    {
        $this->id_article = $id_article;
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): Article
    {
        $this->title = $title;
        return $this;
    }

    public function getEnunciate(): string
    {
        return $this->enunciate;
    }

    public function setEnunciate(string $enunciate): Article
    {
        $this->enunciate = $enunciate;
        return $this;
    }

    public function getIntro(): string
    {
        return $this->intro;
    }

    public function setIntro(string $intro): Article
    {
        $this->intro = $intro;
        return $this;
    }

    public function getP1(): string
    {
        return $this->p1;
    }

    public function setP1(string $p1): Article
    {
        $this->p1 = $p1;
        return $this;
    }

    public function getP2(): string
    {
        return $this->p2;
    }

    public function setP2(string $p2): Article
    {
        $this->p2 = $p2;
        return $this;
    }

    public function getP3(): string
    {
        return $this->p3;
    }

    public function setP3(string $p3): Article
    {
        $this->p3 = $p3;
        return $this;
    }

    public function getConclusion(): string
    {
        return $this->conclusion;
    }

    public function setConclusion(string $conclusion): Article
    {
        $this->conclusion = $conclusion;
        return $this;
    }

    public function getDate(): Datetime
    {
        return $this->date;
    }

    public function setDate(Datetime $date): Article
    {
        $this->date = $date;
        return $this;
    }

    public function getIdCategoryArticle(): int
    {
        return $this->id_category_article;
    }

    public function setIdCategoryArticle(int $id_category_article): Article
    {
        $this->id_category_article = $id_category_article;
        return $this;
    }

    public function getIdUser(): int
    {
        return $this->id_user;
    }

    public function setIdUser(int $id_user): Article
    {
        $this->id_user = $id_user;
        return $this;
    }
}

class ArticleRepository extends Connect
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getArticles(): array
    {
        $stmt = $this->getDb()->prepare("SELECT a.*, ca.category, i.image_head, i.image_content, u.name AS user_name, u.firstname AS user_firstname
                          FROM articles AS a 
                          LEFT JOIN users AS u ON u.id_user = a.id_user
                          LEFT JOIN images AS i ON a.id_article = i.id_article
                          LEFT JOIN category_articles AS ca ON a.id_category_article = ca.id_category_article");
        $stmt->execute();
        $articles = $stmt->fetchAll();

        return $articles;
    }

    public function getArticlesByCategory(int $category): array
    {
        $sql = "SELECT a.*, i.*, u.firstname, u.name FROM articles AS a
                LEFT JOIN users AS u ON u.id_user = a.id_user
                LEFT JOIN images AS i ON a.id_article = i.id_article
                WHERE id_category_article = :category LIMIT 2";
        $stmt = $this->getDb()->prepare($sql);
        $stmt->bindParam(':category', $category);
        $stmt->execute();
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Retourner les articles trouvés
        return $articles;
    }
}