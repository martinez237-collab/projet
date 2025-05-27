<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=projects_techs;charset=utf8", 'root', '');
} catch (PDOException $e) {
    print('Erreur:' . $e->getMessage());
    die();
}
print('je suis connecter');

?>
