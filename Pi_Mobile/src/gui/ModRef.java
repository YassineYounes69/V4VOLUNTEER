/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gui;

import com.codename1.components.InfiniteProgress;
import com.codename1.components.MultiButton;
import com.codename1.components.SpanLabel;
import com.codename1.components.ToastBar;
import com.codename1.ui.Button;
import com.codename1.ui.ButtonGroup;
import com.codename1.ui.Command;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.RadioButton;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.URLImage;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import entities.Refugies;
import java.io.IOException;
import java.util.Hashtable;
import services.Refservices;

/**
 *
 * @author dEll
 */
public class ModRef {
    
    String x;
    Form f;
    Resources theme;
    String aman;
    boolean contains;
    ButtonGroup vt;
    private String radioButtonLabel;
    
    
    public ModRef(Hashtable data) throws IOException {
        theme = UIManager.initFirstTheme("/theme");
        Toolbar.setGlobalToolbar(true);
      
        f = new Form("Modifier coordonnées");
            //pays_ref`, `nom_ref`,`prenom_ref`, `age_ref`,`gender_ref
        Button btn = new Button("Save");
  
        Label ltitre = new Label("Titre");
        ltitre.getAllStyles().setFgColor(0xff0000);
       
        
        //country
        Label paysr = new Label("Pays:");
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
        
        Label nomr = new Label("Nom:");
        nomr.getAllStyles().setFgColor(0xff0000);
        TextField nomrf = new TextField("", "Nomm");
        
        Label prenomr = new Label("Prenom:");
        prenomr.getAllStyles().setFgColor(0xff0000);
        TextField prenomrf = new TextField("", "Prenom");
        
        
        
//        Label paysr = new Label("Pays:");
//        paysr.getAllStyles().setFgColor(0xff0000);
//        TextField paysrf = new TextField("", "Pays");
        
        
        Label ager = new Label("Age:");
        ager.getAllStyles().setFgColor(0xff0000);
        TextField agerf = new TextField("", "Age");
        
//        Label genderr = new Label("Gender:");
//        genderr.getAllStyles().setFgColor(0xff0000);
//        TextField genderrf = new TextField("", "Gender");

       //gender
        Label genderr = new Label("Gender:");
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
        RadioButton selected = new RadioButton();  
        selected.setText(radioButtonLabel);
        
        
        //
        Refservices sf = new Refservices();
     
        
        int a = (int) data.get("id");
        
        //paysrf.setText((String) data.get("Pays"));
        b.setTextLine1((String) data.get("Pays"));
        
        //nomr.setText((String) data.get("Nom"));
        nomrf.setText((String) data.get("Nom"));
        
        //prenomr.setText((String) data.get("Prenom"));
        prenomrf.setText((String) data.get("Prenom"));
        
        //ager.setText((String) data.get("Age"));
        agerf.setText((String) data.get("Age"));
        
        //genderr.setText((String) data.get("Gender"));
        //genderrf.setText((String) data.get("Gender"));
        
       // vt.setSelected(Integer.parseInt((String) data.get("Gender")));
        
        System.out.println(data);
   
        Container c = new Container(BoxLayout.y());
        c.setScrollableY(true);
       
        c.add(ltitre);
        c.add(paysr);
        c.add(b);
        c.add(nomr);
        c.add(nomrf);
        c.add(prenomr);
        c.add(prenomrf);
        c.add(ager);
        c.add(agerf);
        c.add(homme);
        c.add(femme);   
        
        c.add(btn);
        f.add(c);
        f.show();
       

        btn.addActionListener(new ActionListener() {

            @Override
            public void actionPerformed(ActionEvent evt) {

               
                        
                if(nomrf.getText().length()==0||prenomrf.getText().length()==0||agerf.getText().length()==0 )
                    
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
                
                else {

                    InfiniteProgress ip = new InfiniteProgress();
                    Dialog dlg = ip.showInifiniteBlocking();
                    Refservices ser = new Refservices();
                    Refugies r = new Refugies();
                    
                    
                    r.setId_ref((int) data.get("id"));
                    r.setPays_ref(b.getTextLine1());
                    r.setNom_ref(nomrf.getText());
                    r.setPrenom_ref(prenomrf.getText());
                    r.setAge_ref(Integer.parseInt(agerf.getText()));
                    r.setGender_ref(radioButtonLabel);
                    System.out.println(r);
                    ser.UpdateRef(r);
                    AffichRef d;
                    getF().show();
                    ToastBar.Status status = ToastBar.getInstance().createStatus();
                    status.setMessage("coordonnées modifiées");
                    status.showDelayed(50);
                    status.setExpires(3000);
                }
            }
        });
        
            f.getToolbar().addCommandToLeftBar("Back", null, new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
        
                    AffichRef df = new AffichRef(theme);
                    Refservices sf = new Refservices();
                    for (Refugies re : sf.ShowRef()) {
                    SpanLabel paysr = new SpanLabel("Pays :" + re.getPays_ref());
                    SpanLabel nomr = new SpanLabel("Nom:" + re.getNom_ref());
                    SpanLabel prenomr = new SpanLabel("Prenom:" + re.getPrenom_ref());
                    SpanLabel ager = new SpanLabel("Age :" + re.getAge_ref());
                    SpanLabel genderr = new SpanLabel("Gender:" + re.getGender_ref());
                    df.getF().show();      
                    }
            }});

    }

    
    
    public Form getF() {
        return f;
    }

    public void setF(Form f) {
        this.f = f;
    }
    
}
