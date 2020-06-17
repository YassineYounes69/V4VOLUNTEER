/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev.gui;

import java.net.URL;
import java.sql.SQLException;
import java.text.ParseException;
import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.ArrayList;
import java.util.ResourceBundle;
import javafx.beans.value.ChangeListener;
import javafx.beans.value.ObservableValue;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.AnchorPane;
import javafx.util.Callback;
import javax.swing.JOptionPane;
import pidev.entities.Evenement;
import pidev.entities.Jaime;
import pidev.entities.User;
import static pidev.gui.EvenementASSOController.tableData;
import pidev.services.ServiceEvenement;
import pidev.services.ServiceReservation;

/**
 * FXML Controller class
 *
 * @author EliteBook
 */
public class VolontaireController implements Initializable {

    /**
     * Initializes the controller class.
     */
    @FXML
    private TableView<Evenement> tableView;
    @FXML
    private TableColumn<Evenement, String> col_nom;
    @FXML
    private TableColumn<Evenement, String> col_date;
    @FXML
    private TableColumn<Evenement, Integer> col_nbParticipant;
    @FXML
    private TableColumn<Evenement, String> col_description;

    @FXML
    private TableColumn<Evenement, Integer> col_capacite;
    @FXML
    private TableColumn<Evenement, Float> col_prix;

    @FXML
    private TableColumn<Evenement, String> col_lieu;
    @FXML
    private TableColumn<Evenement, String> col_createur;
    @FXML
    private Label label_nom;
    @FXML
    private Label label_description;
    @FXML
    private Label label_capacite;
    @FXML
    private Label label_prix;
    @FXML
    private Label label_date;
    @FXML
    private Label label_lieu;
    @FXML
    private Label label_mention;
    @FXML
    private Label label_createur;
    @FXML
    private Label label_nbParticipant;
    @FXML
    private AnchorPane zone_popular;
    @FXML
    private ImageView photo;

    public static ObservableList<Evenement> tableData;
    @FXML
    private Button inscrire;
    @FXML
    private Button desinscrire;
    @FXML
    private Button actualiser;
    @FXML
    private Button top;
    @FXML
    private Button retour;
    @FXML
    private Button like;
    @FXML
    private Button dislike;
    @FXML
    private TableColumn<Evenement, String> col_image;
    @FXML
    private TextField filterInput;

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        init();
        LoadDataEvenement();
        this.inscrire.setDisable(true);
        this.desinscrire.setDisable(true);
        this.like.setDisable(true);
        this.dislike.setDisable(true);

        filterInput.textProperty().addListener(new ChangeListener() {
            @Override
            public void changed(ObservableValue observable, Object oldValue, Object newValue) {
                filterStudentList((String) oldValue, (String) newValue);

            }
        });
        zone_popular.setVisible(false);
    }

    private void init() {

        col_nom.setCellValueFactory(new PropertyValueFactory<>("nom"));
        col_description.setCellValueFactory(new PropertyValueFactory<>("description"));
        col_date.setCellValueFactory(new PropertyValueFactory<>("date"));
        col_capacite.setCellValueFactory(new PropertyValueFactory<>("capacite"));
        col_prix.setCellValueFactory(new PropertyValueFactory<>("prix"));
        col_nbParticipant.setCellValueFactory(new PropertyValueFactory<>("nbParticipant"));
        col_lieu.setCellValueFactory(new PropertyValueFactory<>("lieu"));
        col_createur.setCellValueFactory(new PropertyValueFactory<>("createur"));
        col_image.setCellValueFactory(new PropertyValueFactory<>("image"));

        Callback<TableColumn<Evenement, String>, TableCell<Evenement, String>> cellFactoryImage
                = //
                new Callback<TableColumn<Evenement, String>, TableCell<Evenement, String>>() {
            @Override
            public TableCell<Evenement, String> call(TableColumn<Evenement, String> param) {
                final TableCell<Evenement, String> cell = new TableCell<Evenement, String>() {

                    @Override
                    public void updateItem(String item, boolean empty) {
                        super.updateItem(item, empty);
                        if (empty) {
                            setGraphic(null);
                            setText("Aucune image n'existe dans cette liste");
                        } else {
                            System.out.println(item);
                            ImageView imagev = new ImageView(new Image(item));
                            imagev.setFitHeight(200);
                            imagev.setFitWidth(240);
                            setGraphic(imagev);
                            //setGraphic(imagev);
                            setText(item);
                            //System.out.println(item);
                        }
                    }

                };
                return cell;
            }
        };
        col_image.setCellFactory(cellFactoryImage);
    }

    private void LoadDataEvenement() {
        ServiceEvenement se = new ServiceEvenement();
        User u = new User(1, "mohamed", "rejeb", "mohamed.rejeb@esprit.tn", "bizerte");
        ArrayList<Evenement> evenements = new ArrayList<>();
        tableData = FXCollections.observableArrayList(evenements);
        evenements = se.afficherEvenement();

        for (int i = 0; i < evenements.size(); i++) {
            tableData.add(evenements.get(i));

        }
        tableView.setItems(tableData);

    }

    public void inscrirePushed() throws SQLException {
        User u = new User(1, "mohamed", "rejeb", "mohamed.rejeb@esprit.tn", "bizerte");
        ServiceReservation sr = new ServiceReservation();

        Evenement e = (Evenement) tableView.getSelectionModel().getSelectedItem();
        ServiceEvenement se = new ServiceEvenement();

        sr.reserver_Evenement(e, u);
        se.sendEmail(u);
        JOptionPane.showMessageDialog(null, "Votre reservation a eté effectué avec succés");
        Refresh();
    }

    public void abandonnerPushed() throws SQLException {
        User u = new User(1, "mohamed", "rejeb", "mohamed.rejeb@esprit.tn", "bizerte");
        Evenement e = (Evenement) tableView.getSelectionModel().getSelectedItem();
        ServiceReservation sr = new ServiceReservation();

        sr.annuler_reservation_Evenement(e, u);
        JOptionPane.showMessageDialog(null, "Votre reservation a eté abandonnée");
        Refresh();

    }

    public void Refresh() {
        ServiceEvenement se = new ServiceEvenement();
        ServiceReservation sr = new ServiceReservation();
        ObservableList<Evenement> evenements = FXCollections.observableArrayList(se.afficherEvenement());
        evenements.clear();
        sr.afficher_Jaime();
        init();
        LoadDataEvenement();
    }

    public void tableClicked() {
        User u = new User(1, "mohamed", "rejeb", "mohamed.rejeb@esprit.tn", "bizerte");

        Evenement e = (Evenement) tableView.getSelectionModel().getSelectedItem();
        ServiceReservation sr = new ServiceReservation();

        if (sr.recuperer_reservation(e, u) == -1) {
            this.inscrire.setDisable(false);
            this.desinscrire.setDisable(true);

        } else if (sr.recuperer_reservation(e, u) != -1) {
            this.desinscrire.setDisable(false);
            this.inscrire.setDisable(true);

        }

        if (sr.recuperer_Jaime(e, u) == -1) {
            this.like.setDisable(false);
            this.dislike.setDisable(true);

        } else if (sr.recuperer_Jaime(e, u) != -1) {
            this.dislike.setDisable(false);
            this.like.setDisable(true);

        }
        mentionsJaime(e);

    }

    public void filterStudentList(String oldValue, String newValue) {
        ObservableList<Evenement> filteredList = FXCollections.observableArrayList();
        if (filterInput == null || (newValue.length() < oldValue.length()) || newValue == null) {
            tableView.setItems(tableData);
        } else {
            newValue = newValue.toUpperCase();
            for (Evenement evenements : tableView.getItems()) {
                String filterFirstName = evenements.getNom();
                String filterLastName = evenements.getDescription();
                String filterLieu = evenements.getLieu();
                String filterCreateur = evenements.getCreateur();
                if (filterFirstName.toUpperCase().contains(newValue) || filterLastName.toUpperCase().contains(newValue) || filterLieu.toUpperCase().contains(newValue) || filterCreateur.toUpperCase().contains(newValue)) {
                    filteredList.add(evenements);
                }
            }
            tableView.setItems(filteredList);
        }
    }

    @FXML
    public void popularPushed(ActionEvent event) throws ParseException {

        ServiceEvenement se = new ServiceEvenement();
        ArrayList<Evenement> evenements = new ArrayList<>();
        evenements = se.afficherEvenement();
        int max = 0;

        for (int i = 0; i < evenements.size(); i++) {

            if (max > evenements.get(i).getNbParticipant()) {
                max = i;
            }
            Evenement e = evenements.get(max);
            zone_popular.setVisible(true);

            // text_idMembre.setText(String.valueOf(evenements.getId_membre().getId()));
            label_nom.setText(e.getNom());
            label_description.setText(e.getDescription());
            String sDate1 = e.getDate();
            //  label_date.setValue(LocalDate.parse(sDate1, DateTimeFormatter.ofPattern("yyyy-MM-dd")));
            label_capacite.setText(String.valueOf(e.getCapacite()));
            label_prix.setText(String.valueOf(e.getPrix()));
            label_nbParticipant.setText(String.valueOf(e.getNbParticipant()));
            label_lieu.setText(e.getLieu());
            label_createur.setText(e.getCreateur());

        }
    }

    @FXML
    public void retourPushed(ActionEvent event) {
        zone_popular.setVisible(false);
    }

    public void jaimePushed() throws SQLException {
        User u = new User(1, "mohamed", "rejeb", "mohamed.rejeb@esprit.tn", "bizerte");
        ServiceReservation sr = new ServiceReservation();

        Evenement e = (Evenement) tableView.getSelectionModel().getSelectedItem();

        sr.ajouterJaime(e, u);
        Refresh();
    }

    public void jaimepasPushed() throws SQLException {
        User u = new User(1, "mohamed", "rejeb", "mohamed.rejeb@esprit.tn", "bizerte");
        Evenement e = (Evenement) tableView.getSelectionModel().getSelectedItem();
        ServiceReservation sr = new ServiceReservation();

        sr.supprimerJaime(e, u);
        Refresh();

    }

    public void mentionsJaime(Evenement e) {

        ServiceReservation se = new ServiceReservation();
        int m = 0;
        ArrayList<Jaime> jaimes = new ArrayList<>();
        jaimes = se.afficher_Jaime();
        for (int i = 0; i < jaimes.size(); i++) {
            if (e.getReference()==jaimes.get(i).getId_evenement().getReference()) {
                m++;
            }
            label_mention.setText(String.valueOf(m));
        }

        label_mention.setText(String.valueOf(m));

    }
}
