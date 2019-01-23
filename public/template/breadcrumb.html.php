<div class="d-none d-sm-block">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                    <span style="font-weight: 200;">Vous êtes ici : </span>
                    <?php if($ctrl->isParticulier()) echo('Accueil'); 
                    
                            else echo('Accueil'); 
                            ; 
                            ; ?>         
                    <span style="font-weight: 200;"> > </span> 
                    <a href="index.php?page=<?php echo($ctrl->page) ?>" style="color: black;"> <?php echo($ctrl->title); ?> </a>
                    <span style="font-weight: 200;"> > </span>
                </li>
        </ol>
    </nav>
</div>