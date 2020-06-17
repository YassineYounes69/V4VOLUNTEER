/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gui;

import com.codename1.components.ScaleImageLabel;
import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.Display;
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
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.Style;
import entities.UserY;
import services.ServiceUser;
import utils.Session;
/**
 *
 * @author HP
 */
public class homeConnected extends Form {
    Form current;
    
    public homeConnected(Resources res){
        current = this; //Récupération de l'interface(Form) en cours
        setTitle("Home");
        setLayout(BoxLayout.y());
        Resources theme = UIManager.initFirstTheme("/theme");
     
       Toolbar.setGlobalToolbar(true);
String con="";
//Toolbar tb = current.getToolbar();
//Image icon = theme.getImage("icon.png"); 
//Container topBar = BorderLayout.east(new Label(icon));
//topBar.add(BorderLayout.SOUTH, new Label("Cool App Tagline...", "SidemenuTagline")); 
//topBar.setUIID("SideCommand");
//tb.addComponentToSideMenu(topBar);
//
//Image img = res.getImage("profile-background.jpg");
//        if (img.getHeight() > Display.getInstance().getDisplayHeight() / 3) {
//            img = img.scaledHeight(Display.getInstance().getDisplayHeight() / 3);
//        }
//        ScaleImageLabel sl = new ScaleImageLabel(img);
//        sl.setUIID("BottomPad");
//        sl.setBackgroundType(Style.BACKGROUND_IMAGE_SCALED_FILL);
//
//        tb.addComponentToSideMenu(LayeredLayout.encloseIn(
//                sl,
//                FlowLayout.encloseCenterBottom(
//                        new Label(res.getImage("profile-pic.jpg"), "PictureWhiteBackgrond"))
//        ));
//
//tb.addMaterialCommandToSideMenu("Home", FontImage.MATERIAL_HOME, e -> {}); 
//tb.addMaterialCommandToSideMenu("Website", FontImage.MATERIAL_WEB, e -> {});
//tb.addMaterialCommandToSideMenu("Settings", FontImage.MATERIAL_SETTINGS, e -> {
//    new SettingsForm(current).show();
//});
//tb.addMaterialCommandToSideMenu("About", FontImage.MATERIAL_INFO, e -> {});

 Toolbar tb = getToolbar();
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
        AffichRef h = new AffichRef(res);
        tb.addMaterialCommandToSideMenu("Accueil ", FontImage.MATERIAL_UPDATE, e -> new HomeForm().show());

        tb.addMaterialCommandToSideMenu("Evenement ", FontImage.MATERIAL_DATA_USAGE, e -> new EvenementAcceuil(res).show());
       tb.addMaterialCommandToSideMenu("Personnes agées ", FontImage.MATERIAL_UPDATE, e ->new AgeeForm(res).show());
         tb.addMaterialCommandToSideMenu("Demande ", FontImage.MATERIAL_UPDATE, e -> new NewsfeedForm(res).show());
        tb.addMaterialCommandToSideMenu("Réfugiés ", FontImage.MATERIAL_UPDATE, e ->h.getF().show());
        tb.addMaterialCommandToSideMenu("Paramétres ", FontImage.MATERIAL_UPDATE, e -> new homeConnected(res).show());






Container header = new Container();
if (Session.currentUser!=null)
con = "You are connected as : " + Session.currentUser.getUsername();
Label welcome = new Label(con);

Button disconnect = new Button("Disconnect");
disconnect.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                Session.disconnect();
                new HomeForm_1(res).show();
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
