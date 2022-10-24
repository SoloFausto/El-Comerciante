package com.example.myapplication;
import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;
import android.webkit.WebView;
import android.webkit.WebViewClient;
import android.view.*;
public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        View decorView = getWindow().getDecorView();
        decorView.setSystemUiVisibility(
                View.SYSTEM_UI_FLAG_IMMERSIVE
                        // Ponemos el contenido abajo de las barras de navegacion para evitar
                        // que el navegador cambie de tamañp
                        | View.SYSTEM_UI_FLAG_LAYOUT_STABLE
                        | View.SYSTEM_UI_FLAG_LAYOUT_HIDE_NAVIGATION
                        | View.SYSTEM_UI_FLAG_LAYOUT_FULLSCREEN
                        // Escondemos la barra de navegacion y la de estado
                        | View.SYSTEM_UI_FLAG_HIDE_NAVIGATION
                        | View.SYSTEM_UI_FLAG_FULLSCREEN);
        // Binding MainActivity.java with
        // activity_main.xml file
        setContentView(R.layout.activity_main);

        // Encontrar el elemeto de webview por su id
        WebView w = (WebView) findViewById(R.id.web);

        // Cargar la url de nuestra pagina
        w.loadUrl("https://dolcezza-corvus.000webhostapp.com/");
        // Permite que se ejecute javascript
        w.getSettings().setJavaScriptEnabled(true);

        // WebViewClient allows you to handle
        // onPageFinished and override Url loading.
        w.setWebViewClient(new WebViewClient());

    }
}