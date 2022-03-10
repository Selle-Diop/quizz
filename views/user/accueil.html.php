  <?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
?>  
<!-- Page Layout ou page de presentation -->
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?=WEB_PUBLIC.'css'.DIRECTORY_SEPARATOR.'style.accueil.css'?>">
 
<div id="conteneur"> 
    <div class="entete">
        <h1>Creer et Parametrer vos Quizz</h1>
                <button> 
     <a href="<?=WEB_ROOT."?controller=securite&action=deconnexion" ?> ">Deconnexion </a>

                </button>
  </div>
    <div class="contjeu">
        <div class="listetof">
                <div class="tof">
                        <div><?=
                        $_SESSION[KEY_USER_CONNECT]['Nom']." ".
                        $_SESSION[KEY_USER_CONNECT]['Prenom'];
                        
                            ?>
                        </div>
                        <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."hussary.jpg" ?>" alt="" height="1%">
        
                </div>
    <div class="liste">
     
        <?php if(is_admin()):?>
            <div class="lisquestion"><a href="<?=WEB_ROOT."?controller=user&action=liste.question"?>">Liste question</a> <div><img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-liste-active.png" ?>" alt="" height="69%"></div> </div>
        <?php endif?>

        <?php if(is_admin()):?>
            <div class="creer"><a href="<?=WEB_ROOT."?controller=user&action=creation.admin"?>"> Creer admin </a> <div><img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-ajout.png" ?>" alt="" height="69%"></div>  </div>
        <?php endif ?>

        <?php if (is_admin()): ?>
            <div class="lisJoueur"><a href="<?=WEB_ROOT."?controller=user&action=liste.joueur"?>">Liste joueurs</a> <div> <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-liste.png" ?>" alt="" height="69%"></div> </div>
        <?php endif ?>

        <?php if(is_admin()):?>
            <div class="creerQuest"><a href="<?=WEB_ROOT."?controller=user&action=creation.question"?>">Creer Questions</a> <div><img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-ajout.png" ?>" alt="" height="69%"></div> </div>
        <?php endif ?>
    </div>

  </div>







            <div class="questionListe">

               <?= $affiche ?>



            </div>


    


</div>
      

      


</div>


<?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
?>


