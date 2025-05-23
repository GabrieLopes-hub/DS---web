package com.example.atividade_3

import android.os.Bundle
import android.util.Log
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.clickable
import androidx.compose.foundation.layout.Box
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.Spacer
import androidx.compose.foundation.layout.fillMaxHeight
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.height
import androidx.compose.foundation.layout.padding
import androidx.compose.foundation.layout.size
import androidx.compose.foundation.shape.CircleShape
import androidx.compose.material3.Card
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.runtime.getValue
import androidx.compose.runtime.mutableIntStateOf
import androidx.compose.runtime.remember
import androidx.compose.runtime.setValue
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.atividade_3.ui.theme.Atividade3Theme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContent {
            Atividade3Theme {
                Interface()
            }
        }
    }
}

@Composable
fun Interface(){
    var Counter1 by remember { mutableIntStateOf (0) }
    var Counter2 by remember { mutableIntStateOf (0) }
    Surface(
        modifier = Modifier.fillMaxHeight().fillMaxWidth(),
        color = Color(0xFF3F69FF)
    ){
        Column(
            modifier = Modifier.fillMaxHeight().fillMaxWidth(),
            horizontalAlignment = Alignment.CenterHorizontally
        ){
            Spacer(modifier = Modifier.height(130.dp))

            Text("Time A",
                style = TextStyle(
                    color = Color.White,
                    fontSize = 39.sp)
            )
            Text("$Counter1",
                style = TextStyle(
                    color = Color.White,
                    fontSize = 39.sp)
            )
            Spacer(modifier = Modifier.height(25.dp))
            CreateCircle(Counter1){Counter1++}

            Spacer(modifier = Modifier.height(100.dp))

            Text(
                "Time B",
                style = TextStyle(
                    color = Color.White,
                    fontSize = 39.sp
                )
            )
            Text("$Counter2",
                    style = TextStyle(
                    color = Color.White,
                fontSize = 39.sp)
            )


            Spacer(modifier = Modifier.height(25.dp))
            CreateCircle(Counter2) { Counter2++ }
        }

    }

}

@Composable
fun CreateCircle(Counter: Int, onTap: () -> Unit) {
    Card(
        modifier = Modifier
            .clickable {
                onTap()
                Log.d("Contador", "CreateCircle: $Counter")
            }
            .padding(3.dp) // Espaçamento externo
            .size(150.dp), // Altura e largura iguais
        shape = CircleShape // Formato circular
    ) {
        Box (modifier = Modifier.fillMaxSize(), contentAlignment = Alignment.Center){
            Text(text = "+ 1 ponto")
        }
    }
}

@Preview(showBackground = true)
@Composable
fun DefaultPreview() {
    Atividade3Theme {
        Interface()
    }
}