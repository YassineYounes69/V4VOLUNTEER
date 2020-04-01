/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUIControllers;

import entities.Refugies;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TextField;

/**
 * FXML Controller class
 *
 * @author dEll
 */
public class AffrefController implements Initializable {

    /**
     * Initializes the controller class.
     */
    @FXML
    private TableColumn<Refugies, String> nom_ref;
    @FXML
    private TableColumn<Refugies, String> prenom_ref;
    @FXML
    private TableColumn<Refugies, String> pays_ref;
    @FXML
    private TableColumn<Refugies, String> age_ref;
    @FXML
    private TableColumn<Refugies, String> etat_ref;
    @FXML
    private TableColumn<Refugies, String> sexe_ref;
    @FXML
    private TableColumn<Refugies, String> image_ref;
    @FXML
    private Button chercher_ref;
    @FXML
    private Button ajouref;
    @FXML
    private Button modref;
    @FXML
    private Button suppref;
    @FXML
    private TextField textaff;

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }

}
