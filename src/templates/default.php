<?php
/**
 * User: Pandraghon
 * Date: 08/06/2016
 * Time: 15:41
 */

?>
<!DOCTYPE html>
<html lang="<?= Configure::read('app')['lang'][0] ?>">
<head>
    <meta charset="<?= Configure::read('app')['encoding'] ?>">
    <title><?= Configure::read('app')['name'] ?></title>
    <meta name="author" content="<?= Configure::read('meta')['author'] ?>" />
    <meta name="description" content="<?= Configure::read('meta')['description'] ?>" />
    <meta name="keywords" content="<?= implode(', ', Configure::read('meta')['keywords']) ?>" />

    <!-- Twitter Card Data -->
    <?php foreach(Configure::read('meta')['twitter'] as $name => $content): ?>
        <meta name="twitter:<?= $name ?>" content="<?= $content ?>" />
    <?php endforeach; ?>

    <!-- Open Graph Data -->
    <?php foreach(Configure::read('meta')['og'] as $name => $content): ?>
        <meta name="og:<?= $name ?>" content="<?= $content ?>" />
    <?php endforeach; ?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="/css/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <link href="/css/print.css" media="print" rel="stylesheet" type="text/css" />
    <link href="/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/css/font-awesome/font-awesome.css" rel="stylesheet" type="text/css" />
    <!--[if IE]>
    <link href="/css/ie.css" media="screen, projection" rel="stylesheet" type="text/css"/>
    <![endif]-->
    <link href="/img/icon.ico" rel="icon" type="image/x-icon" />
</head>
<body>

<canvas id="matrix"></canvas>

<div class="flash-container">
    <?php $debug->printDebug(); ?>
</div>

<div class="lang-container">

</div>

<?php include_once(VIEW_DIR . 'page/' . $viewfile); ?>

<!--<footer>
    <div class="row">
        <div class="col-lg-12">
            <p>Made by <a href="http://cv.glaucus-pocus.net" rel="nofollow">Sapiens Pandraghon</a>. Contact him at <a href="mailto:pandraghon@outlook.com">pandraghon@outlook.com</a>.</p>
            <p>Icons from <a href="http://fortawesome.github.io/Font-Awesome/" rel="nofollow">Font Awesome</a>. Web fonts from <a href="http://www.google.com/webfonts" rel="nofollow">Google</a>.</p>
        </div>
    </div>
</footer>-->

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap-sprockets.js"></script>
<?php include_once(PLUGIN_DIR . 'analytics.php'); ?>
</body>
</html>
