<?php global $c; ?>
<div class="text-center my-3 header position-relative container-fluid"">
        <img src=" image/h1_banner-2_1296x.webp" alt="banner2">
    <div class="postion-absolute content">
        <h1><?= ucfirst($c) ?></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= ucfirst($c) ?></li>
            </ol>
        </nav>

    </div>
</div>