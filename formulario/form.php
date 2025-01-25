<!DOCTYPE html>
<html>
    <head>
        <title>Formulario con validación PHP</title>
        <link rel="stylesheet" type="text/css" href="EstiloForm.css">
        <link href="bootstrap-5.3.3-dist\css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body id="cuerpo">
        <div id = "encabezado">
            <h1>FORMULARIO</h1>
        </div>
        <div id="contenedor">
            <form action = "procesar.php" method = "POST">
                <table id = "tabla" class="table table-dark table-striped">
                    <tr>
                        <td coldspan = "5">
                            <label for = "nombre">Nombre </label>
                        </td>
                        <td></td>
                        <td coldspan = "5">
                            <input class="form-control" type = "text" id = "nombre" name = "nombre" value = "">
                        </td>
                    </tr>
                    <tr>
                        <td coldspan = "5">
                            <label for = "primerApellido">Primer apellido </label>
                        </td>
                        <td></td>
                        <td coldspan = "5">
                            <input class="form-control" type = "text" id = "primerApellido" name = "primerApellido">
                        </td>
                    </tr>
                    <tr>
                        <td coldspan = "5">
                            <label for = "segundoApellido">Segundo apellido </label>
                        </td>
                        <td></td>
                        <td coldspan = "5">
                            <input class="form-control" type = "text" id = "segundoApellido" name = "segundoApellido">
                        </td>
                    </tr>
                    <tr>
                        <td coldspan = "5">
                            <label for = "email">Correo electrónico </label>
                        </td>
                        <td></td>
                        <td coldspan = "5">
                            <input class="form-control" type = "email" id = "email" name = "email">
                        </td>
                    </tr>
                    <tr>
                        <td coldspan = "5">
                            <label for = "telefono">Teléfono </label>
                        </td>
                        <td></td>
                        <td coldspan = "5">
                            <input class="form-control" type = "tel" id = "telefono" name = "telefono">
                        </td>
                    </tr>
                    <tr>
                        <td coldspan = "5">
                            <label for = "altura">Altura </label>
                        </td>
                        <td></td>
                        <td coldspan = "5">
                            <input class="form-control" type = "float" id = "altura" name = "altura">
                        </td>                        
                    </tr>
                    <tr>
                        <td coldspan = "5">
                            <label for = "peso">Peso </label>
                        </td>
                        <td></td>
                        <td coldspan = "5">
                            <input class="form-control" type = "float" id = "peso" name = "peso">
                        </td>                    
                    </tr>
                    <tr>
                        <td coldspan = "5">
                            <label for = "anchuraPecho">Anchura de pecho </label>
                        </td>
                        <td></td>
                        <td coldspan = "5">
                            <input class="form-control" type = "float" id = "anchuraPecho" name = "anchuraPecho">
                        </td>                    
                    </tr>
                    <tr>
                        <td coldspan = "5">
                            <label for = "anchuraCintura">Anchura de cintura </label>
                        </td>
                        <td></td>
                        <td coldspan = "5">
                            <input class="form-control" type = "float" id = "anchuraCintura" name = "anchuraCintura">
                        </td>                    
                    </tr>
                    <tr>
                        <td coldspan = "5">
                            <label for = "anchuraCadera">Anchura de cadera </label>
                        </td>
                        <td></td>
                        <td coldspan = "5">
                            <input class="form-control" type = "float" id = "anchuraCadera" name = "anchuraCadera">
                        </td>                    
                    </tr>
                    <tr>
                        <td coldspan = "5">
                            <label for = "foto">Foto de cuerpo entero </label>
                        </td>
                        <td></td>
                        <td coldspan = "5">
                            <input type = "file" id = "foto" name = "foto" accept=".jpg, .jpeg, .png" required>
                        </td>                    
                    </tr>
                    <tr>
                        <td coldspan = "5">
                            <label for = "direccion">Dirección de envío </label>
                        </td>
                        <td></td>
                        <td coldspan = "5">
                            <input class="form-control" type = "text" id = "direccion" name = "direccion">
                        </td>                    
                    </tr>
                    <tr>
                        <td coldspan = "5">
                            <label for = "metodoPago">Método de pago</label>
                        </td>
                        <td></td>
                        <td coldspan = "5">
                            <select class="form-control" name="eleccion" required>
                                <option value = "">Selecciona método de pago</option>
                                <option value = "paypal">PayPal</option>
                                <option value = "transferencia">Transferencia bancaria</option>
                                <option value = "contraReembolso">Contra reembolso</option>
                            </select>
                        </td>                    
                    </tr>
                    <tr>
                        <td coldspan = "5">
                            <label for = "comentario">Comentarios</label>
                        </td>
                        <td></td>
                        <td coldspan = "5">
                            <textarea id = "comentario" name = "comentario" rows="5" cols="50"></textarea>
                        </td>                    
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input class="btn btn-primary"  type = "submit" value = "Enviar"></input></td>
                    </tr>                                       
                </table>
                
            </form>
        </div>      
    </body>
</html>

