<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Les composants Jasvacripts de Boostrap -->
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript" src="script.js"></script>
        <script type="text/javascript" src="script1.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        
        <title>All'Assur : Courtier en assurances</title>
        
    </head>
    <script> 
        $(document).ready(function(){
          $("#contactnoir").click(function(){
            $('html, body').animate({scrollTop: 1835},'5000000')
          });
        });
        
        $(document).ready(function(){
          $("#obsequehref").click(function(){
            $('html, body').animate({scrollTop: 305},'5000000')
          });
        });
    </script>
    
    <body>
    
        
       <nav class="navbar navbar navigation d-none d-lg-block">
            <div class="container wrap-barrenoir">
                <div class="navbar-header">
                    <span class="telall"> Téléphone : 01 23 43 54 34</span>
                </div>
                    <ul class="nav justify-content-end barrenoir">
                       <li class="nav-item"> 
                           <a class="nav-link" href="/index.php?page=conseil"> Un conseil ?</a>
                       </li> 
                       <li class="nav-item"> 
                           <a class="nav-link" href="/index.php?page=a-propos"> À propos d'All'Assur</a>
                       </li> 
                       <li class="nav-item"> 
                           <a class="nav-link" href="#contacterancre" id="contactnoir"> Contact</a>
                       </li> 
                    </ul>
            </div>
        </nav>
        
       <div class="container sac" style="padding-bottom: 30px;"> 
           <!-- Menu Standard !-->
              <nav class="navbar navbar navigation2 d-none d-sm-none d-none d-lg-block d-xl-none d-none d-xl-block">
                    <div class="logo float-left">
                        <a href="index.html" class="navbar-brand">
                            <img src="img_BLANC.png" height="70" width="260" alt=""/> 
                        </a>
                    </div>
                    <ul class="nav justify-content-end ppta col-6 float-right" style="margin-top: 50px;">
                       <li class="nav-item"> 
                           <a id="partic" class="nav-link" href="/index.php">PARTICULIER</a>
                       </li> 
                       <li class="nav-item"> 
                            <a class="nav-link" id="professionel" href="/index.php?page=professionnel"> PROFESSIONNEL </a>
                       </li>  
                    </ul>
                  
                    
             </nav>
             <!-- Menu Mobile !-->
             <nav class="navbar navbar navigation2-2 d-lg-none">
                <div class="logo col-12" style="text-align: center; margin-bottom: 30px; padding: 0;">
                        <a href="" class="navbar-brand">
                            <img src="img_BLANC.png" height="70" width="220" alt=""/> 
                        </a>
                </div>
                 <ul class="nav nav-pills nav-fill col-12" style="padding: 0;">
                      <li class="nav-item" style="color: black;">
                        <a class="nav-link" id="proff" href="/index.php">PARTICULIER</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="proff" href="/index.php?page=professionnel">PROFESSIONNEL</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" id="proff" href="/index.php?page=devis" style="color: white;">FAIRE UN DEVIS</a>
                      </li>
                </ul>
            </nav>
            <div class="container"> 
                <div class="row"> 
                   
                    <div class="pos-f-t">
                          <div class="collapse" id="navbarToggleExternalContent">
                            <div class="bg-dark p-4 hidden-md-up">
                              <ul> 
                                  <li> <a href="/index.php?page=sante"> Santé</a></li>
                                
                              </ul>
                            </div>
                          </div>
                    </div>
                    <div class="jumbotron jumbotron2 container d-none d-sm-block">
                        <div class="content-jumbotron container col-11" style="margin-top: 25px;"> 
                            <h1>ALL'ASSUR</h1>
                            <h4>Courtier Assurances, du particulier au professionnel</h4>
                        </div>
                        
                    </div>
                    
                    <div class="container col-11">
                        <div class="container1 col-11 d-none d-sm-block" style="top: 0; margin-top: 30px;">
                        <nav aria-label="breadcrumb container">
                              <ol class="breadcrumb">
                                  <li class="breadcrumb-item active" aria-current="page"> <span style="font-weight: 200;"> Vous êtes ici : </span><a href="index.php" style="color: black;"> Accueil </a> <span style="font-weight: 200;"> / </span> Professionnel <span style="font-weight: 200;"> / </span> </li>
                              </ol>
                        </nav>
                     </div>
                    <div class="container container col-11 d-sm-none d-lg-none" style="padding: 0; margin-top: 30px;">
                        <nav aria-label="breadcrumb container">
                              <ol class="breadcrumb">
                                  <li class="breadcrumb-item active" aria-current="page"> <span style="font-weight: 200;"> Vous êtes ici : </span><a href="index.php" style="color: black;"> Accueil </a> <span style="font-weight: 200;"> / </span> Professionnel <span style="font-weight: 200;"> / </span> </li>
                              </ol>
                        </nav>
                     </div>
                        
                     <?php echo($this->pageView); ?>
                           
                        
                    </div>
                </div>
            </div>
       </div>
          <div class="container sac clearfix nouscontacter" style="border-top: 1px solid #efefef; margin-top: 40px;">
                <div class="container">
                <h3 id="Cnt col-lg-11" style="text-align: center;"> Vous désirez nous contacter ?</h3>
                    <div class="row marginnouscontacter"> 
                         <div class="picto1 col-lg-4 " style="margin-top: 20px; margin-bottom: 20px;">
                                          <img class="" src="img/telephone.png" alt="Card image cap" height="100" width="100">
                                              <div class="card-body">
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-default" data-toggle="modal" data-target="#exampleModal">Par téléphone ?</a>
                                                    <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                          <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Contacter par téléphone</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                              </div>
                                                              <div class="modal-body">
                                                                  <p> Vous pouvez contacter un conseiller par téléphonne. Notre agence est ouverte du lundi au vendredi de 9h00 à 18h00</p>
                                                                  <h3> 01 44 54 95 45</h3>
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
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-default" data-toggle="modal" data-target="#exampleModal2">Par mail ?</a>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                                          <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Contacter par téléphone</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                              </div>
                                                              <div class="modal-body">
                                                                  <p> Vous pouvez contacter un conseiller par mail. Notre agence est ouverte du lundi au vendredi de 9h00 à 18h00</p>
                                                                  <h3> <a href="mailto:contact@allassur.fr" style="color: black;"> contact@allassur.fr</a> </h3>
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
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-default" data-toggle="modal" data-target="#exampleModal3">Être rappelé ?</a>
                                               <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
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
                                                                  <h6> Vous souhaitez être rappelé par un de nos conseillers, pour cela il vous suffit de remplir ce formulaire de contact. Un de vos conseiller va vous contacter par téléphone.</h6>
                                                                  <form id="contact-form" method="post" action="" role="form" style="margin-top: 30px;">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <label for="firstname">Prénom<span class="blue">*</span></label>
                                                                            <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Votre prénom">
                                                                            <p class="comments" style="color: red; margin-top: 5px;"></p>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <label for="name">Nom<span class="blue">*</span></label>
                                                                            <input id="name" type="text" name="name" class="form-control" placeholder="Votre Nom">
                                                                            <p class="comments" style="color: red; margin-top: 5px;"></p>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <label for="email">Email<span class="blue">*</span></label>
                                                                            <input id="email" type="text" name="email" class="form-control" placeholder="Votre Email">
                                                                            <p class="comments" style="color: red; margin-top: 5px;"></p>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <label for="phone">Téléphone<span class="blue">*</span></label>
                                                                            <input id="phone" type="tel" name="phone" maxlenght="10" size="10" class="form-control" placeholder="Votre Téléphone">
                                                                            <p class="comments" style="color: red; margin-top: 5px;"></p>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <p class="blue" style="padding-top: 10px;"><strong>* Ces informations sont requises.</strong></p>
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
                        <h4 id="Suivez" style="display: inline-block;" class="container col-sm-9 col-xs-9"> Suivez-nous sur les réseaux </h4>
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
                                <a href="/index.php?page=sante">Santé</a>
                            </li>

                            <li>
                                <a href="/index.php?page=prevoyance-sante">Prévoyance Santé</a>
                            </li>

                            <li>
                               <a href="/index.php?page=assurance-pret">Assurance de prêt</a>
                            </li>

                            <li>
                               <a href="/index.php?page=automobile">Automobile</a>
                            </li>

                            <li>
                               <a href="/index.php?page=moto">Moto</a>
                            </li>

                            <li>
                               <a href="/index.php?page=habitation">Habitation</a>
                            </li>

                            <li>
                               <a href="/index.php?page=clients-chats">Chient & Chats</a>
                            </li>

                            <li>
                               <a href="/index.php?page=obseques">Obsèques </a>
                            </li>

                            <li>
                               <a href="/index.php?page=dependance">Dépendance</a>
                            </li>

                            <li>
                               <a href="/index.php?page=retraite">Retraite</a>
                            </li>
                     </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <ul class="footer-list">
                        <h5 style="margin-bottom: 20px;">Professionnel</h5>    
                        <li>
                            <a href="/index.php?page=artisans">Artisans / BTP</a>
                        </li>

                        <li>
                            <a href="/index.php?page=commercants">Commerçants </a>
                        </li>

                        <li>
                           <a href="/index.php?page=immobilier">Immobilier</a>
                        </li>

                        <li>
                           <a href="/index.php?page=m-services">Métiers du service</a>
                        </li>

                        <li>
                           <a href="/index.php?page=m-sante">Métiers de la santé</a>
                        </li>

                        <li>
                           <a href="/index.php?page=hotellerie">Hotellerie</a>
                        </li>
                        
                        <li>
                           <a href="/index.php?page=restauration">Restauration</a>
                        </li>

                        <li>
                           <a href="/index.php?page=secteurs">Autres secteurs</a>
                        </li>
                     </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <ul class="footer-list">
                        <h5 style="margin-bottom: 20px;">Horaires </h5>    
                        <li>
                            <p> Ouvert de 9h00 à 12h00 <br/> et de 14h30 à 18h30
                                <br/> Ouvert du lundi au vendredi.</p>
                        </li>

                        <h5 style="margin-top: 40px; margin-bottom: 20px;">Qui sommes nous ? </h5>
                        <li>
                            <a href="/index.php?page=a-propos"> À propos d'Allassur</a>
                        </li>
                         <li>
                            <a href="/index.php?page=conseil"> Conseil</a>
                        </li>
                        <li>
                            <a href="/index.php?page=devis"> Faire un devis </a>
                        </li>
                     </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <ul class="footer-list"> 
                        <li>
                            <img src="img/logo-blanc.png" style="margin-bottom: 20px;" alt="logo-Allassur" width="100%" height="100%"/>
                        </li>

                        <li>
                             <h5> Du particulier au professionnel</h5>
                        </li>

                        <li>
                            <p>5 rue Marcel Sembat, 75 009 Paris <br/> 
                               Téléphone : 01 23 45 05 67 <br/>
                                Mail : contact@allassur.fr<br/> 
                               Accès : Métro 9 - Station Miromesnil <br/> 
                               Voiture : Porte Saint-Cloud <br/> 
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
                    <p class="d-inline col-lg-7 col-sm-12"> Copyright © 2018 All'Assur - Création <a href="http://jovinacandrea.fr"> andreajovinac.fr </a></p>
                        <ul class="footer-list copyright col-5 justify-content-end">
                            <li>
                                <a href="/index.php?page=mentions-legales">Mentions Légales</a>
                            </li>
                             <li>
                                <a href="/index.php?page=cgv"> CGV </a>
                            </li>
                            <li>
                                <a href="/index.php?page=plan"> Plan du site</a>
                            </li>

                            <li>
                                <a href="/index.php?page=conseil"> Un conseil ?</a>
                            </li>
                         </ul>
                </div>
            </div>
    </div>
       
       
    </footer>
    
    </body>
    
</html>