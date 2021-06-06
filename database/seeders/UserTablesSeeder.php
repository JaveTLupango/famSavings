<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\Models\User;

class UserTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'  =>  'Jave Lupango',
            'email' =>  'info@javelupango.com',
            'password' =>   md5('password')
            ]);
    }
}
