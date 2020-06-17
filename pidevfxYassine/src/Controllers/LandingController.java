/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Controllers;

import Entities.Ngo;
import Entities.Session;
import Entities.User;
import Entities.Volunteer;
import Services.SessionServices;
import Services.UserServices;
import Utils.macAdr;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;


import java.util.ResourceBundle;
import javafx.animation.Interpolator;
import javafx.animation.KeyFrame;
import javafx.animation.KeyValue;
import javafx.animation.Timeline;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.Button;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.PasswordField;
import javafx.scene.control.TabPane;
import javafx.scene.control.TextField;
import javafx.scene.layout.StackPane;
import javafx.stage.Stage;
import javafx.util.Duration;

/**
 * FXML Controller class
 *
 * @author HP
 */
public class LandingController implements Initializable {

    @FXML
    private Button loginVol;
    @FXML
    private Button loginNGO;
    @FXML
    private Button loginAdmin;
    @FXML
    private TextField usernameV;
    @FXML
    private PasswordField pwV;
    @FXML
    private TextField usernameN;
    Session session = new Session();
    SessionServices ss = new SessionServices();
    @FXML
    private Hyperlink signUp;
    @FXML
    private StackPane parentContainer;
    @FXML
    private TabPane anchorRoot;
    @FXML
    private PasswordField pwN;
    
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        
    }    

    @FXML
    private void logAsV(ActionEvent event) throws IOException {
        
        String username = usernameV.getText();
        String pw = pwV.getText();
        if ("".equals(username) || "".equals(pw)){
            Alert alert = new Alert(AlertType.INFORMATION);
        alert.setTitle("Warning !");
       
        alert.setContentText("You must fill the form fields");
        alert.show();
        } else {
            if (ss.connect(username, pw) == null){
             Alert alert = new Alert(AlertType.INFORMATION);
        alert.setTitle("Warning !");
       
        alert.setContentText("Wrong credentials !");
        alert.show();
        } else if (ss.connect(username, pw) instanceof Volunteer){
            
            Volunteer u = (Volunteer) ss.connect(username, pw);
            
            session.setOnlineUser(u);
            session.setOnline(true);
            UserServices us = new UserServices();
            String mac = macAdr.getMacAdr();
            us.updateMacAdr(mac, u.getId());
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/Views/manageVol.fxml"));
            Parent root = loader.load();
            ManageVolController manageVolController = loader.getController();
            manageVolController.transferMessage(session);
            Stage stage = new Stage();
            stage.setScene(new Scene(root));
            stage.setTitle("Manage account");
            stage.show();
            
        }
        else 
        {
            System.out.println(ss.connect(username, pw).getClass());
        }
        }
        
        
     
        if(session.isOnline()){
            System.out.println("En ligne");
            System.out.println("Role : "+session.getOnlineUser().getRole());
            }
        else 
            System.out.println("Hors ligne");
        
        /*Alert alert = new Alert(AlertType.INFORMATION);
        alert.setTitle("Message Here...");
        alert.setHeaderText("Look, an Information Dialog");
        alert.setContentText("Username : "+username+"\nPassword : "+pw);
        alert.show();*/
    }

    @FXML
    private void logAsN(ActionEvent event) throws IOException {
         String username = usernameN.getText();
        String pw = pwN.getText();
        if ("".equals(usernameN) || "".equals(pwN)){
            Alert alert = new Alert(AlertType.INFORMATION);
        alert.setTitle("Warning !");
       
        alert.setContentText("You must fill the form fields");
        alert.show();
        } else {
            if (ss.connect(username, pw) == null){
             Alert alert = new Alert(AlertType.INFORMATION);
        alert.setTitle("Warning !");
       
        alert.setContentText("Wrong credentials !");
        alert.show();
        } else if (ss.connect(username, pw) instanceof Ngo){
            
            Ngo u = (Ngo) ss.connect(username, pw);
            
                UserServices us = new UserServices();
            
           
            session.setOnlineUser(u);
            session.setOnline(true);
            
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/Views/manageNgo.fxml"));
            Parent root = loader.load();
            ManageNgoController manageNgoController = loader.getController();
            manageNgoController.transferMessage(session);
            Stage stage = new Stage();
            stage.setScene(new Scene(root));
            stage.setTitle("Manage account");
            stage.show();
            } 
        }
    }

    @FXML
    private void logAsA(ActionEvent event) {
    }

   

    @FXML
    private void loadSignUpV(ActionEvent event) throws IOException {
         Parent root = FXMLLoader.load(getClass().getResource("/Views/SignUpVol.fxml"));
        Scene scene = signUp.getScene();
        
        root.translateYProperty().set(scene.getHeight());
        parentContainer.getChildren().add(root);
        
        Timeline timeline = new Timeline();
        KeyValue kv = new KeyValue(root.translateYProperty(), 0, Interpolator.EASE_IN);
        KeyFrame kf = new KeyFrame(Duration.seconds(1), kv);
        timeline.getKeyFrames().add(kf);
        timeline.setOnFinished(event1 -> {
            parentContainer.getChildren().remove(anchorRoot);
        });
        timeline.play();
    }

    @FXML
    private void loadSignUpN(ActionEvent event) throws IOException {
        Parent root = FXMLLoader.load(getClass().getResource("/Views/SignUpN.fxml"));
        Scene scene = signUp.getScene();
        
        root.translateYProperty().set(scene.getHeight());
        parentContainer.getChildren().add(root);
        
        Timeline timeline = new Timeline();
        KeyValue kv = new KeyValue(root.translateYProperty(), 0, Interpolator.EASE_IN);
        KeyFrame kf = new KeyFrame(Duration.seconds(1), kv);
        timeline.getKeyFrames().add(kf);
        timeline.setOnFinished(event1 -> {
            parentContainer.getChildren().remove(anchorRoot);
        });
        timeline.play();
    }
    
}
