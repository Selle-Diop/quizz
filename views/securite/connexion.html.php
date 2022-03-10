<?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
if (isset($_SESSION[KEY_ERRORS])) {
    $errors = $_SESSION[KEY_ERRORS];
    unset($_SESSION[KEY_ERRORS]);
    // var_dump( $errors);
}



?>
   
    
    <div class="container"> 
        <form class="form" action="<?=WEB_ROOT?>" id="form" method="POST">

                <input type="hidden" name="controller" value="securite">
                <input type="hidden" name="action" value="connexion">
            
            
            <div class="header-form">
                <p>Login form</p>
            </div>
            <?php if (isset($errors['connexion'])):?>
            
            <p style="color:red"> <?=$errors['connexion']; ?> </p>
            <?php endif?>
            <div class="form-control">
                <input type="text" id="email" placeholder="Login" name="login">
                
                 <!-- <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-login.png" ?>" alt="" width="5%" height="-1%"> -->
                 <small id="small">Error message</small>
                 <?php if (isset($errors['login'])):?>
            
            <p style="color:green"> <?=$errors['login']; ?> </p>
            <?php endif?>
            </div>
            <div class="form-control">
                <input type="password" id="password" placeholder="Password" name="password">
                <small id="small">Error message</small>
                <!-- <img class="img" src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-password.png" ?>" alt="" width="5%" height="-1%"> -->
                <?php if (isset($errors['password'])):?>
                <p style="color:red"> <?=$errors['password']; ?> </p>
            <?php endif?>
            </div>
            <div class="connection">
                <!-- <input type="submit" value="Connexion" id="connexion"> -->
                <button id="connexion">connexion</button>
                
                <button id="inscrire"><a href="<?=WEB_ROOT."?controller=user&action=inscription.joueur" ?>"> S'inscrire pour jouer</a></button>
                
                <!-- <input type="submit" value="S'inscrire pour jouer" id="inscription"> -->
            </div>
        
          
            <!-- <button>Connexion</button> -->
        </form>
    </div>
 <?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
?>
            