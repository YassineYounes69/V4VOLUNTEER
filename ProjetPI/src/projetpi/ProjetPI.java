/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projetpi;

import connection.MyConnexion;
import controller.logcont;
import entities.Logement;
import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.text.ParseException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.application.Application;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.layout.Pane;
import javafx.stage.Stage;

/**
 *
 * @author dEll
 */
public class ProjetPI extends Application {
    
    @Override
    public void start(Stage stage) throws Exception {
        
       
        URL url = getClass().getResource("afflog.fxml");
        Parent root = FXMLLoader.load(url);      
        Scene scene = new Scene(root);        
        stage.setScene(scene);
        stage.show();
        
     /*  logcont l =new logcont();
       l.SupprimerLog(6);*/
        
    }

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
         
        launch(args);
    }
    
}
