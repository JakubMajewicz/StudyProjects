<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrewSkills extends Model
{
    // jeśli nie prowadzimy informacji timestamps 
    // to należy zadeklarować to w modelu
    public $timestamps = false; 
    //Stałe opisujące dostępne kolumny:
    public const FIELD_ID = 'id';
    public const FIELD_MODULE_CREW_ID= 'module_crew_id';
    public const FIELD_NAME = 'name';
    //Nazwa tabeli powiązanej z modułem
    protected $table = 'crew_skills';
    //Klucz główny
    protected $primaryKey = self::FIELD_ID;
    //Pola, które mogą być wypełniane masowo
    protected $fillable = [
     self::FIELD_MODULE_CREW_ID,
     self::FIELD_NAME,
    ];
}
