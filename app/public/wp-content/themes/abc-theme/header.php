<?php
function loadAssetsFolder($url)
{
  echo get_template_directory_uri() . "/assets/" . $url;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>ABC</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="fragment" content="!" />
  <meta name="HandheldFriendly" content="true" />
  <meta name="MobileOptimized" content="320" />
  <meta http-equiv="cleartype" content="on" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover, shrink-to-fit=no" />
  <meta name="robots" content="index, follow" />
  <meta name="description" content="ABC Landing page" />
  <meta name="keywords" content="abc website, landing page" />
  <meta name="msapplication-tap-highlight" content="no" />
  <!-- Social: Facebook / Open Graph -->
  <meta property="og:title" content="ABC" />
  <meta property="og:image" content="" />
  <meta property="og:image:width" content="600" />
  <meta property="og:image:height" content="315" />
  <meta property="og:description" content="ABC Landing page" />
  <meta property="og:url" content="" />
  <meta property="og:type" content="website" />
  <!-- Social: Twitter -->
  <meta name="twitter:title" content="ABC" />
  <meta name="twitter:description" content="ABC Landing page" />
  <meta name="twitter:image:src" content="" />
  <!-- Social: Google+ / Schema.org  -->
  <meta itemprop="name" content="ABC" />
  <meta itemprop="description" content="ABC Landing page" />
  <meta itemprop="image" content="" />
  <link rel="shortcut icon" href="/favicons/favicon.ico" />
  <!-- No Google Translate toolbar -->
  <meta name="google" content="notranslate" />
  <!-- Disable tap highlight on IE-->
  <meta name="msapplication-tap-highlight" content="no" />
  <meta name="msapplication-TileColor" content="#da532c" />
  <!-- Web Application Manifest-->

  <!-- Add to homescreen for Chrome on Android-->
  <meta name="mobile-web-app-capable" content="yes" />
  <meta name="application-name" content="Infinity HTML" />
  <link rel="icon" type="image/png" sizes="32x32" href="/public/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="/public/favicon-16x16.png" />
  <!-- Add to homescreen for Safari on iOS-->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  <meta name="apple-mobile-web-app-title" content="Infinity HTML" />
  <link rel="apple-touch-icon" sizes="180x180" href="/public/apple-touch-icon.png" />
  <link rel="mask-icon" href="/public/safari-pinned-tab.svg" color="#5bbad5" />
  <!-- Color the status bar on mobile devices-->
  <meta name="theme-color" content="#eb272f" />
  <!-- Prefetch DNS for external assets -->
  <link rel="dns-prefetch" href="//fonts.googleapis.com" />
  <link rel="dns-prefetch" href="//www.google-analytics.com" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="<?php loadAssetsFolder('styles/tailwind.css'); ?>" rel="stylesheet" />
  <link href="<?php loadAssetsFolder('styles/vendor.css'); ?>" rel="stylesheet" />
  <link href="<?php loadAssetsFolder('styles/common.css'); ?>" rel="stylesheet" />
  <link href="<?php loadAssetsFolder('styles/index.css'); ?>" rel="stylesheet" />
  <?php wp_head(); ?>
</head>
<body>

<?php get_template_part('template-parts/navbar'); ?>
</body>
</html>
