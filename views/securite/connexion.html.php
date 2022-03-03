<?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
$errors = $_SESSION[KEY_ERRORS];
 unset($_SESSION[KEY_ERRORS]);


?>
 <div class="header"> 
    <div class="logo"></div>
    <div class="ff">Le plaisir de jouer</h1></div>
 </div>  
    
    <div class="container"> 
        <form class="form" action="<?=WEB_ROOT?>"id="form" method="post">

                <input type="hidden" name="controller" value="securite">
                <input type="hidden" name="action" value="connexion">
            
            
            <div class="header-form">
                <p>Login form</p>
            </div>
            <?php if (isset($errors['connexion'])):?>
            
            <p style="color:red"> <?=$errors['connexion']; ?> </p>
            <?php endif?>
            <div class="form-control">
                <input type="email" id="email" placeholder="Login" name="login">
                
                 <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-login.png" ?>" alt="" width="5%" height="-1%">
                 <?php if (isset($errors['login'])):?>
            
            <p style="color:red"> <?=$errors['login']; ?> </p>
            <?php endif?>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <input type="password" id="password" placeholder="Password" name="password">
                <?php if (isset($errors['password'])):?>
            
            
                <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-password.png" ?>" alt="" width="5%" height="-1%">
                

                <small>Error message</small>
                <p style="color:red"> <?=$errors['password']; ?> </p>
            <?php endif?>
            </div>
            <div class="connect">
                <input type="submit" value="Connexion" id="connexion">
                <input type="submit" value="S'inscrire pour jouer" id="inscription">
            </div>
        
          
            <!-- <button>Connexion</button> -->
        </form>
    </div>
 <?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
?>
            