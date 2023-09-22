<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/libs/bootstrap-5.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php include_once PARTS_DIR . 'notification.php' ?>
<header id="navigation">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-between">
            <?php if (!empty($mainFields['navigation']['logo'])): ?>
                <div class="col" id="logo">
                    <a href="/">
                        <img src="<?= IMAGES_URI . $mainFields['navigation']['logo'] ?>"/>
                    </a>
                </div>
            <?php endif; ?>
            <div class="col d-flex justify-content-end">
                <nav class="nav">
                    <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" style="color: white" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" style="color: black" href="/admin/products">All Products</a></li>
                            <li><a class="dropdown-item" style="color: black" href="/admin/products/create">Create Product</a></li>
                        </ul>
                    </div>
                    <!--                    <a href="/admin/content" class="nav-link">Content</a>-->
                    <a href="#" style="color: white" class="nav-link disabled">|</a>
                    <a href="/" style="color: white" class="nav-link">Back to Site</a>
                    <a href="/logout" style="color: white" class="nav-link">Log Out</a>
                </nav>
            </div>
        </div>
    </div>
</header>