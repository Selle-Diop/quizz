<h1>Parametrer votre Question</h1>
<div class="conteneurquestion">
    <div>
        <label for="">Questions</label>
        <textarea name="" id="" cols="70" rows="6"></textarea>

    </div>
        <div class="Nbrepoints">
            <label for="">Nbre de Points</label>
            <input type="number">
        </div>
    <div class="typedereponse">
        <label for="">Type de reponse </label> 
        <div class="imp"><img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-ajout.png" ?>" alt="" height="69%"></div>
            <select name="selectreponse" id="reponseselect"> 
               
    <option value="typeDeReponse">Donnez le type de reponse</option>
    <option value="ReponseSimple">Reponse simple</option>
    <option value="ReponseMultiple">Reponse multiple</option>
    <option value="hamster">repnse</option>
    
</select>

    </div>
                <div class="reponse">
                    <label for="">Reponse1</label>
                    <textarea name="" id="" cols="60" rows="5"></textarea>
                    <input type="checkbox">
                    <input type="radio">
                    <div class="imgdelete"><img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-ajout.png" ?>" alt="" height="69%"></div>

                    
                </div>
                <button>Enregister</button>






</div>