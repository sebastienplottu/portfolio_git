


<?php

//Connection à la BDD //REUSSIE
try
{
    $bdd = new PDO('pgsql:host=127.0.0.1;dbname=portfolio', 'postgres', 'pom', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    echo('Erreur : ' . $e->getMessage());
    die;
}


$sth = $bdd->query("SELECT * FROM acceuil");

#$tel_contact = isset($_POST['tel_contact']) ? $_POST['tel_contact'] : NULL;

//Test d'insertion de données //ECHEC
$stm = $bdd->prepare("
    INSERT INTO acceuil(id_accueil)
   VALUES(3)
  ");


?>

<!-- Code de secours n°2 pour la connection à la BDD  -->
<?php /*

$dsn = 'pgsql:dbname=portfolio;host=127.0.0.1';
$user = 'postgres';
$password = 'pom';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : '.$e->getMessage();
}


$sth = $dbh->query("SELECT * FROM acceuil");
///////////////////////////////////////////////////////
   <?php  while($row = $sth->fetch(PDO::FETCH_ASSOC)):
          ?>

          <p><?= $row['titre_acceuil ']; ?></p>

<?php endwhile ?>
*/
?>



<?php
// Brouillon  pour l'envoie à la base de données
#$prenom=$_POST['prenom'];
#$nom=$_POST['nom'];
#$email=$_POST['email'];
#$message=$_POST['message'];

#$sql="INSERT INTO   SET prenom=$prenom"


?>
<!-- Test de la réponse de la base de données//REUSSIE

         <?php // while($row = $sth->fetch(PDO::FETCH_ASSOC)): ?>

          <p><?//= $row['titre_acceuil ']; ?></p>

<?php //endwhile ?>
 -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <!--Encodage -->
    <meta charset="utf-8" />
    <!--Responsive taille -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Référencement naturel SEO description du site et keyword -->
    <meta name="description" content="Ceci est un portfolio fait par Sébastien Plottu "  />
    <meta name="keywords" content="portfolio Sébastien Plottu ">
    <!--Bootstrap lien -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Lien vers le fichier CSS-->
    <link rel="stylesheet" type="text/css" href="css.css">
    <!--Police d'écriture-->
    <link href="https://fonts.googleapis.com/css?family=Text+Me+One" rel="stylesheet">

    <!--Balise title utile pour le référencement -->
    <title>Portfolio Sébastien Plottu</title>
</head>
<body>


<!-- Nav bar  -->
    <nav class="spinButton">
    

      <a href="#S"><li>Sebastien Plottu</li></a> 
        <a href="#Compétences"><li>Compétences</li></a>
      <a href="#Expériences"><li>Expériences</li></a> 
        <a href="#CtrI"><li>Centres d'intérets</li></a>
      <a href="#Contact"><li>Contact</li></a>
        <a href="#FormulaireContact"><li>Formulaire de Contact</li></a>


    </nav>

<!-- Introduction -->
  <div id="S">
       <h1>Sebastien Plottu</h1>
      <div class="spinButton" id="STT"><h1>Etudiant Info Ynov</h1></div>
    </div>


<!-- Article  -->
    <section class="spinButton">

  <article id="cpt"> <div>
        <h2 id="Compétences">C</h2>
            <h1>Compétences</h1>
          <p class="spinButton"><b>Programmation:</b>
	<br/>-C
	<br/>-Python
	<br/>-Javascript
     <br/>
    <br/><b>Langues:</b>
	<br/>-Anglais
	<br/>-Espagnol
     <br/>
     <br/><b>Informatique:</b>
	<br/>-Developpement web(HTML/CSS)
<br/>-Infrastructure réseaux(Cisco)
   
	 <p>

</div> 
       </article >


        <!-- Article  -->
         <article class="spinButton" id="exp">
             <div>
              <h2 id="Expériences">C</h2>
<h1 >Expériences</h1>
    <ul>
        <li> Baccalauréat scientifique spécialité
             <br/> Sciences de la Vie et de la Terre</li>
          <li> Stage découverte à L'Agrocampus Angers </li>
    
    </ul>
</div>
        </article>



        <!-- Article  -->
        <article id="cent"> 
       <div>
            <h2 id="CtrI">C</h2>
    <h1 >Centres d'intérêt</h1>

           <ul>
    <li>Jeux vidéos</li>
     <li>Musique</li>
     <li>Fims/Séries</li> 
    <li>Management/Organisation</li>
           </ul>

    
   </div>
        </article>



        <!-- Article  -->
<article id="con">
        <div class="spinButton">
        <h1 id="Contact">Contact</h1>

<p>Tel 07 83 23 42 23<br/>mail: sebastien.plottu@ynov.com</p>

            
            
    </div>
        </article>
       
    </section>





<!-- Formulaire de contact  -->

    <section id="formulaire">
        <h2 id="FormulaireContact">C</h2>
        <h1><b>Formulaire de Contact</b></h1>

        <form id="formulaire_de_contact" action="formulaire.php" method="post">
            <div>
                <label for="Nom"></label>
                <div>
                    <input type="texte" name="nom" placeholder="Nom" />
                </div>
            </div>
            <div>
                <label for="Prénom"></label>
                <div> <input type="texte" name="prenom" placeholder="Prenom" /> </div>
            </div>
            <br/>




            <div>
                <label for="Email"> </label><input type="email" name="email" placeholder="Mail">
            </div>
            <br/>

            <div>
                <label for="message"></label>
                <textarea name="message" rows="5" cols="40" placeholder="Message"></textarea>
            </div>


                <p>
                    <input type="submit" value="Valider" />
                </p>

            <br/>
            <br/>
            <br/>

        </form>
 </section>





    
<div></div>
    <div></div>
    
    <footer></footer>
    
    

      
</body>
</html>
