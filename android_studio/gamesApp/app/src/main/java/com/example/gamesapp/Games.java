package com.example.gamesapp;

import java.text.Collator;
import java.util.ArrayList;
import java.util.Locale;

public class Games implements Comparable<Games>{
    int id;
    String name;
    String studio;
    String type;
    int year;
    int price;
    public Games(int id, String name, String studio, String type, int year, int price){
        this.id = id;
        this.name = name;
        this.studio = studio;
        this.type = type;
        this.year = year;
        this.price = price;
    }
    public Games(){}
    public static ArrayList<Games> gry = new ArrayList<Games>();
    public String toString(){
        return "nazwa: "+name+" studio: " + studio + " rodzaj: " + type + " rok wydania: " + year + " cena: " + price;
    }
    @Override
    public int compareTo(Games game){
        Collator c = Collator.getInstance(new Locale("pl", "PL"));
        int porownanieNazwy = c.compare(this.name, game.name);
        return porownanieNazwy;
    };
}