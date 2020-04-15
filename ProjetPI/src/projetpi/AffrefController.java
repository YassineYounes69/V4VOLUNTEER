/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projetpi;

import com.itextpdf.text.BaseColor;
import com.itextpdf.text.Document;
import com.itextpdf.text.DocumentException;
import com.itextpdf.text.Element;
import com.itextpdf.text.Font;
import com.itextpdf.text.Paragraph;
import com.itextpdf.text.Phrase;
import com.itextpdf.text.pdf.PdfPCell;
import com.itextpdf.text.pdf.PdfPTable;
import com.itextpdf.text.pdf.PdfWriter;
import controller.refcont;
import entities.Refugies;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.text.ParseException;
import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;
import java.util.ArrayList;
import java.util.Optional;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.collections.transformation.FilteredList;
import javafx.collections.transformation.SortedList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.ComboBox;
import javafx.scene.control.RadioButton;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.ToggleGroup;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseButton;
import javafx.scene.input.MouseEvent;
import javafx.scene.text.Text;

/**
 * FXML Controller class
 *
 * @author dEll
 */
public class AffrefController implements Initializable {

    @FXML
    private TableView<Refugies> affrefugies;
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
    private Button ajouref;
    @FXML
    private Button modref;
    @FXML
    private Button suppref;
    @FXML
    private TextField ref_nom;
    @FXML
    private TextField ref_prenom;
    @FXML
    private RadioButton homme;
    @FXML
    private RadioButton femme;
    @FXML
    private ComboBox<String> ref_pays;
    @FXML
    private TextField ref_age;
    @FXML
    private Text ref_sexe;
    private ToggleGroup group;
    private String radioButtonLabel;
    @FXML
    private Button rap;
    
    @FXML
    private TextField search;
    
    final ObservableList<Refugies> tableData = FXCollections.observableArrayList();


    //String selectedRadioButton =  group.getSelectedToggle().toString();
    //String toogleGroupValue = selectedRadioButton.getText();
    /**
     * Initializes the controller class.
     *
     * @param url
     * @param rb
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {

        //mouselick
        affrefugies.setOnMouseClicked((MouseEvent event) -> {
            if (event.getButton().equals(MouseButton.PRIMARY) && event.getClickCount() == 2) {
                Refugies refu = affrefugies.getSelectionModel().getSelectedItem();
                ref_nom.setText(String.valueOf(refu.getNom_ref()));
                ref_prenom.setText(String.valueOf(refu.getPrenom_ref()));
                //ref_pays.setText(String.valueOf(refu.getPays_ref()));
                ref_age.setText(String.valueOf(refu.getAge_ref()));
                //etat_ref.setText(String.valueOf(refu.getEtat_ref()));
                //sexe_ref.setText(String.valueOf(refu.getGender_ref()));
                //image_ref.setText(String.valueOf(refu.getImage()));

            }
        });
        //tab

        refcont r = new refcont();
        ArrayList<Refugies> array;
        try {
            array = (ArrayList<Refugies>) r.afficherRef();
            ObservableList<Refugies> obs = FXCollections.observableArrayList(array);
            affrefugies.setItems(obs);
            nom_ref.setCellValueFactory(new PropertyValueFactory<>("nom_ref"));
            prenom_ref.setCellValueFactory(new PropertyValueFactory<>("prenom_ref"));
            pays_ref.setCellValueFactory(new PropertyValueFactory<>("pays_ref"));
            age_ref.setCellValueFactory(new PropertyValueFactory<>("age_ref"));
            etat_ref.setCellValueFactory(new PropertyValueFactory<>("etat_ref"));
            sexe_ref.setCellValueFactory(new PropertyValueFactory<>("gender_ref"));
            image_ref.setCellValueFactory(new PropertyValueFactory<>("image"));
            

        } catch (SQLException ex) {
            Logger.getLogger(refcont.class.getName()).log(Level.SEVERE, null, ex);
        }

        //combobox     
        ref_pays.getItems().addAll("Nigeria", "Ethiopia", "Egypt", "Democratic Republic of the Congo", "Tanzania", "Uganda", "Mozambique",
                "Ghana", "Libya", "Chad", "Mauritania", "Benin");
        ref_pays.setVisibleRowCount(12);
        ref_pays.setEditable(true);
        ref_pays.setPromptText("Choose country");

        //radiobutton
        group = new ToggleGroup();
        homme.setToggleGroup(group);
        homme.setUserData(homme);
        homme.setOnAction(e -> {
            radioButtonLabel = homme.getText();
        });
        femme.setToggleGroup(group);
        femme.setUserData(femme);
        femme.setOnAction(e -> {
        radioButtonLabel = femme.getText();
        });
        
      

    }

    @FXML
    private void AjouterPushed(ActionEvent event) throws SQLException, ParseException {

        refcont ref = new refcont();
        if (ref_nom.getText().isEmpty() || ref_prenom.getText().isEmpty() || ref_age.getText().isEmpty()
                || (!(homme.isSelected() | femme.isSelected())) || ref_pays.getSelectionModel().isEmpty()) {
            Alert alert = new Alert(Alert.AlertType.WARNING);
            alert.setTitle("warning");
            alert.setHeaderText(null);
            alert.setContentText("Verify Your TextFields");
            alert.showAndWait();

        } else if (Integer.parseInt(ref_age.getText()) < 1) {
            Alert alert = new Alert(Alert.AlertType.WARNING);
            alert.setTitle("warning");
            alert.setHeaderText(null);
            alert.setContentText("Verify !! l'age doit etre supérierur à 0 !!!");
            alert.showAndWait();
        } else {
            Refugies r = new Refugies(ref_pays.getSelectionModel().getSelectedItem(), ref_nom.getText(), ref_prenom.getText(),
                    Integer.parseInt(ref_age.getText()), radioButtonLabel);
            System.out.println(r);
            Alert alert1 = new Alert(Alert.AlertType.CONFIRMATION);
            alert1.setTitle("Confirmation Dialog");
            alert1.setContentText("Etes vous sur de vouloir ajouter ce réfugié !!!");
            alert1.setHeaderText(null);
            Optional<ButtonType> action = alert1.showAndWait();
            if (action.get() == ButtonType.OK) {
                ref.ajouterRef11(r);
                ref.afficherRef();
            }
        }

        ArrayList<Refugies> array;
        try {
            array = (ArrayList<Refugies>) ref.afficherRef();
            ObservableList<Refugies> obs = FXCollections.observableArrayList(array);
            affrefugies.setItems(obs);
            nom_ref.setCellValueFactory(new PropertyValueFactory<>("nom_ref"));
            prenom_ref.setCellValueFactory(new PropertyValueFactory<>("prenom_ref"));
            pays_ref.setCellValueFactory(new PropertyValueFactory<>("pays_ref"));
            age_ref.setCellValueFactory(new PropertyValueFactory<>("age_ref"));
            etat_ref.setCellValueFactory(new PropertyValueFactory<>("etat_ref"));
            sexe_ref.setCellValueFactory(new PropertyValueFactory<>("gender_ref"));
            image_ref.setCellValueFactory(new PropertyValueFactory<>("image"));

        } catch (SQLException ex) {
            Logger.getLogger(refcont.class.getName()).log(Level.SEVERE, null, ex);
        }

    }

    @FXML
    private void ModifierPushed(ActionEvent event) throws SQLException {

        refcont ref = new refcont();
        if (ref_nom.getText().isEmpty() || ref_prenom.getText().isEmpty() || ref_age.getText().isEmpty()
                || (!(homme.isSelected() | femme.isSelected())) || ref_pays.getSelectionModel().isEmpty()) {
            Alert alert = new Alert(Alert.AlertType.WARNING);
            alert.setTitle("warning");
            alert.setHeaderText(null);
            alert.setContentText("Verify Your TextFields");
            alert.showAndWait();

        } else if (Integer.parseInt(ref_age.getText()) < 1) {
            Alert alert = new Alert(Alert.AlertType.WARNING);
            alert.setTitle("warning");
            alert.setHeaderText(null);
            alert.setContentText("Verify !! l'age doit etre supérierur à 0 !!!");
            alert.showAndWait();
        } else {
            Refugies r = new Refugies(ref_pays.getSelectionModel().getSelectedItem(), ref_nom.getText(), ref_prenom.getText(),
                    Integer.parseInt(ref_age.getText()), radioButtonLabel);
            System.out.println(r);
            Alert alert1 = new Alert(Alert.AlertType.CONFIRMATION);
            alert1.setTitle("Confirmation Dialog");
            alert1.setContentText("Etes vous sur de vouloir modifier ce réfugié !!!");
            alert1.setHeaderText(null);
            Optional<ButtonType> action = alert1.showAndWait();
            if (action.get() == ButtonType.OK) {
                System.out.println(affrefugies.getSelectionModel().getSelectedItem().getId_ref());
                ref.ModifierRef1(r, affrefugies.getSelectionModel().getSelectedItem().getId_ref());
                ref.afficherRef();
            }

        }
        ArrayList<Refugies> array;
        try {
            array = (ArrayList<Refugies>) ref.afficherRef();
            ObservableList<Refugies> obs = FXCollections.observableArrayList(array);
            affrefugies.setItems(obs);
            nom_ref.setCellValueFactory(new PropertyValueFactory<>("nom_ref"));
            prenom_ref.setCellValueFactory(new PropertyValueFactory<>("prenom_ref"));
            pays_ref.setCellValueFactory(new PropertyValueFactory<>("pays_ref"));
            age_ref.setCellValueFactory(new PropertyValueFactory<>("age_ref"));
            etat_ref.setCellValueFactory(new PropertyValueFactory<>("etat_ref"));
            sexe_ref.setCellValueFactory(new PropertyValueFactory<>("gender_ref"));
            image_ref.setCellValueFactory(new PropertyValueFactory<>("image"));

        } catch (SQLException ex) {
            Logger.getLogger(refcont.class.getName()).log(Level.SEVERE, null, ex);
        }

    }

    @FXML
    private void SupprimerPushed(ActionEvent event) throws SQLException {
        refcont ref = new refcont();
        if (!affrefugies.getSelectionModel().isEmpty()) {
            Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
            alert.setTitle(" ");
            alert.setHeaderText("Etes-vous sur que vous voulez supprimer le produit : ");
            Optional<ButtonType> result = alert.showAndWait();
            System.out.println(affrefugies.getSelectionModel().getSelectedItem().getId_ref());
            ref.SupprimerRef(affrefugies.getSelectionModel().getSelectedItem().getId_ref());
        }
        ArrayList<Refugies> array;
        array = (ArrayList<Refugies>) ref.afficherRef();
        ObservableList<Refugies> obs = FXCollections.observableArrayList(array);
        affrefugies.setItems(obs);
        nom_ref.setCellValueFactory(new PropertyValueFactory<>("nom_ref"));
        prenom_ref.setCellValueFactory(new PropertyValueFactory<>("prenom_ref"));
        pays_ref.setCellValueFactory(new PropertyValueFactory<>("pays_ref"));
        age_ref.setCellValueFactory(new PropertyValueFactory<>("age_ref"));
        etat_ref.setCellValueFactory(new PropertyValueFactory<>("etat_ref"));
        sexe_ref.setCellValueFactory(new PropertyValueFactory<>("gender_ref"));
        image_ref.setCellValueFactory(new PropertyValueFactory<>("image"));
    }

    @FXML
    private void rapport(ActionEvent event) {
        
        
                String ad="C:\\Users\\dEll\\Desktop\\refugies.pdf";
                Document doc=new Document();
               try {
                    try {
                        PdfWriter.getInstance(doc, new FileOutputStream(ad));
                    } catch (DocumentException ex) {
                        Logger.getLogger(refcont.class.getName()).log(Level.SEVERE, null, ex);
                        
                    }
                   } catch (FileNotFoundException ex) {
                 Alert alerta = new Alert(Alert.AlertType.ERROR);
                         
                         alerta.setTitle("Notification");
                         alerta.setContentText("veuillez saisir un chemin VALIDE ! ");
                         alerta.showAndWait();
               }
               doc.open();
               try {
                   
                   Font f=new Font(Font.FontFamily.TIMES_ROMAN, 24, Font.UNDERLINE, BaseColor.RED);
                   Paragraph p=new Paragraph("V4VOULUNTEER\n",f);
                   p.setAlignment(Element.ALIGN_CENTER);
                   doc.add(p);
                    Font f1=new Font(Font.FontFamily.TIMES_ROMAN, 20, Font.UNDERLINE, BaseColor.RED);
                   Paragraph p1=new Paragraph("Liste des réfugiés",f1);
                   p1.setAlignment(Element.ALIGN_CENTER);
                   doc.add(p1);
                   DateTimeFormatter dtf = DateTimeFormatter.ofPattern("yyyy/MM/dd HH:mm:ss");  
                   LocalDateTime now = LocalDateTime.now();  
                   String d=   dtf.format(now);
                    Font f2=new Font(Font.FontFamily.TIMES_ROMAN, 12, Font.UNDERLINE, BaseColor.BLACK);
                    Paragraph p2=new Paragraph("\nDate: "+d,f2);
                    doc.add(p2);
                    doc.add(new Paragraph("Admin Resposable : " ,f2));
                    doc.add(new Paragraph(" "));
                   PdfPTable table = new PdfPTable(5);
                   table.setWidthPercentage(100);
                    table.setSpacingBefore(0f);
                    table.setSpacingAfter(0f);
        
                   Font f3=new Font(Font.FontFamily.TIMES_ROMAN, 14, Font.UNDEFINED, BaseColor.BLUE);
                                   
                     PdfPCell c1=new PdfPCell(new Phrase("Nom du réfugié",f3));
                     c1.setPadding(4f);     
                   table.addCell(c1);
                   
                     c1=new PdfPCell(new Phrase("Prennom du réfugié",f3));
                     c1.setPadding(4f);
                   table.addCell(c1);
                   
                     c1=new PdfPCell(new Phrase("sexe ",f3));
                     c1.setPadding(4f);
                   table.addCell(c1);
                   
                     c1=new PdfPCell(new Phrase("Etat du réfugié",f3));
                     c1.setPadding(4f);
                   table.addCell(c1);
          
                   c1=new PdfPCell(new Phrase("Age du réfugié",f3));
                     c1.setPadding(4f);
                   table.addCell(c1);
                   
                    refcont ref = new refcont();
                    ArrayList<Refugies> e =(ArrayList<Refugies>)ref.afficherRef();
                    for(int i=0;i<e.size();i++)
                    {
                      String n=e.get(i).getNom_ref();
                     Font f4=new Font(Font.FontFamily.TIMES_ROMAN, 10, Font.UNDEFINED, BaseColor.BLACK);
                       c1=new PdfPCell(new Phrase(n,f4));
                       table.addCell(c1);
                                              
                       String b=e.get(i).getPrenom_ref();
                       c1=new PdfPCell(new Phrase(b,f4));
                       table.addCell(c1);
                      
                       String dd=e.get(i).getGender_ref();
                       c1=new PdfPCell(new Phrase(dd,f4));
                       table.addCell(c1);
                       
                        
                        String r=e.get(i).getEtat_ref();
                        c1=new PdfPCell(new Phrase(r,f4));
                        table.addCell(c1);
                       
                        int dom=e.get(i).getAge_ref();
                             String r2="";
                               r2+=dom;
                        c1=new PdfPCell(new Phrase(r2,f4));
                        table.addCell(c1);
                  
                     }

                   doc.add(table);
                   } catch (DocumentException | SQLException ex) {
                   Logger.getLogger(refcont.class.getName()).log(Level.SEVERE, null, ex);
               }
               doc.close();
               Alert alerta = new Alert(Alert.AlertType.INFORMATION);
                         
                         alerta.setTitle("");
                         alerta.setContentText("PDF généré avec succes ! ");
                         alerta.showAndWait();
        }
    
    public void chercher(String oldValue, String newValue) {
        ObservableList<Refugies> filteredList = FXCollections.observableArrayList();

        if (search == null || (newValue.length() < oldValue.length()) || newValue == null) {
            affrefugies.setItems(tableData);
        } else {
            newValue = newValue.toUpperCase();
            for (Refugies log : affrefugies.getItems()) {
                String filterFirstName = log.getNom_ref();
                String filterAdress = log.getPrenom_ref();
                String filterLieu = log.getGender_ref();
                String filterCreateur = log.getEtat_ref();
                if (filterFirstName.toUpperCase().contains(newValue) || filterAdress.toUpperCase().contains(newValue) || filterLieu.toUpperCase().contains(newValue)  || filterCreateur.toUpperCase().contains(newValue) ) {
                    filteredList.add(log);
                }
            }
            affrefugies.setItems(filteredList);
        }

    }

}
