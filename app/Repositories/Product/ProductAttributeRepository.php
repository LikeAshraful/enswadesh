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
            $formattedSizes[$productSize['size']] = [
                'size' => $productSize['size'],
                'price' => $productSize['price'],
                'discount' => $productSize['discount'],
                'discount_type' => $productSize['discount_type'],
                'stocks' => $productSize['stocks'],
                'offer' => $productSize['offer'],
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
            $formattedWeights[$productWeight['weight']] = [
                'weight' => $productWeight['weight'],
                'price' => $productWeight['price'],
                'discount' => $productWeight['discount'],
                'discount_type' => $productWeight['discount_type'],
                'stocks' => $productWeight['stocks'],
                'offer' => $productWeight['offer'],
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
