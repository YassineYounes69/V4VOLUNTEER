/*
 * Copyright (c) 2016, Codename One
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated 
 * documentation files (the "Software"), to deal in the Software without restriction, including without limitation 
 * the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, 
 * and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions 
 * of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, 
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A 
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT 
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF 
 * CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE 
 * OR THE USE OR OTHER DEALINGS IN THE SOFTWARE. 
 */
package Gui;

import com.codename1.capture.Capture;
import com.codename1.components.ImageViewer;
import com.codename1.components.ScaleImageLabel;
import com.codename1.components.SpanLabel;
import com.codename1.components.ToastBar;
import com.codename1.ui.Button;
import com.codename1.ui.ButtonGroup;
import com.codename1.ui.Command;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Graphics;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.RadioButton;
import com.codename1.ui.Tabs;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;
import com.mycompany.myapp.entities.Demande;
import static com.mycompany.myapp.entities.SmsSender.ACCOUNT_SID;
import static com.mycompany.myapp.entities.SmsSender.AUTH_TOKEN;
import com.mycompany.myapp.services.ServiceDemande;
import com.twilio.Twilio;
import com.twilio.rest.api.v2010.account.Message;
import com.twilio.type.PhoneNumber;
import java.io.IOException;
import java.util.List;

/**
 * The newsfeed form
 *
 * @author Shai Almog
 */
public class NewsfeedForm extends BaseForm {

    Form current;
    /*Garder traçe de la Form en cours pour la passer en paramètres 
    aux interfaces suivantes pour pouvoir y revenir plus tard en utilisant
    la méthode showBack*/
    List<Demande> demandes = ServiceDemande.getInstance().getAllDemandes();
    Form f;
    private Resources theme;
    Label Lab = new Label();
    Button Screenshot = new Button("Screenshot");

    public NewsfeedForm(Resources res) {
        super("V4VOLUNTEER", BoxLayout.y());
        Toolbar tb = new Toolbar(true);
        setToolbar(tb);
        getTitleArea().setUIID("Container");
        setTitle("Demandes de don");
        getContentPane().setScrollVisible(true);

        super.addSideMenu(res);
//        tb.addSearchCommand(e -> {});

        Tabs swipe = new Tabs();

        Label spacer1 = new Label();
        Label spacer2 = new Label();
        addTab(swipe, res.getImage("partyy2.png"), spacer1, "5 donations", "", "Pour certains, donner est un art qu’on exerce sans retenue.");
        addTab(swipe, res.getImage("Vieille.jpg"), spacer2, "", "", "Ce que vous donnez à une autre personne, vous le donnez à l’humanité dans son ensemble.");

        swipe.setUIID("Container");
        swipe.getContentPane().setUIID("Container");
//        swipe.hideTabs();

        ButtonGroup bg = new ButtonGroup();
        int size = Display.getInstance().convertToPixels(1);
        Image unselectedWalkthru = Image.createImage(size, size, 0);
        Graphics g = unselectedWalkthru.getGraphics();
        g.setColor(0xffffff);
        g.setAlpha(100);
        g.setAntiAliased(true);
        g.fillArc(0, 0, size, size, 0, 360);
        Image selectedWalkthru = Image.createImage(size, size, 0);
        g = selectedWalkthru.getGraphics();
        g.setColor(0xffffff);
        g.setAntiAliased(true);
        g.fillArc(0, 0, size, size, 0, 360);
        RadioButton[] rbs = new RadioButton[swipe.getTabCount()];
        FlowLayout flow = new FlowLayout(CENTER);
        flow.setValign(BOTTOM);
        Container radioContainer = new Container(flow);
        for (int iter = 0; iter < rbs.length; iter++) {
            rbs[iter] = RadioButton.createToggle(unselectedWalkthru, bg);
            rbs[iter].setPressedIcon(selectedWalkthru);
            rbs[iter].setUIID("Label");
            radioContainer.add(rbs[iter]);
        }

        rbs[0].setSelected(true);
        swipe.addSelectionListener((i, ii) -> {
            if (!rbs[ii].isSelected()) {
                rbs[ii].setSelected(true);
            }
        });

        Component.setSameSize(radioContainer, spacer1, spacer2);
        add(LayeredLayout.encloseIn(swipe, radioContainer));

//        ButtonGroup barGroup = new ButtonGroup();
//        RadioButton all = RadioButton.createToggle("All", barGroup);
//        all.setUIID("SelectBar");
//        RadioButton featured = RadioButton.createToggle("Featured", barGroup);
//        featured.setUIID("SelectBar");
//        RadioButton popular = RadioButton.createToggle("Popular", barGroup);
//        popular.setUIID("SelectBar");
//        RadioButton myFavorite = RadioButton.createToggle("My Favorites", barGroup);
//        myFavorite.setUIID("SelectBar");
//        Label arrow = new Label(res.getImage("news-tab-down-arrow.png"), "Container");
//        
//        add(LayeredLayout.encloseIn(
//                GridLayout.encloseIn(4, all, featured, popular, myFavorite),
//                FlowLayout.encloseBottom(arrow)
//        ));
//        
//        all.setSelected(true);
//        arrow.setVisible(false);
//        addShowListener(e -> {
//            arrow.setVisible(true);
//            updateArrowPosition(all, arrow);
//        });
//        bindButtonSelection(all, arrow);
//        bindButtonSelection(featured, arrow);
//        bindButtonSelection(popular, arrow);
//        bindButtonSelection(myFavorite, arrow);
//        
//        // special case for rotation
//        addOrientationListener(e -> {
//            updateArrowPosition(barGroup.getRadioButton(barGroup.getSelectedIndex()), arrow);
//        });
//        
//        addButton(res.getImage("news-item-1.jpg"), "Morbi per tincidunt tellus sit of amet eros laoreet.", false, 26, 32);
//        addButton(res.getImage("news-item-2.jpg"), "Fusce ornare cursus masspretium tortor integer placera.", true, 15, 21);
//        addButton(res.getImage("news-item-3.jpg"), "Maecenas eu risus blanscelerisque massa non amcorpe.", false, 36, 15);
//        addButton(res.getImage("news-item-4.jpg"), "Pellentesque non lorem diam. Proin at ex sollicia.", false, 11, 9);
        add(Lab);
        add(Screenshot);

//    for (Demande c : demandes) {
//            addItem(c);
//        }
//    
        //        add(new Label("Choose an option"));
//        Button btnAddTask = new Button("Add Task");
//        Button btnListTasks = new Button("List Tasks");
//        btnListTasks.addActionListener(e -> new ListDemandesForm(current).show());
//        btnListTasks.addActionListener(e -> current.show());
//        btnAddTask.addActionListener(e -> new AddDemandeForm(current).show());
        tb.addCommandToRightBar("Ajouter", null, (ActionListener) (ActionEvent evt) -> {
            Form f2 = new Form("Ajout", BoxLayout.y());
            f2.setTitle("Ajouter une nouvelle demande");
            f2.setLayout(BoxLayout.y());

            f2.getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> super.showBack());

            TextField tfTitre = new TextField("", "Titre demande");
            TextField tfDescription = new TextField("", "Description demande");
            TextField tfType = new TextField("", "Type demande");
//        TextField tfPhoto = new TextField("", "Photo demande");

            Button btnValider = new Button("Ajouter");
            f2.addAll(tfDescription, tfTitre, tfType, btnValider);
//            f2.getAllStyles().setBgImage(res.getImage("partyy2.png"));
            f2.show();

            btnValider.addActionListener((ActionListener) (ActionEvent evt1) -> {
                if ((tfTitre.getText().length() == 0) || (tfDescription.getText().length() == 0) || (tfType.getText().length() == 0)) {
                    Dialog.show("Alert", "Please fill all the fields", new Command("OK"));
                } else {
                    try {
                        //Demande t = new Demande(Integer.parseInt(tfStatus.getText()), tfName.getText());
                        Demande t = new Demande();
//                        t.setId(rst.getInt("id"));
                        t.setTypeDemande(tfType.getText());
                        t.setEtatDemande(0);
                        t.setDescriptionDemande(tfDescription.getText());
                        t.setTitreDemande(tfTitre.getText());
                        t.setPhotoDemande("file:/C:/wamp64/www/Donation/src/images/ph_24366_87878.jpg");

                        demandes.add(t);
//                        super.removeAll();
//                        for (Demande c1 : demandes) {
//                            addItem(c1);
//                        }
                        addItem(t);
                        super.showBack();

                        if (ServiceDemande.getInstance().addDemande(t)) {
                            
                            Twilio.init(ACCOUNT_SID, AUTH_TOKEN);

                    Message message = Message
                            .creator(new PhoneNumber("+21656601705"), // to
                                    new PhoneNumber("+18328505634"), // from
                                    "un nouveau don !")
                            .create();

                    System.out.println(message.getSid());
                            
                            
                            
                            Dialog.show("Success", "Demande ajoutee", new Command("OK"));
                        } else {
                            Dialog.show("ERROR", "Server error", new Command("OK"));
                        }
                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "Status must be a number", new Command("OK"));
                    }

                }

            });
        });

        for (Demande c : demandes) {
            addItem(c);
        }

        super.show();

        Screenshot.addActionListener(e -> {
            String i = Capture.capturePhoto(Display.getInstance().getDisplayWidth(), -1);
            if (i != null) {
                try {
                    Image img = Image.createImage(i);
                    Lab.setIcon(img);
                    super.revalidate();
                } catch (Exception errr) {
                    errr.printStackTrace();
                }
            }
        });

    }

    private void updateArrowPosition(Button b, Label arrow) {
        arrow.getUnselectedStyle().setMargin(LEFT, b.getX() + b.getWidth() / 2 - arrow.getWidth() / 2);
        arrow.getParent().repaint();

    }

    private void addTab(Tabs swipe, Image img, Label spacer, String likesStr, String commentsStr, String text) {
        int size = Math.min(Display.getInstance().getDisplayWidth(), Display.getInstance().getDisplayHeight());
        if (img.getHeight() < size) {
            img = img.scaledHeight(size);
        }
        Label likes = new Label(likesStr);
        Style heartStyle = new Style(likes.getUnselectedStyle());
        heartStyle.setFgColor(0xff2d55);
        FontImage heartImage = FontImage.createMaterial(FontImage.MATERIAL_FAVORITE, heartStyle);
        likes.setIcon(heartImage);
        likes.setTextPosition(RIGHT);

        Label comments = new Label(commentsStr);
        FontImage.setMaterialIcon(comments, FontImage.MATERIAL_CHAT);
        if (img.getHeight() > Display.getInstance().getDisplayHeight() / 2) {
            img = img.scaledHeight(Display.getInstance().getDisplayHeight() / 2);
        }
        ScaleImageLabel image = new ScaleImageLabel(img);
        image.setUIID("Container");
        image.setBackgroundType(Style.BACKGROUND_IMAGE_SCALED_FILL);
        Label overlay = new Label(" ", "ImageOverlay");

        Container page1
                = LayeredLayout.encloseIn(
                        image,
                        overlay,
                        BorderLayout.south(
                                BoxLayout.encloseY(
                                        new SpanLabel(text, "LargeWhiteText"),
                                        FlowLayout.encloseIn(likes, comments),
                                        spacer
                                )
                        )
                );

        swipe.addTab("", page1);
    }

    private void addButton(Image img, String title, boolean liked, int likeCount, int commentCount) {
        int height = Display.getInstance().convertToPixels(11.5f);
        int width = Display.getInstance().convertToPixels(14f);
        Button image = new Button(img.fill(width, height));
        image.setUIID("Label");
        Container cnt = BorderLayout.west(image);
        cnt.setLeadComponent(image);
        TextArea ta = new TextArea(title);
        ta.setUIID("NewsTopLine");
        ta.setEditable(false);

        Label likes = new Label(likeCount + " Likes  ", "NewsBottomLine");
        likes.setTextPosition(RIGHT);
        if (!liked) {
            FontImage.setMaterialIcon(likes, FontImage.MATERIAL_FAVORITE);
        } else {
            Style s = new Style(likes.getUnselectedStyle());
            s.setFgColor(0xff2d55);
            FontImage heartImage = FontImage.createMaterial(FontImage.MATERIAL_FAVORITE, s);
            likes.setIcon(heartImage);
        }
        Label comments = new Label(commentCount + " Comments", "NewsBottomLine");
        FontImage.setMaterialIcon(likes, FontImage.MATERIAL_CHAT);

        cnt.add(BorderLayout.CENTER,
                BoxLayout.encloseY(
                        ta,
                        BoxLayout.encloseX(likes, comments)
                ));
        add(cnt);
        image.addActionListener(e -> ToastBar.showMessage(title, FontImage.MATERIAL_INFO));
    }

    private void bindButtonSelection(Button b, Label arrow) {
        b.addActionListener(e -> {
            if (b.isSelected()) {
                updateArrowPosition(b, arrow);
            }
        });
    }

    public void addItem(Demande demande) {

//            for (int i = 0; i < demandes.size(); i++) {
//            Demande actuel = demandes.get(i);
        Demande actuel = demande;

        ImageViewer img = null;
        Container C1 = new Container(new BoxLayout(BoxLayout.Y_AXIS));

        try {
            img = new ImageViewer(Image.createImage(actuel.getPhotoDemande()));
        } catch (IOException ex) {

        }

        Container C2 = new Container(new BoxLayout(BoxLayout.Y_AXIS));
        Label titre = new Label(actuel.getTitreDemande());
        Label description = new Label(actuel.getDescriptionDemande());

        titre.addPointerPressedListener((ActionListener) (ActionEvent evt) -> {
            Dialog.show("Demande", "Titre : " + titre.getText() + "\n Type : " + actuel.getTypeDemande() + " \n Description : " + description.getText(), "Ok", null);
        });

        C2.add(titre);
        C2.add(description);
        C1.add(img);
        C1.add(C2);
        C1.setLeadComponent(titre);
        super.add(C1);
        super.refreshTheme();

    }

}
