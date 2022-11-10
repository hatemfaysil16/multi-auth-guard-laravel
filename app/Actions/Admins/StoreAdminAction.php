<?php
namespace App\Actions\Admins;

use App\helpers\HandleImage;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class StoreAdminAction
{
    use HandleImage;
    public function handle(array $data): Admin
    {
        $data['password'] = Hash::make($data['password']);
        $admin = Admin::create($data);
        $admin->assignRole($data['roles']);
        $this->storeImage($data,$admin,'profile');
        return $admin;
    }
}
