/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Form;

import com.codename1.components.MultiButton;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.Log;
import com.codename1.io.NetworkManager;
import com.codename1.processing.Result;
import com.codename1.ui.AutoCompleteTextField;
import com.codename1.ui.Button;
import com.codename1.ui.CheckBox;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Font;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.geom.Dimension;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.list.DefaultListModel;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.plaf.UIManager;
import com.twilio.Twilio;
import com.twilio.rest.api.v2010.account.Message;
import entities.Logement;
import entities.Refugies;
import java.io.IOException;
import java.util.Arrays;
import java.util.Hashtable;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import services.Refservices;
import com.twilio.Twilio;
import com.twilio.rest.api.v2010.account.Message;
import com.twilio.type.PhoneNumber;
import java.io.ByteArrayInputStream;
import java.io.InputStreamReader;
import java.util.Map;

/**
 *
 * @author dEll
 */
public class AffichRef extends Form {
    
    Form showF;
    TextField search;
    Container c;
    Container c2;
    Container c1;
    Refugies list2;
    Refservices serviceRef;
    String searchGen;
    String searchName;
    String searchLast;
    String searchCountry;
    String searchAge ;
            AutoCompleteTextField ac;
   public AffichRef(){
       
       
       
       showF = new Form("Liste des réfugiés",BoxLayout.y());
       Container c = new Container(new BoxLayout(BoxLayout.Y_AXIS));
       Style s = UIManager.getInstance().getComponentStyle("Title");
       //
        
       
       
       
       ///////////////////
        Refservices serviceRef = new Refservices();
        for (Refugies list2 : serviceRef.ShowRef()) {
            c.add(addItem(list2));
            
            String searchGen = list2.getGender_ref();
            String searchName = list2.getNom_ref();
            String searchLast= list2.getPrenom_ref();
            String searchCountry = list2.getPays_ref();
            
            String searchAge = String.valueOf(list2.getAge_ref());
            
            
        }
        showF.add(c);

        Toolbar tb = showF.getToolbar();
        
        tb.addMaterialCommandToSideMenu("Add", FontImage.MATERIAL_ADD, new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                AjoutRef up = new AjoutRef();
                        up.getF().show();
            }
        });
        tb.addMaterialCommandToSideMenu("Donate", FontImage.MATERIAL_EURO, new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                Sendtip st = new Sendtip();
                        st.getTipform().show();
            }
        });

        }
   
   
   
   public Container addItem(Refugies c) {
        Container c1 = new Container(new BoxLayout(BoxLayout.X_AXIS));
        c1.getStyle().setFgColor(0xbbc2c6);
        c1.setSize(new Dimension(20, 20));
        Container c2 = new Container(new BoxLayout(BoxLayout.Y_AXIS));
        Label nameet = new Label(c.getEtat_ref());
        nameet.getStyle().setFgColor(0x1e3642);
        Font smallPlainSystemFont = Font.createSystemFont(Font.FACE_SYSTEM, Font.STYLE_BOLD, Font.SIZE_LARGE);
        nameet.getStyle().setFont(smallPlainSystemFont);
        Label idr = new Label("id du réfugié : " + c.getId_ref());
        Label paysr = new Label("PAYS :" + c.getPays_ref());
        Label nomr = new Label("Nom :" + c.getNom_ref());
        Label prenomr = new Label("Prenom : " + c.getPrenom_ref());
        Label ager = new Label("Age : " + c.getAge_ref());
        Label genderr = new Label("Gender: " + c.getGender_ref());
        Button b = new Button("Delete");
        Button mod = new Button("Update");
        //delete
        b.addActionListener((evt) -> {
        Refservices serviceTask = new Refservices();
        serviceTask.DeleteRef(c);
        AffichRef cg = new AffichRef();
        cg.getF().show();
        });
        //uodate
         mod.addActionListener(new ActionListener() {
            
             @Override
             public void actionPerformed(ActionEvent evt) {
             Hashtable data = new Hashtable();
                  
                    data.put("id", c.getId_ref());
                    data.put("Pays", c.getPays_ref());
                    data.put("nom", c.getNom_ref());
                    data.put("prenom", c.getPrenom_ref());
                    data.put("age", c.getAge_ref());
                    data.put("gender", c.getGender_ref());
                    System.out.println(data);
                 
                 ModRef up;
                 try {
                        up = new ModRef(data);
                        up.getF().show();

                    } catch (IOException ex) {
                    }
                
               
            }
        });
    
     //donate
     
        //addbuttons
        c2.add(BorderLayout.center(nameet));
        c2.add(BorderLayout.south(idr));
        c2.add(BorderLayout.south(paysr));
        c2.add(BorderLayout.south(nomr));
        c2.add(BorderLayout.south(prenomr));
        c2.add(BorderLayout.south(ager));
        c2.add(BorderLayout.south(genderr));
        c2.add(b);
        c2.add(mod);
        
        c1.add(c2);
        
        showF.refreshTheme();
        return c1;
        
    }
    
    
   public Form getF() {
        return showF;
    }

    public void setF(Form showF) {
        this.showF = showF;
    }
    
    
}
