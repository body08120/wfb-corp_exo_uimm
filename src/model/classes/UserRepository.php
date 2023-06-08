<?php

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
            'id_role' => $user->getIdRole(),
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
