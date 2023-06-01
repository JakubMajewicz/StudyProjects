package com.example.gamesapp;

import android.annotation.SuppressLint;
import android.app.Activity;
import android.content.Context;
import android.content.Intent;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.LinearLayout;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import java.util.ArrayList;

public class Adapter extends RecyclerView.Adapter<Adapter.MyViewHolder> {
    private Context context;
    Activity activity;
    private ArrayList<Games> myGames;
    Adapter(Activity activity, Context context, ArrayList<Games> myGames){
        this.activity = activity;
        this.context = context;
        this.myGames = myGames;
    }
    @NonNull
    @Override
    public MyViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        LayoutInflater inflater = LayoutInflater.from(context);
        View view = inflater.inflate(R.layout.my_row, parent, false);
        return new MyViewHolder(view);
    }

    @Override
    public void onBindViewHolder(@NonNull MyViewHolder holder, @SuppressLint("RecyclerView") int position) {
        holder.id_txt.setText(String.valueOf(myGames.get(position).id));
        holder.name_txt.setText(String.valueOf(myGames.get(position).name));
        holder.studio_txt.setText(String.valueOf(myGames.get(position).studio));
        holder.type_txt.setText(String.valueOf(myGames.get(position).type));
        holder.year_txt.setText(String.valueOf(myGames.get(position).year));
        holder.price_txt.setText(String.valueOf(myGames.get(position).price));
        holder.mainLayout.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(context, UpdateActivity.class );
                intent.putExtra("id", myGames.get(position).id);
                intent.putExtra("name", String.valueOf(myGames.get(position).name));
                intent.putExtra("studio", String.valueOf(myGames.get(position).studio));
                intent.putExtra("type", String.valueOf(myGames.get(position).type));
                intent.putExtra("year", myGames.get(position).year);
                intent.putExtra("price", myGames.get(position).price);
                activity.startActivityForResult(intent, 1);
            }
        });
    }

    @Override
    public int getItemCount() {
        return myGames.size();
    }

    public class MyViewHolder extends RecyclerView.ViewHolder {
        TextView id_txt, name_txt, studio_txt, type_txt, year_txt, price_txt;
        LinearLayout mainLayout;
        public MyViewHolder(@NonNull View itemView) {
            super(itemView);
            id_txt = itemView.findViewById(R.id.id_txt);
            name_txt = itemView.findViewById(R.id.name_txt);
            studio_txt = itemView.findViewById(R.id.studio_txt);
            type_txt = itemView.findViewById(R.id.type_txt);
            year_txt = itemView.findViewById(R.id.year_txt);
            price_txt = itemView.findViewById(R.id.price_txt);
            mainLayout = itemView.findViewById(R.id.mainLayout);
        }
    }
}
