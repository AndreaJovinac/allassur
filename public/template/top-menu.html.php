<nav class="navbar navbar navigation d-none d-lg-block" <?php if($ctrl->isPro()) echo('style="background-color: #a34d1f;"'); ?>>
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
                    <a class="nav-link" href="/Allassur/index.php?page=devis<?php if($ctrl->isPro()) echo('2'); ?>"> Faire un devis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacterancre" id="contactnoir"> Contact</a>
                </li>
            </ul>
    </div>
</nav>
        