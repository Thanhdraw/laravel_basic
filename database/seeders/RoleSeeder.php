<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\admin\Role;
use App\Models\admin\User;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'staff']);


        $adminRole = Role::where('name', 'admin')->first();
        $user = User::find(2);
        if ($user) {
            $user->roles()->attach($adminRole->id);
        }
    }
}
