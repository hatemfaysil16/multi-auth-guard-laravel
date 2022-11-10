<?php
namespace App\ViewModels\AdminsView;
use App\Models\Admin;
use Spatie\Permission\Models\Role;
use Spatie\ViewModels\ViewModel;

class AdminViewModel extends ViewModel
{
    public  $admin;
    public  $type;
    public  $roles;
    public  $AdminRole;

    public function __construct($admin = null)
    {
        $this->admin = is_null($admin) ? new Admin(old()) : $admin;
        $this->type = is_null($admin)?'Add':'Edit' ; 
        $this->roles = Role::pluck('name','name')->all();
        $this->AdminRole = is_null($admin) ? new Admin(old()) : $admin->roles->pluck('name','name')->all();
    }

    public function action(): string
    {
        return is_null($this->admin->id)
            ? route('admins.store')
            : route('admins.update', $this->admin->id);
    }

    public function method(): string
    {
        return is_null($this->admin->id) ? 'POST' : 'PUT';
    }
}
