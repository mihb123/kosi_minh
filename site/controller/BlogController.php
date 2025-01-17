<?php
class BlogController
{
    function index()
    {
        $blogRepo = new BlogRepo;
        $blogs = $blogRepo->getAll();
        require 'view/viewBlog.php';
    }

    function detail()
    {
        $id = $_GET['id'];
        $blogRepo = new BlogRepo;
        $blog = $blogRepo->find($id);
        require 'view/viewBlogDetail.php';
    }
}