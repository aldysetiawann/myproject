<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\Cast\String_;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<10; $i++){
            DB::table('users')->insert([
                'name' => String::random(10),
                'email' => String::random(10).'@gmail.com',
                'password' => Hash::make('password'),
            ]);
            
        }
    }
}
