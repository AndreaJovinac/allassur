<!-- Menu Standard !-->
<nav class="navbar navbar navigation2 d-none d-sm-none d-none d-lg-block d-xl-none d-none d-xl-block">
    <div class="logo float-left">
        <a href="./index
.php" class="navbar-brand">
            <img src="./img/logo.png" height="70" width="260" alt="" />
        </a>
    </div>
    <ul class="nav justify-content-end ppta col-6 float-right" style="margin-top: 50px;">
        <li class="nav-item">
            <a id="partic" class="nav-link <?php if($ctrl->isParticulier()) echo('active'); ?>" href="./index
.php?page=home">
                PARTICULIER
                <?php if($ctrl->isParticulier()) echo('<hr style="border-bottom: 3px solid #a34d1f; margin: 6px 0;">'); ?>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if($ctrl->isPro()) echo('active'); ?>" id="professionel" href="./index
.php?page=professionnel"> PROFESSIONNEL
                <?php if($ctrl->isPro()) echo('<hr style="border-bottom: 3px solid #a34d1f; margin: 6px 0;">'); ?>    
            </a>
        </li>
    </ul>
</nav>
<!-- Menu Mobile !-->
<nav class="navbar navbar navigation2-2 d-lg-none">
    <div class="logo col-12" style="text-align: center; margin-bottom: 30px; padding: 0;">
        <a href="" class="navbar-brand">
            <img src="./img/logo.png" height="70" width="220" alt="" />
        </a>
    </div>
    <ul class="nav nav-pills nav-fill col-12" style="padding: 0;">
        <li class="nav-item">
            <a class="nav-link proffpage <?php if($ctrl->isParticulier()) echo('active'); ?>"  href="./index
.php?page=home">PARTICULIER</a>
        </li>
        <li class="nav-item">
            <a class="nav-link proffpage <?php if($ctrl->isPro()) echo('active'); ?>" href="./index
.php?page=professionnel">PROFESSIONNEL</a>
        </li>
        <li class="nav-item">
            <a class="nav-link proffpage <?php if($ctrl->isDevis()) echo('active'); ?>"  href="./index
.php?page=devis<?php if($ctrl->isPro()) echo('2'); ?>">FAIRE UN DEVIS</a>
        </li>
    </ul>
</nav>