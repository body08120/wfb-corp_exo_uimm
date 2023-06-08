<?php

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

    private string $image_content;

    private string $category_article;

    private string $auteur;

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

    public function getFormattedDate()
    {
        $dateTime = new DateTime($this->date);
        return $dateTime->format('Y-m-d');
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

    public function getImageContent(): string
    {
        return $this->image_content;
    }

    public function setImageContent(string $image_content)
    {
        $this->image_content = $image_content;
    }

    public function getCategoryArticle(): string
    {
        return $this->category_article;
    }

    public function setCategoryArticle(string $category_article)
    {
        $this->category_article = $category_article;
    }

    public function getAuteur(): string
    {
        return $this->auteur;
    }

    public function setAuteur(string $nom, string $prenom)
    {
        $this->auteur = $nom . ' ' . $prenom;
    }
}
?>