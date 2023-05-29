<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restauracje;
use App\Models\Menu;
use App\Models\Koszyk;
use App\Models\Zamowienia;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use DateTime;
class PodstawowyKontroler extends Controller
{
    public function zwrocStroneDomowa()
    {
    return view('home');
    }

    public function zwrocStroneProfil()
    {
    return view('users');
    }
    public function zwrocStroneRestauracje()
    {
        $restauracje = Restauracje::all();
    return view('restauracje', ['restauracje'=>$restauracje],);
    }
    public function Loguj()
    {
        $id_user = Auth::user()->id;
    return view('login');
    }
    public function Rejestruj()
    {
    return view('register');
    }
    public function strona_menu($id)
    {   
        $koszyk =  Zamowienia::select(Zamowienia::raw('id_menu, count(*) as count, id_koszyka'))->where('id_koszyka', $id)->distinct('id_menu')->groupBy('id_menu', 'id_koszyka')->get();
        $menu_id = Restauracje::find($id);
        $menu = Menu::all()->where('id_restauracji',$id);
        $kwota = Zamowienia::leftjoin('menu', 'zamowienia.id_menu','=','menu.id')->selectRaw('id_menu, id_koszyka, menu.cena as kwota, SUM(menu.cena)')->where('id_restauracji',$id)->groupBy('id_menu', 'id_koszyka', 'kwota')->get();
        $kwota = $kwota->sum('sum');
        if($menu_id->count()>0)
        {
            return view('restauracje.'.$menu_id["skrot"], compact('menu','menu_id','koszyk','kwota'));
        }
        elseif($menu == null)
        {
            return view('home');
        }
    }

    public function addKoszyk($id, $idmenu)
    {
        $newkoszyk = new Zamowienia();
        $newkoszyk->id_menu = $idmenu;
        $newkoszyk->id_koszyka = $id;
        $newkoszyk->save();
        return redirect('restauracje/'.$id);

    }
    public function deleteKoszyk($id, $idmenu)
    {
        $usun = Zamowienia::select('id', 'id_menu', 'id_koszyka')->where('id_menu', $idmenu)->first();
        if($usun->count() >= 1)
        {
        $usun->delete();
        return redirect('restauracje/'.$id);
        }
        else
        {
        return redirect('restauracje/'.$id);
        }
    }
    public function zaplac($id)
    {  
        $idskrot = Restauracje::find($id);
        $zaplac = new Koszyk();
        $data = new DateTime('today');
        $data->format('Y-m-d');
        $zaplac-> data = $data;
        $kwota = $kwota = Zamowienia::leftjoin('menu', 'zamowienia.id_menu','=','menu.id')->selectRaw('id_menu, id_koszyka, menu.cena as kwota, SUM(menu.cena)')->where('id_restauracji',$id)->groupBy('id_menu', 'id_koszyka', 'kwota')->get();
        $kwota = $kwota->sum('sum');
        $zaplac->kwota = $kwota;
        $id_user = Auth::user()->id;
        $zaplac->id_uzytkownika = $id_user;
        if($kwota > 0)
        {
        $zaplac->save();
        Zamowienia::where('id_koszyka', $id)->delete();
        return view('/thanks');
        }
        else
        {
            return view('/home');
        }
    }
    public function viewProfile()
    {
        $id_user = Auth::user()->id;
        $user = User::all()->where('id', $id_user);
        return view('/profil');
    }
    public function zmienStanUwierzytelnieniaLog()
    {
     if(auth()->check()){
     $user = auth()->user();
     Auth::logout();
     return view('/home');
     }
     else{
     return redirect('/login');
     }
    }
    public function zmienStanUwierzytelnieniaRej()
    {
     if(auth()->check()){
     $user = auth()->user();
     Auth::logout();
     return view('/home');
     }
     else{
     return redirect('/register');
     }
    }
    


}
