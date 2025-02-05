package servlets;

import java.io.IOException;
import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;
import jakarta.servlet.http.HttpSession;


@WebServlet(name = "SvCalcular", urlPatterns = {"/SvCalcular"})
public class SvCalcular extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
    }

    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);      
        
    }

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        
        //Obtiene y convierte el string en doblue para poder hacer el cálculo de IMC
        double peso1 = Double.parseDouble(request.getParameter("peso"));
        double altura1 = Double.parseDouble(request.getParameter("altura"));
        
        double alturaFinal = altura1 * altura1;
        double indice = peso1 / alturaFinal;        
        
        //Guarda el resultado en la sesión para que sea accesible en el get
        HttpSession session = request.getSession();
        session.setAttribute("indice", indice);
        
        //Redirige al servlet resultado para hacer el get
        response.sendRedirect("ResultadoServlet");
        
    }

    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>
    

}
