/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gui;

import com.codename1.components.FileTree;
import com.codename1.components.InfiniteProgress;
import com.codename1.components.MultiButton;
import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Command;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import static com.codename1.ui.events.ActionEvent.Type.KeyPress;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.events.DataChangedListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.list.GenericListCellRenderer;
import entities.User;
import java.util.Map;
import services.ServiceUser;
import utils.InputControl;

/**
 *
 * @author HP
 */
public class CreateUserForm extends Form {
    String role;
    boolean phoneOK;
    boolean mailOK;
    public CreateUserForm(Form previous){
         setTitle("Create account");
        setLayout(BoxLayout.y());
        
        
        
        TextField username = new TextField("", "Username", 20, TextArea.ANY);
        TextField email = new TextField("", "E-Mail", 20, TextArea.EMAILADDR);
        TextField password = new TextField("", "Password", 20, TextArea.PASSWORD);
        TextField confirmPassword = new TextField("", "Confirm password", 20, TextArea.PASSWORD);
        TextField phone = new TextField("", "Phone", 20, TextArea.PHONENUMBER);
        Button signUp = new Button("Sign Up");
        Label labelUserName = new Label("Username must be alphanumeric only");
        labelUserName.setHidden(true);
        Label labelEmail = new Label("Email must be valid");
        labelEmail.setHidden(true);
        Label labelPw = new Label("Password's length must greater than 8 characters");
        labelPw.setHidden(true);
        Label labelPw2 = new Label("Passwords do not match each other");
        labelPw2.setHidden(true);
        Label labelPhone = new Label("Phone number must be valid ");
        labelPhone.setHidden(true);
        Button verifyMail = new Button("Verify mail");
        Button verifyPhone = new Button("Verify number");
        Dialog ip = new InfiniteProgress().showInifiniteBlocking();
        Dialog ip2 = new InfiniteProgress().showInifiniteBlocking();
        ComboBox<Map<String, Object>> combo = new ComboBox<> (
          InputControl.createListEntry("Association"),
          InputControl.createListEntry("Volunteer"));
  
  combo.setRenderer(new GenericListCellRenderer<>(new MultiButton(), new MultiButton()));
        
        
        username.addDataChangedListener(new DataChangedListener() {
            public void dataChanged(int type, int index) {
                
                if (!(InputControl.isAlphaNumeric(username.getText())))
                {
                   labelUserName.setHidden(false);
                   
                    
                } else {
                    labelUserName.setHidden(true);
                }
            }
        });
        
        email.addDataChangedListener(new DataChangedListener() {
            @Override
            public void dataChanged(int type, int index) {
                if (!(InputControl.isValidEmail(email.getText())))
                {
                   labelEmail.setHidden(false);
                   
                    
                } else {
                    labelEmail.setHidden(true);
                    
                        
                }
            }
        });
        
        password.addDataChangedListener(new DataChangedListener() {
            @Override
            public void dataChanged(int type, int index) {
                if (!(InputControl.isPassword(password.getText())))
                {
                   labelPw.setHidden(false);
                   
                    
                } else {
                    labelPw.setHidden(true);
                }
            }
        });
        
        confirmPassword.addDataChangedListener(new DataChangedListener() {
            @Override
            public void dataChanged(int type, int index) {
                if (!(password.getText().equals(confirmPassword.getText())))
                {
                   labelPw2.setHidden(false);
                   
                    
                } else {
                    labelPw2.setHidden(true);
                }
            }
        });
        
        phone.addDataChangedListener(new DataChangedListener() {
            public void dataChanged(int type, int index) {
                if ((!(InputControl.isPhoneNumber(phone.getText())))||(!(InputControl.isNumeric(phone.getText()))))
                {
                   labelPhone.setHidden(false);
                   
                    
                } else {
                    labelPhone.setHidden(true);
                }
            }
        });
        
        verifyMail.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
            
            if (email.getText().length()==0){
                System.out.println("7ot mail");
            
            } else if (ServiceUser.getInstance().verifyMailExistance(email.getText()))
            {
                mailOK=true;
                System.out.println("mail s7i7");
            }
                        else
            {
                mailOK=false;
                System.out.println("mail ghalet");
            }
            }
        });
        verifyPhone.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
            
            if (phone.getText().length()==0){
                System.out.println("7ot noumrou");
            
            } else if (ServiceUser.getInstance().validatePhoneNumber(Integer.parseInt(phone.getText())))
            {
                phoneOK=true;    
                System.out.println("noumrou mawjoud");
            }
                        else
            {
                phoneOK=false;
                System.out.println("noumrou mech mawjoud");
            }
            }
        });
        signUp.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if ((username.getText().length()==0)||(email.getText().length()==0)||(password.getText().length()==0)||(confirmPassword.getText().length()==0)||(phone.getText().length()==0))
                    Dialog.show("Error", "You must fill every field", "OK","");
                else if (!(InputControl.isAlphaNumeric(username.getText())))
                {
                    Dialog.show("Dialog Title", "Username must be alphanumeric only", "OK","");
                    
                }
                else if (!(InputControl.isValidEmail(email.getText())))
                {
                    Dialog.show("Dialog Title", "Email must be valid", "OK","");
                    
                }
                else if (!(InputControl.isPassword(password.getText())))
                {
                    Dialog.show("Dialog Title", "Password's length must greater than 8 characters", "OK","");
                    
                }
                else if (!(password.getText().equals(confirmPassword.getText())))
                {
                    Dialog.show("Dialog Title", "Passwords do not match each other", "OK","");
                    
                }
                else if ((!(InputControl.isPhoneNumber(phone.getText())))||(!(InputControl.isNumeric(phone.getText()))))
                {
                    Dialog.show("Dialog Title", "Phone number must be 8 digits and contains only numbers", "OK","");
                    
                } 
                else if (!mailOK){
                    Dialog.show("Dialog Title", "Mail does not exist", "OK","");
                }
                else if (!phoneOK){
                    Dialog.show("Dialog Title", "Phone number does not exist", "OK","");
                }
                else
                {    
                     if (combo.getSelectedItem().get("Line1").toString().equals("Association")){
                         role="ASSO";
                     }
                     else {
                         role="VOLUN";
                     }
                     
                     User u = new User(Integer.parseInt(phone.getText()),username.getText(),email.getText(),password.getText(),role);
                     ip.show();
                     
                        if(ServiceUser.getInstance().addUser(u))
                            System.out.println("Success Connection accepted");
                        else
                            System.out.println("failure Connection refused");
                    ip.dispose();
                    
                }
                
                
            }
        });
        addAll(username,labelUserName,email,verifyMail,labelEmail,password,labelPw,confirmPassword,labelPw2,phone,verifyPhone,labelPhone,combo,signUp);
        
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK
                , e-> previous.showBack()); // Revenir vers l'interface précédente
        
        
    }
    
}
