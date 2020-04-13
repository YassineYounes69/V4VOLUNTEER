/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev.gui;

import java.io.IOException;
import java.net.URL;
import java.util.ArrayList;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.chart.PieChart;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.ImageView;
import javafx.stage.Stage;
import pidev.entities.Evenement;
import pidev.services.ServiceEvenement;

/**
 * FXML Controller class
 *
 * @author EliteBook
 */
public class MostPopularController implements Initializable {

    @FXML
    private PieChart pieChart;
    @FXML
    private Button retour;

    @Override
    public void initialize(URL url, ResourceBundle rb) {
   Stat();
    }

    public void Stat() {
        ObservableList<PieChart.Data> pieChartData = FXCollections.observableArrayList();
        ServiceEvenement liv = new ServiceEvenement();
        ArrayList<Evenement> list = new ArrayList<>();
        list = liv.afficherEvenement();

        for (int i = 0; i < list.size(); i++) {
            pieChartData.add(new PieChart.Data(list.get(i).getNom(), list.get(i).getNbParticipant()));

        }
        pieChart.setData(pieChartData);

    }
    @FXML
    public void retourPushed(ActionEvent event) throws IOException {
        Parent tableViewParent = FXMLLoader.load(getClass().getResource("EvenementASSO.fxml"));
        Scene tableViewScene = new Scene(tableViewParent);

        //This line gets the Stage information
        Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();

        window.setScene(tableViewScene);
        window.show();
    }
}
