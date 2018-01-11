<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" >
    <head>
    <link rel="dns-prefetch" href="//ajax.googleapis.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->Html->charset() ?>
    <title>
        Ripped From the Roots
        <?php if (isset($titleForLayout)): ?>
            - <?= $titleForLayout ?>
        <?php else: ?>
        <?php endif ?>
    </title>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700" rel="stylesheet">
    <?php
        echo $this->Html->meta('icon');
        echo $this->fetch('meta');
        echo $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css');
        echo $this->Html->css('style');
        echo $this->fetch('css');
    ?>
    <?php if ($this->request->getParam('action') == 'home'): ?>
        <?php
            $bg = ['bg-01.jpg'];
            $i = rand(0, count($bg)-1);
            $selectedBg = "$bg[$i]";
        ?>
        <style type="text/css">
            body{
                background-image: url(img/backgrounds/<?php echo $selectedBg; ?>);
                background-repeat: no-repeat;
                background-position: center center;
                background-attachment: fixed;
                background-size: cover;
            }
        </style>
    <?php endif ?>
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />
    <!-- jquery 3.1.1 min files, checks if CDN is down, deploys local file if necessary -->
    <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"></script>
    </script>
    <script>window.jQuery || document.write('<script src="/js/jquery-3.1.1.min.js">\x3C/script>')</script>

    <!-- bootstrap.js min files, checks CDN, deploys local file if CDN is down -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous">
    </script>
    <script>window.Tether || document.write('<script src="js/tether.min.js">\x3C/script>')</script>
    <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous">
    </script>
    <script>$.fn.modal || document.write('<script src="js/bootstrap.min.js">\x3C/script>')</script>
</head>
<body>
    <?= $this->fetch('content') ?>
    <noscript>
        <div id="noscript">
            JavaScript is currently disabled in your browser.
            For full functionality of this website, JavaScript must be enabled.
            If you need assistance, <a href="http://www.enable-javascript.com/" target="_blank">Enable-JavaScript.com</a> provides instructions.
        </div>
    </noscript>

    <!-- bootstrap css local fallback -->
    <div id="bootstrapCssTest" class="hidden-xs-up"></div>
    <script>
        $(function() {
            if ($('#bootstrapCssTest').is(':visible')) {
                $("head").prepend('<link rel="stylesheet" href="/css/bootstrap.min.css">');
            }
        });
    </script>
</body>
</html>
