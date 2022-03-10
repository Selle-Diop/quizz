<?php
if (isset($_SESSION[KEY_ERRORS])) {
    $errors = $_SESSION[KEY_ERRORS];
    unset($_SESSION[KEY_ERRORS]);
    // var_dump( $errors);
}



?>
 

<div class="contain">
        <div class="sinscrire">
        
            <h1>S'INSCRIRE</h1>

            <p><?php if(is_admin()){echo"pour proposer des quizz ";}else{echo"pour tester votre niveau de culture general";}?> </p>
            <hr>
            <form action="<?= WEB_ROOT ?>" id="forme" method="POST">
            <input type="hidden" name="controller" value="securite">
                <input type="hidden" name="action" value="inscription.joueur">
                <div class="pre">
                    <div class="form-control">
    
                        <label>Prenom:</label>
                        <input type="text" id="aprenom" name="prenom">
                        <small></small>
                        <?php if (isset($errors['prenom'])):?>
            
            <p style="color:green"> <?=$errors['prenom']; ?> </p>
            <?php endif?>
                    </div>
                <div class="form-control">
                    <LABEl>Nom:</LABEl>
                    <input type="text" id="anom" name="nom">
                    <small>Error</small>
                    <?php if (isset($errors['nom'])):?>
            
            <p style="color:green"> <?=$errors['nom']; ?> </p>
            <?php endif?>

                </div> 
                <div class="form-control"> 
                    <LABEl>Login:</LABEl>
                    <input type="text" id="alogin" name="login">
                    <small>Error</small>
                     <?php if (isset($errors['erreurlogin'])):?>
            
            <p style="color:green"> <?=$errors['erreurlogin']; ?> </p>
            <?php endif?>
                    <?php if (isset($errors['login'])):?>
            
            <p style="color:green"> <?=$errors['login']; ?> </p>
            <?php endif?>

                 </div> 
                <div class="form-control"> 

                    <LABEl>Password:</LABEl>
                    <input type="password" id="apassword1" name="password">
                    <small>Error</small>
                    <?php if (isset($errors['password'])):?>
            
            <p style="color:green"> <?=$errors['password']; ?> </p>
            <?php endif?>

                </div>  
                <div class="form-control"> 

                    <LABEl>Confirmer Password:</LABEl>
                    <input type="password"id="apassword2" name="password2">
                    <small>Error</small>
                    <?php if (isset($errors['password2'])):?>
            
            <p style="color:green"> <?=$errors['password2']; ?> </p>
            <?php endif?>

                 </div>   
                       Avatar          
                                        
                        <button>Creer compte</button>

                        </div>
                          <div class="avatar">
            <label for="imgAva">
            <input type="file"hidden id="imgAva" name="inputimage">
            <img src="<?=WEB_PUBLIC.'img'.DIRECTORY_SEPARATOR.'hussary.jpg'?>" alt="" height="30%">
            </label>
           <p><?php if (is_admin()) {echo "Avatar Admin";}else {echo "Avatar du joueur";}?></p>
        </div>
            </form>


        </div>

        
        
        
        
        
        
      






</div>
<?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
?>
