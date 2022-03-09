


<div class="contain">
        <div class="sinscrire">
        
            <h1>S'INSCRIRE</h1>

            <p><?php if(is_admin()){echo"pour proposer des quizz ";}else{echo"pour tester votre niveau de culture general";}?> </p>
            <hr>
            <form action="<?= WEB_ROOT ?>" id="forme" method="POST">
            <input type="hidden" name="controller" value="user">
                <input type="hidden" name="action" value="inscription.joueur">
                <div class="pre">
                    <div class="form-control">
                        <label>Prenom:</label>
                        <input type="text" id="aprenom" name="prenom">
                        <small></small>
                    </div>
                <div class="form-control">
                    <LABEl>Nom:</LABEl>
                    <input type="text" id="anom" name="nom">
                    <small>Error</small>

                </div> 
                <div class="form-control"> 
                    <LABEl>test:</LABEl>
                    <input type="text" id="alogin" name="login">
                    <small>Error</small>

                 </div> 
                <div class="form-control"> 

                    <LABEl>Password:</LABEl>
                    <input type="password" id="apassword1" name="password">
                    <small>Error</small>

                </div>  
                <div class="form-control"> 

                    <LABEl>Confirmer Password:</LABEl>
                    <input type="password"id="apassword2" name="password2">
                    <small>Error</small>

                 </div>   
                                <!-- <button>Choisir Fichier</button> -->
                        <button>Creer compte</button>

                        </div>
            </form>

        </div>

        
        
        
        
        
        
        <div class="avatar">
            <img src="<?=WEB_PUBLIC.'img'.DIRECTORY_SEPARATOR.'hussary.jpg'?>" alt="" height="30%">
            
           <p><?php if (is_admin()) {echo "Avatar Admin";}else {echo "Avatar du joueur";}?></p>
        </div>






</div>
<?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
?>
