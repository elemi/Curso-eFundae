//Función que muestra el nombre por pantalla
function Persona(i){
    document.write("Mi nombre es " + i + '<br>');
}

//Función que muestra la edad por pantalla
function ano(i){
    document.write("Mi edad es " + i + '<br>');
}

//Función que muestra por pantalla si me gusta o no la programación
function prog(i){
    if(i == true){
        document.write("Me gusta programar" + '<br>');
    }else{
        document.write("No me gusta la programafción" + '<br>')
    }
    
}
//Función que muestra en consola los valores del objeto
function informacion(i){
    console.log(i);
}

//Función que muestra por pantalla y por consola los valores del array[]
function inter(i){
    console.log(i);

    for(e = 0; e < i.length; e++){

        document.write(i[e] + '<br>')

    }
}
