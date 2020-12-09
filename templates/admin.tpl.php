<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" >
    <!-- Trix CSS -->
    <link rel="stylesheet" href="/resources/trix.css" >

    <link rel="stylesheet" href="/css/style.css" >

    <title>Paine Administrativo</title>
  </head>
  <body class="d-flex flex-column">
    <div id="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="" class="navbar-brand">Admin</a>
            <span class="navbar-text">Painel Administrativo</span>
        </nav>
    </div>
    <div id="main">
        <div class="row">
            <div class="col">
                <ul id="main-menu" class="nav flex-column nav-pills bg-secondary text-white p2">
                    <li class="nav-item">
                        <span class="nav-link text-white-50"><small>MENU</small></span>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/users" class="nav-link">Usuários</a>
                    </li>
                    <li class="nav-item">
                        <a href="/pages" class="nav-link">Páginas</a>
                    </li>                    
                </ul>
            </div>
            <div id="content" class="col-10">
                <?php include $content; ?>            
            </div>
        </div>
    </div>

    <script src="/js/jquery.slim.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js" ></script>
    <script src="/resources/trix.js" ></script>
    <script>
        <?php flash() ?>
    </script>
  </body>
</html>