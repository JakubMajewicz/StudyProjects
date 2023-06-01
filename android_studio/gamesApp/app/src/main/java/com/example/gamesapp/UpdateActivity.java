package com.example.gamesapp;

import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;

import android.content.DialogInterface;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class UpdateActivity extends AppCompatActivity {
    EditText name_input, studio_input, type_input, year_input, price_input;
    Button update_button, delete_button;
    String name, studio, type;
    int id, year, price;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_update);
        name_input = findViewById(R.id.name_input2);
        studio_input = findViewById(R.id.studio_input2);
        type_input = findViewById(R.id.type_input2);
        year_input = findViewById(R.id.year_input2);
        price_input = findViewById(R.id.price_input2);
        update_button = findViewById(R.id.update_button);
        delete_button = findViewById(R.id.delete_button);
        getAndSetIntentData();
        update_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                MyDatabaseHelper myDB = new MyDatabaseHelper(UpdateActivity.this);
                name = name_input.getText().toString().trim();
                studio = studio_input.getText().toString().trim();
                type = type_input.getText().toString().trim();
                year = Integer.valueOf(year_input.getText().toString().trim());
                price = Integer.valueOf(price_input.getText().toString().trim());
                myDB.updateData(id, name, studio, type, year, price);
            }
        });
        delete_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                confirmDialog();
            }
        });


    }
    void getAndSetIntentData(){
        if(getIntent().hasExtra("id") && getIntent().hasExtra("name") && getIntent().hasExtra("studio") &&
        getIntent().hasExtra("type") && getIntent().hasExtra("year") && getIntent().hasExtra("price")){
            id = getIntent().getIntExtra("id", 0);
            name = getIntent().getStringExtra("name");
            studio = getIntent().getStringExtra("studio");
            type = getIntent().getStringExtra("type");
            year = getIntent().getIntExtra("year", 0);
            price = getIntent().getIntExtra("price", 0);

            name_input.setText(name);
            studio_input.setText(studio);
            type_input.setText(type);
            year_input.setText(String.valueOf(year));
            price_input.setText(String.valueOf(price));

        }else {
            Toast.makeText(this, "Brak danych", Toast.LENGTH_SHORT).show();
        }
    }
    void confirmDialog(){
        AlertDialog.Builder builder = new AlertDialog.Builder(this);
        builder.setTitle("Usunąć " + name + "?");
        builder.setMessage("Czy jesteś pewny, że chcesz usunąć " + name + "?");
        builder.setPositiveButton("Tak", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialogInterface, int i) {
                MyDatabaseHelper myDB = new MyDatabaseHelper(UpdateActivity.this);
                myDB.deleteData(id);
                finish();
            }
        });
        builder.setNegativeButton("Nie", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialogInterface, int i) {

            }
        });
        builder.create().show();
    }
}