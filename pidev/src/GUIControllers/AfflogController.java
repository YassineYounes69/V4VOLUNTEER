/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUIControllers;

import controller.logcont;
import entities.Logement;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.text.ParseException;
import java.util.Optional;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TextField;


/**
 * FXML Controller class
 *
 * @author dEll
 */
public class AfflogController implements Initializable {

    /**
     * Initializes the controller class.
     */
    @FXML
    private TableColumn<Logement, String> nom_log;
    @FXML
    private TableColumn<Logement, String> add_log;
    @FXML
    private TableColumn<Logement, String> nb_log;
    @FXML
    private TableColumn<Logement, String> etat_log;
    @FXML
    private Button chercher_log;
    @FXML
    private Button ajoulog;
    @FXML
    private Button modlog;
    @FXML
    private Button supplog;
    @FXML
    private TextField textaff;
    @FXML
    private TextField log_nom;
    @FXML
    private TextField log_add;
    @FXML
    private TextField log_nb;

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }
    
   /* @FXML
    private void ajouter11(ActionEvent event) throws SQLException, ParseException, IOException {
        logcont l=new logcont();
        
             if (log_nom.getText().isEmpty() || add_log.getText().isEmpty() ||  nb_log.getText().isEmpty())
             {
            Alert alert = new Alert(Alert.AlertType.WARNING);
            alert.setTitle("warning");
            alert.setHeaderText(null);
            alert.setContentText("Verify Your TextFields");
            alert.showAndWait();
             } 
             else if (Integer.parseInt(nb_log.getText())>5 ){
               Alert alert = new Alert(Alert.AlertType.WARNING);
            alert.setTitle("warning");
            alert.setHeaderText(null);
            alert.setContentText("Verify !! Nombre de chambres doit etre supérierur à 5 !!!");
            alert.showAndWait();
            
            
            Logement lo = new Logement (  Integer.parseInt(nb_log.getText()),add_log.getText(),log_nom.getText());
            System.out.println(lo);
            Alert alert1 = new Alert(Alert.AlertType.CONFIRMATION);
            alert1.setTitle("Confirmation Dialog");
            alert1.setContentText("Etes vous sur de vouloir ajouter ce produit !!!");
            alert1.setHeaderText(null);
            Optional<ButtonType> action = alert1.showAndWait();
            if (action.get() == ButtonType.OK) {
            l.ajouterLog3(lo);
         }
             }}
   
        
        
        */
        
        
        
   
    }

