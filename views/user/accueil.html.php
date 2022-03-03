<!-- <?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
?> -->
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?=WEB_PUBLIC.'css'.DIRECTORY_SEPARATOR.'style.accueil.css'?>">
 <!-- <ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>  -->
<div id="conteneur"> 
    <div class="entete">
        <h1>Creer et Parametrer vos Quizz</h1>
        <button>Deconnexion</button>
  </div>
    <div class="contjeu">
        <div class="listetof">
       <div class="tof">
       <!-- <p> AAAAa</p> -->
        <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."hussary.jpg" ?>" alt="" height="19%">
        
        </div>
    <div class="liste">
      
        <div class="lisquestion"> Liste question <div><img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-liste-active.png" ?>" alt="" height="69%"></div> </div>
        <div class="creer"> Creer admin <div><img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-ajout.png" ?>" alt="" height="69%"></div>  </div>
        <div class="lisJoueur">Liste joueurs <div> <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-liste.png" ?>" alt="" height="69%"></div> </div>
        <div class="creerQuest">Creer Questions <div><img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-ajout.png" ?>" alt="" height="69%"></div> </div>
      
    </div>

  </div>







    <div class="questionListe"></div>


    </div>
      

      


</div>

<!-- <div class="tete">
  <img src="<?=WEB_PUBLIC.'css'.DIRECTOR_SEPARATOR.'logo-QuizzSA.png'?>" alt=""> 
  <h1>dffd</h1>
   </div> -->
<?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
?>


