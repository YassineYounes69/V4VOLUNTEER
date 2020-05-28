/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gui;

import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import entities.agee;
import services.ServiceTask;


/**
 *
 * @author bhk
 */
public class AddageeForm extends Form{

    public AddageeForm(Form previous) {
        setTitle("Add a new agee");
        setLayout(BoxLayout.y());
        
        TextField tfName = new TextField("", "Name");
        TextField tfPrenom= new TextField("", "Prenom");
        TextField tfAge = new TextField("", "Age");
        TextField tfAdresse = new TextField("", "Adresse");
        TextField tfId_membre = new TextField("", "Id_membre");
        TextField tfDonation = new TextField("", "Donation");
        Button btnValider = new Button("Add agee");
        
        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if ((tfName.getText().length()==0)||(tfPrenom.getText().length()==0)||(tfAge.getText().length()==0)||(tfAdresse.getText().length()==0)||(tfId_membre.getText().length()==0)||(tfDonation.getText().length()==0))
                    Dialog.show("Alert", "Please fill all the fields", new Command("OK"));
                else
                {
                    try {
                        agee t  = new agee(tfName.getText(), tfPrenom.getText(),Integer.parseInt(tfAge.getText()),tfAdresse.getText(),Integer.parseInt(tfId_membre.getText()),Integer.parseInt(tfDonation.getText()));
                        ServiceTask.getInstance().ajouter(t);
                        Dialog.show("Success","Connection accepted",new Command("OK"));
                        
                        //Dialog.show("ERROR", "Server error", new Command("OK"));
                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "Age must be a number", new Command("OK"));
                        Dialog.show("ERROR", "Id_membre must be a number", new Command("OK"));
                        Dialog.show("ERROR", "Donation must be a number", new Command("OK"));
                    }
                    
                }
                
                
            }
        });
        
        addAll(tfName,tfPrenom,tfAge,tfAdresse,tfId_membre,tfDonation,btnValider);
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e-> previous.showBack());
                
    }
    
    
}
