/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package personnes.agees;

import Entities.agee;
import Services.Serviceagee;
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
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author WiKi Kef
 */
public class StatController implements Initializable {
    
    @FXML
    private PieChart pieChart;
    @FXML
    private Button retour;
    
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        Stat();
    } 
    public void Stat() {
        ObservableList<PieChart.Data> pieChartData = FXCollections.observableArrayList();
        Serviceagee liv = new Serviceagee();
        ArrayList<agee> list = new ArrayList<>();
        list = (ArrayList<agee>) liv.afficher();

        for (int i = 0; i < list.size(); i++) {
            pieChartData.add(new PieChart.Data(list.get(i).getNom(), list.get(i).getDonation()));

        }
        pieChart.setData(pieChartData);

    }
    @FXML
  public void retourPushed(ActionEvent event) throws IOException {
        Parent tableViewParent = FXMLLoader.load(getClass().getResource("FXMLDocument.fxml"));
        Scene tableViewScene = new Scene(tableViewParent);

        //This line gets the Stage information
        Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();

        window.setScene(tableViewScene);
        window.show();
    }

}
    
