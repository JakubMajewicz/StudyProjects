<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restauracje extends Model
{
    public $timestamps = false;
    //STAŁE
    public const FIELD_ID = 'id';
    public const FIELD_NAZWA = 'nazwa';
    public const FIELD_ADRES = 'adres';
    public const FIELD_SKROT = 'skrot';

    //NAZWA TABELI
    protected $table = 'restauracje';

    //KLUCZ GŁÓWNY
    protected $primaryKey = self::FIELD_ID;

    //POLA DO WYPEŁNIANIA
    protected $fillable = [
        self::FIELD_NAZWA,
        self::FIELD_ADRES,
        self::FIELD_SKROT,
    ];
    
}
