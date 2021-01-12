<?php

namespace App\Repositories\Category;
use Image;
use Storage;
use Illuminate\Support\Str;
use App\Models\General\Category\Category;
use App\Repositories\Interface\Category\CategoryInterface;

class CategoryRepository implements CategoryInterface {

    public function all()
    {
        return Category::get();
    }

    public function get($id)
    {
        return Category::find($id);
    }

    public function store(array $data)
    {
        $level = Category::where('id', $data['parent_id'])->first();
        if($level ? $level->level == 3 : 0)
        {
            notify()->warning('Product Category level will be less then or equle 3.', 'Added');
            return back();
        }else{
            if ($image = $data['icon']) {
                $filename = rand(10, 100) . time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('/uploads/products/categoriesicon/' . $filename);
                Image::make($image)->resize(250, 250)->save($location);
            }

            $slug = Str::of($data['name'])->slug('_');

            $parent_id = $data['parent_id'];

            if($parent_id != null){
                $parent_id = $data['parent_id'];
            }else{
                $parent_id=0;
            }
            $category = Category::create([
                'name'              => $data['name'],
                'icon'              => isset($filename) ? $filename : '',
                'description'       => $data['description'],
                'slug'              => $slug,
                'parent_id'         => $data['parent_id'],
                'level'             => $level ? $level->level+1 : 1

            ]);
            notify()->success('Product Category Successfully Added.', 'Added');
            return $category;
        }

    }

    public function update($id, array $data)
    {
        $level = Category::where('id', $data['parent_id'])->first();
        if($level ? $level->level == 3 : 0)
        {
            notify()->warning('Product Category level will be less then or equle 3.', 'Added');
            return back();
        }else{
            $category = Category::find($id);
            $icon = $category->icon;
            if (!empty($data['name'])) {
                $slug = Str::of($data['name'])->slug('_');
            } else {
                $slug = $data['slug'];
            }
            if(isset($data['icon']) == true){
                if (!empty($icon = $data['icon'])) {
                    $filename = rand(10, 100) . time() . '.' . $icon->getClientOriginalExtension();
                    $locationc = public_path('/uploads/products/categoriesicon/' . $filename);
                    Image::make($icon)->resize(250, 250)->save($locationc);
                    $oldFilenamec = $category->icon;
                    $category->icon = $icon;
                    Storage::delete('/uploads/products/categoriesicon/' . $oldFilenamec);
                }
            }
        }
        $category = $category->update([
            'name'              => $data['name'],
            'icon'              => isset($filename) ? $filename : $icon,
            'description'       => $data['description'],
            'slug'              => $slug,
            'parent_id'         => $data['parent_id'],
            'level'             => $level ? $level->level+1 : 1

        ]);
        notify()->success('Product Category Successfully Updated.', 'Updated');
        return $category;
    }

    public function delete($id)
    {
        $categories=Category::find($id);
        if($categories->parent_id != null)
        {
            notify()->warning("This category have sub categories, to delete you need to delete sub categories", "Warning");
        }
        else{
            $oldFilename = $categories->icon;
            Storage::delete('/uploads/products/categoriesicon/' . $oldFilename);
            $categories->delete();
            notify()->success("Product Category Successfully Deleted", "Deleted");
        }
    }
}
