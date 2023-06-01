package com.example.gamesapp;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class AddActivity extends AppCompatActivity {
    EditText name_input, studio_input, type_input, year_input, price_input;
    Button add_button;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_add);
        name_input = findViewById(R.id.name_input);
        studio_input = findViewById(R.id.studio_input);
        type_input = findViewById(R.id.type_input);
        year_input = findViewById(R.id.year_input);
        price_input = findViewById(R.id.price_input);
        add_button = findViewById(R.id.add_button);
        add_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                MyDatabaseHelper myDB = new MyDatabaseHelper(AddActivity.this);
                myDB.addGame(name_input.getText().toString().trim(),
                        studio_input.getText().toString().trim(),
                        type_input.getText().toString().trim(),
                        Integer.valueOf(year_input.getText().toString().trim()),
                        Integer.valueOf(price_input.getText().toString().trim()));
            }
        });
    }
}