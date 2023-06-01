package com.example.gamesapp;

import android.content.ContentValues;
import android.content.Context;
import android.content.Intent;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;
import android.util.Log;
import android.widget.Toast;

import androidx.annotation.Nullable;

public class MyDatabaseHelper extends SQLiteOpenHelper {
    private Context context;
    private static final String DATABASE_NAME = "Games.db";
    private static final int DATABASE_VERSION = 1;
    private static final String TABLE_NAME = "games";
    private static final String COLUMN_ID = "_id";
    private static final String COLUMN_NAME = "name";
    private static final String COLUMN_STUDIO = "studio";
    private static final String COLUMN_TYPE = "type";
    private static final String COLUMN_YEAR = "year";
    private static final String COLUMN_PRICE = "price";
    public MyDatabaseHelper(@Nullable Context context) {
        super(context, DATABASE_NAME, null, DATABASE_VERSION);
        this.context = context;
    }

    @Override
    public void onCreate(SQLiteDatabase db) {
        String query =
                "CREATE TABLE " + TABLE_NAME +
                        "(" + COLUMN_ID + " INTEGER PRIMARY KEY AUTOINCREMENT, " +
                        COLUMN_NAME + " TEXT, " +
                        COLUMN_STUDIO + " TEXT, " +
                        COLUMN_TYPE + " TEXT, " +
                        COLUMN_YEAR + " INTEGER, " +
                        COLUMN_PRICE + " INTEGER);";
        db.execSQL(query);
    }

    @Override
    public void onUpgrade(SQLiteDatabase db, int i, int i1) {
        db.execSQL("DROP TABLE IF EXISTS " + TABLE_NAME);
        onCreate(db);
    }
    void addGame(String name, String studio, String type, int year, int price){
        SQLiteDatabase db = this.getWritableDatabase();
        ContentValues cv = new ContentValues();

        cv.put(COLUMN_NAME, name);
        cv.put(COLUMN_STUDIO, studio);
        cv.put(COLUMN_TYPE, type);
        cv.put(COLUMN_YEAR, year);
        cv.put(COLUMN_PRICE, price);
        long result = db.insert(TABLE_NAME, null, cv);
        if(result == -1){
            Toast.makeText(context, "Błąd", Toast.LENGTH_SHORT).show();
        }
        else {
            Toast.makeText(context, "Dodano pomyślnie", Toast.LENGTH_SHORT).show();
        }
    }
    Cursor readAllData(){
        String query = "SELECT * FROM " + TABLE_NAME;
        SQLiteDatabase db = this.getReadableDatabase();
        Cursor cursor=null;
        if(db!=null)
        {
           cursor =  db.rawQuery(query, null);
        }
        return cursor;
    }
    void updateData(int row_id, String name, String studio, String type, int year, int price){
        SQLiteDatabase db = this.getWritableDatabase();
        ContentValues cv = new ContentValues();
        cv.put(COLUMN_NAME, name);
        cv.put(COLUMN_STUDIO, studio);
        cv.put(COLUMN_TYPE, type);
        cv.put(COLUMN_YEAR, year);
        cv.put(COLUMN_PRICE, price);

       long result = db.update(TABLE_NAME, cv, "_id=?", new String[]{String.valueOf(row_id)});
        if(result == -1){
            Toast.makeText(context, "Błąd", Toast.LENGTH_SHORT).show();
        }
        else {
            Toast.makeText(context, "Uaktualniono pomyślnie", Toast.LENGTH_SHORT).show();
        }
    }
    void deleteData(int row_id){
        SQLiteDatabase db = this.getWritableDatabase();
        long result = db.delete(TABLE_NAME, "_id=?", new String[]{String.valueOf(row_id)});
        if(result==-1){
            Toast.makeText(context, "Błąd", Toast.LENGTH_SHORT).show();
        }
        else {
            Toast.makeText(context, "Usunieto pomyślnie", Toast.LENGTH_SHORT).show();
        }
    }
    void deleteAll(){
        SQLiteDatabase db = this.getWritableDatabase();
        db.execSQL("DELETE FROM " + TABLE_NAME);
    }
}
