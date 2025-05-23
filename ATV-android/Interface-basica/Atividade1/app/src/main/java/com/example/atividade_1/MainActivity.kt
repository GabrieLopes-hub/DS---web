package com.example.atividade_1
import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.fillMaxHeight
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.padding
import androidx.compose.material3.Card
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import com.example.atividade_1.ui.theme.Atividade1Theme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContent {
            Atividade1Theme {
                MeuApp()
            }
        }
    }
}

@Composable
fun MeuApp() {
    Surface(modifier = Modifier.fillMaxHeight().fillMaxWidth(),
        color = Color.Blue,
    ) {

        Column (verticalArrangement = Arrangement.Center,
            horizontalAlignment = Alignment.CenterHorizontally
        ){
            Card (modifier = Modifier.fillMaxWidth().padding(40.dp),){
                    Column(modifier = Modifier.padding(16.dp)) {
                        Text("Nome: Gabriel")
                        Text("Telefone: 123456")
                        Text("Email: gabriel@gmail.com")
                    }
            }
            Card (modifier = Modifier.fillMaxWidth().padding(40.dp),){
                Column (modifier = Modifier.padding(16.dp)){
                    Text(" Nome: Woolne7977 ")
                    Text(" Telefone: 123456789 ")
                    Text(" Email: Woolen@gmail.com ")
                }
            }


        }
    }

}

@Preview(showBackground = true)
@Composable
fun DefaultPreview() {
    Atividade1Theme {
        MeuApp()
    }
}