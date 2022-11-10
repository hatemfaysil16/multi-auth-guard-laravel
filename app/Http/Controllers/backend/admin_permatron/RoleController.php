<?php
namespace App\Http\Controllers\backend\admin_permatron;
use App\Actions\Role\StoreRoleAction;
use App\Actions\Role\UpdateRoleAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Roles\StoreRoleRequest;
use App\Http\Requests\Roles\UpdateRoleRequest;
use App\Models\Permission;
use App\ViewModels\Roles\RolesViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{

public function index(Request $request):View
{
    $roles = Role::orderBy('id','DESC')->paginate(5);
    return view('backend.roles.index',compact('roles'))->with('i', ($request->input('page', 1) - 1) * 5);
}

public function create():View
{
    return view('backend.roles.create',new RolesViewModel());
}

public function store(StoreRoleRequest $request):RedirectResponse
{
    app(StoreRoleAction::class)->handle($request->validated());
    return redirect()->route('roles.index')->with('add','Role created successfully');
}

public function show(Role $role):View
{
    $rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")->where("role_has_permissions.role_id",$role->id)->get();
    return view('backend.roles.show',compact('role','rolePermissions'));
}

public function edit(Role $role):View
{
    $permission = Permission::get();
    $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$role->id)
    ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')->all();
    return view('backend.roles.edit',compact('role','permission','rolePermissions'));
}

    public function update(UpdateRoleRequest $request, Role $role):RedirectResponse 
    {
        app(UpdateRoleAction::class)->handle($role,$request->validated());
        return redirect()->route('roles.index')->with('edit','Role updated successfully');
    }

    public function destroy(Role $role):RedirectResponse
    {
        $role->delete();
        return redirect()->route('roles.index')->with('delete','Role deleted successfully');
    }
}