/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev.gui;

import java.io.IOException;
import java.lang.ProcessBuilder.Redirect.Type;
import java.net.URL;
import java.sql.SQLException;
import java.text.ParseException;
import java.util.ArrayList;
import java.util.ResourceBundle;
import javafx.beans.property.SimpleStringProperty;
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
import javafx.scene.control.ComboBox;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;
import javax.swing.JOptionPane;
import pidev.entities.Evenement;
import pidev.entities.Reservation;
import pidev.entities.User;
import pidev.services.ServiceEvenement;
import pidev.services.ServiceReservation;
import pidev.services.ServiceUser;

/**
 * FXML Controller class
 *
 * @author EliteBook
 */
public class ReservationAssoController implements Initializable {

    /**
     * Initializes the controller class.
     */
    @FXML
    private TableView<Reservation> tableView;
    @FXML
    private TableColumn<Reservation, Long> col_reference;
    @FXML
    private TableColumn<Reservation, String> col_idUser;
    @FXML
    private TableColumn<Reservation, Long> col_idEvenement;
    @FXML
    private ComboBox<Evenement> txt_evenement;
    @FXML
    private ComboBox<User> txt_user;
    @FXML
    private ComboBox<Evenement> txt_evenement1;
    @FXML
    private ComboBox<User> txt_user1;
    @FXML
    private TextField text_reference;

    @FXML
    private AnchorPane zone_modifier;
    @FXML
    private AnchorPane zone_ajj;
    @FXML
    private Button espace_ev;
    @FXML
    private Button modidier_r;
    @FXML
    private Button supprimer_r;
    @FXML
    private Button ajouter_r;
    @FXML
    private Button valider_r;
    @FXML
    private Button annuler_r;
    public static ObservableList<Reservation> tableData;

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        init();
        LoadDataReservation();
        zone_modifier.setVisible(false);
        ServiceEvenement se = new ServiceEvenement();
        ServiceUser su = new ServiceUser();
        ObservableList<Evenement> events= FXCollections.observableArrayList(se.afficherEvenement());
        txt_evenement.setItems(events);
        txt_evenement1.setItems(events);

        ObservableList<User> users = FXCollections.observableArrayList(su.afficherUser());
         txt_user.setItems(users) ;
         
         txt_user1.setItems(users);

    }

    private void init() {
        col_reference.setCellValueFactory(new PropertyValueFactory<>("ref"));
        col_idUser.setCellValueFactory((TableColumn.CellDataFeatures<Reservation, String> param) -> new SimpleStringProperty(param.getValue().getId_user().getNom()));
        col_idEvenement.setCellValueFactory(new PropertyValueFactory<>("id_evenement"));


    }

    private void LoadDataReservation() {
        ServiceReservation se = new ServiceReservation();
        ArrayList<Reservation> reservations = new ArrayList<>();
        tableData = FXCollections.observableArrayList(reservations);
        reservations = se.afficher_Reservation();

        for (int i = 0; i < reservations.size(); i++) {
            tableData.add(reservations.get(i));

        }
        tableView.setItems(tableData);
    }

    public void ajouterPushed() throws IOException {

        Reservation r = new Reservation(
                txt_user.getSelectionModel().getSelectedItem(),
                txt_evenement.getSelectionModel().getSelectedItem()
        );

        ServiceReservation sr = new ServiceReservation();
        sr.ajouterReservation(r);
        JOptionPane.showMessageDialog(null, "Réservation Ajouté avec succée");
        LoadDataReservation();
    }

    public void espaceEvenementPushed(ActionEvent event) throws IOException {
        Parent tableViewParent = FXMLLoader.load(getClass().getResource("EvenementASSO.fxml"));
        Scene tableViewScene = new Scene(tableViewParent);

        //This line gets the Stage information
        Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();

        window.setScene(tableViewScene);
        window.show();
    }

    public void modifierPushed(ActionEvent event) throws ParseException {

        zone_modifier.setVisible(true);

        Reservation reservations = tableView.getSelectionModel().getSelectedItem();

        text_reference.setText(String.valueOf(reservations.getRef()));
        // text_idUser2.setText(String.valueOf(reservations.getId_user()));
        // text_idEvenement2.setText(String.valueOf(reservations.getId_evenement()));

    }

    public void ValiderPushed() throws IOException {

        Reservation r = new Reservation(Long.parseLong(text_reference.getText()),
                txt_user1.getSelectionModel().getSelectedItem(),
                txt_evenement1.getSelectionModel().getSelectedItem()
        );
        ServiceReservation se = new ServiceReservation();
        se.modifierReservation(r);
        JOptionPane.showMessageDialog(null, "Réservation Modifié avec succée");
        LoadDataReservation();
        zone_modifier.setVisible(false);

    }

    public void annulerPushed(ActionEvent event) {
        LoadDataReservation();
        zone_modifier.setVisible(false);
    }

    public void supprimerPushed() throws SQLException {

        Reservation r = (Reservation) tableView.getSelectionModel().getSelectedItem();
        ServiceReservation se = new ServiceReservation();
        se.supprimerReservation(r);
        JOptionPane.showMessageDialog(null, "Supprimé avec succés");
        LoadDataReservation();
    }
}
