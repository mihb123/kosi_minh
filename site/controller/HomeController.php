<?php
class HomeController
{
    function index()
    {

        $productRepo = new ProductRepo;
        $products = $productRepo->getAll();

        $categoryRepo = new CategoryRepo;
        $categories = $categoryRepo->getAll();

        $blogRepo = new BlogRepo;
        $blogs = $blogRepo->getAll();

        require 'view/viewHome.php';
    }
}
