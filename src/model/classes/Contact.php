<?php
class ContactForm {
    private $nom;
    private $mail;
    private $motif;
    private $message;
    private $alert;
    private $renseigne;
    private $courriel;
    private $regex_mail;
    private $regex_head;

    public function __construct() 
    {
        if (!empty($_POST)) {
            $this->nom = trim($_POST['nom-user']);
            $this->mail = trim($_POST['mail-user']);
            $this->motif = trim($_POST['motif']);
            $this->message = trim($_POST['message']);
        }

        $this->regex_mail = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
        $this->regex_head = '/[nr]/';
        $this->alert = '';
        $this->renseigne = 0;
        $this->courriel = 0;
    }

    // la chaîne de format est "L'adresse %s n'est pas valide", où %s est le marqueur de position pour une chaîne de caractères. Lorsque la fonction sprintf() est appelée, la valeur de $this->mail sera insérée à la place du marqueur %s dans la chaîne de format. Cela permet de générer dynamiquement un message d'erreur indiquant que l'adresse e-mail n'est pas valide.
    private function validateEmail() 
    {
        if (!preg_match($this->regex_mail, $this->mail)) {
            $this->alert = sprintf("L'adresse %s n'est pas valide", $this->mail);
        } else {
            $this->courriel = 1;
        }
    }

    private function validateFields() 
    {
        if (empty($this->nom) || empty($this->mail) || empty($this->message)) {
            $this->alert = 'Tous les champs doivent être renseignés';
        } else {
            $this->renseigne = 1;
        }
    }

    private function sendEmail() 
    {
        if ($this->renseigne == 1 && $this->courriel == 1) {
            $to = "nataeel08120@gmail.com";
            $sujet = "Message depuis le site";
            $msg = '';
            $msg .= 'Nom : ' . $this->nom . "\r\n\r\n";
            $msg .= 'Mail : ' . $this->mail . "\r\n\r\n";
            $msg .= 'Motif : ' . $this->motif . "\r\n\r\n";
            $msg .= 'Message : ' . $this->message . "\r\n\r\n";
            $headers = sprintf('From: MESSAGE DU SITE WFB-CORP <nataeel08120@gmail.com>%s%s', "\r\n", "\r\n");
            mail($to, $sujet, $msg, $headers);
            header('Location:http://www.localhost/WFB-CORP/index.php');
        } else {
            echo "Erreur : impossible d'envoyer le message";
        }
    }

    public function processForm() 
    {
        $this->validateEmail();
        $this->validateFields();
        $this->sendEmail();
    }
}

$form = new ContactForm();
$form->processForm();

?>