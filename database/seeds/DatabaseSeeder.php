<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()     
    {    
    	Model::unguard();
        $this->call(UsersTableSeeder::class); // se ejecuata cuando se ejecuta el otro  seeder
			/**Nota:  Existen varias manera de ejectar un seeder: 1) es de manera individual o 2) especificandola en el DatabaseSeeder.   */
         
         /*Nota:; Sirve para insertar informacion a la base de datos. */
    }
}
