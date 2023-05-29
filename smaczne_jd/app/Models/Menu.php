<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public $timestamps = false;
    //STAŁE
    public const FIELD_ID = 'id';
    public const FIELD_NAZWA = 'nazwa';
    public const FIELD_CENA = 'cena';
    public const FIELD_OPIS = 'opis';
    public const FIELD_ID_RESTAURACJI = 'id_restauracji';

    //NAZWA TABELI
    protected $table = 'menu';

    //KLUCZ GŁÓWNY
    protected $primaryKey = self::FIELD_ID;

    //POLA DO WYPEŁNIANIA
    protected $fillable = [
        self::FIELD_NAZWA,
        self::FIELD_CENA,
        self::FIELD_OPIS,
        self::FIELD_ID_RESTAURACJI,
    ];
    public function zamowienia()
    {
        return $this->hasMany(Zamowienia::class);
    }
}
