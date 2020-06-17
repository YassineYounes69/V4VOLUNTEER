/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gui;

import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import entities.UserY;
import services.ServiceUser;
import utils.Session;

/**
 *
 * @author HP
 */
public class SettingsForm extends Form {
    Form current;
    public SettingsForm(Form previous) {
        current = this; //Récupération de l'interface(Form) en cours
        setTitle("Settings");
        setLayout(BoxLayout.y());
        int id = Session.currentUser.getId();
        /*Container bigCt = new Container();*/
        Container ct1 = new Container();
        Label header = new Label("Welcome "+Session.currentUser.getPrenom() + " "+Session.currentUser.getNom());
        ct1.add(header);
        //ct1.setHidden(true);
        Container ct2 = new Container();
        
        Label username = new Label("Username : ");
        TextField modUsername = new TextField(Session.currentUser.getUsername());
        Button btnUN = new Button("Update");
        ct2.addAll(username,modUsername,btnUN);
        
        Container ct3 = new Container();
        
        Label pw = new Label("Password : ");
        TextField modPw = new TextField();
        Button btnPW = new Button("Update");
        ct3.addAll(pw,modPw,btnPW);
        
        Container ct4 = new Container();
        
        Label mail = new Label("Email : ");
        TextField modMail = new TextField(Session.currentUser.getEmail());
        Button btnMA = new Button("Update");
        ct4.addAll(mail,modMail,btnMA);
        
        Container ct5 = new Container();
        Button btnPH = new Button("Update");
        Label phone = new Label("Phone Number : ");
        String number = String.valueOf(Session.currentUser.getPhoneNumber());
        TextField modPhone = new TextField(number);
        ct5.addAll(phone,modPhone,btnPH);
        
        Container ct6 = new Container();
        Button btnPR = new Button("Update");
        Label prenom = new Label("First Name : ");
        TextField modPrenom = new TextField();
        ct6.addAll(prenom,modPrenom,btnPR);
        ct6.setHidden(true);
        
        Container ct7 = new Container();
        Button btnNO = new Button("Update");
        Label nom = new Label("Name : ");
        TextField modNom = new TextField();
        ct7.addAll(nom,modNom,btnNO);
        ct7.setHidden(true);
        
        btnUN.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                //web service Username
                if (ServiceUser.getInstance().updateUN(modUsername.getText(), id))
                    System.out.println("update ok");
                    else 
                    System.out.println("error");
                
            }
        });
        
        btnPW.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                //web service Password
                if (ServiceUser.getInstance().updatePW(modPw.getText(), id))
                    System.out.println("update ok");
                    else 
                    System.out.println("error");
            }
        });
        btnMA.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                //web service EMAIL
                if (ServiceUser.getInstance().updateEM(modMail.getText(), id))
                    System.out.println("update ok");
                    else 
                    System.out.println("error");
            }
        });
        btnPH.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                //web service Phonenumber
                if (ServiceUser.getInstance().updatePN(modPhone.getText(), id))
                    System.out.println("update ok");
                    else 
                    System.out.println("error");
            }
        });
        btnPR.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                //web service First name
                if (ServiceUser.getInstance().updatePRE(modPrenom.getText(), id))
                    System.out.println("update ok");
                    else 
                    System.out.println("error");
            }
        });
        btnNO.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                //web service Name
                if (ServiceUser.getInstance().updateNOM(modNom.getText(), id))
                    System.out.println("update ok");
                    else 
                    System.out.println("error");
            }
        });
        if(Session.currentUser!=null){
            if((Session.currentUser.getNom().equals("")) && (Session.currentUser.getPrenom().equals("")))
            {
                ct6.setHidden(false);
                ct7.setHidden(false);
            }
                else
                ct1.setHidden(false);
        }
        
       // bigCt.addAll(ct1,ct2,ct3,ct4,ct5,ct6,ct7);
        addAll(ct1,ct2,ct3,ct4,ct5,ct6,ct7);
        
        
        System.out.println("settings");
        getToolbar().addMaterialCommandToRightBar("", FontImage.MATERIAL_ARROW_BACK
                , e-> previous.showBack()); // Revenir vers l'interface précédente
        current.show();
    }
}
