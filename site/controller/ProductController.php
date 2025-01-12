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

        $search = $_POST['search'] ?? '';
        if ($search) {
            $cond = [
                'name' => [
                    'type' => 'like',
                    'val' => "%$search%"
                ]
            ];
        }

        $productRepo = new ProductRepo();
        $products = $productRepo->getBy($cond);

        // filter nhiều điều kiện
        $cond = [];
        $minPrice = $_GET['minPrice'] ?? '';
        $maxPrice = $_GET['maxPrice'] ?? '';
        if ($maxPrice) {
            $cond[] = [
                'sale_price' => [
                    'type' => 'BETWEEN',
                    'val' => "$minPrice AND $maxPrice"
                ]
            ];
        }

        $colorId = $_GET['colorId'] ?? '';
        if ($colorId) {
            $cond[] = [
                'color_id' => [
                    'type' => '=',
                    'val' => $colorId
                ]
            ];
        }

        $materialId = $_GET['materialId'] ?? '';
        if ($materialId) {
            $cond[] = [
                'material_id' => [
                    'type' => '=',
                    'val' => $materialId
                ]
            ];
        }

        $categoryRepo = new CategoryRepo();
        $categories = $categoryRepo->getAll();

        $colorRepo = new ColorRepo();
        $colors = $colorRepo->getAll();

        $materialRepo = new MaterialRepo();
        $materials = $materialRepo->getAll();

        if ($cond) {
            $skuRepo = new viewSkuRepo();
            $Skus = $skuRepo->getByConds($cond);
            $skus = $skuRepo->removeDup($Skus);
            $products = [];
            foreach ($skus as $sku) {
                $productId = $sku->getProductId();
                $products[] = $productRepo->find($productId);
            }
        }

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
    // $test = $search;
    //     require 'view/viewTest.php';    
}
