<?php


namespace Repository\Product;


use App\Models\Product\Product;
use App\Models\Product\ProductFeature;

class ProductAttributeRepository
{
    public static function storeSizes(Product  $product, array $productSizes)
    {
        if (sizeof($productSizes) == 0) return ;
        $formattedSizes = [];
        foreach ($productSizes as $productSize) {
            if (!$productSize) continue;
            $formattedSizes[$productSize['size_id']] = [
                'price' => $productSize['price'],
                'stocks' => $productSize['stocks']
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
            if (!$productWeight) continue;
            $formattedWeights[$productWeight['weight_id']] = [
                'price' => $productWeight['price'],
                'stocks' => $productWeight['stocks'],
            ];
        }
        return $product->weights()->attach($formattedWeights);
    }

    public static function storeFeatures(Product $product, array $features)
    {
        if (sizeof($features) == 0) return ;

        foreach ($features as $feature)
        {
            if (!$feature) continue;
            $featureData = new ProductFeature;
            $featureData->product_id = $product->id;
            $featureData->title = $feature['title'];
            $featureData->feature = $feature['feature'];
            $featureData->save();
        }
        return $product;

        // return $product->features()->saveMany(array_map(function($feature) {
        //     return new ProductFeature($feature);
        // }, $features));
    }

}
