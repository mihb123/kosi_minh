<?php
class HomeController
{
    function index()
    {
        $productRepo = new ProductRepo;
        $products = $productRepo->fetch();

        require 'view/viewHome.php';
    }

    function search()
    {
        $search = $_GET['search'];
    }
}