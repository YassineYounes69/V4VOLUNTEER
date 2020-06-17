/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Utils;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author ASUS-PC
 */
public class DataSource {
    String login="root";
    String mdp="";
    String url="jdbc:mysql://localhost:3306/pidev";
    Connection cnx;
    static DataSource instance;

    
    
    public DataSource(){
    
        try {
            cnx = DriverManager.getConnection(url,login,mdp);
            System.out.println("connexion avec succès");
        } catch (SQLException ex) {
            Logger.getLogger(DataSource.class.getName()).log(Level.SEVERE, null, ex);
        }

   
    }
    
    public static DataSource getInstance(){
        if(instance==null){
            instance = new DataSource();
        }
        return instance;
    }
    
    
    public Connection getCnx(){
    return cnx;
}
}
