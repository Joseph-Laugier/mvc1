<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
  <?php require_once "Voituree.php"; 
$voiture1 = new Voiture("opel","noir","AA000AA");
$voiture1->afficher();

?>

</body>
</html>