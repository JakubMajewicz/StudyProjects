<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zamowienia extends Model
{
    public $timestamps = false;
    //STAŁE
    public const FIELD_ID = 'id';
    public const FIELD_ID_KOSZYKA = 'id_koszyka';
    public const FIELD_ID_MENU = 'id_menu';

    //NAZWA TABELI
    protected $table = 'zamowienia';

    //KLUCZ GŁÓWNY
    protected $primaryKey = self::FIELD_ID;

    //POLA DO WYPEŁNIANIA
    protected $fillable = [
        self::FIELD_ID_KOSZYKA,
        self::FIELD_ID_MENU,
    ];
    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu', 'id');
    }
}
