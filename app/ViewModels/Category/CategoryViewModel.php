<?php
namespace App\ViewModels\Category;

use App\Models\Category;
use Spatie\ViewModels\ViewModel;

class CategoryViewModel extends ViewModel
{
    public  $category;
    public  $type;
    public  $navbar;

    public function __construct($category = null)
    {
        $this->type = is_null($category)?'Add':'Edit' ; 
        $this->type = is_null($category)?'Add':'Edit' ; 
        $this->navbar= is_null($category) ? 'Edit' : 'Create';
        $this->category = is_null($category) ? new Category(old()) : $category;
    }

    public function action(): string
    {
        return is_null($this->category->id)
            ? route('categories.store')
            : route('categories.update',$this->category->id);
    }

    public function method(): string
    {
        return is_null($this->category->id) ? 'POST' : 'PUT';
    }
}
