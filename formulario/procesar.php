<?php

    if($_SERVER["REQUEST_METHOD"] === "POST"){

        $nombre = sanear($_POST["nombre"]);
        $primerApellido = sanear($_POST["primerApellido"]);
        $segundoApellido = sanear($_POST["segundoApellido"]);
        $email = sanear($_POST["email"]);
        $telefono = $_POST["telefono"];
        $altura = $_POST["altura"];
        $peso = $_POST["peso"];
        $anchuraPecho = $_POST["anchuraPecho"];
        $anchuraCintura = $_POST["anchuraCintura"];
        $anchuraCadera = $_POST["anchuraCadera"];
        $direccion = sanear($_POST["direccion"]);
        $comentario = sanear($_POST["comentario"]);

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){      
        
            if(validar($nombre)){

                if(validar($primerApellido)){

                    if(validar($segundoApellido)){

                        if(validarTelefono($telefono)){

                            if(filter_var($altura, FILTER_VALIDATE_FLOAT)){

                                if(filter_var($peso, FILTER_VALIDATE_FLOAT)){

                                    if(filter_var($anchuraPecho, FILTER_VALIDATE_FLOAT)){

                                        if(filter_var($anchuraCintura, FILTER_VALIDATE_FLOAT)){

                                            if(filter_var($anchuraCadera, FILTER_VALIDATE_FLOAT)){

                                                if(validarDireccion($direccion)){

                                                    if(validar($comentario)){

                                                            echo "FORMULARIO ENVIADO CORRECTAMENTE, GRACIAS";

                                                    }else{
                                                        echo "ERROR COMENTARIO";
                                                    }
                                                }else{
                                                    echo "ERROR DIRECCION";
                                                }
                                            }else{
                                                echo "ERROR ANCHURA CADERA";
                                            }
                                        }else{
                                            echo "ERROR ANCHURA CINTURA";
                                        }
                                    }else{
                                        echo "ERROR ANCHURA PECHO";
                                    }
                                }else{
                                    echo "ERROR PESO";
                                }
                            }else{
                                echo "ERROR ALTUTA";
                            }
                        }else{
                            echo "ERROR TELEFONO";
                        }                       
                    }else{
                        echo "ERROR SEGUNDO APELLIDO";
                    }
                }else{
                    echo "ERROR PRIMER APELLIDO";
                }
            }else{
                echo "ERROR NOMBRE";
            }
        }else{
            echo "ERROR EMAIL";
        }
    }    

    //Función que limpia los datos evitando caracteres especiales convirtiendolos en entidades HTML para evitar scripts
    //La función TRIM elimina los espacios en blanco al principio y al final de la cadena de texto
    function sanear($input){

        return htmlspecialchars(trim($input));
    }
    //Función que valida la cadena de texto comprobando que sea un nombre real
    function validar($name){

        return preg_match("/^[a-zA-Z ]{2,}$/", $name);
    }
    //Función que comprueba que el número de teléfono este compuesto por números y sea de 9 cifras
    function validarTelefono($numero){
   
	    return preg_match("/^[9|8|6|7][0-9]{8}$/", $numero);
	}
    //Funcion que valida y permite ingresar dirección física con algunos caracteres especiales
    function validarDireccion($direccionFisica){

        return preg_match("/^[a-zA-Z0-9ºª., ]{2,}$/", $direccionFisica);
    }
?>
