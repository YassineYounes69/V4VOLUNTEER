/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev.tests;

import javafx.application.Application;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;
import java.io.IOException;
import static javafx.application.Application.launch;

/**
 *
 * @author EliteBook
 */
public class Pidev_Rejeb extends Application {

    @Override
    public void start(Stage stage) throws IOException {
              Parent root = FXMLLoader.load(getClass().getResource("/pidev/gui/EvenementASSO.fxml"));
    // Parent root = FXMLLoader.load(getClass().getResource("/pidev/gui/Volontaire.fxml"));

        Scene scene = new Scene(root);

        stage.setScene(scene);
        stage.show();
    }

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        launch(args);
    }

}
