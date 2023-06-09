<?php
class ArticleRepository extends Connect
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getArticles($limit = null)
    {
        $sql = "SELECT a.*, ca.category, i.image_head, i.image_content, u.name AS user_name, u.firstname AS user_firstname
                FROM articles AS a 
                LEFT JOIN users AS u ON u.id_user = a.id_user
                LEFT JOIN images AS i ON a.id_article = i.id_article
                LEFT JOIN category_articles AS ca ON a.id_category_article = ca.id_category_article
                ORDER BY a.date DESC";

        if ($limit !== null) {
            $sql .= " LIMIT :limit";
        }
        $stmt = $this->getDb()->prepare($sql);

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

        if ($articles !== false) {
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

    public function getArticleById(int $id_article)
    {
        $sql = "SELECT a.*, ca.category, i.image_head, i.image_content, u.name AS user_name, u.firstname AS user_firstname
                FROM articles AS a 
                LEFT JOIN users AS u ON u.id_user = a.id_user
                LEFT JOIN images AS i ON a.id_article = i.id_article
                LEFT JOIN category_articles AS ca ON a.id_category_article = ca.id_category_article
                WHERE a.id_article = :id_article";
        $stmt = $this->getDb()->prepare($sql);

        $stmt->bindParam(':id_article', $id_article, PDO::PARAM_INT);
        $stmt->execute();
        $post = $stmt->fetch(PDO::FETCH_ASSOC);
        // var_dump($post);

        if ($post == true) {
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
            $article->setImageContent($post['image_content']);
            $article->setCategoryArticle($post['category']);
            $article->setAuteur($post['user_name'], $post['user_firstname']);

            return $article;
        } else {
            echo 'Article not found';
        }

    }
}
?>