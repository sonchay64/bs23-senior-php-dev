<?php 

function filterProducts(array $product_arr,string $category_needle)
{
    $array_new=array();

    foreach($product_arr as $product)
    {
        $productCategory = strtolower(trim($product['category']));
        $searchCategory = strtolower(trim($category_needle));

        /**
         * Checkings =>
         *              * if product's category identically matched with target category.
         *          OR
         *              
         *              * Target category contains a portion of product's category  
         */
        if(($productCategory === $searchCategory) || strpos($productCategory,$searchCategory) !== false)
        {
            array_push($array_new,$product);
        }
    }

    return $array_new;
    
}


//sample cases

$products = [
    ['name' => 'PHP', 'price' => 14, 'category' => 'Backend Development'],
    ['name' => 'JavaScript', 'price' => 12, 'category' => 'Frontend Development'],
    ['name' => 'AWS', 'price' => 11, 'category' => 'Cloud Development'],
    ['name' => 'Kotlin', 'price' =>13, 'category' => 'Mobile App Development'],
];


$result = filterProducts($products,'backend');

var_export($result);

?>