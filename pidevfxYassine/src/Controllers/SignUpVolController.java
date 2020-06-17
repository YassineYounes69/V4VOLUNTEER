/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Controllers;

import Entities.User;
import Entities.Volunteer;
import Services.UserServices;
import Utils.JavaMail;
import java.awt.event.*;
import java.io.IOException;
import java.net.URL;
import java.util.Optional;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
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
import javafx.scene.control.Button;
import javafx.scene.control.TextField;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.StackPane;
import javafx.util.Duration;
import java.util.concurrent.ThreadLocalRandom;
import java.util.regex.Matcher;
import java.util.regex.Pattern;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.Label;
import javafx.scene.control.PasswordField;
import javafx.scene.control.TextInputDialog;
/**
 * FXML Controller class
 *
 * @author HP
 */
public class SignUpVolController implements Initializable {
    UserServices us = new UserServices();
    @FXML
    private StackPane parentContainer;
    @FXML
    private AnchorPane anchorRoot;
    @FXML
    private Button signUpVol;
    @FXML
    private Button loadLogIn;
    @FXML
    private TextField mail;
    @FXML
    private TextField pw;
    @FXML
    private TextField username;
    @FXML
    private TextField fname;
    @FXML
    private TextField famName;
    @FXML
    private TextField adr;
    @FXML
    private TextField phone;
    @FXML
    private PasswordField pw2;
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

    @FXML
    private void loadSignUp(ActionEvent event) throws IOException {
        Parent root = FXMLLoader.load(getClass().getResource("/Views/Landing.fxml"));
        Scene scene = loadLogIn.getScene();
        
        root.translateYProperty().set(-scene.getHeight());
        parentContainer.getChildren().add(root);
        
        Timeline timeline = new Timeline();
        KeyValue kv = new KeyValue(root.translateYProperty(), 0, Interpolator.EASE_BOTH);
        KeyFrame kf = new KeyFrame(Duration.seconds(1), kv);
        timeline.getKeyFrames().add(kf);
       parentContainer.getChildren().remove(anchorRoot);
        timeline.play();
    }

    @FXML
    private void signUp(ActionEvent event) throws IOException {
        if ("".equals(mail.getText()) || "".equals(pw.getText()) || "".equals(pw2.getText()) || "".equals(username.getText()) || "".equals(fname.getText()) || "".equals(famName.getText()) || "".equals(adr.getText()) || "".equals(phone.getText())){
    Alert alert = new Alert(AlertType.INFORMATION);
alert.setTitle("Warning !");
alert.setHeaderText("Form error");
alert.setContentText("You need to fill every field of the form !");

alert.showAndWait();
        
}  else {
            String recipient=mail.getText();
        System.out.println(recipient);
        Volunteer u = new Volunteer();
        u.setEmail(recipient);
        u.setEnabled(false);
        u.setPhoneNumber(Integer.parseInt(phone.getText()));
        u.setPw(pw.getText());
        u.setRole("VOLUN");
        u.setUserName(username.getText());
        u.setVolAdr(adr.getText());
        u.setVolFName(fname.getText());
        u.setVolName(famName.getText());
        int randomNum = ThreadLocalRandom.current().nextInt(100000, 999999 + 1);        
        String actCode = String.valueOf(randomNum);
        us.newUser(u, actCode);
        
    
        try {
        
        JavaMail.sendMail(recipient,"Activation Code",actCode);
        } catch (Exception ex) {
        Logger.getLogger(SignUpVolController.class.getName()).log(Level.SEVERE, null, ex);
        }
        TextInputDialog dialog = new TextInputDialog();
dialog.setTitle("Confirmation");
dialog.setHeaderText("You received a confirmation code on your email. Please submit it in the field below to activate your account");
dialog.setContentText("Please enter your confirmation code : ");

// Traditional way to get the response value.
Optional<String> result = dialog.showAndWait();
if (result.isPresent()){
    if (result.get().equals(actCode)){
       us.enableUserByMail(recipient); 
       Parent root = FXMLLoader.load(getClass().getResource("/Views/SignUpVol.fxml"));
       
        
      
        parentContainer.getChildren().add(root);
        
       
            parentContainer.getChildren().remove(anchorRoot);
       
    }
    else 
    {
       Alert alert = new Alert(AlertType.INFORMATION);
alert.setTitle("Warning !");
alert.setHeaderText("Activation error");
alert.setContentText("Wrong activation error !");

alert.showAndWait();
    }
}
        
        
        }
    }
    
    
   

    @FXML
    private void mail(ActionEvent event) {
    }

    @FXML
    private void controlVol(javafx.scene.input.KeyEvent event) {
        if (event.getTarget()==phone){
Pattern p = Pattern.compile("[^0-9]");
Matcher m = p.matcher(phone.getText());
boolean b = m.find();
if(b || phone.getText().isEmpty() || phone.getText().length()!=8){
phone.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
signUpVol.setDisable(true);
}else{
phone.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
signUpVol.setDisable(false);
}
        
    }
if (event.getTarget()==adr){

if(adr.getText().isEmpty()){
phone.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
signUpVol.setDisable(true);
}else{
phone.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
signUpVol.setDisable(false);
}
}

 if (event.getTarget()==famName){
Pattern p = Pattern.compile("/^[a-z \\t à . ? ! ) ( @ # < > : = + , â ê $ * ô é è ù ,A-Z ]{3,}$/i");
Matcher m = p.matcher(famName.getText());
boolean b = m.find();
if(b || famName.getText().isEmpty()){
famName.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
signUpVol.setDisable(true);
}else{
famName.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
signUpVol.setDisable(false);
}

        
    }
if (event.getTarget()==fname){
Pattern p = Pattern.compile("/^[a-z \\t à . ? ! ) ( @ # < > : = + , â ê $ * ô é è ù ,A-Z ]{3,}$/i");
Matcher m = p.matcher(fname.getText());
boolean b = m.find();
if(b || fname.getText().isEmpty()){
fname.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
signUpVol.setDisable(true);
}else{
fname.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
signUpVol.setDisable(false);
}
//fin control
}
if (event.getTarget()==username){
Pattern p = Pattern.compile("/^[a-z \\t à . ? ! ) ( @ # < > : = + , â ê $ * ô é è ù ,A-Z ]{3,}$/i");
Matcher m = p.matcher(username.getText());
boolean b = m.find();
if(b || username.getText().isEmpty()){
username.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
signUpVol.setDisable(true);
}else{
username.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
signUpVol.setDisable(false);
}
//fin control
}

if (event.getTarget()==pw){
Pattern weakPw = Pattern.compile("^[0-9]*$");
Matcher m1 = weakPw.matcher(pw.getText());
boolean b1 = m1.find();

Pattern medPw = Pattern.compile("^[a-zA-Z0-9]+$");
Matcher m2 = medPw.matcher(pw.getText());
boolean b2 = m2.find();

Pattern strongPw = Pattern.compile("^([a-zA-Z0-9@*#]{8,15})$");
Matcher m3 = strongPw.matcher(pw.getText());
boolean b3 = m3.find();


if(b1){

    weak.setVisible(true);
    Medium.setVisible(false);
    Strong.setVisible(false);
}
else if (b2){
    weak.setVisible(false);
    Medium.setVisible(true);
    Strong.setVisible(false);
}
else if (b3){
    weak.setVisible(false);
    Medium.setVisible(false);
    Strong.setVisible(true);
}
//fin control
}

if (event.getTarget()==pw || event.getTarget()==pw2){
if (pw.getText() == null ? pw2.getText() != null : !pw.getText().equals(pw2.getText())){
    pwMatch.setVisible(true);
}else if (pw.getText() == null ? pw2.getText() == null : pw.getText().equals(pw2.getText())){
    pwMatch.setVisible(false);
}
//fin control
}
if ((event.getTarget()==mail) || (event.getTarget()==pw) || event.getTarget()==pw2 || event.getTarget()==username || event.getTarget()==fname || event.getTarget()==famName || event.getTarget()==adr || event.getTarget()==phone ){
if (mail.getText()=="" || pw.getText()=="" || pw2.getText()=="" || username.getText()=="" || fname.getText()=="" || famName.getText()=="" || adr.getText()=="" || phone.getText()==""){
    signUpVol.setDisable(true);
}     
    }
    }}





/*if (event.getTarget()==text_prenom){
Pattern p = Pattern.compile("/^[a-z \\t à . ? ! ) ( @ # < > : = + , â ê $ * ô é è ù ,A-Z ]{3,}$/i");
Matcher m = p.matcher(text_prenom.getText());
boolean b = m.find();
if(b || text_prenom.getText().isEmpty()){
text_prenom.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
add.setDisable(true);
}else{
text_prenom.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
add.setDisable(false);
}
}
if (event.getTarget()==text_adresse){
Pattern p = Pattern.compile("/^[a-z \\t à . ? ! ) ( @ # < > : = + , â ê $ * ô é è ù ,A-Z ]{3,}$/i");
Matcher m = p.matcher(text_adresse.getText());
boolean b = m.find();
if(b || text_adresse.getText().isEmpty()){
text_adresse.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
add.setDisable(true);
}else{
text_adresse.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
add.setDisable(false);
}
}

if (event.getTarget()==text_id){
Pattern p = Pattern.compile("[^0-9]");
Matcher m = p.matcher(text_id.getText());
boolean b = m.find();
if(b || text_id.getText().isEmpty()){
text_id.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
add.setDisable(true);
}else{
text_id.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
add.setDisable(false);
}*/