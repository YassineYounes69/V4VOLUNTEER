/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gui;

import com.codename1.components.MultiButton;
import com.codename1.components.ToastBar;
import com.codename1.ui.Button;
import com.codename1.ui.ButtonGroup;
import com.codename1.ui.CheckBox;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Command;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.RadioButton;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.URLImage;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.list.GenericListCellRenderer;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.util.Resources;
import entities.Refugies;
import java.util.Arrays;
import java.util.HashMap;
import java.util.Map;
import javafx.scene.control.ToggleGroup;
import services.Refservices;

/**
 *
 * @author dEll
 */
public class AjoutRef extends Form {
    
    String x;
    String aman;
    Form f3;
    Resources theme;
    TextField paysref;
    TextField nomref;
    TextField prenomref;
    TextField ageref;
    TextField genderref;
    ComboBox combo;
    ButtonGroup vt;
    Button btnAjout;
    boolean contains;
    private ToggleGroup group;
    private String radioButtonLabel;
    
    
    
    
    public AjoutRef(){
        
        theme = UIManager.initFirstTheme("/theme");
        f3 = new Form("Ajouter Coordonnées",BoxLayout.y());
        //textfiels
        paysref = new TextField("","Pays");
        nomref = new TextField("","Nom");
        prenomref = new TextField("","Prenom");
        ageref = new TextField("","Age");
        genderref = new TextField("","Gender");
        //radio
        RadioButton homme = new RadioButton("Homme");
        RadioButton femme = new RadioButton("Femme");
        vt = new ButtonGroup(homme, femme);
        vt.add(homme);
        vt.add(femme);
        homme.addActionListener( (e) -> {
        radioButtonLabel = homme.getText();
        });
        femme.addActionListener( (e) -> {
        radioButtonLabel = femme.getText();
        });
         //multibutton
        String[] pays = { "Ethiopia", "Libya", "Chad", "Mauritania",
        "Benin", "Mozambique", "Nigeria"};
        int size = Display.getInstance().convertToPixels(7);
        EncodedImage placeholder = EncodedImage.createFromImage(Image.createImage(size, size, 0xffcccccc), true);
        Image[] pictures = {
        URLImage.createToStorage(placeholder, "Ethiopia","https://cdn.countryflags.com/thumbs/ethiopia/flag-round-250.png"),
        URLImage.createToStorage(placeholder, "Libya","https://cdn.countryflags.com/thumbs/libya/flag-round-250.png"),
        URLImage.createToStorage(placeholder, "Chad","https://cdn.countryflags.com/thumbs/chad/flag-round-250.png"),
        URLImage.createToStorage(placeholder, "Mauritania","https://cdn.countryflags.com/thumbs/mauritania/flag-round-250.png"),
        URLImage.createToStorage(placeholder, "Benin","https://cdn.countryflags.com/thumbs/benin/flag-round-250.png"),
        URLImage.createToStorage(placeholder, "Mozambique","https://cdn.countryflags.com/thumbs/mozambique/flag-round-250.png"),
        URLImage.createToStorage(placeholder, "Nigeria","https://cdn.countryflags.com/thumbs/nigeria/flag-round-250.png")
        };

    MultiButton b = new MultiButton("Choose a country");
    b.addActionListener(e -> {
    Dialog d = new Dialog();
    d.setLayout(BoxLayout.y());
    d.getContentPane().setScrollableY(true);
    for(int iter = 0 ; iter < pays.length ; iter++) {
    MultiButton mb = new MultiButton(pays[iter]);
        mb.setIcon(pictures[iter]);
        d.add(mb);
        mb.addActionListener(ee -> {
            b.setTextLine1(mb.getTextLine1());
            b.setIcon(mb.getIcon());
            d.dispose();
            b.revalidate();
            aman = mb.getTextLine1();
            for (String s: pays) {
            if (s.equals(aman))
            contains = true ;
            }
          });
        }
        d.showPopupDialog(b);
    });
       
    
        
        //btn
        btnAjout = new Button("Ajouter");
        //add
        
        f3.add(nomref);
        f3.add(prenomref);
        f3.add(ageref);
        f3.add(homme);
        f3.add(femme);   
        f3.add(b);
        f3.add(btnAjout);
           
         btnAjout.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                if //(paysref.getText().length()==0||nomref.getText().length()==0||prenomref.getText().length()==0||ageref.getText().length()==0||genderref.getText().length()==0 )
                        
                        (nomref.getText().length()==0||prenomref.getText().length()==0||ageref.getText().length()==0 )
                    
                {
                    Dialog.show("Alert", "Please fill all the fields", new Command("OK"));
                }else if ((!(homme.isSelected() | femme.isSelected())))
                {
                    Dialog.show("Alert", "Please Choose a gender  ", new Command("OK"));
                }

                else if ( ! contains )
                {
                    Dialog.show("Alert", "Please Choose a country  ", new Command("OK"));
                }
                
                else{
                    Refservices ser = new Refservices();
                    Refugies c = new Refugies(b.getTextLine1(), nomref.getText(), prenomref.getText(),
                    Integer.parseInt(ageref.getText()), radioButtonLabel);
                    System.out.println(c);
                    ser.Addrefugies(c);
                    ToastBar.showErrorMessage("Réfugié ajouté  !");
                    AffichRef cc = new AffichRef(theme);
                    cc.getF().show();
                }
            }
        });
            Toolbar tb2 = f3.getToolbar();
            f3.getToolbar().addCommandToRightBar("Back", null, new ActionListener() { //retouuuuuuuuuuuuuuuuuuuurrr
            @Override
            public void actionPerformed(ActionEvent evt) {
            AffichRef cc = new AffichRef(theme);                   
            cc.getF().show();
                }
            });  
     }
    
    private Map<String, Object> createListEntry(String namec) {
    Map<String, Object> entry = new HashMap<>();
    entry.put("Line1", namec);
        return entry;
       
    }
    
        
    public Form getF() {
        return f3;
    }

    public void setF(Form f) {
        this.f3 = f3;
    }
    
    
}
