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
import controller.logcont;
import controller.refcont;
import entities.Logement;

import java.io.FileNotFoundException;
import java.io.FileOutputStream;
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
import javafx.beans.value.ChangeListener;
import javafx.beans.value.ObservableValue;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;

import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseButton;
import javafx.scene.input.MouseEvent;

/**
 * FXML Controller class
 *
 * @author dEll
 */
public class AfflogController implements Initializable {

    @FXML
    private TextField textaff;
    @FXML
    private Button rapport_log;
    @FXML
    private Button ajoulog;
    @FXML
    private Button modlog;
    @FXML
    private TextField log_nom;
    @FXML
    private TextField log_address;
    @FXML
    private TextField log_nb;
    @FXML
    private TableView<Logement> afflogement;
    @FXML
    private TableColumn<Logement, String> nom_log;
    @FXML
    private TableColumn<Logement, String> add_log;
    @FXML
    private TableColumn<Logement, String> nb_log;
    @FXML
    private TableColumn<Logement, String> etat_log;
    @FXML
    private Button supprimer_logement;

    final ObservableList<Logement> tableData = FXCollections.observableArrayList();

    @Override
    public void initialize(URL url, ResourceBundle rb) {

        //mouselick
        afflogement.setOnMouseClicked((MouseEvent event) -> {
            if (event.getButton().equals(MouseButton.PRIMARY) && event.getClickCount() == 2) {
                Logement ls = afflogement.getSelectionModel().getSelectedItem();
                log_nb.setText(String.valueOf(ls.getNb__chambre()));
                log_address.setText(String.valueOf(ls.getAdresse()));
                log_nom.setText(String.valueOf(ls.getNom_log()));

            }
        });

        /* try {
            // TODO
            afficher_log();
        } catch (SQLException ex) {
            Logger.getLogger(AfflogController.class.getName()).log(Level.SEVERE, null, ex);
        }*/
        //table
        logcont l = new logcont();
        ArrayList<Logement> array;
        try {
            array = (ArrayList<Logement>) l.afficherLog();
            ObservableList<Logement> obs = FXCollections.observableArrayList(array);
            afflogement.setItems(obs);
            nom_log.setCellValueFactory(new PropertyValueFactory<>("nom_log"));
            add_log.setCellValueFactory(new PropertyValueFactory<>("adresse"));
            nb_log.setCellValueFactory(new PropertyValueFactory<>("nb__chambre"));
            etat_log.setCellValueFactory(new PropertyValueFactory<>("etat_log"));

        } catch (SQLException ex) {
            Logger.getLogger(refcont.class.getName()).log(Level.SEVERE, null, ex);
        }

        //search
        textaff.textProperty().addListener(new ChangeListener() {

            @Override
            public void changed(ObservableValue observable, Object oldValue, Object newValue) {
                chercher((String) oldValue, (String) newValue);

            }
        });

    }

    @FXML
    private void ajouter_log(javafx.event.ActionEvent event) throws SQLException, ParseException {

        logcont l = new logcont();

        if (log_nom.getText().isEmpty() || log_address.getText().isEmpty() || log_nb.getText().isEmpty()) {
            Alert alert = new Alert(Alert.AlertType.WARNING);
            alert.setTitle("warning");
            alert.setHeaderText(null);
            alert.setContentText("Verify Your TextFields");
            alert.showAndWait();
        } else if (Integer.parseInt(log_nb.getText()) < 5) {
            Alert alert = new Alert(Alert.AlertType.WARNING);
            alert.setTitle("warning");
            alert.setHeaderText(null);
            alert.setContentText("Verify !! Nombre de chambres doit etre supérierur à 5 !!!");
            alert.showAndWait();
        } else {
            Logement lo = new Logement(Integer.parseInt(log_nb.getText()), log_address.getText(), log_nom.getText());
            System.out.println(lo);
            Alert alert1 = new Alert(Alert.AlertType.CONFIRMATION);
            alert1.setTitle("Confirmation Dialog");
            alert1.setContentText("Etes vous sur de vouloir ajouter ce logement !!!");
            alert1.setHeaderText(null);
            Optional<ButtonType> action = alert1.showAndWait();
            if (action.get() == ButtonType.OK) {
                l.ajouterLog(lo);
            }
        }

        ArrayList<Logement> array;
        try {
            array = (ArrayList<Logement>) l.afficherLog();
            ObservableList<Logement> obs = FXCollections.observableArrayList(array);
            afflogement.setItems(obs);
            nom_log.setCellValueFactory(new PropertyValueFactory<>("nom_log"));
            add_log.setCellValueFactory(new PropertyValueFactory<>("adresse"));
            nb_log.setCellValueFactory(new PropertyValueFactory<>("nb__chambre"));
            etat_log.setCellValueFactory(new PropertyValueFactory<>("etat_log"));

        } catch (SQLException ex) {
            Logger.getLogger(refcont.class.getName()).log(Level.SEVERE, null, ex);
        }

    }

    /* private void afficher_log() throws SQLException {

        logcont l = new logcont();
        ArrayList<Logement> log;
        log = (ArrayList<Logement>) l.afficherLog();
        ObservableList<Logement> obs = FXCollections.observableArrayList(log);
        afflogement.setItems(obs);
        nom_log.setCellValueFactory(new PropertyValueFactory<>("nom_log"));
        add_log.setCellValueFactory(new PropertyValueFactory<>("adresse"));
        nb_log.setCellValueFactory(new PropertyValueFactory<>("nb__chambre"));
        etat_log.setCellValueFactory(new PropertyValueFactory<>("etat_log"));

    }*/
    @FXML
    private void modifier_log(javafx.event.ActionEvent event) throws SQLException, ParseException {
        logcont l = new logcont();

        if (log_nom.getText().isEmpty() || log_address.getText().isEmpty() || log_nb.getText().isEmpty()) {
            Alert alert = new Alert(Alert.AlertType.WARNING);
            alert.setTitle("warning");
            alert.setHeaderText(null);
            alert.setContentText("Verify Your TextFields");
            alert.showAndWait();
        } else if (Integer.parseInt(log_nb.getText()) < 5) {
            Alert alert = new Alert(Alert.AlertType.WARNING);
            alert.setTitle("warning");
            alert.setHeaderText(null);
            alert.setContentText("Verify !! Nombre de chambres doit etre supérierur à 5 !!!");
            alert.showAndWait();
        } else {
            Logement lo = new Logement();
            lo.setNb__chambre(Integer.parseInt(log_nb.getText()));
            lo.setAdresse(log_address.getText());
            lo.setNom_log(log_nom.getText());
            Alert alert1 = new Alert(Alert.AlertType.CONFIRMATION);
            alert1.setTitle("Confirmation Dialog");
            alert1.setContentText("Etes vous sur de vouloir modifier  ce logement !!!");
            alert1.setHeaderText(null);
            Optional<ButtonType> action = alert1.showAndWait();
            if (action.get() == ButtonType.OK) {
                System.out.println(afflogement.getSelectionModel().getSelectedItem().getId_log());
                l.ModifierLog(lo, afflogement.getSelectionModel().getSelectedItem().getId_log());

            }
        }

        ArrayList<Logement> array;
        try {
            array = (ArrayList<Logement>) l.afficherLog();
            ObservableList<Logement> obs = FXCollections.observableArrayList(array);
            afflogement.setItems(obs);
            nom_log.setCellValueFactory(new PropertyValueFactory<>("nom_log"));
            add_log.setCellValueFactory(new PropertyValueFactory<>("adresse"));
            nb_log.setCellValueFactory(new PropertyValueFactory<>("nb__chambre"));
            etat_log.setCellValueFactory(new PropertyValueFactory<>("etat_log"));

        } catch (SQLException ex) {
            Logger.getLogger(refcont.class.getName()).log(Level.SEVERE, null, ex);
        }

    }

    @FXML
    private void logementsup(javafx.event.ActionEvent event) throws SQLException {
        logcont l = new logcont();
        if (!afflogement.getSelectionModel().isEmpty()) {
            Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
            alert.setTitle(" ");
            alert.setHeaderText("Etes-vous sur que vous voulez supprimer le produit : ");
            Optional<ButtonType> result = alert.showAndWait();
            System.out.println(afflogement.getSelectionModel().getSelectedItem().getId_log());
            l.SupprimerLog(afflogement.getSelectionModel().getSelectedItem().getId_log());
        }

        ArrayList<Logement> array;
        try {
            array = (ArrayList<Logement>) l.afficherLog();
            ObservableList<Logement> obs = FXCollections.observableArrayList(array);
            afflogement.setItems(obs);
            nom_log.setCellValueFactory(new PropertyValueFactory<>("nom_log"));
            add_log.setCellValueFactory(new PropertyValueFactory<>("adresse"));
            nb_log.setCellValueFactory(new PropertyValueFactory<>("nb__chambre"));
            etat_log.setCellValueFactory(new PropertyValueFactory<>("etat_log"));

        } catch (SQLException ex) {
            Logger.getLogger(refcont.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    public void chercher(String oldValue, String newValue) {
        ObservableList<Logement> filteredList = FXCollections.observableArrayList();
        //String msg = textaff.getText().concat("%");

        if (textaff == null || (newValue.length() < oldValue.length()) || newValue == null) {
            afflogement.setItems(tableData);
        } else {
            newValue = newValue.toUpperCase();
            for (Logement log : afflogement.getItems()) {
                String filterFirstName = log.getNom_log();
                String filterAdress = log.getAdresse();
                if (filterFirstName.toUpperCase().contains(newValue) || filterAdress.toUpperCase().contains(newValue)) {
                    filteredList.add(log);
                }
            }
            afflogement.setItems(filteredList);

        }

    }

    @FXML
    private void rapport(ActionEvent event) {
        
        String ad="C:\\Users\\dEll\\Desktop\\logement.pdf";
                Document doc=new Document();
               try {
                    try {
                        PdfWriter.getInstance(doc, new FileOutputStream(ad));
                    } catch (DocumentException ex) {
                        Logger.getLogger(logcont.class.getName()).log(Level.SEVERE, null, ex);
                        
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
                   Paragraph p1=new Paragraph("Liste des Logements",f1);
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
                   PdfPTable table = new PdfPTable(4);
                   table.setWidthPercentage(100);
                    table.setSpacingBefore(0f);
                    table.setSpacingAfter(0f);
        
                   Font f3=new Font(Font.FontFamily.TIMES_ROMAN, 14, Font.UNDEFINED, BaseColor.BLUE);
                                   
                     PdfPCell c1=new PdfPCell(new Phrase("Nom du logement",f3));
                     c1.setPadding(4f);     
                   table.addCell(c1);
                   
                     c1=new PdfPCell(new Phrase("Adresse du logement",f3));
                     c1.setPadding(4f);
                   table.addCell(c1);
                   
                     c1=new PdfPCell(new Phrase("nombre de chambres  ",f3));
                     c1.setPadding(4f);
                   table.addCell(c1);
                   
                     c1=new PdfPCell(new Phrase("Etat du Logement",f3));
                     c1.setPadding(4f);
                   table.addCell(c1);
          
                    logcont ref = new logcont();
                    ArrayList<Logement> e =(ArrayList<Logement>)ref.afficherLog();
                    for(int i=0;i<e.size();i++)
                    {
                      String n=e.get(i).getNom_log();
                     Font f4=new Font(Font.FontFamily.TIMES_ROMAN, 10, Font.UNDEFINED, BaseColor.BLACK);
                       c1=new PdfPCell(new Phrase(n,f4));
                       table.addCell(c1);
                                              
                       String b=e.get(i).getAdresse();
                       c1=new PdfPCell(new Phrase(b,f4));
                       table.addCell(c1);
                       
                       int dom=e.get(i).getNb__chambre();
                             String r2="";
                               r2+=dom;
                        c1=new PdfPCell(new Phrase(r2,f4));
                        table.addCell(c1);
                      
                        String r=e.get(i).getEtat_log();
                        c1=new PdfPCell(new Phrase(r,f4));
                        table.addCell(c1);
                       
                     
                     }

                   doc.add(table);
                   } catch (DocumentException | SQLException ex) {
                   Logger.getLogger(logcont.class.getName()).log(Level.SEVERE, null, ex);
               }
               doc.close();
               Alert alerta = new Alert(Alert.AlertType.INFORMATION);
                         
                         alerta.setTitle("");
                         alerta.setContentText("PDF généré avec succes ! ");
                         alerta.showAndWait();
       
    }

}
