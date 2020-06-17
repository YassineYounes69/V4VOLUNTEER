/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev.gui;


import java.awt.event.MouseEvent;
import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.RadioButton;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.control.ToggleGroup;
import javafx.scene.image.ImageView;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.HBox;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import pidev.entities.Demande;
import pidev.services.ServiceDemande;

/**
 * FXML Controller class
 *
 * @author ASUS-PC
 */
public class Add_demandeController implements Initializable {

    @FXML
    private RadioButton vetements;
    @FXML
    private RadioButton nourriture;
    @FXML
    private RadioButton fourniture_scolaire;
    @FXML
    private RadioButton materiel;
    @FXML
    private Button ajout;
    @FXML
    private Button accueil;
    @FXML
    private Button donation;
    @FXML
    private Button evenements;
    @FXML
    private Button refugies;
    @FXML
    private Button opportunites;
    @FXML
    private Button personnes_agees;
    @FXML
    private Button deconnecter;
    @FXML
    private TextField titre_demande;
    @FXML
    private TextArea description_demande;
    @FXML
    private TextField recherche;
    @FXML
    private TextField image_demande;
    @FXML
    private Button selectionner;
    @FXML
    private HBox group;
    @FXML
    private ToggleGroup type;
    @FXML
    private ImageView background;
    @FXML
    private AnchorPane main;
    @FXML
    private Button back;
    @FXML
    private Button home;

    /**
     * Initializes the controller class.
     * @param url
     * @param rb
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
         
            
 
    }    

    @FXML
    private void add_demande(ActionEvent event) throws IOException {
        
        
        ServiceDemande SA = new ServiceDemande();

       
       //com.donation.Service.ServiceAssociation SAS = new ServiceAssociation();

       
       
       
        
        try {
         

        if ( (!"".equals(description_demande.getText()))&&(!"".equals(titre_demande.getText()))&&((RadioButton) type.getSelectedToggle()!=null)&&(!"".equals(image_demande.getText()))  )
        {
            RadioButton selectedRadioButton = (RadioButton) type.getSelectedToggle();  
            String toogleGroupValue = selectedRadioButton.getText();
            Demande p = new Demande(249,0,toogleGroupValue,description_demande.getText(),titre_demande.getText(),image_demande.getText());
            SA.addDemande(p);
             Alert alert = new Alert(Alert.AlertType.INFORMATION);
                    alert.setTitle("Succès");
                    alert.setHeaderText(null);
                    alert.setContentText("Votre demande de don a été ajoutée !");
                    alert.showAndWait();
                    AnchorPane redirect;
                    redirect = FXMLLoader.load(getClass().getResource("Aff_demande.fxml"));
                    main.getChildren().setAll(redirect); 
            
        }else{
            
                Alert a = new Alert(Alert.AlertType.ERROR);
                a.setTitle("Echec");
                a.setHeaderText(null);
                a.setContentText("Vous devez remplir tous les champs ");
                a.showAndWait();
        }            
                
              
                
                
                
                            
            
        } catch (SQLException ex) {
            Logger.getLogger(Add_demandeController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        
        
        
        
        
        
    }

    @FXML
    private void selectionner_image(javafx.scene.input.MouseEvent event) {
                final FileChooser fileChooser = new FileChooser();
        final Stage stage = null;

        File file = fileChooser.showOpenDialog(stage);
        if (file != null) {
            image_demande.setText(file.toURI().toString());
        }
        
         
    }

    @FXML
    private void toDonations(ActionEvent event) throws IOException {
        Parent tableViewParent = FXMLLoader.load(getClass().getResource("Aff_demande.fxml"));
        Scene tableViewScene = new Scene(tableViewParent);

        //This line gets the Stage information
        Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();

        window.setScene(tableViewScene);
        window.show();
    }

    @FXML
    private void toBack(ActionEvent event) throws IOException {
        Parent tableViewParent = FXMLLoader.load(getClass().getResource("Demande_admin.fxml"));
        Scene tableViewScene = new Scene(tableViewParent);

        //This line gets the Stage information
        Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();

        window.setScene(tableViewScene);
        window.show();
    }

    @FXML
    private void toHome(ActionEvent event) throws IOException {
        Parent tableViewParent = FXMLLoader.load(getClass().getResource("Home.fxml"));
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
        Parent tableViewParent = FXMLLoader.load(getClass().getResource("EvenementASSO.fxml"));
        Scene tableViewScene = new Scene(tableViewParent);

        //This line gets the Stage information
        Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();

        window.setScene(tableViewScene);
        window.show();
    }
  
}
