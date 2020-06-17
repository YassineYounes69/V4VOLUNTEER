/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev.gui;


import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
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
import javafx.scene.control.Label;
import javafx.scene.control.RadioButton;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.KeyEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.Pane;
import static javafx.scene.layout.Region.USE_COMPUTED_SIZE;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;
import pidev.entities.Demande;
import pidev.entities.Donationn;
import pidev.services.ServiceDemande;
import pidev.services.ServiceDonation;
import pidev.services.ServiceUser;

/**
 * FXML Controller class
 *
 * @author ASUS-PC
 */
public class Donation_adminController implements Initializable {

    @FXML
    private AnchorPane main;
    @FXML
    private Button rechercher_demande;
    @FXML
    private TextField search_demande;
    @FXML
    private VBox associationcontainer;
    @FXML
    private RadioButton titre;
    @FXML
    private RadioButton type;
    @FXML
    private Button donation;
    ServiceDemande SA = new ServiceDemande();
    ServiceUser ps = new ServiceUser();
    ServiceDonation SD = new ServiceDonation();
    @FXML
    private Button home;
    @FXML
    private Button dem;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        //fermeture.setBackground(Background.EMPTY);
        
        try {

            
            List<Donationn> donations = SD.getDonations();
            //        Demande connected = SA.getById(SA.currentDemande.getId());

            afficher(donations);
//            Image men = new Image("images/22.jpg");
//            background.setPreserveRatio(false);
//            background.setImage(men);

        } catch (SQLException ex) {
            Logger.getLogger(Aff_demandeController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    private void afficher(List<Donationn> donations) throws SQLException {
        Demande connected = SA.getById(17);

         associationcontainer.getChildren().clear();
        for (int i = 0; i < donations.size(); i++) {
            Donationn actuel = donations.get(i);
            Pane single = new Pane();
            single.setPrefHeight(150);
            single.setPrefWidth(547);
            // single.setBackground(new Background(new BackgroundFill(Color.WHITE, CornerRadii.EMPTY, Insets.EMPTY)));

//            ImageView img = new ImageView();
//            img.setLayoutX(3);
//            img.setLayoutY(3);
//            img.setFitWidth(136);
//            img.setFitHeight(147);
//            img.setPreserveRatio(false);
////            Image log = new Image("file:/C:/Users/ASUS-PC/Desktop/22.jpg");
//            Image log = new Image(actuel.getPhotoDemande());
//            img.setImage(log);

            Label name = new Label();
            name.setPrefHeight(27);
            name.setPrefWidth(USE_COMPUTED_SIZE);
            name.setLayoutX(3);
            name.setLayoutY(20);
            name.setStyle("-fx-font-size :18");
            name.setText(String.valueOf(actuel.getQuantiteDonation())+ " elements ");

            Label type = new Label();
            type.setPrefHeight(27);
            type.setPrefWidth(USE_COMPUTED_SIZE);
            type.setLayoutX(3);
            type.setLayoutY(47);
            type.setStyle("-fx-font-size :15");
            type.setText("Type : " + actuel.getTypeDonation());

//            ImageView marker = new ImageView();
//            marker.setLayoutX(163);
//            marker.setLayoutY(78);
//            marker.setFitWidth(15);
//            marker.setFitHeight(15);
//            marker.setPreserveRatio(false);
//            Image mark = new Image("pics/pin.png");
//            marker.setImage(mark);
            String zz = ps.getUserById(actuel.getUserId()).getUsername();            
            Label description = new Label();
            description.setPrefHeight(27);
            description.setPrefWidth(USE_COMPUTED_SIZE);
            description.setLayoutX(3);
            description.setLayoutY(80);
            description.setStyle("-fx-font-size :12");
            description.setText("Donneur : " + zz);

            Button supprimer = new Button("X");
            supprimer.setPrefHeight(15);
            supprimer.setPrefWidth(15);
            supprimer.setLayoutX(680);
            supprimer.setLayoutY(3);
            supprimer.setVisible(false);

//            Button modifier = new Button("Y");
//            modifier.setPrefHeight(15);
//            modifier.setPrefWidth(15);
//            modifier.setLayoutX(440);
//            modifier.setLayoutY(3);
//            modifier.setVisible(false);
//
//            Button donner = new Button("D");
//            donner.setPrefHeight(15);
//            donner.setPrefWidth(15);
//            donner.setLayoutX(411);
//            donner.setLayoutY(3);
//            donner.setVisible(false);
//
//            Button aff = new Button("A");
//            aff.setPrefHeight(15);
//            aff.setPrefWidth(15);
//            aff.setLayoutX(382);
//            aff.setLayoutY(3);
//            aff.setVisible(false);

            //System.out.println("slmslm" + i + SA.currentDemande.getId());
//            System.out.println("slmslm" + actuel.getTitreDemande());

//            if (actuel.getId() == connected.getId()) {
//            donner.setVisible(true);
            supprimer.setVisible(true);
//            modifier.setVisible(true);
//            aff.setVisible(true);

            supprimer.setOnAction((ActionEvent en) -> {
                System.out.println(actuel);
                try {

                    SD.deleteDonation(actuel);
                } catch (SQLException ex) {
                    Logger.getLogger(Aff_demandeController.class.getName()).log(Level.SEVERE, null, ex);
                }
                AnchorPane redirect;
                try {
                    redirect = FXMLLoader.load(getClass().getResource("Donation_admin.fxml"));
                    main.getChildren().setAll(redirect);
                } catch (IOException ex) {
                    Logger.getLogger(Aff_demandeController.class.getName()).log(Level.SEVERE, null, ex);
                }
            });

//                supprimer.setOnMouseClicked((MouseEvent e) -> {
//                    try {
//                        SA.deleteDemande(actuel);
//                        AnchorPane redirect;
//                        redirect = FXMLLoader.load(getClass().getResource("Aff_demande.fxml"));
//                        main.getChildren().setAll(redirect);
//
//                    } catch (SQLException | IOException ex) {
//                        Logger.getLogger(Aff_demandeController.class.getName()).log(Level.SEVERE, null, ex);
//                    }
//                });
//            modifier.setOnAction((ActionEvent e) -> {
//                System.out.println(actuel);
//                quantite.setVisible(false);
//                scroll.setVisible(false);
//                modifform.setVisible(true);
//                titre_demande.setText(actuel.getTitreDemande());
////              email.setText(actuel.getEmail_Association());
////              address.setText(actuel.getAddress_Association());
////              this.type_demande.setText(actuel.getTypeDemande());
//                description_demande.setText(actuel.getDescriptionDemande());
//                image_demande.setText(actuel.getPhotoDemande());
//                rechercher.setOnAction((ActionEvent eee) -> {
//                    final FileChooser fileChooser = new FileChooser();
//                    final Stage stage = null;
//
//                    File file = fileChooser.showOpenDialog(stage);
//                    if (file != null) {
//                        image_demande.setText(file.toURI().toString());
//                    }
//                });
//                SA.currentDemande = actuel;
//                g = actuel.getId();
//
//                modifierr.setOnAction((ActionEvent ei) -> {
//
//                    Demande nouveau;
//                    nouveau = new Demande(actuel.getId(), 0, type_demande.getValue(), description_demande.getText(), titre_demande.getText(), image_demande.getText());
//
//                    try {
//                        System.out.println("please  " + actuel);
//                        System.out.println(nouveau);
//                        SA.updateDemande(nouveau);
//                        AnchorPane redirected;
//                        redirected = FXMLLoader.load(getClass().getResource("Aff_demande.fxml"));
//                        main.getChildren().setAll(redirected);
//
//                    } catch (SQLException ex) {
//                        Logger.getLogger(Aff_demandeController.class.getName()).log(Level.SEVERE, null, ex);
//                    } catch (IOException ex) {
//                        Logger.getLogger(Aff_demandeController.class.getName()).log(Level.SEVERE, null, ex);
//                    }
//
//                });
//
//            });
//
//            donner.setOnAction((ActionEvent e) -> {
//                modifform.setVisible(false);
//                quantite.setVisible(true);
//                scroll.setVisible(false);
//
//                confirmer_don.setOnAction((ActionEvent ei) -> {
//                    Donationn q;
////                    ServiceUser ps = new ServiceUser();
////                    ServiceDonation SD = new ServiceDonation();
//
//                    int yy;
//                    String tt;
//
//                    yy = Integer.parseInt(quant.getText());
//
////                    yy=15;
//                    tt = actuel.getTypeDemande();
//                    try {
//                        q = new Donationn(1, actuel.getId(), ps.getUserById(6).getId(), 0, yy, tt);
//                        SD.addDonation(q);
//                    } catch (SQLException ex) {
//                        Logger.getLogger(Aff_demandeController.class.getName()).log(Level.SEVERE, null, ex);
//                    }
//                    Alert alert = new Alert(Alert.AlertType.INFORMATION);
//                    alert.setTitle("Succès");
//                    alert.setHeaderText(null);
//                    alert.setContentText("Votre don a été ajouté !");
//                    alert.showAndWait();
//                    AnchorPane redirected;
//                    try {
//                        redirected = FXMLLoader.load(getClass().getResource("Aff_demande.fxml"));
//                        main.getChildren().setAll(redirected);
//                    } catch (IOException ex) {
//                        Logger.getLogger(Aff_demandeController.class.getName()).log(Level.SEVERE, null, ex);
//                    }
//
////                    Twilio.init(ACCOUNT_SID, AUTH_TOKEN);
////
////                    Message message = Message
////                            .creator(new PhoneNumber("+21656601705"), // to
////                                    new PhoneNumber("+18328505634"), // from
////                                    "un nouveau don !")
////                            .create();
////
////                    System.out.println(message.getSid());
//
//                });
//
//            });
//
//            //dddd = actuel;
////                modifier.setOnMouseClicked((MouseEvent e) -> {
////
////
////                    modifform.setVisible(true);
////                    this.titre_demande.setText(actuel.getTitreDemande());
//////                    email.setText(actuel.getEmail_Association());
//////                    address.setText(actuel.getAddress_Association());
////                    //this.type_demande.setText(actuel.getTypeDemande());
////                    description_demande.setText(actuel.getDescriptionDemande());
////                    image_demande.setText(actuel.getPhotoDemande());
////                    rechercher.setOnMouseClicked((MouseEvent ee)->{
////            
////                    final FileChooser fileChooser = new FileChooser();
////                    final Stage stage = null;
////
////                    File file = fileChooser.showOpenDialog(stage);
////                    if (file != null) {
////                        image_demande.setText(file.toURI().toString());
////                    }
////
////                    });
////
////                    modifierr.setOnMouseClicked((MouseEvent er) -> {
////
////                        
////                            Demande nouveau;
////                            nouveau = new Demande(actuel.getId(),0, type_demande.getValue(), description_demande.getText(), titre_demande.getText(), image_demande.getText());
////                            try {
////                                SA.updateDemande(nouveau);
////                                AnchorPane redirected;
////                                redirected = FXMLLoader.load(getClass().getResource("Aff_demande.fxml"));
////                                main.getChildren().setAll(redirected);
////
////                            } catch (SQLException ex) {
////                                Logger.getLogger(Aff_demandeController.class.getName()).log(Level.SEVERE, null, ex);
////                            } catch (IOException ex) {
////                                Logger.getLogger(Aff_demandeController.class.getName()).log(Level.SEVERE, null, ex);
////                            }
////                        
////                    });
////
////                });
//            aff.setOnAction((ActionEvent e) -> {
//                try {
//                    modifform.setVisible(false);
//                    quantite.setVisible(false);
//                    scroll.setVisible(true);
//
//                    List<Donationn> donations = SD.getDonationsD(actuel.getId());
//                    associationcontainer1.getChildren().clear();
//                    for (int k = 0; k < donations.size(); k++) {
//
//                        Donationn actuelD = donations.get(k);
//                        Pane singlee = new Pane();
//                        singlee.setPrefHeight(20);
//                        singlee.setPrefWidth(200);
//
//                        String zz = ps.getUserById(actuelD.getUserId()).getUsername();
//
//                        System.out.println(zz + " a fait la donation de " + String.valueOf(actuelD.getQuantiteDonation()) + " elements de type " + actuelD.getTypeDonation());
//
//                        Label don = new Label();
//                        don.setPrefHeight(10);
//                        don.setPrefWidth(USE_COMPUTED_SIZE);
//                        don.setLayoutX(10);
//                        don.setLayoutY(20);
//                        don.setStyle("-fx-font-size :14");
////                        don.setText(zz + " a fait la donation de " + String.valueOf(actuelD.getQuantiteDonation()) + " elements de type " + actuelD.getTypeDonation());
//                        don.setText(zz + " a fait la donation de " + String.valueOf(actuelD.getQuantiteDonation()) + " elements ");
//
//                        singlee.getChildren().add(don);
//                        associationcontainer1.getChildren().add(singlee);
//
//                    }
//                } catch (SQLException ex) {
//                    Logger.getLogger(Aff_demandeController.class.getName()).log(Level.SEVERE, null, ex);
//                }
//
//            });
//
//            fermeture.setOnAction(new EventHandler<ActionEvent>() {
//                @Override
//                public void handle(ActionEvent eb) {
//                    modifform.setVisible(false);
//                }
//            });

//                fermeture.setOnMouseClicked((MouseEvent eo) -> {
//                    modifform.setVisible(false);
//                });
//            }     
            single.getChildren().add(name);
            single.getChildren().add(type);
//            single.getChildren().add(img);
            single.getChildren().add(description);
            single.getChildren().add(supprimer);
//            single.getChildren().add(modifier);
//            single.getChildren().add(donner);
//            single.getChildren().add(aff);

            associationcontainer.getChildren().add(single);

        }

    }

    @FXML
    private void chercherDemande(KeyEvent event) throws SQLException {
        String m = search_demande.getText();
        ArrayList<Donationn> a = (ArrayList<Donationn>) SD.SearchDonations(m);
        ObservableList<Donationn> obs = FXCollections.observableArrayList(a);
        afficher(obs);
    }

//    @FXML
//    private void modiff(ActionEvent event) throws SQLException, IOException {
//        System.out.println(SA.currentDemande);
//        Demande dddd ;
//        dddd = new Demande(g, 0, "vetements", description_demande.getText(), titre_demande.getText(), image_demande.getText());
//        SA.updateDemande(dddd);
//                        AnchorPane redirected;
//                        redirected = FXMLLoader.load(getClass().getResource("Aff_demande.fxml"));
//                        main.getChildren().setAll(redirected);
//    }
//    @FXML
//    private void fermerQuantite(ActionEvent event) {
//        quantite.setVisible(false);
//    }

    @FXML
    private void triertitre(ActionEvent event) throws SQLException {
        associationcontainer.getChildren().clear();
        titre.setSelected(false);
        afficher(SD.TrierDonations(1));
    }

    @FXML
    private void triertype(ActionEvent event) throws SQLException {
        associationcontainer.getChildren().clear();
        type.setSelected(false);
        afficher(SD.TrierDonations(2));
    }

    @FXML
    private void toDonations(ActionEvent event) throws IOException {
//        Parent tableViewParent = FXMLLoader.load(getClass().getResource("Aff_demande.fxml"));
//        Scene tableViewScene = new Scene(tableViewParent);
//
//        //This line gets the Stage information
//        Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();
//
//        window.setScene(tableViewScene);
//        window.show();
    }

    private void toAdd(ActionEvent event) throws IOException {
        Parent tableViewParent = FXMLLoader.load(getClass().getResource("Add_demande.fxml"));
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
    private void toDem(ActionEvent event) throws IOException {
         Parent tableViewParent = FXMLLoader.load(getClass().getResource("Demande_admin.fxml"));
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
