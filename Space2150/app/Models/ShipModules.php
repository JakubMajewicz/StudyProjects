<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipModules extends Model
{
// jeśli nie prowadzimy informacji timestamps 
// to należy zadeklarować to w modelu
public $timestamps = false; 
//Stałe opisujące dostępne kolumny:
public const FIELD_ID = 'id';
public const FIELD_MODULE_NAME= 'module_name';
public const FIELD_IS_WORKABLE = 'is_workable';
//Nazwa tabeli powiązanej z modułem
protected $table = 'ship_modules';
//Klucz główny
protected $primaryKey = self::FIELD_ID;
//Pola, które mogą być wypełniane masowo
protected $fillable = [
 self::FIELD_MODULE_NAME,
 self::FIELD_IS_WORKABLE,
];
//Przy pomocy tej metody będzie można pobierać 
// załogantów danego modułu statku
public function moduleCrew()
 {
    return $this->hasMany(ModuleCrew::class);
 }
}


