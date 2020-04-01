/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev;


import java.io.IOException;
import java.net.URL;
import javafx.application.Application;


import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;


import javafx.stage.Stage;

/**
 *
 * @author dEll
 */
public class test extends Application{
    
        @Override
   public void start(Stage stage) throws IOException {
        URL url = getClass().getResource("../GUI/afflog.fxml");
        Parent root = FXMLLoader.load(url);
         /* Parent root = FXMLLoader.load(getClass().getResource("FXMLDocument.fxml"));*/
        
        Scene scene = new Scene(root);
        
        stage.setScene(scene);
        stage.show();
       
        
        

        //  primaryStage.setTitle("Hello World!");
      ;
    }
    
   public static void main(String[] args) {
        launch(args);
    }
    
    
}
