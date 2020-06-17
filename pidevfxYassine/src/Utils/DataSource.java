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
 * @author HP
 */
public class DataSource {
    String login="root";
    String pw="";
    String url="jdbc:mysql://localhost:3306/pidev";
    Connection cnx;
    static DataSource instance;
    private DataSource(){
    
        try {    
            cnx = DriverManager.getConnection(url,login,pw);
            System.out.println("connected to db");
        } catch (SQLException ex) {
            Logger.getLogger(DataSource.class.getName()).log(Level.SEVERE, null, ex);
        }
   
    
    }

    public Connection getCnx() {
        return cnx;
    }
    
    
    
    public static DataSource getInstance(){
        if(instance==null){
            instance = new DataSource();
        }
        return instance;
    }
}
