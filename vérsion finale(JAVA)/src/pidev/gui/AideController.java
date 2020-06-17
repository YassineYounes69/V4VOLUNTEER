/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev.gui;

import pidev.entities.aide;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.text.ParseException;
import java.util.ArrayList;
import java.util.ResourceBundle;
import java.util.regex.Matcher;
import java.util.regex.Pattern;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.KeyEvent;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;
import javax.swing.JOptionPane;
import org.controlsfx.control.Notifications;
import pidev.services.Serviceaide;



/**
 * FXML Controller class
 *
 * @author WiKi Kef
 */
public class AideController implements Initializable {

    @FXML
    private TableView<aide> tableview;
    @FXML
    private TableColumn<aide, Integer> col_id;
    @FXML
    private TableColumn<aide, Integer> col_id_user;
    @FXML
    private TableColumn<aide, Integer> col_id_PA;
    @FXML
    private TableColumn<aide, Integer> col_donation;
    @FXML
    private TextField text_id;
    @FXML
    private TextField text_id_user;
    @FXML
    private TextField text_id_PA;
    @FXML
    private TextField text_donation;
    @FXML
    private AnchorPane zone_modifier;
    @FXML
    private TextField text_id1;
    @FXML
    private TextField text_id_user1;
    @FXML
    private TextField text_id_PA1;
    @FXML
    private TextField text_donation1;
    @FXML
    private AnchorPane zone_ajouter;
    public static ObservableList<aide>tableData;
    @FXML
    private Button valid;
    @FXML
    private Button valid1;
    @FXML
    private TextField TextFieldSomme;
    

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        init();
        LoadDataaide();                                                
        zone_modifier.setVisible(false);
        zone_ajouter.setVisible(false);
        tableview.setEditable(true);
        
        
        

    }

    private void init() {
        col_id.setCellValueFactory(new PropertyValueFactory<>("id"));
        col_id_user.setCellValueFactory(new PropertyValueFactory<>("id_user"));
        col_id_PA.setCellValueFactory(new PropertyValueFactory<>("id_PA"));
        col_donation.setCellValueFactory(new PropertyValueFactory<>("donation"));
        

    }

    private void LoadDataaide() {
        Serviceaide sai = new Serviceaide();
        ArrayList<aide> aide= new ArrayList<>();
        tableData = FXCollections.observableArrayList(aide);
        aide = (ArrayList<aide>)sai.afficher();

        for (int i = 0; i < aide.size(); i++) {
            tableData.add(aide.get(i));

        }
        tableview.setItems(tableData);
        
    }

public void changeScreenAjouter(ActionEvent event) throws IOException {    
        Parent tableViewParent = FXMLLoader.load(getClass().getResource("Ajouteraide.fxml"));
        Scene tableViewScene = new Scene(tableViewParent);

        //This line gets the Stage information
        Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();

        window.setScene(tableViewScene);
        window.show();
        
    }

    @FXML
    public void supprimerPushed() throws SQLException {

        aide ai = (aide) tableview.getSelectionModel().getSelectedItem();
        Serviceaide sai = new Serviceaide();
        sai.supprimer(ai);
        JOptionPane.showMessageDialog(null, "Supprimé avec succés");
        LoadDataaide();
        
        Notifications notificationBuilder;
            notificationBuilder = Notifications.create().title("aide").text("aide supprimée avec succès !");
			notificationBuilder.show();
        
    }

   
    @FXML
    public void modifierPushed(ActionEvent event) throws ParseException {

        zone_modifier.setVisible(true);

        aide aide = tableview.getSelectionModel().getSelectedItem();

        text_id.setText(String.valueOf(aide.getId()));
       // text_idMembre.setText(String.valueOf(evenements.getId_membre().getId()));
        text_id_user.setText(String.valueOf(aide.getId_user()));
        text_id_PA.setText(String.valueOf(aide.getId_PA()));
        text_donation.setText(String.valueOf(aide.getDonation()));
        
         Notifications notificationBuilder;
            notificationBuilder = Notifications.create().title("aide").text("aide modifiée avec succès !");
			notificationBuilder.show();
           
    }
    @FXML
    public void valider2Pushed(ActionEvent event) throws ParseException {

        zone_ajouter.setVisible(true);
        
         Notifications notificationBuilder;
            notificationBuilder = Notifications.create().title("aide").text("aide ajoutée avec succès !");
			notificationBuilder.show();
        
    }


    @FXML
    public void ValiderPushed(ActionEvent event) throws SQLException {

        aide ai = new aide(Integer.parseInt(text_id.getText()),
                //Long.parseLong(text_idMembre.getText()),
                Integer.parseInt(text_id_user.getText()),
                Integer.parseInt(text_id_PA.getText()),
                Integer.parseInt(text_donation.getText())
                );

        Serviceaide sai = new Serviceaide();
        sai.modifier(ai);
        JOptionPane.showMessageDialog(null, "aide Modifiée avec succée");
        zone_modifier.setVisible(false);
        LoadDataaide();
        
         Notifications notificationBuilder;
            notificationBuilder = Notifications.create().title("aide").text("aide ajoutée avec succès !");
			notificationBuilder.show();
        
    }
    
    @FXML
    public void AjouterPushed(ActionEvent event) throws SQLException {

        aide ai = new aide(Integer.parseInt(text_id1.getText()),
                //Long.parseLong(text_idMembre.getText()),
                Integer.parseInt(text_id_user1.getText()),
                Integer.parseInt(text_id_PA1.getText()),
                Integer.parseInt(text_donation1.getText())
                );

        Serviceaide sai = new Serviceaide();
        sai.ajouter(ai);
        JOptionPane.showMessageDialog(null, "aide ajoutée avec succée");
        zone_ajouter.setVisible(false);
        LoadDataaide();
       
         Notifications notificationBuilder;
            notificationBuilder = Notifications.create().title("aide").text("aide ajoutée avec succès !");
			notificationBuilder.show();
    }
    
    @FXML
    private void Control(KeyEvent event){

        if (event.getTarget()==text_id){
        Pattern p = Pattern.compile("[^0-9]");
        Matcher m = p.matcher(text_id.getText());
        boolean b = m.find();
            if(b || text_id.getText().isEmpty()){
                text_id.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
                valid.setDisable(true);
            }else{
                text_id.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
                valid.setDisable(false);
            }
        }
            if (event.getTarget()==text_id_user){
        Pattern p = Pattern.compile("[^0-9]");
        Matcher m = p.matcher(text_id_user.getText());
        boolean b = m.find();
            if(b || text_id_user.getText().isEmpty()){
                text_id_user.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
                valid.setDisable(true);
            }else{
                text_id_user.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
                valid.setDisable(false);
            }
            }
            if (event.getTarget()==text_id_PA){
        Pattern p = Pattern.compile("[^0-9]");
        Matcher m = p.matcher(text_id_PA.getText());
        boolean b = m.find();
            if(b || text_id_PA.getText().isEmpty()){
                text_id_PA.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
                valid.setDisable(true);
            }else{
                text_id_PA.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
                valid.setDisable(false);
            }
            }
            if (event.getTarget()==text_donation){
        Pattern p = Pattern.compile("[^0-9]");
        Matcher m = p.matcher(text_donation.getText());
        boolean b = m.find();
            if(b || text_donation.getText().isEmpty()){
                text_donation.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
                valid.setDisable(true);
            }else{
                text_donation.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
                valid.setDisable(false);
            }
        }
    }
    
    @FXML
    private void Control1(KeyEvent event){

        if (event.getTarget()==text_id1){
        Pattern p = Pattern.compile("[^0-9]");
        Matcher m = p.matcher(text_id1.getText());
        boolean b = m.find();
            if(b || text_id1.getText().isEmpty()){
                text_id1.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
                valid1.setDisable(true);
            }else{
                text_id1.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
                valid1.setDisable(false);
            }
        }
            if (event.getTarget()==text_id_user1){
        Pattern p = Pattern.compile("[^0-9]");
        Matcher m = p.matcher(text_id_user1.getText());
        boolean b = m.find();
            if(b || text_id_user1.getText().isEmpty()){
                text_id_user1.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
                valid1.setDisable(true);
            }else{
                text_id_user1.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
                valid1.setDisable(false);
            }
            }
            if (event.getTarget()==text_id_PA1){
        Pattern p = Pattern.compile("[^0-9]");
        Matcher m = p.matcher(text_id_PA1.getText());
        boolean b = m.find();
            if(b || text_id_PA1.getText().isEmpty()){
                text_id_PA1.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
                valid1.setDisable(true);
            }else{
                text_id_PA1.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
                valid1.setDisable(false);
            }
            }
            if (event.getTarget()==text_donation1){
        Pattern p = Pattern.compile("[^0-9]");
        Matcher m = p.matcher(text_donation1.getText());
        boolean b = m.find();
            if(b || text_donation1.getText().isEmpty()){
                text_donation1.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
                valid1.setDisable(true);
            }else{
                text_donation1.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
                valid1.setDisable(false);
            }
        }
    }
    
    @FXML
    public void annuler2Pushed(ActionEvent event) {
        zone_ajouter.setVisible(false);
        
         Notifications notificationBuilder;
            notificationBuilder = Notifications.create().title("aide").text("aide annulée avec succès !");
			notificationBuilder.show();
        
    }

    @FXML
    public void annulerPushed(ActionEvent event) {
        zone_modifier.setVisible(false);
        
         Notifications notificationBuilder;
            notificationBuilder = Notifications.create().title("aide").text("aide annulée avec succès !");
			notificationBuilder.show();
        
    }
    @FXML
  public void espaceaidePushed(ActionEvent event) throws IOException {
        Parent tableViewParent = FXMLLoader.load(getClass().getResource("FXMLDocument.fxml"));
        Scene tableViewScene = new Scene(tableViewParent);

        //This line gets the Stage information
        Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();

        window.setScene(tableViewScene);
        window.show();
    }

    @FXML
    private void ButtonSommeAction(ActionEvent event) {
        Serviceaide saide=new Serviceaide();
       TextFieldSomme.setText(Integer.toString(  saide.sommeDonnation()));
    }
@FXML
    public void acceuilPushed(ActionEvent event) throws IOException {
        Parent tableViewParent = FXMLLoader.load(getClass().getResource("Home.fxml"));
        Scene tableViewScene = new Scene(tableViewParent);

        //This line gets the Stage information
        Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();

        window.setScene(tableViewScene);
        window.show();
    }
     @FXML
    public void donationPushed(ActionEvent event) throws IOException {
        Parent tableViewParent = FXMLLoader.load(getClass().getResource("Demande_admin.fxml"));
        Scene tableViewScene = new Scene(tableViewParent);

        //This line gets the Stage information
        Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();

        window.setScene(tableViewScene);
        window.show();
    }
     @FXML
    public void evenementPushed(ActionEvent event) throws IOException {
        Parent tableViewParent = FXMLLoader.load(getClass().getResource("EvenementASSO.fxml"));
        Scene tableViewScene = new Scene(tableViewParent);

        //This line gets the Stage information
        Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();

        window.setScene(tableViewScene);
        window.show();
    }
     @FXML
    public void refugiePushed(ActionEvent event) throws IOException {
        Parent tableViewParent = FXMLLoader.load(getClass().getResource("EvenementASSO.fxml"));
        Scene tableViewScene = new Scene(tableViewParent);

        //This line gets the Stage information
        Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();

        window.setScene(tableViewScene);
        window.show();
    }
     @FXML
    public void oppPushed(ActionEvent event) throws IOException {
        Parent tableViewParent = FXMLLoader.load(getClass().getResource("EvenementASSO.fxml"));
        Scene tableViewScene = new Scene(tableViewParent);

        //This line gets the Stage information
        Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();

        window.setScene(tableViewScene);
        window.show();
    }
     @FXML
    public void ageePushed(ActionEvent event) throws IOException {
        Parent tableViewParent = FXMLLoader.load(getClass().getResource("FXMLDocument.fxml"));
        Scene tableViewScene = new Scene(tableViewParent);

        //This line gets the Stage information
        Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();

        window.setScene(tableViewScene);
        window.show();
    }
}

 