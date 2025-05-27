<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Axia - Application de Jeux de Société</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="header">
    <a href="index.html" class="logo-link">
      <img src="logo.png" alt="Logo Axia" class="logo">
    </a>
  
   <button><a href="formulaire_inscription.php" style="border-radius: 2px;" >S'inscrirer</a></button>
  </header>
  <main class="main-section">
    <section class="left">
      <img src="logo.png" alt="Logo Axia" class="main-logo">
      <h1>L'Application Web<br>Pour Vos Jeux De Société</h1>
      <p>
        Simple, intuitive, performante, multi-support, collaborative et <strong>GRATUITE !</strong><br>
        
      </p>
      <p>Réunissez-vous, jouez, et laissez la stratégie opérer !"</p>
    </section>
    <section class="right">
      <img src="logo.png" alt="Aperçu application Axia" class="img1">
    </section>
  </main>
  <script>
   
document.querySelector('.logo-link').addEventListener('click', function(e) {
    e.preventDefault();
    window.location.href = 'index.html';
  });
  

  document.querySelectorAll('.nav a').forEach(function(link, idx) {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      if(idx === 0) window.location.href = 'decouvrir.html';
      if(idx === 1) window.location.href = 'creer-compte.html';
    });
  });
  
  // Bouton Se connecter
  document.querySelector('.btn-connect').addEventListener('click', function(e) {
    e.preventDefault();
    window.location.href = 'connexion.html';
  });
  
  // Bouton principal
  document.querySelector('.btn-main').addEventListener('click', function(e) {
    e.preventDefault();
    window.location.href = 'mylogo.html';
  });
  
  </script>
  <footer >
    <div class="element2 conteneur">
      <div>
        <img src="https://th.bing.com/th/id/R.681caf025e059780e4dcdf5f03722e77?rik=T7xmFVEk5Ow6bg&riu=http%3a%2f%2f1000logos.net%2fwp-content%2fuploads%2f2017%2f05%2fNew-YouTube-logo.jpg&ehk=RDR%2fE4UZyrEzEhKzNi2rXq0jz39uMJJIZW0gmAdtF5g%3d&risl=&pid=ImgRaw&r=0" alt="youtube" class="cadre">
        <p style="color: white; margin-left: 10px;">BJP@youtube</p>
      </div>
      <div>
        <img src="https://th.bing.com/th/id/OIP.Go2CQNhF_49tkKcpEl_sHQHaHZ?rs=1&pid=ImgDetMain" alt="instagram" class="cadre">
        <p style="color: white;">BJP@instagram</p>
      </div>
      <div>
          <img src="https://th.bing.com/th/id/OIP.T5VrbJ6XosfdUtseiJrgVwHaHa?rs=1&pid=ImgDetMain" alt="facebook" class="cadre" style="margin-right: 40px;">
          <p style="color: white;">BJP@facebook</p>
      </div>
    </div>
  </footer>
  <div>
    <button style="float: right; margin-top: 10<a px;"><a href="formulaireadministraction.php">Administrateur</a></button>
  </div>
</body>

 
</html>
