<html>
<head>
    <meta charset="utf-8" /> <! -- Mettre des caractères spéciaux sans problèmes de compréhension du moteur de recherche. -->
    <title>La mini fabrique à savons !</title>
    <link rel="stylesheet" href="CSS.css" />	
	<script type="text/javascript" src="Commandejava.js"></script>
    <h1>La mini fabrique à savons !</h1>
</head>
<body>
<div  class="navbar" id='myTopnav'>
  <a href="Bienvenue.html">Bienvenue !</a>
  <a href="Savons.html">Savons de toutes sortes !</a>
  <a href="Les anciens.html">Nos anciens savons !</a>
  <a href="Commandes.html">Pour passer vos commandes !</a>
  <div class="topnav-right">
  <a href="BienvenueA.html"><img src="photo/andrap.png" height="30px" width="45px" title="English !"/></a>
  </div>
</div>
<p>Vous êtes : </p>
<?php echo $_GET['Nom']  ?>
<br>
<?php echo $_GET['Prénom']  ?>
<p>Vous avez commandé :</p>
<?php echo $_GET['Savons']  ?>
<p>Nous pouvons vous contacter au : </p>
<?php echo $_GET['Téléphone'] ?>

    <div class="footer">
        <div id="button"></div>
        <div id="container">
            <div id="cont">
                <div class="footer_center">
                    <h3>La mini fabrique à savons !</h3>
                        <p>Savons faits par Richard et Jules BOSSIS.</p>
                        <p>Site réalisé par Jules BOSSIS--GUYON.</p>
                        <p>Copyright © <script type="text/javascript"> document.write(new Date().getFullYear()); </script> - Tous droits réservés.</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>