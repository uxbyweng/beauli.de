<!DOCTYPE html>
<html itemscope="" itemtype="https://schema.org/productionCompany" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <title><?php echo isset($metaTitle) ? $metaTitle : "BEAULI academy | Breast Lipotransfer Live Surgery"; ?></title> 
    <meta name="description" content="<?php echo isset($metaDescription) ? $metaDescription : "22th BEAULI Academy on April 23, 2026, with workshops, lectures, and scientific insights into breast lipotransfer, including OP hospitation, in Birkenwerder."; ?>">
    <meta name="keywords" content="breast augmentation, breast reconstruction, lipotransfer, fat grafting, autologous fat, transplantation, wal, beauli, academy">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/images/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">

    <meta property="og:locale" content="de_DE">
    <meta property="og:site_name" content="BEAULI™ academy | Breast Lipotransfer Live Surgery">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/">
    <meta property="og:title" content='BEAULI™ academy | Breast Lipotransfer Live Surgery'>
    <meta property="og:description" content="22th BEAULI™ Academy on April 23, 2026, with workshops, lectures, and scientific insights into breast lipotransfer, including OP hospitation, in Birkenwerder.">
    
    <?php 
    if (dirname($_SERVER['SCRIPT_NAME']) == '/science') { 
        echo '<link rel="canonical" href="https://www.park-klinik-birkenwerder.de/science" />';
    } else { 
        $dir = dirname($_SERVER["SCRIPT_NAME"]);
        echo '<link rel="canonical" href="https://www.beauli.de' . $dir . ($dir != '/' ? '/' : '') . '" />';
    }
    ?>
    
    <style title="text/css" media="screen">
       @import url("/css/cookieconsent.min.css");
       @import url("/css/styles.css");
    </style>
</head>
<body>
<header class="bg--white">
    <div class="container">
        <div class="row pt5--xs pb10--xs pt20--sm pb15--sm">
            <div class="col-md-5 col-sm-12 col-xs-12">
                <a href="/"><img src="/images/beauli_wal_academy_humanmed.gif" class="img-responsive" alt="Logo: BEAULI™ | WAL academy by HumanMed"></a>
            </div>
            <div class="hdheadline offset-lg-1 col-md-6 col-sm-12 col-xs-12 text-left d-none d-sm-inline">
                22th BEAULI<sup>™</sup> academy - <br>
                April 23, 2026 | Birkenwerder
            </div>
        </div>
    </div>
</header>
<?php include( $_SERVER[ "DOCUMENT_ROOT" ] . "/include/nav.php" ); ?>