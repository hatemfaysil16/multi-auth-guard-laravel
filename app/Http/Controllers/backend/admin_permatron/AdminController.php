<?php
namespace App\Http\Controllers\backend\admin_permatron;
use App\Actions\Admins\StoreAdminAction;
use App\Actions\Admins\UpdateAdminAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAdminRequest;
use App\Http\Requests\Admin\UpdateAdminRequest;
use App\Models\Admin;
use App\ViewModels\AdminsView\AdminViewModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(Request $request):View
    {
        $data = Admin::Search();
        return view('backend.admins.index',compact('data'))->with('i', ($request->input('page', 1) - 1) * 5);
    }
    public function create():View
    {
        return view('backend.admins.create',new AdminViewModel());
    }
    public function store(StoreAdminRequest $request):RedirectResponse
    {
        app(StoreAdminAction::class)->handle($request->validated());
        return redirect()->route('admins.index')->with('add','success add Admin');
    }
    public function edit(Admin $admin):View
    {
        return view('backend.admins.create',new AdminViewModel($admin));
    }
    public function update(UpdateAdminRequest $request, Admin $admin):RedirectResponse
    {
        app(UpdateAdminAction::class)->handle($admin,$request->validated());
        return redirect()->route('admins.index')->with('edit','update Admin');
    }
    public function destroy(Admin $admin):RedirectResponse
    {
        $admin->delete();
        return redirect()->route('admins.index')->with('delete','success to delete');
    }
}