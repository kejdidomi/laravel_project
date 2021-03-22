<?php

use Illuminate\Database\Seeder;
// we need to use Role model
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'author']);
        Role::create(['name' => 'user']);

    }
}
