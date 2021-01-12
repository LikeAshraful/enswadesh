<?php

namespace App\Repositories\Brand;
use Image;
use Storage;
use Illuminate\Support\Str;
use App\Models\General\Brand\Brand;
use App\Repositories\Interface\Brand\BrandInterface;

class BrandRepository implements BrandInterface {

    public function all()
    {
        return Brand::get();
    }

    public function get($id)
    {
        return Brand::find($id);
    }

    public function store(array $data)
    {
        if($image = $data['icon']) {
            $filename = rand(10, 100) . time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/uploads/products/brandicon/' . $filename);
            Image::make($image)->resize(250, 250)->save($location);
        }
        $slug = Str::of($data['name'])->slug('_');

        return Brand::create([
            'name'          => $data['name'],
            'description'   => $data['description'],
            'slug'          => $slug,
            'icon'          => isset($filename) ? $filename : '',
        ]);
    }

    public function update($id, array $data)
    {
        $brand = Brand::find($id);
        $icon   =$brand->icon;

        if(isset($data['icon']) == true){
            if (!empty($icon = $data['icon'])) {
                $filename = rand(10, 100) . time() . '.' . $icon->getClientOriginalExtension();
                $locationc = public_path('/uploads/products/brandicon/' . $filename);
                Image::make($icon)->resize(250, 250)->save($locationc);
                $oldFilenamec = $brand->icon;
                $brand->icon = $icon;
                Storage::delete('/uploads/products/brandicon/' . $oldFilenamec);
            }
        }

        if (!empty($data['name'])) {
            $slug = Str::of($data['name'])->slug('_');
        } else {
            $slug = $data['slug'];
        }

        return $brand->update([
            'name'          => $data['name'],
            'description'   => $data['description'],
            'slug'          =>$slug,
            'icon'          => isset($filename) ? $filename : $icon,
        ]);
    }

    public function delete($id)
    {
        $brand = Brand::find($id);
        $oldFilename = $brand->image;
        Storage::delete('/uploads/products/brandicon/' . $oldFilename);
        return $brand->delete();
    }
}
