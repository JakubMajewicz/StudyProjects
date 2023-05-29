<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koszyk extends Model
{
    public $timestamps = false;
    //STAŁE
    public const FIELD_ID = 'id';
    public const FIELD_DATA = 'data';
    public const FIELD_KWOTA = 'kwota';
    public const FIELD_ID_UZYTKOWNIKA = 'id_uzytkownika';

    //NAZWA TABELI
    protected $table = 'koszyk';

    //KLUCZ GŁÓWNY
    protected $primaryKey = self::FIELD_ID;

    //POLA DO WYPEŁNIANIA
    protected $fillable = [
        self::FIELD_DATA,
        self::FIELD_KWOTA,
        self::FIELD_ID_UZYTKOWNIKA,
    ];
}
