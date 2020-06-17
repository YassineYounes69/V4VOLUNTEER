/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gui;

import com.codename1.components.FileTree;
import com.codename1.ui.Button;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import entities.User;
import services.ServiceUser;

/**
 *
 * @author HP
 */
public class PasswordResetForm extends Form{
    public PasswordResetForm(Form previous){
        setTitle("Reset password");
        setLayout(BoxLayout.y());
        
        
        TextField email = new TextField("", "E-Mail", 20, TextArea.EMAILADDR);
        
        Button reset = new Button("Reset password");
        reset.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
            
            String mail=email.getText();
            if (!(ServiceUser.getInstance().verifyMailExistance(email.getText()))){
                System.out.println("This mail does not exist");
            }
            else
            {
                if (ServiceUser.getInstance().resetPw(mail)) {
                    System.out.println("Password sent to your phone number");
                }
                else {
                    System.out.println("This mail does not exist in our data base");
                }
            }
            }
        });
        addAll(email,reset);
        
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK
                , e-> previous.showBack()); // Revenir vers l'interface précédente
    }
}
