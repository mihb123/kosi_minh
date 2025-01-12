<?php
class WishlistController
{
    function index()
    {
        $productRepo = new ProductRepo;
        $products = $productRepo->getAll();

        require 'view/viewWishlist.php';
    }
}