/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gui;

import com.codename1.components.MultiButton;
import com.codename1.components.ScaleImageLabel;
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
import com.codename1.ui.Display;
import com.codename1.ui.Font;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.geom.Dimension;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.list.DefaultListModel;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
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
import com.twilio.base.Resource;
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
   public AffichRef(Resources res){
       
       
       
       showF = new Form("Liste des réfugiés",BoxLayout.y());
       Container c = new Container(new BoxLayout(BoxLayout.Y_AXIS));
       Style s = UIManager.getInstance().getComponentStyle("Title");
       //
//        final DefaultListModel<String> options = new DefaultListModel<>();
//        AutoCompleteTextField ac = new AutoCompleteTextField(options) {
//      @Override
//      protected boolean filter(String text) {
//         
//          if(text.length() == 0) {
//              
//              return false;
//          }
//          String[] l = searchLocations(text);
//          if(l == null || l.length == 0) {
//              return false;
//          }
//  
//          options.removeAll();
//          for(String s : l) {
//              options.addItem(s);
//              System.out.println(text);
//              System.out.println(options);
//          }
//          return true;
//      }
//
//           private String[] searchLocations(String text) {
//             try {
//        if(text.length() > 0) {
//            ConnectionRequest r = new ConnectionRequest();
//            //r.setPost(false);
//            r.setUrl("http://localhost/ProjetFIN/web/app_dev.php/Showref");
//            NetworkManager.getInstance().addToQueueAndWait(r);
//            Map<String,Object> result = new JSONParser().parseJSON(new InputStreamReader(new ByteArrayInputStream(r.getResponseData()), "UTF-8"));
//            String[] res = Result.fromContent(result).getAsStringArray("//description");
//            return res;
//            
//        }
//    } catch(IOException err) {
//        Log.e(err);
//    }
//    return null;
//           
//           
//           }
//  
//  };
//  ac.setMinimumElementsShownInPopup(5);
//  showF.add(ac);
  
////////////////////////////////////////
       
       
       
       ///////////////////
        Refservices serviceRef = new Refservices();
        for (Refugies list2 : serviceRef.ShowRef()) {
            c.add(addItem(list2,res));
            
            String searchGen = list2.getGender_ref();
            String searchName = list2.getNom_ref();
            String searchLast= list2.getPrenom_ref();
            String searchCountry = list2.getPays_ref();
            
            String searchAge = String.valueOf(list2.getAge_ref());
            
            
        }
        showF.add(c);

        Toolbar tb = showF.getToolbar();
        
        
         Image img = res.getImage("profile-background.jpg");
        if (img.getHeight() > Display.getInstance().getDisplayHeight() / 3) {
            img = img.scaledHeight(Display.getInstance().getDisplayHeight() / 3);
        }
        ScaleImageLabel sl = new ScaleImageLabel(img);
        sl.setUIID("BottomPad");
        sl.setBackgroundType(Style.BACKGROUND_IMAGE_SCALED_FILL);

        tb.addComponentToSideMenu(LayeredLayout.encloseIn(
                sl,
                FlowLayout.encloseCenterBottom(
                        new Label(res.getImage("profile-pic.jpg"), "PictureWhiteBackgrond"))
        ));
        
        
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

         AffichRef h = new AffichRef(res);
        tb.addMaterialCommandToSideMenu("Accueil ", FontImage.MATERIAL_UPDATE, e -> new Accueil(res).show());

        tb.addMaterialCommandToSideMenu("Evenement ", FontImage.MATERIAL_DATA_USAGE, e -> new EvenementAcceuil(res).show());
        tb.addMaterialCommandToSideMenu("Personnes agées ", FontImage.MATERIAL_UPDATE, e -> new AgeeForm(res).show());
        tb.addMaterialCommandToSideMenu("Demande ", FontImage.MATERIAL_UPDATE, e -> new NewsfeedForm(res).show());
        tb.addMaterialCommandToSideMenu("Réfugiés ", FontImage.MATERIAL_UPDATE, e -> h.getF().show());
        tb.addMaterialCommandToSideMenu("Paramétres ", FontImage.MATERIAL_UPDATE, e -> new SettingsForm(this).show());

        tb.addMaterialCommandToSideMenu("Déconnexion", FontImage.MATERIAL_UPDATE, e -> new homeConnected(res).show());
        
        }
   
   
   
   public Container addItem(Refugies c,Resources res) {
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
        AffichRef cg = new AffichRef(res);
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
