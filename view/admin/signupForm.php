<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Inscription</title>
</head>
<body>

    <section>
        <div class="box">
            <div class="form">
                <h2>Créer compte</h2>
                <form action="src/controller/formController.php" method="post">

                    <div class="inputBx">
                        <input type="text" name="name" placeholder="Nom">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    
                    <div class="inputBx">
                        <input type="text" name="firstname" placeholder="Prénom">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    
                    <div class="inputBx">
                        <input type="email" name="email" placeholder="Email">
                        <i class="fa-solid fa-user"></i>
                    </div>

                    <div class="inputBx">
                        <input type="password" name="password" placeholder="Mot de passe">
                        <i class="fa-solid fa-lock"></i>
                    </div>

                    <div class="inputBx">
                        <input type="password" name="verifmdp" placeholder="Confirmer Mot de passe">
                        <i class="fa-solid fa-lock"></i>
                    </div>

                    <div class="inputBx">
                        <input type="text" name="code" placeholder="Code admin">
                        <i class="fa-solid fa-lock"></i>
                    </div>

                    <div class="inputBx">
                        <input type="submit" value="Enregistrer">
                    </div>

                </form>
            </div>
        </div>
    </section>
    
        

</body>
</html>