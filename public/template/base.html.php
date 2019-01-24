<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
        <link rel="icon" type="image/png" href="./img/favicon-02.png" />
        <link rel="stylesheet" href="public/css/bootstrap.min.css" >
        <link rel="stylesheet" href="public/css/style.css" />
        <base href="/Allassur/">
        <title>All'Assur : Courtier en assurances - <?php echo($ctrl->title); ?></title>

    </head>
    <body>
        <?php require(__DIR__.'/top-menu.html.php'); ?>
        <div class="container sac">
            <?php require(__DIR__.'/header.html.php'); ?>
            <div class="container">
                <div class="row">

                    <?php if($ctrl->isParticulier()) require(__DIR__.'/menu-particulier.html.php'); ?>
                    <?php if($ctrl->isPro()) require(__DIR__.'/menu-pro.html.php'); ?>

                    <div class="jumbotron jumbotron2 container d-none d-sm-block">
                        <div class="content-jumbotron container col-11" style="margin-top: 20px;">
                            <h1><b> ALL'ASSUR</b></h1>
                            <h4>Courtier en assurances, du particulier au professionnel</h4>
                        </div>
                    </div>
                    <?php if(!$ctrl->isDevis()) require(__DIR__.'/search.html.php'); ?>
                </div>
            </div>
            <div class="container <?php if(!$ctrl->isDevis()) echo('corps'); ?> col-11"
            <?php if($ctrl->isDevis()) echo('style="margin-top:30px"'); ?>>
                <div class="row">
                    <?php require(__DIR__.'/breadcrumb.html.php');?>
                </div>
                <div class="row">
                    <?php require(__DIR__.'/../views/'.$ctrl->page.'.html.php');?>
                </div>
            </div>
        </div>
        <?php if(!$ctrl->isDevis()) require(__DIR__.'/pre-footer.html.php'); ?>
        <?php require(__DIR__.'/footer.html.php'); ?>

        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
        <script src="public/js/popper.min.js"></script>
        <script type="text/javascript" src="public/js/script.js"></script>        
    </body>
</html>