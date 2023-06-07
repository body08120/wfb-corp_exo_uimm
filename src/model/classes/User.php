<?php
require_once('Connect.php');

class User
{
    private $id_user;
    private $name;
    private $firstname;
    private $email;
    private $password;
    private $token;
    private $active;
    private $id_role;
    private $job_title;
    private $description;
    private $fb;
    private $twitter;
    private $linkedin;

    public function __construct()
    {

    }

    // Getters and setters
    public function getName(): string
    {
        return $this->name ?? "";
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getFirstName(): string
    {
        return $this->firstname ?? "";
    }

    public function setFirstName(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function getIdRole(): int
    {
        return $this->id_role;
    }

    public function setIdRole(?int $id_role): void
    {
        $this->id_role;
    }


    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): void
    {
        $this->token = $token;
    }

    public function getActive(): int
    {
        return $this->active = 0;
    }

    public function setActive(int $active): void
    {
        $this->active = $active;
    }

    public function getIdUser(): int
    {
        return $this->id_user;
    }

    public function setIdUser(int $id_user): void
    {
        $this->id_user = $id_user;
    }

    public function getJobTitle(): string
    {
        return $this->job_title;
    }

    public function setJobTitle(string $job_title): void
    {
        $this->job_title = $job_title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getFb(): string
    {
        return $this->fb;
    }

    public function setFb(string $fb): void
    {
        $this->fb = $fb;
    }

    public function getTwitter(): string
    {
        return $this->twitter;
    }

    public function setTwitter(string $twitter): void
    {
        $this->twitter = $twitter;
    }

    public function getLinkedin(): string
    {
        return $this->linkedin;
    }

    public function setLinkedin(string $linkedin): void
    {
        $this->linkedin = $linkedin;
    }
}

class UserRepository extends Connect
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getUserByEmail($email)
    {
        $stmt = $this->getDb()->prepare('SELECT * FROM users WHERE email = :email');
        $stmt->execute(['email' => $email]);
        $data = $stmt->fetch();

        if ($data !== false) {
            $user = new User();
            $user->setName($data['name']);
            $user->setFirstName($data['firstname']);
            $user->setEmail($data['email']);
            $user->setPassword($data['password']);
            $user->setIdRole($data['id_role']);

            return $user;
        }

        return null;
    }

    public function signin($email, $password)
    {
        $stmt = $this->getDb()->prepare('SELECT * FROM users WHERE email = :email');
        $stmt->execute(['email' => $email]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($data && password_verify($password, $data['password'])) {
            return true;
        }

        return false;
    }


    public function inscription(User $user)
    {
        $stmt = $this->getDb()->prepare("INSERT INTO users (email, name, firstname, password, id_role)
        VALUES (:email, :name, :firstname, :password, :id_role)");

        $stmt->execute([
            'email' => $user->getEmail(),
            'name' => $user->getName(),
            'firstname' => $user->getFirstName(),
            'password' => $user->getPassword(),
            'id_role' => 2
        ]);
    }

    public function deleteUserById(User $user)
    {
        $stmt = $this->getDb()->prepare("DELETE FROM users WHERE id_user = :id_user");
        $stmt->execute(['id_user' => $user->getIdUser()]);

    }

    public function updateUser(User $user)
    {
        $stmt = $this->getDb()->prepare("UPDATE users SET name = :name, firstname = :firstname, password = :password, id_role = :id_role WHERE id_user = :id_user");
        $stmt->execute([
            'name' => $user->getName(),
            'firstname' => $user->getFirstName(),
            'password' => $user->getPassword(),
            'id_role' => $user->getIdRole(),
            ]);

    }

}
?>


