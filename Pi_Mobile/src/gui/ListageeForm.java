/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gui;

import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextArea;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import entities.agee;
import services.ServiceTask;


/**
 *
 * @author bhk
 */
public class ListageeForm extends Form{

    public ListageeForm(Form previous,Resources res) {
        super("Nos agees ", BoxLayout.y());
        System.out.println("form d'affichage des agees begin \n");
        //Dialog ip = new InfiniteProgress().showInifiniteBlocking(); 
        removeAll();
        show();
        affichageagee(res);
        // ip.dispose();

        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e-> previous.showBack());
    }
    
    private void affichageagee(Resources res) {
        ServiceTask es = new ServiceTask();
        agee a = new agee();

        System.out.println("begin l'affichge des agees");
        for (int i = 0; i < es.afficherAll().size(); i++) {
            addagee(res, es.afficherAll().get(i));
            show();

        }
        System.out.println("end d'affichage");
    }
    
    public void addagee(Resources res, agee a) {
        Button image = new Button();
        image.setUIID("Label");
        Container cnt = BorderLayout.west(image);
        
        TextArea nom = new TextArea(a.getNom());
        nom.setUIID("NewsTopLine");
        nom.setEditable(false);
        
        TextArea prenom = new TextArea(a.getPrenom());
        prenom.setUIID("NewsTopLine");
        prenom.setEditable(false);
        
        Label age = new Label(String.valueOf("Age:" + " " + a.getAge()) + " Ans  ", "NewsBottomLine");
        age.setTextPosition(RIGHT);
        
        TextArea adresse = new TextArea(a.getAdresse());
        adresse.setUIID("NewsTopLine");
        adresse.setEditable(false);
        
        Label donation = new Label(String.valueOf("Donation:" + " " + a.getDonation()) + " Dt  ", "NewsBottomLine");
        donation.setTextPosition(RIGHT);
        
        Button btnSupprimerTasks = new Button("Supprimer");
        btnSupprimerTasks.addActionListener(e->{
        
        ServiceTask sa = new ServiceTask();
        sa.Supprimeragee(a.getId());
            
         });        
         
        
        
        
        

  cnt.add(BorderLayout.CENTER,
                BoxLayout.encloseY(
                        nom, prenom, age, adresse, donation,btnSupprimerTasks
                )); 
          add(cnt);
          

    }
    
    
}
