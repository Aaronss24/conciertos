<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'admin']);
        $usuario = Role::create(['name' => 'usuario']);

        Permission::create(['name' => 'admin.home'])->assignRole($admin);
        Permission::create(['name' => 'admin.users'])->assignRole($admin);
        Permission::create(['name' => 'admin.conciertos'])->assignRole($admin);
        Permission::create(['name' => 'admin.artistas'])->assignRole($admin);

        Permission::create(['name' => 'admin.users.list_users'])->syncRoles([$admin,$usuario]);
        Permission::create(['name' => 'admin.users.create'])->assignRole($admin);
        Permission::create(['name' => 'admin.users.edit'])->assignRole($admin);
        Permission::create(['name' => 'admin.users.destroy'])->assignRole($admin);

        Permission::create(['name' => 'admin.conciertos.list_conciertos'])->syncRoles([$admin,$usuario]);
        Permission::create(['name' => 'admin.conciertos.create'])->assignRole($admin);
        Permission::create(['name' => 'admin.conciertos.edit'])->assignRole($admin);
        Permission::create(['name' => 'admin.conciertos.destroy'])->assignRole($admin);

        Permission::create(['name' => 'admin.artistas.list_artistas'])->syncRoles([$admin,$usuario]);
        Permission::create(['name' => 'admin.artistas.create'])->assignRole($admin);
        Permission::create(['name' => 'admin.artistas.edit'])->assignRole($admin);
        Permission::create(['name' => 'admin.artistas.destroy'])->assignRole($admin);
    }
}
