<?php include 'config.php' ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="de-DE">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">

    <link rel="apple-touch-icon" sizes="256x256" href="/apple-touch-icon.png">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <title><?php echo TITLE; ?></title>

    <style>
        body {
            color: #333;
            line-height: 1.3;
            background-color: #eee;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif }
        main {
            max-width: 800px;
            margin: 0 auto;
            padding: 24px; }
        h1 { margin-top: 0; }
        a {
            color: #333;
            text-decoration: none; }
        a:hover { border-bottom: 1px dashed #333; }
        .second-language {
            margin-top: 12px;
            font-size: 0.85rem; }
        .second-language,
        .second-language a { color: #888; }
        .second-language a:hover { border-bottom: 1px dashed #888; }
    </style>
</head>

<body>
<main>
    <h1><?php echo DOMAIN; ?></h1>
    <div>
        Die Domain <i><?php echo DOMAIN; ?></i> ist zur Zeit nicht in Verwendung. Sollten Sie an der Domain
        interessiert sein, kontaktieren Sie mich: <a href="mailto:<?php echo MAIL; ?>"><?php echo MAIL; ?></a>.
    </div>
    <div class="second-language">
        The domain <i><?php echo DOMAIN; ?></i> is currently not in use. If you are interested in the domain,
        contact me: <a href="mailto:<?php echo MAIL; ?>"><?php echo MAIL; ?></a>.
    </div>
</main>
</body>
</html>
