<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Les composants Jasvacripts de Boostrap -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="script1.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">

    <title>All'Assur : Courtier en assurances</title>

</head>
<script>
    $(document).ready(function () {
        $("#contactnoir").click(function () {
            $('html, body').animate({ scrollTop: 1835 }, '5000000')
        });
    });

    $(document).ready(function () {
        $("#obsequehref").click(function () {
            $('html, body').animate({ scrollTop: 305 }, '5000000')
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
                    <a class="nav-link" href="/index.php?page=devis"> Faire un devis</a>
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
                <a href="/index.php" class="navbar-brand">
                    <img src="img_BLANC.png" height="70" width="260" alt="" />
                </a>
            </div>
            <ul class="nav justify-content-end ppta col-6 float-right" style="margin-top: 50px;">
                <li class="nav-item">
                    <a id="partic" class="nav-link active" href="/index.php">PARTICULIER
                        <hr style="border-bottom: 3px solid #a34d1f; margin: 6px 0;"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="professionel" href="/index.php?page=professionnel"> PROFESSIONNEL
                    </a>
                </li>
            </ul>


        </nav>
        <!-- Menu Mobile !-->
        <nav class="navbar navbar navigation2-2 d-lg-none">
            <div class="logo col-12" style="text-align: center; margin-bottom: 30px; padding: 0;">
                <a href="" class="navbar-brand">
                    <img src="img_BLANC.png" height="70" width="220" alt="" />
                </a>
            </div>
            <ul class="nav nav-pills nav-fill col-12" style="padding: 0;">
                <li class="nav-item">
                    <a class="nav-link active" href="/index.php">PARTICULIER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="proff" href="/index.php?page=professionnel">PROFESSIONNEL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="proff" href="/index.php?page=devis">FAIRE UN DEVIS</a>
                </li>
            </ul>
        </nav>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar container navigation3 navigation-toogle3 d-lg-none ">
                    <span class="navbar-brand" style="color: white; font-size: 30px;" href="#">MENU</span>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ5MS4zMTgsMjM1LjMxOEgyMC42ODJDOS4yNiwyMzUuMzE4LDAsMjQ0LjU3NywwLDI1NnM5LjI2LDIwLjY4MiwyMC42ODIsMjAuNjgyaDQ3MC42MzYgICAgYzExLjQyMywwLDIwLjY4Mi05LjI1OSwyMC42ODItMjAuNjgyQzUxMiwyNDQuNTc4LDUwMi43NDEsMjM1LjMxOCw0OTEuMzE4LDIzNS4zMTh6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDkxLjMxOCw3OC40MzlIMjAuNjgyQzkuMjYsNzguNDM5LDAsODcuNjk5LDAsOTkuMTIxYzAsMTEuNDIyLDkuMjYsMjAuNjgyLDIwLjY4MiwyMC42ODJoNDcwLjYzNiAgICBjMTEuNDIzLDAsMjAuNjgyLTkuMjYsMjAuNjgyLTIwLjY4MkM1MTIsODcuNjk5LDUwMi43NDEsNzguNDM5LDQ5MS4zMTgsNzguNDM5eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ5MS4zMTgsMzkyLjE5N0gyMC42ODJDOS4yNiwzOTIuMTk3LDAsNDAxLjQ1NiwwLDQxMi44NzlzOS4yNiwyMC42ODIsMjAuNjgyLDIwLjY4Mmg0NzAuNjM2ICAgIGMxMS40MjMsMCwyMC42ODItOS4yNTksMjAuNjgyLTIwLjY4MlM1MDIuNzQxLDM5Mi4xOTcsNDkxLjMxOCwzOTIuMTk3eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="/index.php?page=sante"> <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDI0LjUsODEuODM2Yy01LjUyLDAtMTAsNC40OC0xMCwxMGMwLDUuNTIsNC40OCwxMCwxMCwxMGM1LjUyLDAsMTAtNC40OCwxMC0xMEM0MzQuNSw4Ni4zMTUsNDMwLjAyLDgxLjgzNiw0MjQuNSw4MS44MzYgICAgeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ3Ni40NTgsNzEuNzYxYy0yMy44NjUtMjYuODIzLTU2Ljk2Ny00MS41OTUtOTMuMjA4LTQxLjU5NWMtMzkuNjI5LDAtNzUuNzkxLDE1LjM2MS0xMDQuNTc0LDQ0LjQyMyAgICBDMjY4LjY2Nyw4NC42OTQsMjYxLjE4Niw5NC43OSwyNTYsMTAyLjgwMmMtNS4xODYtOC4wMTEtMTIuNjY3LTE4LjEwNi0yMi42NzYtMjguMjEzQzIwNC41NDEsNDUuNTI2LDE2OC4zOCwzMC4xNjUsMTI4Ljc1LDMwLjE2NSAgICBDNTIuODk0LDMwLjE2NSwwLDkzLjYyNiwwLDE2OS4wNzZjMCwxMDEuOTE4LDEwOC4wMDQsMTg3LjczMywyNDkuNDUxLDMxMC4zMTZjMS44NzksMS42MjksNC4yMTQsMi40NDMsNi41NDksMi40NDMgICAgYzIuMzM1LDAsNC42Ny0wLjgxNCw2LjU0OS0yLjQ0M0M0MDQuMzMzLDM1Ni41MTYsNTEyLDI3MC44NTIsNTEyLDE2OS4wNzZDNTEyLDEzMi4wODEsNDk5LjM3OCw5Ny41MjEsNDc2LjQ1OCw3MS43NjF6ICAgICBNMjU2LDQ1OC42MDdDMTIyLjQzMSwzNDMuMDIzLDIwLDI2MC4wMDcsMjAsMTY5LjA3NmMwLTY3Ljc5LDQ2Ljc1Mi0xMTguOTEsMTA4Ljc1LTExOC45MWMzNC40MjQsMCw2NC42NjEsMTIuNzg2LDg5Ljg3MSwzOC4wMDEgICAgYzE5LjIwNiwxOS4yMSwyOC4xNjcsMzguODE1LDI4LjI1NSwzOS4wMTFjMS42MDksMy41ODcsNS4xNzYsNS44OTEsOS4xMDksNS44OTljMC4wMDYsMCwwLjAxMywwLDAuMDE5LDAgICAgYzMuOTMyLDAsNy41MDQtMi4zMTMsOS4xMjEtNS44OTljMC4wODgtMC4xOTYsOS4wNDktMTkuOCwyOC4yNTUtMzkuMDExYzI1LjIwOS0yNS4yMTYsNTUuNDQ2LTM4LjAwMSw4OS44NzEtMzguMDAxICAgIGM2MS45OTgsMCwxMDguNzUsNTEuMTIsMTA4Ljc1LDExOC45MUM0OTIsMjYyLjA2LDM4Mi44MSwzNDguODcyLDI1Niw0NTguNjA3eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ1OS40NzYsMTE3LjQ2MWMtMi41NjUtNC44OTItOC42MS02Ljc3Ni0xMy41LTQuMjEyYy00Ljg5MSwyLjU2NS02Ljc3Nyw4LjYwOS00LjIxMiwxMy41ICAgIEM0NDguMzY1LDEzOS4zMzYsNDUyLDE1NC4zNjgsNDUyLDE2OS4wNzZjMCwyOC44OTYtMTMuNzUzLDU5LjU2NS00My4yODIsOTYuNTE3Yy0zLjQ0OCw0LjMxNC0yLjc0NSwxMC42MDcsMS41NjksMTQuMDU1ICAgIGM0LjM0MiwzLjQ3LDEwLjYyOSwyLjcxOCwxNC4wNTUtMS41NjlDNDU2Ljg1NiwyMzcuMzkxLDQ3MiwyMDIuNzU0LDQ3MiwxNjkuMDc2QzQ3MiwxNTAuOTMyLDQ2Ny42NjksMTMzLjA4NCw0NTkuNDc2LDExNy40NjF6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMzUyLDIyMS44MzZoLTU2di01NmMwLTUuNTIzLTQuNDc3LTEwLTEwLTEwaC02MGMtNS41MjMsMC0xMCw0LjQ3Ny0xMCwxMHY1NmgtNTZjLTUuNTIzLDAtMTAsNC40NzctMTAsMTB2NjAgICAgYzAsNS41MjMsNC40NzcsMTAsMTAsMTBoNTZ2NTZjMCw1LjUyMyw0LjQ3NywxMCwxMCwxMGg2MGM1LjUyMywwLDEwLTQuNDc3LDEwLTEwdi01Nmg1NmM1LjUyMywwLDEwLTQuNDc3LDEwLTEwdi02MCAgICBDMzYyLDIyNi4zMTMsMzU3LjUyMywyMjEuODM2LDM1MiwyMjEuODM2eiBNMzQyLDI4MS44MzVoLTU2Yy01LjUyMywwLTEwLDQuNDc3LTEwLDEwdjU2aC00MHYtNTZjMC01LjUyMy00LjQ3Ny0xMC0xMC0xMGgtNTZ2LTQwICAgIGg1NmM1LjUyMywwLDEwLTQuNDc3LDEwLTEwdi01Nmg0MHY1NmMwLDUuNTIzLDQuNDc3LDEwLDEwLDEwaDU2VjI4MS44MzV6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
                                    Santé <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/index.php?page=mutuelle"> <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMTI1LjY5NiwxMjUuOTk0Yy01LjUyLDAtMTAsNC40OC0xMCwxMHM0LjQ4LDEwLDEwLDEwYzUuNTIsMCwxMC00LjQ4LDEwLTEwUzEzMS4yMTYsMTI1Ljk5NCwxMjUuNjk2LDEyNS45OTR6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjE1LjY5MSwzMTIuOTg0aC0yOS45OTh2LTI5Ljk5OGMwLTUuNTIyLTQuNDc4LTEwLTEwLTEwcy05Ljk5OSw0LjQ3OC05Ljk5OSwxMHYyOS45OThoLTI5Ljk5OCAgICBjLTUuNTIyLDAtMTAsNC40NzgtMTAsOS45OTlzNC40NzgsMTAsMTAsMTBoMjkuOTk4djI5Ljk5OGMwLDUuNTIyLDQuNDc4LDEwLDkuOTk5LDEwczEwLTQuNDc4LDEwLTEwdi0yOS45OThoMjkuOTk4ICAgIGM1LjUyMiwwLDEwLTQuNDc4LDEwLTEwUzIyMS4yMTQsMzEyLjk4NCwyMTUuNjkxLDMxMi45ODR6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDg1LjU3OCwzMjEuOTg0Yy0yMi4xMDUtMzguMjg2LTcwLjk4MS01MS4zODktMTA5LjI3NC0yOS4yNzlsLTQwLjYxOCwyMy40NXYtODYuODM2YzAtMTAuNzM1LTMuNTUtMjEuMzg4LTkuOTk5LTI5Ljk5OCAgICBsLTQ5Ljk5Ny02Ni42NjF2LTI4LjM4NmMxMS42MzgtNC4xMjgsMTkuOTk5LTE1LjI0MiwxOS45OTktMjguMjc5VjI5Ljk5OEMyOTUuNjg3LDEzLjQ1NywyODIuMjMsMCwyNjUuNjg5LDBIODUuNjk4ICAgIEM2OS4xNTcsMCw1NS42OTksMTMuNDU3LDU1LjY5OSwyOS45OTh2NDUuOTk4YzAsMTMuMDM1LDguMzYxLDI0LjE1MSwxOS45OTksMjguMjc5djI4LjM4NmwtNTAuMDAxLDY2LjY2NSAgICBjLTYuNDQ2LDguNjA2LTkuOTk2LDE5LjI1OC05Ljk5NiwyOS45OTN2MTkzLjY2YzAsMjcuNTY5LDIyLjQyOSw0OS45OTcsNDkuOTk3LDQ5Ljk5N2gxNjAuNzAyICAgIGMyMi40MjEsMzcuNTgzLDcwLjc2Nyw1MC4xNjEsMTA4LjY2NCwyOC4yNzlMNDU2LjMsNDMxLjI1OEM0OTQuMjU1LDQwOS4zNCw1MDcuNzk0LDM2MC40NzksNDg1LjU3OCwzMjEuOTg0eiBNNzUuNjk4LDI5Ljk5OCAgICBjMC01LjUxNCw0LjQ4Ni0xMCw5Ljk5OS0xMGgxNzkuOTkxYzUuNTE0LDAsMTAsNC40ODYsMTAsMTB2NDUuOTk4YzAsNS41MTQtNC40ODYsOS45OTktMTAsOS45OTlIODUuNjk4ICAgIGMtNS41MTQsMC05Ljk5OS00LjQ4Ni05Ljk5OS05Ljk5OVYyOS45OTh6IE00MS43MDEsMjExLjMxOWw1MS45OTYtNjkuMzI2YzEuMjk4LTEuNzMsMi0zLjgzNiwyLTZ2LTI5Ljk5OGgxNTkuOTkydjE5Ljk5OWgtODkuOTk1ICAgIGMtNS41MjIsMC0xMCw0LjQ3OC0xMCwxMHM0LjQ3OCwxMCwxMCwxMGg5NC45OTVsNDguOTkzLDY1LjMyMmMzLjIwMiw0LjI3NSw1LjE5MSw5LjM5LDUuNzkyLDE0LjY3NEgzNS45MTMgICAgQzM2LjUxMywyMjAuNzA1LDM4LjUwMiwyMTUuNTksNDEuNzAxLDIxMS4zMTl6IE02NS42OTksNDUyLjk3N2MtMTYuNTQxLDAtMjkuOTk4LTEzLjQ1Ny0yOS45OTgtMjkuOTk4di0xMC4wOTloMTgxLjY3NSAgICBjLTMuMTcxLDEyLjk2NS0zLjE1LDI2LjgxMywwLjQ4MSw0MC4wOThINjUuNjk5eiBNMjI1LjIxOSwzOTIuOThIMzUuN1YyNDUuOTg3aDI3OS45ODZWMzI3LjdsLTYwLjYxOSwzNS4wMDIgICAgQzI0Mi40MjgsMzcwLjAwMywyMzIuMjEyLDM4MC4zOTYsMjI1LjIxOSwzOTIuOTh6IE0zMjUuMDY2LDQ4My45MzVjLTI4LjY5NywxNi41NzEtNjUuMzY3LDYuNzcxLTgxLjk0OS0yMS45NDYgICAgYy0xNi42NjEtMjguOTk0LTYuNTY0LTY1LjQ5OCwyMS45NTItODEuOTY5bDU0LjI3Ny0zMS4zMzhsNTkuOTk3LDEwMy45MTVMMzI1LjA2Niw0ODMuOTM1eiBNNDQ2LjMsNDEzLjkzOWwtNDkuNjM3LDI4LjY1OSAgICBsLTU5Ljk5OC0xMDMuOTE3bDQ5LjYzOC0yOC42NTZjMjguNzE2LTE2LjU3OCw2NS4zNzMtNi43NjEsODEuOTU1LDIxLjk1N0M0ODQuOTEzLDM2MC44NDQsNDc0Ljc4NSwzOTcuNDksNDQ2LjMsNDEzLjkzOXoiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
                                    Mutuelle</a>
                            </li>
                            <li class="nav-item" style="border-bottom: none; border-bottom: 1px solid white;">
                                <a class="nav-link disabled" href="/index.php?page=prevoyance-sante"> <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+PHBhdGggZD0ibTI1NiAxMjBjLTUuNTE5NTMxIDAtMTAgNC40ODA0NjktMTAgMTBzNC40ODA0NjkgMTAgMTAgMTAgMTAtNC40ODA0NjkgMTAtMTAtNC40ODA0NjktMTAtMTAtMTB6bTAgMCIgZmlsbD0iI0ZGRkZGRiIvPjxwYXRoIGQ9Im0yNjYgNDAuMTc5Njg4di0zMC4xNzk2ODhjMC01LjUyMzQzOC00LjQ3NjU2Mi0xMC0xMC0xMHMtMTAgNC40NzY1NjItMTAgMTB2MzAuMTc5Njg4Yy0xMjIuMTk1MzEyIDMuODgyODEyLTIyOC4yMDMxMjUgNzguMzM5ODQzLTI0My45NDE0MDYgMTk3Ljg0NzY1Ni0xLjM2MzI4MiAzLjg5MDYyNS0yLjA1ODU5NCA3LjkxNDA2Mi0yLjA1ODU5NCAxMS45NzI2NTYgMCA1LjUyMzQzOCA0LjQ3NjU2MiAxMCAxMCAxMCAuMTI1IDAgLjI0NjA5NC0uMDE1NjI1LjM3MTA5NC0uMDE5NTMxLjE1NjI1LjAwNzgxMi4zMDg1OTQuMDE5NTMxLjQ2MDkzNy4wMTk1MzEgNS4xNDQ1MzEgMCA5LjUxNTYyNS0zLjk0NTMxMiA5Ljk1MzEyNS05LjE2NDA2Mi4yMjI2NTYtMi42NzU3ODIuNDkyMTg4LTUuMjg1MTU3Ljc5Mjk2OS03LjgwMDc4MiA1Ljk0MTQwNi0xMy4yMDMxMjUgMjcuMDg5ODQ0LTIzLjAzNTE1NiA0OS45MjE4NzUtMjMuMDM1MTU2IDI3LjQzMzU5NCAwIDUxLjUgMTQuMDE5NTMxIDUxLjUgMzAgMCA1LjUyMzQzOCA0LjQ3NjU2MiAxMCAxMCAxMCAuMjI2NTYyIDAgLjQ1MzEyNS0uMDE5NTMxLjY3NTc4MS0uMDM1MTU2LjEwOTM3NS0uMDAzOTA2LjIxODc1LS4wMDM5MDYuMzI4MTI1LS4wMTU2MjUuMDMxMjUtLjAwMzkwNy4wNjY0MDYtLjAwNzgxMy4xMDE1NjMtLjAxMTcxOSA0Ljk0NTMxMi0uNDg4MjgxIDguOTA2MjUtNC42MzY3MTkgOS4wMDM5MDYtOS43NTM5MDYuMDExNzE5LS44MDA3ODIuMDM1MTU2LTEuNjA5Mzc1LjA1ODU5NC0yLjQyOTY4OCAyLjE2NDA2Mi0xNS4wNzgxMjUgMjUuNTM1MTU2LTI3Ljc1MzkwNiA1MS4zMzIwMzEtMjcuNzUzOTA2IDI3LjQzMzU5NCAwIDUxLjUgMTQuMDE5NTMxIDUxLjUgMzB2MTAyaC0xMGMtNS41MjM0MzggMC0xMCA0LjQ3NjU2Mi0xMCAxMHY4MGMwIDUuNTE1NjI1LTQuNDg0Mzc1IDEwLTEwIDEwcy0xMC00LjQ4NDM3NS0xMC0xMGMwLTE2LjU0Mjk2OS0xMy40NTcwMzEtMzAtMzAtMzBzLTMwIDEzLjQ1NzAzMS0zMCAzMGMwIDM4LjU5NzY1NiAzMS40MDIzNDQgNzAgNzAgNzBzNzAtMzEuNDAyMzQ0IDcwLTcwdi04MGMwLTUuNTIzNDM4LTQuNDc2NTYyLTEwLTEwLTEwaC0xMHYtMTAyYzAtMTUuOTgwNDY5IDI0LjA2NjQwNi0zMCA1MS41LTMwIDI1LjgxNjQwNiAwIDQ5LjIwMzEyNSAxMi42OTUzMTIgNTEuMzI4MTI1IDI3LjcxNDg0NC4wMjM0MzcuODE2NDA2LjA0Njg3NSAxLjYzNjcxOC4wNjI1IDIuNDYwOTM3LjA5NzY1NiA1LjE0MDYyNSA0LjA1MDc4MSA5LjI5Njg3NSA5LjA1NDY4NyA5Ljc2NTYyNS4zNDM3NS4wMzkwNjMuNjk5MjE5LjA1ODU5NCAxLjA1NDY4OC4wNTg1OTQgNS41MjM0MzggMCAxMC00LjQ3NjU2MiAxMC0xMCAwLTE1Ljk4MDQ2OSAyNC4wNjY0MDYtMzAgNTEuNS0zMCAyMi44MjQyMTkgMCA0My45NjA5MzggOS44MjQyMTkgNDkuOTIxODc1IDIzLjAzNTE1Ni4zMDA3ODEgMi41MTU2MjUuNTcwMzEzIDUuMTI1Ljc5Mjk2OSA3LjgwMDc4Mi40Mzc1IDUuMjE4NzUgNC44MDg1OTQgOS4xNjQwNjIgOS45NTMxMjUgOS4xNjQwNjIuMTUyMzQzIDAgLjMwODU5My0uMDExNzE5LjQ2MDkzNy0uMDE5NTMxLjEyNS4wMDc4MTIuMjQ2MDk0LjAxOTUzMS4zNzEwOTQuMDE5NTMxIDUuNTIzNDM4IDAgMTAtNC40NzY1NjIgMTAtMTAgMC00LjA2NjQwNi0uNjk5MjE5LTguMDkzNzUtMi4wNjI1LTExLjk3NjU2Mi0xNS43MTg3NS0xMTkuMzYzMjgyLTEyMS41NzgxMjUtMTkzLjk1NzAzMi0yNDMuOTM3NS0xOTcuODQzNzV6bS0xNDAuODQzNzUgMTc2LjgyODEyNGMtMTMuMTEzMjgxLTEwLjQxNzk2OC0zMi4zMDA3ODEtMTcuMDA3ODEyLTUzLjY1NjI1LTE3LjAwNzgxMi0xNS45Njg3NSAwLTMwLjk4MDQ2OSAzLjcxNDg0NC00My4wODk4NDQgMTAuMDkzNzUgMjEuMTUyMzQ0LTcwLjc2OTUzMSA4MS4xMjg5MDYtMTIzLjMwODU5NCAxNjAuMzYzMjgyLTE0Mi4zMTY0MDYtMzkuNzU3ODEzIDM2LjA4OTg0NC01OC4wNzgxMjYgOTUuODI0MjE4LTYzLjYxNzE4OCAxNDkuMjMwNDY4em0xNDAuODQzNzUgMjI0Ljk5MjE4OGMwIDI3LjU3MDMxMi0yMi40Mjk2ODggNTAtNTAgNTBzLTUwLTIyLjQyOTY4OC01MC01MGMwLTUuNTE1NjI1IDQuNDg0Mzc1LTEwIDEwLTEwczEwIDQuNDg0Mzc1IDEwIDEwYzAgMTYuNTQyOTY5IDEzLjQ1NzAzMSAzMCAzMCAzMHMzMC0xMy40NTcwMzEgMzAtMzB2LTcwaDIwem05OC4xNzU3ODEtMjI5Ljg4MjgxMmMtMTMuMDMxMjUtNy44MTI1LTI5LjYwOTM3NS0xMi4xMTcxODgtNDYuNjc1NzgxLTEyLjExNzE4OC0yMC4yMTQ4NDQgMC0zOC40ODQzNzUgNS45MDYyNS01MS41IDE1LjM2NzE4OHYtNDUuMzY3MTg4YzAtNS41MjM0MzgtNC40NzY1NjItMTAtMTAtMTBzLTEwIDQuNDc2NTYyLTEwIDEwdjQ1LjM2NzE4OGMtMTMuMDE1NjI1LTkuNDYwOTM4LTMxLjI4NTE1Ni0xNS4zNjcxODgtNTEuNS0xNS4zNjcxODgtMTcuMDY2NDA2IDAtMzMuNjQ0NTMxIDQuMzA0Njg4LTQ2LjY3NTc4MSAxMi4xMTcxODgtLjcxODc1LjQyOTY4Ny0xLjQxNDA2My44NzUtMi4xMDE1NjMgMS4zMjQyMTggMTAuMzkwNjI1LTg0Ljg3ODkwNiA0OS42Njc5NjktMTQ1LjYxMzI4MSAxMDAuMjc3MzQ0LTE1Mi43NDIxODd2MjkuMzAwNzgxYzAgNS41MjM0MzggNC40NzY1NjIgMTAgMTAgMTBzMTAtNC40NzY1NjIgMTAtMTB2LTI5LjMwMDc4MWM1MC42MDkzNzUgNy4xMjEwOTMgODkuODkwNjI1IDY3Ljg2MzI4MSAxMDAuMjc3MzQ0IDE1Mi43NDIxODctLjY4NzUtLjQ0OTIxOC0xLjM4MjgxMy0uODk0NTMxLTIuMTAxNTYzLTEuMzI0MjE4em03Ni4zMjQyMTktMTIuMTE3MTg4Yy0yMS4zNTU0NjkgMC00MC41MzkwNjIgNi41ODk4NDQtNTMuNjUyMzQ0IDE3LjAwMzkwNi01LjUyMzQzNy01My4yNzM0MzctMjMuODA4NTk0LTExMy4wODk4NDQtNjMuNjIxMDk0LTE0OS4yMjY1NjIgNzkuMjMwNDY5IDE5LjAwNzgxMiAxMzkuMjEwOTM4IDcxLjU0Njg3NSAxNjAuMzYzMjgyIDE0Mi4zMTY0MDYtMTIuMTEzMjgyLTYuMzc4OTA2LTI3LjEyMTA5NC0xMC4wOTM3NS00My4wODk4NDQtMTAuMDkzNzV6bTAgMCIgZmlsbD0iI0ZGRkZGRiIvPjwvc3ZnPgo=" />
                                    Prévoyance Santé </a>
                            </li>
                            <li class="nav-item" style="border-bottom: 0px;">
                                <a class="nav-link disabled" href="/index.php?page=obseque" id="obsequehref"
                                    style="padding-left: 40px;"> Obsèques </a>
                            </li>
                            <li class="nav-item" style="border-bottom: 0px;">
                                <a class="nav-link disabled" href="/index.php?page=obseque" style="padding-left: 40px;">
                                    Obsèques </a>
                            </li>
                            <li class="nav-item" style="border-bottom: 0px;">
                                <a class="nav-link disabled" href="/index.php?page=dependance" style="padding-left: 40px;">
                                    Dependance </a>
                            </li>
                            <li class="nav-item" style="border-bottom: 0px;">
                                <a class="nav-link disabled" href="/index.php?page=retraite" style="padding-left: 40px;">
                                    Retraite </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="/index.php?page=assurance-pret"> <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMi4wMDIgNTEyLjAwMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyLjAwMiA1MTIuMDAyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTUwMi4wMDEsNDkyLjAwMmgtNDR2LTc5YzAtNS41MjMtNC40NzgtMTAtMTAtMTBjLTUuNTIyLDAtMTAsNC40NzctMTAsMTB2NzloLTEyMHYtMTkwYzAtNS41MjMtNC40NzgtMTAtMTAtMTBoLTEwNCAgICBjLTUuNTIyLDAtMTAsNC40NzctMTAsMTB2MTkwaC0xMjBWMjY2LjAwMWgzLjg0OGMyLjY1MiwwLDUuMTk1LTEuMDU0LDcuMDcxLTIuOTI5TDI1Ni4wMDEsOTEuOTkxbDE3MS4wODEsMTcxLjA4MSAgICBjMS44NzYsMS44NzUsNC40MTksMi45MjksNy4wNzEsMi45MjloMy44NDh2NzVjMCw1LjUyMyw0LjQ3OCwxMCwxMCwxMGM1LjUyMiwwLDEwLTQuNDc3LDEwLTEwdi03NWg0NCAgICBjNC4wNDUsMCw3LjY5MS0yLjQzNyw5LjIzOS02LjE3M2MxLjU0OC0zLjczNiwwLjY5MS04LjAzOC0yLjE2OC0xMC44OThsLTI0Ni0yNDZjLTMuOTA2LTMuOTA1LTEwLjIzNi0zLjkwNS0xNC4xNDMsMGwtOTQsOTQgICAgYy0zLjkwNSwzLjkwNS0zLjkwNSwxMC4yMzcsMCwxNC4xNDJjMy45MDYsMy45MDYsMTAuMjM4LDMuOTA2LDE0LjE0MywwbDg2LjkyOS04Ni45MjlsMjIxLjg1NywyMjEuODU4aC0zOS41NjNMMjYzLjA3Miw3MC43NzggICAgYy0zLjkwNi0zLjkwNS0xMC4yMzYtMy45MDUtMTQuMTQzLDBMNzMuNzA2LDI0Ni4wMDFIMzQuMTQzbDc4LjkyOS03OC45MjhjMy45MDUtMy45MDUsMy45MDUtMTAuMjM3LDAtMTQuMTQzICAgIGMtMy45MDUtMy45MDQtMTAuMjM3LTMuOTA1LTE0LjE0MywwbC05Niw5NmMtMi44NTksMi44Ni0zLjcxNiw3LjE2MS0yLjE2OCwxMC44OThjMS41NDgsMy43MzcsNS4xOTUsNi4xNzMsOS4yNCw2LjE3M2g0NHYyMjZoLTQ0ICAgIGMtNS41MjIsMC0xMCw0LjQ3Ny0xMCwxMHM0LjQ3OCwxMCwxMCwxMGg1NGgxNDBoMTA0aDE0MGg1NGM1LjUyMiwwLDEwLTQuNDc3LDEwLTEwUzUwNy41MjMsNDkyLjAwMiw1MDIuMDAxLDQ5Mi4wMDJ6ICAgICBNMjk4LjAwMSw0OTIuMDAyaC04NHYtMTgwaDg0VjQ5Mi4wMDJ6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDA2LjAwMSwyOTIuMDAyaC01NmMtNS41MjIsMC0xMCw0LjQ3Ny0xMCwxMHYxMDBjMCw1LjUyMyw0LjQ3OCwxMCwxMCwxMGg1NmM1LjUyMiwwLDEwLTQuNDc3LDEwLTEwdi0xMDAgICAgQzQxNi4wMDEsMjk2LjQ3OSw0MTEuNTIzLDI5Mi4wMDIsNDA2LjAwMSwyOTIuMDAyeiBNMzk2LjAwMSwzOTIuMDAyaC0zNnYtODBoMzZWMzkyLjAwMnoiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0xNjIuMDAxLDI5Mi4wMDJoLTU2Yy01LjUyMiwwLTEwLDQuNDc3LTEwLDEwdjEwMGMwLDUuNTIzLDQuNDc4LDEwLDEwLDEwaDU2YzUuNTIyLDAsMTAtNC40NzcsMTAtMTB2LTEwMCAgICBDMTcyLjAwMSwyOTYuNDc5LDE2Ny41MjMsMjkyLjAwMiwxNjIuMDAxLDI5Mi4wMDJ6IE0xNTIuMDAxLDM5Mi4wMDJoLTM2di04MGgzNlYzOTIuMDAyeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTI1Ni4wMDEsMTY0LjMyMmMtMjUuMzY0LDAtNDYsMjAuNjM2LTQ2LDQ2czIwLjYzNiw0Niw0Niw0NmMyNS4zNjQsMCw0Ni0yMC42MzYsNDYtNDZTMjgxLjM2NSwxNjQuMzIyLDI1Ni4wMDEsMTY0LjMyMnogICAgIE0yNTYuMDAxLDIzNi4zMjJjLTE0LjMzNywwLTI2LTExLjY2NC0yNi0yNnMxMS42NjMtMjYsMjYtMjZjMTQuMzM3LDAsMjYsMTEuNjY0LDI2LDI2UzI3MC4zMzgsMjM2LjMyMiwyNTYuMDAxLDIzNi4zMjJ6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjQ0LjA3LDM5NC45MzJjLTEuODU5LTEuODYtNC40NC0yLjkzLTcuMDY5LTIuOTNjLTIuNjMsMC01LjIxLDEuMDctNy4wNywyLjkzYy0xLjg2LDEuODYtMi45Myw0LjQ0LTIuOTMsNy4wNyAgICBzMS4wNjksNS4yMSwyLjkzLDcuMDdjMS44NjEsMS44Niw0LjQ0LDIuOTMsNy4wNywyLjkzczUuMjEtMS4wNyw3LjA2OS0yLjkzYzEuODYtMS44NiwyLjkzMS00LjQ0LDIuOTMxLTcuMDcgICAgUzI0NS45MzEsMzk2Ljc5MiwyNDQuMDcsMzk0LjkzMnoiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0xNDAuMDcsMTI1LjkzMmMtMS44NTktMS44Ni00LjQzOS0yLjkzLTcuMDY5LTIuOTNzLTUuMjEsMS4wNy03LjA3LDIuOTNjLTEuODYsMS44Ni0yLjkzLDQuNDQtMi45Myw3LjA3ICAgIHMxLjA2OSw1LjIxLDIuOTMsNy4wN2MxLjg2MSwxLjg2LDQuNDQsMi45Myw3LjA3LDIuOTNzNS4yMS0xLjA3LDcuMDY5LTIuOTNjMS44Ni0xLjg2LDIuOTMxLTQuNDQsMi45MzEtNy4wNyAgICBTMTQxLjkzMSwxMjcuNzkyLDE0MC4wNywxMjUuOTMyeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ1NS4wNywzNjcuMjYxYy0xLjg1OS0xLjg1OS00LjQ0LTIuOTMtNy4wNjktMi45M2MtMi42MywwLTUuMjEsMS4wNy03LjA3LDIuOTNjLTEuODYsMS44Ny0yLjkzLDQuNDQtMi45Myw3LjA3ICAgIHMxLjA2OSw1LjIxLDIuOTMsNy4wOGMxLjg2LDEuODYsNC40NCwyLjkyLDcuMDcsMi45MnM1LjIxLTEuMDYsNy4wNjktMi45MmMxLjg2LTEuODcsMi45MzEtNC40NCwyLjkzMS03LjA4ICAgIEM0NTguMDAxLDM3MS43MDEsNDU2LjkzMSwzNjkuMTIxLDQ1NS4wNywzNjcuMjYxeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                                    Assurance de prêt</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="/index.php?page=automobile">
                                    <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBoZWlnaHQ9IjMycHgiIHZpZXdCb3g9IjAgLTU1IDQ3OS45ODI2OSA0NzkiIHdpZHRoPSIzMnB4Ij48cGF0aCBkPSJtMjEuMTk1MzEyIDMwMS44MzU5MzhjMi4zNjMyODIgMTEuMDk3NjU2IDEyLjI5Njg3NiAxOC45MzM1OTMgMjMuNjM2NzE5IDE4LjY1NjI1aDMuMTYwMTU3djQwYzAgNC40MTc5NjggMy41ODIwMzEgOCA4IDhoODBjNC40MTc5NjggMCA4LTMuNTgyMDMyIDgtOHYtNDBoMTkydjQwYzAgNC40MTc5NjggMy41ODIwMzEgOCA4IDhoODBjNC40MTc5NjggMCA4LTMuNTgyMDMyIDgtOHYtNDBoMy4yMDMxMjRjMTEuMzM5ODQ0LjI3NzM0MyAyMS4yNzM0MzgtNy41NTg1OTQgMjMuNjM2NzE5LTE4LjY1NjI1bDIwLjQ4ODI4MS0xMTAuMTQ0NTMyYzIuMTQwNjI2LTExLjUyMzQzNy0uOTcyNjU2LTIzLjQwMjM0NC04LjQ5NjA5My0zMi4zOTA2MjUtNy44Mzk4NDQtOS40MjU3ODEtMTkuNDc2NTYzLTE0Ljg1NTQ2OS0zMS43MzQzNzUtMTQuODA4NTkzaC0yMy4wOTc2NTZ2LTE2aDQwYzQuNDE3OTY4IDAgOC0zLjU4MjAzMiA4LTh2LTMyYzAtNC40MTc5NjktMy41ODIwMzItOC04LThoLTQwdi0yNGMtLjAzNTE1Ny0zMC45MTQwNjMtMjUuMDg1OTM4LTU1Ljk2NDg0NC01Ni01NmgtMjQwYy0zMC45MTAxNTcuMDM1MTU2LTU1Ljk2NDg0NCAyNS4wODU5MzctNTYgNTZ2MjRoLTQwYy00LjQxNzk2OSAwLTggMy41ODIwMzEtOCA4djMyYzAgNC40MTc5NjggMy41ODIwMzEgOCA4IDhoNDB2MTZoLTIzLjA5Mzc1Yy0xMi4yNTM5MDctLjA1NDY4OC0yMy44OTA2MjYgNS4zNjMyODEtMzEuNzM4MjgyIDE0Ljc3MzQzNy03LjUyNzM0NCA5LTEwLjY0NDUzMSAyMC44OTA2MjUtOC40OTYwOTQgMzIuNDI1Nzgxem0zOTQuNzk2ODc2LTIwNS4zNDM3NWgzMnYxNmgtMzJ6bS0yODggMjU2aC02NHYtMzJoNjR6bTI4OCAwaC02NHYtMzJoNjR6bS0zMzYtMjMydi02NGMuMDI3MzQzLTIyLjA4MjAzMiAxNy45MjE4NzQtMzkuOTcyNjU3IDQwLTQwaDI0MGMyMi4wODIwMzEuMDI3MzQzIDM5Ljk3NjU2MiAxNy45MTc5NjggNDAgNDB2ODhoLTMyMHptLTQ4LTh2LTE2aDMydjE2em0tMTAuNTI3MzQ0IDU3YzQuODEyNS01Ljc0NjA5NCAxMS45Mzc1LTkuMDQ2ODc2IDE5LjQzMzU5NC05aDM5OC4xOTE0MDZjNy40OTYwOTQtLjA0Njg3NiAxNC42MjEwOTQgMy4yNTM5MDYgMTkuNDMzNTk0IDkgNC40NzI2NTYgNS4zMzU5MzcgNi4zMzIwMzEgMTIuMzkwNjI0IDUuMDcwMzEyIDE5LjIzODI4MWwtMjAuNTI3MzQ0IDExMC4xNjAxNTZjLTEgMy40OTIxODctNC4yODkwNjIgNS44MjAzMTMtNy45MTQwNjIgNS42MDE1NjNoLTM5MC4zMjAzMTNjLTMuNjI1LjIyMjY1Ni02LjkxNDA2Mi0yLjEwOTM3Ni03LjkxMDE1Ni01LjYwMTU2M2wtMjAuNTI3MzQ0LTExMC4xNjAxNTZjLTEuMjYxNzE5LTYuODQ3NjU3LjU5NzY1Ny0xMy45MDIzNDQgNS4wNzAzMTMtMTkuMjM4Mjgxem0wIDAiIGZpbGw9IiNGRkZGRkYiLz48cGF0aCBkPSJtODcuOTkyMTg4IDI3Mi40OTIxODhjMjIuMDkzNzUgMCA0MC0xNy45MTAxNTcgNDAtNDAgMC0yMi4wOTM3NS0xNy45MDYyNS00MC00MC00MC0yMi4wODk4NDQgMC00MCAxNy45MDYyNS00MCA0MCAuMDI3MzQzIDIyLjA3ODEyNCAxNy45MjE4NzQgMzkuOTcyNjU2IDQwIDQwem0wLTY0YzEzLjI1NzgxMiAwIDI0IDEwLjc0NjA5MyAyNCAyNCAwIDEzLjI1MzkwNi0xMC43NDIxODggMjQtMjQgMjQtMTMuMjUzOTA3IDAtMjQtMTAuNzQ2MDk0LTI0LTI0IDAtMTMuMjUzOTA3IDEwLjc0NjA5My0yNCAyNC0yNHptMCAwIiBmaWxsPSIjRkZGRkZGIi8+PHBhdGggZD0ibTM5MS45OTIxODggMjcyLjQ5MjE4OGMyMi4wOTM3NSAwIDQwLTE3LjkxMDE1NyA0MC00MCAwLTIyLjA5Mzc1LTE3LjkwNjI1LTQwLTQwLTQwLTIyLjA4OTg0NCAwLTQwIDE3LjkwNjI1LTQwIDQwIC4wMjczNDMgMjIuMDc4MTI0IDE3LjkyMTg3NCAzOS45NzI2NTYgNDAgNDB6bTAtNjRjMTMuMjU3ODEyIDAgMjQgMTAuNzQ2MDkzIDI0IDI0IDAgMTMuMjUzOTA2LTEwLjc0MjE4OCAyNC0yNCAyNC0xMy4yNTM5MDcgMC0yNC0xMC43NDYwOTQtMjQtMjQgMC0xMy4yNTM5MDcgMTAuNzQ2MDkzLTI0IDI0LTI0em0wIDAiIGZpbGw9IiNGRkZGRkYiLz48cGF0aCBkPSJtMTUxLjk5MjE4OCAyNzIuNDkyMTg4aDE3NmM0LjQxNzk2OCAwIDgtMy41ODIwMzIgOC04di02NGMwLTQuNDE3OTY5LTMuNTgyMDMyLTgtOC04aC0xNzZjLTQuNDE3OTY5IDAtOCAzLjU4MjAzMS04IDh2NjRjMCA0LjQxNzk2OCAzLjU4MjAzMSA4IDggOHptOC02NGgxNjB2MTZoLTE2MHptMCAzMmgxNjB2MTZoLTE2MHptMCAwIiBmaWxsPSIjRkZGRkZGIi8+PHBhdGggZD0ibTExMS45OTIxODggODAuNDkyMTg4aC0xNnY0OGg0OHYtMTZoLTMyem0wIDAiIGZpbGw9IiNGRkZGRkYiLz48cGF0aCBkPSJtMzY3Ljk5MjE4OCAxMTIuNDkyMTg4aC0zMnYxNmg0OHYtNDhoLTE2em0wIDAiIGZpbGw9IiNGRkZGRkYiLz48L3N2Zz4K" />
                                    Automobile </a>
                            </li>
                            <li class="nav-item" style="border-bottom: 0px;">
                                <a class="nav-link" href="/index.php?page=automobile" style="padding-left: 40px;">
                                    Voitures </a>
                            </li>

                            <li class="nav-item" style="border-bottom: 0px;">
                                <a class="nav-link" href="/index.php?page=flotte-automobile" style="padding-left: 40px;">
                                    Flotte Automobile </a>
                            </li>
                            <li class="nav-item" style="border-bottom: 0px;">
                                <a class="nav-link" href="/index.php?page=vtc" style="padding-left: 40px;">
                                    VTC </a>
                            </li>
                            <li class="nav-item" style="border-bottom: 0px;">
                                <a class="nav-link" href="/index.php?page=taxi" style="padding-left: 40px;">
                                    Taxi </a>
                            </li>
                            <li class="nav-item" style="border-bottom: 0px;">
                                <a class="nav-link" href="/index.php?page=taxi" style="padding-left: 40px;">
                                    Taxi </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="/index.php?page=moto">
                                    <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBoZWlnaHQ9IjMycHgiIHZpZXdCb3g9Ii0xMzAgMCA1MTIgNTEyIiB3aWR0aD0iMzJweCI+PHBhdGggZD0ibTIyMS44NzEwOTQgMjA1LjY4MzU5NGMtMy43NTc4MTMgMS43MzgyODEtNS4zOTg0MzggNi4xOTUzMTItMy42NjQwNjMgOS45NTcwMzEgNi4xMzY3MTkgMTMuMjg1MTU2IDkuMjQ2MDk0IDI3LjUwNzgxMyA5LjI0NjA5NCA0Mi4yNjk1MzF2MTQ2LjEwOTM3NWMwIDE5Ljg2NzE4OC0xNi4xNjAxNTYgMzYuMDI3MzQ0LTM2LjAyNzM0NCAzNi4wMjczNDRoLTIyLjg0NzY1NnYtMTMuMzgyODEzYzEyLjI4MTI1LTUuNDAyMzQzIDIwLjg4NjcxOS0xNy42Nzk2ODcgMjAuODg2NzE5LTMxLjkzNzV2LTc1LjMzOTg0M2MwLTM1LjY5NTMxMy0yOS4wNDI5NjktNjQuNzM4MjgxLTY0Ljc0MjE4OC02NC43MzgyODEtMzUuNjk1MzEyIDAtNjQuNzM4MjgxIDI5LjA0Mjk2OC02NC43MzgyODEgNjQuNzM4Mjgxdjc1LjMzOTg0M2MwIDE0LjI1NzgxMyA4LjYwNTQ2OSAyNi41MzUxNTcgMjAuODg2NzE5IDMxLjkzNzV2MTMuMzgyODEzaC0xOS4yOTI5NjljLTE5Ljg2MzI4MSAwLTM2LjAyNzM0NC0xNi4xNjAxNTYtMzYuMDI3MzQ0LTM2LjAyNzM0NHYtMTQ2LjExMzI4MWMwLTU1LjY2NDA2MiA0NS4yODkwNjMtMTAwLjk0OTIxOSAxMDAuOTUzMTI1LTEwMC45NDkyMTkgMzAuMDE1NjI1IDAgNTguMjczNDM4IDEzLjIzMDQ2OSA3Ny41MzEyNSAzNi4yOTY4NzUgMi42NTYyNSAzLjE3OTY4OCA3LjM4NjcxOSAzLjYwMTU2MyAxMC41NjY0MDYuOTQ5MjE5IDMuMTc5Njg4LTIuNjU2MjUgMy42MDE1NjMtNy4zODI4MTMuOTQ5MjE5LTEwLjU2MjUtNy41ODU5MzctOS4wODk4NDQtMTYuMzk0NTMxLTE2Ljg0NzY1Ni0yNi4wODIwMzEtMjMuMTIxMDk0IDEuMTY3OTY5LTIuNDI5Njg3IDIuMTg3NS00LjkyNTc4MSAzLjA2NjQwNi03LjQ2ODc1aDE4LjUzOTA2M2MxNS4xNjAxNTYgMCAyNy40OTIxODctMTIuMzMyMDMxIDI3LjQ5MjE4Ny0yNy40OTIxODdzLTEyLjMzMjAzMS0yNy40OTYwOTQtMjcuNDkyMTg3LTI3LjQ5NjA5NGgtMjIuMjc3MzQ0Yy0xLjg1MTU2My0zLjY0MDYyNS0zLjk4ODI4MS03LjEwOTM3NS02LjQxNDA2My0xMC4zNTU0NjkgMy4zMDQ2ODgtMi41MDM5MDYgNi4xODM1OTQtNS4wNzQyMTkgOC43MjY1NjMtNy42MzI4MTIgNS41MzkwNjMgMi42ODM1OTMgMTEuNzUzOTA2IDQuMTk1MzEyIDE4LjMxNjQwNiA0LjE5NTMxMiAyMy4yMzA0NjkgMCA0Mi4xMzI4MTMtMTguOTAyMzQzIDQyLjEzMjgxMy00Mi4xMzY3MTkgMC0yMy4yMzA0NjgtMTguOTAyMzQ0LTQyLjEzMjgxMi00Mi4xMzI4MTMtNDIuMTMyODEyLTIzLjIzNDM3NSAwLTQyLjEzNjcxOSAxOC45MDIzNDQtNDIuMTM2NzE5IDQyLjEzMjgxMiAwIDExLjIwNzAzMiA0LjQxMDE1NyAyMS4zOTg0MzggMTEuNTcwMzEzIDI4Ljk1NzAzMi0xLjk4ODI4MSAxLjg2MzI4MS00LjI0MjE4NyAzLjczMDQ2OC02Ljc3MzQzNyA1LjU1ODU5NC0xMi40MTAxNTctMTAuODAwNzgyLTI4LjYwMTU2My0xNy4zNjMyODItNDYuMzA4NTk0LTE3LjM2MzI4Mi0xNy43MDMxMjUgMC0zMy44OTQ1MzIgNi41NjI1LTQ2LjMwNDY4OCAxNy4zNjMyODItMi41MzEyNS0xLjgyODEyNi00Ljc4NTE1Ni0zLjY5NTMxMy02Ljc3NzM0NC01LjU1ODU5NCA3LjE2NDA2My03LjU1ODU5NCAxMS41NzAzMTMtMTcuNzUgMTEuNTcwMzEzLTI4Ljk1NzAzMiAwLTIzLjIzMDQ2OC0xOC45MDIzNDQtNDIuMTMyODEyLTQyLjEzMjgxMy00Mi4xMzI4MTItMjMuMjMwNDY4IDAtNDIuMTMyODEyIDE4LjkwMjM0NC00Mi4xMzI4MTIgNDIuMTMyODEyIDAgMjMuMjMwNDY5IDE4LjkwMjM0NCA0Mi4xMzI4MTMgNDIuMTMyODEyIDQyLjEzMjgxMyA2LjU1ODU5NCAwIDEyLjc3MzQzOC0xLjUwNzgxMyAxOC4zMTY0MDctNC4xOTUzMTMgMi41MzkwNjIgMi41NjI1IDUuNDE3OTY5IDUuMTMyODEzIDguNzI2NTYyIDcuNjM2NzE5LTIuNDI5Njg3IDMuMjQ2MDk0LTQuNTY2NDA2IDYuNzE0ODQ0LTYuNDE0MDYyIDEwLjM1NTQ2OWgtMjEuNjcxODc1Yy0xNS40OTYwOTQgMC0yOC4xMDE1NjMgMTIuNjA1NDY5LTI4LjEwMTU2MyAyOC4xMDE1NjIgMCAxMi4xNzE4NzYgOC4yMjI2NTcgMjIuODc4OTA3IDIwLjAxMTcxOSAyNS45OTIxODggNS4yNSAxLjM4MjgxMiA4LjI4MTI1LTEuOTY0ODQ0IDkuMTc1NzgxLTUuMzI0MjE5IDEuMDYyNS00LjAwMzkwNi0xLjMyMDMxMi04LjEwOTM3NS01LjMyNDIxOS05LjE3NTc4MS01LjIxODc1LTEuMzg2NzE5LTguODYzMjgxLTYuMTEzMjgxLTguODYzMjgxLTExLjQ5MjE4OCAwLTcuMjI2NTYyIDUuODc1LTEzLjEwMTU2MiAxMy4xMDE1NjMtMTMuMTAxNTYyaDE2LjA5Mzc1Yy0xLjMzMjAzMiA1LjQxMDE1Ni0yLjA1MDc4MiAxMS4wNTQ2ODgtMi4wNTA3ODIgMTYuODcxMDk0IDAgMTAuOTM3NSAyLjUyNzM0NCAyMS42NTYyNSA3LjMzNTkzOCAzMS4zNTU0NjgtMzEuMjY1NjI1IDIwLjc5Mjk2OS01MS45MTc5NjkgNTYuMzM1OTM4LTUxLjkxNzk2OSA5Ni42MTcxODh2MTQ2LjExMzI4MWMwIDI4LjEzNjcxOSAyMi44OTA2MjUgNTEuMDI3MzQ0IDUxLjAyNzM0NCA1MS4wMjczNDRoMTkuMjkyOTY5djEzLjEwMTU2M2MwIDI0LjE3OTY4NyAxOS42NzE4NzUgNDMuODUxNTYyIDQzLjg1MTU2MiA0My44NTE1NjIgMjQuMTgzNTk0IDAgNDMuODUxNTYzLTE5LjY3MTg3NSA0My44NTE1NjMtNDMuODUxNTYydi0xMy4xMDE1NjNoMjIuODUxNTYyYzI4LjEzNjcxOSAwIDUxLjAyNzM0NC0yMi44OTA2MjUgNTEuMDI3MzQ0LTUxLjAyNzM0NHYtMTQ2LjExMzI4MWMwLTE2Ljk0NTMxMi0zLjU3NDIxOS0zMy4yODUxNTYtMTAuNjI4OTA2LTQ4LjU1ODU5NC0xLjczNDM3NS0zLjc1NzgxMi02LjE5MTQwNy01LjQwMjM0NC05Ljk1MzEyNS0zLjY2NDA2MnptLTExNy40NTMxMjUtNjEuNjA5Mzc1Yy0yLjc2OTUzMS00LjE3NTc4MS00LjI4NTE1Ny05LjEwNTQ2OS00LjI4NTE1Ny0xNC4xNDA2MjUgMC0xNC4xNDA2MjUgMTEuNTAzOTA3LTI1LjY0ODQzOCAyNS42NDQ1MzItMjUuNjQ4NDM4czI1LjY0ODQzNyAxMS41MDc4MTMgMjUuNjQ4NDM3IDI1LjY0ODQzOGMwIDQuOTY4NzUtMS40NjA5MzcgOS43NzczNDQtNC4xMzI4MTIgMTMuODk4NDM3LTYuODAwNzgxLTEuMjMwNDY5LTEzLjc1LTEuODc1LTIwLjc4OTA2My0xLjg3NS03LjU1MDc4MSAwLTE0LjkzMzU5NC43MzQzNzUtMjIuMDg1OTM3IDIuMTE3MTg4em0xMDYuNjU2MjUtMzEuMDExNzE5YzYuODkwNjI1IDAgMTIuNDkyMTg3IDUuNjA1NDY5IDEyLjQ5MjE4NyAxMi40OTYwOTQgMCA2Ljg4NjcxOC01LjYwMTU2MiAxMi40OTIxODctMTIuNDkyMTg3IDEyLjQ5MjE4N2gtMTUuMTI1Yy4zMDg1OTMtMi42ODM1OTMuNDc2NTYyLTUuMzk0NTMxLjQ3NjU2Mi04LjExNzE4NyAwLTUuODE2NDA2LS43MjI2NTYtMTEuNDYwOTM4LTIuMDU0Njg3LTE2Ljg3MTA5NHptLTEuNjQ4NDM4LTk4LjA2MjVjMTQuOTYwOTM4IDAgMjcuMTMyODEzIDEyLjE3MTg3NSAyNy4xMzI4MTMgMjcuMTMyODEyIDAgMTQuOTYwOTM4LTEyLjE3MTg3NSAyNy4xMzI4MTMtMjcuMTMyODEzIDI3LjEzMjgxMy0xNC45NjA5MzcgMC0yNy4xMzY3MTktMTIuMTcxODc1LTI3LjEzNjcxOS0yNy4xMzI4MTMgMC0xNC45NjA5MzcgMTIuMTcxODc2LTI3LjEzMjgxMiAyNy4xMzY3MTktMjcuMTMyODEyem0tMTk0LjQyNTc4MSAyNy4xMzI4MTJjMC0xNC45NjA5MzcgMTIuMTcxODc1LTI3LjEzMjgxMiAyNy4xMzI4MTItMjcuMTMyODEyIDE0Ljk2MDkzOCAwIDI3LjEzMjgxMyAxMi4xNzE4NzUgMjcuMTMyODEzIDI3LjEzMjgxMiAwIDE0Ljk2MDkzOC0xMi4xNzE4NzUgMjcuMTMyODEzLTI3LjEzMjgxMyAyNy4xMzI4MTMtMTQuOTYwOTM3IDAtMjcuMTMyODEyLTEyLjE3MTg3NS0yNy4xMzI4MTItMjcuMTMyODEzem01NS4xMzI4MTIgODcuODAwNzgyYzAtMzAuNjgzNTk0IDI0Ljk2MDkzOC01NS42NDg0MzggNTUuNjQ0NTMyLTU1LjY0ODQzOHM1NS42NDg0MzcgMjQuOTY0ODQ0IDU1LjY0ODQzNyA1NS42NDg0MzhjMCA4LjA4MjAzMS0xLjc1IDE2LjAwMzkwNi01LjA4OTg0MyAyMy4yNTc4MTItNC41MjczNDQtMi4xNTYyNS05LjE5NTMxMy00LjAxMTcxOC0xMy45NzY1NjMtNS41NjI1IDIuNjUyMzQ0LTUuNDcyNjU2IDQuMDY2NDA2LTExLjUwNzgxMiA0LjA2NjQwNi0xNy42OTUzMTIgMC0yMi40MTAxNTYtMTguMjM0Mzc1LTQwLjY0NDUzMi00MC42NDg0MzctNDAuNjQ0NTMyLTIyLjQxMDE1NiAwLTQwLjY0NDUzMiAxOC4yMzQzNzYtNDAuNjQ0NTMyIDQwLjY0NDUzMiAwIDYuMzA4NTk0IDEuNDkyMTg4IDEyLjUxMTcxOCA0LjI3NzM0NCAxOC4xMDU0NjgtNC43ODUxNTYgMS42MjEwOTQtOS40MjU3ODEgMy41NTA3ODItMTMuOTEwMTU2IDUuNzU3ODEzLTMuNTIzNDM4LTcuNDE3OTY5LTUuMzY3MTg4LTE1LjU1ODU5NC01LjM2NzE4OC0yMy44NjMyODF6bTQuODUxNTYzIDI2NC43OTI5Njh2LTc1LjMzOTg0M2MwLTI3LjQyNTc4MSAyMi4zMTY0MDYtNDkuNzM4MjgxIDQ5Ljc0MjE4Ny00OS43MzgyODEgMjcuNDI1NzgyIDAgNDkuNzM4MjgyIDIyLjMxMjUgNDkuNzM4MjgyIDQ5LjczODI4MXY3NS4zMzk4NDNjMCAxMC45NjA5MzgtOC45MTQwNjMgMTkuODc1LTE5Ljg3NSAxOS44NzVoLTU5LjczMDQ2OWMtMTAuOTU3MDMxIDAtMTkuODc1LTguOTE3OTY4LTE5Ljg3NS0xOS44NzV6bTQ5LjczODI4MSAxMDIuMjczNDM4Yy0xNS45MDYyNSAwLTI4Ljg1MTU2Mi0xMi45NDE0MDYtMjguODUxNTYyLTI4Ljg1MTU2MnYtMzguNTQ2ODc2aDU3LjcwMzEyNXYzOC41NDY4NzZjLjAwMzkwNiAxNS45MTAxNTYtMTIuOTQxNDA3IDI4Ljg1MTU2Mi0yOC44NTE1NjMgMjguODUxNTYyem0wIDAiIGZpbGw9IiNGRkZGRkYiLz48cGF0aCBkPSJtMTAzLjE3MTg3NSAxODcuNTc4MTI1Yy0xNC45NjA5MzcgMC0yNy4xMzI4MTMgMTIuMTcxODc1LTI3LjEzMjgxMyAyNy4xMzI4MTMgMCAxNC45NjA5MzcgMTIuMTcxODc2IDI3LjEzMjgxMiAyNy4xMzI4MTMgMjcuMTMyODEyaDQ1LjIxMDkzN2MxNC45NjA5MzggMCAyNy4xMzI4MTMtMTIuMTcxODc1IDI3LjEzMjgxMy0yNy4xMzI4MTIgMC0xNC45NjA5MzgtMTIuMTcxODc1LTI3LjEzMjgxMy0yNy4xMzI4MTMtMjcuMTMyODEzem01Ny4zNDM3NSAyNy4xMzI4MTNjMCA2LjY5MTQwNi01LjQ0MTQwNiAxMi4xMzI4MTItMTIuMTMyODEzIDEyLjEzMjgxMmgtNDUuMjA3MDMxYy02LjY5MTQwNiAwLTEyLjEzMjgxMi01LjQ0MTQwNi0xMi4xMzI4MTItMTIuMTMyODEyIDAtNi42OTE0MDcgNS40NDE0MDYtMTIuMTMyODEzIDEyLjEzMjgxMi0xMi4xMzI4MTNoNDUuMjA3MDMxYzYuNjg3NSAwIDEyLjEzMjgxMyA1LjQ0MTQwNiAxMi4xMzI4MTMgMTIuMTMyODEzem0wIDAiIGZpbGw9IiNGRkZGRkYiLz48L3N2Zz4K" />
                                    Moto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="/index.php?page=habitation">
                                    <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMi4wMDIgNTEyLjAwMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyLjAwMiA1MTIuMDAyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTUwMi4wMDEsNDkyLjAwMmgtNDR2LTc5YzAtNS41MjMtNC40NzgtMTAtMTAtMTBjLTUuNTIyLDAtMTAsNC40NzctMTAsMTB2NzloLTEyMHYtMTkwYzAtNS41MjMtNC40NzgtMTAtMTAtMTBoLTEwNCAgICBjLTUuNTIyLDAtMTAsNC40NzctMTAsMTB2MTkwaC0xMjBWMjY2LjAwMWgzLjg0OGMyLjY1MiwwLDUuMTk1LTEuMDU0LDcuMDcxLTIuOTI5TDI1Ni4wMDEsOTEuOTkxbDE3MS4wODEsMTcxLjA4MSAgICBjMS44NzYsMS44NzUsNC40MTksMi45MjksNy4wNzEsMi45MjloMy44NDh2NzVjMCw1LjUyMyw0LjQ3OCwxMCwxMCwxMGM1LjUyMiwwLDEwLTQuNDc3LDEwLTEwdi03NWg0NCAgICBjNC4wNDUsMCw3LjY5MS0yLjQzNyw5LjIzOS02LjE3M2MxLjU0OC0zLjczNiwwLjY5MS04LjAzOC0yLjE2OC0xMC44OThsLTI0Ni0yNDZjLTMuOTA2LTMuOTA1LTEwLjIzNi0zLjkwNS0xNC4xNDMsMGwtOTQsOTQgICAgYy0zLjkwNSwzLjkwNS0zLjkwNSwxMC4yMzcsMCwxNC4xNDJjMy45MDYsMy45MDYsMTAuMjM4LDMuOTA2LDE0LjE0MywwbDg2LjkyOS04Ni45MjlsMjIxLjg1NywyMjEuODU4aC0zOS41NjNMMjYzLjA3Miw3MC43NzggICAgYy0zLjkwNi0zLjkwNS0xMC4yMzYtMy45MDUtMTQuMTQzLDBMNzMuNzA2LDI0Ni4wMDFIMzQuMTQzbDc4LjkyOS03OC45MjhjMy45MDUtMy45MDUsMy45MDUtMTAuMjM3LDAtMTQuMTQzICAgIGMtMy45MDUtMy45MDQtMTAuMjM3LTMuOTA1LTE0LjE0MywwbC05Niw5NmMtMi44NTksMi44Ni0zLjcxNiw3LjE2MS0yLjE2OCwxMC44OThjMS41NDgsMy43MzcsNS4xOTUsNi4xNzMsOS4yNCw2LjE3M2g0NHYyMjZoLTQ0ICAgIGMtNS41MjIsMC0xMCw0LjQ3Ny0xMCwxMHM0LjQ3OCwxMCwxMCwxMGg1NGgxNDBoMTA0aDE0MGg1NGM1LjUyMiwwLDEwLTQuNDc3LDEwLTEwUzUwNy41MjMsNDkyLjAwMiw1MDIuMDAxLDQ5Mi4wMDJ6ICAgICBNMjk4LjAwMSw0OTIuMDAyaC04NHYtMTgwaDg0VjQ5Mi4wMDJ6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDA2LjAwMSwyOTIuMDAyaC01NmMtNS41MjIsMC0xMCw0LjQ3Ny0xMCwxMHYxMDBjMCw1LjUyMyw0LjQ3OCwxMCwxMCwxMGg1NmM1LjUyMiwwLDEwLTQuNDc3LDEwLTEwdi0xMDAgICAgQzQxNi4wMDEsMjk2LjQ3OSw0MTEuNTIzLDI5Mi4wMDIsNDA2LjAwMSwyOTIuMDAyeiBNMzk2LjAwMSwzOTIuMDAyaC0zNnYtODBoMzZWMzkyLjAwMnoiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0xNjIuMDAxLDI5Mi4wMDJoLTU2Yy01LjUyMiwwLTEwLDQuNDc3LTEwLDEwdjEwMGMwLDUuNTIzLDQuNDc4LDEwLDEwLDEwaDU2YzUuNTIyLDAsMTAtNC40NzcsMTAtMTB2LTEwMCAgICBDMTcyLjAwMSwyOTYuNDc5LDE2Ny41MjMsMjkyLjAwMiwxNjIuMDAxLDI5Mi4wMDJ6IE0xNTIuMDAxLDM5Mi4wMDJoLTM2di04MGgzNlYzOTIuMDAyeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTI1Ni4wMDEsMTY0LjMyMmMtMjUuMzY0LDAtNDYsMjAuNjM2LTQ2LDQ2czIwLjYzNiw0Niw0Niw0NmMyNS4zNjQsMCw0Ni0yMC42MzYsNDYtNDZTMjgxLjM2NSwxNjQuMzIyLDI1Ni4wMDEsMTY0LjMyMnogICAgIE0yNTYuMDAxLDIzNi4zMjJjLTE0LjMzNywwLTI2LTExLjY2NC0yNi0yNnMxMS42NjMtMjYsMjYtMjZjMTQuMzM3LDAsMjYsMTEuNjY0LDI2LDI2UzI3MC4zMzgsMjM2LjMyMiwyNTYuMDAxLDIzNi4zMjJ6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjQ0LjA3LDM5NC45MzJjLTEuODU5LTEuODYtNC40NC0yLjkzLTcuMDY5LTIuOTNjLTIuNjMsMC01LjIxLDEuMDctNy4wNywyLjkzYy0xLjg2LDEuODYtMi45Myw0LjQ0LTIuOTMsNy4wNyAgICBzMS4wNjksNS4yMSwyLjkzLDcuMDdjMS44NjEsMS44Niw0LjQ0LDIuOTMsNy4wNywyLjkzczUuMjEtMS4wNyw3LjA2OS0yLjkzYzEuODYtMS44NiwyLjkzMS00LjQ0LDIuOTMxLTcuMDcgICAgUzI0NS45MzEsMzk2Ljc5MiwyNDQuMDcsMzk0LjkzMnoiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0xNDAuMDcsMTI1LjkzMmMtMS44NTktMS44Ni00LjQzOS0yLjkzLTcuMDY5LTIuOTNzLTUuMjEsMS4wNy03LjA3LDIuOTNjLTEuODYsMS44Ni0yLjkzLDQuNDQtMi45Myw3LjA3ICAgIHMxLjA2OSw1LjIxLDIuOTMsNy4wN2MxLjg2MSwxLjg2LDQuNDQsMi45Myw3LjA3LDIuOTNzNS4yMS0xLjA3LDcuMDY5LTIuOTNjMS44Ni0xLjg2LDIuOTMxLTQuNDQsMi45MzEtNy4wNyAgICBTMTQxLjkzMSwxMjcuNzkyLDE0MC4wNywxMjUuOTMyeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ1NS4wNywzNjcuMjYxYy0xLjg1OS0xLjg1OS00LjQ0LTIuOTMtNy4wNjktMi45M2MtMi42MywwLTUuMjEsMS4wNy03LjA3LDIuOTNjLTEuODYsMS44Ny0yLjkzLDQuNDQtMi45Myw3LjA3ICAgIHMxLjA2OSw1LjIxLDIuOTMsNy4wOGMxLjg2LDEuODYsNC40NCwyLjkyLDcuMDcsMi45MnM1LjIxLTEuMDYsNy4wNjktMi45MmMxLjg2LTEuODcsMi45MzEtNC40NCwyLjkzMS03LjA4ICAgIEM0NTguMDAxLDM3MS43MDEsNDU2LjkzMSwzNjkuMTIxLDQ1NS4wNywzNjcuMjYxeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                                    Habitation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="/index.php?page=chients-chats">
                                    <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+CjxnPgoJPGc+CgkJPGc+CgkJCTxwYXRoIGQ9Ik0xMTUuNjUyLDMwNi4zMDRjNC4xODEsMi4wNzQsOS4yODQsMC40MDEsMTEuNDAxLTMuNzg5YzIuMTI1LTQuMTgxLDAuNDQ0LTkuMzEtMy43MjktMTEuNDYgICAgIGMtMS4yMzctMC42NC0zMC40NTUtMTYuMTcxLTM4LjExLTYyLjA2M2MtMC42MjMtMy43NzItMy42ODYtNi42NjQtNy41MDEtNy4wNzRjLTMuOS0wLjQzNS03LjQxNSwxLjc2Ni04Ljg0MSw1LjMwOCAgICAgYy0xOC41MTcsNDYuMzEsMTYuNDAxLDk5LjUzMywxNy44OTQsMTAxLjc3N2MxLjYzOCwyLjQ2Niw0LjM1MiwzLjc5Nyw3LjEsMy43OTdjMS42MjEsMCwzLjI2OC0wLjQ2OSw0LjcyNy0xLjQzNCAgICAgYzMuOTE3LTIuNjExLDQuOTgzLTcuOTAyLDIuMzgxLTExLjgyN2MtMC4yMTMtMC4zMjQtMTQuNjYtMjIuNDE3LTE5LjExNS00OC40MzVDOTUuODk4LDI5Ni4xMzIsMTE0LjU1MSwzMDUuNzQ5LDExNS42NTIsMzA2LjMwNCAgICAgeiIgZmlsbD0iI0ZGRkZGRiIvPgoJCQk8cGF0aCBkPSJNMTU1LjI3MywzMjQuMDk2YzQuNjE3LTAuOTIyLDcuNjItNS40MTksNi42OTktMTAuMDM1Yy0wLjkzLTQuNjE3LTUuMzc2LTcuNjItMTAuMDQ0LTYuNjkgICAgIGMtMTcuMTI2LDMuNDIyLTQ5LjUyOCwyMi4wNjctNDkuNTI4LDY4LjA5NmMwLDMzLjM5OSw2Ljk5Nyw1Ni41NjgsMTIuMzk5LDY5LjQ1M2MtMTguNjgsMy42MjctMjkuNDY2LDE1LjM3Ny0yOS40NjYsMzIuOTQ3ICAgICBDODUuMzMzLDQ5Ny42NDcsMTAzLjI3OSw1MTIsMTI4LDUxMmg4LjUzM2MxNC4xNDgsMCwyMi44NTItMTAuNjA3LDIzLjc5MS0xMS44MWMyLjkwMS0zLjcxMiwyLjI0NC05LjA3OS0xLjQ3Ni0xMS45ODEgICAgIGMtMy43MTItMi45MS05LjA3OS0yLjIzNi0xMS45NzIsMS40NjhjLTAuMDQzLDAuMDYtNC4zNzgsNS4yNTctMTAuMzQyLDUuMjU3SDEyOGMtMTIuNzIzLDAtMjUuNi01Ljg2Mi0yNS42LTE3LjA2NyAgICAgYzAtNC4yMjQsMC0xNy4wNjcsMjUuNi0xNy4wNjdjMy4xMzIsMCw1Ljk5OS0xLjczMiw3LjQ5Mi00LjQ4OWMxLjQ5My0yLjc1NiwxLjM0LTYuMTE4LTAuMzY3LTguNzM4ICAgICBjLTAuMTYyLTAuMjQ3LTE1LjY1OS0yNC41NTktMTUuNjU5LTcyLjEwN0MxMTkuNDY3LDMzMi4xOTQsMTUzLjg1NiwzMjQuNDAzLDE1NS4yNzMsMzI0LjA5NnoiIGZpbGw9IiNGRkZGRkYiLz4KCQkJPHBhdGggZD0iTTM5Ny4yMDEsNDQ0LjkxOWM1LjQwMi0xMi44ODUsMTIuMzk5LTM2LjA1MywxMi4zOTktNjkuNDUzYzAtNDYuMDI5LTMyLjQwMS02NC42NzQtNDkuNTI3LTY4LjA5NiAgICAgYy00LjYyNS0wLjkxMy05LjExNCwyLjA2NS0xMC4wNDQsNi42OWMtMC45MjIsNC42MTcsMi4wODIsOS4xMTQsNi42OTksMTAuMDM1YzEuNDY4LDAuMjk5LDM1LjgwNiw3LjY3MiwzNS44MDYsNTEuMzcxICAgICBjMCw0Ny41NDgtMTUuNDk3LDcxLjg1OS0xNS42MzMsNzIuMDY0Yy0xLjc0MSwyLjYyLTEuOTExLDUuOTktMC40MjcsOC43NjRjMS40ODUsMi43NzMsNC4zNzgsNC41MDYsNy41MjYsNC41MDYgICAgIGMyNS42LDAsMjUuNiwxMi44NDMsMjUuNiwxNy4wNjdjMCwxMS4yMDQtMTIuODc3LDE3LjA2Ny0yNS42LDE3LjA2N2gtOC41MzNjLTUuODg4LDAtMTAuMjIzLTUuMTExLTEwLjM5NC01LjMxNiAgICAgYy0yLjkxLTMuNjQ0LTguMjI2LTQuMjkyLTExLjkyMS0xLjQwOGMtMy43MjEsMi45MDEtNC4zNzgsOC4yNjktMS40NzYsMTEuOTgxYzAuOTM5LDEuMjAzLDkuNjQzLDExLjgxLDIzLjc5MSwxMS44MUgzODQgICAgIGMyNC43MywwLDQyLjY2Ny0xNC4zNTMsNDIuNjY3LTM0LjEzM0M0MjYuNjY3LDQ2MC4yOTcsNDE1Ljg4MSw0NDguNTQ2LDM5Ny4yMDEsNDQ0LjkxOXoiIGZpbGw9IiNGRkZGRkYiLz4KCQkJPHBhdGggZD0iTTMwOC42MzQsNDQ0LjM4MmwxNS41MTQtOTMuMTA3YzAuNzc2LTQuNjUxLTIuMzY0LTkuMDQ1LTcuMDE0LTkuODIyYy00LjY2OC0wLjc2OC05LjA0NSwyLjM2NC05LjgxMyw3LjAwNiAgICAgbC0xNS44ODEsOTUuMjc1aC0xLjMwNmMtNC43MTksMC04LjUzMywzLjgyMy04LjUzMyw4LjUzM2MwLDQuNzEsMy44MTQsOC41MzMsOC41MzMsOC41MzNoOC41MzNjMjUuNiwwLDI1LjYsMTIuODQzLDI1LjYsMTcuMDY3ICAgICBjMCwxMS4yMDQtMTIuODc3LDE3LjA2Ny0yNS42LDE3LjA2N2gtOC41MzNjLTE0LjExNCwwLTI1LjYtMTEuNDg2LTI1LjYtMjUuNlYzNDkuODY3YzAtNC43MS0zLjgxNC04LjUzMy04LjUzMy04LjUzMyAgICAgYy00LjcxOSwwLTguNTMzLDMuODIzLTguNTMzLDguNTMzdjExOS40NjdjMCwxNC4xMTQtMTEuNDg2LDI1LjYtMjUuNiwyNS42aC04LjUzM2MtMTIuNzIzLDAtMjUuNi01Ljg2Mi0yNS42LTE3LjA2NyAgICAgYzAtNC4yMjQsMC0xNy4wNjcsMjUuNi0xNy4wNjdoOC41MzNjNC43MTksMCw4LjUzMy0zLjgyMyw4LjUzMy04LjUzM2MwLTQuNzEtMy44MTQtOC41MzMtOC41MzMtOC41MzNoLTEuMzA2bC0xNS44OC05NS4yNzUgICAgIGMtMC43NTktNC42NDItNS4xNTQtNy43NzQtOS44MTMtNy4wMDZjLTQuNjUxLDAuNzc3LTcuNzkxLDUuMTcxLTcuMDE0LDkuODIybDE1LjUxNCw5My4xMDcgICAgIGMtMjAuNjY4LDIuODU5LTMyLjcsMTQuOTI1LTMyLjcsMzMuNDg1YzAsMTkuNzgsMTcuOTQ2LDM0LjEzMyw0Mi42NjcsMzQuMTMzaDguNTMzYzEzLjk0MywwLDI2LjM0Mi02LjcyNCwzNC4xMzMtMTcuMDkyICAgICBDMjYzLjc5MSw1MDUuMjc2LDI3Ni4xOSw1MTIsMjkwLjEzMyw1MTJoOC41MzNjMjQuNzMsMCw0Mi42NjctMTQuMzUzLDQyLjY2Ny0zNC4xMzMgICAgIEMzNDEuMzMzLDQ1OS4zMDcsMzI5LjMwMSw0NDcuMjQxLDMwOC42MzQsNDQ0LjM4MnoiIGZpbGw9IiNGRkZGRkYiLz4KCQkJPHBhdGggZD0iTTQ2OC40MjksNzIuOTg2QzQ0OS42NzMsMzUuNDY1LDQwNC40ODksMCwzNzUuNDY3LDBjLTE2LjQ3OCwwLTQ0LjgzNCwyNS41NDktNTkuMDc2LDM5LjQ3NSAgICAgQzI5OS45MywyNS4zNywyNzkuODkzLDE3LjA2NywyNTYsMTcuMDY3cy00My45Myw4LjMwMy02MC4zOSwyMi40MDlDMTgxLjM2NywyNS41NDksMTUzLjAxMSwwLDEzNi41MzMsMCAgICAgYy0yOS4wMjIsMC03NC4yMDYsMzUuNDY1LTkyLjk2Miw3Mi45ODZjLTUuNjQ5LDExLjI4MS05LjQzOCwyNi41My05LjQzOCwzNy45NDhjMCwyMy41MjYsMTkuMTQsNDIuNjY3LDQyLjY2Nyw0Mi42NjcgICAgIGMyMS4yMDUsMCwzMC42OTQtMTMuOTQzLDM4LjMwNi0yNS4xNDhjMC45My0xLjM1NywxLjg1Mi0yLjcyMiwyLjkyNy00LjI1bDM0LjEzMy01MS4yYzIuNjItMy45MjUsMS41NjItOS4yMjUtMi4zNjQtMTEuODM2ICAgICBjLTMuOTQyLTIuNjI4LTkuMjI1LTEuNTYyLTExLjgzNiwyLjM2NGwtMzQuMDA1LDUxLjAxMmMtMS4wMDcsMS40MjUtMS45ODgsMi44NjctMi45Nyw0LjMwOSAgICAgYy03LjY3MiwxMS4yOTgtMTIuNTg3LDE3LjY4MS0yNC4xOTIsMTcuNjgxYy0xNC4xMTQsMC0yNS42LTExLjQ4Ni0yNS42LTI1LjZjMC04Ljg2NiwzLjE0LTIxLjMzMyw3LjYzNy0zMC4zMTkgICAgIGMxNi44MTEtMzMuNjMsNTcuNDU1LTYzLjU0OCw3Ny42OTYtNjMuNTQ4YzcuMjc5LDAsMjguOTQ1LDE2Ljk0Nyw0Ny4wMSwzNC41MDljLTMyLjA2LDM3LjI3NC00Ny4wMSw5OS42NzgtNDcuMDEsMTYxLjc1OCAgICAgYzAsNzguNzg4LDM0LjYxMSwxMTAuOTMzLDExOS40NjcsMTEwLjkzM3MxMTkuNDY3LTMyLjE0NSwxMTkuNDY3LTExMC45MzNjMC02Mi4wODktMTQuOTUtMTI0LjQ4NC00Ny4wMS0xNjEuNzU4ICAgICBjMTguMDY1LTE3LjU2MiwzOS43MjMtMzQuNTA5LDQ3LjAxLTM0LjUwOWMyMC4yNDEsMCw2MC44ODUsMjkuOTE4LDc3LjcwNSw2My41NDhjNC40ODksOC45ODYsNy42MjksMjEuNDUzLDcuNjI5LDMwLjMxOSAgICAgYzAsMTQuMTE0LTExLjQ4NiwyNS42LTI1LjYsMjUuNmMtMTIuMDIzLDAtMTYuNzY4LTYuMzE1LTI0Ljc3Mi0xOC40MDZsLTM2LjM5NS01NC41OTZjLTIuNjExLTMuOTI1LTcuOTEtNC45OTItMTEuODM2LTIuMzY0ICAgICBjLTMuOTI1LDIuNjExLTQuOTgzLDcuOTEtMi4zNjQsMTEuODM2bDM2LjM2MSw1NC41NDVjOC4wOSwxMi4yMTEsMTcuMjQ2LDI2LjA1MiwzOS4wMDYsMjYuMDUyICAgICBjMjMuNTI2LDAsNDIuNjY3LTE5LjE0LDQyLjY2Ny00Mi42NjdDNDc3Ljg2Nyw5OS41MTYsNDc0LjA3OCw4NC4yNjcsNDY4LjQyOSw3Mi45ODZ6IE0zNTguNCwyMTMuMzMzICAgICBjMCw2OS4zMDgtMjYuODAzLDkzLjg2Ny0xMDIuNCw5My44NjdzLTEwMi40LTI0LjU1OS0xMDIuNC05My44NjdjMC04OS4xOTksMzEuNjY3LTE3OS4yLDEwMi40LTE3OS4yICAgICBTMzU4LjQsMTI0LjEzNCwzNTguNCwyMTMuMzMzeiIgZmlsbD0iI0ZGRkZGRiIvPgoJCQk8cGF0aCBkPSJNMjk5LjYxNCwyNTIuMDkyYy0xLjQ1OSwyLjg0Mi03LjE1OSwzLjg3NC05LjQ4MSwzLjkwOGMtOS45OTIsMC0yMC4zMTgtOC41MDgtMjQuMDQ3LTE4LjI4NyAgICAgYzE0LjAyOS0zLjE3NCwyNC4wNDctMTIuNjg5LDI0LjA0Ny0yNC4zOGMwLTE0LjM1My0xNC45OTMtMjUuNi0zNC4xMzMtMjUuNnMtMzQuMTMzLDExLjI0Ny0zNC4xMzMsMjUuNiAgICAgYzAsMTEuNjkxLDEwLjAxOCwyMS4yMDUsMjQuMDQ3LDI0LjM4QzI0Mi4xOTMsMjQ3LjQ5MiwyMzEuODY4LDI1NiwyMjEuOTI2LDI1NmMtMi40NDktMC4wMzQtOC4wMy0xLjA2Ny05LjU5MS00LjAwMiAgICAgYy0yLjIxLTQuMTY0LTcuMzczLTUuNzQzLTExLjUzNy0zLjUzM3MtNS43NTEsNy4zNzMtMy41MzMsMTEuNTM3YzYuNzQxLDEyLjY5OCwyMi43OTMsMTMuMDY1LDI0LjYwMiwxMy4wNjUgICAgIGMxMy4yNTIsMCwyNi4wNjktNy41NjksMzQuMTMzLTE4LjM5OGM4LjA2NCwxMC44MjksMjAuODgxLDE4LjM5OCwzNC4xMzMsMTguMzk4YzEuODI2LDAsMTguMDU3LTAuMzc1LDI0LjY1My0xMy4xNTggICAgIGMyLjE1OS00LjE5LDAuNTEyLTkuMzM1LTMuNjc4LTExLjQ5NFMzMDEuNzgxLDI0Ny44OTMsMjk5LjYxNCwyNTIuMDkyeiBNMjU2LDIyMS44NjdjLTEwLjI1NywwLTE3LjA2Ny01LjEzNy0xNy4wNjctOC41MzMgICAgIGMwLTMuMzk2LDYuODEtOC41MzMsMTcuMDY3LTguNTMzYzEwLjQxOSwwLDE3LjA2Nyw1LjA1MiwxNy4wNjcsOC41MzNDMjczLjA2NywyMTYuODE1LDI2Ni40MTksMjIxLjg2NywyNTYsMjIxLjg2N3oiIGZpbGw9IiNGRkZGRkYiLz4KCQkJPHBhdGggZD0iTTI5NC40LDE1My42YzcuMDU3LDAsMTIuOC01Ljc0MywxMi44LTEyLjhzLTUuNzQzLTEyLjgtMTIuOC0xMi44Yy03LjA1NywwLTEyLjgsNS43NDMtMTIuOCwxMi44ICAgICBTMjg3LjM0MywxNTMuNiwyOTQuNCwxNTMuNnoiIGZpbGw9IiNGRkZGRkYiLz4KCQkJPHBhdGggZD0iTTIxNy42LDE1My42YzcuMDU3LDAsMTIuOC01Ljc0MywxMi44LTEyLjhzLTUuNzQzLTEyLjgtMTIuOC0xMi44cy0xMi44LDUuNzQzLTEyLjgsMTIuOFMyMTAuNTQzLDE1My42LDIxNy42LDE1My42eiIgZmlsbD0iI0ZGRkZGRiIvPgoJCTwvZz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
                                    Chiens & Chats</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <nav class="navbar navbar container navigation3 d-none d-lg-none d-md-none d-lg-block">
                    <ul class="nav navmaron">
                        <li class="nav-item">
                            <a class="nav-link" href="/index.php?page=sante">
                                <span class="picto-nav"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDI0LjUsODEuODM2Yy01LjUyLDAtMTAsNC40OC0xMCwxMGMwLDUuNTIsNC40OCwxMCwxMCwxMGM1LjUyLDAsMTAtNC40OCwxMC0xMEM0MzQuNSw4Ni4zMTUsNDMwLjAyLDgxLjgzNiw0MjQuNSw4MS44MzYgICAgeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ3Ni40NTgsNzEuNzYxYy0yMy44NjUtMjYuODIzLTU2Ljk2Ny00MS41OTUtOTMuMjA4LTQxLjU5NWMtMzkuNjI5LDAtNzUuNzkxLDE1LjM2MS0xMDQuNTc0LDQ0LjQyMyAgICBDMjY4LjY2Nyw4NC42OTQsMjYxLjE4Niw5NC43OSwyNTYsMTAyLjgwMmMtNS4xODYtOC4wMTEtMTIuNjY3LTE4LjEwNi0yMi42NzYtMjguMjEzQzIwNC41NDEsNDUuNTI2LDE2OC4zOCwzMC4xNjUsMTI4Ljc1LDMwLjE2NSAgICBDNTIuODk0LDMwLjE2NSwwLDkzLjYyNiwwLDE2OS4wNzZjMCwxMDEuOTE4LDEwOC4wMDQsMTg3LjczMywyNDkuNDUxLDMxMC4zMTZjMS44NzksMS42MjksNC4yMTQsMi40NDMsNi41NDksMi40NDMgICAgYzIuMzM1LDAsNC42Ny0wLjgxNCw2LjU0OS0yLjQ0M0M0MDQuMzMzLDM1Ni41MTYsNTEyLDI3MC44NTIsNTEyLDE2OS4wNzZDNTEyLDEzMi4wODEsNDk5LjM3OCw5Ny41MjEsNDc2LjQ1OCw3MS43NjF6ICAgICBNMjU2LDQ1OC42MDdDMTIyLjQzMSwzNDMuMDIzLDIwLDI2MC4wMDcsMjAsMTY5LjA3NmMwLTY3Ljc5LDQ2Ljc1Mi0xMTguOTEsMTA4Ljc1LTExOC45MWMzNC40MjQsMCw2NC42NjEsMTIuNzg2LDg5Ljg3MSwzOC4wMDEgICAgYzE5LjIwNiwxOS4yMSwyOC4xNjcsMzguODE1LDI4LjI1NSwzOS4wMTFjMS42MDksMy41ODcsNS4xNzYsNS44OTEsOS4xMDksNS44OTljMC4wMDYsMCwwLjAxMywwLDAuMDE5LDAgICAgYzMuOTMyLDAsNy41MDQtMi4zMTMsOS4xMjEtNS44OTljMC4wODgtMC4xOTYsOS4wNDktMTkuOCwyOC4yNTUtMzkuMDExYzI1LjIwOS0yNS4yMTYsNTUuNDQ2LTM4LjAwMSw4OS44NzEtMzguMDAxICAgIGM2MS45OTgsMCwxMDguNzUsNTEuMTIsMTA4Ljc1LDExOC45MUM0OTIsMjYyLjA2LDM4Mi44MSwzNDguODcyLDI1Niw0NTguNjA3eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ1OS40NzYsMTE3LjQ2MWMtMi41NjUtNC44OTItOC42MS02Ljc3Ni0xMy41LTQuMjEyYy00Ljg5MSwyLjU2NS02Ljc3Nyw4LjYwOS00LjIxMiwxMy41ICAgIEM0NDguMzY1LDEzOS4zMzYsNDUyLDE1NC4zNjgsNDUyLDE2OS4wNzZjMCwyOC44OTYtMTMuNzUzLDU5LjU2NS00My4yODIsOTYuNTE3Yy0zLjQ0OCw0LjMxNC0yLjc0NSwxMC42MDcsMS41NjksMTQuMDU1ICAgIGM0LjM0MiwzLjQ3LDEwLjYyOSwyLjcxOCwxNC4wNTUtMS41NjlDNDU2Ljg1NiwyMzcuMzkxLDQ3MiwyMDIuNzU0LDQ3MiwxNjkuMDc2QzQ3MiwxNTAuOTMyLDQ2Ny42NjksMTMzLjA4NCw0NTkuNDc2LDExNy40NjF6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMzUyLDIyMS44MzZoLTU2di01NmMwLTUuNTIzLTQuNDc3LTEwLTEwLTEwaC02MGMtNS41MjMsMC0xMCw0LjQ3Ny0xMCwxMHY1NmgtNTZjLTUuNTIzLDAtMTAsNC40NzctMTAsMTB2NjAgICAgYzAsNS41MjMsNC40NzcsMTAsMTAsMTBoNTZ2NTZjMCw1LjUyMyw0LjQ3NywxMCwxMCwxMGg2MGM1LjUyMywwLDEwLTQuNDc3LDEwLTEwdi01Nmg1NmM1LjUyMywwLDEwLTQuNDc3LDEwLTEwdi02MCAgICBDMzYyLDIyNi4zMTMsMzU3LjUyMywyMjEuODM2LDM1MiwyMjEuODM2eiBNMzQyLDI4MS44MzVoLTU2Yy01LjUyMywwLTEwLDQuNDc3LTEwLDEwdjU2aC00MHYtNTZjMC01LjUyMy00LjQ3Ny0xMC0xMC0xMGgtNTZ2LTQwICAgIGg1NmM1LjUyMywwLDEwLTQuNDc3LDEwLTEwdi01Nmg0MHY1NmMwLDUuNTIzLDQuNDc3LDEwLDEwLDEwaDU2VjI4MS44MzV6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" /></span>
                                SANTE
                            </a>
                        <li class="nav-item">

                            <a class="nav-link coucou" href="/index.php?page=mutuelle">
                                <span class="picto-nav"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMTI1LjY5NiwxMjUuOTk0Yy01LjUyLDAtMTAsNC40OC0xMCwxMHM0LjQ4LDEwLDEwLDEwYzUuNTIsMCwxMC00LjQ4LDEwLTEwUzEzMS4yMTYsMTI1Ljk5NCwxMjUuNjk2LDEyNS45OTR6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjE1LjY5MSwzMTIuOTg0aC0yOS45OTh2LTI5Ljk5OGMwLTUuNTIyLTQuNDc4LTEwLTEwLTEwcy05Ljk5OSw0LjQ3OC05Ljk5OSwxMHYyOS45OThoLTI5Ljk5OCAgICBjLTUuNTIyLDAtMTAsNC40NzgtMTAsOS45OTlzNC40NzgsMTAsMTAsMTBoMjkuOTk4djI5Ljk5OGMwLDUuNTIyLDQuNDc4LDEwLDkuOTk5LDEwczEwLTQuNDc4LDEwLTEwdi0yOS45OThoMjkuOTk4ICAgIGM1LjUyMiwwLDEwLTQuNDc4LDEwLTEwUzIyMS4yMTQsMzEyLjk4NCwyMTUuNjkxLDMxMi45ODR6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDg1LjU3OCwzMjEuOTg0Yy0yMi4xMDUtMzguMjg2LTcwLjk4MS01MS4zODktMTA5LjI3NC0yOS4yNzlsLTQwLjYxOCwyMy40NXYtODYuODM2YzAtMTAuNzM1LTMuNTUtMjEuMzg4LTkuOTk5LTI5Ljk5OCAgICBsLTQ5Ljk5Ny02Ni42NjF2LTI4LjM4NmMxMS42MzgtNC4xMjgsMTkuOTk5LTE1LjI0MiwxOS45OTktMjguMjc5VjI5Ljk5OEMyOTUuNjg3LDEzLjQ1NywyODIuMjMsMCwyNjUuNjg5LDBIODUuNjk4ICAgIEM2OS4xNTcsMCw1NS42OTksMTMuNDU3LDU1LjY5OSwyOS45OTh2NDUuOTk4YzAsMTMuMDM1LDguMzYxLDI0LjE1MSwxOS45OTksMjguMjc5djI4LjM4NmwtNTAuMDAxLDY2LjY2NSAgICBjLTYuNDQ2LDguNjA2LTkuOTk2LDE5LjI1OC05Ljk5NiwyOS45OTN2MTkzLjY2YzAsMjcuNTY5LDIyLjQyOSw0OS45OTcsNDkuOTk3LDQ5Ljk5N2gxNjAuNzAyICAgIGMyMi40MjEsMzcuNTgzLDcwLjc2Nyw1MC4xNjEsMTA4LjY2NCwyOC4yNzlMNDU2LjMsNDMxLjI1OEM0OTQuMjU1LDQwOS4zNCw1MDcuNzk0LDM2MC40NzksNDg1LjU3OCwzMjEuOTg0eiBNNzUuNjk4LDI5Ljk5OCAgICBjMC01LjUxNCw0LjQ4Ni0xMCw5Ljk5OS0xMGgxNzkuOTkxYzUuNTE0LDAsMTAsNC40ODYsMTAsMTB2NDUuOTk4YzAsNS41MTQtNC40ODYsOS45OTktMTAsOS45OTlIODUuNjk4ICAgIGMtNS41MTQsMC05Ljk5OS00LjQ4Ni05Ljk5OS05Ljk5OVYyOS45OTh6IE00MS43MDEsMjExLjMxOWw1MS45OTYtNjkuMzI2YzEuMjk4LTEuNzMsMi0zLjgzNiwyLTZ2LTI5Ljk5OGgxNTkuOTkydjE5Ljk5OWgtODkuOTk1ICAgIGMtNS41MjIsMC0xMCw0LjQ3OC0xMCwxMHM0LjQ3OCwxMCwxMCwxMGg5NC45OTVsNDguOTkzLDY1LjMyMmMzLjIwMiw0LjI3NSw1LjE5MSw5LjM5LDUuNzkyLDE0LjY3NEgzNS45MTMgICAgQzM2LjUxMywyMjAuNzA1LDM4LjUwMiwyMTUuNTksNDEuNzAxLDIxMS4zMTl6IE02NS42OTksNDUyLjk3N2MtMTYuNTQxLDAtMjkuOTk4LTEzLjQ1Ny0yOS45OTgtMjkuOTk4di0xMC4wOTloMTgxLjY3NSAgICBjLTMuMTcxLDEyLjk2NS0zLjE1LDI2LjgxMywwLjQ4MSw0MC4wOThINjUuNjk5eiBNMjI1LjIxOSwzOTIuOThIMzUuN1YyNDUuOTg3aDI3OS45ODZWMzI3LjdsLTYwLjYxOSwzNS4wMDIgICAgQzI0Mi40MjgsMzcwLjAwMywyMzIuMjEyLDM4MC4zOTYsMjI1LjIxOSwzOTIuOTh6IE0zMjUuMDY2LDQ4My45MzVjLTI4LjY5NywxNi41NzEtNjUuMzY3LDYuNzcxLTgxLjk0OS0yMS45NDYgICAgYy0xNi42NjEtMjguOTk0LTYuNTY0LTY1LjQ5OCwyMS45NTItODEuOTY5bDU0LjI3Ny0zMS4zMzhsNTkuOTk3LDEwMy45MTVMMzI1LjA2Niw0ODMuOTM1eiBNNDQ2LjMsNDEzLjkzOWwtNDkuNjM3LDI4LjY1OSAgICBsLTU5Ljk5OC0xMDMuOTE3bDQ5LjYzOC0yOC42NTZjMjguNzE2LTE2LjU3OCw2NS4zNzMtNi43NjEsODEuOTU1LDIxLjk1N0M0ODQuOTEzLDM2MC44NDQsNDc0Ljc4NSwzOTcuNDksNDQ2LjMsNDEzLjkzOXoiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" /></span>
                                MUTUELLE
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown prevoyancesante" href="/index.php?page=prevoyance-sante"
                                id="dLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <span class="picto-nav"> <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+PHBhdGggZD0ibTI1NiAxMjBjLTUuNTE5NTMxIDAtMTAgNC40ODA0NjktMTAgMTBzNC40ODA0NjkgMTAgMTAgMTAgMTAtNC40ODA0NjkgMTAtMTAtNC40ODA0NjktMTAtMTAtMTB6bTAgMCIgZmlsbD0iI0ZGRkZGRiIvPjxwYXRoIGQ9Im0yNjYgNDAuMTc5Njg4di0zMC4xNzk2ODhjMC01LjUyMzQzOC00LjQ3NjU2Mi0xMC0xMC0xMHMtMTAgNC40NzY1NjItMTAgMTB2MzAuMTc5Njg4Yy0xMjIuMTk1MzEyIDMuODgyODEyLTIyOC4yMDMxMjUgNzguMzM5ODQzLTI0My45NDE0MDYgMTk3Ljg0NzY1Ni0xLjM2MzI4MiAzLjg5MDYyNS0yLjA1ODU5NCA3LjkxNDA2Mi0yLjA1ODU5NCAxMS45NzI2NTYgMCA1LjUyMzQzOCA0LjQ3NjU2MiAxMCAxMCAxMCAuMTI1IDAgLjI0NjA5NC0uMDE1NjI1LjM3MTA5NC0uMDE5NTMxLjE1NjI1LjAwNzgxMi4zMDg1OTQuMDE5NTMxLjQ2MDkzNy4wMTk1MzEgNS4xNDQ1MzEgMCA5LjUxNTYyNS0zLjk0NTMxMiA5Ljk1MzEyNS05LjE2NDA2Mi4yMjI2NTYtMi42NzU3ODIuNDkyMTg4LTUuMjg1MTU3Ljc5Mjk2OS03LjgwMDc4MiA1Ljk0MTQwNi0xMy4yMDMxMjUgMjcuMDg5ODQ0LTIzLjAzNTE1NiA0OS45MjE4NzUtMjMuMDM1MTU2IDI3LjQzMzU5NCAwIDUxLjUgMTQuMDE5NTMxIDUxLjUgMzAgMCA1LjUyMzQzOCA0LjQ3NjU2MiAxMCAxMCAxMCAuMjI2NTYyIDAgLjQ1MzEyNS0uMDE5NTMxLjY3NTc4MS0uMDM1MTU2LjEwOTM3NS0uMDAzOTA2LjIxODc1LS4wMDM5MDYuMzI4MTI1LS4wMTU2MjUuMDMxMjUtLjAwMzkwNy4wNjY0MDYtLjAwNzgxMy4xMDE1NjMtLjAxMTcxOSA0Ljk0NTMxMi0uNDg4MjgxIDguOTA2MjUtNC42MzY3MTkgOS4wMDM5MDYtOS43NTM5MDYuMDExNzE5LS44MDA3ODIuMDM1MTU2LTEuNjA5Mzc1LjA1ODU5NC0yLjQyOTY4OCAyLjE2NDA2Mi0xNS4wNzgxMjUgMjUuNTM1MTU2LTI3Ljc1MzkwNiA1MS4zMzIwMzEtMjcuNzUzOTA2IDI3LjQzMzU5NCAwIDUxLjUgMTQuMDE5NTMxIDUxLjUgMzB2MTAyaC0xMGMtNS41MjM0MzggMC0xMCA0LjQ3NjU2Mi0xMCAxMHY4MGMwIDUuNTE1NjI1LTQuNDg0Mzc1IDEwLTEwIDEwcy0xMC00LjQ4NDM3NS0xMC0xMGMwLTE2LjU0Mjk2OS0xMy40NTcwMzEtMzAtMzAtMzBzLTMwIDEzLjQ1NzAzMS0zMCAzMGMwIDM4LjU5NzY1NiAzMS40MDIzNDQgNzAgNzAgNzBzNzAtMzEuNDAyMzQ0IDcwLTcwdi04MGMwLTUuNTIzNDM4LTQuNDc2NTYyLTEwLTEwLTEwaC0xMHYtMTAyYzAtMTUuOTgwNDY5IDI0LjA2NjQwNi0zMCA1MS41LTMwIDI1LjgxNjQwNiAwIDQ5LjIwMzEyNSAxMi42OTUzMTIgNTEuMzI4MTI1IDI3LjcxNDg0NC4wMjM0MzcuODE2NDA2LjA0Njg3NSAxLjYzNjcxOC4wNjI1IDIuNDYwOTM3LjA5NzY1NiA1LjE0MDYyNSA0LjA1MDc4MSA5LjI5Njg3NSA5LjA1NDY4NyA5Ljc2NTYyNS4zNDM3NS4wMzkwNjMuNjk5MjE5LjA1ODU5NCAxLjA1NDY4OC4wNTg1OTQgNS41MjM0MzggMCAxMC00LjQ3NjU2MiAxMC0xMCAwLTE1Ljk4MDQ2OSAyNC4wNjY0MDYtMzAgNTEuNS0zMCAyMi44MjQyMTkgMCA0My45NjA5MzggOS44MjQyMTkgNDkuOTIxODc1IDIzLjAzNTE1Ni4zMDA3ODEgMi41MTU2MjUuNTcwMzEzIDUuMTI1Ljc5Mjk2OSA3LjgwMDc4Mi40Mzc1IDUuMjE4NzUgNC44MDg1OTQgOS4xNjQwNjIgOS45NTMxMjUgOS4xNjQwNjIuMTUyMzQzIDAgLjMwODU5My0uMDExNzE5LjQ2MDkzNy0uMDE5NTMxLjEyNS4wMDc4MTIuMjQ2MDk0LjAxOTUzMS4zNzEwOTQuMDE5NTMxIDUuNTIzNDM4IDAgMTAtNC40NzY1NjIgMTAtMTAgMC00LjA2NjQwNi0uNjk5MjE5LTguMDkzNzUtMi4wNjI1LTExLjk3NjU2Mi0xNS43MTg3NS0xMTkuMzYzMjgyLTEyMS41NzgxMjUtMTkzLjk1NzAzMi0yNDMuOTM3NS0xOTcuODQzNzV6bS0xNDAuODQzNzUgMTc2LjgyODEyNGMtMTMuMTEzMjgxLTEwLjQxNzk2OC0zMi4zMDA3ODEtMTcuMDA3ODEyLTUzLjY1NjI1LTE3LjAwNzgxMi0xNS45Njg3NSAwLTMwLjk4MDQ2OSAzLjcxNDg0NC00My4wODk4NDQgMTAuMDkzNzUgMjEuMTUyMzQ0LTcwLjc2OTUzMSA4MS4xMjg5MDYtMTIzLjMwODU5NCAxNjAuMzYzMjgyLTE0Mi4zMTY0MDYtMzkuNzU3ODEzIDM2LjA4OTg0NC01OC4wNzgxMjYgOTUuODI0MjE4LTYzLjYxNzE4OCAxNDkuMjMwNDY4em0xNDAuODQzNzUgMjI0Ljk5MjE4OGMwIDI3LjU3MDMxMi0yMi40Mjk2ODggNTAtNTAgNTBzLTUwLTIyLjQyOTY4OC01MC01MGMwLTUuNTE1NjI1IDQuNDg0Mzc1LTEwIDEwLTEwczEwIDQuNDg0Mzc1IDEwIDEwYzAgMTYuNTQyOTY5IDEzLjQ1NzAzMSAzMCAzMCAzMHMzMC0xMy40NTcwMzEgMzAtMzB2LTcwaDIwem05OC4xNzU3ODEtMjI5Ljg4MjgxMmMtMTMuMDMxMjUtNy44MTI1LTI5LjYwOTM3NS0xMi4xMTcxODgtNDYuNjc1NzgxLTEyLjExNzE4OC0yMC4yMTQ4NDQgMC0zOC40ODQzNzUgNS45MDYyNS01MS41IDE1LjM2NzE4OHYtNDUuMzY3MTg4YzAtNS41MjM0MzgtNC40NzY1NjItMTAtMTAtMTBzLTEwIDQuNDc2NTYyLTEwIDEwdjQ1LjM2NzE4OGMtMTMuMDE1NjI1LTkuNDYwOTM4LTMxLjI4NTE1Ni0xNS4zNjcxODgtNTEuNS0xNS4zNjcxODgtMTcuMDY2NDA2IDAtMzMuNjQ0NTMxIDQuMzA0Njg4LTQ2LjY3NTc4MSAxMi4xMTcxODgtLjcxODc1LjQyOTY4Ny0xLjQxNDA2My44NzUtMi4xMDE1NjMgMS4zMjQyMTggMTAuMzkwNjI1LTg0Ljg3ODkwNiA0OS42Njc5NjktMTQ1LjYxMzI4MSAxMDAuMjc3MzQ0LTE1Mi43NDIxODd2MjkuMzAwNzgxYzAgNS41MjM0MzggNC40NzY1NjIgMTAgMTAgMTBzMTAtNC40NzY1NjIgMTAtMTB2LTI5LjMwMDc4MWM1MC42MDkzNzUgNy4xMjEwOTMgODkuODkwNjI1IDY3Ljg2MzI4MSAxMDAuMjc3MzQ0IDE1Mi43NDIxODctLjY4NzUtLjQ0OTIxOC0xLjM4MjgxMy0uODk0NTMxLTIuMTAxNTYzLTEuMzI0MjE4em03Ni4zMjQyMTktMTIuMTE3MTg4Yy0yMS4zNTU0NjkgMC00MC41MzkwNjIgNi41ODk4NDQtNTMuNjUyMzQ0IDE3LjAwMzkwNi01LjUyMzQzNy01My4yNzM0MzctMjMuODA4NTk0LTExMy4wODk4NDQtNjMuNjIxMDk0LTE0OS4yMjY1NjIgNzkuMjMwNDY5IDE5LjAwNzgxMiAxMzkuMjEwOTM4IDcxLjU0Njg3NSAxNjAuMzYzMjgyIDE0Mi4zMTY0MDYtMTIuMTEzMjgyLTYuMzc4OTA2LTI3LjEyMTA5NC0xMC4wOTM3NS00My4wODk4NDQtMTAuMDkzNzV6bTAgMCIgZmlsbD0iI0ZGRkZGRiIvPjwvc3ZnPgo=" /></span>
                                PREVOYANCE SANTE <i class="fas fa-chevron-down"></i>
                            </a>
                            <div class="dropdown-menu dLabelsante" aria-labelledby="dLabel" id="#dLabelsante">
                                <ul class="nav sousmenu">
                                    <li class="nav-item"><a class="dropdown-item" href="/index.php?page=obseques">OBSEQUES
                                        </a> </li>
                                    <li class="nav-item"><a class="dropdown-item" href="/index.php?page=dependance">DEPENDANCE</a>
                                    </li>
                                    <li class="nav-item"><a class="dropdown-item" href="/index.php?page=retraite">RETRAITE</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/index.php?page=assurance-pret">
                                <span class="picto-nav"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIC0xOCA1MTEuOTk5NjEgNTExIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij48cGF0aCBkPSJtMjQ1LjU4OTg0NCAxMTguNDYwOTM4Yy0zLjA1ODU5NCAwLTQuMjE0ODQ0LS42NDQ1MzItMTIuMzI4MTI1LTUuNjk5MjE5LTMuODkwNjI1LTIuNDIxODc1LTkuODg2NzE5LTYuMjgxMjUtMTYuMzU1NDY5LTEwLjg5NDUzMS0xNy4zMjgxMjUtMTIuMzU1NDY5LTI3LjkzNzUtMjIuNzQyMTg4LTMyLjQ0NTMxMi0zMS43NTM5MDctNS41MDc4MTMtMTEuMDExNzE5LTcuMTQ0NTMyLTIzLjUzNTE1Ni00LjYwOTM3Ni0zNS4yNjE3MTkgMi41NDI5NjktMTEuNzY5NTMxIDguOTMzNTk0LTIxLjY0ODQzNyAxNy45OTIxODgtMjcuODIwMzEyIDguOTY4NzUtNi4xMTMyODEgMTkuNDkyMTg4LTcuOTg0Mzc1IDMwLjQzMzU5NC01LjQwNjI1IDcuNzI2NTYyIDEuODIwMzEyIDEyLjYwOTM3NSA1LjY4MzU5NCAxNy4zMTY0MDYgMTAuNDA2MjUgNC43MDMxMjUtNC43MjI2NTYgOS41ODU5MzgtOC41ODU5MzggMTcuMzEyNS0xMC40MDYyNSAxMC45NDE0MDYtMi41NzgxMjUgMjEuNDY0ODQ0LS43MDcwMzEgMzAuNDM3NSA1LjQwNjI1IDkuMDU0Njg4IDYuMTcxODc1IDE1LjQ0MTQwNiAxNi4wNTA3ODEgMTcuOTg4MjgxIDI3LjgyMDMxMiAyLjUzMTI1IDExLjczMDQ2OS44OTQ1MzEgMjQuMjUtNC42MDkzNzUgMzUuMjYxNzE5LTQuNTA3ODEyIDkuMDExNzE5LTE1LjEyMTA5NCAxOS4zOTg0MzgtMzIuNDQ1MzEyIDMxLjc1MzkwNy02LjQ2ODc1IDQuNjE3MTg3LTEyLjQ2NDg0NCA4LjQ3MjY1Ni0xNi4zNTU0NjkgMTAuODk0NTMxLTguMTE3MTg3IDUuMDU0Njg3LTkuMjY5NTMxIDUuNjk5MjE5LTEyLjMzMjAzMSA1LjY5OTIxOXptLTI2LjY4MzU5NC05Ny45NDkyMTljLTMuNTQ2ODc1IDAtNi44MjgxMjUgMS4wMTU2MjUtOS44MDA3ODEgMy4wNDI5NjktNC44MDQ2ODggMy4yNzM0MzctOC4yNSA4Ljc4NTE1Ni05LjcwNzAzMSAxNS41MTk1MzEtMS41NzQyMTkgNy4yOTI5NjktLjUyNzM0NCAxNS4xMzY3MTkgMi45NDkyMTggMjIuMDg5ODQzIDUuNTM5MDYzIDExLjA4MjAzMiAzMS41NTQ2ODggMjguNjIxMDk0IDQzLjI0MjE4OCAzNS43NSAxMS42ODc1LTcuMTI4OTA2IDM3LjcwMzEyNS0yNC42Njc5NjggNDMuMjQyMTg3LTM1Ljc1IDMuNDc2NTYzLTYuOTUzMTI0IDQuNTIzNDM4LTE0Ljc5Njg3NCAyLjk0OTIxOS0yMi4wODk4NDMtMS40NTcwMzEtNi43MzQzNzUtNC45MDIzNDQtMTIuMjQ2MDk0LTkuNzAzMTI1LTE1LjUxOTUzMS00LjI3MzQzNy0yLjkxMDE1Ny05LjE3NTc4MS0zLjczODI4Mi0xNC41ODU5MzctMi40NjQ4NDQtMy43MjI2NTcuODc1LTUuNjE3MTg4IDIuNzQ2MDk0LTExLjA1MDc4MiA4LjUyMzQzNy0xLjEzMjgxMiAxLjIwMzEyNS0yLjM0Mzc1IDIuNDg4MjgxLTMuNjc1NzgxIDMuODU5Mzc1LTEuODgyODEzIDEuOTQxNDA2LTQuNDcyNjU2IDMuMDM1MTU2LTcuMTc1NzgxIDMuMDM1MTU2cy01LjI5Mjk2OS0xLjA5Mzc1LTcuMTc1NzgyLTMuMDM1MTU2Yy0xLjMzMjAzMS0xLjM3MTA5NC0yLjU0Mjk2OC0yLjY1NjI1LTMuNjc1NzgxLTMuODU5Mzc1LTUuNDMzNTkzLTUuNzc3MzQzLTcuMzI4MTI1LTcuNjQ4NDM3LTExLjA1MDc4MS04LjUyMzQzNy0xLjY0MDYyNS0uMzg2NzE5LTMuMjM0Mzc1LS41NzgxMjUtNC43ODEyNS0uNTc4MTI1em0wIDAiIGZpbGw9IiNGRkZGRkYiLz48cGF0aCBkPSJtMTY1LjY5OTIxOSAzMjEuNDI5Njg4Yy0uNjQ4NDM4IDAtMS4zMDA3ODEtLjA3MDMxMy0xLjk0OTIxOS0uMTk5MjE5LS42NDA2MjUtLjEzMjgxMy0xLjI2OTUzMS0uMzIwMzEzLTEuODcxMDk0LS41NzAzMTMtLjU5NzY1Ni0uMjUtMS4xNzk2ODctLjU2MjUtMS43MzA0NjgtLjkyMTg3NS0uNTM5MDYzLS4zNTkzNzUtMS4wNTg1OTQtLjc4MTI1LTEuNTE5NTMyLTEuMjM4MjgxLS40NTcwMzEtLjQ2MDkzOC0uODc4OTA2LS45ODA0NjktMS4yMzgyODEtMS41MTk1MzEtLjM1OTM3NS0uNTUwNzgxLS42NzE4NzUtMS4xMzI4MTMtLjkyMTg3NS0xLjczMDQ2OS0uMjUtLjYwMTU2Mi0uNDM3NS0xLjIzMDQ2OS0uNTcwMzEyLTEuODcxMDk0LS4xMjg5MDctLjY0ODQzNy0uMTg3NS0xLjMwMDc4MS0uMTg3NS0xLjk2MDkzNyAwLTIuNjI4OTA3IDEuMDU4NTkzLTUuMjEwOTM4IDIuOTE3OTY4LTcuMDcwMzEzLjQ2MDkzOC0uNDYwOTM3Ljk4MDQ2OS0uODY3MTg3IDEuNTE5NTMyLTEuMjM4MjgxLjU1MDc4MS0uMzU5Mzc1IDEuMTMyODEyLS42NzE4NzUgMS43MzA0NjgtLjkyMTg3NS42MDE1NjMtLjI1IDEuMjMwNDY5LS40Mzc1IDEuODcxMDk0LS41NzAzMTIgMS4yODkwNjItLjI1NzgxMyAyLjYyMTA5NC0uMjU3ODEzIDMuOTEwMTU2IDAgLjY0MDYyNS4xMzI4MTIgMS4yNjk1MzIuMzIwMzEyIDEuODcxMDk0LjU3MDMxMi41OTc2NTYuMjUgMS4xNzk2ODguNTYyNSAxLjczMDQ2OS45MjE4NzUuNTM5MDYyLjM3MTA5NCAxLjA1ODU5My43NzczNDQgMS41MTk1MzEgMS4yMzgyODEgMS44NTkzNzUgMS44NzEwOTQgMi45Mjk2ODggNC40NDE0MDYgMi45Mjk2ODggNy4wNzAzMTMgMCAuNjYwMTU2LS4wNzAzMTMgMS4zMTI1LS4xOTkyMTkgMS45NjA5MzctLjEzMjgxMy42NDA2MjUtLjMyMDMxMyAxLjI2OTUzMi0uNTcwMzEzIDEuODcxMDk0LS4yNS41OTc2NTYtLjU2MjUgMS4xNzk2ODgtLjkyMTg3NSAxLjczMDQ2OS0uMzcxMDkzLjUzOTA2Mi0uNzgxMjUgMS4wNDY4NzUtMS4yMzgyODEgMS41MTk1MzEtLjQ2MDkzOC40NTcwMzEtLjk4MDQ2OS44Nzg5MDYtMS41MTk1MzEgMS4yMzgyODEtLjU1MDc4MS4zNTkzNzUtMS4xMzI4MTMuNjcxODc1LTEuNzMwNDY5LjkyMTg3NS0uNjAxNTYyLjI1LTEuMjMwNDY5LjQzNzUtMS44NzEwOTQuNTcwMzEzLS42NDg0MzcuMTI4OTA2LTEuMzAwNzgxLjE5OTIxOS0xLjk2MDkzNy4xOTkyMTl6bTAgMCIgZmlsbD0iI0ZGRkZGRiIvPjxwYXRoIGQ9Im01MTEuOTg0Mzc1IDQzMi4yNzczNDRjLS42MjUtMjIuNzE4NzUtMTkuOTMzNTk0LTQxLjIwMzEyNS00My4wNDY4NzUtNDEuMjAzMTI1aC0yLjkwMjM0NHYtMTE3LjgxMjVsMi42MTcxODggMS45MjE4NzVjMS43NSAxLjI4NTE1NiAzLjgyODEyNSAxLjk0MTQwNiA1LjkyMTg3NSAxLjk0MTQwNiAxLjUzOTA2MiAwIDMuMDg1OTM3LS4zNTU0NjkgNC41MTU2MjUtMS4wNzgxMjUgMy4zNjMyODEtMS43MDMxMjUgNS40ODA0NjgtNS4xNTIzNDQgNS40ODA0NjgtOC45MjE4NzV2LTQ5LjkxNDA2MmMwLTMuMTgzNTk0LTEuNTExNzE4LTYuMTc1NzgyLTQuMDc4MTI0LTguMDU4NTk0bC0xMzQtOTguNDM3NWMtMy41MjM0MzgtMi41ODk4NDQtOC4zMjAzMTMtMi41ODk4NDQtMTEuODM5ODQ0IDBsLTYwLjEzNjcxOSA0NC4xNzU3ODF2LTE1LjUwMzkwNmMwLTUuNTIzNDM4LTQuNDgwNDY5LTEwLTEwLTEwaC0zNy44NTE1NjNjLTUuNTE5NTMxIDAtMTAgNC40NzY1NjItMTAgMTB2NTcuOTk2MDkzbC0xNi4wMTU2MjQgMTEuNzY5NTMyYy0yLjU2MjUgMS44ODI4MTItNC4wNzgxMjYgNC44NzUtNC4wNzgxMjYgOC4wNTg1OTR2MTkuMTc1NzgxYy0zMi43NDIxODctMTQuMjI2NTYzLTgwLjY3OTY4Ny0xMy4yMDMxMjUtMTA5LjU3MDMxMi0xMC44NTE1NjN2LTkuNDY4NzVjMC01LjUyMzQzNy00LjQ3NjU2Mi0xMC0xMC0xMGgtNjdjLTUuNTIzNDM4IDAtMTAgNC40NzY1NjMtMTAgMTB2MTU5LjVjMCA1LjUxOTUzMiA0LjQ3NjU2MiAxMCAxMCAxMGg2N2M1LjUyMzQzOCAwIDEwLTQuNDgwNDY4IDEwLTEwdi0yNC4xNDQ1MzFoMTQuNTU4NTk0YzEuNTA3ODEyIDMuODk0NTMxIDQuMzM1OTM3IDEzLjEyODkwNiA3Ljg3ODkwNiAzMy43MTA5MzcgMTAuMDU0Njg4IDU4LjQ1MzEyNiA0NS41ODk4NDQgOTAuNjQ0NTMyIDEwMC4wNTQ2ODggOTAuNjQ0NTMybDI2MC4xMjEwOTMuMDY2NDA2YzExLjU0Mjk2OSAwIDIyLjMzMjAzMS00LjU1NDY4OCAzMC4zODI4MTMtMTIuODI4MTI1IDguMDQ2ODc1LTguMjY5NTMxIDEyLjMwNDY4Ny0xOS4xODc1IDExLjk4ODI4MS0zMC43MzgyODF6bS02NS45NDUzMTMtNDEuMjAzMTI1aC01Ny42OTE0MDZ2LTEwMC4zOTQ1MzFjMC01LjUyMzQzOC00LjQ4MDQ2OC0xMC0xMC0xMGgtNzUuNTUwNzgxYy01LjUyMzQzNyAwLTEwIDQuNDc2NTYyLTEwIDEwdjI0Ljc2NTYyNGwtNjEuOTQxNDA2LTU0IDEwOS43MDcwMzEtODAuMzU1NDY4IDEwNS40NzI2NTYgNzcuNDc2NTYyem0tNzguODg2NzE4IDBjLTIuMDIzNDM4LTguOTg0Mzc1LTYuOTY4NzUtMTcuMzY3MTg4LTE0LjY2MDE1Ni0yMy41ODU5MzhsLTM5LjY5NTMxMy0zNC42MDkzNzV2LTMyLjE5NTMxMmg1NS41NTA3ODF2OTAuMzkwNjI1em0tMTMwLjQ4NDM3NS0yNDEuNjg3NWgxNy44NDc2NTZ2MjAuMTk1MzEybC0xNy44NDc2NTYgMTMuMTA5Mzc1em0tMjAuMDk3NjU3IDcyLjg4NjcxOSAxMjQtOTEuMDg5ODQ0IDEyNCA5MS4wODk4NDR2MjUuMDk3NjU2bC0xMTguMDc4MTI0LTg2Ljc0MjE4OGMtMS43NjE3MTktMS4yOTY4NzUtMy44Mzk4NDQtMS45NDE0MDYtNS45MjE4NzYtMS45NDE0MDYtMi4wNzQyMTggMC00LjE0ODQzNy42NDQ1MzEtNS45MTAxNTYgMS45MzM1OTRsLTExOC4wODk4NDQgODYuNDk2MDk0em0tMTQ5LjU3MDMxMiAxNDMuMjkyOTY4aC00N3YtMTM5LjVoNDd6bTQxOC42NjAxNTYgODMuNTAzOTA2Yy00LjI1IDQuMzY3MTg4LTkuOTQ5MjE4IDYuNzczNDM4LTE2LjA0Mjk2OCA2Ljc3MzQzOGwtMjYwLjEyNS0uMDY2NDA2Yy01NS44Nzg5MDcgMC03NC41MzUxNTctNDAuMjYxNzE5LTgwLjM0NzY1Ny03NC4wMzUxNTYtMi4zNTkzNzUtMTMuNzEwOTM4LTQuNzUtMjQuNTU0Njg4LTcuMTA5Mzc1LTMyLjIyMjY1Ny0xLjk0NTMxMi02LjMyNDIxOS01LjU2NjQwNi0xOC4wOTc2NTYtMTUuNzIyNjU2LTE4LjA5NzY1NmgtMTkuMzEyNXYtODUuODEyNWMyOC45NDE0MDYtMi40NDE0MDYgOTEuMTAxNTYyLTQuNjY3OTY5IDExNS43NTc4MTIgMTcuODY3MTg3LjA1NDY4OC4wNTA3ODIuMTEzMjgyLjEwNTQ2OS4xNzE4NzYuMTU2MjVsMTM2LjU3MDMxMiAxMTkuMDU4NTk0Yy4xMDU0NjkuMDkzNzUuMjEwOTM4LjE4MzU5NC4zMjAzMTIuMjY5NTMyIDkuNjQwNjI2IDcuNzE0ODQzIDExLjIwMzEyNiAyMS44MjgxMjQgMy40OTIxODggMzEuNDY0ODQzLTMuNzM4MjgxIDQuNjY3OTY5LTkuMDY2NDA2IDcuNjA1NDY5LTE1LjAxMTcxOSA4LjI2NTYyNS01Ljk0OTIxOS42NTYyNS0xMS43ODUxNTYtMS4wMzkwNjItMTYuNDA2MjUtNC43MzQzNzVsLTExNC4yNjE3MTktOTIuNjcxODc1Yy00LjI4OTA2Mi0zLjQ3NjU2Mi0xMC41ODU5MzctMi44MjAzMTItMTQuMDY2NDA2IDEuNDY4NzUtMy40ODA0NjggNC4yODkwNjMtMi44MjQyMTggMTAuNTg1OTM4IDEuNDY0ODQ0IDE0LjA2NjQwNmwxMTQuMzE2NDA2IDkyLjcxMDkzOGM3LjU4OTg0NCA2LjA3NDIxOSAxNi44MjAzMTMgOS4zMDA3ODEgMjYuNDAyMzQ0IDkuMzAwNzgxIDEuNTc4MTI1IDAgMy4xNjQwNjItLjA4OTg0MyA0Ljc1MzkwNi0uMjY1NjI1IDExLjI1MzkwNi0xLjI0NjA5NCAyMS4zNDc2NTYtNi44MDQ2ODcgMjguNDIxODc1LTE1LjY0NDUzMSAzLjg1NTQ2OS00LjgxNjQwNiA2LjQ4ODI4MS0xMC4yMjY1NjMgNy45Mzc1LTE1Ljg1MTU2M2gxMDIuMDc0MjE5YzEyLjM4MjgxMiAwIDIyLjcyMjY1NiA5Ljc1NzgxMyAyMy4wNTA3ODEgMjEuNzUzOTA3LjE2Nzk2OSA2LjEwOTM3NS0yLjA3ODEyNSAxMS44NzUtNi4zMjgxMjUgMTYuMjQ2MDkzem0wIDAiIGZpbGw9IiNGRkZGRkYiLz48L3N2Zz4K" /></span>
                                ASSURANCE DE PRÊT</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown2" href="/index.php?page=automobile" id="dLabel2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <span class="picto-nav"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBoZWlnaHQ9IjMycHgiIHZpZXdCb3g9IjAgLTU1IDQ3OS45ODI2OSA0NzkiIHdpZHRoPSIzMnB4Ij48cGF0aCBkPSJtMjEuMTk1MzEyIDMwMS44MzU5MzhjMi4zNjMyODIgMTEuMDk3NjU2IDEyLjI5Njg3NiAxOC45MzM1OTMgMjMuNjM2NzE5IDE4LjY1NjI1aDMuMTYwMTU3djQwYzAgNC40MTc5NjggMy41ODIwMzEgOCA4IDhoODBjNC40MTc5NjggMCA4LTMuNTgyMDMyIDgtOHYtNDBoMTkydjQwYzAgNC40MTc5NjggMy41ODIwMzEgOCA4IDhoODBjNC40MTc5NjggMCA4LTMuNTgyMDMyIDgtOHYtNDBoMy4yMDMxMjRjMTEuMzM5ODQ0LjI3NzM0MyAyMS4yNzM0MzgtNy41NTg1OTQgMjMuNjM2NzE5LTE4LjY1NjI1bDIwLjQ4ODI4MS0xMTAuMTQ0NTMyYzIuMTQwNjI2LTExLjUyMzQzNy0uOTcyNjU2LTIzLjQwMjM0NC04LjQ5NjA5My0zMi4zOTA2MjUtNy44Mzk4NDQtOS40MjU3ODEtMTkuNDc2NTYzLTE0Ljg1NTQ2OS0zMS43MzQzNzUtMTQuODA4NTkzaC0yMy4wOTc2NTZ2LTE2aDQwYzQuNDE3OTY4IDAgOC0zLjU4MjAzMiA4LTh2LTMyYzAtNC40MTc5NjktMy41ODIwMzItOC04LThoLTQwdi0yNGMtLjAzNTE1Ny0zMC45MTQwNjMtMjUuMDg1OTM4LTU1Ljk2NDg0NC01Ni01NmgtMjQwYy0zMC45MTAxNTcuMDM1MTU2LTU1Ljk2NDg0NCAyNS4wODU5MzctNTYgNTZ2MjRoLTQwYy00LjQxNzk2OSAwLTggMy41ODIwMzEtOCA4djMyYzAgNC40MTc5NjggMy41ODIwMzEgOCA4IDhoNDB2MTZoLTIzLjA5Mzc1Yy0xMi4yNTM5MDctLjA1NDY4OC0yMy44OTA2MjYgNS4zNjMyODEtMzEuNzM4MjgyIDE0Ljc3MzQzNy03LjUyNzM0NCA5LTEwLjY0NDUzMSAyMC44OTA2MjUtOC40OTYwOTQgMzIuNDI1Nzgxem0zOTQuNzk2ODc2LTIwNS4zNDM3NWgzMnYxNmgtMzJ6bS0yODggMjU2aC02NHYtMzJoNjR6bTI4OCAwaC02NHYtMzJoNjR6bS0zMzYtMjMydi02NGMuMDI3MzQzLTIyLjA4MjAzMiAxNy45MjE4NzQtMzkuOTcyNjU3IDQwLTQwaDI0MGMyMi4wODIwMzEuMDI3MzQzIDM5Ljk3NjU2MiAxNy45MTc5NjggNDAgNDB2ODhoLTMyMHptLTQ4LTh2LTE2aDMydjE2em0tMTAuNTI3MzQ0IDU3YzQuODEyNS01Ljc0NjA5NCAxMS45Mzc1LTkuMDQ2ODc2IDE5LjQzMzU5NC05aDM5OC4xOTE0MDZjNy40OTYwOTQtLjA0Njg3NiAxNC42MjEwOTQgMy4yNTM5MDYgMTkuNDMzNTk0IDkgNC40NzI2NTYgNS4zMzU5MzcgNi4zMzIwMzEgMTIuMzkwNjI0IDUuMDcwMzEyIDE5LjIzODI4MWwtMjAuNTI3MzQ0IDExMC4xNjAxNTZjLTEgMy40OTIxODctNC4yODkwNjIgNS44MjAzMTMtNy45MTQwNjIgNS42MDE1NjNoLTM5MC4zMjAzMTNjLTMuNjI1LjIyMjY1Ni02LjkxNDA2Mi0yLjEwOTM3Ni03LjkxMDE1Ni01LjYwMTU2M2wtMjAuNTI3MzQ0LTExMC4xNjAxNTZjLTEuMjYxNzE5LTYuODQ3NjU3LjU5NzY1Ny0xMy45MDIzNDQgNS4wNzAzMTMtMTkuMjM4Mjgxem0wIDAiIGZpbGw9IiNGRkZGRkYiLz48cGF0aCBkPSJtODcuOTkyMTg4IDI3Mi40OTIxODhjMjIuMDkzNzUgMCA0MC0xNy45MTAxNTcgNDAtNDAgMC0yMi4wOTM3NS0xNy45MDYyNS00MC00MC00MC0yMi4wODk4NDQgMC00MCAxNy45MDYyNS00MCA0MCAuMDI3MzQzIDIyLjA3ODEyNCAxNy45MjE4NzQgMzkuOTcyNjU2IDQwIDQwem0wLTY0YzEzLjI1NzgxMiAwIDI0IDEwLjc0NjA5MyAyNCAyNCAwIDEzLjI1MzkwNi0xMC43NDIxODggMjQtMjQgMjQtMTMuMjUzOTA3IDAtMjQtMTAuNzQ2MDk0LTI0LTI0IDAtMTMuMjUzOTA3IDEwLjc0NjA5My0yNCAyNC0yNHptMCAwIiBmaWxsPSIjRkZGRkZGIi8+PHBhdGggZD0ibTM5MS45OTIxODggMjcyLjQ5MjE4OGMyMi4wOTM3NSAwIDQwLTE3LjkxMDE1NyA0MC00MCAwLTIyLjA5Mzc1LTE3LjkwNjI1LTQwLTQwLTQwLTIyLjA4OTg0NCAwLTQwIDE3LjkwNjI1LTQwIDQwIC4wMjczNDMgMjIuMDc4MTI0IDE3LjkyMTg3NCAzOS45NzI2NTYgNDAgNDB6bTAtNjRjMTMuMjU3ODEyIDAgMjQgMTAuNzQ2MDkzIDI0IDI0IDAgMTMuMjUzOTA2LTEwLjc0MjE4OCAyNC0yNCAyNC0xMy4yNTM5MDcgMC0yNC0xMC43NDYwOTQtMjQtMjQgMC0xMy4yNTM5MDcgMTAuNzQ2MDkzLTI0IDI0LTI0em0wIDAiIGZpbGw9IiNGRkZGRkYiLz48cGF0aCBkPSJtMTUxLjk5MjE4OCAyNzIuNDkyMTg4aDE3NmM0LjQxNzk2OCAwIDgtMy41ODIwMzIgOC04di02NGMwLTQuNDE3OTY5LTMuNTgyMDMyLTgtOC04aC0xNzZjLTQuNDE3OTY5IDAtOCAzLjU4MjAzMS04IDh2NjRjMCA0LjQxNzk2OCAzLjU4MjAzMSA4IDggOHptOC02NGgxNjB2MTZoLTE2MHptMCAzMmgxNjB2MTZoLTE2MHptMCAwIiBmaWxsPSIjRkZGRkZGIi8+PHBhdGggZD0ibTExMS45OTIxODggODAuNDkyMTg4aC0xNnY0OGg0OHYtMTZoLTMyem0wIDAiIGZpbGw9IiNGRkZGRkYiLz48cGF0aCBkPSJtMzY3Ljk5MjE4OCAxMTIuNDkyMTg4aC0zMnYxNmg0OHYtNDhoLTE2em0wIDAiIGZpbGw9IiNGRkZGRkYiLz48L3N2Zz4K" /></span>
                                AUTOMOBILE <i class="fas fa-chevron-down"></i> </a>
                            <div class="dropdown-menu dropdown-menu2" aria-labelledby="dLabel" id="#dLabel2">
                                <ul class="nav sousmenu">
                                    <li class="nav-item"><a class="dropdown-item" href="/index.php?page=automobile">FLOTTE
                                            AUTOMOBILE </a> </li>
                                    <li class="nav-item"><a class="dropdown-item" href="/index.php?page=automobile">VTC</a>
                                    </li>
                                    <li class="nav-item"><a class="dropdown-item" href="/index.php?page=automobile">TAXI</a>
                                    </li>
                                </ul>
                            </div>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/index.php?page=moto">
                                <span class="picto-nav"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBoZWlnaHQ9IjMycHgiIHZpZXdCb3g9Ii0xMzAgMCA1MTIgNTEyIiB3aWR0aD0iMzJweCI+PHBhdGggZD0ibTIyMS44NzEwOTQgMjA1LjY4MzU5NGMtMy43NTc4MTMgMS43MzgyODEtNS4zOTg0MzggNi4xOTUzMTItMy42NjQwNjMgOS45NTcwMzEgNi4xMzY3MTkgMTMuMjg1MTU2IDkuMjQ2MDk0IDI3LjUwNzgxMyA5LjI0NjA5NCA0Mi4yNjk1MzF2MTQ2LjEwOTM3NWMwIDE5Ljg2NzE4OC0xNi4xNjAxNTYgMzYuMDI3MzQ0LTM2LjAyNzM0NCAzNi4wMjczNDRoLTIyLjg0NzY1NnYtMTMuMzgyODEzYzEyLjI4MTI1LTUuNDAyMzQzIDIwLjg4NjcxOS0xNy42Nzk2ODcgMjAuODg2NzE5LTMxLjkzNzV2LTc1LjMzOTg0M2MwLTM1LjY5NTMxMy0yOS4wNDI5NjktNjQuNzM4MjgxLTY0Ljc0MjE4OC02NC43MzgyODEtMzUuNjk1MzEyIDAtNjQuNzM4MjgxIDI5LjA0Mjk2OC02NC43MzgyODEgNjQuNzM4Mjgxdjc1LjMzOTg0M2MwIDE0LjI1NzgxMyA4LjYwNTQ2OSAyNi41MzUxNTcgMjAuODg2NzE5IDMxLjkzNzV2MTMuMzgyODEzaC0xOS4yOTI5NjljLTE5Ljg2MzI4MSAwLTM2LjAyNzM0NC0xNi4xNjAxNTYtMzYuMDI3MzQ0LTM2LjAyNzM0NHYtMTQ2LjExMzI4MWMwLTU1LjY2NDA2MiA0NS4yODkwNjMtMTAwLjk0OTIxOSAxMDAuOTUzMTI1LTEwMC45NDkyMTkgMzAuMDE1NjI1IDAgNTguMjczNDM4IDEzLjIzMDQ2OSA3Ny41MzEyNSAzNi4yOTY4NzUgMi42NTYyNSAzLjE3OTY4OCA3LjM4NjcxOSAzLjYwMTU2MyAxMC41NjY0MDYuOTQ5MjE5IDMuMTc5Njg4LTIuNjU2MjUgMy42MDE1NjMtNy4zODI4MTMuOTQ5MjE5LTEwLjU2MjUtNy41ODU5MzctOS4wODk4NDQtMTYuMzk0NTMxLTE2Ljg0NzY1Ni0yNi4wODIwMzEtMjMuMTIxMDk0IDEuMTY3OTY5LTIuNDI5Njg3IDIuMTg3NS00LjkyNTc4MSAzLjA2NjQwNi03LjQ2ODc1aDE4LjUzOTA2M2MxNS4xNjAxNTYgMCAyNy40OTIxODctMTIuMzMyMDMxIDI3LjQ5MjE4Ny0yNy40OTIxODdzLTEyLjMzMjAzMS0yNy40OTYwOTQtMjcuNDkyMTg3LTI3LjQ5NjA5NGgtMjIuMjc3MzQ0Yy0xLjg1MTU2My0zLjY0MDYyNS0zLjk4ODI4MS03LjEwOTM3NS02LjQxNDA2My0xMC4zNTU0NjkgMy4zMDQ2ODgtMi41MDM5MDYgNi4xODM1OTQtNS4wNzQyMTkgOC43MjY1NjMtNy42MzI4MTIgNS41MzkwNjMgMi42ODM1OTMgMTEuNzUzOTA2IDQuMTk1MzEyIDE4LjMxNjQwNiA0LjE5NTMxMiAyMy4yMzA0NjkgMCA0Mi4xMzI4MTMtMTguOTAyMzQzIDQyLjEzMjgxMy00Mi4xMzY3MTkgMC0yMy4yMzA0NjgtMTguOTAyMzQ0LTQyLjEzMjgxMi00Mi4xMzI4MTMtNDIuMTMyODEyLTIzLjIzNDM3NSAwLTQyLjEzNjcxOSAxOC45MDIzNDQtNDIuMTM2NzE5IDQyLjEzMjgxMiAwIDExLjIwNzAzMiA0LjQxMDE1NyAyMS4zOTg0MzggMTEuNTcwMzEzIDI4Ljk1NzAzMi0xLjk4ODI4MSAxLjg2MzI4MS00LjI0MjE4NyAzLjczMDQ2OC02Ljc3MzQzNyA1LjU1ODU5NC0xMi40MTAxNTctMTAuODAwNzgyLTI4LjYwMTU2My0xNy4zNjMyODItNDYuMzA4NTk0LTE3LjM2MzI4Mi0xNy43MDMxMjUgMC0zMy44OTQ1MzIgNi41NjI1LTQ2LjMwNDY4OCAxNy4zNjMyODItMi41MzEyNS0xLjgyODEyNi00Ljc4NTE1Ni0zLjY5NTMxMy02Ljc3NzM0NC01LjU1ODU5NCA3LjE2NDA2My03LjU1ODU5NCAxMS41NzAzMTMtMTcuNzUgMTEuNTcwMzEzLTI4Ljk1NzAzMiAwLTIzLjIzMDQ2OC0xOC45MDIzNDQtNDIuMTMyODEyLTQyLjEzMjgxMy00Mi4xMzI4MTItMjMuMjMwNDY4IDAtNDIuMTMyODEyIDE4LjkwMjM0NC00Mi4xMzI4MTIgNDIuMTMyODEyIDAgMjMuMjMwNDY5IDE4LjkwMjM0NCA0Mi4xMzI4MTMgNDIuMTMyODEyIDQyLjEzMjgxMyA2LjU1ODU5NCAwIDEyLjc3MzQzOC0xLjUwNzgxMyAxOC4zMTY0MDctNC4xOTUzMTMgMi41MzkwNjIgMi41NjI1IDUuNDE3OTY5IDUuMTMyODEzIDguNzI2NTYyIDcuNjM2NzE5LTIuNDI5Njg3IDMuMjQ2MDk0LTQuNTY2NDA2IDYuNzE0ODQ0LTYuNDE0MDYyIDEwLjM1NTQ2OWgtMjEuNjcxODc1Yy0xNS40OTYwOTQgMC0yOC4xMDE1NjMgMTIuNjA1NDY5LTI4LjEwMTU2MyAyOC4xMDE1NjIgMCAxMi4xNzE4NzYgOC4yMjI2NTcgMjIuODc4OTA3IDIwLjAxMTcxOSAyNS45OTIxODggNS4yNSAxLjM4MjgxMiA4LjI4MTI1LTEuOTY0ODQ0IDkuMTc1NzgxLTUuMzI0MjE5IDEuMDYyNS00LjAwMzkwNi0xLjMyMDMxMi04LjEwOTM3NS01LjMyNDIxOS05LjE3NTc4MS01LjIxODc1LTEuMzg2NzE5LTguODYzMjgxLTYuMTEzMjgxLTguODYzMjgxLTExLjQ5MjE4OCAwLTcuMjI2NTYyIDUuODc1LTEzLjEwMTU2MiAxMy4xMDE1NjMtMTMuMTAxNTYyaDE2LjA5Mzc1Yy0xLjMzMjAzMiA1LjQxMDE1Ni0yLjA1MDc4MiAxMS4wNTQ2ODgtMi4wNTA3ODIgMTYuODcxMDk0IDAgMTAuOTM3NSAyLjUyNzM0NCAyMS42NTYyNSA3LjMzNTkzOCAzMS4zNTU0NjgtMzEuMjY1NjI1IDIwLjc5Mjk2OS01MS45MTc5NjkgNTYuMzM1OTM4LTUxLjkxNzk2OSA5Ni42MTcxODh2MTQ2LjExMzI4MWMwIDI4LjEzNjcxOSAyMi44OTA2MjUgNTEuMDI3MzQ0IDUxLjAyNzM0NCA1MS4wMjczNDRoMTkuMjkyOTY5djEzLjEwMTU2M2MwIDI0LjE3OTY4NyAxOS42NzE4NzUgNDMuODUxNTYyIDQzLjg1MTU2MiA0My44NTE1NjIgMjQuMTgzNTk0IDAgNDMuODUxNTYzLTE5LjY3MTg3NSA0My44NTE1NjMtNDMuODUxNTYydi0xMy4xMDE1NjNoMjIuODUxNTYyYzI4LjEzNjcxOSAwIDUxLjAyNzM0NC0yMi44OTA2MjUgNTEuMDI3MzQ0LTUxLjAyNzM0NHYtMTQ2LjExMzI4MWMwLTE2Ljk0NTMxMi0zLjU3NDIxOS0zMy4yODUxNTYtMTAuNjI4OTA2LTQ4LjU1ODU5NC0xLjczNDM3NS0zLjc1NzgxMi02LjE5MTQwNy01LjQwMjM0NC05Ljk1MzEyNS0zLjY2NDA2MnptLTExNy40NTMxMjUtNjEuNjA5Mzc1Yy0yLjc2OTUzMS00LjE3NTc4MS00LjI4NTE1Ny05LjEwNTQ2OS00LjI4NTE1Ny0xNC4xNDA2MjUgMC0xNC4xNDA2MjUgMTEuNTAzOTA3LTI1LjY0ODQzOCAyNS42NDQ1MzItMjUuNjQ4NDM4czI1LjY0ODQzNyAxMS41MDc4MTMgMjUuNjQ4NDM3IDI1LjY0ODQzOGMwIDQuOTY4NzUtMS40NjA5MzcgOS43NzczNDQtNC4xMzI4MTIgMTMuODk4NDM3LTYuODAwNzgxLTEuMjMwNDY5LTEzLjc1LTEuODc1LTIwLjc4OTA2My0xLjg3NS03LjU1MDc4MSAwLTE0LjkzMzU5NC43MzQzNzUtMjIuMDg1OTM3IDIuMTE3MTg4em0xMDYuNjU2MjUtMzEuMDExNzE5YzYuODkwNjI1IDAgMTIuNDkyMTg3IDUuNjA1NDY5IDEyLjQ5MjE4NyAxMi40OTYwOTQgMCA2Ljg4NjcxOC01LjYwMTU2MiAxMi40OTIxODctMTIuNDkyMTg3IDEyLjQ5MjE4N2gtMTUuMTI1Yy4zMDg1OTMtMi42ODM1OTMuNDc2NTYyLTUuMzk0NTMxLjQ3NjU2Mi04LjExNzE4NyAwLTUuODE2NDA2LS43MjI2NTYtMTEuNDYwOTM4LTIuMDU0Njg3LTE2Ljg3MTA5NHptLTEuNjQ4NDM4LTk4LjA2MjVjMTQuOTYwOTM4IDAgMjcuMTMyODEzIDEyLjE3MTg3NSAyNy4xMzI4MTMgMjcuMTMyODEyIDAgMTQuOTYwOTM4LTEyLjE3MTg3NSAyNy4xMzI4MTMtMjcuMTMyODEzIDI3LjEzMjgxMy0xNC45NjA5MzcgMC0yNy4xMzY3MTktMTIuMTcxODc1LTI3LjEzNjcxOS0yNy4xMzI4MTMgMC0xNC45NjA5MzcgMTIuMTcxODc2LTI3LjEzMjgxMiAyNy4xMzY3MTktMjcuMTMyODEyem0tMTk0LjQyNTc4MSAyNy4xMzI4MTJjMC0xNC45NjA5MzcgMTIuMTcxODc1LTI3LjEzMjgxMiAyNy4xMzI4MTItMjcuMTMyODEyIDE0Ljk2MDkzOCAwIDI3LjEzMjgxMyAxMi4xNzE4NzUgMjcuMTMyODEzIDI3LjEzMjgxMiAwIDE0Ljk2MDkzOC0xMi4xNzE4NzUgMjcuMTMyODEzLTI3LjEzMjgxMyAyNy4xMzI4MTMtMTQuOTYwOTM3IDAtMjcuMTMyODEyLTEyLjE3MTg3NS0yNy4xMzI4MTItMjcuMTMyODEzem01NS4xMzI4MTIgODcuODAwNzgyYzAtMzAuNjgzNTk0IDI0Ljk2MDkzOC01NS42NDg0MzggNTUuNjQ0NTMyLTU1LjY0ODQzOHM1NS42NDg0MzcgMjQuOTY0ODQ0IDU1LjY0ODQzNyA1NS42NDg0MzhjMCA4LjA4MjAzMS0xLjc1IDE2LjAwMzkwNi01LjA4OTg0MyAyMy4yNTc4MTItNC41MjczNDQtMi4xNTYyNS05LjE5NTMxMy00LjAxMTcxOC0xMy45NzY1NjMtNS41NjI1IDIuNjUyMzQ0LTUuNDcyNjU2IDQuMDY2NDA2LTExLjUwNzgxMiA0LjA2NjQwNi0xNy42OTUzMTIgMC0yMi40MTAxNTYtMTguMjM0Mzc1LTQwLjY0NDUzMi00MC42NDg0MzctNDAuNjQ0NTMyLTIyLjQxMDE1NiAwLTQwLjY0NDUzMiAxOC4yMzQzNzYtNDAuNjQ0NTMyIDQwLjY0NDUzMiAwIDYuMzA4NTk0IDEuNDkyMTg4IDEyLjUxMTcxOCA0LjI3NzM0NCAxOC4xMDU0NjgtNC43ODUxNTYgMS42MjEwOTQtOS40MjU3ODEgMy41NTA3ODItMTMuOTEwMTU2IDUuNzU3ODEzLTMuNTIzNDM4LTcuNDE3OTY5LTUuMzY3MTg4LTE1LjU1ODU5NC01LjM2NzE4OC0yMy44NjMyODF6bTQuODUxNTYzIDI2NC43OTI5Njh2LTc1LjMzOTg0M2MwLTI3LjQyNTc4MSAyMi4zMTY0MDYtNDkuNzM4MjgxIDQ5Ljc0MjE4Ny00OS43MzgyODEgMjcuNDI1NzgyIDAgNDkuNzM4MjgyIDIyLjMxMjUgNDkuNzM4MjgyIDQ5LjczODI4MXY3NS4zMzk4NDNjMCAxMC45NjA5MzgtOC45MTQwNjMgMTkuODc1LTE5Ljg3NSAxOS44NzVoLTU5LjczMDQ2OWMtMTAuOTU3MDMxIDAtMTkuODc1LTguOTE3OTY4LTE5Ljg3NS0xOS44NzV6bTQ5LjczODI4MSAxMDIuMjczNDM4Yy0xNS45MDYyNSAwLTI4Ljg1MTU2Mi0xMi45NDE0MDYtMjguODUxNTYyLTI4Ljg1MTU2MnYtMzguNTQ2ODc2aDU3LjcwMzEyNXYzOC41NDY4NzZjLjAwMzkwNiAxNS45MTAxNTYtMTIuOTQxNDA3IDI4Ljg1MTU2Mi0yOC44NTE1NjMgMjguODUxNTYyem0wIDAiIGZpbGw9IiNGRkZGRkYiLz48cGF0aCBkPSJtMTAzLjE3MTg3NSAxODcuNTc4MTI1Yy0xNC45NjA5MzcgMC0yNy4xMzI4MTMgMTIuMTcxODc1LTI3LjEzMjgxMyAyNy4xMzI4MTMgMCAxNC45NjA5MzcgMTIuMTcxODc2IDI3LjEzMjgxMiAyNy4xMzI4MTMgMjcuMTMyODEyaDQ1LjIxMDkzN2MxNC45NjA5MzggMCAyNy4xMzI4MTMtMTIuMTcxODc1IDI3LjEzMjgxMy0yNy4xMzI4MTIgMC0xNC45NjA5MzgtMTIuMTcxODc1LTI3LjEzMjgxMy0yNy4xMzI4MTMtMjcuMTMyODEzem01Ny4zNDM3NSAyNy4xMzI4MTNjMCA2LjY5MTQwNi01LjQ0MTQwNiAxMi4xMzI4MTItMTIuMTMyODEzIDEyLjEzMjgxMmgtNDUuMjA3MDMxYy02LjY5MTQwNiAwLTEyLjEzMjgxMi01LjQ0MTQwNi0xMi4xMzI4MTItMTIuMTMyODEyIDAtNi42OTE0MDcgNS40NDE0MDYtMTIuMTMyODEzIDEyLjEzMjgxMi0xMi4xMzI4MTNoNDUuMjA3MDMxYzYuNjg3NSAwIDEyLjEzMjgxMyA1LjQ0MTQwNiAxMi4xMzI4MTMgMTIuMTMyODEzem0wIDAiIGZpbGw9IiNGRkZGRkYiLz48L3N2Zz4K" /></span>
                                MOTO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/index.php?page=habitation">
                                <span class="picto-nav"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMi4wMDIgNTEyLjAwMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyLjAwMiA1MTIuMDAyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTUwMi4wMDEsNDkyLjAwMmgtNDR2LTc5YzAtNS41MjMtNC40NzgtMTAtMTAtMTBjLTUuNTIyLDAtMTAsNC40NzctMTAsMTB2NzloLTEyMHYtMTkwYzAtNS41MjMtNC40NzgtMTAtMTAtMTBoLTEwNCAgICBjLTUuNTIyLDAtMTAsNC40NzctMTAsMTB2MTkwaC0xMjBWMjY2LjAwMWgzLjg0OGMyLjY1MiwwLDUuMTk1LTEuMDU0LDcuMDcxLTIuOTI5TDI1Ni4wMDEsOTEuOTkxbDE3MS4wODEsMTcxLjA4MSAgICBjMS44NzYsMS44NzUsNC40MTksMi45MjksNy4wNzEsMi45MjloMy44NDh2NzVjMCw1LjUyMyw0LjQ3OCwxMCwxMCwxMGM1LjUyMiwwLDEwLTQuNDc3LDEwLTEwdi03NWg0NCAgICBjNC4wNDUsMCw3LjY5MS0yLjQzNyw5LjIzOS02LjE3M2MxLjU0OC0zLjczNiwwLjY5MS04LjAzOC0yLjE2OC0xMC44OThsLTI0Ni0yNDZjLTMuOTA2LTMuOTA1LTEwLjIzNi0zLjkwNS0xNC4xNDMsMGwtOTQsOTQgICAgYy0zLjkwNSwzLjkwNS0zLjkwNSwxMC4yMzcsMCwxNC4xNDJjMy45MDYsMy45MDYsMTAuMjM4LDMuOTA2LDE0LjE0MywwbDg2LjkyOS04Ni45MjlsMjIxLjg1NywyMjEuODU4aC0zOS41NjNMMjYzLjA3Miw3MC43NzggICAgYy0zLjkwNi0zLjkwNS0xMC4yMzYtMy45MDUtMTQuMTQzLDBMNzMuNzA2LDI0Ni4wMDFIMzQuMTQzbDc4LjkyOS03OC45MjhjMy45MDUtMy45MDUsMy45MDUtMTAuMjM3LDAtMTQuMTQzICAgIGMtMy45MDUtMy45MDQtMTAuMjM3LTMuOTA1LTE0LjE0MywwbC05Niw5NmMtMi44NTksMi44Ni0zLjcxNiw3LjE2MS0yLjE2OCwxMC44OThjMS41NDgsMy43MzcsNS4xOTUsNi4xNzMsOS4yNCw2LjE3M2g0NHYyMjZoLTQ0ICAgIGMtNS41MjIsMC0xMCw0LjQ3Ny0xMCwxMHM0LjQ3OCwxMCwxMCwxMGg1NGgxNDBoMTA0aDE0MGg1NGM1LjUyMiwwLDEwLTQuNDc3LDEwLTEwUzUwNy41MjMsNDkyLjAwMiw1MDIuMDAxLDQ5Mi4wMDJ6ICAgICBNMjk4LjAwMSw0OTIuMDAyaC04NHYtMTgwaDg0VjQ5Mi4wMDJ6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDA2LjAwMSwyOTIuMDAyaC01NmMtNS41MjIsMC0xMCw0LjQ3Ny0xMCwxMHYxMDBjMCw1LjUyMyw0LjQ3OCwxMCwxMCwxMGg1NmM1LjUyMiwwLDEwLTQuNDc3LDEwLTEwdi0xMDAgICAgQzQxNi4wMDEsMjk2LjQ3OSw0MTEuNTIzLDI5Mi4wMDIsNDA2LjAwMSwyOTIuMDAyeiBNMzk2LjAwMSwzOTIuMDAyaC0zNnYtODBoMzZWMzkyLjAwMnoiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0xNjIuMDAxLDI5Mi4wMDJoLTU2Yy01LjUyMiwwLTEwLDQuNDc3LTEwLDEwdjEwMGMwLDUuNTIzLDQuNDc4LDEwLDEwLDEwaDU2YzUuNTIyLDAsMTAtNC40NzcsMTAtMTB2LTEwMCAgICBDMTcyLjAwMSwyOTYuNDc5LDE2Ny41MjMsMjkyLjAwMiwxNjIuMDAxLDI5Mi4wMDJ6IE0xNTIuMDAxLDM5Mi4wMDJoLTM2di04MGgzNlYzOTIuMDAyeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTI1Ni4wMDEsMTY0LjMyMmMtMjUuMzY0LDAtNDYsMjAuNjM2LTQ2LDQ2czIwLjYzNiw0Niw0Niw0NmMyNS4zNjQsMCw0Ni0yMC42MzYsNDYtNDZTMjgxLjM2NSwxNjQuMzIyLDI1Ni4wMDEsMTY0LjMyMnogICAgIE0yNTYuMDAxLDIzNi4zMjJjLTE0LjMzNywwLTI2LTExLjY2NC0yNi0yNnMxMS42NjMtMjYsMjYtMjZjMTQuMzM3LDAsMjYsMTEuNjY0LDI2LDI2UzI3MC4zMzgsMjM2LjMyMiwyNTYuMDAxLDIzNi4zMjJ6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjQ0LjA3LDM5NC45MzJjLTEuODU5LTEuODYtNC40NC0yLjkzLTcuMDY5LTIuOTNjLTIuNjMsMC01LjIxLDEuMDctNy4wNywyLjkzYy0xLjg2LDEuODYtMi45Myw0LjQ0LTIuOTMsNy4wNyAgICBzMS4wNjksNS4yMSwyLjkzLDcuMDdjMS44NjEsMS44Niw0LjQ0LDIuOTMsNy4wNywyLjkzczUuMjEtMS4wNyw3LjA2OS0yLjkzYzEuODYtMS44NiwyLjkzMS00LjQ0LDIuOTMxLTcuMDcgICAgUzI0NS45MzEsMzk2Ljc5MiwyNDQuMDcsMzk0LjkzMnoiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0xNDAuMDcsMTI1LjkzMmMtMS44NTktMS44Ni00LjQzOS0yLjkzLTcuMDY5LTIuOTNzLTUuMjEsMS4wNy03LjA3LDIuOTNjLTEuODYsMS44Ni0yLjkzLDQuNDQtMi45Myw3LjA3ICAgIHMxLjA2OSw1LjIxLDIuOTMsNy4wN2MxLjg2MSwxLjg2LDQuNDQsMi45Myw3LjA3LDIuOTNzNS4yMS0xLjA3LDcuMDY5LTIuOTNjMS44Ni0xLjg2LDIuOTMxLTQuNDQsMi45MzEtNy4wNyAgICBTMTQxLjkzMSwxMjcuNzkyLDE0MC4wNywxMjUuOTMyeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ1NS4wNywzNjcuMjYxYy0xLjg1OS0xLjg1OS00LjQ0LTIuOTMtNy4wNjktMi45M2MtMi42MywwLTUuMjEsMS4wNy03LjA3LDIuOTNjLTEuODYsMS44Ny0yLjkzLDQuNDQtMi45Myw3LjA3ICAgIHMxLjA2OSw1LjIxLDIuOTMsNy4wOGMxLjg2LDEuODYsNC40NCwyLjkyLDcuMDcsMi45MnM1LjIxLTEuMDYsNy4wNjktMi45MmMxLjg2LTEuODcsMi45MzEtNC40NCwyLjkzMS03LjA4ICAgIEM0NTguMDAxLDM3MS43MDEsNDU2LjkzMSwzNjkuMTIxLDQ1NS4wNywzNjcuMjYxeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" /></span>
                                HABITATION </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/index.php?page=chiens-chats">
                                <span class="picto-nav"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+CjxnPgoJPGc+CgkJPGc+CgkJCTxwYXRoIGQ9Ik0xMTUuNjUyLDMwNi4zMDRjNC4xODEsMi4wNzQsOS4yODQsMC40MDEsMTEuNDAxLTMuNzg5YzIuMTI1LTQuMTgxLDAuNDQ0LTkuMzEtMy43MjktMTEuNDYgICAgIGMtMS4yMzctMC42NC0zMC40NTUtMTYuMTcxLTM4LjExLTYyLjA2M2MtMC42MjMtMy43NzItMy42ODYtNi42NjQtNy41MDEtNy4wNzRjLTMuOS0wLjQzNS03LjQxNSwxLjc2Ni04Ljg0MSw1LjMwOCAgICAgYy0xOC41MTcsNDYuMzEsMTYuNDAxLDk5LjUzMywxNy44OTQsMTAxLjc3N2MxLjYzOCwyLjQ2Niw0LjM1MiwzLjc5Nyw3LjEsMy43OTdjMS42MjEsMCwzLjI2OC0wLjQ2OSw0LjcyNy0xLjQzNCAgICAgYzMuOTE3LTIuNjExLDQuOTgzLTcuOTAyLDIuMzgxLTExLjgyN2MtMC4yMTMtMC4zMjQtMTQuNjYtMjIuNDE3LTE5LjExNS00OC40MzVDOTUuODk4LDI5Ni4xMzIsMTE0LjU1MSwzMDUuNzQ5LDExNS42NTIsMzA2LjMwNCAgICAgeiIgZmlsbD0iI0ZGRkZGRiIvPgoJCQk8cGF0aCBkPSJNMTU1LjI3MywzMjQuMDk2YzQuNjE3LTAuOTIyLDcuNjItNS40MTksNi42OTktMTAuMDM1Yy0wLjkzLTQuNjE3LTUuMzc2LTcuNjItMTAuMDQ0LTYuNjkgICAgIGMtMTcuMTI2LDMuNDIyLTQ5LjUyOCwyMi4wNjctNDkuNTI4LDY4LjA5NmMwLDMzLjM5OSw2Ljk5Nyw1Ni41NjgsMTIuMzk5LDY5LjQ1M2MtMTguNjgsMy42MjctMjkuNDY2LDE1LjM3Ny0yOS40NjYsMzIuOTQ3ICAgICBDODUuMzMzLDQ5Ny42NDcsMTAzLjI3OSw1MTIsMTI4LDUxMmg4LjUzM2MxNC4xNDgsMCwyMi44NTItMTAuNjA3LDIzLjc5MS0xMS44MWMyLjkwMS0zLjcxMiwyLjI0NC05LjA3OS0xLjQ3Ni0xMS45ODEgICAgIGMtMy43MTItMi45MS05LjA3OS0yLjIzNi0xMS45NzIsMS40NjhjLTAuMDQzLDAuMDYtNC4zNzgsNS4yNTctMTAuMzQyLDUuMjU3SDEyOGMtMTIuNzIzLDAtMjUuNi01Ljg2Mi0yNS42LTE3LjA2NyAgICAgYzAtNC4yMjQsMC0xNy4wNjcsMjUuNi0xNy4wNjdjMy4xMzIsMCw1Ljk5OS0xLjczMiw3LjQ5Mi00LjQ4OWMxLjQ5My0yLjc1NiwxLjM0LTYuMTE4LTAuMzY3LTguNzM4ICAgICBjLTAuMTYyLTAuMjQ3LTE1LjY1OS0yNC41NTktMTUuNjU5LTcyLjEwN0MxMTkuNDY3LDMzMi4xOTQsMTUzLjg1NiwzMjQuNDAzLDE1NS4yNzMsMzI0LjA5NnoiIGZpbGw9IiNGRkZGRkYiLz4KCQkJPHBhdGggZD0iTTM5Ny4yMDEsNDQ0LjkxOWM1LjQwMi0xMi44ODUsMTIuMzk5LTM2LjA1MywxMi4zOTktNjkuNDUzYzAtNDYuMDI5LTMyLjQwMS02NC42NzQtNDkuNTI3LTY4LjA5NiAgICAgYy00LjYyNS0wLjkxMy05LjExNCwyLjA2NS0xMC4wNDQsNi42OWMtMC45MjIsNC42MTcsMi4wODIsOS4xMTQsNi42OTksMTAuMDM1YzEuNDY4LDAuMjk5LDM1LjgwNiw3LjY3MiwzNS44MDYsNTEuMzcxICAgICBjMCw0Ny41NDgtMTUuNDk3LDcxLjg1OS0xNS42MzMsNzIuMDY0Yy0xLjc0MSwyLjYyLTEuOTExLDUuOTktMC40MjcsOC43NjRjMS40ODUsMi43NzMsNC4zNzgsNC41MDYsNy41MjYsNC41MDYgICAgIGMyNS42LDAsMjUuNiwxMi44NDMsMjUuNiwxNy4wNjdjMCwxMS4yMDQtMTIuODc3LDE3LjA2Ny0yNS42LDE3LjA2N2gtOC41MzNjLTUuODg4LDAtMTAuMjIzLTUuMTExLTEwLjM5NC01LjMxNiAgICAgYy0yLjkxLTMuNjQ0LTguMjI2LTQuMjkyLTExLjkyMS0xLjQwOGMtMy43MjEsMi45MDEtNC4zNzgsOC4yNjktMS40NzYsMTEuOTgxYzAuOTM5LDEuMjAzLDkuNjQzLDExLjgxLDIzLjc5MSwxMS44MUgzODQgICAgIGMyNC43MywwLDQyLjY2Ny0xNC4zNTMsNDIuNjY3LTM0LjEzM0M0MjYuNjY3LDQ2MC4yOTcsNDE1Ljg4MSw0NDguNTQ2LDM5Ny4yMDEsNDQ0LjkxOXoiIGZpbGw9IiNGRkZGRkYiLz4KCQkJPHBhdGggZD0iTTMwOC42MzQsNDQ0LjM4MmwxNS41MTQtOTMuMTA3YzAuNzc2LTQuNjUxLTIuMzY0LTkuMDQ1LTcuMDE0LTkuODIyYy00LjY2OC0wLjc2OC05LjA0NSwyLjM2NC05LjgxMyw3LjAwNiAgICAgbC0xNS44ODEsOTUuMjc1aC0xLjMwNmMtNC43MTksMC04LjUzMywzLjgyMy04LjUzMyw4LjUzM2MwLDQuNzEsMy44MTQsOC41MzMsOC41MzMsOC41MzNoOC41MzNjMjUuNiwwLDI1LjYsMTIuODQzLDI1LjYsMTcuMDY3ICAgICBjMCwxMS4yMDQtMTIuODc3LDE3LjA2Ny0yNS42LDE3LjA2N2gtOC41MzNjLTE0LjExNCwwLTI1LjYtMTEuNDg2LTI1LjYtMjUuNlYzNDkuODY3YzAtNC43MS0zLjgxNC04LjUzMy04LjUzMy04LjUzMyAgICAgYy00LjcxOSwwLTguNTMzLDMuODIzLTguNTMzLDguNTMzdjExOS40NjdjMCwxNC4xMTQtMTEuNDg2LDI1LjYtMjUuNiwyNS42aC04LjUzM2MtMTIuNzIzLDAtMjUuNi01Ljg2Mi0yNS42LTE3LjA2NyAgICAgYzAtNC4yMjQsMC0xNy4wNjcsMjUuNi0xNy4wNjdoOC41MzNjNC43MTksMCw4LjUzMy0zLjgyMyw4LjUzMy04LjUzM2MwLTQuNzEtMy44MTQtOC41MzMtOC41MzMtOC41MzNoLTEuMzA2bC0xNS44OC05NS4yNzUgICAgIGMtMC43NTktNC42NDItNS4xNTQtNy43NzQtOS44MTMtNy4wMDZjLTQuNjUxLDAuNzc3LTcuNzkxLDUuMTcxLTcuMDE0LDkuODIybDE1LjUxNCw5My4xMDcgICAgIGMtMjAuNjY4LDIuODU5LTMyLjcsMTQuOTI1LTMyLjcsMzMuNDg1YzAsMTkuNzgsMTcuOTQ2LDM0LjEzMyw0Mi42NjcsMzQuMTMzaDguNTMzYzEzLjk0MywwLDI2LjM0Mi02LjcyNCwzNC4xMzMtMTcuMDkyICAgICBDMjYzLjc5MSw1MDUuMjc2LDI3Ni4xOSw1MTIsMjkwLjEzMyw1MTJoOC41MzNjMjQuNzMsMCw0Mi42NjctMTQuMzUzLDQyLjY2Ny0zNC4xMzMgICAgIEMzNDEuMzMzLDQ1OS4zMDcsMzI5LjMwMSw0NDcuMjQxLDMwOC42MzQsNDQ0LjM4MnoiIGZpbGw9IiNGRkZGRkYiLz4KCQkJPHBhdGggZD0iTTQ2OC40MjksNzIuOTg2QzQ0OS42NzMsMzUuNDY1LDQwNC40ODksMCwzNzUuNDY3LDBjLTE2LjQ3OCwwLTQ0LjgzNCwyNS41NDktNTkuMDc2LDM5LjQ3NSAgICAgQzI5OS45MywyNS4zNywyNzkuODkzLDE3LjA2NywyNTYsMTcuMDY3cy00My45Myw4LjMwMy02MC4zOSwyMi40MDlDMTgxLjM2NywyNS41NDksMTUzLjAxMSwwLDEzNi41MzMsMCAgICAgYy0yOS4wMjIsMC03NC4yMDYsMzUuNDY1LTkyLjk2Miw3Mi45ODZjLTUuNjQ5LDExLjI4MS05LjQzOCwyNi41My05LjQzOCwzNy45NDhjMCwyMy41MjYsMTkuMTQsNDIuNjY3LDQyLjY2Nyw0Mi42NjcgICAgIGMyMS4yMDUsMCwzMC42OTQtMTMuOTQzLDM4LjMwNi0yNS4xNDhjMC45My0xLjM1NywxLjg1Mi0yLjcyMiwyLjkyNy00LjI1bDM0LjEzMy01MS4yYzIuNjItMy45MjUsMS41NjItOS4yMjUtMi4zNjQtMTEuODM2ICAgICBjLTMuOTQyLTIuNjI4LTkuMjI1LTEuNTYyLTExLjgzNiwyLjM2NGwtMzQuMDA1LDUxLjAxMmMtMS4wMDcsMS40MjUtMS45ODgsMi44NjctMi45Nyw0LjMwOSAgICAgYy03LjY3MiwxMS4yOTgtMTIuNTg3LDE3LjY4MS0yNC4xOTIsMTcuNjgxYy0xNC4xMTQsMC0yNS42LTExLjQ4Ni0yNS42LTI1LjZjMC04Ljg2NiwzLjE0LTIxLjMzMyw3LjYzNy0zMC4zMTkgICAgIGMxNi44MTEtMzMuNjMsNTcuNDU1LTYzLjU0OCw3Ny42OTYtNjMuNTQ4YzcuMjc5LDAsMjguOTQ1LDE2Ljk0Nyw0Ny4wMSwzNC41MDljLTMyLjA2LDM3LjI3NC00Ny4wMSw5OS42NzgtNDcuMDEsMTYxLjc1OCAgICAgYzAsNzguNzg4LDM0LjYxMSwxMTAuOTMzLDExOS40NjcsMTEwLjkzM3MxMTkuNDY3LTMyLjE0NSwxMTkuNDY3LTExMC45MzNjMC02Mi4wODktMTQuOTUtMTI0LjQ4NC00Ny4wMS0xNjEuNzU4ICAgICBjMTguMDY1LTE3LjU2MiwzOS43MjMtMzQuNTA5LDQ3LjAxLTM0LjUwOWMyMC4yNDEsMCw2MC44ODUsMjkuOTE4LDc3LjcwNSw2My41NDhjNC40ODksOC45ODYsNy42MjksMjEuNDUzLDcuNjI5LDMwLjMxOSAgICAgYzAsMTQuMTE0LTExLjQ4NiwyNS42LTI1LjYsMjUuNmMtMTIuMDIzLDAtMTYuNzY4LTYuMzE1LTI0Ljc3Mi0xOC40MDZsLTM2LjM5NS01NC41OTZjLTIuNjExLTMuOTI1LTcuOTEtNC45OTItMTEuODM2LTIuMzY0ICAgICBjLTMuOTI1LDIuNjExLTQuOTgzLDcuOTEtMi4zNjQsMTEuODM2bDM2LjM2MSw1NC41NDVjOC4wOSwxMi4yMTEsMTcuMjQ2LDI2LjA1MiwzOS4wMDYsMjYuMDUyICAgICBjMjMuNTI2LDAsNDIuNjY3LTE5LjE0LDQyLjY2Ny00Mi42NjdDNDc3Ljg2Nyw5OS41MTYsNDc0LjA3OCw4NC4yNjcsNDY4LjQyOSw3Mi45ODZ6IE0zNTguNCwyMTMuMzMzICAgICBjMCw2OS4zMDgtMjYuODAzLDkzLjg2Ny0xMDIuNCw5My44NjdzLTEwMi40LTI0LjU1OS0xMDIuNC05My44NjdjMC04OS4xOTksMzEuNjY3LTE3OS4yLDEwMi40LTE3OS4yICAgICBTMzU4LjQsMTI0LjEzNCwzNTguNCwyMTMuMzMzeiIgZmlsbD0iI0ZGRkZGRiIvPgoJCQk8cGF0aCBkPSJNMjk5LjYxNCwyNTIuMDkyYy0xLjQ1OSwyLjg0Mi03LjE1OSwzLjg3NC05LjQ4MSwzLjkwOGMtOS45OTIsMC0yMC4zMTgtOC41MDgtMjQuMDQ3LTE4LjI4NyAgICAgYzE0LjAyOS0zLjE3NCwyNC4wNDctMTIuNjg5LDI0LjA0Ny0yNC4zOGMwLTE0LjM1My0xNC45OTMtMjUuNi0zNC4xMzMtMjUuNnMtMzQuMTMzLDExLjI0Ny0zNC4xMzMsMjUuNiAgICAgYzAsMTEuNjkxLDEwLjAxOCwyMS4yMDUsMjQuMDQ3LDI0LjM4QzI0Mi4xOTMsMjQ3LjQ5MiwyMzEuODY4LDI1NiwyMjEuOTI2LDI1NmMtMi40NDktMC4wMzQtOC4wMy0xLjA2Ny05LjU5MS00LjAwMiAgICAgYy0yLjIxLTQuMTY0LTcuMzczLTUuNzQzLTExLjUzNy0zLjUzM3MtNS43NTEsNy4zNzMtMy41MzMsMTEuNTM3YzYuNzQxLDEyLjY5OCwyMi43OTMsMTMuMDY1LDI0LjYwMiwxMy4wNjUgICAgIGMxMy4yNTIsMCwyNi4wNjktNy41NjksMzQuMTMzLTE4LjM5OGM4LjA2NCwxMC44MjksMjAuODgxLDE4LjM5OCwzNC4xMzMsMTguMzk4YzEuODI2LDAsMTguMDU3LTAuMzc1LDI0LjY1My0xMy4xNTggICAgIGMyLjE1OS00LjE5LDAuNTEyLTkuMzM1LTMuNjc4LTExLjQ5NFMzMDEuNzgxLDI0Ny44OTMsMjk5LjYxNCwyNTIuMDkyeiBNMjU2LDIyMS44NjdjLTEwLjI1NywwLTE3LjA2Ny01LjEzNy0xNy4wNjctOC41MzMgICAgIGMwLTMuMzk2LDYuODEtOC41MzMsMTcuMDY3LTguNTMzYzEwLjQxOSwwLDE3LjA2Nyw1LjA1MiwxNy4wNjcsOC41MzNDMjczLjA2NywyMTYuODE1LDI2Ni40MTksMjIxLjg2NywyNTYsMjIxLjg2N3oiIGZpbGw9IiNGRkZGRkYiLz4KCQkJPHBhdGggZD0iTTI5NC40LDE1My42YzcuMDU3LDAsMTIuOC01Ljc0MywxMi44LTEyLjhzLTUuNzQzLTEyLjgtMTIuOC0xMi44Yy03LjA1NywwLTEyLjgsNS43NDMtMTIuOCwxMi44ICAgICBTMjg3LjM0MywxNTMuNiwyOTQuNCwxNTMuNnoiIGZpbGw9IiNGRkZGRkYiLz4KCQkJPHBhdGggZD0iTTIxNy42LDE1My42YzcuMDU3LDAsMTIuOC01Ljc0MywxMi44LTEyLjhzLTUuNzQzLTEyLjgtMTIuOC0xMi44cy0xMi44LDUuNzQzLTEyLjgsMTIuOFMyMTAuNTQzLDE1My42LDIxNy42LDE1My42eiIgZmlsbD0iI0ZGRkZGRiIvPgoJCTwvZz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" /></span>
                                CHIEN & CHATS </a>
                        </li>
                    </ul>
                </nav>
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
                    <div class="content-jumbotron container col-11">
                        <h1>ALL'ASSUR</h1>
                        <h4>Courtier Assurances, du particulier au professionnel</h4>
                    </div>

                </div>
                <form class="container form-inline formsbloc col-lg-10 col-xs-12 d-none d-sm-block" method="post"
                    action="index.php?page=devis">
                    <div class="form-group formulaireP container col-10 col-xs-12">
                        <h5 class="container" style="padding: 0;"> Faîtes votre devis personnalisé</h5>
                        <span class=" custom-dropdown__select custom-dropdown__select--white col-10 ">
                            <select name="choixDevis" id="inputState" class="form-control">
                                <option value="sante">Santé</option>
                                <option value="mutuelle">Mutuelle</option>
                                <option value="prevoyance">Prévoyance Santé</option>
                                <option value="obseque">Obsèques</option>
                                <option value="dependance">Dépendance</option>
                                <option value="retraite">Retraite</option>
                                <option value="pret">Assurance Prêt</option>
                                <option value="auto">Automobile</option>
                                <option value="flotte">Flotte Automobile</option>
                                <option value="vtc">VTC</option>
                                <option value="taxi">Taxi</option>
                                <option value="moto">Moto</option>
                                <option value="habitation">Habitation</option>
                                <option value="animaux">Chiens & Chats</option>
                            </select>

                        </span>
                        <input class="btn btn-default col-2" type="submit" value="Suivant">
                    </div>
                </form>
                <div class="container container1 col-11 d-none d-sm-block">
                    <nav aria-label="breadcrumb container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page"> <span style="font-weight: 200;">
                                    Vous êtes ici : </span><a href="index.php" style="color: black;"> Accueil </a>
                                <span style="font-weight: 200;"> / </span> Professionnel <span style="font-weight: 200;">
                                    / </span> </li>
                        </ol>
                    </nav>
                </div>
                <div class="container container col-11 d-sm-none d-lg-none" style="padding: 0; margin-top: 30px;">
                    <nav aria-label="breadcrumb container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page"> <span style="font-weight: 200;">
                                    Vous êtes ici : </span><a href="index.php" style="color: black;"> Accueil </a>
                                <span style="font-weight: 200;"> / </span> Professionnel <span style="font-weight: 200;">
                                    / </span> </li>
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
                        <h4 class="card-title">Example text to build </h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
                <div class="picto1 col-lg-4" style="margin-top: 20px; margin-bottom: 20px;">
                    <img class="" src="img/s-f.png" alt="Card image cap" height="100" width="100">
                    <div class="card-body">
                        <h4 class="card-title">Example text to build </h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
                <div class="picto1 col-lg-4" style="margin-top: 20px; margin-bottom: 20px;">
                    <img class="" src="img/m-c.png" alt="Card image cap" height="100" width="100">
                    <div class="card-body">
                        <h4 class="card-title">Example text to build </h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container sac clearfix nouscontacter" id="contacterancre">
        <div class="container">
            <h3 id="Cnt col-lg-11" style="text-align: center;"> Vous désirez nous contacter ?</h3>
            <div class="row marginnouscontacter">
                <div class="picto1 col-lg-4 " style="margin-top: 20px; margin-bottom: 20px;">
                    <img class="" src="img/telephone.png" alt="Card image cap" height="100" width="100">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-default" data-toggle="modal" data-target="#exampleModal">Par
                            téléphone ?</a>
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
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-default" data-toggle="modal" data-target="#exampleModal2">Par mail ?</a>
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
                                        <p> Vous pouvez contacter un conseiller par mail. Notre agence est ouverte du
                                            lundi au vendredi de 9h00 à 18h00</p>
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
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-default" data-toggle="modal" data-target="#exampleModal3">Être
                            rappelé ?</a>
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
                                            <h6> Vous souhaitez être rappelé par un de nos conseillers, pour cela il
                                                vous suffit de remplir ce formulaire de contact. Un de vos conseiller
                                                va vous contacter par téléphone.</h6>
                                            <form id="contact-form" method="post" action="" role="form" style="margin-top: 30px;">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="firstname">Prénom<span class="blue">*</span></label>
                                                        <input id="firstname" type="text" name="firstname" class="form-control"
                                                            placeholder="Votre prénom">
                                                        <p class="comments" style="color: red; margin-top: 5px;"></p>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="name">Nom<span class="blue">*</span></label>
                                                        <input id="name" type="text" name="name" class="form-control"
                                                            placeholder="Votre Nom">
                                                        <p class="comments" style="color: red; margin-top: 5px;"></p>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="email">Email<span class="blue">*</span></label>
                                                        <input id="email" type="text" name="email" class="form-control"
                                                            placeholder="Votre Email">
                                                        <p class="comments" style="color: red; margin-top: 5px;"></p>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="phone">Téléphone<span class="blue">*</span></label>
                                                        <input id="phone" type="tel" name="phone" maxlenght="10" size="10"
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
                    <a class=" btn btn-default iconreseaux" id="moncercle" href="https://www.facebook.com/">
                        <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KPGc+Cgk8Zz4KCQk8cmVjdCB5PSIxNjAiIHdpZHRoPSIxMTQuNDk2IiBoZWlnaHQ9IjM1MiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQyNi4zNjgsMTY0LjEyOGMtMS4yMTYtMC4zODQtMi4zNjgtMC44LTMuNjQ4LTEuMTUyYy0xLjUzNi0wLjM1Mi0zLjA3Mi0wLjY0LTQuNjQtMC44OTYgICAgYy02LjA4LTEuMjE2LTEyLjczNi0yLjA4LTIwLjU0NC0yLjA4Yy02Ni43NTIsMC0xMDkuMDg4LDQ4LjU0NC0xMjMuMDQsNjcuMjk2VjE2MEgxNjB2MzUyaDExNC40OTZWMzIwICAgIGMwLDAsODYuNTI4LTEyMC41MTIsMTIzLjA0LTMyYzAsNzkuMDA4LDAsMjI0LDAsMjI0SDUxMlYyNzQuNDY0QzUxMiwyMjEuMjgsNDc1LjU1MiwxNzYuOTYsNDI2LjM2OCwxNjQuMTI4eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPGNpcmNsZSBjeD0iNTYiIGN5PSI1NiIgcj0iNTYiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
                    </a>
                    <a class="btn btn-default iconreseaux float-right" id="moncercle" href="https://www.linkedin.com/company/">
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
                            <p> Ouvert de 9h00 à 12h00 <br /> et de 14h30 à 18h30
                                <br /> Ouvert du lundi au vendredi.</p>
                        </li>

                        <h5 style="margin-top: 40px; margin-bottom: 20px;">Qui sommes nous ? </h5>
                        <li>
                            <a href="/index.php?page=a-propos"> À propos d'Allassur</a>
                        </li>
                        <li>
                            <a href="/index.php?page=conseil"> Un Conseil ?</a>
                        </li>
                        <li>
                            <a href="/index.php?page=devis"> Faire un devis </a>
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
                            <h5> Du particulier au professionnel</h5>
                        </li>

                        <li>
                            <p>5 rue Marcel Sembat, 75 009 Paris <br />
                                Téléphone : 01 23 45 05 67 <br />
                                Mail : contact@allassur.fr<br />
                                Accès : Métro 9 - Station Miromesnil <br />
                                Voiture : Porte Saint-Cloud <br />
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
                            andreajovinac.fr </a></p>
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
                            <a href="/index.php?page=conseil"> Un Conseil ?</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


    </footer>

</body>

</html>