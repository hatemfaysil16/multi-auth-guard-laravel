<?php
namespace App\Actions\Category;
use App\helpers\HandleImage;
use App\Models\Category;
use Illuminate\Support\Arr;
class UpdateCategoryAction
{
    use HandleImage;
    public function handle(Category $category,array $data): Category
    {
        $category->update(Arr::except($data, 'image'));
        $this->UpdateImage($data,$category,'category');
        return $category;
    }
}
