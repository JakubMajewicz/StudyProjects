<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModulesCrew extends Model
{
    // jeśli nie prowadzimy informacji timestamps 
    // to należy zadeklarować to w modelu
    public $timestamps = false; 
    //Stałe opisujące dostępne kolumny:
    public const FIELD_ID = 'id';
    public const FIELD_SHIP_MODULE_ID= 'ship_module_id';
    public const FIELD_NICK = 'nick';
    public const FIELD_GENDER = 'gender';
    public const FIELD_AGE = 'age';
    //Nazwa tabeli powiązanej z modułem
    protected $table = 'module_crew';
    //Klucz główny
    protected $primaryKey = self::FIELD_ID;
    //Pola, które mogą być wypełniane masowo
    protected $fillable = [
     self::FIELD_SHIP_MODULE_ID,
     self::FIELD_NICK,
     self::FIELD_GENDER,
     self::FIELD_AGE,
    ];
    //Przy pomocy tej metody będzie można pobierać 
    // załogantów danego modułu statku
    public function crewSkills()
     {
        return $this->hasMany(CrewSkills::class);
     }
    }
