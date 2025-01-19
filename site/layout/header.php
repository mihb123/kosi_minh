<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kosi - Furniture & Home Decor</title>
    <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- kosi icon -->
    <link rel="stylesheet" href="asset/kosi-icon/font-icon.css">

    <!-- font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/nouislider@15.7.0/dist/nouislider.min.css" rel="stylesheet" />

    <!-- main css -->
    <link rel="stylesheet" href="asset/style.css">

</head>

<body>
    <header>
        <div style="height: 60px; width: 100%;"></div>
        <?php
        $message = '';
        $div_class = '';
        if (!empty($_SESSION['success'])) {
            $message = $_SESSION['success'];
            unset($_SESSION['success']);
            $div_class = 'success d-md-block';
        } else if (!empty($_SESSION['error'])) {
            $message = $_SESSION['error'];
            unset($_SESSION['error']);
            $div_class = 'danger d-md-block';
        };
        ?>
        <div class="d-none alert alert-<?= $div_class ?>"><?= $message ?>
        </div>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md bg-body-tertiary fixed-nav">
            <div class="container-lg d-flex align-items-center">
                <!-- Logo -->
                <a class="navbar-brand" href="?c=home">
                    <img src="image/logo.svg" alt="Logo" width="100">
                </a>

                <!-- Toggler Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar Links -->
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav align-items-start">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="?c=home">
                                <i class="bi bi-house-door me-1"></i> Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?c=product">
                                <i class="bi bi-box me-1"></i> Product
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?c=blog">
                                <i class="bi bi-journal-text me-1"></i> Blog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?c=contact">
                                <i class="bi bi-envelope me-1"></i> Contact
                            </a>
                        </li>
                    </ul>

                    <div class="ms-auto d-flex header_icon">
                        <!-- sign in -->
                        <?php if (!empty($_SESSION['name'])) { ?>
                        <a class="i" type="button" href="?c=customer&a=show" ?>
                            <i class="icon kosi-icon- kosi-icon-user fs-20"></i>
                        </a>
                        <?php } else { ?>
                        <a class="i" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSignIn"
                            aria-controls="offcanvasSignIn">
                            <i class="icon kosi-icon- kosi-icon-user fs-20"></i>
                        </a>
                        <?php } ?>


                        <!-- Search Form -->
                        <a class="i" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                            aria-controls="offcanvasTop">
                            <i class="icon kosi-icon- kosi-icon-search fs-20"></i>
                        </a>
                        <?php
                        if (!empty($_SESSION['wishlist'])) {
                            if (!empty($_COOKIE['wishlist'])) {
                                $_SESSION['wishlist'] = $_COOKIE['wishlist'];
                            }
                            $Wlist = unserialize($_SESSION['wishlist']);
                        }


                        if (empty($Wlist)) {
                            $countWishlist = 0;
                            $Wlist = [];
                        } else {
                            $countWishlist = count($Wlist);
                        }

                        ?>
                        <!-- wishlist -->
                        <a href="?c=wishlist" class="position-relative">
                            <i class="icon kosi-icon-heart fs-23"></i>
                            <span class="count"><?= $countWishlist ?></span>
                        </a>

                        <!-- cart-icon -->
                        <a class="position-relative" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#cartOffcanvas" aria-controls="cartOffcanvas">
                            <i class="icon icon-cart kosi-icon-cart fs-23"></i>
                            <span class="countCart"></span>
                        </a>

                    </div>
                </div>
            </div>
        </nav>
        <?php require 'layout/cart.php' ?>

        <!-- search -->
        <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel"
            style="height:15vh !important;">
            <div class="offcanvas-header">

                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form action="?c=product" method="post" class="justify-content-center d-flex">
                    <input name="search" type="text" placeholder="Search name product"
                        class="form-control search-input me-2 d-flex" style="width:500px !important;">
                    <button class="align-items-center d-flex" type="submit"
                        style="border: none; background-color: unset;">
                        <i class="icon kosi-icon- kosi-icon-search fs-20"></i>
                    </button>
                </form>
            </div>
        </div>

        <!-- Offcanvas: Sign In -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasSignIn" aria-labelledby="offcanvasSignInLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasSignInLabel">Sign In</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form action="?c=auth&a=login" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" autocomplete="username"
                            placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                            autocomplete="current-password">
                    </div>
                    <a href="#" class="text-decoration-none mb-2 d-block" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasForgotPassword" aria-controls="offcanvasForgotPassword">Forgot
                        password</a>
                    <button type="submit" class="btn btn-dark w-100 ">Sign In</button>
                </form>
                <div class="justify-content-between row mt-3">
                    <div class="col-6" style="padding-left: 0px;">
                        <button href="#" class="text-decoration-none btn btn-outline-dark w-100" type="button"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasCreateAccount"
                            aria-controls="offcanvasCreateAccount">Create
                            account</button>
                    </div>
                    <div class="col-6">
                        <button type="button" class="btn btn-outline-primary w-100 ">
                            <i class="bi bi-google me-1"></i>Google

                        </button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Offcanvas: Create Account -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCreateAccount"
            aria-labelledby="offcanvasCreateAccountLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasCreateAccountLabel">Create Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form action="?c=customer&a=register" method="post">
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" name="fullname" placeholder="Full Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" autocomplete="username" name="email"
                            placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="newPassword" class="form-label">Password</label>
                        <input type="password" name="newPassword" class="form-control" autocomplete="new-password"
                            id="newPassword" placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <label for="re-Password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" autocomplete="new-password" id="rePassword"
                            placeholder="Confirm Password">
                    </div>
                    <button type="submit" class="btn btn-dark w-100">Create Account</button>
                </form>
                <div class="text-center mt-3">
                    <span>Or</span>
                </div>
                <div class="text-center mt-2">
                    <button type="button" class="btn btn-outline-primary w-100">
                        <i class="bi bi-google"></i> Sign up with Google
                    </button>
                </div>
            </div>
        </div>

        <!-- Offcanvas: Forgot Password -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasForgotPassword"
            aria-labelledby="offcanvasForgotPasswordLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasForgotPasswordLabel">Forgot Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form>
                    <div class="mb-3">
                        <label for="forgotEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="forgotEmail" placeholder="Enter your email">
                    </div>
                    <button type="submit" class="btn btn-dark w-100">Submit</button>
                </form>
            </div>
        </div>
    </header>