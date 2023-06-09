<?php
require_once('Connect.php');

class User
{
    private string $id_user;
    private string $name;
    private string $firstname;
    private string $email;
    private string $password;
    private string $token;
    private int $active;
    private int $id_role;
    private string $image_user;
    private string $job_title;
    private string $description;
    private string $fb;
    private string $twitter;
    private string $linkedin;
    private string $code;

    public function __construct()
    {

    }

    // Getters and setters
    public function getName()
    {
        return $this->name ?? "";
    }

    public function setName($name )
    {
        $this->name = $name;
    }

    public function getFirstName()
    {
        return $this->firstname ?? "";
    }

    public function setFirstName($firstname)
    {
        $this->firstname = $firstname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword( $password )
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function getIdRole()
    {
        return $this->id_role;
    }

    public function setIdRole()
    {
        $this->id_role;
    }

    public function getImageUser()
    {
        return $this->image_user;
    }

    public function setImageUser( $image_user )
    {
        $this->image_user = $image_user;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function setToken( $token )
    {
        $this->token = $token;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function setActive( $active )
    {
        $this->active = $active;
    }

    public function getIdUser()
    {
        return $this->id_user;
    }

    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }

    public function getJobTitle()
    {
        return $this->job_title;
    }

    public function setJobTitle( $job_title )
    {
        $this->job_title = $job_title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription( $description )
    {
        $this->description = $description;
    }

    public function getFb()
    {
        return $this->fb;
    }

    public function setFb( $fb )
    {
        $this->fb = $fb;
    }

    public function getTwitter()
    {
        return $this->twitter;
    }

    public function setTwitter( $twitter )
    {
        $this->twitter = $twitter;
    }

    public function getLinkedin()
    {
        return $this->linkedin;
    }

    public function setLinkedin( $linkedin )
    {
        $this->linkedin = $linkedin;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setCode( $code )
    {
        $this->code = $code;
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
            $user->setIdRole();

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
        $stmt = $this->getDb()->prepare("INSERT INTO users (name, firstname, email, password, token, active, id_role, image_user, job_title, description, fb, twitter, linkedin)
        VALUES (:name, :firstname, :email, :password, :token, :active, :id_role, :image_user, :job_title, :description, :fb, :twitter, :linked)");
        $stmt->execute([
            'name' => $user->getName(),
            'firstname' => $user->getFirstName(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'token' => $user->getToken(),
            'active' => $user->getActive(),
            'id_role' => $user->getIdRole() ,
            'image_user' => $user->getImageUser(),
            'job_title' => $user->getJobTitle(),
            'description' => $user->getDescription(),
            'fb' => $user->getFb(),
            'twitter' => $user->getTwitter(),
            'linkedin' => $user->getLinkedin()
        ]);
    }


    public function deleteUserById(User $user)
    {
        $stmt = $this->getDb()->prepare("DELETE FROM users WHERE id_user = :id_user");
        $stmt->execute(['id_user' => $user->getIdUser()]);

    }

    public function updateUser(User $user)
{
    $stmt = $this->getDb()->prepare("UPDATE users SET name = :name, firstname = :firstname, email = :email, password = :password, token = :token, active = :active, id_role = :id_role, image_user = :image_user, job_title = :job_title, description = :description, fb = :fb, twitter = :twitter, linkedin = :linkedin WHERE id_user = :id");
    $stmt->execute([
        'id' => $user->getIdUser(),
        'name' => $user->getName(),
        'firstname' => $user->getFirstName(),
        'email' => $user->getEmail(),
        'password' => $user->getPassword(),
        'token' => $user->getToken(),
        'active' => 1,
        'id_role' => 2,
        'image_user' => $user->getImageUser(),
        'job_title' => $user->getJobTitle(),
        'description' => $user->getDescription(),
        'fb' => $user->getFb(),
        'twitter' => $user->getTwitter(),
        'linkedin' => $user->getLinkedin()
    ]);
}


}
?>


