<?php

class ProductController
{
    function index()
    {
        $cond = [];
        $category_id = $_GET['category_id'] ?? '';
        if ($category_id) {
            $cond = [
                'category_id' => [
                    'type' => '=',
                    'val' => $category_id
                ]
            ];
        }


        $productRepo = new ProductRepo();
        $products = $productRepo->getBy($cond);

        $categoryRepo = new CategoryRepo();
        $categories = $categoryRepo->getAll();

        $colorRepo = new ColorRepo();
        $colors = $colorRepo->getAll();
        $colorId = $_GET['colorId'] ?? '';
        echo $colorId;
        require 'view/viewProduct.php';
    }

    function detail()
    {
        $id = $_GET['id'];
        $productRepo = new ProductRepo();
        $product = $productRepo->find($id);

        $category_id = $product->getCategoryId();
        $array_conds = [
            'category_id' => [
                'type' => '=',
                'val' => $category_id
            ],
            'id' => [
                'type' => '!=',
                'val' => $id
            ]

        ];
        $relatedProducts = $productRepo->getBy($array_conds, [], null, null);

        require 'view/viewProductDetail.php';
    }

    // function filter()
    // {
    //     $id = $_POST['selectedColor'];

    //     $colorRepo = new ColorRepo();
    //     $Color = $colorRepo->find($id);
    //     $products = $Color->getProductByColor();
    //     require 'view/viewProduct.php';
    // }
}
