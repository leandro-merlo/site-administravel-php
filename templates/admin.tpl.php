<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" >
    <!-- Trix CSS -->
    <link rel="stylesheet" href="/resources/trix/trix.css" >

    <link rel="stylesheet" href="/resources/pnotify/pnotify.css" >
    <link rel="stylesheet" href="/resources/pnotify/pnotify.brighttheme.css" >
    <link rel="stylesheet" href="/resources/pnotify/pnotify.buttons.css" >
    <link rel="stylesheet" href="/resources/pnotify/pnotify.mobile.css" >
    <link rel="stylesheet" href="/css/font-awesome.min.css" >

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
                        <a href="/admin" class="nav-link"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/users" class="nav-link"><i class="fa fa-user"></i> Usuários</a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/pages" class="nav-link"><i class="fa fa-file-text-o"></i> Páginas</a>
                    </li>                    
                </ul>
            </div>
            <div id="content" class="col-10">
                <?php include $content; ?>            
            </div>
        </div>
    </div>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js" ></script>
    <script src="/resources/trix/trix.js" ></script>
    <script src="/resources/pnotify/pnotify.js" ></script>
    <script src="/resources/pnotify/pnotify.mobile.js" ></script>
    <script src="/resources/pnotify/pnotify.buttons.js" ></script>
    <script>

        const menu = document.querySelectorAll('#main-menu .nav-link');
        menu.forEach(element => {
            const pathname = window.location.pathname.replace(/\/$/, "");;
            var href = element.getAttribute('href');
            if (pathname === '/admin') {
                if (pathname === href) {
                    element.className = element.className + " active";
                }
            } else {
                if (pathname.startsWith(href) && href !== '/admin') {
                    element.className = element.className + " active";
                }                
            }
        });


        document.addEventListener('trix-attachment-add', function(event){
            const attachment = event.attachment;
            if (!attachment.file) {
                return;
            }
            const form = new FormData();
            form.append('file', attachment.file);
            $.ajax({
                url: '/admin/upload/image',
                data: form,
                method: 'POST',
                contentType: false,
                processData: false,
                xhr: function() {
                    const xhr = $.ajaxSettings.xhr();
                    xhr.upload.addEventListener('progress', function(e){
                        let progress = e.loaded / e.total * 100;
                        attachment.setUploadProgress(progress);
                    });
                    return xhr;
                }
            }).done(function(response){
                attachment.setAttributes({
                    url: response,
                    href: response
                })
            })
        })
        <?php flash() ?>

        const confirmEl = document.querySelector('.confirm');
        if (confirmEl) {
            confirmEl.addEventListener('click', function(e){
                e.preventDefault();
                if (confirm('Deseja realmente fazer isso?')) {
                    window.location.href = e.target.getAttribute('href');
                }
            });
        }
    </script>
  </body>
</html>