<?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");

?>
<div class="header"> 
<div class="logo"></div>
        <h1>Le plaisir de jouer</h1>
    </div>
    <div class="main">   
        <div class="form-contain">
            <div class="header-form">
                <p>Login form</p>
            </div>   
            <form id="form" action="<?=WEB_ROOT?>" method="POST">
            <!-- <div>Login Form</div> -->
            <input type="hidden" name="controller" value="securite">
            <input type="hidden" name="action" value="connexion"> 
            <div class="malll">
            <div class="connect-params">    
            <div class="login">
            <input type="email" name="login" placeholder="Login" id="login">
            <img src="<?=WEB_PUBLIC.'img'.DIRECTORY_SEPARATOR."ic-login.png" ?>" alt="" width="5%" height="1%">
        </div>
        <small>Error message</small>

            <div class="password">
            <input  id="password" type="password" name="password" placeholder="Password">
            <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-password.png" ?>" alt="" width="5%" height="1%">
            </div>
            <small>Error message</small>
            </div>
            </div>
            <div class="connect">
                <input type="submit" value="Connexion" id="connexion">
                <input type="submit" value="S'inscrire pour jouer" id="inscription">
            </div>
        </form>    
        </div>
    </div>
            
            

                
    
                
                
            </form>
            </div>
 <?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
?>
            