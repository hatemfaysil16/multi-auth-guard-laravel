<?php
namespace App\Http\Controllers\backend;
use App\Actions\Category\StoreCategoryAction;
use App\Actions\Category\UpdateCategoryAction;
use App\helpers\TanslationHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category;
use App\Models\Image;
use App\ViewModels\Category\CategoryViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
class CategoriesController extends Controller
{
    public function index():View
    {
        $categories = Category::Search();
        return view('backend.categories.view',compact('categories'));
    }
    public function create():View
    {
        return view('backend.categories.crud',new CategoryViewModel());
    }
    public function store(StoreCategoryRequest $request):RedirectResponse 
    {
       app(StoreCategoryAction::class)->handle($request->validated());
        return redirect()->route('categories.index')->with('add',TanslationHelper::translate('Category Has Been Created Successfully'));
    }
    public function edit(Category $category):View
    {
        return view('backend.categories.crud',new CategoryViewModel($category));
    }
    public function update(UpdateCategoryRequest $request, Category $category):RedirectResponse
    {
        app(UpdateCategoryAction::class)->handle($category,$request->validated());
        return redirect(route('categories.index'))->with('edit',TanslationHelper::translate('Category Has Been Updated Successfully'));
    }
    public function destroy(Category $category):RedirectResponse
    {
        $category->delete();
        return redirect()->back()->with('delete' , TanslationHelper::translate('Category Deleted Successfully'));
    }

    
}