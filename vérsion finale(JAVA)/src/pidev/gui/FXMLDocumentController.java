/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev.gui;


import java.awt.AWTException;
import java.awt.TrayIcon;
import java.io.IOException;
import java.net.MalformedURLException;
import java.net.URL;
import java.sql.SQLException;
import java.text.ParseException;
import java.time.Duration;
import java.util.ArrayList;
import java.util.ResourceBundle;
import java.util.regex.Matcher;
import java.util.regex.Pattern;
import javafx.beans.value.ChangeListener;
import javafx.beans.value.ObservableValue;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.geometry.Pos;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;
import javax.swing.JOptionPane;
import javafx.scene.input.KeyEvent;
import org.controlsfx.control.Notifications;
import pidev.entities.agee;
import pidev.services.Serviceagee;

/**
 *
 * @author WiKi Kef
 */
public class FXMLDocumentController implements Initializable {
    
   @FXML
    private TableView<agee> tableview;
    @FXML
    private TableColumn<agee, Integer> col_id;
    @FXML
    private TableColumn<agee, String> col_nom;
    @FXML
    private TableColumn<agee, String> col_prenom;
    @FXML
    private TableColumn<agee, Integer> col_age;
    @FXML
    private TableColumn<agee, String> col_adresse;
    @FXML
    private TableColumn<agee, Integer> col_id_membre;
    @FXML
    private TableColumn<agee, Integer> col_donation;
    @FXML
    private TextField text_id;
    @FXML
    private TextField text_nom;
    @FXML
    private TextField text_prenom;
    @FXML
    private TextField text_age;
    @FXML
    private TextField text_adresse;
    @FXML
    private TextField text_id_membre;
    @FXML
    private TextField text_donation;
    @FXML
    private AnchorPane zone_modifier;
     @FXML
    private TextField text_id1;
    @FXML
    private TextField text_nom1;
    @FXML
    private TextField text_prenom1;
    @FXML
    private TextField text_age1;
    @FXML
    private TextField text_adresse1;
    @FXML
    private TextField text_id_membre1;
    @FXML
    private TextField text_donation1;
    @FXML
    private AnchorPane zone_ajouter;
    public static ObservableList<agee>tableData;
    @FXML
    private Label label;
    @FXML
    private Button add;
    @FXML
    private Button add1;
    @FXML
    private TextField textaffiche;

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        init();
        LoadDataagee();                                                
        zone_modifier.setVisible(false);
        zone_ajouter.setVisible(false);
        tableview.setEditable(true);
        textaffiche.textProperty().addListener(new ChangeListener() { 
            @Override
            public void changed(ObservableValue observable, Object oldValue, Object newValue) {
                chercher((String) oldValue, (String) newValue);
            }
        });
       

    }

    private void init() {
        col_id.setCellValueFactory(new PropertyValueFactory<>("id"));
        col_nom.setCellValueFactory(new PropertyValueFactory<>("nom"));
        col_prenom.setCellValueFactory(new PropertyValueFactory<>("prenom"));
        col_age.setCellValueFactory(new PropertyValueFactory<>("age"));
        col_adresse.setCellValueFactory(new PropertyValueFactory<>("adresse"));
        col_id_membre.setCellValueFactory(new PropertyValueFactory<>("id_membre"));
        col_donation.setCellValueFactory(new PropertyValueFactory<>("donation"));
        

    }

    private void LoadDataagee() {
        Serviceagee sa = new Serviceagee();
        ArrayList<agee> agee= new ArrayList<>();
        tableData = FXCollections.observableArrayList(agee);
        agee = (ArrayList<agee>)sa.afficher();

        for (int i = 0; i < agee.size(); i++) {
            tableData.add(agee.get(i));

        }
        tableview.setItems(tableData);
    }

public void changeScreenAjouter(ActionEvent event) throws IOException {    
        Parent tableViewParent = FXMLLoader.load(getClass().getResource("Ajouteragee.fxml"));
        Scene tableViewScene = new Scene(tableViewParent);

        //This line gets the Stage information
        Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();

        window.setScene(tableViewScene);
        window.show();
    }

    @FXML
    public void supprimerPushed() throws SQLException {

        agee a = (agee) tableview.getSelectionModel().getSelectedItem();
        Serviceagee sa = new Serviceagee();
        sa.supprimer(a);
        JOptionPane.showMessageDialog(null, "Supprimé avec succés");
        LoadDataagee(); 
        
			Notifications notificationBuilder;
            notificationBuilder = Notifications.create().title("agee").text("agee supprimé avec succès !");
			notificationBuilder.show();
    }

   
    @FXML
    public void modifierPushed(ActionEvent event) throws ParseException {

        zone_modifier.setVisible(true);

        agee agee = tableview.getSelectionModel().getSelectedItem();

        text_id.setText(String.valueOf(agee.getId()));
       // text_idMembre.setText(String.valueOf(evenements.getId_membre().getId()));
        text_nom.setText(agee.getNom());
        text_prenom.setText(agee.getPrenom());
         text_age.setText(String.valueOf(agee.getAge()));
        //text_date.setValue(LocalDate.parse(sDate1, DateTimeFormatter.ofPattern("yyyy-MM-dd")));
        text_adresse.setText(agee.getAdresse());
        text_id_membre.setText(String.valueOf(agee.getId_membre()));
        text_donation.setText(String.valueOf(agee.getDonation()));
        
        Notifications notificationBuilder;
            notificationBuilder = Notifications.create().title("agee").text("agee modifié avec succès !");
			notificationBuilder.show();
    }
   @FXML
    public void valider2Pushed(ActionEvent event) throws ParseException {

        zone_ajouter.setVisible(true);
        
        Notifications notificationBuilder;
            notificationBuilder = Notifications.create().title("agee").text("agee ajouté avec succès !");
			notificationBuilder.show();
      
    }
    
    @FXML
    private void Control(KeyEvent event){

if (event.getTarget()==text_nom){
        Pattern p = Pattern.compile("/^[a-z \\t à . ? ! ) ( @ # < > : = + , â ê $ * ô é è ù ,A-Z ]{3,}$/i");
        Matcher m = p.matcher(text_nom.getText());
        boolean b = m.find();
            if(b || text_nom.getText().isEmpty()){
                text_nom.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
                add.setDisable(true);
                
            }else{
              text_nom.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
                add.setDisable(false);
            }
        }
if (event.getTarget()==text_prenom){
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
            }
        }
   if (event.getTarget()==text_age){
        Pattern p = Pattern.compile("[^0-9]");
        Matcher m = p.matcher(text_age.getText());
        boolean b = m.find();
            if(b || text_age.getText().isEmpty()){
                text_age.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
                add.setDisable(true);
            }else{
                text_age.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
                add.setDisable(false);
            }
        }
   if (event.getTarget()==text_id_membre){
        Pattern p = Pattern.compile("[^0-9]");
        Matcher m = p.matcher(text_id_membre.getText());
        boolean b = m.find();
            if(b || text_id_membre.getText().isEmpty()){
                text_id_membre.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
                add.setDisable(true);
            }else{
                text_id_membre.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
                add.setDisable(false);
            }
        }
   if (event.getTarget()==text_donation){
        Pattern p = Pattern.compile("[^0-9]");
        Matcher m = p.matcher(text_donation.getText());
        boolean b = m.find();
            if(b || text_donation.getText().isEmpty()){
                text_donation.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
                add.setDisable(true);
            }else{
                text_donation.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
                add.setDisable(false);
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
                add1.setDisable(true);
            }else{
                text_id1.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
                add1.setDisable(false);
            }
        }

if (event.getTarget()==text_nom1){
        Pattern p = Pattern.compile("/^[a-z \\t à . ? ! ) ( @ # < > : = + , â ê $ * ô é è ù ,A-Z ]{3,}$/i");
        Matcher m = p.matcher(text_nom1.getText());
        boolean b = m.find();
            if(b || text_nom1.getText().isEmpty()){
                text_nom1.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
                add1.setDisable(true);
                
            }else{
              text_nom1.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
                add1.setDisable(false);
            }
        }
if (event.getTarget()==text_prenom1){
        Pattern p = Pattern.compile("/^[a-z \\t à . ? ! ) ( @ # < > : = + , â ê $ * ô é è ù ,A-Z ]{3,}$/i");
        Matcher m = p.matcher(text_prenom1.getText());
        boolean b = m.find();
            if(b || text_prenom1.getText().isEmpty()){
                text_prenom1.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
                add1.setDisable(true);
            }else{
              text_prenom1.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
                add1.setDisable(false);
            }
        }
   if (event.getTarget()==text_age1){
        Pattern p = Pattern.compile("[^0-9]");
        Matcher m = p.matcher(text_age1.getText());
        boolean b = m.find();
            if(b || text_age1.getText().isEmpty()){
                text_age1.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
                add1.setDisable(true);
            }else{
                text_age1.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
                add1.setDisable(false);
            }
        }
   if (event.getTarget()==text_adresse1){
        Pattern p = Pattern.compile("/^[a-z \\t à . ? ! ) ( @ # < > : = + , â ê $ * ô é è ù ,A-Z ]{3,}$/i");
        Matcher m = p.matcher(text_adresse1.getText());
        boolean b = m.find();
            if(b || text_adresse1.getText().isEmpty()){
                text_adresse1.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
                add1.setDisable(true);
            }else{
              text_adresse1.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
                add1.setDisable(false);
            }
        }
   if (event.getTarget()==text_id_membre1){
        Pattern p = Pattern.compile("[^0-9]");
        Matcher m = p.matcher(text_id_membre1.getText());
        boolean b = m.find();
            if(b || text_id_membre1.getText().isEmpty()){
                text_id_membre1.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
                add1.setDisable(true);
            }else{
                text_id_membre1.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
                add1.setDisable(false);
            }
        }
   if (event.getTarget()==text_donation1){
        Pattern p = Pattern.compile("[^0-9]");
        Matcher m = p.matcher(text_donation1.getText());
        boolean b = m.find();
            if(b || text_donation1.getText().isEmpty()){
                text_donation1.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
                add1.setDisable(true);
            }else{
                text_donation1.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
                add1.setDisable(false);
            }
        }
}
    
    public void chercher(String oldValue, String newValue) 
         {
        ObservableList<agee> filteredList = FXCollections.observableArrayList();
        if(textaffiche == null || (newValue.length() < oldValue.length()) || newValue == null) {
            tableview.setItems(tableData);
        }
        else {
            newValue = newValue.toUpperCase();
            for(agee log : tableview.getItems()) {
                String filterFirstName = log.getNom();
                String filterAdress = log.getAdresse();
                String filterPrenom = log.getPrenom();
                if(filterFirstName.toUpperCase().contains(newValue) || filterAdress.toUpperCase().contains(newValue) || filterPrenom.toUpperCase().contains(newValue)) {
                    filteredList.add(log);
                }
            }
            tableview.setItems(filteredList);
        }
    }


    @FXML
    public void ValiderPushed(ActionEvent event) throws SQLException, MalformedURLException, AWTException {

        agee a = new agee(Integer.parseInt(text_id.getText()),
                //Long.parseLong(text_idMembre.getText()),
                text_nom.getText(),
                text_prenom.getText(),
                Integer.parseInt(text_age.getText()),
                text_adresse.getText(),
                Integer.parseInt(text_id_membre.getText()),
                Integer.parseInt(text_donation.getText())
                );

        Serviceagee sa = new Serviceagee();
        sa.modifier(a);
        JOptionPane.showMessageDialog(null, "ageee Modifié avec succée");
        zone_modifier.setVisible(false);
        LoadDataagee();
        
        Notifications notificationBuilder;
            notificationBuilder = Notifications.create().title("agee").text("agee ajouté avec succès !");
			notificationBuilder.show();
        
    }
    
   @FXML
    public void AjouterPushed(ActionEvent event) throws SQLException {

        agee a = new agee(Integer.parseInt(text_id1.getText()),
                //Long.parseLong(text_idMembre.getText()),
                text_nom1.getText(),
                text_prenom1.getText(),
                Integer.parseInt(text_age1.getText()),
                text_adresse1.getText(),
                Integer.parseInt(text_id_membre1.getText()),
                Integer.parseInt(text_donation1.getText())
                );

        Serviceagee sa = new Serviceagee();
        sa.ajouter(a);
        JOptionPane.showMessageDialog(null, "ageee ajouté avec succée");
        zone_ajouter.setVisible(false);
        LoadDataagee();
        
        Notifications notificationBuilder;
            notificationBuilder = Notifications.create().title("agee").text("agee ajouté avec succès !");
			notificationBuilder.show();
        
        
    }
    @FXML
    public void annuler2Pushed(ActionEvent event) {
        zone_ajouter.setVisible(false);
        
        Notifications notificationBuilder;
            notificationBuilder = Notifications.create().title("agee").text("agee annulé avec succès !");
			notificationBuilder.show();
        
      
    }

    @FXML
    public void annulerPushed(ActionEvent event) {
        zone_modifier.setVisible(false);
        
        Notifications notificationBuilder;
            notificationBuilder = Notifications.create().title("agee").text("agee annulé avec succès !");
			notificationBuilder.show();
     
    }
   @FXML
  public void espaceaidePushed(ActionEvent event) throws IOException {
        Parent tableViewParent = FXMLLoader.load(getClass().getResource("aide.fxml"));
        Scene tableViewScene = new Scene(tableViewParent);

        //This line gets the Stage information
        Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();

        window.setScene(tableViewScene);
        window.show();
    }
  @FXML
  public void StatPushed(ActionEvent event) throws IOException {
        Parent tableViewParent = FXMLLoader.load(getClass().getResource("Stat.fxml"));
        Scene tableViewScene = new Scene(tableViewParent);

        //This line gets the Stage information
        Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();

        window.setScene(tableViewScene);
        window.show();
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


