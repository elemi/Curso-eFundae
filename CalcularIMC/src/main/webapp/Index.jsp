<%-- 
    Document   : Index
    Created on : 30 ene 2025, 1:43:02
    Author     : Emilio López Araujo
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>CALCULADORA IMC</title>
    </head>
    <body>
        <h1>Datos del usuario</h1>
        <form action="SvCalcular" method="POST">
            <p><label>Peso: </label><input type="double" name="peso"></p>
            <p><label>Altura: </label><input type="double" name="altura"></p>
            <button type="submit">Mostrar resultado</button>
        </form>
    </body>
</html>
