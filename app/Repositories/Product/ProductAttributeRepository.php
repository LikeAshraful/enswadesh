<?php


namespace Repository\Product;


use App\Models\Product\Product;

class ProductAttributeRepository
{
    public static function storeSizes(Product  $product, array $productSizes)
    {
        if (sizeof($productSizes) == 0) return ;
        $formattedSizes = [];
        foreach ($productSizes as $productSize) {
            $formattedSizes[$productSize->size_id] = [
                'price' => $productSize->price,
                'stocks' => $productSize->stocks
            ];
        }
        return $product->sizes()->attach($formattedSizes);
    }

    public static function storeWeights(Product $product, array $productWeights)
    {
        if (sizeof($productWeights) == 0) return ;
        $formattedWeights = [];
        foreach ($productWeights as $productWeight)
        {
            $formattedWeights[$productWeight->weight_id] = [
                'price' => $productWeight->price,
                'stocks' => $productWeight->stocks,
            ];
        }
        return $product->weights()->attach($formattedWeights);
    }

    public static function storeFeatures(Product $product, array $features)
    {
        if (sizeof($features) == 0) return ;

        return $product->features()->saveMany($features);
    }

}
