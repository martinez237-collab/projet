<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire d'inscription</title>
</head>
<link rel="stylesheet" href="formulaire.css">
<body>
    <div class="forme">
        <form action="validationformulaire.php" method="post">
            <h1 style="text-align: center;">login</h1>
            <div>
               <label for="Genre"></label>
               <input type="radio" name="radiogenre" id="chk"><label for="chk">Homme</label>
               <input type="radio" name="radiogenre" id="chf"><label for="chf">Femme</label>
               <input type="radio" name="radiogenre" id="chg"><label for="chg">indifferent</label>
            </div>
            <!DOCTYPE html>
            <html lang="fr">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Inscription à l'événement</title>
            </head>
            <div >
               <form action="validationformulaire.php" method="POST">
                <label>Nom :</label>
                <input type="text" name="nom" required><br>

                <label>Prénom :</label>
                <input type="text" name="prenom" required><br>

                <label>Email :</label>
                <input type="email" name="email" required><br>

                <label>Nombre d'accompagnants :</label>
                <input type="number" name="nombre_d_accompagnants" min="0"><br>

                <label>numero de l'evenement :</label>
                <input type="number" name="id_evenement" >

            <div class="h2">
               <h2>preferences de jeux</h2>
               <label for="ch1">Monopoly 💰</label> <input type="checkbox" name="champc1" id="ch1">
               <label for="ch2">Uno 🎴</label>
               <input type="checkbox" name="champc3" id="ch3"><label for="ch3">Catan 🌍</label><input type="checkbox" name="champc2" id="ch2">
            </div>
            <label for="champstatut_inscription">statut_inscription</label>
                <select name="statut_inscription">
                    <option value="en attente">En attente</option>
                    <option value="validé">Validé</option>
                    <option value="refusé">Refusé</option>
                </select><br>
            <div class="btn2">
               <label for="champnationalite">Nationalite</label>
              <select name="chnationalite" id="champnationalite">
               <option value="0">France</option>
               <option value="1">Beligue</option>
               <option value="2">Suise</option>
               <option value="3">Espagne</option>
               <option value="4">Allemagne</option>
               <option value="5">Cameroun</option>
               <option value="6">Cote d'ivoire</option>
               <option value="7">Sengal</option>
               <option value="8">Mali</option>
               <option value="9">Congo</option>
               <option value="15">Tchad</option>
               <option value="16">Burkina-Faso</option>
               <option value="10">Etats-unis</option>
               <option value="11">canada</option>
               <option value="12">cuba</option>
               <option value="13">Agentine</option>
               <option value="14">Bresil</option>
              </select>
            </div>
            
            </div>
            
            <div class="btn1">
               <button type="submit" >Valider</button>
            </div>
       
           </form>
    </div>
       
   
</body>
</html>