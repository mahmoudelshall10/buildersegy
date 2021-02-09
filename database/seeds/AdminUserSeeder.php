<?php

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' =>'admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('123456789'),
            'fldType'=>'Admin'
        ]);
    }
}
