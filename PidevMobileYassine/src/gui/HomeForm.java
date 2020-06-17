/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gui;

import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.plaf.Border;
import com.codename1.ui.plaf.Style;
import entities.User;
import gui.CreateUserForm;
import gui.PasswordResetForm;
import services.ServiceUser;
import utils.Session;

/**
 *
 * @author bhk
 */
public class HomeForm extends Form {

    Form current;
    /*Garder traçe de la Form en cours pour la passer en paramètres 
    aux interfaces suivantes pour pouvoir y revenir plus tard en utilisant
    la méthode showBack*/
    
    public HomeForm() {
        current = this; //Récupération de l'interface(Form) en cours
        setTitle("Welcome");
        setLayout(BoxLayout.y());
        //Form form = new Form( new FlowLayout(CENTER,CENTER));
        
        Container main = new Container(BoxLayout.y());
        Container ct1 = new Container(BoxLayout.y());
        Container ct2 = new Container(BoxLayout.x());
        Container ct3 = new Container(BoxLayout.y());
        
        TextField username = new TextField("", "Username", 20, TextArea.ANY);
        TextField password = new TextField("", "Password", 20, TextArea.PASSWORD);
        
        Button signUp = new Button("Sign up");
        signUp.getAllStyles().setBorder(Border.createEmpty());
        signUp.getAllStyles().setTextDecoration(Style.TEXT_DECORATION_UNDERLINE);
        Button forgotPw = new Button("Forgot Password");
        forgotPw.getAllStyles().setBorder(Border.createEmpty());
        forgotPw.getAllStyles().setTextDecoration(Style.TEXT_DECORATION_UNDERLINE);
        
        
        Button btnLogin = new Button("Login");
        
        btnLogin.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
            
            String uname=username.getText();
            String pw=password.getText();
            User user;
            user = ServiceUser.getInstance().login(uname, pw);
            if (user!=null){
                if (user.isEnabled()){
                    Session.connect(user);
                    new homeConnected().show();
                }
                else
                {
                    System.out.println("User exists but not enabled");
                }
            }
            else 
            {
                System.out.println("wrong credentials");
            }
            }
        });
        signUp.addActionListener(e -> new CreateUserForm(current).show());
        forgotPw.addActionListener(e -> new PasswordResetForm(current).show());
        ct1.addAll(username,password);
        ct2.addAll(signUp,forgotPw);
        ct3.add(btnLogin);
        main.addAll(ct1,ct2,ct3);
        add(main);
        //form.add(main);
        
        //form.show();

    }

}
