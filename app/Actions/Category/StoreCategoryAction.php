<?php
namespace App\Actions\Category;
use App\helpers\HandleImage;
use App\Models\Category;
use Illuminate\Support\Arr;

class StoreCategoryAction
{
    use HandleImage;
    public function handle(array $data):Category
    {   
        $category=Category::create(Arr::except($data, 'image'));
        $this->storeImage($data,$category,'category');
        return $category;
    }
}