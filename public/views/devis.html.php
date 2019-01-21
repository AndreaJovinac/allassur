<h2 style="margin: 30px 0px 30px 0px;"> Demande de devis : Particulier </h2>

<h5> Pour faire une demande devis, nous vous invitons à remplir ce formulaire, afin que nous puissions vous contacter
    par téléphone ou par mail </h5>
<!--- MODIFICATION DU CONTENU!-->
<form id="contact-form" method="post" role="form" style="margin-top: 30px;" data-action="../../Allassur/core/contactdevis.php">


    <h5 style="margin-bottom: 20px; color: #a34d1f;">
        <strong> 1) Sélectionner le type d'Assurance que vous souhaitez <span class="blue">*</span> : </strong>
    </h5>
    <div id="choice">
        <div class="float-right col-lg-6 col-sm-12 col-xs-12" style="padding: 0; display: none;">
            <?php 
                $index = 0;
                if($ctrl->isParticulier())
                    $choices = $ctrl->choicesParticulier;
                else
                    $choices = $ctrl->choicesPro;

                foreach ($ctrl->choicesParticulier as $key => $value) {
                    if($index*2 >= count($ctrl->choices)) {
                        echo('</div><div class="float-right col-lg-6 col-sm-12 col-xs-12" style="padding: 0;"> ');
                        $index = 0;
                    } else {
                        $index = $index + 1;
                    }
                    ?>
            <div class="checkbox" style="padding: 0;">
                <label>
                    <input 
                        type="radio" 
                        name="choice"
                        <?php if($ctrl->getSelectedDevis() == $key) echo('checked'); ?> 
                        value="<?php echo($value); ?>">
                    <?php echo($value); ?>
                </label>
            </div>
            <?php } ?>
        </div>
        <p class="comments" style="color: red; margin-top: 5px; clear: both;"></p>
    </div>
    
    <h5 style="margin-top: 20px; color: #a34d1f;"><strong>2) Vous désirez être contacter par <span class="blue">*</span> : </strong> </h5>
    <div id="choicecontact" class=" col-lg-6 col-sm-12 col-xs-12" style="padding: 0;">

        <div class="checkbox col-sm-12 col-xs-12" style="padding: 0;">
            <label><input type="radio" name="choicecontact" value="Mail"> Mail </label>
        </div>
        <div class="checkbox col-sm-12 col-xs-12" style="padding: 0;">
            <label><input type="radio" name="choicecontact" value="Mail"> Téléphone </label>
        </div>
        <p class="comments" style="color: red; margin-top: 5px;"></p>
    </div>

    <div class="" style="margin-bottom: 50px;">
        <h5 class="" style="margin-top: 30px; margin-bottom: 20px; color: #a34d1f;">
            <strong> 3) Remplissez vos donnés personnelles et votre message :</strong>
        </h5>

        <div id="sexe" class=" col-lg-6 col-sm-12 col-xs-12" style="padding: 0; margin-bottom: 15px;">
            <h5 class="" style="margin-top: 30px; margin-bottom: 20px;"><strong> Vous êtes <span class="blue">*</span>: </strong> </h5>
            <div class="checkbox float-right col-sm-6 col-xs-12 col-lg-6" style="padding: 0;">
                <label><input type="radio" name="sexe" value="Femme"> Femme </label>
            </div>
            <div class="checkbox col-sm-6 col-xs-12 col-lg-6" style="padding: 0;">
                <label><input type="radio" name="sexe" value="Homme"> Homme </label>
            </div>
            <p class="comments" style="color: red; margin-top: 5px;"></p>
        </div>

        <div class="">
            <label for="firstname">Prénom<span class="blue">*</span></label>
            <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Votre prénom">
            <p class="comments" style="color: red; margin-top: 5px;"></p>
        </div>
        <div class="">
            <label for="name">Nom<span class="blue">*</span></label>
            <input id="name" type="text" name="name" class="form-control" placeholder="Votre Nom">
            <p class="comments" style="color: red; margin-top: 5px;"></p>
        </div>
        <div class="">
            <label for="email">Email<span class="blue">*</span></label>
            <input id="email" type="text" name="email" class="form-control" placeholder="Votre Email">
            <p class="comments" style="color: red; margin-top: 5px;"></p>
        </div>
        <div class="">
            <label for="phone">Téléphone<span class="blue">*</span></label>
            <input id="phone" type="tel" name="phone" maxlenght="10" size="10" class="form-control" placeholder="Votre Téléphone">
            <p class="comments" style="color: red; margin-top: 5px;"></p>
        </div>

        <div class="form-group">
            <label for="comment">Message<span class="blue">*</span> </label>
            <textarea class="form-control" rows="10" id="comment" style="height: 150px;" placeholder="Votre Message"></textarea>
        </div>
        <div class="">
            <p class="blue" style="padding-top: 10px;"><strong>* Ces informations sont requises.</strong></p>
        </div>
        <div class="">
            <input type="submit" class="button1 btn" value="Envoyer">

        </div>

    </div>
</form>