/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev;

import connection.MyConnexion;
import controller.logcont;
import controller.refcont;
import entities.Logement;
import entities.Refugies;
import java.sql.SQLException;
import java.text.ParseException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.application.Application;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;

/**
 *
 * @author dEll
 */
public class Pidev extends Application {
    
    @Override
    public void start(Stage stage) throws Exception {
     
        
        /* Parent root = FXMLLoader.load(getClass().getResource("FXMLDocument.fxml"));
        
        Scene scene = new Scene(root);
        
        stage.setScene(scene);
        stage.show();*/
       
       
        /*logcont log = new logcont();
        Logement lo = new Logement('9',"k", "dsv", "dvs");
        try {
            log.ajouterLog2(lo);
        } catch (SQLException ex) {
            Logger.getLogger(Pidev.class.getName()).log(Level.SEVERE, null, ex);
        } catch (ParseException ex) {
            Logger.getLogger(Pidev.class.getName()).log(Level.SEVERE, null, ex);
        }
        MyConnexion c = new MyConnexion();
        System.out.println(c.getCnx());*/
        refcont ref = new refcont();
        Refugies r = new Refugies("a","a", "a", "a",5,"a","a");
        try {
            /*ref.ModifierRef(r, 29);*/
            ref.SupprimerRef(30);
            
            
        } catch (SQLException ex) {
            Logger.getLogger(Pidev.class.getName()).log(Level.SEVERE, null, ex);
        }
        MyConnexion c = new MyConnexion();
        System.out.println(c.getCnx());
    }

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        launch(args);
    }
    
}
