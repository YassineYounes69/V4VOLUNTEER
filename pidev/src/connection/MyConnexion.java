/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package connection;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author dEll
 */
public class MyConnexion {
    
    String login = "root";
    String mdp = "";
    String url = "jdbc:mysql://localhost:3306/pidev";
    Connection cnx;
    static MyConnexion instance;

    public MyConnexion() {

        try {
            cnx = DriverManager.getConnection(url, login, mdp);
            System.out.println("connexion avec succès");
        } catch (SQLException ex) {
            Logger.getLogger(MyConnexion.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    public static MyConnexion getInstance() {
        if (instance == null) {
            instance = new MyConnexion();
        }
        return instance;
    }

    public Connection getCnx() {
        return cnx;
    }
    
}
