/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Controllers;

import Entities.Ngo;
import Entities.Session;
import Services.UserServices;
import java.net.URL;
import java.util.Optional;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.PasswordField;
import javafx.scene.control.TextField;
import javafx.scene.control.TextInputDialog;
import javafx.scene.input.KeyEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.StackPane;

/**
 * FXML Controller class
 *
 * @author HP
 */
public class ManageNgoController implements Initializable {
    Session session = new Session();
    UserServices us = new UserServices();
    @FXML
    private StackPane parentContainer;
    @FXML
    private AnchorPane anchorRoot;
    @FXML
    private TextField mail;
    @FXML
    private TextField username;
    @FXML
    private TextField ngoName;
    @FXML
    private Button loadLogIn;
    @FXML
    private PasswordField pw;
    @FXML
    private Label weak;
    @FXML
    private Label Medium;
    @FXML
    private Label Strong;
    @FXML
    private Label pwMatch;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    void transferMessage(Session s) {
        System.out.println("it worked ");
         session.setOnlineUser((Ngo)s.getOnlineUser());
         Ngo v = (Ngo) session.getOnlineUser();
        System.out.println(session.getOnlineUser().toString());
        mail.setText(s.getOnlineUser().getEmail());
        username.setText(s.getOnlineUser().getUserName());
        ngoName.setText(v.getNgoName());
    }

    @FXML
    private void controlVol(KeyEvent event) {
    }

    @FXML
    private void mail(ActionEvent event) {
    }

    @FXML
    private void loadSignUp(ActionEvent event) {
    }

    @FXML
    private void updateEmail(ActionEvent event) {
        TextInputDialog dialog = new TextInputDialog(mail.getText());
dialog.setTitle("Update email");
dialog.setHeaderText("Please insert your new email :");
dialog.setContentText("New email : ");

// Traditional way to get the response value.
Optional<String> result = dialog.showAndWait();
if (result.isPresent()){
    
    us.updateEmail(result.get(), session.getOnlineUser().getId());
    mail.setText(result.get());
    }
    }
    
    @FXML
    private void updatePw(ActionEvent event) {
        TextInputDialog dialog = new TextInputDialog(pw.getText());
dialog.setTitle("Update password");
dialog.setHeaderText("Please insert your new password :");
dialog.setContentText("New password : ");

// Traditional way to get the response value.
Optional<String> result = dialog.showAndWait();
if (result.isPresent()){
    
    us.updatepw(result.get(), session.getOnlineUser().getId());
    pw.setText(result.get());
    }
    }

    @FXML
    private void updateUn(ActionEvent event) {
        
        TextInputDialog dialog = new TextInputDialog(username.getText());
dialog.setTitle("Update username");
dialog.setHeaderText("Please insert your new username :");
dialog.setContentText("New username : ");

// Traditional way to get the response value.
Optional<String> result = dialog.showAndWait();
if (result.isPresent()){    
    us.updateUN(result.get(), session.getOnlineUser().getId());
    username.setText(result.get());
    }
    }

    @FXML
    private void UpdateName(ActionEvent event) {
        
        TextInputDialog dialog = new TextInputDialog(ngoName.getText());
dialog.setTitle("Update NGO name");
dialog.setHeaderText("Please insert your new NGO name :");
dialog.setContentText("New NGO name : ");

// Traditional way to get the response value.
Optional<String> result = dialog.showAndWait();
if (result.isPresent()){    
    us.updateNgoName(result.get(), session.getOnlineUser().getId());
    ngoName.setText(result.get());
    }
    }
    
}
