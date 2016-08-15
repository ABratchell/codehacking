<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User;
        $user->name = 'John Smith';
        $user->email = 'John.Smith@smith.com';
        $user->password = bcrypt('123456');
        $user->role_id = '1';
        $user->is_active = '1';
        $user->save();
    }
}
