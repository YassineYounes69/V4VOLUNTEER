/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gui;

import com.codename1.components.ScaleImageLabel;
import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
import com.codename1.ui.Display;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.Toolbar;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;

/**
 *
 * @author bhk
 */
public class AgeeForm extends Form{
Form current;
    public AgeeForm(Resources res) {
        current=this;
        setTitle("Home");
        setLayout(BoxLayout.y());
        addSideMenu(res);
        add(new Label("Choose an option"));
        Button btnAddTask = new Button("Add Task");
        Button btnListTasks = new Button("List Tasks");
        Button btnStatTasks = new Button("Statistiques");
        
        
        btnAddTask.addActionListener(e-> new AddageeForm(current).show());
        btnListTasks.addActionListener(e-> new ListageeForm(current, res).show());
        btnStatTasks.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                StatEvent(res).show();
            }
        });
        addAll(btnAddTask,btnListTasks,btnStatTasks);
        
        
    }
    
     public Form StatEvent(Resources res) {

        EventPieChart a = new EventPieChart();
        Form stats_Form = a.execute();
        SpanLabel test_SpanLabel = new SpanLabel("DUUUU");
        Class cls = EventPieChart.class;
        stats_Form.getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, ev -> {
            new AgeeForm(res).show();
        });

        return stats_Form;
    }
    
     protected void addSideMenu(Resources res) {
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

        tb.addMaterialCommandToSideMenu("Accueil ", FontImage.MATERIAL_UPDATE, e -> new HomeForm().show());

        tb.addMaterialCommandToSideMenu("Evenement ", FontImage.MATERIAL_DATA_USAGE, e -> new EvenementAcceuil(res).show());
       tb.addMaterialCommandToSideMenu("Personnes agées ", FontImage.MATERIAL_UPDATE, e ->new AgeeForm(res).show());
         tb.addMaterialCommandToSideMenu("Demande ", FontImage.MATERIAL_UPDATE, e -> new NewsfeedForm(res).show());
//        tb.addMaterialCommandToSideMenu("Produit ", FontImage.MATERIAL_UPDATE, e -> new ProduitAccueil(res).show());
//        tb.addMaterialCommandToSideMenu("Magasin ", FontImage.MATERIAL_UPDATE, e -> new MagasinAccueil(res).show());
//       
    }

}
