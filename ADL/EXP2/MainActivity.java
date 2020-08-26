package com.example.myapplication;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    TextView tv;
    EditText et;
    Button b;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        tv=findViewById(R.id.textView3);
        et=findViewById(R.id.editText);
        b=findViewById(R.id.Hello);

        b.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                String s=et.getText().toString();
                tv.setText("Welcome "+s);
            }
        });
    }


  /*  public void displayMessage(View view)
    {
       String s=et.getText().toString();
       tv.setText("Welcome "+s);
    }*/

  public void myNewActivity(View view)
  {

      Intent intent = new Intent(this,newAct.class);
      intent.putExtra("NAME","Welcome");


      startActivity(intent);

  }
}
