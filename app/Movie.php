<?php

namespace Cinema;



use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\File\getClientOriginalName;


class Movie extends Model
{
    protected $table = "movies";

    protected $fillable = ['name','path','cast','direction','duration','genre_id'];
   
    /*USo del mutador: es para modificar antes de guardar en la base de datos.*/
	public function setPathAttribute($path){

       if(!empty($path)){ //verificar que exista
                  $this->attributes['path'] = Carbon::now()->second.$path->getClientOriginalName();
        $name = Carbon::now()->second.$path->getClientOriginalName();
                    //  $extencion=$path->getClientOriginalExtension();
                    //  if($extencion=='png'){
                         \Storage::disk('local')->put($name, \File::get($path));
                     // }

      }
    }
   /*Laravel builder*/
    public static function Movies(){
      return DB::table('movies')
            ->join('genres','genres.id','=','movies.genre_id')
            ->select('movies.*', 'genres.genre')
            ->get();
    }
}
