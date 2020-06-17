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
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.Toolbar;
import static com.codename1.ui.events.ActionEvent.Type.Theme;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.codename1.ui.FontImage;
import com.codename1.ui.events.ActionEvent;
import static com.codename1.ui.events.ActionEvent.Type.Log;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.plaf.Style;
import entities.User;
import services.ServiceUser;
import utils.Session;
/**
 *
 * @author HP
 */
public class homeConnected extends Form {
    Form current;
    
    public homeConnected(){
        current = this; //Récupération de l'interface(Form) en cours
        setTitle("Home");
        setLayout(BoxLayout.y());
        Resources theme = UIManager.initFirstTheme("/theme");
     
       Toolbar.setGlobalToolbar(true);
String con="";
Toolbar tb = current.getToolbar();
Image icon = theme.getImage("icon.png"); 
Container topBar = BorderLayout.east(new Label(icon));
topBar.add(BorderLayout.SOUTH, new Label("Cool App Tagline...", "SidemenuTagline")); 
topBar.setUIID("SideCommand");
tb.addComponentToSideMenu(topBar);

tb.addMaterialCommandToSideMenu("Home", FontImage.MATERIAL_HOME, e -> {}); 
tb.addMaterialCommandToSideMenu("Website", FontImage.MATERIAL_WEB, e -> {});
tb.addMaterialCommandToSideMenu("Settings", FontImage.MATERIAL_SETTINGS, e -> {
    new SettingsForm(current).show();
});
tb.addMaterialCommandToSideMenu("About", FontImage.MATERIAL_INFO, e -> {});
Container header = new Container();
if (Session.currentUser!=null)
con = "You are connected as : " + Session.currentUser.getUsername();
Label welcome = new Label(con);

Button disconnect = new Button("Disconnect");
disconnect.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                Session.disconnect();
                new HomeForm().show();
            }
        });
header.addAll(welcome,disconnect);
current.add(header);





if (Session.currentUser!=null){
    header.setHidden(false);
    System.out.println("connected as : " + Session.currentUser.toString());
}
current.show();
 

    
    }

  
}
