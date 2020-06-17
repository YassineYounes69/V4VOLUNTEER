/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev.gui;


import java.sql.SQLException;
import java.util.List;
import javafx.application.Application;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.layout.StackPane;
import javafx.stage.Stage;
import static javafx.application.Application.launch;



/**
 *
 * @author ASUS-PC
 */
public class Donation extends Application {


    
     @Override
    public void start(Stage stage) throws Exception {
        
//        Parent root = FXMLLoader.load(getClass().getResource("Aff_demande.fxml"));
//        Parent root = FXMLLoader.load(getClass().getResource("Demande_admin.fxml"));
//        Parent root = FXMLLoader.load(getClass().getResource("Donation_admin.fxml"));
//        Parent root = FXMLLoader.load(getClass().getResource("Home.fxml"));
//        Parent root = FXMLLoader.load(getClass().getResource("Add_demande.fxml"));

Parent root = FXMLLoader.load(getClass().getResource("Volontaire.fxml"));
    
        
        Scene scene = new Scene(root);
        
        stage.setScene(scene);
        stage.show();
        
        
//Demande p = new Demande(57,1,"vetements","hhhhhhhhhhhhhhhhh","vyytcytvytvyvyvtyg","yyyyyyyyyyyy");
//    ServiceDemande ps =new ServiceDemande();
//    Demande d= ps.getById(61);
////    ps.updateDemande(p);
//         List<Demande> a = ps.getDemandes();
//         for (int i = 0; i < a.size(); i++) {
//             System.out.println(a.get(i));
//         }
////         List<Demande> k = ps.getDemandes();
//         System.out.println(p);
//Donationn q;
//ServiceDonation aa =new ServiceDonation();
//            ServiceUser ks =new ServiceUser();
//            FosUser f = ks.getUserById(3);
//            System.out.println(f);
//            q = new Donationn(1,d.getId(),f.getId(),0,15,d.getTypeDemande());
//            aa.addDonation(q);
        
//        ServiceDonation ps =new ServiceDonation();
//         List<Entities.Donation> a = ps.getDonations();
//         for (int i = 0; i < a.size(); i++) {
//             System.out.println(a.get(i));
//         }

    }

    /**
     * @param args the command line arguments
     * @throws java.sql.SQLException
     */
    public static void main(String[] args) throws SQLException {
        launch(args);
//       Demande p = new Demande(57,1,"vetements","hhhhhhhhhhhhhhhhh","uuuuuuuu","yyyyyyyyyyyy");
//    ServiceDemande ps =new ServiceDemande();
//    ps.updateDemande(p);
////         List<Demande> k = ps.getDemandes();
//         System.out.println(p);
    }
    
}
