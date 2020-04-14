/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev.gui;

import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.text.ParseException;
import java.time.format.DateTimeFormatter;
import java.util.ArrayList;
import java.util.ResourceBundle;
import javafx.beans.property.SimpleStringProperty;
import javafx.beans.value.ChangeListener;
import javafx.beans.value.ObservableValue;
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
import javafx.scene.control.DatePicker;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableColumn.CellDataFeatures;
import javafx.scene.control.TableColumn.CellEditEvent;
import javafx.scene.control.TableView;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.control.cell.TextFieldTableCell;
import javafx.scene.input.KeyEvent;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;
import javax.swing.JOptionPane;
import pidev.entities.Evenement;
import pidev.services.ServiceEvenement;

/**
 *
 * @author EliteBook
 */
public class EvenementASSOController implements Initializable {

    @FXML
    private TableView<Evenement> tableView;
    @FXML
    private TableColumn<Evenement, Long> col_reference;
    @FXML
    private TableColumn<Evenement, String> col_idMembre;
    @FXML
    private TableColumn<Evenement, String> col_nom;
    @FXML
    private TableColumn<Evenement, String> col_description;
    @FXML
    private TableColumn<Evenement, String> col_date;
    @FXML
    private TableColumn<Evenement, Integer> col_capacite;
    @FXML
    private TableColumn<Evenement, Float> col_prix;
    @FXML
    private TableColumn<Evenement, Integer> col_nbParticipant;
    @FXML
    private TableColumn<Evenement, String> col_lieu;
    @FXML
    private TableColumn<Evenement, String> col_createur;
    @FXML
    private TextField filterInput;
    @FXML
    private TextField text_reference;
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
    private Button supprimerBTN;
    @FXML
    private Button modifierBTN;
    @FXML
    private Button espaceBTN;
    @FXML
    private Button validerBTN;
    @FXML
    private Button annulerBTN;
    @FXML
    private Button ajouterBTN;
    @FXML
    private Button stat;
    @FXML
    private AnchorPane zone_modifier;
    public static ObservableList<Evenement> tableData;
    @FXML
    private Label label;

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        init();
        LoadDataEvenement();
        zone_modifier.setVisible(false);
        tableView.setEditable(true);
        col_nom.setCellFactory(TextFieldTableCell.forTableColumn());
        col_description.setCellFactory(TextFieldTableCell.forTableColumn());
        col_lieu.setCellFactory(TextFieldTableCell.forTableColumn());
        col_createur.setCellFactory(TextFieldTableCell.forTableColumn());
          filterInput.textProperty().addListener(new ChangeListener() {
            @Override
            public void changed(ObservableValue observable, Object oldValue, Object newValue) {
                filterStudentList((String) oldValue, (String) newValue);

            }
        });
              

    }

    private void init() {
        col_reference.setCellValueFactory(new PropertyValueFactory<>("reference"));
        col_idMembre.setCellValueFactory((CellDataFeatures<Evenement, String> param) -> new SimpleStringProperty(param.getValue().getId_membre().getEmail()));
        col_nom.setCellValueFactory(new PropertyValueFactory<>("nom"));
        col_description.setCellValueFactory(new PropertyValueFactory<>("description"));
        col_date.setCellValueFactory(new PropertyValueFactory<>("date"));
        col_capacite.setCellValueFactory(new PropertyValueFactory<>("capacite"));
        col_prix.setCellValueFactory(new PropertyValueFactory<>("prix"));
        col_nbParticipant.setCellValueFactory(new PropertyValueFactory<>("nbParticipant"));
        col_lieu.setCellValueFactory(new PropertyValueFactory<>("lieu"));
        col_createur.setCellValueFactory(new PropertyValueFactory<>("createur"));

    }

    private void LoadDataEvenement() {
        ServiceEvenement se = new ServiceEvenement();
        ArrayList<Evenement> evenements = new ArrayList<>();
        tableData = FXCollections.observableArrayList(evenements);
        evenements = se.afficherEvenement();

        for (int i = 0; i < evenements.size(); i++) {
            tableData.add(evenements.get(i));

        }
        tableView.setItems(tableData);
    }

    @FXML
    public void changeScreenAjouter(ActionEvent event) throws IOException {
        Parent tableViewParent = FXMLLoader.load(getClass().getResource("AjouterEvenement.fxml"));
        Scene tableViewScene = new Scene(tableViewParent);

        //This line gets the Stage information
        Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();

        window.setScene(tableViewScene);
        window.show();
    }

    @FXML
    public void supprimerPushed() throws SQLException {

        Evenement e = (Evenement) tableView.getSelectionModel().getSelectedItem();
        ServiceEvenement se = new ServiceEvenement();
        se.supprimerEvenement(e);
        JOptionPane.showMessageDialog(null, "Supprimé avec succés");
        LoadDataEvenement();
    }

    @FXML
    public void modifierNom(CellEditEvent edittedCell) {
        ServiceEvenement se = new ServiceEvenement();
        Evenement eventSelected = tableView.getSelectionModel().getSelectedItem();
        eventSelected.setNom(edittedCell.getNewValue().toString());

        se.modifierEvenement(eventSelected);
    }

    @FXML
    public void modifierDescription(CellEditEvent edittedCell) {
        ServiceEvenement se = new ServiceEvenement();
        Evenement eventSelected = tableView.getSelectionModel().getSelectedItem();
        eventSelected.setDescription(edittedCell.getNewValue().toString());

        se.modifierEvenement(eventSelected);
    }

    @FXML
    public void modifierLieu(CellEditEvent edittedCell) {
        ServiceEvenement se = new ServiceEvenement();
        Evenement eventSelected = tableView.getSelectionModel().getSelectedItem();
        eventSelected.setLieu(edittedCell.getNewValue().toString());

        se.modifierEvenement(eventSelected);
    }

    @FXML
    public void modifierCreateur(CellEditEvent edittedCell) {
        ServiceEvenement se = new ServiceEvenement();
        Evenement eventSelected = tableView.getSelectionModel().getSelectedItem();
        eventSelected.setCreateur(edittedCell.getNewValue().toString());

        se.modifierEvenement(eventSelected);
    }

    @FXML
    public void modifierPushed(ActionEvent event) throws ParseException {

        zone_modifier.setVisible(true);

        Evenement evenements = tableView.getSelectionModel().getSelectedItem();

        text_reference.setText(String.valueOf(evenements.getReference()));
        // text_idMembre.setText(String.valueOf(evenements.getId_membre().getId()));
        text_nom.setText(evenements.getNom());
        text_description.setText(evenements.getDescription());
        String sDate1 = evenements.getDate();
        //text_date.setValue(LocalDate.parse(sDate1, DateTimeFormatter.ofPattern("yyyy-MM-dd")));
        text_capacite.setText(String.valueOf(evenements.getCapacite()));
        text_prix.setText(String.valueOf(evenements.getPrix()));
        text_nbParticipant.setText(String.valueOf(evenements.getNbParticipant()));
        text_lieu.setText(evenements.getLieu());
        text_createur.setText(evenements.getCreateur());

    }

    @FXML
    public void ValiderPushed(ActionEvent event) throws SQLException {

        Evenement e = new Evenement(Long.parseLong(text_reference.getText()),
                //Long.parseLong(text_idMembre.getText()),
                text_nom.getText(),
                text_description.getText(),
                text_date.getValue().format(DateTimeFormatter.ofPattern("yyyy-MM-dd")),
                Integer.parseInt(text_capacite.getText()),
                Float.parseFloat(text_prix.getText()),
                Integer.parseInt(text_nbParticipant.getText()),
                text_lieu.getText(),
                text_createur.getText()
        );

        ServiceEvenement se = new ServiceEvenement();
        se.modifierEvenement(e);
        JOptionPane.showMessageDialog(null, "Evenement Modifié avec succée");
        zone_modifier.setVisible(false);
        LoadDataEvenement();
    }

    @FXML
    public void annulerPushed(ActionEvent event) {
        zone_modifier.setVisible(false);
    }

    @FXML
    public void espaceReservationPushed(ActionEvent event) throws IOException {
        Parent tableViewParent = FXMLLoader.load(getClass().getResource("ReservationAsso.fxml"));
        Scene tableViewScene = new Scene(tableViewParent);

        //This line gets the Stage information
        Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();

        window.setScene(tableViewScene);
        window.show();
    }

  public void filterStudentList(String oldValue, String newValue) {
        ObservableList<Evenement> filteredList = FXCollections.observableArrayList();
        if(filterInput == null || (newValue.length() < oldValue.length()) || newValue == null) {
            tableView.setItems(tableData);
        }
        else {
            newValue = newValue.toUpperCase();
            for(Evenement evenements : tableView.getItems()) {
                String filterFirstName = evenements.getNom();
                String filterLastName = evenements.getDescription();
                String filterLieu = evenements.getLieu();
                String filterCreateur = evenements.getCreateur();
                if(filterFirstName.toUpperCase().contains(newValue) || filterLastName.toUpperCase().contains(newValue)|| filterLieu.toUpperCase().contains(newValue)|| filterCreateur.toUpperCase().contains(newValue)) {
                    filteredList.add(evenements);
                }
            }
            tableView.setItems(filteredList);
        }
    }
  @FXML
    public void statPushed(ActionEvent event) throws IOException {
        Parent tableViewParent = FXMLLoader.load(getClass().getResource("mostPopular.fxml"));
        Scene tableViewScene = new Scene(tableViewParent);

        //This line gets the Stage information
        Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();

        window.setScene(tableViewScene);
        window.show();
    }
  
}
