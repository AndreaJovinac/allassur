
    <div class="container sac clearfix nouscontacter" id="contacterancre" 
        <?php if($ctrl->isDevis()) echo('style="border-top: 1px solid #efefef; margin-top: 40px;"'); ?> >
        <div class="container">
            <h3 id="Cnt col-lg-11" style="text-align: center;"> Vous désirez nous contacter ?</h3>
            <div class="row marginnouscontacter">
                <div class="picto1 col-lg-4 " style="margin-top: 20px; margin-bottom: 20px;">
                    <img class="" src="img/telephone.png" alt="Card image cap" height="100" width="100">
                    <div class="card-body">
                        <h5 style="margin-bottom: 30px;"> Téléphone </h5>
                        <a href="#" class="btn btn-default" data-toggle="modal" data-target="#exampleModal"> Je choisis</a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Contacter par téléphone</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p> Vous pouvez contacter un conseiller par téléphonne. Notre agence est
                                            ouverte du lundi au vendredi de 9h00 à 18h00</p>
                                        <h3> 01 88 32 64 48
                                             ou 06 22 95 43 63</h3>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="picto1 col-lg-4 " style="margin-top: 20px; margin-bottom: 20px;">
                    <img class="" src="img/email.png" alt="Card image cap" height="100" width="100">
                    <div class="card-body">
                        <h5 style="margin-bottom: 30px;"> E-Mail </h5>
                        
                        <a href="#" class="btn btn-default" data-toggle="modal" data-target="#exampleModal2">Je choisis</a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Contacter par téléphone</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        
                                        <h3> <a href="mailto:contact@allassur.fr" style="color: black;">
                                                contact@allassur.fr</a> </h3>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="picto1 col-lg-4" style="margin-top: 20px; margin-bottom: 20px;">
                    <img class="" src="img/conseiller.png" alt="Card image cap" height="100" width="100">
                    <div class="card-body">
                        <h5 style="margin-bottom: 30px;"> Être rappelé </h5>
                       
                        <a href="#" class="btn btn-default" data-toggle="modal" data-target="#exampleModal3">Je choisis</a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Être rappelé</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="modal-body">
                                        <form id="contact-formfooter" method="post" role="form" style="" data-action="core/contact.php">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="firstname2">Prénom<span class="blue">*</span></label>
                                                        <input id="firstname2" type="text" name="firstname2" class="form-control"
                                                            placeholder="Votre prénom">
                                                        <p class="comments" style="color: red; margin-top: 5px;"></p>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="name2">Nom<span class="blue">*</span></label>
                                                        <input id="name2" type="text" name="name2" class="form-control"
                                                            placeholder="Votre Nom">
                                                        <p class="comments" style="color: red; margin-top: 5px;"></p>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="email2">Email<span class="blue">*</span></label>
                                                        <input id="email2" type="text" name="email2" class="form-control"
                                                            placeholder="Votre Email">
                                                        <p class="comments" style="color: red; margin-top: 5px;"></p>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="phone2">Téléphone<span class="blue">*</span></label>
                                                        <input id="phone2" type="tel" name="phone2" maxlenght="10" size="10"
                                                            class="form-control" placeholder="Votre Téléphone">
                                                        <p class="comments" style="color: red; margin-top: 5px;"></p>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p class="blue" style="padding-top: 10px;"><strong>* Ces
                                                                informations sont requises.</strong></p>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="submit" class="button1 btn" value="Envoyer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<footer class="container-fluid">
    <div class="footer-top container-fluid">

        <div class="container reseau ">
            <h4 id="Suivez" style="display: inline-block;" class="container col-sm-9 col-xs-9"> Suivez-nous sur les
                réseaux </h4>
            <div class="iconeres col-xs-12" style="display: inline-block;">
                <a class=" btn btn-default iconreseaux" id="moncercle" href="https://www.linkedin.com/company/">
                    <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KPGc+Cgk8Zz4KCQk8cmVjdCB5PSIxNjAiIHdpZHRoPSIxMTQuNDk2IiBoZWlnaHQ9IjM1MiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQyNi4zNjgsMTY0LjEyOGMtMS4yMTYtMC4zODQtMi4zNjgtMC44LTMuNjQ4LTEuMTUyYy0xLjUzNi0wLjM1Mi0zLjA3Mi0wLjY0LTQuNjQtMC44OTYgICAgYy02LjA4LTEuMjE2LTEyLjczNi0yLjA4LTIwLjU0NC0yLjA4Yy02Ni43NTIsMC0xMDkuMDg4LDQ4LjU0NC0xMjMuMDQsNjcuMjk2VjE2MEgxNjB2MzUyaDExNC40OTZWMzIwICAgIGMwLDAsODYuNTI4LTEyMC41MTIsMTIzLjA0LTMyYzAsNzkuMDA4LDAsMjI0LDAsMjI0SDUxMlYyNzQuNDY0QzUxMiwyMjEuMjgsNDc1LjU1MiwxNzYuOTYsNDI2LjM2OCwxNjQuMTI4eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPGNpcmNsZSBjeD0iNTYiIGN5PSI1NiIgcj0iNTYiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
                </a>
                <a class="btn btn-default iconreseaux float-right" id="moncercle" href="https://www.facebook.com/">
                    <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAzMTAgMzEwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAzMTAgMzEwOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCI+CjxnIGlkPSJYTUxJRF84MzRfIj4KCTxwYXRoIGlkPSJYTUxJRF84MzVfIiBkPSJNODEuNzAzLDE2NS4xMDZoMzMuOTgxVjMwNWMwLDIuNzYyLDIuMjM4LDUsNSw1aDU3LjYxNmMyLjc2MiwwLDUtMi4yMzgsNS01VjE2NS43NjVoMzkuMDY0ICAgYzIuNTQsMCw0LjY3Ny0xLjkwNiw0Ljk2Ny00LjQyOWw1LjkzMy01MS41MDJjMC4xNjMtMS40MTctMC4yODYtMi44MzYtMS4yMzQtMy44OTljLTAuOTQ5LTEuMDY0LTIuMzA3LTEuNjczLTMuNzMyLTEuNjczaC00NC45OTYgICBWNzEuOTc4YzAtOS43MzIsNS4yNC0xNC42NjcsMTUuNTc2LTE0LjY2N2MxLjQ3MywwLDI5LjQyLDAsMjkuNDIsMGMyLjc2MiwwLDUtMi4yMzksNS01VjUuMDM3YzAtMi43NjItMi4yMzgtNS01LTVoLTQwLjU0NSAgIEMxODcuNDY3LDAuMDIzLDE4Ni44MzIsMCwxODUuODk2LDBjLTcuMDM1LDAtMzEuNDg4LDEuMzgxLTUwLjgwNCwxOS4xNTFjLTIxLjQwMiwxOS42OTItMTguNDI3LDQzLjI3LTE3LjcxNiw0Ny4zNTh2MzcuNzUySDgxLjcwMyAgIGMtMi43NjIsMC01LDIuMjM4LTUsNXY1MC44NDRDNzYuNzAzLDE2Mi44NjcsNzguOTQxLDE2NS4xMDYsODEuNzAzLDE2NS4xMDZ6IiBmaWxsPSIjRkZGRkZGIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" /></a>
            </div>
        </div>
    </div>
    <div class="footer-center container">
        <div class="row" id="footerstyle">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <ul class="footer-list">
                    <h5 style="margin-bottom: 20px;">Particulier</h5>
                    <li>
                        <a href="./index
.php?page=sante">Santé</a>
                    </li>

                    <li>
                        <a href="./index
.php?page=prevoyance-sante">Prévoyance Santé</a>
                    </li>

                    <li>
                        <a href="./index
.php?page=obseques">Obsèques</a>
                    </li>

                    <li>
                        <a href="./index
.php?page=dependance">Dependance</a>
                    </li>

                    <li>
                        <a href="./index
.php?page=retraite">Retraite</a>
                    </li>

                    <li>
                        <a href="./index
.php?page=assurance-pret">Assurance de prêt</a>
                    </li>

                    <li>
                        <a href="./index
.php?page=automobile">Automobile</a>
                    </li>

                    <li>
                        <a href="./index
.php?page=moto">Moto</a>
                    </li>

                    <li>
                        <a href="./index
.php?page=habitation">Habitation</a>
                    </li>

                    <li>
                        <a href="./index
.php?page=clients-chats">Chient & Chats</a>
                    </li>

                </ul>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <ul class="footer-list">
                    <h5 style="margin-bottom: 20px;">Professionnel</h5>
                    <li>
                        <a href="./index.php?page=artisans">Responsabilité Civile</a>
                    </li>
                    <li>
                        <a href="./index.php?page=artisans">Mutuelle Entreprise</a>
                    </li>
                    <li>
                        <a href="./index.php?page=artisans">Prevoyance Entreprise</a>
                    </li>
                    <li>
                        <a href="./index.php?page=artisans">Artisans / BTP</a>
                    </li>
                    <li>
                        <a href="./index.php?page=artisans">Auto-entrepreneur</a>
                    </li>

                    <li>
                        <a href="./index.php?page=flotte-automobile">Flotte Automobile</a>
                    </li>

                    <li>
                        <a href="./index.php?page=vtc">VTC</a>
                    </li>

                    <li>
                        <a href="./index.php?page=taxi">TAXI</a>
                    </li>
                    <li>
                        <a href="./index.php?page=commercants">Commerçants </a>
                    </li>

                    <li>
                        <a href="./index.php?page=immobilier">Immobilier</a>
                    </li>

                    <li>
                        <a href="./index.php?page=m-services">Métiers du service</a>
                    </li>

                    <li>
                        <a href="./index.php?page=m-sante">Métiers de la santé</a>
                    </li>

                    <li>
                        <a href="./index.php?page=hotellerie">Hotellerie</a>
                    </li>

                    <li>
                        <a href="./index.php?page=restauration">Restauration</a>
                    </li>

                    <li>
                        <a href="./index.php?page=assurances">Autres Assurances</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <ul class="footer-list">
                    <h5 style="margin-bottom: 20px;">Horaires </h5>
                    <li>
                        <p> Ouvert de 9h00 à 12h00 <br /> et de 14h30 à 18h30
                            <br /> Ouvert du lundi au vendredi.</p>
                    </li>

                    <h5 style="margin-top: 40px; margin-bottom: 20px;">Qui sommes nous ? </h5>
                    <li>
                        <a href="./index.php?page=a-propos"> À propos d'Allassur</a>
                    </li>
                    <li>
                        <a href="./index.php?page=conseil"> Un Conseil ?</a>
                    </li>
                    <li>
                        <a href="./index.php?page=devis"> Devis pour Particulier </a>
                    </li>
                    <li>
                        <a href="./index.php?page=devis2"> Devis pour Professionnel </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <ul class="footer-list">
                    <li>
                        <img src="img/logo-blanc.png" style="margin-bottom: 20px;" alt="logo-Allassur" width="100%"
                            height="100%" />
                    </li>

                    <li>
                        <h5> Du particulier <br/> au professionnel</h5>
                    </li>

                    <li>
                        <p>93 rue du Faubourg Saint Denis, <br /> 
                           75010 Paris <br />
                            Téléphone : 01 88 32 64 48 <br /> 
                            ou 06 22 95 43 63 <br />
                            Mail : contact@allassur.fr<br />
                        </p>
                    </li>

                </ul>
            </div>

        </div>
        <div class="row">
            <hr class="container" style="border: 0.5px solid white;">
        </div>
        <div class="footer-bottom">
            <div class="row">
                <p class="d-inline col-lg-7 col-sm-12"> Copyright © 2018 All'Assur - Création <a href="http://jovinacandrea.fr">
                        jovinacandrea.fr </a></p>
                <ul class="footer-list copyright col-5 justify-content-end">
                    <li>
                        <a href="./index.php?page=mentions-legales">Mentions Légales</a>
                    </li>
                    <li>
                        <a href="./index.php?page=cgv"> CGU </a>
                    </li>
                    <li>
                        <a href="./index.php?page=plan"> Plan du site</a>
                    </li>

                    <li>
                        <a href="./index.php?page=conseil"> Un Conseil ?</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


</footer>