<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new App\Role;
        $role->id = '1';
        $role->name = 'Administrator';
        $role->save();

        $role = new App\Role;
        $role->id = '2';
        $role->name = 'Author';
        $role->save();

        $role = new App\Role;
        $role->id = '3';
        $role->name = 'Subscriber';
        $role->save();
    }
}
