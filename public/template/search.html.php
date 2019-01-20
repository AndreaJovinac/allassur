<form class="container form-inline formsbloc col-lg-10 col-xs-12 d-none d-sm-block" method="post" action="index.php?page=devis<?php if($ctrl->isPro()) echo('2'); ?>">
    <div class="form-group formulaireP container col-10 col-xs-12">
        <h5 class="container" style="padding: 0;"> Faîtes votre devis personnalisé</h5>
        <span class=" custom-dropdown__select custom-dropdown__select--white col-10 ">
            <select name="choixDevis" id="inputState" class="form-control">
            <?php  
                if($ctrl->isParticulier())
                    $choices = $ctrl->choicesParticulier;
                else
                    $choices = $ctrl->choicesPro;
                foreach ($choices as $key => $value) {
                      echo("<option value='$key'>$value</option>");
                }
            ?>
            </select>

        </span>
        <input class="btn btn-default col-2" type="submit" value="Suivant">
    </div>
</form>