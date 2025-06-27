<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<header class="p-3 text-bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <h1>
                    <a href="<?= base_url('index.php') ?>" class="nav-link px-2 text-white">
                        LOGO
                    </a>
                </h1>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="<?= base_url('index.php') ?>" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                <?php if(isset($_SESSION['auth_user'])):?>
                <li><a href="#" class="nav-link px-2 text-white"><?=$_SESSION['auth_user']['user_fname']?></a></li>
                <?php endif;?>
            </ul>

            <div class="text-end">
                <a href="<?= base_url('login.php') ?>" class="btn btn-outline-light me-2">Login</a>
                <a href="<?= base_url('register.php') ?>" class="btn btn-warning">Sign-up</a>
                <form action="" method="post">
                    <button type="submit" name="logout-btn" class="btn btn-warning">Logout</button>
                </form>
            </div>
        </div>
    </div>
</header>