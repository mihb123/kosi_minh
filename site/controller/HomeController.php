<?php
class HomeController
{
    function index()
    {
        $productRepo = new ProductRepo;
        $products = $productRepo->getAll();

        require 'view/viewHome.php';
    }
}
