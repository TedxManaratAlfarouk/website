<?php


namespace App\scripts;


use Illuminate\Database\Eloquent\Collection;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseFiller
{
    public function rolesAsArray($roles)
    {
        foreach ($roles as $role){
            Role::create(['name' => $role]);
        }
    }

    public function PermissionsAsArray($permissions)
    {
        foreach ($permissions as $permission){
            Permission::create(['name' => $permission]);
        }
    }

    public function rolePermissionsAsArray($rolePermissions)
    {
        foreach ($rolePermissions as $role => $permissions){
            $role = Role::firstWhere('name', $role);
            $permissions = $this->permissionsToObjects($permissions);
            $role->syncPermissions($permissions);
        }
    }



//    Turn Json To Array

    public function PermissionsAsJson($permissions)
    {
        $permissions = json_decode($permissions, true);
        $this->PermissionsAsArray($permissions);
    }

    public function rolesAsJson($roles)
    {
        $roles = json_decode($roles, true);
        $this->rolesAsArray($roles);
    }

    public function rolePermissionsAsJson($rolePermissions)
    {
        $rolePermissions = json_decode($rolePermissions, true);
        $this->rolePermissionsAsArray($rolePermissions);
    }

    private function permissionsToObjects($permissions)
    {
        $objects = new Collection();
        foreach ($permissions as $permission){
            $object = Permission::firstWhere('name', $permission);
            $objects->push($object);
        }
        return $objects->all();
    }
}
