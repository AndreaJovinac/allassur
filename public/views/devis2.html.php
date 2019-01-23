<h2 style="margin: 30px 0px 30px 0px;"> Demande de devis : Professionnel </h2>

<!--- MODIFICATION DU CONTENU!-->
<form id="contact-form" method="post" role="form" style="margin-top: 10px;" data-action="../../core/contactdevis2.php">


    <h5 style="margin-bottom: 20px; color: #a34d1f;">
        <strong> 1) Sélectionner le type d'Assurance que vous souhaitez <span class="blue">*</span> : </strong>
    </h5>
    <div id="choice">
        <div>
            <div class="float-right col-lg-6 col-sm-12 col-xs-12" style="padding: 0; display : none;">
                <?php 
                    $index = 0;
                    foreach ($ctrl->choicesPro as $key => $value) {
                        if($index*2 >= count($ctrl->choicesPro)) {
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
        </div>
        <p class="comments" style="color: red; clear: both;"></p>
    </div>
    
    
    <div id="statut" class=" col-lg-6 col-sm-12 col-xs-12" style="padding: 0;">
        <h5 style="margin-top: 20px; color: #a34d1f; margin-top: 20px; "><strong>2) Quel est votre statut ? <span class="blue">*</span> : </strong> </h5>
        <div class="checkbox col-sm-12 col-xs-12" style="padding: 0;">
            <label><input type="radio" name="statut" value="SAS"> SAS </label>
        </div>
        <div class="checkbox col-sm-12 col-xs-12" style="padding: 0;">
            <label><input type="radio" name="statut" value="SASU"> SASU</label>
        </div>
        <div class="checkbox col-sm-12 col-xs-12" style="padding: 0;">
            <label><input type="radio" name="statut" value="SARL"> SARL </label>
        </div>
        <div class="checkbox col-sm-12 col-xs-12" style="padding: 0;">
            <label><input type="radio" name="statut" value="EIRL"> EIRL </label>
        </div>
        <div class="checkbox col-sm-12 col-xs-12" style="padding: 0;">
            <label><input type="radio" name="statut" value="EURL"> EURL </label>
        </div>
        <div class="checkbox col-sm-12 col-xs-12" style="padding: 0;">
            <label><input type="radio" name="statut" value="SCI"> SCI </label>
        </div>
        <div class="checkbox col-sm-12 col-xs-12" style="padding: 0;">
            <label><input type="radio" name="statut" value="Entreprise Individuelle (Auto-Entrepreneur)"> Entreprise Individuelle (Auto-Entrepreneur) </label>
        </div>
        <p class="comments" style="color: red; margin-top: 5px;"></p>
    </div>
    <div class="" style="margin-bottom: 50px;">
        <h5 class="" style="margin-top: 30px; margin-bottom: 20px; color: #a34d1f;">
            <strong> 3) Remplissez les informations corespondant à votre entreprise :</strong>
        </h5>
        <div class="">
            <label for="sociale">Raison sociale</label>
            <input id="sociale" type="text" name="sociale" class="form-control" placeholder="Votre raison sociale" style="margin-bottom: 20px;">
        </div>
        <div class="">
            <label for="siret">Numéro de SIRET<span class="blue">*</span></label>
            <input id="siret" type="text" name="siret" class="form-control" placeholder="Votre numéro de Siret">
            <p class="comments" style="color: red; margin-top: 5px;"></p>
        </div>
        <div class="">
            <label for="affaires">Chiffres d'Affaires</label>
            <input id="affaires" type="text" name="affaires" class="form-control" placeholder="Votre chiffre d'affaire">
        </div>
    </div> 
    <div class="" style="margin-bottom: 50px;">
        <h5 class="" style="margin-top: 30px; margin-bottom: 20px; color: #a34d1f;">
            <strong> 4) Êtes-vous déjà assurer ? Si oui :</strong>
        </h5>
        <div class="">
            <label for="compagnie">Nom de la compagnie d'assurance</label>
            <input id="compagnie" type="text" name="compagnie" class="form-control" placeholder="Le nom de la compagnie d'assurance" style="margin-bottom: 20px;">
        </div>
        <div class="">
            <label for="prime">Prime actuelle</label>
            <input id="prime" type="text" name="prime" class="form-control" placeholder="Votre prime actuelle">
        </div>
    </div>                    
    <div class="" style="margin-bottom: 50px;">
        <h5 class="" style="margin-top: 30px; margin-bottom: 20px; color: #a34d1f;">
            <strong> 5) Remplissez vos donnés personnelles et votre message :</strong>
        </h5>

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
            <label for="activite">Domaine d'activité<span class="blue">*</span></label>
            <input id="activite" type="text" name="activite" class="form-control" placeholder="Votre activité">
            <p class="comments" style="color: red; margin-top: 5px;"></p>
        </div>
        <div class="">
            <label for="email">Email<span class="blue">*</span></label>
            <input id="email" type="text" name="email" class="form-control" id="email" placeholder="Votre Email">
            <p class="comments" style="color: red; margin-top: 5px;"></p>
        </div>
        <div class="">
            <label for="phone">Téléphone<span class="blue">*</span></label>
            <input id="phone" type="tel" name="phone" maxlenght="10" size="10" class="form-control" placeholder="Votre Téléphone">
            <p class="comments" style="color: red; margin-top: 5px;"></p>
        </div>

        <div class="form-group">
            <label for="message">Message<span class="blue">*</span> </label>
            <textarea class="form-control" id="message" name="message" rows="10" style="height: 150px;" placeholder="Votre Message"></textarea>
            <p class="comments" style="color: red; margin-top: 5px;"></p>
        </div>
        <div class="">
            <p class="blue" style="padding-top: 10px;"><strong>* Ces informations sont requises.</strong></p>
        </div>
        <div class="">
            <input type="submit" class="button1 btn" value="Envoyer">

        </div>

    </div>
</form>