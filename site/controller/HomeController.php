<?php
class HomeController
{
    function index()
    {
        $productRepo = new ProductRepo;
        $products = $productRepo->getAll();

        $categoryRepo = new CategoryRepo;
        $categories = $categoryRepo->getAll();

        require 'view/viewHome.php';
    }
}