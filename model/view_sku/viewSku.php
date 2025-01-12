<?php

class viewSku
{
    protected $skuId;
    protected $productId;
    protected $productName;
    protected $productDescription;
    protected $productQty;
    protected $productCreatedDate;
    protected $categoryId;
    protected $discountId;
    protected $productFeaturedImage;
    protected $productPrice;
    protected $discountPercent;
    protected $discountName;
    protected $discountStartDate;
    protected $discountEndDate;
    protected $skuPrice;
    protected $colorId;
    protected $colorName;
    protected $colorCode;
    protected $materialId;
    protected $materialName;
    protected $materialDescription;
    protected $salePrice;

    public function __construct(
        $skuId,
        $productId,
        $productName,
        $productDescription,
        $productQty,
        $productCreatedDate,
        $categoryId,
        $discountId,
        $productFeaturedImage,
        $productPrice,
        $discountPercent,
        $discountName,
        $discountStartDate,
        $discountEndDate,
        $skuPrice,
        $colorId,
        $colorName,
        $colorCode,
        $materialId,
        $materialName,
        $materialDescription,
        $salePrice
    ) {
        $this->skuId = $skuId;
        $this->productId = $productId;
        $this->productName = $productName;
        $this->productDescription = $productDescription;
        $this->productQty = $productQty;
        $this->productCreatedDate = $productCreatedDate;
        $this->categoryId = $categoryId;
        $this->discountId = $discountId;
        $this->productFeaturedImage = $productFeaturedImage;
        $this->productPrice = $productPrice;
        $this->discountPercent = $discountPercent;
        $this->discountName = $discountName;
        $this->discountStartDate = $discountStartDate;
        $this->discountEndDate = $discountEndDate;
        $this->skuPrice = $skuPrice;
        $this->colorId = $colorId;
        $this->colorName = $colorName;
        $this->colorCode = $colorCode;
        $this->materialId = $materialId;
        $this->materialName = $materialName;
        $this->materialDescription = $materialDescription;
        $this->salePrice = $salePrice;
    }

    // Getters
    public function getSkuId()
    {
        return $this->skuId;
    }
    public function getProductId()
    {
        return $this->productId;
    }
    public function getProductName()
    {
        return $this->productName;
    }
    public function getProductDescription()
    {
        return $this->productDescription;
    }
    public function getProductQty()
    {
        return $this->productQty;
    }
    public function getProductCreatedDate()
    {
        return $this->productCreatedDate;
    }
    public function getCategoryId()
    {
        return $this->categoryId;
    }
    public function getDiscountId()
    {
        return $this->discountId;
    }
    public function getProductFeaturedImage()
    {
        return $this->productFeaturedImage;
    }
    public function getProductPrice()
    {
        return $this->productPrice;
    }
    public function getDiscountPercent()
    {
        return $this->discountPercent;
    }
    public function getDiscountName()
    {
        return $this->discountName;
    }
    public function getDiscountStartDate()
    {
        return $this->discountStartDate;
    }
    public function getDiscountEndDate()
    {
        return $this->discountEndDate;
    }
    public function getSkuPrice()
    {
        return $this->skuPrice;
    }
    public function getColorId()
    {
        return $this->colorId;
    }
    public function getColorName()
    {
        return $this->colorName;
    }
    public function getColorCode()
    {
        return $this->colorCode;
    }
    public function getMaterialId()
    {
        return $this->materialId;
    }
    public function getMaterialName()
    {
        return $this->materialName;
    }
    public function getMaterialDescription()
    {
        return $this->materialDescription;
    }
    public function getSalePrice()
    {
        return $this->salePrice;
    }

    // Setters
    public function setSkuId($skuId)
    {
        $this->skuId = $skuId;
        return $this;
    }
    public function setProductId($productId)
    {
        $this->productId = $productId;
        return $this;
    }
    public function setProductName($productName)
    {
        $this->productName = $productName;
        return $this;
    }
    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;
        return $this;
    }
    public function setProductQty($productQty)
    {
        $this->productQty = $productQty;
        return $this;
    }
    public function setProductCreatedDate($productCreatedDate)
    {
        $this->productCreatedDate = $productCreatedDate;
        return $this;
    }
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
        return $this;
    }
    public function setDiscountId($discountId)
    {
        $this->discountId = $discountId;
        return $this;
    }
    public function setProductFeaturedImage($productFeaturedImage)
    {
        $this->productFeaturedImage = $productFeaturedImage;
        return $this;
    }
    public function setProductPrice($productPrice)
    {
        $this->productPrice = $productPrice;
        return $this;
    }
    public function setDiscountPercent($discountPercent)
    {
        $this->discountPercent = $discountPercent;
        return $this;
    }
    public function setDiscountName($discountName)
    {
        $this->discountName = $discountName;
        return $this;
    }
    public function setDiscountStartDate($discountStartDate)
    {
        $this->discountStartDate = $discountStartDate;
        return $this;
    }
    public function setDiscountEndDate($discountEndDate)
    {
        $this->discountEndDate = $discountEndDate;
        return $this;
    }
    public function setSkuPrice($skuPrice)
    {
        $this->skuPrice = $skuPrice;
        return $this;
    }
    public function setColorId($colorId)
    {
        $this->colorId = $colorId;
        return $this;
    }
    public function setColorName($colorName)
    {
        $this->colorName = $colorName;
        return $this;
    }
    public function setColorCode($colorCode)
    {
        $this->colorCode = $colorCode;
        return $this;
    }
    public function setMaterialId($materialId)
    {
        $this->materialId = $materialId;
        return $this;
    }
    public function setMaterialName($materialName)
    {
        $this->materialName = $materialName;
        return $this;
    }
    public function setMaterialDescription($materialDescription)
    {
        $this->materialDescription = $materialDescription;
        return $this;
    }
    public function setSalePrice($salePrice)
    {
        $this->salePrice = $salePrice;
        return $this;
    }

    function removeDup($products)
    {
        $uniqueProducts = array();
        $productIds = [];
        foreach ($products as $product) {
            $productId = $product->getProductId();
            if (!in_array($productId, $productIds)) {
                $productIds[] = $productId;
                $uniqueProducts[] = $product;
            }
        }
        return $uniqueProducts;
    }
}