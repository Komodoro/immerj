<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'A Admin User';
        $role_admin->save();

        $role_migrant = new Role();
        $role_migrant->name = 'migrant';
        $role_migrant->description = 'A Migrant User';
        $role_migrant->save();

        $role_refugee = new Role();
        $role_refugee->name = 'volunteer';
        $role_refugee->description = 'A Volunteer User';
        $role_refugee->save();
    }
}
