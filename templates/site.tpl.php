<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site</title>
    <link rel="stylesheet" href="/site.css">
</head>
<body>
    <header id="header">
        <h1>Bem vindo ao NOSSO SITE</h1>
    </header>

    <ul id="nav">
        <li><a href="/">Home</a></li>
        <li><a href="/contato">Contato</a></li>
    </ul>

    <main id="content">
        <h1> <?php include $content; ?></h1>
    </main>

    <p id="footer"><small><?php echo date('Y'); ?> - todos os direitos reservados</small></p>
</body>
</html>
