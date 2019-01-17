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
    
        
       <nav class="navbar navbar navigation d-none d-lg-block" style="background-color: #a34d1f;">
            <div class="container wrap-barrenoir">
                <div class="navbar-header">
                    <span class="telall"> Téléphone : 01 23 43 54 34</span>
                </div>
                    <ul class="nav justify-content-end barrenoir">
                       <li class="nav-item"> 
                           <a class="nav-link" href="/Allassur/index.php?page=conseil"> Un conseil ?</a>
                       </li> 
                       <li class="nav-item"> 
                           <a class="nav-link" href="/Allassur/index.php?page=a-propos"> À propos d'All'Assur</a>
                       </li> 
                       <li class="nav-item"> 
                           <a class="nav-link" href="/Allassur/index.php?page=devis2"> Faire un devis</a>
                       </li>
                       <li class="nav-item"> 
                           <a class="nav-link" href="#contacterancre" id="contactnoir"> Contact</a>
                       </li> 
                    </ul>
            </div>
        </nav>
        
       <div class="container sac"> 
           <!-- Menu Standard !-->
              <nav class="navbar navbar navigation2 d-none d-sm-none d-none d-lg-block d-xl-none d-none d-xl-block">
                    <div class="logo float-left">
                        <a href="index.html" class="navbar-brand">
                            <img src="img/ALLASSUR_BLANC.png" height="70" width="260" alt=""/> 
                        </a>
                    </div>
                    <ul class="nav justify-content-end ppta col-6 float-right" style="margin-top: 50px;">
                       <li class="nav-item"> 
                           <a id="partic" class="nav-link" href="index.php">PARTICULIER </a>
                       </li> 
                       <li class="nav-item"> 
                           <a class="nav-link active" id="professionel" href="/Allassur/index.php?page=professionnel"> PROFESSIONNEL <hr style="border-bottom: 3px solid #a34d1f; margin: 6px 0;"></a>
                       </li>  
                    </ul>
                  
                    
             </nav>
             <!-- Menu Mobile !-->
             <nav class="navbar navbar navigation2-2 d-lg-none">
                <div class="logo col-12" style="text-align: center; margin-bottom: 30px; padding: 0;">
                        <a href="" class="navbar-brand">
                            <img src="img/ALLASSUR_BLANC.png" height="70" width="220" alt=""/> 
                        </a>
                </div>
                 <ul class="nav nav-pills nav-fill col-12" style="padding: 0;">
                      <li class="nav-item">
                        <a class="nav-link" id="proff" href="index.php">PARTICULIER</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="/Allassur/index.php?page=professionnel" style="background-color: #a34d1f;">PROFESSIONNEL</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="proff" href="/Allassur/index.php?page=devis2">FAIRE UN DEVIS</a>
                      </li>
                </ul>
            </nav>
           <!-- Artisans / BTP
                Commerçants
                Immobilier
                Métiers du service
                Métiers de la santé
                Hotellerie et restauration
                Autres secteurs! -->
            <div class="container"> 
                <div class="row"> 
                    <nav class="navbar navbar container navigation3 navigation-toogle3 d-lg-none" style="background-color: black;"> 
                        <span class="navbar-brand" style="color: white; font-size: 30px;" href="#">MENU</span>
                              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                                    <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ5MS4zMTgsMjM1LjMxOEgyMC42ODJDOS4yNiwyMzUuMzE4LDAsMjQ0LjU3NywwLDI1NnM5LjI2LDIwLjY4MiwyMC42ODIsMjAuNjgyaDQ3MC42MzYgICAgYzExLjQyMywwLDIwLjY4Mi05LjI1OSwyMC42ODItMjAuNjgyQzUxMiwyNDQuNTc4LDUwMi43NDEsMjM1LjMxOCw0OTEuMzE4LDIzNS4zMTh6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDkxLjMxOCw3OC40MzlIMjAuNjgyQzkuMjYsNzguNDM5LDAsODcuNjk5LDAsOTkuMTIxYzAsMTEuNDIyLDkuMjYsMjAuNjgyLDIwLjY4MiwyMC42ODJoNDcwLjYzNiAgICBjMTEuNDIzLDAsMjAuNjgyLTkuMjYsMjAuNjgyLTIwLjY4MkM1MTIsODcuNjk5LDUwMi43NDEsNzguNDM5LDQ5MS4zMTgsNzguNDM5eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ5MS4zMTgsMzkyLjE5N0gyMC42ODJDOS4yNiwzOTIuMTk3LDAsNDAxLjQ1NiwwLDQxMi44NzlzOS4yNiwyMC42ODIsMjAuNjgyLDIwLjY4Mmg0NzAuNjM2ICAgIGMxMS40MjMsMCwyMC42ODItOS4yNTksMjAuNjgyLTIwLjY4MlM1MDIuNzQxLDM5Mi4xOTcsNDkxLjMxOCwzOTIuMTk3eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                              </button>
                              <div class="collapse navbar-collapse" id="navbarTogglerDemo02"  style="background-color: black;">
                                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                      <li class="nav-item active">
                                        <a class="nav-link" href="/Allassur/index.php?page=artisans"> <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ4MCA0ODAiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ4MCA0ODA7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDYwLjA1NiwyMDkuMTA0Yy0yLjQ0Mi0xLjQzNC01LjQ2LTEuNDcxLTcuOTM2LTAuMDk2bC0yMi4wMTYsMTIuMjMyTDQyNCw3Ljc3NmMtMC4xMjEtNC4zMzEtMy42NjgtNy43NzgtOC03Ljc3NmgtNTYgICAgYy00LjMzMi0wLjAwMi03Ljg3OSwzLjQ0NS04LDcuNzc2TDM0NC41NDQsMjY4LjhMMzIwLDI4Mi40VjIxNmMtMC4wMDItNC40MTgtMy41ODYtNy45OTgtOC4wMDQtNy45OTYgICAgYy0xLjM1NiwwLjAwMS0yLjY5LDAuMzQ2LTMuODc2LDEuMDA0TDE3NiwyODIuNFYyMTZjLTAuMDAyLTQuNDE4LTMuNTg2LTcuOTk4LTguMDA0LTcuOTk2Yy0xLjM1NiwwLjAwMS0yLjY5LDAuMzQ2LTMuODc2LDEuMDA0ICAgIGwtMTQ0LDgwYy0yLjU0MSwxLjQwOS00LjExOSw0LjA4Ni00LjEyLDYuOTkydjE3NmMwLDQuNDE4LDMuNTgyLDgsOCw4aDQzMmM0LjQxOCwwLDgtMy41ODIsOC04VjIxNiAgICBDNDY0LDIxMy4xNjUsNDYyLjUsMjEwLjU0MSw0NjAuMDU2LDIwOS4xMDR6IE0zNjcuNzc2LDE2aDQwLjQ0OGwwLjQ2NCwxNkgzNjcuMzJMMzY3Ljc3NiwxNnogTTM2Ni44NTYsNDhoNDIuMjg4bDUuMiwxODEuOTkyICAgIEwzNjAuOCwyNTkuNzI4TDM2Ni44NTYsNDh6IE0yMzIsNDY0aC00OHYtNDBoNDhWNDY0eiBNMjk2LDQ2NGgtNDh2LTQwaDQ4VjQ2NHogTTQ0OCw0NjRIMzEydi00OGMwLTQuNDE4LTMuNTgyLTgtOC04SDE3NiAgICBjLTQuNDE4LDAtOCwzLjU4Mi04LDh2NDhIMzJWMzAwLjcxMkwxNjAsMjI5LjZWMjk2YzAuMDAyLDQuNDE4LDMuNTg2LDcuOTk4LDguMDA0LDcuOTk2YzEuMzU2LTAuMDAxLDIuNjktMC4zNDYsMy44NzYtMS4wMDQgICAgTDMwNCwyMjkuNlYyOTZjMC4wMDIsNC40MTgsMy41ODYsNy45OTgsOC4wMDQsNy45OTZjMS4zNTYtMC4wMDEsMi42OS0wLjM0NiwzLjg3Ni0xLjAwNGw3NS40NDgtNDEuOTEyTDQyNi40LDI0MS42bDIxLjYtMTJWNDY0eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTEyOCwzMjBINjRjLTQuNDE4LDAtOCwzLjU4Mi04LDh2MzJjMCw0LjQxOCwzLjU4Miw4LDgsOGg2NGM0LjQxOCwwLDgtMy41ODIsOC04di0zMkMxMzYsMzIzLjU4MiwxMzIuNDE4LDMyMCwxMjgsMzIweiAgICAgTTEyMCwzNTJINzJ2LTE2aDQ4VjM1MnoiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0yNzIsMzIwaC02NGMtNC40MTgsMC04LDMuNTgyLTgsOHYzMmMwLDQuNDE4LDMuNTgyLDgsOCw4aDY0YzQuNDE4LDAsOC0zLjU4Miw4LTh2LTMyQzI4MCwzMjMuNTgyLDI3Ni40MTgsMzIwLDI3MiwzMjB6ICAgICBNMjY0LDM1MmgtNDh2LTE2aDQ4VjM1MnoiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00MTYsMzIwaC02NGMtNC40MTgsMC04LDMuNTgyLTgsOHYzMmMwLDQuNDE4LDMuNTgyLDgsOCw4aDY0YzQuNDE4LDAsOC0zLjU4Miw4LTh2LTMyQzQyNCwzMjMuNTgyLDQyMC40MTgsMzIwLDQxNiwzMjB6ICAgICBNNDA4LDM1MmgtNDh2LTE2aDQ4VjM1MnoiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" /> ARTISANS / BTP</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="/Allassur/index.php?page=commercant"> <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KICA8Zz4KICAgIDxwYXRoIGQ9Im00OTQsOTkuNWwtMTAzLjUtODUuOWMtMS42LTEuNS00LjItMi4xLTYuMy0yLjFoLTI1Ny41Yy0yLjEsMC00LjEsMC41LTYuMywyLjFsLTEwMi4xLDg1LjhjLTQuMywzLjUtNy4zLDcuNS03LjMsMTMuMXYzODhoMjU0Ljl2LTEzMS4xYzAtMzEuMiAyNi01Ni4yIDU5LjMtNTYuMiAzMi4zLDAgNTkuMywyNSA1OS4zLDU2LjJ2MTMxLjFoMTE1LjUgMXYtMzg5LjdjMC00LjktMy4zLTgtNy0xMS4zem0tMTA3LjcsNTEuNGMwLDE5LjgtMTYuNywzNi40LTM2LjUsMzYuNC0xOS44LDAtMzYuNS0xNi42LTM2LjUtMzYuNHYtMzEuMmg3M3YzMS4yem0tOTMuOCwwYzAsMTkuOC0xNi43LDM2LjQtMzYuNSwzNi40cy0zNi41LTE2LjYtMzYuNS0zNi40di0zMS4yaDczdjMxLjJ6bS05My44LDBjMCwxOS44LTE2LjcsMzYuNC0zNi41LDM2LjQtMTkuOCwwLTM2LjUtMTYuNi0zNi41LTM2LjR2LTMxLjJoNzN2MzEuMnptLTkzLjksMGMwLDE5LjgtMTYuNywzNi40LTM2LjUsMzYuNHMtMzYuNS0xNi42LTM2LjUtMzYuNHYtMzEuMmg3M3YzMS4yem0xNjcuOS0xMTguNmwxNi40LDY2LjZoLTY2LjRsMTUuNy02Ni42aDM0LjN6bTU1LjIsMGw0OC4yLDY2LjZoLTY1LjFsLTkuOS00MC02LjQtMjYuNmgzMy4yem0tMTI3LjMsNjYuNmgtNjQuOGw0OC4yLTY2LjZoMzIuM2wtMTUuNyw2Ni42em0yMDYuNiwyMC44aDczdjMxLjJjMCwxOS44LTE2LjcsMzYuNC0zNi41LDM2LjRzLTM2LjUtMTYuNi0zNi41LTM2LjR2LTMxLjJ6bTU0LTIwLjhoLTU5LjRsLTQ4LjItNjYuNmgyNy42bDgwLDY2LjZ6bS0zMzAuMy02Ni42aDI3LjZsLTQ3LjksNjYuNmgtNTkuOGw4MC4xLTY2LjZ6bTI3NC40LDQ0Ny40di0xMTAuM2M1LjY4NDM0ZS0xNC00Mi43LTM2LjQtNzctODAuMS03Ny00NC43LDAtODAuMSwzNC4zLTgwLjEsNzd2MTExLjNoLTIxMy4zdi0yODZjMTAsOC4zIDIyLjcsMTMuNCAzNi41LDEzLjQgMTkuMiwwIDM2LjUtOS44IDQ2LjktMjQuNyAxMC40LDE0LjggMjcuNywyNC43IDQ2LjksMjQuN3MzNi41LTkuOCA0Ni45LTI0LjdjMTAuNCwxNC44IDI3LjcsMjQuNyA0Ni45LDI0LjdzMzYuNS05LjggNDYuOS0yNC43YzEwLjQsMTQuOCAyNy43LDI0LjcgNDYuOSwyNC43czM2LjUtOS44IDQ2LjktMjQuN2MxMC40LDE0LjggMjcuNywyNC43IDQ2LjksMjQuNyAxMy44LDAgMjYuNi01LjEgMzYuNS0xMy40djI4NC45aC03NC43eiIgZmlsbD0iI0ZGRkZGRiIvPgogIDwvZz4KPC9zdmc+Cg==" /> COMMERCANTS </a>
                                      </li>
                                      <li class="nav-item" style="border-bottom: none; border-bottom: 1px solid white;">
                                        <a class="nav-link disabled" href="/Allassur/index.php?page=immobilier"> <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDU5IDU5IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1OSA1OTsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIzMnB4IiBoZWlnaHQ9IjMycHgiPgo8Zz4KCTxwYXRoIGQ9Ik0xNCw3YzAtMy44NTktMy4xNDEtNy03LTdTMCwzLjE0MSwwLDd2NDVoMC4wMDNDMC4wMDMsNTIuMDIsMCw1Mi4wNCwwLDUyLjA2QzAsNTUuODg3LDMuMTEzLDU5LDYuOTQsNTlINTlWN0gxNHogTTIsNyAgIGMwLTIuNDIxLDEuNzMxLTQuNDQ0LDQuMDItNC45MDFDNi4wNzIsMi42MDMsNi40ODMsMyw3LDNzMC45MjgtMC4zOTcsMC45OC0wLjkwMUMxMC4yNjksMi41NTYsMTIsNC41NzksMTIsN3Y0MC4xMDUgICBDMTAuNzI5LDQ1LjgwNyw4Ljk1Nyw0NSw3LDQ1Yy0wLjI0MywwLTAuNDgyLDAuMDEzLTAuNzE5LDAuMDM3Yy0wLjEwNiwwLjAxMS0wLjIxLDAuMDMyLTAuMzE1LDAuMDQ4ICAgYy0wLjEyOCwwLjAxOS0wLjI1NywwLjAzNC0wLjM4MywwLjA2Yy0wLjEzOCwwLjAyOC0wLjI3MSwwLjA2OC0wLjQwNSwwLjEwNEM1LjA5LDQ1LjI3Myw1LDQ1LjI5MSw0LjkxMyw0NS4zMTggICBjLTAuMTY3LDAuMDUzLTAuMzI5LDAuMTE2LTAuNDkxLDAuMTgxYy0wLjA0OSwwLjAyLTAuMTAxLDAuMDM1LTAuMTUsMC4wNTZjLTAuMTk5LDAuMDg0LTAuMzkyLDAuMTgtMC41ODIsMC4yODIgICBjLTAuMDA4LDAuMDA0LTAuMDE3LDAuMDA4LTAuMDI1LDAuMDEyQzMuMDQ5LDQ2LjE4NCwyLjQ4Nyw0Ni42MDgsMiw0Ny4xMDVWN3ogTTU3LDU3SDYuOTRDNC4yMTYsNTcsMiw1NC43ODQsMiw1MiAgIGMwLTIuNzU3LDIuMjQzLTUsNS01czUsMi4yNDMsNSw1aDJWOWg0M1Y1N3oiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik00Ni4wMTcsMjEuMDAxYzAuMTc2LDAuMTIzLDAuMzc3LDAuMTgzLDAuNTc2LDAuMTgzYzAuMzE0LDAsMC42MjMtMC4xNDcsMC44MTgtMC40MjNjMC4zMTgtMC40NTEsMC4yMTEtMS4wNzUtMC4yNC0xLjM5NSAgIGwtMS42MzQtMS4xNTNjLTAuNDUzLTAuMzE3LTEuMDc1LTAuMjEtMS4zOTUsMC4yNGMtMC4zMTgsMC40NTEtMC4yMTEsMS4wNzUsMC4yNCwxLjM5NUw0Ni4wMTcsMjEuMDAxeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPHBhdGggZD0iTTUwLjkyLDI0LjQ2MWMwLjE3NSwwLjEyMywwLjM3NiwwLjE4MywwLjU3NSwwLjE4M2MwLjMxNCwwLDAuNjIzLTAuMTQ3LDAuODE4LTAuNDI0YzAuMzE4LTAuNDUxLDAuMjEtMS4wNzUtMC4yNDEtMS4zOTQgICBsLTEuNjM1LTEuMTUzYy0wLjQ1MS0wLjMxNy0xLjA3NC0wLjIxLTEuMzk0LDAuMjQxYy0wLjMxOCwwLjQ1MS0wLjIxLDEuMDc1LDAuMjQxLDEuMzk0TDUwLjkyLDI0LjQ2MXoiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik0zNyw0MWMwLDAuNTUzLDAuNDQ3LDEsMSwxaDJjMC41NTMsMCwxLTAuNDQ3LDEtMXMtMC40NDctMS0xLTFoLTJDMzcuNDQ3LDQwLDM3LDQwLjQ0NywzNyw0MXoiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik01MSwyNy4zODN2MmMwLDAuNTUzLDAuNDQ3LDEsMSwxczEtMC40NDcsMS0xdi0yYzAtMC41NTMtMC40NDctMS0xLTFTNTEsMjYuODMsNTEsMjcuMzgzeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPHBhdGggZD0iTTQxLjExNSwxNy41NDFjMC4xNzYsMC4xMjMsMC4zNzcsMC4xODMsMC41NzYsMC4xODNjMC4zMTQsMCwwLjYyMy0wLjE0NywwLjgxOC0wLjQyM2MwLjMxOC0wLjQ1MSwwLjIxMS0xLjA3NS0wLjI0LTEuMzk1ICAgbC0xLjYzNC0xLjE1M2MtMC40NTMtMC4zMTctMS4wNzUtMC4yMS0xLjM5NSwwLjI0Yy0wLjMxOCwwLjQ1MS0wLjIxMSwxLjA3NSwwLjI0LDEuMzk1TDQxLjExNSwxNy41NDF6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNNDMsNDFjMCwwLjU1MywwLjQ0NywxLDEsMWgyYzAuNTUzLDAsMS0wLjQ0NywxLTFzLTAuNDQ3LTEtMS0xaC0yQzQzLjQ0Nyw0MCw0Myw0MC40NDcsNDMsNDF6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMjksNDFjMC0wLjU1My0wLjQ0Ny0xLTEtMWgtMmMtMC41NTMsMC0xLDAuNDQ3LTEsMXMwLjQ0NywxLDEsMWgyQzI4LjU1Myw0MiwyOSw0MS41NTMsMjksNDF6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNNTIsMzYuMzgzYzAuNTUzLDAsMS0wLjQ0NywxLTF2LTJjMC0wLjU1My0wLjQ0Ny0xLTEtMXMtMSwwLjQ0Ny0xLDF2MkM1MSwzNS45MzYsNTEuNDQ3LDM2LjM4Myw1MiwzNi4zODN6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMzYuMjEzLDE0LjA4MWMwLjE3NiwwLjEyMywwLjM3NywwLjE4MywwLjU3NiwwLjE4M2MwLjMxNCwwLDAuNjIzLTAuMTQ3LDAuODE4LTAuNDIzYzAuMzE4LTAuNDUxLDAuMjExLTEuMDc1LTAuMjQtMS4zOTUgICBsLTEuNjM0LTEuMTUzYy0wLjQ1My0wLjMxNi0xLjA3NS0wLjIwOS0xLjM5NSwwLjI0Yy0wLjMxOCwwLjQ1MS0wLjIxMSwxLjA3NSwwLjI0LDEuMzk1TDM2LjIxMywxNC4wODF6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNNTEsNDBoLTFjLTAuNTUzLDAtMSwwLjQ0Ny0xLDFzMC40NDcsMSwxLDFoM3YtMi42MTdjMC0wLjU1My0wLjQ0Ny0xLTEtMXMtMSwwLjQ0Ny0xLDFWNDB6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMjAsNDJoMmMwLjU1MywwLDEtMC40NDcsMS0xcy0wLjQ0Ny0xLTEtMWgtMmMtMC41NTMsMC0xLDAuNDQ3LTEsMVMxOS40NDcsNDIsMjAsNDJ6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMTgsMjhjMC41NTMsMCwxLTAuNDQ3LDEtMXYtMmMwLTAuNTUzLTAuNDQ3LTEtMS0xcy0xLDAuNDQ3LTEsMXYyQzE3LDI3LjU1MywxNy40NDcsMjgsMTgsMjh6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMjAuNDUyLDIzLjI3YzAuMTk5LDAsMC40LTAuMDYsMC41NzYtMC4xODNsMS42MzQtMS4xNTNjMC40NTEtMC4zMTksMC41NTktMC45NDMsMC4yNC0xLjM5NSAgIGMtMC4zMTgtMC40NS0wLjk0MS0wLjU1OC0xLjM5NS0wLjI0bC0xLjYzNCwxLjE1M2MtMC40NTEsMC4zMTktMC41NTksMC45NDMtMC4yNCwxLjM5NUMxOS44MjksMjMuMTIyLDIwLjEzOCwyMy4yNywyMC40NTIsMjMuMjd6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMjUuMzU0LDE5LjgxYzAuMTk5LDAsMC40LTAuMDYsMC41NzYtMC4xODNsMS42MzQtMS4xNTNjMC40NTEtMC4zMTksMC41NTktMC45NDMsMC4yNC0xLjM5NSAgIGMtMC4zMTktMC40NDktMC45NDEtMC41NTctMS4zOTUtMC4yNGwtMS42MzQsMS4xNTNjLTAuNDUxLDAuMzE5LTAuNTU5LDAuOTQzLTAuMjQsMS4zOTVDMjQuNzMsMTkuNjYyLDI1LjAzOSwxOS44MSwyNS4zNTQsMTkuODF6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMTgsMzRjMC41NTMsMCwxLTAuNDQ3LDEtMXYtMmMwLTAuNTUzLTAuNDQ3LTEtMS0xcy0xLDAuNDQ3LTEsMXYyQzE3LDMzLjU1MywxNy40NDcsMzQsMTgsMzR6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMzAuMjU2LDE2LjM1YzAuMTk5LDAsMC40LTAuMDYsMC41NzYtMC4xODNsMS42MzQtMS4xNTNjMC40NTEtMC4zMTksMC41NTktMC45NDMsMC4yNC0xLjM5NSAgIGMtMC4zMTktMC40NDktMC45NC0wLjU1OS0xLjM5NS0wLjI0bC0xLjYzNCwxLjE1M2MtMC40NTEsMC4zMTktMC41NTksMC45NDMtMC4yNCwxLjM5NUMyOS42MzMsMTYuMjAyLDI5Ljk0MSwxNi4zNSwzMC4yNTYsMTYuMzV6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMzEsNDFjMCwwLjU1MywwLjQ0NywxLDEsMWgyYzAuNTUzLDAsMS0wLjQ0NywxLTFzLTAuNDQ3LTEtMS0xaC0yQzMxLjQ0Nyw0MCwzMSw0MC40NDcsMzEsNDF6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMTgsNDBjMC41NTMsMCwxLTAuNDQ3LDEtMXYtMmMwLTAuNTUzLTAuNDQ3LTEtMS0xcy0xLDAuNDQ3LTEsMXYyQzE3LDM5LjU1MywxNy40NDcsNDAsMTgsNDB6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNNDEsNTRoMTN2LThINDFWNTR6IE00Myw0OGg5djRoLTlWNDh6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMjIsMzB2MmMwLDAuNTUzLDAuNDQ3LDEsMSwxczEtMC40NDcsMS0xdi0yYzAtMC41NTMtMC40NDctMS0xLTFTMjIsMjkuNDQ3LDIyLDMweiIgZmlsbD0iI0ZGRkZGRiIvPgoJPHBhdGggZD0iTTMxLDI3Yy0wLjU1MywwLTEsMC40NDctMSwxdjJjMCwwLjU1MywwLjQ0NywxLDEsMXMxLTAuNDQ3LDEtMXYtMkMzMiwyNy40NDcsMzEuNTUzLDI3LDMxLDI3eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPHBhdGggZD0iTTI1LDI5aDJjMC41NTMsMCwxLTAuNDQ3LDEtMXMtMC40NDctMS0xLTFoLTJjLTAuNTUzLDAtMSwwLjQ0Ny0xLDFTMjQuNDQ3LDI5LDI1LDI5eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPHBhdGggZD0iTTI2LDM2YzAtMC41NTMtMC40NDctMS0xLTFoLTJjLTAuNTUzLDAtMSwwLjQ0Ny0xLDFzMC40NDcsMSwxLDFoMkMyNS41NTMsMzcsMjYsMzYuNTUzLDI2LDM2eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPHBhdGggZD0iTTI5LDM3aDJjMC41NTMsMCwxLTAuNDQ3LDEtMXYtMmMwLTAuNTUzLTAuNDQ3LTEtMS0xcy0xLDAuNDQ3LTEsMXYxaC0xYy0wLjU1MywwLTEsMC40NDctMSwxUzI4LjQ0NywzNywyOSwzN3oiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik00MCwyOGMwLDAuNTUzLDAuNDQ3LDEsMSwxaDJjMC41NTMsMCwxLTAuNDQ3LDEtMXMtMC40NDctMS0xLTFoLTJDNDAuNDQ3LDI3LDQwLDI3LjQ0Nyw0MCwyOHoiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik00NiwyOHYyYzAsMC41NTMsMC40NDcsMSwxLDFzMS0wLjQ0NywxLTF2LTJjMC0wLjU1My0wLjQ0Ny0xLTEtMVM0NiwyNy40NDcsNDYsMjh6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNNDcsMzdjMC41NTMsMCwxLTAuNDQ3LDEtMXYtMmMwLTAuNTUzLTAuNDQ3LTEtMS0xcy0xLDAuNDQ3LTEsMXYxaC0xYy0wLjU1MywwLTEsMC40NDctMSwxczAuNDQ3LDEsMSwxSDQ3eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPHBhdGggZD0iTTM5LDMzYzAuNTUzLDAsMS0wLjQ0NywxLTF2LTJjMC0wLjU1My0wLjQ0Ny0xLTEtMXMtMSwwLjQ0Ny0xLDF2MkMzOCwzMi41NTMsMzguNDQ3LDMzLDM5LDMzeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPHBhdGggZD0iTTM5LDM3aDJjMC41NTMsMCwxLTAuNDQ3LDEtMXMtMC40NDctMS0xLTFoLTJjLTAuNTUzLDAtMSwwLjQ0Ny0xLDFTMzguNDQ3LDM3LDM5LDM3eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPHBhdGggZD0iTTM4LDQ2aC01Yy0wLjU1MywwLTEsMC40NDctMSwxczAuNDQ3LDEsMSwxaDVjMC41NTMsMCwxLTAuNDQ3LDEtMVMzOC41NTMsNDYsMzgsNDZ6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMzgsNDloLTdjLTAuNTUzLDAtMSwwLjQ0Ny0xLDFzMC40NDcsMSwxLDFoN2MwLjU1MywwLDEtMC40NDcsMS0xUzM4LjU1Myw0OSwzOCw0OXoiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik0zOCw1MkgyOGMtMC41NTMsMC0xLDAuNDQ3LTEsMXMwLjQ0NywxLDEsMWgxMGMwLjU1MywwLDEtMC40NDcsMS0xUzM4LjU1Myw1MiwzOCw1MnoiIGZpbGw9IiNGRkZGRkYiLz4KCTxjaXJjbGUgY3g9IjQiIGN5PSI1IiByPSIxIiBmaWxsPSIjRkZGRkZGIi8+Cgk8Y2lyY2xlIGN4PSIxMCIgY3k9IjUiIHI9IjEiIGZpbGw9IiNGRkZGRkYiLz4KCTxjaXJjbGUgY3g9IjciIGN5PSI4IiByPSIxIiBmaWxsPSIjRkZGRkZGIi8+Cgk8Y2lyY2xlIGN4PSI0IiBjeT0iMTEiIHI9IjEiIGZpbGw9IiNGRkZGRkYiLz4KCTxjaXJjbGUgY3g9IjEwIiBjeT0iMTEiIHI9IjEiIGZpbGw9IiNGRkZGRkYiLz4KCTxjaXJjbGUgY3g9IjQiIGN5PSIxNyIgcj0iMSIgZmlsbD0iI0ZGRkZGRiIvPgoJPGNpcmNsZSBjeD0iMTAiIGN5PSIxNyIgcj0iMSIgZmlsbD0iI0ZGRkZGRiIvPgoJPGNpcmNsZSBjeD0iNyIgY3k9IjE0IiByPSIxIiBmaWxsPSIjRkZGRkZGIi8+Cgk8Y2lyY2xlIGN4PSI3IiBjeT0iMjAiIHI9IjEiIGZpbGw9IiNGRkZGRkYiLz4KCTxjaXJjbGUgY3g9IjQiIGN5PSIyMyIgcj0iMSIgZmlsbD0iI0ZGRkZGRiIvPgoJPGNpcmNsZSBjeD0iMTAiIGN5PSIyMyIgcj0iMSIgZmlsbD0iI0ZGRkZGRiIvPgoJPGNpcmNsZSBjeD0iNCIgY3k9IjI5IiByPSIxIiBmaWxsPSIjRkZGRkZGIi8+Cgk8Y2lyY2xlIGN4PSIxMCIgY3k9IjI5IiByPSIxIiBmaWxsPSIjRkZGRkZGIi8+Cgk8Y2lyY2xlIGN4PSI3IiBjeT0iMjYiIHI9IjEiIGZpbGw9IiNGRkZGRkYiLz4KCTxjaXJjbGUgY3g9IjciIGN5PSIzMiIgcj0iMSIgZmlsbD0iI0ZGRkZGRiIvPgoJPGNpcmNsZSBjeD0iNCIgY3k9IjM1IiByPSIxIiBmaWxsPSIjRkZGRkZGIi8+Cgk8Y2lyY2xlIGN4PSIxMCIgY3k9IjM1IiByPSIxIiBmaWxsPSIjRkZGRkZGIi8+Cgk8Y2lyY2xlIGN4PSI0IiBjeT0iNDEiIHI9IjEiIGZpbGw9IiNGRkZGRkYiLz4KCTxjaXJjbGUgY3g9IjEwIiBjeT0iNDEiIHI9IjEiIGZpbGw9IiNGRkZGRkYiLz4KCTxjaXJjbGUgY3g9IjciIGN5PSIzOCIgcj0iMSIgZmlsbD0iI0ZGRkZGRiIvPgoJPGNpcmNsZSBjeD0iNyIgY3k9IjQ0IiByPSIxIiBmaWxsPSIjRkZGRkZGIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" /> IMMOBILIER </a>
                                      </li>
                                      <li class="nav-item" style="border-bottom: none; border-bottom: 1px solid white;">
                                        <a class="nav-link disabled" href="/Allassur/index.php?page=m-services"> <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQxNC4yMjEgNDE0LjIyMSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDE0LjIyMSA0MTQuMjIxOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTMwMS44MjksMjMuNTk5QzI3Mi43MjUsOC4xODYsMjQwLjMwOCwwLjA4NywyMDcuMzc1LDBDOTUuMjgzLTAuMDIsNC4zOTgsOTAuODMyLDQuMzc4LDIwMi45MjQgICAgYy0wLjAxLDUyLjkwOSwyMC42NDMsMTAzLjczMSw1Ny41NTYsMTQxLjYzNmwtOC40OCw2MC4zMmMtMC43NCw0LjM1NiwyLjE5LDguNDg3LDYuNTQ2LDkuMjI3ICAgIGMyLjAxMSwwLjM0Miw0LjA3Ni0wLjA5Nyw1Ljc3NC0xLjIyN2w0Ni4wOC0zMC41NmM5OS4wNTgsNTIuNDYsMjIxLjg4OCwxNC42ODQsMjc0LjM0OC04NC4zNzRTNDAwLjg4Nyw3Ni4wNTgsMzAxLjgyOSwyMy41OTl6ICAgICBNMzQwLjQxLDMzNC4zMTVjLTM1LjExMywzNS42MDctODMuMDI3LDU1LjY2Mi0xMzMuMDM1LDU1LjY4NWMtMzIuMTk1LDAuMDQ0LTYzLjg1Ni04LjIyMi05MS45Mi0yNGMtMi40NzUtMS40MjktNS41MjUtMS40MjktOCwwICAgIGwtMzYuMDgsMjMuNDRsNi45Ni00Ni40OGMwLjM0NS0yLjUwNi0wLjUxNS01LjAyOC0yLjMyLTYuOEMyLjQ5NSwyNjMuNjU5LDEuNjY5LDE0NS4yODUsNzQuMTcsNzEuNzY1ICAgIFMyNjUuMDQ1LTIuNTgxLDMzOC41NjUsNjkuOTJTNDEyLjkxMSwyNjAuNzk1LDM0MC40MSwzMzQuMzE1eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTI1My4yMTUsMjc0LjhoLTYuNjRWMTU2LjU2YzAtNC40MTgtMy41ODItOC04LThoLTY5LjA0Yy00LjQxOCwwLTgsMy41ODItOCw4djI4LjhjMCw0LjQxOCwzLjU4Miw4LDgsOGg2LjcydjgxLjQ0aC02LjcyICAgIGMtNC40MTgsMC04LDMuNTgyLTgsOHYyOC44YzAsNC40MTgsMy41ODIsOCw4LDhoODMuNjhjNC40MTgsMCw4LTMuNTgyLDgtOHYtMjguOEMyNjEuMjE1LDI3OC4zODIsMjU3LjYzMywyNzQuOCwyNTMuMjE1LDI3NC44eiAgICAgTTE3Ny41MzUsMzAzLjZ2LTEyLjhoNi43MmM0LjQxOCwwLDgtMy41ODIsOC04di05Ny40NGMwLTQuNDE4LTMuNTgyLTgtOC04aC02Ljcydi0xMi44aDUyLjk2VjI4Mi44YzAsNC40MTgsMy41ODIsOCw4LDhoNi42NCAgICBsMC4wOCwxMi44SDE3Ny41MzV6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjA3LjM3NSw3MC40Yy0xOC41MTMsMC0zMy41MiwxNS4wMDctMzMuNTIsMzMuNTJjMCwxOC41MTMsMTUuMDA3LDMzLjUyLDMzLjUyLDMzLjUyczMzLjUyLTE1LjAwNywzMy41Mi0zMy41MiAgICBDMjQwLjg5NSw4NS40MDcsMjI1Ljg4Nyw3MC40LDIwNy4zNzUsNzAuNHogTTIwNy4zNzUsMTIxLjUyYy05LjY3NiwwLTE3LjUyLTcuODQ0LTE3LjUyLTE3LjUyICAgIGMtMC4wNDQtOS42NzYsNy43NjQtMTcuNTU2LDE3LjQ0LTE3LjZjMC4wMjcsMCwwLjA1MywwLDAuMDgsMHYwLjA4YzkuNjc2LDAsMTcuNTIsNy44NDQsMTcuNTIsMTcuNTIgICAgUzIxNy4wNTEsMTIxLjUyLDIwNy4zNzUsMTIxLjUyeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" /> METIERS DU SERVICE </a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="/Allassur/index.php?page=m-sante"> <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDYwIDYwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA2MCA2MDsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIzMnB4IiBoZWlnaHQ9IjMycHgiPgo8Zz4KCTxwYXRoIGQ9Ik00Ni41LDMxYy00LjA3MiwwLTcuNDM2LDMuMDYtNy45MzEsN0gyNy41di02LjEyNWMxLjA0LTAuMjU5LDEuOTM5LTAuOTE4LDIuNTA2LTEuODczbDEyLjkyLTIxLjg1MSAgIGMwLjc1Ni0xLjI3NSwwLjc2OS0yLjgwNiwwLjAzNS00LjA5NFM0MC45MDQsMiwzOS40MjEsMmgtMi4yNzJDMzYuNTg1LDAuODIyLDM1LjM5MSwwLDM0LDBjLTEuNTk2LDAtNS41LDEuMjI3LTUuNSwzLjUgICBTMzIuNDA0LDcsMzQsN2MxLjc1OCwwLDMuMjA0LTEuMzA4LDMuNDQ5LTNoMS45NzFjMC43NTUsMCwxLjQyOSwwLjM5MiwxLjgwMiwxLjA0OGMwLjM3NCwwLjY1NSwwLjM2NywxLjQzNS0wLjAxOCwyLjA4NSAgIGwtMTIuOTIsMjEuODUxQzI3LjkwNywyOS42MiwyNy4yNCwzMCwyNi41LDMwcy0xLjQwNy0wLjM4LTEuNzkxLTEuMDI2TDExLjQyOCw3LjEzMmMtMC4zODUtMC42NDktMC4zOTItMS40MjktMC4wMTgtMi4wODQgICBDMTEuNzg0LDQuMzkyLDEyLjQ1OCw0LDEzLjIxMiw0aDIuMzM4QzE1Ljc5Niw1LjY5MiwxNy4yNDIsNywxOSw3YzEuNTk2LDAsNS41LTEuMjI3LDUuNS0zLjVTMjAuNTk2LDAsMTksMCAgIGMtMS4zOTEsMC0yLjU4NSwwLjgyMi0zLjE0OSwyaC0yLjYzOWMtMS40ODMsMC0yLjgwNiwwLjc3LTMuNTQsMi4wNThTOC45NTEsNi44NzYsOS43MTMsOC4xNjFsMTMuMjgyLDIxLjg0MiAgIGMwLjU2NiwwLjk1NSwxLjQ2NSwxLjYxMywyLjUwNSwxLjg3MlYzOGgtOWMtNi4wNjUsMC0xMSw0LjkzNS0xMSwxMXM0LjkzNSwxMSwxMSwxMXMxMS00LjkzNSwxMS0xMXYtOWgxMS4wNjkgICBjMC40OTUsMy45NCwzLjg1OSw3LDcuOTMxLDdjNC40MTEsMCw4LTMuNTg5LDgtOFM1MC45MTEsMzEsNDYuNSwzMXogTTM0LDVjLTEuMjM0LDAtMy4zNTgtMC45ODktMy40OTgtMS41ICAgQzMwLjY0MiwyLjk4OSwzMi43NjYsMiwzNCwyYzAuODI3LDAsMS41LDAuNjczLDEuNSwxLjVTMzQuODI3LDUsMzQsNXogTTE5LDJjMS4yMzQsMCwzLjM1OCwwLjk4OSwzLjQ5OCwxLjUgICBDMjIuMzU4LDQuMDExLDIwLjIzNCw1LDE5LDVjLTAuODI3LDAtMS41LTAuNjczLTEuNS0xLjVTMTguMTczLDIsMTksMnogTTI1LjUsNDljMCw0Ljk2My00LjAzOCw5LTksOXMtOS00LjAzNy05LTlzNC4wMzgtOSw5LTloOSAgIFY0OXogTTQ2LjUsNDVjLTMuMzA5LDAtNi0yLjY5MS02LTZzMi42OTEtNiw2LTZzNiwyLjY5MSw2LDZTNDkuODA5LDQ1LDQ2LjUsNDV6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNNDYuNSwzNWMtMi4yMDYsMC00LDEuNzk0LTQsNHMxLjc5NCw0LDQsNHM0LTEuNzk0LDQtNFM0OC43MDYsMzUsNDYuNSwzNXogTTQ2LjUsNDFjLTEuMTAzLDAtMi0wLjg5Ny0yLTJzMC44OTctMiwyLTIgICBzMiwwLjg5NywyLDJTNDcuNjAzLDQxLDQ2LjUsNDF6IiBmaWxsPSIjRkZGRkZGIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" /> METIERS DE LA SANTE </a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="/Allassur/index.php?page=hotellerie">
                                          <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ4MCA0ODAiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ4MCA0ODA7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMzA0LDMwNC44MDhWMjMyYzAtMTMuMjMyLTEwLjc2OC0yNC0yNC0yNEg1NmMtMTMuMjMyLDAtMjQsMTAuNzY4LTI0LDI0djcyLjgwOEMxMy43NjgsMzA4LjUyOCwwLDMyNC42ODgsMCwzNDR2NDh2ODAgICAgYzAsNC40MTYsMy41ODQsOCw4LDhoMzJjNC40MTYsMCw4LTMuNTg0LDgtOHYtMjRoMjQwdjI0YzAsNC40MTYsMy41ODQsOCw4LDhoMzJjNC40MTYsMCw4LTMuNTg0LDgtOHYtODB2LTQ4ICAgIEMzMzYsMzI0LjY4OCwzMjIuMjMyLDMwOC41MjgsMzA0LDMwNC44MDh6IE00OCwyMzJjMC00LjQwOCwzLjU5Mi04LDgtOGgyMjRjNC40MDgsMCw4LDMuNTkyLDgsOHY3MmgtMTZ2LTMyICAgIGMwLTEzLjIzMi0xMC43NjgtMjQtMjQtMjRoLTQ4Yy0xMy4yMzIsMC0yNCwxMC43NjgtMjQsMjR2MzJoLTE2di0zMmMwLTEzLjIzMi0xMC43NjgtMjQtMjQtMjRIODhjLTEzLjIzMiwwLTI0LDEwLjc2OC0yNCwyNHYzMiAgICBINDhWMjMyeiBNMjU2LDI3MnYzMmgtNjR2LTMyYzAtNC40MDgsMy41OTItOCw4LThoNDhDMjUyLjQwOCwyNjQsMjU2LDI2Ny41OTIsMjU2LDI3MnogTTE0NCwyNzJ2MzJIODB2LTMyYzAtNC40MDgsMy41OTItOCw4LTggICAgaDQ4QzE0MC40MDgsMjY0LDE0NCwyNjcuNTkyLDE0NCwyNzJ6IE0zMjAsNDY0aC0xNnYtMjRjMC00LjQxNi0zLjU4NC04LTgtOEg0MGMtNC40MTYsMC04LDMuNTg0LTgsOHYyNEgxNnYtNjRoMzA0VjQ2NHogTTMyMCwzODQgICAgSDE2di00MGMwLTEzLjIzMiwxMC43NjgtMjQsMjQtMjRoMzJoODBoMzJoODBoMzJjMTMuMjMyLDAsMjQsMTAuNzY4LDI0LDI0VjM4NHoiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00NzIsMzA0SDM2MGMtNC40MTYsMC04LDMuNTg0LTgsOHY2NHY1NmgxNnYtNDhoOTZ2NDhoMTZ2LTU2di02NEM0ODAsMzA3LjU4NCw0NzYuNDE2LDMwNCw0NzIsMzA0eiBNNDY0LDM2OGgtOTZ2LTQ4aDk2ICAgIFYzNjh6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cmVjdCB4PSI0MDAiIHk9IjMzNiIgd2lkdGg9IjMyIiBoZWlnaHQ9IjE2IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDU1LjU5MiwyMzcuNDY0bC0xNi00OEM0MzguNDk2LDE4Ni4yLDQzNS40NDgsMTg0LDQzMiwxODRoLTMyYy0zLjQ0OCwwLTYuNDk2LDIuMi03LjU5Miw1LjQ3MmwtMTYsNDggICAgYy0wLjgxNiwyLjQ0LTAuNCw1LjEyLDEuMTA0LDcuMjA4YzEuNTA0LDIuMDg4LDMuOTIsMy4zMiw2LjQ4OCwzLjMyaDI0djI0aC0xNnYxNmg0OHYtMTZoLTE2di0yNGgyNCAgICBjMi41NjgsMCw0Ljk4NC0xLjIzMiw2LjQ4OC0zLjMyOEM0NTUuOTkyLDI0Mi41ODQsNDU2LjQsMjM5LjkwNCw0NTUuNTkyLDIzNy40NjR6IE0zOTUuMDk2LDIzMmwxMC42NzItMzJoMjAuNDcybDEwLjY2NCwzMiAgICBIMzk1LjA5NnoiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00NzUuMjcyLDEwNC42OTZsLTIzMi0xMDRjLTIuMDg4LTAuOTI4LTQuNDY0LTAuOTI4LTYuNTQ0LDBsLTIzMiwxMDRDMS44NDgsMTA1Ljk5MiwwLDEwOC44NDgsMCwxMTJ2OTZoMTZ2LTkwLjgyNCAgICBMMjQwLDE2Ljc2OGwyMjQsMTAwLjQxNlYyMDhoMTZ2LTk2QzQ4MCwxMDguODQ4LDQ3OC4xNTIsMTA1Ljk5Miw0NzUuMjcyLDEwNC42OTZ6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjk1LjIyNCwxMTAuNjcybC0xNS43ODQsMi42NTZjMC4zNzYsMi4xODQsMC41Niw0LjQyNCwwLjU2LDYuNjcyYzAsMjIuMDU2LTE3Ljk0NCw0MC00MCw0MGMtMjIuMDU2LDAtNDAtMTcuOTQ0LTQwLTQwICAgIGMwLTIyLjA1NiwxNy45NDQtNDAsNDAtNDBjNC41NzYsMCw5LjA3MiwwLjc2OCwxMy4zNDQsMi4yOGw1LjMyOC0xNS4wODhDMjUyLjY4LDY1LjA3MiwyNDYuNCw2NCwyNDAsNjRjLTMwLjg4LDAtNTYsMjUuMTItNTYsNTYgICAgczI1LjEyLDU2LDU2LDU2czU2LTI1LjEyLDU2LTU2QzI5NiwxMTYuODY0LDI5NS43MzYsMTEzLjcyOCwyOTUuMjI0LDExMC42NzJ6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjkwLjM0NCw2Ni4zNDRMMjQwLDExNi42ODhsLTEwLjM0NC0xMC4zNDRsLTExLjMxMiwxMS4zMTJsMTYsMTZjMS41NiwxLjU2LDMuNjA4LDIuMzQ0LDUuNjU2LDIuMzQ0ICAgIGMyLjA0OCwwLDQuMDk2LTAuNzg0LDUuNjU2LTIuMzQ0bDU2LTU2TDI5MC4zNDQsNjYuMzQ0eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" /> HÔTELLERIE  </a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link disabled" href="/Allassur/index.php?page=restauration">
                                          <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDU2LjM1NCwzMzQuMzk2Yy0wLjQ5NS0wLjgyOC0xLjAxNi0xLjYyMS0xLjUzNi0yLjMyMWMtNS4xNzEtNy4yMjgtMTIuODYtMTIuMDA2LTIxLjYzMi0xMy40NDkgICAgYy04LjczLTEuNDQyLTE3LjU3OSwwLjYxNC0yNC43ODEsNS43ODZsLTk1LjQwMyw2OC4xMjJoLTk5LjY2OWMtNC43MDIsMC04LjUzMy0zLjgyMy04LjUzMy04LjUzM3MzLjgzMS04LjUzMyw4LjUzMy04LjUzM0gyNjguOCAgICBjMTYuNDY5LDAsMjkuODY3LTEzLjM5NywyOS44NjctMjkuODY3YzAtMC4wOTQtMC4wMDktMC44NzktMC4wMTctMC45NjRjLTAuNTI5LTE2LjQ2MS0xNC40MTMtMjkuMjk1LTMwLjUzMi0yOC45MDJoLTExMS4wMSAgICBjLTkuODM5LDAuMDg1LTE5LjQyMiwzLjYxLTI2Ljk3NCw5LjkwN2wtNDEuNzI4LDM0LjczMWMtMS45NDYsMS42My0zLjA3Miw0LjAyOC0zLjA3Miw2LjU2MnYxMDIuNCAgICBjMCw0LjcxOSwzLjgyMyw4LjUzMyw4LjUzMyw4LjUzM2gyMTEuNzIxYzEzLjg1OC0wLjAxNywyNy4zNTgtNC44OTgsMzguMDI1LTEzLjczbDEwMy40NS04NS40NzggICAgQzQ2MS4xMTYsMzY4LjY0OCw0NjUuMTk1LDM0OS4yMSw0NTYuMzU0LDMzNC4zOTZ6IE00MzYuNjg1LDM2NS4xMzNMMzMyLjc0LDQ1MC45ODdjLTcuNjI5LDYuMzE1LTE3LjI4LDkuNzk2LTI3LjE2Miw5LjgxM0gxMDIuNCAgICB2LTg5Ljg2NWwzOC42NjQtMzIuMTg4YzQuNTQtMy43OCwxMC4yODMtNS44OTcsMTYuMTItNS45NDhsMTExLjIwNi0wLjAwOGM3LjA3NC0wLjAwOSwxMi45NzksNS4zNDIsMTMuMjEsMTIuODA5ICAgIGMwLDcuMDU3LTUuNzQzLDEyLjgtMTIuOCwxMi44aC01NS40NjdjLTE0LjExNCwwLTI1LjYsMTEuNDg2LTI1LjYsMjUuNnMxMS40ODYsMjUuNiwyNS42LDI1LjZoMTAyLjQgICAgYzEuNzc1LDAsMy41MDctMC41NTUsNC45NzUtMS41ODdsOTcuNjM4LTY5LjcyNmMzLjUxNi0yLjUyNiw3Ljc5MS0zLjUwNywxMi4wNzUtMi44MjVjNC4yNzUsMC43MDgsOC4wMTMsMy4wMjksMTAuNTgxLDYuNjEzICAgIGMwLjI1NiwwLjM1LDAuNDg2LDAuNzA4LDAuNzA4LDEuMDc1QzQ0Ni4wMjksMzUwLjM3OSw0NDQuMDIzLDM1OS44NzYsNDM2LjY4NSwzNjUuMTMzeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTkzLjYxMSwzNDkuODY3SDB2MTcuMDY3aDg1LjA3N3YxMjhIMFY1MTJoOTMuNjExYzQuNzEsMCw4LjUzMy0zLjgxNCw4LjUzMy04LjUzM1YzNTguNCAgICBDMTAyLjE0NCwzNTMuNjgxLDk4LjMyMSwzNDkuODY3LDkzLjYxMSwzNDkuODY3eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQyLjY2Nyw0MjYuNjY3Yy0xNC4xMTQsMC0yNS42LDExLjQ4Ni0yNS42LDI1LjZjMCwxNC4xMTQsMTEuNDg2LDI1LjYsMjUuNiwyNS42czI1LjYtMTEuNDg2LDI1LjYtMjUuNiAgICBDNjguMjY3LDQzOC4xNTMsNTYuNzgxLDQyNi42NjcsNDIuNjY3LDQyNi42Njd6IE00Mi42NjcsNDYwLjhjLTQuNzAyLDAtOC41MzMtMy44MjMtOC41MzMtOC41MzNjMC00LjcxLDMuODMxLTguNTMzLDguNTMzLTguNTMzICAgIGM0LjcwMiwwLDguNTMzLDMuODIzLDguNTMzLDguNTMzQzUxLjIsNDU2Ljk3Nyw0Ny4zNjksNDYwLjgsNDIuNjY3LDQ2MC44eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTUwMy40NjcsMjY0LjUzM0g4LjUzM2MtNC43MSwwLTguNTMzLDMuODE0LTguNTMzLDguNTMzYzAsMzIuOTMsMjYuNzk1LDU5LjczMyw1OS43MzMsNTkuNzMzaDM5Mi41MzMgICAgYzMyLjkzLDAsNTkuNzMzLTI2LjgwMyw1OS43MzMtNTkuNzMzQzUxMiwyNjguMzQ4LDUwOC4xODYsMjY0LjUzMyw1MDMuNDY3LDI2NC41MzN6IE00NTIuMjY3LDMxNS43MzNINTkuNzMzICAgIGMtMjAuNjA4LDAtMzcuODQ1LTE0LjY4Ni00MS44MDUtMzQuMTMzaDQ3Ni4xNDNDNDkwLjExMiwzMDEuMDQ3LDQ3Mi44NzUsMzE1LjczMyw0NTIuMjY3LDMxNS43MzN6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjU2LDQyLjY2N2MtMTIyLjMzNCwwLTIyMS44NjcsOTkuNTMzLTIyMS44NjcsMjIxLjg2N3Y4LjUzM2MwLDQuNzE5LDMuODIzLDguNTMzLDguNTMzLDguNTMzaDQyNi42NjcgICAgYzQuNzE5LDAsOC41MzMtMy44MTQsOC41MzMtOC41MzN2LTguNTMzQzQ3Ny44NjcsMTQyLjE5OSwzNzguMzQyLDQyLjY2NywyNTYsNDIuNjY3eiBNNTEuMiwyNjQuNTMzICAgIGMwLTExMi45MjIsOTEuODc4LTIwNC44LDIwNC44LTIwNC44czIwNC44LDkxLjg3OCwyMDQuOCwyMDQuOEg1MS4yeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTExNS42NDQsMTQwLjAwNmMtNS45NjUsNi43MDctMTEuNDk0LDEzLjg4NC0xNi40MzUsMjEuMzQybDE0LjIyNSw5LjQyOWM0LjUwNi02Ljc5Myw5LjU0LTEzLjMzOCwxNC45NjctMTkuNDM5ICAgIEwxMTUuNjQ0LDE0MC4wMDZ6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjU2LDc2LjhjLTQ3LjkyMywwLjAyNi05My41NTEsMTguMTMzLTEyOC40NjksNTAuOTYxbDExLjY5MSwxMi40MzNjMzEuNzQ0LTI5Ljg1LDczLjIyNC00Ni4zMDIsMTE2Ljc4Ny00Ni4zMjdMMjU2LDc2LjggICAgeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHJlY3QgeD0iMjMwLjQiIHdpZHRoPSI1MS4yIiBoZWlnaHQ9IjE3LjA2NyIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHJlY3QgeD0iMjQ3LjQ2NyIgeT0iOC41MzMiIHdpZHRoPSIxNy4wNjciIGhlaWdodD0iNDIuNjY3IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />  RESTAURATION  </a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link disabled" href="/Allassur/index.php?page=secteurs">
                                            <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMi4xMSA1MTIuMTEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMi4xMSA1MTIuMTE7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KPGc+Cgk8Zz4KCQk8Zz4KCQkJPHBhdGggZD0iTTQ3NS4yMTMsMzY2LjUxN2wtMTMwLjUsNDUuNzg3Yy0xLjkwOSwwLjY2OC0zLjkxOSwxLjAwMS01Ljk0MiwwLjk4M2gtMi4wMzNjMi42MDktOS4yODQsMS40MTItMTkuMjI1LTMuMzI1LTI3LjYyNSAgICAgbC0wLjY2Ny0xLjIwOGMtNy43MDItMTMuNTczLTIyLjA2MS0yMi4wMDYtMzcuNjY3LTIyLjEyMWgtMzYuODY2Yy0xMi43MTEtMC4wODktMjQuOTg4LTQuNjM1LTM0LjY5Mi0xMi44NDYgICAgIGMtMTIuNzk0LTEwLjcyMy0yOC45NC0xNi42MjctNDUuNjMzLTE2LjY4OGgtNC4zMjVjLTIuMTQ4LDAtNDUuODk2LDAuMzk5LTc0LjEyOSwyNC40NzRjLTMuMTc2LTQuNjMyLTguNDMtNy40MDItMTQuMDQ2LTcuNDA4ICAgICBIMTcuMTIxYy05LjQyMSwwLjAxMS0xNy4wNTYsNy42NDUtMTcuMDY3LDE3LjA2N1Y0ODYuNGMwLjAxMSw5LjQyMSw3LjY0NSwxNy4wNTYsMTcuMDY3LDE3LjA2N2g2OC4yNjcgICAgIGM1LjA5NC0wLjAxOSw5LjkwOS0yLjMyNSwxMy4xMTctNi4yODJjMTUuNDU4LDEwLjU2MSwzMy45NTIsMTUuNzY1LDUyLjY0OSwxNC44MTZoMTg1LjM0MiAgICAgYzEwLjc0NC0wLjAzOCwyMS4yNTctMy4xMTYsMzAuMzI1LTguODc5bDEzMi4xMTctODQuNjcxYzYuNTc3LTQuMzMxLDExLjExMi0xMS4xNDgsMTIuNTY3LTE4Ljg4OCAgICAgYzEuNTM4LTcuOTkxLTAuMjQtMTYuMjYzLTQuOTI1LTIyLjkxN0M0OTkuNTAxLDM2Ni43MjIsNDg2Ljc1OCwzNjIuNjA3LDQ3NS4yMTMsMzY2LjUxN3ogTTg1LjM4Nyw0ODYuNEgxNy4xMjFWMzY2LjkzM2g2OC4yNjcgICAgIFY0ODYuNHogTTQ5NC43NDYsMzk2LjM0MmMtMC41NSwzLjE2OS0yLjM3NSw1Ljk3My01LjA1LDcuNzU4bC0xMzIuMDI1LDg0LjYxMmMtNi4zMzEsNC4wMjktMTMuNjcxLDYuMTg1LTIxLjE3NSw2LjIyMUgxNTEuMTU0ICAgICBjLTMyLjYyNSwwLTQ1LjMyNS0xMi44MjktNDguNy0xNy4xODh2LTk5LjAwNGMyMC44NDItMjguNDIxLDcwLjYwOC0yOC44NzUsNzEuMTA4LTI4Ljg3NWg0LjMyNSAgICAgYzEyLjY5NSwwLjA1OCwyNC45NjgsNC41NTksMzQuNjkyLDEyLjcyMWMxMi43NzQsMTAuNzc0LDI4LjkyMywxNi43MjMsNDUuNjMzLDE2LjgxM2gzNi44NjcgICAgIGM5LjQ0OSwwLjAxOCwxOC4xNTMsNS4xMzMsMjIuNzY3LDEzLjM3OWwwLjY2NywxLjIwOGMzLjM3Miw2LjAzNCwzLjIwOCwxMy40MjItMC40MjksMTkuM2gtNDIuMDA0ICAgICBjLTE0LjM0OSwwLjA0MS0yOC4zMzcsNC41MDUtNDAuMDU4LDEyLjc4M2wtNS4xMTcsMy41OTJjLTIuNDk1LDEuNzUxLTMuODY2LDQuNjk5LTMuNTk4LDcuNzM1ICAgICBjMC4yNjksMy4wMzYsMi4xMzcsNS42OTgsNC45LDYuOTgzYzIuNzY0LDEuMjg1LDYuMDAzLDAuOTk5LDguNDk4LTAuNzUybDUuMS0zLjU3NWM4Ljg1NS02LjI2OCwxOS40MjYtOS42NTUsMzAuMjc1LTkuN2g2Mi42OTIgICAgIGMzLjk4NSwwLjAxOSw3Ljk0NC0wLjY1MiwxMS43LTEuOTgzbDEzMC4zMDktNDUuNzJjNC40MDMtMS40OTYsOS4yNjQsMC4xMDYsMTEuOTE3LDMuOTI1ICAgICBDNDk0LjY3NywzODkuNDE4LDQ5NS40MTcsMzkyLjk0Myw0OTQuNzQ2LDM5Ni4zNDJ6IiBmaWxsPSIjRkZGRkZGIi8+CgkJCTxwYXRoIGQ9Ik00Mi43MjEsNDYwLjhjMi4yNTktMC4wMzUsNC40MjEtMC45MTgsNi4wNTktMi40NzVjMC43NTMtMC44MywxLjM1OS0xLjc4MywxLjc5Mi0yLjgxNyAgICAgYzAuNDM3LTEuMDI2LDAuNjY5LTIuMTI3LDAuNjgzLTMuMjQyYy0wLjAzMy0yLjI1OS0wLjkxNy00LjQyMi0yLjQ3NS02LjA1OWMtMy40MjItMy4xNTktOC42OTYtMy4xNTktMTIuMTE3LDAgICAgIGMtMi40NjEsMi40NDEtMy4yMDEsNi4xMjktMS44NzIsOS4zMzFTMzkuMjU0LDQ2MC44Miw0Mi43MjEsNDYwLjh6IiBmaWxsPSIjRkZGRkZGIi8+CgkJCTxwYXRoIGQ9Ik0zNTguNDU0LDEwMi40YzE0LjEzOCwwLDI1LjYtMTEuNDYyLDI1LjYtMjUuNnMtMTEuNDYxLTI1LjYtMjUuNi0yNS42cy0yNS42LDExLjQ2MS0yNS42LDI1LjYgICAgIEMzMzIuODcsOTAuOTMyLDM0NC4zMjIsMTAyLjM4NSwzNTguNDU0LDEwMi40eiBNMzU4LjQ1NCw2OC4yNjdjNC43MTMsMCw4LjUzMywzLjgyLDguNTMzLDguNTMzcy0zLjgyLDguNTMzLTguNTMzLDguNTMzICAgICBzLTguNTMzLTMuODItOC41MzMtOC41MzNDMzQ5LjkyNiw3Mi4wODksMzUzLjc0Myw2OC4yNzEsMzU4LjQ1NCw2OC4yNjd6IiBmaWxsPSIjRkZGRkZGIi8+CgkJCTxwYXRoIGQ9Ik0zMjQuMzIxLDI1Nmg2OC4yNjdjMi4yNjMsMC4wMDEsNC40MzQtMC44OTgsNi4wMzUtMi40OTljMS42LTEuNiwyLjQ5OS0zLjc3MSwyLjQ5OS02LjAzNXYtMzQuMTMzICAgICBjMC4wMDEtMi4yNjMtMC44OTgtNC40MzQtMi40OTktNi4wMzVjLTEuNi0xLjYtMy43NzEtMi40OTktNi4wMzUtMi40OTloLTguNTMzVjEyOGMwLjAwMS0yLjI2My0wLjg5OC00LjQzNC0yLjQ5OS02LjAzNSAgICAgYy0xLjYtMS42LTMuNzcxLTIuNDk5LTYuMDM1LTIuNDk5aC01MS4yYy0yLjI2My0wLjAwMS00LjQzNCwwLjg5OC02LjAzNSwyLjQ5OWMtMS42LDEuNi0yLjQ5OSwzLjc3MS0yLjQ5OSw2LjAzNXYzNC4xMzMgICAgIGMtMC4wMDEsMi4yNjMsMC44OTgsNC40MzQsMi40OTksNi4wMzVjMS42LDEuNiwzLjc3MSwyLjQ5OSw2LjAzNSwyLjQ5OWg4LjUzM1YyMDQuOGgtOC41MzMgICAgIGMtMi4yNjMtMC4wMDEtNC40MzQsMC44OTgtNi4wMzUsMi40OTljLTEuNiwxLjYtMi40OTksMy43NzEtMi40OTksNi4wMzV2MzQuMTMzYy0wLjAwMSwyLjI2MywwLjg5OCw0LjQzNCwyLjQ5OSw2LjAzNSAgICAgQzMxOS44ODcsMjU1LjEwMiwzMjIuMDU4LDI1Ni4wMDEsMzI0LjMyMSwyNTZ6IE0zMzIuODU0LDIyMS44NjdoOC41MzNjMi4yNjMsMC4wMDEsNC40MzQtMC44OTgsNi4wMzUtMi40OTkgICAgIGMxLjYtMS42LDIuNDk5LTMuNzcxLDIuNDk5LTYuMDM1di01MS4yYzAuMDAxLTIuMjYzLTAuODk4LTQuNDM0LTIuNDk5LTYuMDM1Yy0xLjYtMS42LTMuNzcxLTIuNDk5LTYuMDM1LTIuNDk5aC04LjUzM3YtMTcuMDY3ICAgICBoMzQuMTMzdjc2LjhjLTAuMDAxLDIuMjYzLDAuODk4LDQuNDM0LDIuNDk5LDYuMDM1YzEuNiwxLjYsMy43NzEsMi40OTksNi4wMzUsMi40OTloOC41MzN2MTcuMDY3aC01MS4yVjIyMS44Njd6IiBmaWxsPSIjRkZGRkZGIi8+CgkJCTxwYXRoIGQ9Ik0yNjQuNTg3LDI3NS4xMjV2NDkuMTQyYzAsMy4yNzMsMS44NzIsNi4yNTgsNC44MTksNy42ODJjMi45NDcsMS40MjUsNi40NDksMS4wMzgsOS4wMTQtMC45OTVsMzcuNTMzLTI5LjcyOSAgICAgYzU3LjY5NiwxNi42MDcsMTE5Ljc3OS0xLjkyMSwxNTguOTM1LTQ3LjQzNGMzOS4xNTYtNDUuNTEzLDQ4LjIwOC0xMDkuNjY2LDIzLjE3Mi0xNjQuMjM2ICAgICBDNDczLjAyNiwzNC45ODYsNDE4LjQ5MywwLjAwNCwzNTguNDU0LDBDMjkyLjc0LTAuMDE2LDIzNC4yOTksNDEuNzgzLDIxMy4wOCwxMDMuOTc3ICAgICBDMTkxLjg2MSwxNjYuMTcsMjEyLjU2NywyMzQuOTczLDI2NC41ODcsMjc1LjEyNXogTTIzNy4wMDgsOTEuNTVjMzAuNTQ4LTU5Ljc1OCwxMDAuMDExLTg4LjQzNCwxNjMuODE4LTY3LjYyOSAgICAgczEwMy4wMTUsODQuOTE3LDkyLjQ2NSwxNTEuMTk1cy02Ny43MjQsMTE1LjA0OS0xMzQuODM3LDExNS4wMTdjLTE0LjE0MywwLjAyMy0yOC4yMDMtMi4xNy00MS42NjctNi41ICAgICBjLTIuNzE2LTAuODY4LTUuNjg1LTAuMzMxLTcuOTI1LDEuNDM0bC0yNy4yMDgsMjEuNTU0VjI3MC44NWMwLjAwMS0yLjczNS0xLjMxLTUuMzA0LTMuNTI1LTYuOTA4ICAgICBDMjIzLjg5NywyMjQuNDA3LDIwNi40NiwxNTEuMzA4LDIzNy4wMDgsOTEuNTV6IiBmaWxsPSIjRkZGRkZGIi8+CgkJPC9nPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" /> AUTRES SECTEURS</a>
                                      </li>
                                    </ul>
                            </div>
                    </nav>
                    <nav class="navbar navbar container navigation3 d-none d-lg-none d-md-none d-lg-block" style="background-color: black;"> 
                        <ul class="nav navmaron">
                               <li class="nav-item">
                                   <a class="nav-link" href="/Allassur/index.php?page=artisans">
                                       <span class="picto-nav"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ4MCA0ODAiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ4MCA0ODA7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDYwLjA1NiwyMDkuMTA0Yy0yLjQ0Mi0xLjQzNC01LjQ2LTEuNDcxLTcuOTM2LTAuMDk2bC0yMi4wMTYsMTIuMjMyTDQyNCw3Ljc3NmMtMC4xMjEtNC4zMzEtMy42NjgtNy43NzgtOC03Ljc3NmgtNTYgICAgYy00LjMzMi0wLjAwMi03Ljg3OSwzLjQ0NS04LDcuNzc2TDM0NC41NDQsMjY4LjhMMzIwLDI4Mi40VjIxNmMtMC4wMDItNC40MTgtMy41ODYtNy45OTgtOC4wMDQtNy45OTYgICAgYy0xLjM1NiwwLjAwMS0yLjY5LDAuMzQ2LTMuODc2LDEuMDA0TDE3NiwyODIuNFYyMTZjLTAuMDAyLTQuNDE4LTMuNTg2LTcuOTk4LTguMDA0LTcuOTk2Yy0xLjM1NiwwLjAwMS0yLjY5LDAuMzQ2LTMuODc2LDEuMDA0ICAgIGwtMTQ0LDgwYy0yLjU0MSwxLjQwOS00LjExOSw0LjA4Ni00LjEyLDYuOTkydjE3NmMwLDQuNDE4LDMuNTgyLDgsOCw4aDQzMmM0LjQxOCwwLDgtMy41ODIsOC04VjIxNiAgICBDNDY0LDIxMy4xNjUsNDYyLjUsMjEwLjU0MSw0NjAuMDU2LDIwOS4xMDR6IE0zNjcuNzc2LDE2aDQwLjQ0OGwwLjQ2NCwxNkgzNjcuMzJMMzY3Ljc3NiwxNnogTTM2Ni44NTYsNDhoNDIuMjg4bDUuMiwxODEuOTkyICAgIEwzNjAuOCwyNTkuNzI4TDM2Ni44NTYsNDh6IE0yMzIsNDY0aC00OHYtNDBoNDhWNDY0eiBNMjk2LDQ2NGgtNDh2LTQwaDQ4VjQ2NHogTTQ0OCw0NjRIMzEydi00OGMwLTQuNDE4LTMuNTgyLTgtOC04SDE3NiAgICBjLTQuNDE4LDAtOCwzLjU4Mi04LDh2NDhIMzJWMzAwLjcxMkwxNjAsMjI5LjZWMjk2YzAuMDAyLDQuNDE4LDMuNTg2LDcuOTk4LDguMDA0LDcuOTk2YzEuMzU2LTAuMDAxLDIuNjktMC4zNDYsMy44NzYtMS4wMDQgICAgTDMwNCwyMjkuNlYyOTZjMC4wMDIsNC40MTgsMy41ODYsNy45OTgsOC4wMDQsNy45OTZjMS4zNTYtMC4wMDEsMi42OS0wLjM0NiwzLjg3Ni0xLjAwNGw3NS40NDgtNDEuOTEyTDQyNi40LDI0MS42bDIxLjYtMTJWNDY0eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTEyOCwzMjBINjRjLTQuNDE4LDAtOCwzLjU4Mi04LDh2MzJjMCw0LjQxOCwzLjU4Miw4LDgsOGg2NGM0LjQxOCwwLDgtMy41ODIsOC04di0zMkMxMzYsMzIzLjU4MiwxMzIuNDE4LDMyMCwxMjgsMzIweiAgICAgTTEyMCwzNTJINzJ2LTE2aDQ4VjM1MnoiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0yNzIsMzIwaC02NGMtNC40MTgsMC04LDMuNTgyLTgsOHYzMmMwLDQuNDE4LDMuNTgyLDgsOCw4aDY0YzQuNDE4LDAsOC0zLjU4Miw4LTh2LTMyQzI4MCwzMjMuNTgyLDI3Ni40MTgsMzIwLDI3MiwzMjB6ICAgICBNMjY0LDM1MmgtNDh2LTE2aDQ4VjM1MnoiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00MTYsMzIwaC02NGMtNC40MTgsMC04LDMuNTgyLTgsOHYzMmMwLDQuNDE4LDMuNTgyLDgsOCw4aDY0YzQuNDE4LDAsOC0zLjU4Miw4LTh2LTMyQzQyNCwzMjMuNTgyLDQyMC40MTgsMzIwLDQxNiwzMjB6ICAgICBNNDA4LDM1MmgtNDh2LTE2aDQ4VjM1MnoiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" /></span>
                                        ARTISANS & BTP
                                        </a>
                            <li class="nav-item">
                                   
                                   <a class="nav-link coucou" href="/Allassur/index.php?page=commercants"> 
                                       <span class="picto-nav"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KICA8Zz4KICAgIDxwYXRoIGQ9Im00OTQsOTkuNWwtMTAzLjUtODUuOWMtMS42LTEuNS00LjItMi4xLTYuMy0yLjFoLTI1Ny41Yy0yLjEsMC00LjEsMC41LTYuMywyLjFsLTEwMi4xLDg1LjhjLTQuMywzLjUtNy4zLDcuNS03LjMsMTMuMXYzODhoMjU0Ljl2LTEzMS4xYzAtMzEuMiAyNi01Ni4yIDU5LjMtNTYuMiAzMi4zLDAgNTkuMywyNSA1OS4zLDU2LjJ2MTMxLjFoMTE1LjUgMXYtMzg5LjdjMC00LjktMy4zLTgtNy0xMS4zem0tMTA3LjcsNTEuNGMwLDE5LjgtMTYuNywzNi40LTM2LjUsMzYuNC0xOS44LDAtMzYuNS0xNi42LTM2LjUtMzYuNHYtMzEuMmg3M3YzMS4yem0tOTMuOCwwYzAsMTkuOC0xNi43LDM2LjQtMzYuNSwzNi40cy0zNi41LTE2LjYtMzYuNS0zNi40di0zMS4yaDczdjMxLjJ6bS05My44LDBjMCwxOS44LTE2LjcsMzYuNC0zNi41LDM2LjQtMTkuOCwwLTM2LjUtMTYuNi0zNi41LTM2LjR2LTMxLjJoNzN2MzEuMnptLTkzLjksMGMwLDE5LjgtMTYuNywzNi40LTM2LjUsMzYuNHMtMzYuNS0xNi42LTM2LjUtMzYuNHYtMzEuMmg3M3YzMS4yem0xNjcuOS0xMTguNmwxNi40LDY2LjZoLTY2LjRsMTUuNy02Ni42aDM0LjN6bTU1LjIsMGw0OC4yLDY2LjZoLTY1LjFsLTkuOS00MC02LjQtMjYuNmgzMy4yem0tMTI3LjMsNjYuNmgtNjQuOGw0OC4yLTY2LjZoMzIuM2wtMTUuNyw2Ni42em0yMDYuNiwyMC44aDczdjMxLjJjMCwxOS44LTE2LjcsMzYuNC0zNi41LDM2LjRzLTM2LjUtMTYuNi0zNi41LTM2LjR2LTMxLjJ6bTU0LTIwLjhoLTU5LjRsLTQ4LjItNjYuNmgyNy42bDgwLDY2LjZ6bS0zMzAuMy02Ni42aDI3LjZsLTQ3LjksNjYuNmgtNTkuOGw4MC4xLTY2LjZ6bTI3NC40LDQ0Ny40di0xMTAuM2M1LjY4NDM0ZS0xNC00Mi43LTM2LjQtNzctODAuMS03Ny00NC43LDAtODAuMSwzNC4zLTgwLjEsNzd2MTExLjNoLTIxMy4zdi0yODZjMTAsOC4zIDIyLjcsMTMuNCAzNi41LDEzLjQgMTkuMiwwIDM2LjUtOS44IDQ2LjktMjQuNyAxMC40LDE0LjggMjcuNywyNC43IDQ2LjksMjQuN3MzNi41LTkuOCA0Ni45LTI0LjdjMTAuNCwxNC44IDI3LjcsMjQuNyA0Ni45LDI0LjdzMzYuNS05LjggNDYuOS0yNC43YzEwLjQsMTQuOCAyNy43LDI0LjcgNDYuOSwyNC43czM2LjUtOS44IDQ2LjktMjQuN2MxMC40LDE0LjggMjcuNywyNC43IDQ2LjksMjQuNyAxMy44LDAgMjYuNi01LjEgMzYuNS0xMy40djI4NC45aC03NC43eiIgZmlsbD0iI0ZGRkZGRiIvPgogIDwvZz4KPC9zdmc+Cg==" /></span>
                                      COMMERÇANTS
                                   </a>
                               </li>
                               <li class="nav-item"> 
                                   <a class="nav-link prevoyancesante" href="/Allassur/index.php?page=immobilier" id="dLabel" aria-haspopup="true" aria-expanded="true">
                                       <span class="picto-nav"> <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDU5IDU5IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1OSA1OTsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIzMnB4IiBoZWlnaHQ9IjMycHgiPgo8Zz4KCTxwYXRoIGQ9Ik0xNCw3YzAtMy44NTktMy4xNDEtNy03LTdTMCwzLjE0MSwwLDd2NDVoMC4wMDNDMC4wMDMsNTIuMDIsMCw1Mi4wNCwwLDUyLjA2QzAsNTUuODg3LDMuMTEzLDU5LDYuOTQsNTlINTlWN0gxNHogTTIsNyAgIGMwLTIuNDIxLDEuNzMxLTQuNDQ0LDQuMDItNC45MDFDNi4wNzIsMi42MDMsNi40ODMsMyw3LDNzMC45MjgtMC4zOTcsMC45OC0wLjkwMUMxMC4yNjksMi41NTYsMTIsNC41NzksMTIsN3Y0MC4xMDUgICBDMTAuNzI5LDQ1LjgwNyw4Ljk1Nyw0NSw3LDQ1Yy0wLjI0MywwLTAuNDgyLDAuMDEzLTAuNzE5LDAuMDM3Yy0wLjEwNiwwLjAxMS0wLjIxLDAuMDMyLTAuMzE1LDAuMDQ4ICAgYy0wLjEyOCwwLjAxOS0wLjI1NywwLjAzNC0wLjM4MywwLjA2Yy0wLjEzOCwwLjAyOC0wLjI3MSwwLjA2OC0wLjQwNSwwLjEwNEM1LjA5LDQ1LjI3Myw1LDQ1LjI5MSw0LjkxMyw0NS4zMTggICBjLTAuMTY3LDAuMDUzLTAuMzI5LDAuMTE2LTAuNDkxLDAuMTgxYy0wLjA0OSwwLjAyLTAuMTAxLDAuMDM1LTAuMTUsMC4wNTZjLTAuMTk5LDAuMDg0LTAuMzkyLDAuMTgtMC41ODIsMC4yODIgICBjLTAuMDA4LDAuMDA0LTAuMDE3LDAuMDA4LTAuMDI1LDAuMDEyQzMuMDQ5LDQ2LjE4NCwyLjQ4Nyw0Ni42MDgsMiw0Ny4xMDVWN3ogTTU3LDU3SDYuOTRDNC4yMTYsNTcsMiw1NC43ODQsMiw1MiAgIGMwLTIuNzU3LDIuMjQzLTUsNS01czUsMi4yNDMsNSw1aDJWOWg0M1Y1N3oiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik00Ni4wMTcsMjEuMDAxYzAuMTc2LDAuMTIzLDAuMzc3LDAuMTgzLDAuNTc2LDAuMTgzYzAuMzE0LDAsMC42MjMtMC4xNDcsMC44MTgtMC40MjNjMC4zMTgtMC40NTEsMC4yMTEtMS4wNzUtMC4yNC0xLjM5NSAgIGwtMS42MzQtMS4xNTNjLTAuNDUzLTAuMzE3LTEuMDc1LTAuMjEtMS4zOTUsMC4yNGMtMC4zMTgsMC40NTEtMC4yMTEsMS4wNzUsMC4yNCwxLjM5NUw0Ni4wMTcsMjEuMDAxeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPHBhdGggZD0iTTUwLjkyLDI0LjQ2MWMwLjE3NSwwLjEyMywwLjM3NiwwLjE4MywwLjU3NSwwLjE4M2MwLjMxNCwwLDAuNjIzLTAuMTQ3LDAuODE4LTAuNDI0YzAuMzE4LTAuNDUxLDAuMjEtMS4wNzUtMC4yNDEtMS4zOTQgICBsLTEuNjM1LTEuMTUzYy0wLjQ1MS0wLjMxNy0xLjA3NC0wLjIxLTEuMzk0LDAuMjQxYy0wLjMxOCwwLjQ1MS0wLjIxLDEuMDc1LDAuMjQxLDEuMzk0TDUwLjkyLDI0LjQ2MXoiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik0zNyw0MWMwLDAuNTUzLDAuNDQ3LDEsMSwxaDJjMC41NTMsMCwxLTAuNDQ3LDEtMXMtMC40NDctMS0xLTFoLTJDMzcuNDQ3LDQwLDM3LDQwLjQ0NywzNyw0MXoiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik01MSwyNy4zODN2MmMwLDAuNTUzLDAuNDQ3LDEsMSwxczEtMC40NDcsMS0xdi0yYzAtMC41NTMtMC40NDctMS0xLTFTNTEsMjYuODMsNTEsMjcuMzgzeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPHBhdGggZD0iTTQxLjExNSwxNy41NDFjMC4xNzYsMC4xMjMsMC4zNzcsMC4xODMsMC41NzYsMC4xODNjMC4zMTQsMCwwLjYyMy0wLjE0NywwLjgxOC0wLjQyM2MwLjMxOC0wLjQ1MSwwLjIxMS0xLjA3NS0wLjI0LTEuMzk1ICAgbC0xLjYzNC0xLjE1M2MtMC40NTMtMC4zMTctMS4wNzUtMC4yMS0xLjM5NSwwLjI0Yy0wLjMxOCwwLjQ1MS0wLjIxMSwxLjA3NSwwLjI0LDEuMzk1TDQxLjExNSwxNy41NDF6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNNDMsNDFjMCwwLjU1MywwLjQ0NywxLDEsMWgyYzAuNTUzLDAsMS0wLjQ0NywxLTFzLTAuNDQ3LTEtMS0xaC0yQzQzLjQ0Nyw0MCw0Myw0MC40NDcsNDMsNDF6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMjksNDFjMC0wLjU1My0wLjQ0Ny0xLTEtMWgtMmMtMC41NTMsMC0xLDAuNDQ3LTEsMXMwLjQ0NywxLDEsMWgyQzI4LjU1Myw0MiwyOSw0MS41NTMsMjksNDF6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNNTIsMzYuMzgzYzAuNTUzLDAsMS0wLjQ0NywxLTF2LTJjMC0wLjU1My0wLjQ0Ny0xLTEtMXMtMSwwLjQ0Ny0xLDF2MkM1MSwzNS45MzYsNTEuNDQ3LDM2LjM4Myw1MiwzNi4zODN6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMzYuMjEzLDE0LjA4MWMwLjE3NiwwLjEyMywwLjM3NywwLjE4MywwLjU3NiwwLjE4M2MwLjMxNCwwLDAuNjIzLTAuMTQ3LDAuODE4LTAuNDIzYzAuMzE4LTAuNDUxLDAuMjExLTEuMDc1LTAuMjQtMS4zOTUgICBsLTEuNjM0LTEuMTUzYy0wLjQ1My0wLjMxNi0xLjA3NS0wLjIwOS0xLjM5NSwwLjI0Yy0wLjMxOCwwLjQ1MS0wLjIxMSwxLjA3NSwwLjI0LDEuMzk1TDM2LjIxMywxNC4wODF6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNNTEsNDBoLTFjLTAuNTUzLDAtMSwwLjQ0Ny0xLDFzMC40NDcsMSwxLDFoM3YtMi42MTdjMC0wLjU1My0wLjQ0Ny0xLTEtMXMtMSwwLjQ0Ny0xLDFWNDB6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMjAsNDJoMmMwLjU1MywwLDEtMC40NDcsMS0xcy0wLjQ0Ny0xLTEtMWgtMmMtMC41NTMsMC0xLDAuNDQ3LTEsMVMxOS40NDcsNDIsMjAsNDJ6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMTgsMjhjMC41NTMsMCwxLTAuNDQ3LDEtMXYtMmMwLTAuNTUzLTAuNDQ3LTEtMS0xcy0xLDAuNDQ3LTEsMXYyQzE3LDI3LjU1MywxNy40NDcsMjgsMTgsMjh6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMjAuNDUyLDIzLjI3YzAuMTk5LDAsMC40LTAuMDYsMC41NzYtMC4xODNsMS42MzQtMS4xNTNjMC40NTEtMC4zMTksMC41NTktMC45NDMsMC4yNC0xLjM5NSAgIGMtMC4zMTgtMC40NS0wLjk0MS0wLjU1OC0xLjM5NS0wLjI0bC0xLjYzNCwxLjE1M2MtMC40NTEsMC4zMTktMC41NTksMC45NDMtMC4yNCwxLjM5NUMxOS44MjksMjMuMTIyLDIwLjEzOCwyMy4yNywyMC40NTIsMjMuMjd6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMjUuMzU0LDE5LjgxYzAuMTk5LDAsMC40LTAuMDYsMC41NzYtMC4xODNsMS42MzQtMS4xNTNjMC40NTEtMC4zMTksMC41NTktMC45NDMsMC4yNC0xLjM5NSAgIGMtMC4zMTktMC40NDktMC45NDEtMC41NTctMS4zOTUtMC4yNGwtMS42MzQsMS4xNTNjLTAuNDUxLDAuMzE5LTAuNTU5LDAuOTQzLTAuMjQsMS4zOTVDMjQuNzMsMTkuNjYyLDI1LjAzOSwxOS44MSwyNS4zNTQsMTkuODF6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMTgsMzRjMC41NTMsMCwxLTAuNDQ3LDEtMXYtMmMwLTAuNTUzLTAuNDQ3LTEtMS0xcy0xLDAuNDQ3LTEsMXYyQzE3LDMzLjU1MywxNy40NDcsMzQsMTgsMzR6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMzAuMjU2LDE2LjM1YzAuMTk5LDAsMC40LTAuMDYsMC41NzYtMC4xODNsMS42MzQtMS4xNTNjMC40NTEtMC4zMTksMC41NTktMC45NDMsMC4yNC0xLjM5NSAgIGMtMC4zMTktMC40NDktMC45NC0wLjU1OS0xLjM5NS0wLjI0bC0xLjYzNCwxLjE1M2MtMC40NTEsMC4zMTktMC41NTksMC45NDMtMC4yNCwxLjM5NUMyOS42MzMsMTYuMjAyLDI5Ljk0MSwxNi4zNSwzMC4yNTYsMTYuMzV6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMzEsNDFjMCwwLjU1MywwLjQ0NywxLDEsMWgyYzAuNTUzLDAsMS0wLjQ0NywxLTFzLTAuNDQ3LTEtMS0xaC0yQzMxLjQ0Nyw0MCwzMSw0MC40NDcsMzEsNDF6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMTgsNDBjMC41NTMsMCwxLTAuNDQ3LDEtMXYtMmMwLTAuNTUzLTAuNDQ3LTEtMS0xcy0xLDAuNDQ3LTEsMXYyQzE3LDM5LjU1MywxNy40NDcsNDAsMTgsNDB6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNNDEsNTRoMTN2LThINDFWNTR6IE00Myw0OGg5djRoLTlWNDh6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMjIsMzB2MmMwLDAuNTUzLDAuNDQ3LDEsMSwxczEtMC40NDcsMS0xdi0yYzAtMC41NTMtMC40NDctMS0xLTFTMjIsMjkuNDQ3LDIyLDMweiIgZmlsbD0iI0ZGRkZGRiIvPgoJPHBhdGggZD0iTTMxLDI3Yy0wLjU1MywwLTEsMC40NDctMSwxdjJjMCwwLjU1MywwLjQ0NywxLDEsMXMxLTAuNDQ3LDEtMXYtMkMzMiwyNy40NDcsMzEuNTUzLDI3LDMxLDI3eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPHBhdGggZD0iTTI1LDI5aDJjMC41NTMsMCwxLTAuNDQ3LDEtMXMtMC40NDctMS0xLTFoLTJjLTAuNTUzLDAtMSwwLjQ0Ny0xLDFTMjQuNDQ3LDI5LDI1LDI5eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPHBhdGggZD0iTTI2LDM2YzAtMC41NTMtMC40NDctMS0xLTFoLTJjLTAuNTUzLDAtMSwwLjQ0Ny0xLDFzMC40NDcsMSwxLDFoMkMyNS41NTMsMzcsMjYsMzYuNTUzLDI2LDM2eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPHBhdGggZD0iTTI5LDM3aDJjMC41NTMsMCwxLTAuNDQ3LDEtMXYtMmMwLTAuNTUzLTAuNDQ3LTEtMS0xcy0xLDAuNDQ3LTEsMXYxaC0xYy0wLjU1MywwLTEsMC40NDctMSwxUzI4LjQ0NywzNywyOSwzN3oiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik00MCwyOGMwLDAuNTUzLDAuNDQ3LDEsMSwxaDJjMC41NTMsMCwxLTAuNDQ3LDEtMXMtMC40NDctMS0xLTFoLTJDNDAuNDQ3LDI3LDQwLDI3LjQ0Nyw0MCwyOHoiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik00NiwyOHYyYzAsMC41NTMsMC40NDcsMSwxLDFzMS0wLjQ0NywxLTF2LTJjMC0wLjU1My0wLjQ0Ny0xLTEtMVM0NiwyNy40NDcsNDYsMjh6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNNDcsMzdjMC41NTMsMCwxLTAuNDQ3LDEtMXYtMmMwLTAuNTUzLTAuNDQ3LTEtMS0xcy0xLDAuNDQ3LTEsMXYxaC0xYy0wLjU1MywwLTEsMC40NDctMSwxczAuNDQ3LDEsMSwxSDQ3eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPHBhdGggZD0iTTM5LDMzYzAuNTUzLDAsMS0wLjQ0NywxLTF2LTJjMC0wLjU1My0wLjQ0Ny0xLTEtMXMtMSwwLjQ0Ny0xLDF2MkMzOCwzMi41NTMsMzguNDQ3LDMzLDM5LDMzeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPHBhdGggZD0iTTM5LDM3aDJjMC41NTMsMCwxLTAuNDQ3LDEtMXMtMC40NDctMS0xLTFoLTJjLTAuNTUzLDAtMSwwLjQ0Ny0xLDFTMzguNDQ3LDM3LDM5LDM3eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPHBhdGggZD0iTTM4LDQ2aC01Yy0wLjU1MywwLTEsMC40NDctMSwxczAuNDQ3LDEsMSwxaDVjMC41NTMsMCwxLTAuNDQ3LDEtMVMzOC41NTMsNDYsMzgsNDZ6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMzgsNDloLTdjLTAuNTUzLDAtMSwwLjQ0Ny0xLDFzMC40NDcsMSwxLDFoN2MwLjU1MywwLDEtMC40NDcsMS0xUzM4LjU1Myw0OSwzOCw0OXoiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik0zOCw1MkgyOGMtMC41NTMsMC0xLDAuNDQ3LTEsMXMwLjQ0NywxLDEsMWgxMGMwLjU1MywwLDEtMC40NDcsMS0xUzM4LjU1Myw1MiwzOCw1MnoiIGZpbGw9IiNGRkZGRkYiLz4KCTxjaXJjbGUgY3g9IjQiIGN5PSI1IiByPSIxIiBmaWxsPSIjRkZGRkZGIi8+Cgk8Y2lyY2xlIGN4PSIxMCIgY3k9IjUiIHI9IjEiIGZpbGw9IiNGRkZGRkYiLz4KCTxjaXJjbGUgY3g9IjciIGN5PSI4IiByPSIxIiBmaWxsPSIjRkZGRkZGIi8+Cgk8Y2lyY2xlIGN4PSI0IiBjeT0iMTEiIHI9IjEiIGZpbGw9IiNGRkZGRkYiLz4KCTxjaXJjbGUgY3g9IjEwIiBjeT0iMTEiIHI9IjEiIGZpbGw9IiNGRkZGRkYiLz4KCTxjaXJjbGUgY3g9IjQiIGN5PSIxNyIgcj0iMSIgZmlsbD0iI0ZGRkZGRiIvPgoJPGNpcmNsZSBjeD0iMTAiIGN5PSIxNyIgcj0iMSIgZmlsbD0iI0ZGRkZGRiIvPgoJPGNpcmNsZSBjeD0iNyIgY3k9IjE0IiByPSIxIiBmaWxsPSIjRkZGRkZGIi8+Cgk8Y2lyY2xlIGN4PSI3IiBjeT0iMjAiIHI9IjEiIGZpbGw9IiNGRkZGRkYiLz4KCTxjaXJjbGUgY3g9IjQiIGN5PSIyMyIgcj0iMSIgZmlsbD0iI0ZGRkZGRiIvPgoJPGNpcmNsZSBjeD0iMTAiIGN5PSIyMyIgcj0iMSIgZmlsbD0iI0ZGRkZGRiIvPgoJPGNpcmNsZSBjeD0iNCIgY3k9IjI5IiByPSIxIiBmaWxsPSIjRkZGRkZGIi8+Cgk8Y2lyY2xlIGN4PSIxMCIgY3k9IjI5IiByPSIxIiBmaWxsPSIjRkZGRkZGIi8+Cgk8Y2lyY2xlIGN4PSI3IiBjeT0iMjYiIHI9IjEiIGZpbGw9IiNGRkZGRkYiLz4KCTxjaXJjbGUgY3g9IjciIGN5PSIzMiIgcj0iMSIgZmlsbD0iI0ZGRkZGRiIvPgoJPGNpcmNsZSBjeD0iNCIgY3k9IjM1IiByPSIxIiBmaWxsPSIjRkZGRkZGIi8+Cgk8Y2lyY2xlIGN4PSIxMCIgY3k9IjM1IiByPSIxIiBmaWxsPSIjRkZGRkZGIi8+Cgk8Y2lyY2xlIGN4PSI0IiBjeT0iNDEiIHI9IjEiIGZpbGw9IiNGRkZGRkYiLz4KCTxjaXJjbGUgY3g9IjEwIiBjeT0iNDEiIHI9IjEiIGZpbGw9IiNGRkZGRkYiLz4KCTxjaXJjbGUgY3g9IjciIGN5PSIzOCIgcj0iMSIgZmlsbD0iI0ZGRkZGRiIvPgoJPGNpcmNsZSBjeD0iNyIgY3k9IjQ0IiByPSIxIiBmaWxsPSIjRkZGRkZGIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" /></span>
                                       IMMOBILIER
                                   </a>
                                   
                               </li> 
                               <li class="nav-item"> 
                                   <a class="nav-link" href="/Allassur/index.php?page=m-services"> 
                                       <span class="picto-nav"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQxNC4yMjEgNDE0LjIyMSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDE0LjIyMSA0MTQuMjIxOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTMwMS44MjksMjMuNTk5QzI3Mi43MjUsOC4xODYsMjQwLjMwOCwwLjA4NywyMDcuMzc1LDBDOTUuMjgzLTAuMDIsNC4zOTgsOTAuODMyLDQuMzc4LDIwMi45MjQgICAgYy0wLjAxLDUyLjkwOSwyMC42NDMsMTAzLjczMSw1Ny41NTYsMTQxLjYzNmwtOC40OCw2MC4zMmMtMC43NCw0LjM1NiwyLjE5LDguNDg3LDYuNTQ2LDkuMjI3ICAgIGMyLjAxMSwwLjM0Miw0LjA3Ni0wLjA5Nyw1Ljc3NC0xLjIyN2w0Ni4wOC0zMC41NmM5OS4wNTgsNTIuNDYsMjIxLjg4OCwxNC42ODQsMjc0LjM0OC04NC4zNzRTNDAwLjg4Nyw3Ni4wNTgsMzAxLjgyOSwyMy41OTl6ICAgICBNMzQwLjQxLDMzNC4zMTVjLTM1LjExMywzNS42MDctODMuMDI3LDU1LjY2Mi0xMzMuMDM1LDU1LjY4NWMtMzIuMTk1LDAuMDQ0LTYzLjg1Ni04LjIyMi05MS45Mi0yNGMtMi40NzUtMS40MjktNS41MjUtMS40MjktOCwwICAgIGwtMzYuMDgsMjMuNDRsNi45Ni00Ni40OGMwLjM0NS0yLjUwNi0wLjUxNS01LjAyOC0yLjMyLTYuOEMyLjQ5NSwyNjMuNjU5LDEuNjY5LDE0NS4yODUsNzQuMTcsNzEuNzY1ICAgIFMyNjUuMDQ1LTIuNTgxLDMzOC41NjUsNjkuOTJTNDEyLjkxMSwyNjAuNzk1LDM0MC40MSwzMzQuMzE1eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTI1My4yMTUsMjc0LjhoLTYuNjRWMTU2LjU2YzAtNC40MTgtMy41ODItOC04LThoLTY5LjA0Yy00LjQxOCwwLTgsMy41ODItOCw4djI4LjhjMCw0LjQxOCwzLjU4Miw4LDgsOGg2LjcydjgxLjQ0aC02LjcyICAgIGMtNC40MTgsMC04LDMuNTgyLTgsOHYyOC44YzAsNC40MTgsMy41ODIsOCw4LDhoODMuNjhjNC40MTgsMCw4LTMuNTgyLDgtOHYtMjguOEMyNjEuMjE1LDI3OC4zODIsMjU3LjYzMywyNzQuOCwyNTMuMjE1LDI3NC44eiAgICAgTTE3Ny41MzUsMzAzLjZ2LTEyLjhoNi43MmM0LjQxOCwwLDgtMy41ODIsOC04di05Ny40NGMwLTQuNDE4LTMuNTgyLTgtOC04aC02Ljcydi0xMi44aDUyLjk2VjI4Mi44YzAsNC40MTgsMy41ODIsOCw4LDhoNi42NCAgICBsMC4wOCwxMi44SDE3Ny41MzV6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjA3LjM3NSw3MC40Yy0xOC41MTMsMC0zMy41MiwxNS4wMDctMzMuNTIsMzMuNTJjMCwxOC41MTMsMTUuMDA3LDMzLjUyLDMzLjUyLDMzLjUyczMzLjUyLTE1LjAwNywzMy41Mi0zMy41MiAgICBDMjQwLjg5NSw4NS40MDcsMjI1Ljg4Nyw3MC40LDIwNy4zNzUsNzAuNHogTTIwNy4zNzUsMTIxLjUyYy05LjY3NiwwLTE3LjUyLTcuODQ0LTE3LjUyLTE3LjUyICAgIGMtMC4wNDQtOS42NzYsNy43NjQtMTcuNTU2LDE3LjQ0LTE3LjZjMC4wMjcsMCwwLjA1MywwLDAuMDgsMHYwLjA4YzkuNjc2LDAsMTcuNTIsNy44NDQsMTcuNTIsMTcuNTIgICAgUzIxNy4wNTEsMTIxLjUyLDIwNy4zNzUsMTIxLjUyeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" /></span>
                                       MÉTIERS DU SERVICE</a>
                               </li>
                               <li class="nav-item dropdown"> 
                                    <a class="nav-link dropdown2" href="/Allassur/index.php?page=m-sante" id="dLabel2"  aria-haspopup="true" aria-expanded="true">
                                       <span class="picto-nav"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDYwIDYwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA2MCA2MDsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIzMnB4IiBoZWlnaHQ9IjMycHgiPgo8Zz4KCTxwYXRoIGQ9Ik00Ni41LDMxYy00LjA3MiwwLTcuNDM2LDMuMDYtNy45MzEsN0gyNy41di02LjEyNWMxLjA0LTAuMjU5LDEuOTM5LTAuOTE4LDIuNTA2LTEuODczbDEyLjkyLTIxLjg1MSAgIGMwLjc1Ni0xLjI3NSwwLjc2OS0yLjgwNiwwLjAzNS00LjA5NFM0MC45MDQsMiwzOS40MjEsMmgtMi4yNzJDMzYuNTg1LDAuODIyLDM1LjM5MSwwLDM0LDBjLTEuNTk2LDAtNS41LDEuMjI3LTUuNSwzLjUgICBTMzIuNDA0LDcsMzQsN2MxLjc1OCwwLDMuMjA0LTEuMzA4LDMuNDQ5LTNoMS45NzFjMC43NTUsMCwxLjQyOSwwLjM5MiwxLjgwMiwxLjA0OGMwLjM3NCwwLjY1NSwwLjM2NywxLjQzNS0wLjAxOCwyLjA4NSAgIGwtMTIuOTIsMjEuODUxQzI3LjkwNywyOS42MiwyNy4yNCwzMCwyNi41LDMwcy0xLjQwNy0wLjM4LTEuNzkxLTEuMDI2TDExLjQyOCw3LjEzMmMtMC4zODUtMC42NDktMC4zOTItMS40MjktMC4wMTgtMi4wODQgICBDMTEuNzg0LDQuMzkyLDEyLjQ1OCw0LDEzLjIxMiw0aDIuMzM4QzE1Ljc5Niw1LjY5MiwxNy4yNDIsNywxOSw3YzEuNTk2LDAsNS41LTEuMjI3LDUuNS0zLjVTMjAuNTk2LDAsMTksMCAgIGMtMS4zOTEsMC0yLjU4NSwwLjgyMi0zLjE0OSwyaC0yLjYzOWMtMS40ODMsMC0yLjgwNiwwLjc3LTMuNTQsMi4wNThTOC45NTEsNi44NzYsOS43MTMsOC4xNjFsMTMuMjgyLDIxLjg0MiAgIGMwLjU2NiwwLjk1NSwxLjQ2NSwxLjYxMywyLjUwNSwxLjg3MlYzOGgtOWMtNi4wNjUsMC0xMSw0LjkzNS0xMSwxMXM0LjkzNSwxMSwxMSwxMXMxMS00LjkzNSwxMS0xMXYtOWgxMS4wNjkgICBjMC40OTUsMy45NCwzLjg1OSw3LDcuOTMxLDdjNC40MTEsMCw4LTMuNTg5LDgtOFM1MC45MTEsMzEsNDYuNSwzMXogTTM0LDVjLTEuMjM0LDAtMy4zNTgtMC45ODktMy40OTgtMS41ICAgQzMwLjY0MiwyLjk4OSwzMi43NjYsMiwzNCwyYzAuODI3LDAsMS41LDAuNjczLDEuNSwxLjVTMzQuODI3LDUsMzQsNXogTTE5LDJjMS4yMzQsMCwzLjM1OCwwLjk4OSwzLjQ5OCwxLjUgICBDMjIuMzU4LDQuMDExLDIwLjIzNCw1LDE5LDVjLTAuODI3LDAtMS41LTAuNjczLTEuNS0xLjVTMTguMTczLDIsMTksMnogTTI1LjUsNDljMCw0Ljk2My00LjAzOCw5LTksOXMtOS00LjAzNy05LTlzNC4wMzgtOSw5LTloOSAgIFY0OXogTTQ2LjUsNDVjLTMuMzA5LDAtNi0yLjY5MS02LTZzMi42OTEtNiw2LTZzNiwyLjY5MSw2LDZTNDkuODA5LDQ1LDQ2LjUsNDV6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNNDYuNSwzNWMtMi4yMDYsMC00LDEuNzk0LTQsNHMxLjc5NCw0LDQsNHM0LTEuNzk0LDQtNFM0OC43MDYsMzUsNDYuNSwzNXogTTQ2LjUsNDFjLTEuMTAzLDAtMi0wLjg5Ny0yLTJzMC44OTctMiwyLTIgICBzMiwwLjg5NywyLDJTNDcuNjAzLDQxLDQ2LjUsNDF6IiBmaWxsPSIjRkZGRkZGIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" /></span>
                                       MÉTIERS DE LA SANTÉ </a>
                                        
                               </li> 
                               <li class="nav-item"> 
                                   <a class="nav-link" href="/Allassur/index.php?page=hotellerie"> 
                                       <span class="picto-nav"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ4MCA0ODAiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ4MCA0ODA7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMzA0LDMwNC44MDhWMjMyYzAtMTMuMjMyLTEwLjc2OC0yNC0yNC0yNEg1NmMtMTMuMjMyLDAtMjQsMTAuNzY4LTI0LDI0djcyLjgwOEMxMy43NjgsMzA4LjUyOCwwLDMyNC42ODgsMCwzNDR2NDh2ODAgICAgYzAsNC40MTYsMy41ODQsOCw4LDhoMzJjNC40MTYsMCw4LTMuNTg0LDgtOHYtMjRoMjQwdjI0YzAsNC40MTYsMy41ODQsOCw4LDhoMzJjNC40MTYsMCw4LTMuNTg0LDgtOHYtODB2LTQ4ICAgIEMzMzYsMzI0LjY4OCwzMjIuMjMyLDMwOC41MjgsMzA0LDMwNC44MDh6IE00OCwyMzJjMC00LjQwOCwzLjU5Mi04LDgtOGgyMjRjNC40MDgsMCw4LDMuNTkyLDgsOHY3MmgtMTZ2LTMyICAgIGMwLTEzLjIzMi0xMC43NjgtMjQtMjQtMjRoLTQ4Yy0xMy4yMzIsMC0yNCwxMC43NjgtMjQsMjR2MzJoLTE2di0zMmMwLTEzLjIzMi0xMC43NjgtMjQtMjQtMjRIODhjLTEzLjIzMiwwLTI0LDEwLjc2OC0yNCwyNHYzMiAgICBINDhWMjMyeiBNMjU2LDI3MnYzMmgtNjR2LTMyYzAtNC40MDgsMy41OTItOCw4LThoNDhDMjUyLjQwOCwyNjQsMjU2LDI2Ny41OTIsMjU2LDI3MnogTTE0NCwyNzJ2MzJIODB2LTMyYzAtNC40MDgsMy41OTItOCw4LTggICAgaDQ4QzE0MC40MDgsMjY0LDE0NCwyNjcuNTkyLDE0NCwyNzJ6IE0zMjAsNDY0aC0xNnYtMjRjMC00LjQxNi0zLjU4NC04LTgtOEg0MGMtNC40MTYsMC04LDMuNTg0LTgsOHYyNEgxNnYtNjRoMzA0VjQ2NHogTTMyMCwzODQgICAgSDE2di00MGMwLTEzLjIzMiwxMC43NjgtMjQsMjQtMjRoMzJoODBoMzJoODBoMzJjMTMuMjMyLDAsMjQsMTAuNzY4LDI0LDI0VjM4NHoiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00NzIsMzA0SDM2MGMtNC40MTYsMC04LDMuNTg0LTgsOHY2NHY1NmgxNnYtNDhoOTZ2NDhoMTZ2LTU2di02NEM0ODAsMzA3LjU4NCw0NzYuNDE2LDMwNCw0NzIsMzA0eiBNNDY0LDM2OGgtOTZ2LTQ4aDk2ICAgIFYzNjh6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cmVjdCB4PSI0MDAiIHk9IjMzNiIgd2lkdGg9IjMyIiBoZWlnaHQ9IjE2IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDU1LjU5MiwyMzcuNDY0bC0xNi00OEM0MzguNDk2LDE4Ni4yLDQzNS40NDgsMTg0LDQzMiwxODRoLTMyYy0zLjQ0OCwwLTYuNDk2LDIuMi03LjU5Miw1LjQ3MmwtMTYsNDggICAgYy0wLjgxNiwyLjQ0LTAuNCw1LjEyLDEuMTA0LDcuMjA4YzEuNTA0LDIuMDg4LDMuOTIsMy4zMiw2LjQ4OCwzLjMyaDI0djI0aC0xNnYxNmg0OHYtMTZoLTE2di0yNGgyNCAgICBjMi41NjgsMCw0Ljk4NC0xLjIzMiw2LjQ4OC0zLjMyOEM0NTUuOTkyLDI0Mi41ODQsNDU2LjQsMjM5LjkwNCw0NTUuNTkyLDIzNy40NjR6IE0zOTUuMDk2LDIzMmwxMC42NzItMzJoMjAuNDcybDEwLjY2NCwzMiAgICBIMzk1LjA5NnoiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00NzUuMjcyLDEwNC42OTZsLTIzMi0xMDRjLTIuMDg4LTAuOTI4LTQuNDY0LTAuOTI4LTYuNTQ0LDBsLTIzMiwxMDRDMS44NDgsMTA1Ljk5MiwwLDEwOC44NDgsMCwxMTJ2OTZoMTZ2LTkwLjgyNCAgICBMMjQwLDE2Ljc2OGwyMjQsMTAwLjQxNlYyMDhoMTZ2LTk2QzQ4MCwxMDguODQ4LDQ3OC4xNTIsMTA1Ljk5Miw0NzUuMjcyLDEwNC42OTZ6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjk1LjIyNCwxMTAuNjcybC0xNS43ODQsMi42NTZjMC4zNzYsMi4xODQsMC41Niw0LjQyNCwwLjU2LDYuNjcyYzAsMjIuMDU2LTE3Ljk0NCw0MC00MCw0MGMtMjIuMDU2LDAtNDAtMTcuOTQ0LTQwLTQwICAgIGMwLTIyLjA1NiwxNy45NDQtNDAsNDAtNDBjNC41NzYsMCw5LjA3MiwwLjc2OCwxMy4zNDQsMi4yOGw1LjMyOC0xNS4wODhDMjUyLjY4LDY1LjA3MiwyNDYuNCw2NCwyNDAsNjRjLTMwLjg4LDAtNTYsMjUuMTItNTYsNTYgICAgczI1LjEyLDU2LDU2LDU2czU2LTI1LjEyLDU2LTU2QzI5NiwxMTYuODY0LDI5NS43MzYsMTEzLjcyOCwyOTUuMjI0LDExMC42NzJ6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjkwLjM0NCw2Ni4zNDRMMjQwLDExNi42ODhsLTEwLjM0NC0xMC4zNDRsLTExLjMxMiwxMS4zMTJsMTYsMTZjMS41NiwxLjU2LDMuNjA4LDIuMzQ0LDUuNjU2LDIuMzQ0ICAgIGMyLjA0OCwwLDQuMDk2LTAuNzg0LDUuNjU2LTIuMzQ0bDU2LTU2TDI5MC4zNDQsNjYuMzQ0eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" /></span>
                                      HÔTELLERIE </a>
                               </li>
                                <li class="nav-item"> 
                                   <a class="nav-link" href="/Allassur/index.php?page=restauration"> 
                                       <span class="picto-nav"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDU2LjM1NCwzMzQuMzk2Yy0wLjQ5NS0wLjgyOC0xLjAxNi0xLjYyMS0xLjUzNi0yLjMyMWMtNS4xNzEtNy4yMjgtMTIuODYtMTIuMDA2LTIxLjYzMi0xMy40NDkgICAgYy04LjczLTEuNDQyLTE3LjU3OSwwLjYxNC0yNC43ODEsNS43ODZsLTk1LjQwMyw2OC4xMjJoLTk5LjY2OWMtNC43MDIsMC04LjUzMy0zLjgyMy04LjUzMy04LjUzM3MzLjgzMS04LjUzMyw4LjUzMy04LjUzM0gyNjguOCAgICBjMTYuNDY5LDAsMjkuODY3LTEzLjM5NywyOS44NjctMjkuODY3YzAtMC4wOTQtMC4wMDktMC44NzktMC4wMTctMC45NjRjLTAuNTI5LTE2LjQ2MS0xNC40MTMtMjkuMjk1LTMwLjUzMi0yOC45MDJoLTExMS4wMSAgICBjLTkuODM5LDAuMDg1LTE5LjQyMiwzLjYxLTI2Ljk3NCw5LjkwN2wtNDEuNzI4LDM0LjczMWMtMS45NDYsMS42My0zLjA3Miw0LjAyOC0zLjA3Miw2LjU2MnYxMDIuNCAgICBjMCw0LjcxOSwzLjgyMyw4LjUzMyw4LjUzMyw4LjUzM2gyMTEuNzIxYzEzLjg1OC0wLjAxNywyNy4zNTgtNC44OTgsMzguMDI1LTEzLjczbDEwMy40NS04NS40NzggICAgQzQ2MS4xMTYsMzY4LjY0OCw0NjUuMTk1LDM0OS4yMSw0NTYuMzU0LDMzNC4zOTZ6IE00MzYuNjg1LDM2NS4xMzNMMzMyLjc0LDQ1MC45ODdjLTcuNjI5LDYuMzE1LTE3LjI4LDkuNzk2LTI3LjE2Miw5LjgxM0gxMDIuNCAgICB2LTg5Ljg2NWwzOC42NjQtMzIuMTg4YzQuNTQtMy43OCwxMC4yODMtNS44OTcsMTYuMTItNS45NDhsMTExLjIwNi0wLjAwOGM3LjA3NC0wLjAwOSwxMi45NzksNS4zNDIsMTMuMjEsMTIuODA5ICAgIGMwLDcuMDU3LTUuNzQzLDEyLjgtMTIuOCwxMi44aC01NS40NjdjLTE0LjExNCwwLTI1LjYsMTEuNDg2LTI1LjYsMjUuNnMxMS40ODYsMjUuNiwyNS42LDI1LjZoMTAyLjQgICAgYzEuNzc1LDAsMy41MDctMC41NTUsNC45NzUtMS41ODdsOTcuNjM4LTY5LjcyNmMzLjUxNi0yLjUyNiw3Ljc5MS0zLjUwNywxMi4wNzUtMi44MjVjNC4yNzUsMC43MDgsOC4wMTMsMy4wMjksMTAuNTgxLDYuNjEzICAgIGMwLjI1NiwwLjM1LDAuNDg2LDAuNzA4LDAuNzA4LDEuMDc1QzQ0Ni4wMjksMzUwLjM3OSw0NDQuMDIzLDM1OS44NzYsNDM2LjY4NSwzNjUuMTMzeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTkzLjYxMSwzNDkuODY3SDB2MTcuMDY3aDg1LjA3N3YxMjhIMFY1MTJoOTMuNjExYzQuNzEsMCw4LjUzMy0zLjgxNCw4LjUzMy04LjUzM1YzNTguNCAgICBDMTAyLjE0NCwzNTMuNjgxLDk4LjMyMSwzNDkuODY3LDkzLjYxMSwzNDkuODY3eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQyLjY2Nyw0MjYuNjY3Yy0xNC4xMTQsMC0yNS42LDExLjQ4Ni0yNS42LDI1LjZjMCwxNC4xMTQsMTEuNDg2LDI1LjYsMjUuNiwyNS42czI1LjYtMTEuNDg2LDI1LjYtMjUuNiAgICBDNjguMjY3LDQzOC4xNTMsNTYuNzgxLDQyNi42NjcsNDIuNjY3LDQyNi42Njd6IE00Mi42NjcsNDYwLjhjLTQuNzAyLDAtOC41MzMtMy44MjMtOC41MzMtOC41MzNjMC00LjcxLDMuODMxLTguNTMzLDguNTMzLTguNTMzICAgIGM0LjcwMiwwLDguNTMzLDMuODIzLDguNTMzLDguNTMzQzUxLjIsNDU2Ljk3Nyw0Ny4zNjksNDYwLjgsNDIuNjY3LDQ2MC44eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTUwMy40NjcsMjY0LjUzM0g4LjUzM2MtNC43MSwwLTguNTMzLDMuODE0LTguNTMzLDguNTMzYzAsMzIuOTMsMjYuNzk1LDU5LjczMyw1OS43MzMsNTkuNzMzaDM5Mi41MzMgICAgYzMyLjkzLDAsNTkuNzMzLTI2LjgwMyw1OS43MzMtNTkuNzMzQzUxMiwyNjguMzQ4LDUwOC4xODYsMjY0LjUzMyw1MDMuNDY3LDI2NC41MzN6IE00NTIuMjY3LDMxNS43MzNINTkuNzMzICAgIGMtMjAuNjA4LDAtMzcuODQ1LTE0LjY4Ni00MS44MDUtMzQuMTMzaDQ3Ni4xNDNDNDkwLjExMiwzMDEuMDQ3LDQ3Mi44NzUsMzE1LjczMyw0NTIuMjY3LDMxNS43MzN6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjU2LDQyLjY2N2MtMTIyLjMzNCwwLTIyMS44NjcsOTkuNTMzLTIyMS44NjcsMjIxLjg2N3Y4LjUzM2MwLDQuNzE5LDMuODIzLDguNTMzLDguNTMzLDguNTMzaDQyNi42NjcgICAgYzQuNzE5LDAsOC41MzMtMy44MTQsOC41MzMtOC41MzN2LTguNTMzQzQ3Ny44NjcsMTQyLjE5OSwzNzguMzQyLDQyLjY2NywyNTYsNDIuNjY3eiBNNTEuMiwyNjQuNTMzICAgIGMwLTExMi45MjIsOTEuODc4LTIwNC44LDIwNC44LTIwNC44czIwNC44LDkxLjg3OCwyMDQuOCwyMDQuOEg1MS4yeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTExNS42NDQsMTQwLjAwNmMtNS45NjUsNi43MDctMTEuNDk0LDEzLjg4NC0xNi40MzUsMjEuMzQybDE0LjIyNSw5LjQyOWM0LjUwNi02Ljc5Myw5LjU0LTEzLjMzOCwxNC45NjctMTkuNDM5ICAgIEwxMTUuNjQ0LDE0MC4wMDZ6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjU2LDc2LjhjLTQ3LjkyMywwLjAyNi05My41NTEsMTguMTMzLTEyOC40NjksNTAuOTYxbDExLjY5MSwxMi40MzNjMzEuNzQ0LTI5Ljg1LDczLjIyNC00Ni4zMDIsMTE2Ljc4Ny00Ni4zMjdMMjU2LDc2LjggICAgeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHJlY3QgeD0iMjMwLjQiIHdpZHRoPSI1MS4yIiBoZWlnaHQ9IjE3LjA2NyIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHJlY3QgeD0iMjQ3LjQ2NyIgeT0iOC41MzMiIHdpZHRoPSIxNy4wNjciIGhlaWdodD0iNDIuNjY3IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" /></span>
                                       RESTAURATION</a>
                               </li>
                               <li class="nav-item"> 
                                   <a class="nav-link" href="/Allassur/index.php?page=secteurs"> 
                                       <span class="picto-nav"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMi4xMSA1MTIuMTEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMi4xMSA1MTIuMTE7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KPGc+Cgk8Zz4KCQk8Zz4KCQkJPHBhdGggZD0iTTQ3NS4yMTMsMzY2LjUxN2wtMTMwLjUsNDUuNzg3Yy0xLjkwOSwwLjY2OC0zLjkxOSwxLjAwMS01Ljk0MiwwLjk4M2gtMi4wMzNjMi42MDktOS4yODQsMS40MTItMTkuMjI1LTMuMzI1LTI3LjYyNSAgICAgbC0wLjY2Ny0xLjIwOGMtNy43MDItMTMuNTczLTIyLjA2MS0yMi4wMDYtMzcuNjY3LTIyLjEyMWgtMzYuODY2Yy0xMi43MTEtMC4wODktMjQuOTg4LTQuNjM1LTM0LjY5Mi0xMi44NDYgICAgIGMtMTIuNzk0LTEwLjcyMy0yOC45NC0xNi42MjctNDUuNjMzLTE2LjY4OGgtNC4zMjVjLTIuMTQ4LDAtNDUuODk2LDAuMzk5LTc0LjEyOSwyNC40NzRjLTMuMTc2LTQuNjMyLTguNDMtNy40MDItMTQuMDQ2LTcuNDA4ICAgICBIMTcuMTIxYy05LjQyMSwwLjAxMS0xNy4wNTYsNy42NDUtMTcuMDY3LDE3LjA2N1Y0ODYuNGMwLjAxMSw5LjQyMSw3LjY0NSwxNy4wNTYsMTcuMDY3LDE3LjA2N2g2OC4yNjcgICAgIGM1LjA5NC0wLjAxOSw5LjkwOS0yLjMyNSwxMy4xMTctNi4yODJjMTUuNDU4LDEwLjU2MSwzMy45NTIsMTUuNzY1LDUyLjY0OSwxNC44MTZoMTg1LjM0MiAgICAgYzEwLjc0NC0wLjAzOCwyMS4yNTctMy4xMTYsMzAuMzI1LTguODc5bDEzMi4xMTctODQuNjcxYzYuNTc3LTQuMzMxLDExLjExMi0xMS4xNDgsMTIuNTY3LTE4Ljg4OCAgICAgYzEuNTM4LTcuOTkxLTAuMjQtMTYuMjYzLTQuOTI1LTIyLjkxN0M0OTkuNTAxLDM2Ni43MjIsNDg2Ljc1OCwzNjIuNjA3LDQ3NS4yMTMsMzY2LjUxN3ogTTg1LjM4Nyw0ODYuNEgxNy4xMjFWMzY2LjkzM2g2OC4yNjcgICAgIFY0ODYuNHogTTQ5NC43NDYsMzk2LjM0MmMtMC41NSwzLjE2OS0yLjM3NSw1Ljk3My01LjA1LDcuNzU4bC0xMzIuMDI1LDg0LjYxMmMtNi4zMzEsNC4wMjktMTMuNjcxLDYuMTg1LTIxLjE3NSw2LjIyMUgxNTEuMTU0ICAgICBjLTMyLjYyNSwwLTQ1LjMyNS0xMi44MjktNDguNy0xNy4xODh2LTk5LjAwNGMyMC44NDItMjguNDIxLDcwLjYwOC0yOC44NzUsNzEuMTA4LTI4Ljg3NWg0LjMyNSAgICAgYzEyLjY5NSwwLjA1OCwyNC45NjgsNC41NTksMzQuNjkyLDEyLjcyMWMxMi43NzQsMTAuNzc0LDI4LjkyMywxNi43MjMsNDUuNjMzLDE2LjgxM2gzNi44NjcgICAgIGM5LjQ0OSwwLjAxOCwxOC4xNTMsNS4xMzMsMjIuNzY3LDEzLjM3OWwwLjY2NywxLjIwOGMzLjM3Miw2LjAzNCwzLjIwOCwxMy40MjItMC40MjksMTkuM2gtNDIuMDA0ICAgICBjLTE0LjM0OSwwLjA0MS0yOC4zMzcsNC41MDUtNDAuMDU4LDEyLjc4M2wtNS4xMTcsMy41OTJjLTIuNDk1LDEuNzUxLTMuODY2LDQuNjk5LTMuNTk4LDcuNzM1ICAgICBjMC4yNjksMy4wMzYsMi4xMzcsNS42OTgsNC45LDYuOTgzYzIuNzY0LDEuMjg1LDYuMDAzLDAuOTk5LDguNDk4LTAuNzUybDUuMS0zLjU3NWM4Ljg1NS02LjI2OCwxOS40MjYtOS42NTUsMzAuMjc1LTkuN2g2Mi42OTIgICAgIGMzLjk4NSwwLjAxOSw3Ljk0NC0wLjY1MiwxMS43LTEuOTgzbDEzMC4zMDktNDUuNzJjNC40MDMtMS40OTYsOS4yNjQsMC4xMDYsMTEuOTE3LDMuOTI1ICAgICBDNDk0LjY3NywzODkuNDE4LDQ5NS40MTcsMzkyLjk0Myw0OTQuNzQ2LDM5Ni4zNDJ6IiBmaWxsPSIjRkZGRkZGIi8+CgkJCTxwYXRoIGQ9Ik00Mi43MjEsNDYwLjhjMi4yNTktMC4wMzUsNC40MjEtMC45MTgsNi4wNTktMi40NzVjMC43NTMtMC44MywxLjM1OS0xLjc4MywxLjc5Mi0yLjgxNyAgICAgYzAuNDM3LTEuMDI2LDAuNjY5LTIuMTI3LDAuNjgzLTMuMjQyYy0wLjAzMy0yLjI1OS0wLjkxNy00LjQyMi0yLjQ3NS02LjA1OWMtMy40MjItMy4xNTktOC42OTYtMy4xNTktMTIuMTE3LDAgICAgIGMtMi40NjEsMi40NDEtMy4yMDEsNi4xMjktMS44NzIsOS4zMzFTMzkuMjU0LDQ2MC44Miw0Mi43MjEsNDYwLjh6IiBmaWxsPSIjRkZGRkZGIi8+CgkJCTxwYXRoIGQ9Ik0zNTguNDU0LDEwMi40YzE0LjEzOCwwLDI1LjYtMTEuNDYyLDI1LjYtMjUuNnMtMTEuNDYxLTI1LjYtMjUuNi0yNS42cy0yNS42LDExLjQ2MS0yNS42LDI1LjYgICAgIEMzMzIuODcsOTAuOTMyLDM0NC4zMjIsMTAyLjM4NSwzNTguNDU0LDEwMi40eiBNMzU4LjQ1NCw2OC4yNjdjNC43MTMsMCw4LjUzMywzLjgyLDguNTMzLDguNTMzcy0zLjgyLDguNTMzLTguNTMzLDguNTMzICAgICBzLTguNTMzLTMuODItOC41MzMtOC41MzNDMzQ5LjkyNiw3Mi4wODksMzUzLjc0Myw2OC4yNzEsMzU4LjQ1NCw2OC4yNjd6IiBmaWxsPSIjRkZGRkZGIi8+CgkJCTxwYXRoIGQ9Ik0zMjQuMzIxLDI1Nmg2OC4yNjdjMi4yNjMsMC4wMDEsNC40MzQtMC44OTgsNi4wMzUtMi40OTljMS42LTEuNiwyLjQ5OS0zLjc3MSwyLjQ5OS02LjAzNXYtMzQuMTMzICAgICBjMC4wMDEtMi4yNjMtMC44OTgtNC40MzQtMi40OTktNi4wMzVjLTEuNi0xLjYtMy43NzEtMi40OTktNi4wMzUtMi40OTloLTguNTMzVjEyOGMwLjAwMS0yLjI2My0wLjg5OC00LjQzNC0yLjQ5OS02LjAzNSAgICAgYy0xLjYtMS42LTMuNzcxLTIuNDk5LTYuMDM1LTIuNDk5aC01MS4yYy0yLjI2My0wLjAwMS00LjQzNCwwLjg5OC02LjAzNSwyLjQ5OWMtMS42LDEuNi0yLjQ5OSwzLjc3MS0yLjQ5OSw2LjAzNXYzNC4xMzMgICAgIGMtMC4wMDEsMi4yNjMsMC44OTgsNC40MzQsMi40OTksNi4wMzVjMS42LDEuNiwzLjc3MSwyLjQ5OSw2LjAzNSwyLjQ5OWg4LjUzM1YyMDQuOGgtOC41MzMgICAgIGMtMi4yNjMtMC4wMDEtNC40MzQsMC44OTgtNi4wMzUsMi40OTljLTEuNiwxLjYtMi40OTksMy43NzEtMi40OTksNi4wMzV2MzQuMTMzYy0wLjAwMSwyLjI2MywwLjg5OCw0LjQzNCwyLjQ5OSw2LjAzNSAgICAgQzMxOS44ODcsMjU1LjEwMiwzMjIuMDU4LDI1Ni4wMDEsMzI0LjMyMSwyNTZ6IE0zMzIuODU0LDIyMS44NjdoOC41MzNjMi4yNjMsMC4wMDEsNC40MzQtMC44OTgsNi4wMzUtMi40OTkgICAgIGMxLjYtMS42LDIuNDk5LTMuNzcxLDIuNDk5LTYuMDM1di01MS4yYzAuMDAxLTIuMjYzLTAuODk4LTQuNDM0LTIuNDk5LTYuMDM1Yy0xLjYtMS42LTMuNzcxLTIuNDk5LTYuMDM1LTIuNDk5aC04LjUzM3YtMTcuMDY3ICAgICBoMzQuMTMzdjc2LjhjLTAuMDAxLDIuMjYzLDAuODk4LDQuNDM0LDIuNDk5LDYuMDM1YzEuNiwxLjYsMy43NzEsMi40OTksNi4wMzUsMi40OTloOC41MzN2MTcuMDY3aC01MS4yVjIyMS44Njd6IiBmaWxsPSIjRkZGRkZGIi8+CgkJCTxwYXRoIGQ9Ik0yNjQuNTg3LDI3NS4xMjV2NDkuMTQyYzAsMy4yNzMsMS44NzIsNi4yNTgsNC44MTksNy42ODJjMi45NDcsMS40MjUsNi40NDksMS4wMzgsOS4wMTQtMC45OTVsMzcuNTMzLTI5LjcyOSAgICAgYzU3LjY5NiwxNi42MDcsMTE5Ljc3OS0xLjkyMSwxNTguOTM1LTQ3LjQzNGMzOS4xNTYtNDUuNTEzLDQ4LjIwOC0xMDkuNjY2LDIzLjE3Mi0xNjQuMjM2ICAgICBDNDczLjAyNiwzNC45ODYsNDE4LjQ5MywwLjAwNCwzNTguNDU0LDBDMjkyLjc0LTAuMDE2LDIzNC4yOTksNDEuNzgzLDIxMy4wOCwxMDMuOTc3ICAgICBDMTkxLjg2MSwxNjYuMTcsMjEyLjU2NywyMzQuOTczLDI2NC41ODcsMjc1LjEyNXogTTIzNy4wMDgsOTEuNTVjMzAuNTQ4LTU5Ljc1OCwxMDAuMDExLTg4LjQzNCwxNjMuODE4LTY3LjYyOSAgICAgczEwMy4wMTUsODQuOTE3LDkyLjQ2NSwxNTEuMTk1cy02Ny43MjQsMTE1LjA0OS0xMzQuODM3LDExNS4wMTdjLTE0LjE0MywwLjAyMy0yOC4yMDMtMi4xNy00MS42NjctNi41ICAgICBjLTIuNzE2LTAuODY4LTUuNjg1LTAuMzMxLTcuOTI1LDEuNDM0bC0yNy4yMDgsMjEuNTU0VjI3MC44NWMwLjAwMS0yLjczNS0xLjMxLTUuMzA0LTMuNTI1LTYuOTA4ICAgICBDMjIzLjg5NywyMjQuNDA3LDIwNi40NiwxNTEuMzA4LDIzNy4wMDgsOTEuNTV6IiBmaWxsPSIjRkZGRkZGIi8+CgkJPC9nPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" /></span>
                                       AUTRES SECTEURS</a>
                               </li> 
                            </ul>
                    </nav>
                    <div class="pos-f-t">
                          <div class="collapse" id="navbarToggleExternalContent">
                            <div class="bg-dark p-4 hidden-md-up">
                              <ul> 
                                  <li> <a href="sante.html"> Santé</a></li>
                                
                              </ul>
                            </div>
                          </div>
                    </div>
                
                    <div class="jumbotron jumbotron2 container d-none d-sm-block">
                        <div class="content-jumbotron container col-11"> 
                            <h1>ALL'ASSUR</h1>
                            <h4>Courtier Assurances, du particulier au professionnel</h4>
                        </div>
                        
                    </div>
                    <form class="container form-inline formsbloc col-lg-10 col-xs-12 d-none d-sm-block" method="post" action="/Allassur/index.php?page=devis2">
                                <div class="form-group formulaireP container col-10 col-xs-12">
                                      <h5 class="container" style="padding: 0;"> Faîtes votre devis personnalisé</h5>
                                        <span class=" custom-dropdown__select custom-dropdown__select--white col-10 ">
                                                <select name="inputState" id="inputState" class="form-control" style="">
                                                     <option value="">Artisans / BTP</option>
                                                     <option value="">Commerçants</option>
                                                     <option>Immobilier</option>
                                                     <option>Métiers du service</option>
                                                     <option>Métiers de la santé</option>
                                                     <option>Hotellerie</option>
                                                     <option>Restauration</option>
                                                     <option>Autres secteurs</option>
                                                     
                                                </select>
                                            
                                        </span>
                                    <input class="btn btn-default col-2" type="submit" value="Suivant">
                                </div>
                    </form>
                    <div class="container container1 col-11 d-none d-sm-block">
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
                    <div class="container corps col-11">
                        <div class="row"> 
                            <?php echo($this->pageView); ?>
                            
                        </div>
                    </div>
                </div>
            </div>
       </div>
       <div class="picto-3 container-fluid" style="">
           <div class="container">
               <h3 id="pq"> Pourquoi choisir All’Assur ?</h3>
                   <div class="row">  
                        <div class="picto1 col-lg-4" style=" margin-top: 20px; margin-bottom: 20px;">
                                          <img class="" src="img/q-a.png" alt="Card image cap" height="100" width="100">
                                          <div class="card-body">
                                            <h4 class="card-title">Example text to build  </h4>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                          </div>
                        </div>
                        <div class="picto1 col-lg-4" style="margin-top: 20px; margin-bottom: 20px;">  
                                          <img class="" src="img/s-f.png" alt="Card image cap" height="100" width="100">
                                          <div class="card-body">
                                            <h4 class="card-title">Example text to build  </h4>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                          </div>
                        </div>
                       <div class="picto1 col-lg-4" style="margin-top: 20px; margin-bottom: 20px;">
                                          <img class="" src="img/m-c.png" alt="Card image cap" height="100" width="100">
                                          <div class="card-body">
                                            <h4 class="card-title">Example text to build  </h4>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                          </div>
                        </div>
                    </div>
            </div>
       </div>
       <div class="container sac clearfix nouscontacter">
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
                            <a class=" btn btn-default iconreseaux" id="moncercle" href="https://www.linkedin.com/company/allassur/"> 
                                <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KPGc+Cgk8Zz4KCQk8cmVjdCB5PSIxNjAiIHdpZHRoPSIxMTQuNDk2IiBoZWlnaHQ9IjM1MiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQyNi4zNjgsMTY0LjEyOGMtMS4yMTYtMC4zODQtMi4zNjgtMC44LTMuNjQ4LTEuMTUyYy0xLjUzNi0wLjM1Mi0zLjA3Mi0wLjY0LTQuNjQtMC44OTYgICAgYy02LjA4LTEuMjE2LTEyLjczNi0yLjA4LTIwLjU0NC0yLjA4Yy02Ni43NTIsMC0xMDkuMDg4LDQ4LjU0NC0xMjMuMDQsNjcuMjk2VjE2MEgxNjB2MzUyaDExNC40OTZWMzIwICAgIGMwLDAsODYuNTI4LTEyMC41MTIsMTIzLjA0LTMyYzAsNzkuMDA4LDAsMjI0LDAsMjI0SDUxMlYyNzQuNDY0QzUxMiwyMjEuMjgsNDc1LjU1MiwxNzYuOTYsNDI2LjM2OCwxNjQuMTI4eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPGNpcmNsZSBjeD0iNTYiIGN5PSI1NiIgcj0iNTYiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" /> 
                            </a> 
                             <a class="btn btn-default iconreseaux float-right" id="moncercle" href="https://www.facebook.com/allassur/">  <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAzMTAgMzEwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAzMTAgMzEwOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCI+CjxnIGlkPSJYTUxJRF84MzRfIj4KCTxwYXRoIGlkPSJYTUxJRF84MzVfIiBkPSJNODEuNzAzLDE2NS4xMDZoMzMuOTgxVjMwNWMwLDIuNzYyLDIuMjM4LDUsNSw1aDU3LjYxNmMyLjc2MiwwLDUtMi4yMzgsNS01VjE2NS43NjVoMzkuMDY0ICAgYzIuNTQsMCw0LjY3Ny0xLjkwNiw0Ljk2Ny00LjQyOWw1LjkzMy01MS41MDJjMC4xNjMtMS40MTctMC4yODYtMi44MzYtMS4yMzQtMy44OTljLTAuOTQ5LTEuMDY0LTIuMzA3LTEuNjczLTMuNzMyLTEuNjczaC00NC45OTYgICBWNzEuOTc4YzAtOS43MzIsNS4yNC0xNC42NjcsMTUuNTc2LTE0LjY2N2MxLjQ3MywwLDI5LjQyLDAsMjkuNDIsMGMyLjc2MiwwLDUtMi4yMzksNS01VjUuMDM3YzAtMi43NjItMi4yMzgtNS01LTVoLTQwLjU0NSAgIEMxODcuNDY3LDAuMDIzLDE4Ni44MzIsMCwxODUuODk2LDBjLTcuMDM1LDAtMzEuNDg4LDEuMzgxLTUwLjgwNCwxOS4xNTFjLTIxLjQwMiwxOS42OTItMTguNDI3LDQzLjI3LTE3LjcxNiw0Ny4zNTh2MzcuNzUySDgxLjcwMyAgIGMtMi43NjIsMC01LDIuMjM4LTUsNXY1MC44NDRDNzYuNzAzLDE2Mi44NjcsNzguOTQxLDE2NS4xMDYsODEuNzAzLDE2NS4xMDZ6IiBmaWxsPSIjRkZGRkZGIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" /></a>
                        </div>
                </div>
            </div>
        <div class="footer-center container">
            <div class="row" id="footerstyle">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <ul class="footer-list">
                         <h5 style="margin-bottom: 20px;">Particulier</h5>    
                            <li>
                                <a href="/Allassur/index.php?page=sante">Santé</a>
                            </li>

                            <li>
                                <a href="/Allassur/index.php?page=prevoyance-sante">Prévoyance Santé</a>
                            </li>

                            <li>
                               <a href="/Allassur/index.php?page=assurance-pret">Assurance de prêt</a>
                            </li>

                            <li>
                               <a href="/Allassur/index.php?page=pautomobile">Automobile</a>
                            </li>

                            <li>
                               <a href="/Allassur/index.php?page=moto">Moto</a>
                            </li>

                            <li>
                               <a href="/Allassur/index.php?page=habitation">Habitation</a>
                            </li>

                            <li>
                               <a href="/Allassur/index.php?page=chiens-chats">Chients & Chats</a>
                            </li>

                            <li>
                               <a href="/Allassur/index.php?page=obseques">Obsèques </a>
                            </li>

                            <li>
                               <a href="/Allassur/index.php?page=dependance">Dépendance</a>
                            </li>

                            <li>
                               <a href="/Allassur/index.php?page=retraite">Retraite</a>
                            </li>
                     </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <ul class="footer-list">
                        <h5 style="margin-bottom: 20px;">Professionnel</h5>    
                        <li>
                            <a href="/Allassur/index.php?page=artisans">Artisans / BTP</a>
                        </li>

                        <li>
                            <a href="/Allassur/index.php?page=commercant">Commerçants </a>
                        </li>

                        <li>
                           <a href="/Allassur/index.php?page=immobilier">Immobilier</a>
                        </li>

                        <li>
                           <a href="/Allassur/index.php?page=me-services">Métiers du service</a>
                        </li>

                        <li>
                           <a href="/Allassur/index.php?page=m-sante">Métiers de la santé</a>
                        </li>

                        <li>
                           <a href="/Allassur/index.php?page=hotellerie">Hotellerie et restauration</a>
                        </li>
                        
                        <li>
                           <a href="/Allassur/index.php?page=restauration">Restauration</a>
                        </li>

                        <li>
                           <a href="/Allassur/index.php?page=secteurs">Autres secteurs</a>
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
                            <a href="/Allassur/index.php?page=a-propos"> À propos d'Allassur</a>
                        </li>
                         <li>
                            <a href="/Allassur/index.php?page=contact"> Contact</a>
                        </li>
                        <li>
                            <a href="/Allassur/index.php?page=devis2"> Faire un devis </a>
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
                                <a href="/Allassur/index.php?page=mentions-legales">Mentions Légales</a>
                            </li>
                             <li>
                                <a href="/Allassur/index.php?page=cgv"> CGV </a>
                            </li>
                            <li>
                                <a href="/Allassur/index.php?page=plan"> Plan du site</a>
                            </li>

                            <li>
                                <a href="/Allassur/index.php?page=conseil"> Un conseil ?</a>
                            </li>
                         </ul>
                </div>
            </div>
    </div>
       
       
    </footer>
    
    </body>
</html>