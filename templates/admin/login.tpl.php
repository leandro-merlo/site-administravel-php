<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" >

    <link rel="stylesheet" href="/resources/pnotify/pnotify.css" >
    <link rel="stylesheet" href="/resources/pnotify/pnotify.brighttheme.css" >
    <link rel="stylesheet" href="/resources/pnotify/pnotify.buttons.css" >
    <link rel="stylesheet" href="/resources/pnotify/pnotify.mobile.css" >
    <link rel="stylesheet" href="/css/font-awesome.min.css" >

    <link rel="stylesheet" href="/css/style.css" >

    <title>Login</title>
  </head>
  <body class="d-flex flex-column">
    <div id="header">
        <nav class="navbar navbar-dark bg-dark">
            <span>
                <a href="" class="navbar-brand">Admin</a>
                <span class="navbar-text">Painel Administrativo</span>            
            </span>
        </nav>
    </div>
    <div id="main">
        <div class="row justify-content-center">
            <div id="content" class="col-3 align-self-center">
                <?php include $content; ?>            
            </div>
        </div>
    </div>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js" ></script>
    <script src="/resources/pnotify/pnotify.js" ></script>
    <script src="/resources/pnotify/pnotify.mobile.js" ></script>
    <script src="/resources/pnotify/pnotify.buttons.js" ></script>
    <script>
        <?php flash() ?>
    </script>
  </body>
</html>