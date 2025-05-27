<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="administracteur1.css">
</head>
<body>
    <div class="forme1">
        <form action="projettechnologie2.php" method="POST">
            <div>
              <label for="champnom">nom</label>
            <input type="text" name="champnom" required>
            </div>
            <div>
                <label for="champprenom">prenom</label>
                <input type="text" name="champprenom"required>
            </div>
            <div>
                <label for="champemail">email</label>
                <input type="text" name="champemail" required>
            </div>
            <div>
                <label for="champpasse">mot de passe</label>
                <input type="password" name="champpasse" required>
            </div>
            <div class="bt2">
              <button type="submit">se connecter</button>
            </div>
            
        </form>
    </div>
</body>
</html>