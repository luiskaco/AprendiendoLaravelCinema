<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {      
   
          DB::table('users')->insert([
              'name' => 'Luis Admin 2',
              'email'=>'admin@probando.com',
              'password'=>bcrypt('123456'),
              'created_at' => date('Y-m-d H:m:s'),
          	 'updated_at' => date('Y-m-d H:m:s'),
        	]);
    }
}
