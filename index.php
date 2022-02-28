<?php require 'routes.php' ?>
<?php
$route = new Route(
    'views/index.php', 
    'views/404.php', 
    [
        'register' =>       'views/register.php',
        'about' =>          'views/about.php',
        'data' =>           'views/data.php' ]); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Jose Antonio Galeano Cardenas">
    <meta name="description" content="Simple PHP Routing">
    <title>PHP Routing</title>
    <link href="<?php echo REQUEST_URI; ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo REQUEST_URI; ?>css/php-route.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-xxl">
                <a class="navbar-brand" href="<?php echo REQUEST_URI; ?>">
                    <img src="<?php echo REQUEST_URI; ?>imgs/logo.png" class="logo" alt="php-route" title="php-route" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo REQUEST_URI; ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo REQUEST_URI; ?>about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo REQUEST_URI; ?>data/var1:abc/var2:123">Data</a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
    </header>
    <div class="container-xxl">
        <?php $route->page(); ?>
    </div>
    <footer class="footer">
        <div class="container">
            <span class="text-muted">Place sticky footer content here.</span>
        </div>
    </footer>
</body>

</html>