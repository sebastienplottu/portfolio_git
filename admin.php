<?php
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ceci est un portfolio fait par Sébastien Plottu "  />
    <meta name="keywords" content="portfolio bannane pomme abricot annas légumes fruits patate raisins salade de fruit pissenilt ">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Testcss.css">
    <link href="https://fonts.googleapis.com/css?family=Text+Me+One" rel="stylesheet">
    <title>Portfoliov3</title>
</head>
<body class="spinButton">




<nav class="spinButton">


    <a href="#S"><li>Sebastien Plottu</li></a>
    <a href="#Compétences"><li>Compétences</li></a>
    <a href="#Expériences"><li>Expériences</li></a>
    <a href="#CtrI"><li>Centres d'intérets</li></a>
    <a href="#Contact"><li>Contact</li></a>
    <a href="#FormulaireContact"><li>Formulaire de Contact</li></a>


</nav>

<div id="S">
    <div id="présentation">
    <h1>Sebastien Plottu</h1>
    <h1>Etudiant Info Ynov</h1>
    </div>
</div>



<section >

    <article id="cpt"> <div>
            <h2 id="Compétences">C</h2>
            <h1>Compétences</h1>

            <p class="spinButton"><b>Programmation:</b>
                <br/>-C
                <br/>-Python
                <br/>-Javascript
                <br/><b>Langues:</b>
                <br/>-Anglais
                <br/>-Espagnol
                <br/><b>Informatique:</b>
                <br/>-Developpement web(HTML/CSS)
                <br/>-Infrastructure réseaux(Cisco)

            <p>
            <form>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Modification</label>
                    <textarea class="form-control" id="modification" rows="3"></textarea>
                </div>
            </form>
            <button type="button" class="btn btn-primary btn-lg">Envoyer</button>

        </div>

    </article >

    <article class="spinButton" id="exp">
        <div>
            <h2 id="Expériences">C</h2>
            <h1 >Expériences</h1>
            <ul>
                <li> Baccalauréat scientifique spécialité
                    <br/> Sciences de la Vie et de la Terre</li>
                <li> Stage découverte à L'Agrocampus Angers </li>

            </ul><form>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Modification</label>
                    <textarea class="form-control" id="modification" rows="3"></textarea>
                </div>
            </form>
            <button type="button" class="btn btn-primary btn-lg">Envoyer</button>

        </div>

    </article>

    <article id="cent">
        <div>
            <h2 id="CtrI">C</h2>

            <h1 >Centres d'intérêt</h1>

            <p>
            <li>Jeux vidéos</li>
            <li>Musique</li>
            <li>Fims/Séries</li>
            <li>Management/Sociologie</li>
            </p>
            <form>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Modification</label>
                    <textarea class="form-control" id="modification" rows="3"></textarea>
                </div>
            </form>
            <button type="button" class="btn btn-primary btn-lg">Envoyer</button>
        </div>
    </article>

    <article id="con">
        <div class="spinButton">
            <h1 id="Contact">Contact</h1>

            <p>Tel 07 83 23 42 23<br/>mail: sebastien.plottu@orange.fr</p>
            <a class="fromLeft" href="https://www.facebook.com/profile.php?id=100008214271899">
                <img src="FB.png" alt="Facebook">
            </a>
            <form>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Modification</label>
                    <textarea class="form-control" id="modification" rows="3"></textarea>
                </div>
            </form>
            <button type="button" class="btn btn-primary btn-lg">Envoyer</button>
        </div>
    </article>

</section>






<section id="formulaire">
    <h1><b>Formulaire de Contact</b></h1>

    <form id="formulaire_de_contact">
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





        <div>
            <label for="Email"> </label><input type="email" name="email"placeholder="Mail">
        </div>


        <div>
            <label for="message"></label>
            <textarea type="texte" placeholder="Message"></textarea>
        </div>






    </form>
</section>

<div></div>
<div></div>

<footer></footer>


<!-- Fichier JavaScript qui sera chargé puis exécuté -->
<script type="text/javascript" src="Js.js"></script>

<!-- JavaScript intégré au html, exécuté immédiatement -->

</body>
</html>
