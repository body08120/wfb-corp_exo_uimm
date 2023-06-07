<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Connexion</title>
</head>
<body>

    <section>
        <div class="box">
            <div class="form">
                <h2>Login</h2>
                <form action="src/controller/formController.php" method="post">
                
                    <div class="inputBx">
                        <input type="email" name="email" placeholder="Email">
                        <i class="fa-solid fa-user"></i>
                    </div>

                    <div class="inputBx">
                        <input type="password" id="password" name="password" placeholder="Mot de passe">
                        <i class="fa-solid fa-lock"></i>
                    </div>

                    <div class="inputBx">
                        <input type="submit" value="Se Connecter">
                    </div>

                </form>
                <p><a href="#"> Mot de passe</a> oublié</p>
            </div>
        </div>
    </section>
    
        

</body>
</html>