<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site</title>

    <link rel="stylesheet" href="/resources/pnotify/pnotify.css" >
    <link rel="stylesheet" href="/resources/pnotify/pnotify.brighttheme.css" >
    <link rel="stylesheet" href="/resources/pnotify/pnotify.buttons.css" >
    <link rel="stylesheet" href="/resources/pnotify/pnotify.mobile.css" >

    <link rel="stylesheet" href="/site.css">
</head>
<body>
    <header id="header">
        <h1>Bem vindo ao NOSSO SITE</h1>
    </header>

    <ul id="nav">
        <?php foreach($data['pages'] as $item) : ?>
            <li><a href="<?php echo $item['url'] ?? '/'?>"><?php echo $item['title']?></a></li>
        <?php endforeach; ?>
        <li><a href="/contato">Contato</a></li>
    </ul>

    <main id="content">
        <h1> <?php include $content; ?></h1>
    </main>

    <p id="footer"><small><?php echo date('Y'); ?> - todos os direitos reservados</small></p>

    <script src="/js/jquery.min.js"></script>
    <script src="/resources/pnotify/pnotify.js" ></script>
    <script src="/resources/pnotify/pnotify.mobile.js" ></script>
    <script src="/resources/pnotify/pnotify.buttons.js" ></script>
    <script>
        <?php flash(); ?>
    </script>

</body>
</html>
