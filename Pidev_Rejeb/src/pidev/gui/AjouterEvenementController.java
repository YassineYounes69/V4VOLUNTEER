/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev.gui;

import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import java.util.regex.Matcher;
import java.util.regex.Pattern;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.DatePicker;
import javafx.scene.control.Label;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.KeyEvent;
import javafx.scene.layout.AnchorPane;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import javax.swing.JOptionPane;
import org.apache.commons.io.FileUtils;
import pidev.entities.Evenement;
import pidev.entities.User;
import pidev.services.ServiceEvenement;

/**
 * FXML Controller class
 *
 * @author EliteBook
 */
public class AjouterEvenementController implements Initializable {

    /**
     * Initializes the controller class.
     */
    @FXML
    private TextField text_nom;
    @FXML
    private TextArea text_description;
    @FXML
    private DatePicker text_date;
    @FXML
    private TextField text_capacite;
    @FXML
    private TextField text_prix;
    @FXML
    private TextField text_nbParticipant;
    @FXML
    private TextField text_lieu;
    @FXML
    private TextField text_createur;
    @FXML
    private TextField path;
    @FXML
    private ImageView imageaff;
    @FXML
    private Button validerAj;
    @FXML
    private Button acceuil;
    @FXML
    private Button inserer;
    @FXML
    private AnchorPane zone_aj;
    @FXML
    private Label err_image;

    @FXML
    private Label err_nom;

    @FXML
    private Label err_des;

    @FXML
    private Label err_lieu;

    @FXML
    private Label err_capacite;

    public File selectedFile;
    String path_img;

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }

    public void uploadButton(ActionEvent event) {
        FileChooser fc = new FileChooser();
        fc.setTitle("Veuillez choisir l'image");
        fc.getExtensionFilters().addAll(
                //new FileChooser.ExtensionFilter("Image", ".jpg", ".png"),
                new FileChooser.ExtensionFilter("PNG", "*.png"),
                new FileChooser.ExtensionFilter("JPG", "*.jpg")
        );
        selectedFile = fc.showOpenDialog(null);

        if (selectedFile != null) {

            path_img = selectedFile.getName();
//    
            path.setText(path_img);
            Image imagea = new Image(selectedFile.toURI().toString());
            imageaff.setImage(imagea);
        } else {
            System.out.println("File is not valid!");
        }
    }

    public void ValiderPushed() throws IOException {
        String image = path.getText();
        try {

            File source = new File(selectedFile.toString());
            File dest = new File("C:\\3A16\\ressources");

            FileUtils.copyFileToDirectory(source, dest);
        } catch (IOException e) {
            e.printStackTrace();
        }

        ServiceEvenement es = new ServiceEvenement();

        Evenement e = new Evenement(text_nom.getText(),
                text_description.getText(),
                text_date.getValue().format(DateTimeFormatter.ofPattern("yyyy-MM-dd")),
                Integer.parseInt(text_capacite.getText()),
                Float.parseFloat(text_prix.getText()),
                text_lieu.getText(),
                image
        );
        User u = new User(1, "mohamed", "rejeb", "mohamed.rejeb@esprit.tn", "bizerte");
        ServiceEvenement se = new ServiceEvenement();
        se.ajouterEvenement(e, u);
        Parent root = FXMLLoader.load(getClass().getResource("EvenementASSO.fxml"));
        text_nom.getScene().setRoot(root);
        JOptionPane.showMessageDialog(null, "Evenement Ajouté avec succée");

    }

    public void AcceuilPushed(ActionEvent event) throws IOException {
        Parent tableViewParent = FXMLLoader.load(getClass().getResource("EvenementASSO.fxml"));
        Scene tableViewScene = new Scene(tableViewParent);

        //This line gets the Stage information
        Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();

        window.setScene(tableViewScene);
        window.show();
    }

    @FXML
    public void Control(KeyEvent event) {

        if (event.getTarget() == text_capacite) {
            Pattern p = Pattern.compile("[^0-9]");
            Matcher m = p.matcher(text_capacite.getText());
            boolean b = m.find();
            if (b || text_capacite.getText().isEmpty()) {
                text_capacite.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
                validerAj.setDisable(true);
            } else {
                text_capacite.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
                validerAj.setDisable(false);
            }
        }

        if (event.getTarget() == text_prix) {
            Pattern p = Pattern.compile("[^0-9]*\\.?[^0-9]+");
            Matcher m = p.matcher(text_prix.getText());
            boolean b = m.find();
            if (b || text_prix.getText().isEmpty()) {
                text_prix.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
                validerAj.setDisable(true);
            } else {
                text_prix.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
                validerAj.setDisable(false);
            }
        }

        if (event.getTarget() == text_nom) {
            Pattern p = Pattern.compile("/^[a-z \\t à . ? ! ) ( @ # < > : = + , â ê $ * ô é è ù ,A-Z ]{3,}$/i");
            Matcher m = p.matcher(text_nom.getText());
            boolean b = m.find();
            if (b || text_nom.getText().isEmpty()) {
                text_nom.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
                validerAj.setDisable(true);
            } else {
                text_nom.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
                validerAj.setDisable(false);
            }
        }
    
        if (event.getTarget() == text_description) {
            Pattern p = Pattern.compile("/^[a-z \\t à . ? ! ) ( @ # < > : = + , â ê $ * ô é è ù ,A-Z ]{3,}$/i");
            Matcher m = p.matcher(text_description.getText());
            boolean b = m.find();
            if (b || text_description.getText().isEmpty()) {
                text_description.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
                validerAj.setDisable(true);
            } else {
                text_description.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
                validerAj.setDisable(false);
            }
        }
         if (event.getTarget() == path) {
           
            if ( path.getText().isEmpty()) {
                path.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
                validerAj.setDisable(true);
            } else {
                path.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
                validerAj.setDisable(false);
            }
        }
    if (event.getTarget() == text_lieu) {
            Pattern p = Pattern.compile("/^[a-z \\t à . ? ! ) ( @ # < > : = + , â ê $ * ô é è ù ,A-Z ]{3,}$/i");
            Matcher m = p.matcher(text_lieu.getText());
            boolean b = m.find();
            if (b || text_lieu.getText().isEmpty()) {
                text_lieu.setStyle("-fx-border-color:transparent transparent red transparent;-fx-background-color:transparent;-fx-text-fill:red");
                validerAj.setDisable(true);
            } else {
                text_lieu.setStyle("-fx-border-color:transparent transparent green transparent;-fx-background-color:transparent;-fx-text-fill:green");
                validerAj.setDisable(false);
            }
        }
    
    }

}
