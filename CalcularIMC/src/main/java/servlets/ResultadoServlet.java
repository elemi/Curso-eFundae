package servlets;

import java.io.IOException;
import java.io.PrintWriter;
import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;
import jakarta.servlet.http.HttpSession;
import java.text.DecimalFormat;


@WebServlet(urlPatterns = {"/ResultadoServlet"})
public class ResultadoServlet extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
    }

    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
        
        //Obtiene el valor desde la sesión
        HttpSession session = request.getSession();
        double indice = (Double) session.getAttribute("indice");
        
        DecimalFormat df = new DecimalFormat("#.##");
                
       // Muestra el IMC redondeado a 2 decimales
            response.setContentType("text/html");
            PrintWriter out = response.getWriter();
            out.println("<html><body>");
            out.println("<h1>Datos del usuario</h1>");
            out.println("<form action=\"SvCalcular\" method=\"GET\">");
            out.println("<p><label>Peso: </label><input type=\"double\" name=\"peso\"></p>");
            out.println("<p><label>Altura: </label><input type=\"double\" name=\"altura\"></p>");            
            out.println("<button type=\"submit\">Mostrar resultado</button></form>");
            out.println("<h1>Resultado</h1>");
            out.println("<h1>Indice de masa corporal: " + df.format(indice) + "<h1>");
            out.println("</body></html>");
    }

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
