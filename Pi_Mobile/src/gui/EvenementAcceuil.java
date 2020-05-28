/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gui;

import com.codename1.components.ImageViewer;
import com.codename1.components.InfiniteProgress;
import com.codename1.components.ScaleImageLabel;
import com.codename1.components.ShareButton;
import com.codename1.components.SpanLabel;
import com.codename1.components.ToastBar;
import com.codename1.messaging.Message;
import com.codename1.notifications.LocalNotification;
import com.codename1.ui.Button;
import com.codename1.ui.ButtonGroup;
import com.codename1.ui.Component;
import static com.codename1.ui.Component.LEFT;
import static com.codename1.ui.Component.RIGHT;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextArea;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;
import entities.Evenement;
import jdk.nashorn.internal.objects.NativeString;
import services.ServiceEvenement;
import com.codename1.ui.Graphics;
import com.codename1.ui.Image;
import com.codename1.ui.RadioButton;
import com.codename1.ui.Toolbar;
import com.codename1.ui.URLImage;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.Border;
import com.codename1.ui.plaf.UIManager;
import entities.Jaime;
import entities.Reservation;
import entities.User;
import java.util.ArrayList;
import services.ServiceJaime;
import services.ServiceReservation;

/**
 *
 * @author EliteBook
 */
public class EvenementAcceuil extends Form {

    public EvenementAcceuil(Resources res) {

        super("Nos Evenements ", BoxLayout.y());
        System.out.println("form d'affichage des evenement begin \n");
        //Dialog ip = new InfiniteProgress().showInifiniteBlocking(); 
        removeAll();
        header(res);
        show();
        affichageevenement(res);
        // ip.dispose();

    }

    private void header(Resources res) {
        Toolbar tb = new Toolbar(true);
        setToolbar(tb);
        getTitleArea().setUIID("Container");
        setTitle("Acceuil Evenement");

        getContentPane().setScrollVisible(false);

        addSideMenu(res);
        tb.addSearchCommand(e -> {
        });

        addTab(res.getImage("soirée.png"));

        ButtonGroup barGroup = new ButtonGroup();
        RadioButton all = RadioButton.createToggle("Liste", barGroup);
        all.setUIID("SelectBar");
        RadioButton popular = RadioButton.createToggle("Populaires", barGroup);
        popular.setUIID("SelectBar");
        RadioButton myFavorite = RadioButton.createToggle("Mes reservations", barGroup);
        myFavorite.setUIID("SelectBar");
        Label arrow = new Label(res.getImage("news-tab-down-arrow.png"), "Container");

        add(LayeredLayout.encloseIn(
                GridLayout.encloseIn(3, all, popular, myFavorite),
                FlowLayout.encloseBottom(arrow)
        ));

        all.setSelected(true);
        arrow.setVisible(false);

        all.addActionListener(ev -> {
            removeAll();
            header(res);
            arrow.setVisible(true);
            updateArrowPosition(all, arrow);
            Dialog ip = new InfiniteProgress().showInifiniteBlocking();
            affichageevenement(res);
            ip.dispose();

        });

        popular.addActionListener(ev -> {
            removeAll();
            header(res);
            arrow.setVisible(true);
            updateArrowPosition(popular, arrow);
            Dialog ip = new InfiniteProgress().showInifiniteBlocking();
            affichagepopulair(res);
            ip.dispose();

        });
        myFavorite.addActionListener(ev -> {
            removeAll();
            header(res);
            arrow.setVisible(true);
            updateArrowPosition(myFavorite, arrow);
            Dialog ip = new InfiniteProgress().showInifiniteBlocking();
            affichageFavoris(res);
            ip.dispose();

        });

        addShowListener(e -> {
            arrow.setVisible(true);
            updateArrowPosition(all, arrow);
        });

        // special case for rotation
        addOrientationListener(e -> {
            updateArrowPosition(barGroup.getRadioButton(barGroup.getSelectedIndex()), arrow);
        });

    }

    private void affichageevenement(Resources res) {
        ServiceEvenement es = new ServiceEvenement();
        Evenement E = new Evenement();

        System.out.println("begin l'affichge des evnement");
        for (int i = 0; i < es.AfficheEvenement().size(); i++) {
            System.out.println("Affichage de l'evenement : " + es.AfficheEvenement().get(i).getReference());
            addButton(res, es.AfficheEvenement().get(i));
            show();

        }
        System.out.println("end d'affichage");
    }

    private void affichagepopulair(Resources res) {
        ServiceEvenement es = new ServiceEvenement();
        Evenement E = new Evenement();
        int max = 0;
        System.out.println("begin l'affichage des evenement les plus populaire");

        for (int i = 0; i < es.AfficheEvenement().size(); i++) {
            if (max < es.AfficheEvenement().get(i).getNbParticipant()) {
//                System.out.println("Affichage de l'evenement : " + es.AfficheEvenement().get(i).getId_membre());
                max = i;

            }

        }
        Evenement e = new Evenement();
        e = es.AfficheEvenement().get(max);
        addButtonpopulaire(res, e);
        show();
        System.out.println("end d'affichage ");
    }

    private void affichageFavoris(Resources res) {
        ServiceEvenement es = new ServiceEvenement();
        ServiceReservation sr = new ServiceReservation();
        for (int j = 0; j < sr.getAllReservayion().size(); j++) {

            Evenement E = new Evenement();
            User u = new User(1, "mohamed", "rejeb", "mohamed.rejeb@esprit.tn", "bizerte");
            System.out.println("begin l'affichage des evenement des favoris");

            for (int i = 0; i < es.AfficheEvenement().size(); i++) {
                if ((es.AfficheEvenement().get(i).getReference() == sr.getAllReservayion().get(j).getId_evenement().getReference()) && (u.getId() == sr.getAllReservayion().get(j).getId_user().getId())) {
//                System.out.println("Affichage de l'evenement : " + es.AfficheEvenement().get(i).getId_membre());
                    addButtonFavoris(res, es.AfficheEvenement().get(i));
                    show();
                }

            }
            System.out.println("end d'affichage ");
        }
    }

    private void updateArrowPosition(Button b, Label arrow) {
        arrow.getUnselectedStyle().setMargin(LEFT, b.getX() + b.getWidth() / 2 - arrow.getWidth() / 2);
        arrow.getParent().repaint();

    }

    private void addTab(Image img) {
        int size = Math.min(Display.getInstance().getDisplayWidth(), Display.getInstance().getDisplayHeight());
        if (img.getHeight() < size) {
            img = img.scaledHeight(size);
        }
        if (img.getHeight() > Display.getInstance().getDisplayHeight() / 2) {
            img = img.scaledHeight(Display.getInstance().getDisplayHeight() / 2);
        }
        ScaleImageLabel image = new ScaleImageLabel(img);
        image.setUIID("Container");
        image.setBackgroundType(Style.BACKGROUND_IMAGE_SCALED_FILL);
        Label overlay = new Label(" ", "ImageOverlay");

        Container page1
                = LayeredLayout.encloseIn(
                        image
                );
        add(page1);

    }

    private void addButton(Resources res, Evenement e) {

        ServiceEvenement es = new ServiceEvenement();

        int height = Display.getInstance().convertToPixels(20f);
        int width = Display.getInstance().convertToPixels(30f);

        Button image = new Button(photo(width, height, e.getImage()));
        image.setUIID("Label");
        Container cnt = BorderLayout.west(image);

        //cnt.setLeadComponent(image);
        TextArea ttitre = new TextArea(e.getNom());
        ttitre.setUIID("NewsTopLine");
        ttitre.setEditable(false);

        Label llieu = new Label(String.valueOf(e.getLieu()));
        llieu.setUIID("NewsTopLine");
        Style lieutStyle = new Style(llieu.getUnselectedStyle());
        lieutStyle.setFgColor(0x4286f4);
        FontImage lieuImage = FontImage.createMaterial(FontImage.MATERIAL_ROOM, lieutStyle);
        llieu.setIcon(lieuImage);
        llieu.setTextPosition(RIGHT);

        Label ldate = new Label(AffichageDate(String.valueOf(e.getDate())));
        ldate.setUIID("NewsTopLine");
        Style datetStyle = new Style(ldate.getUnselectedStyle());
        datetStyle.setFgColor(0x4286f4);
        FontImage dateImage = FontImage.createMaterial(FontImage.MATERIAL_DATE_RANGE, datetStyle);
        ldate.setIcon(dateImage);
        ldate.setTextPosition(RIGHT);

        TextArea tdescription = new TextArea(e.getDescription());
        tdescription.setUIID("NewsTopLine");
        tdescription.setEditable(false);

        Label participants = new Label(String.valueOf(e.getNbParticipant()) + " Participants  ", "NewsBottomLine");
        participants.setUIID("NewsTopLine");
        Label prix = new Label(String.valueOf("Prix:" + " " + e.getPrix()) + " DT  ", "NewsBottomLine");
        FontImage prixImage = FontImage.createMaterial(FontImage.MATERIAL_VOLUNTEER_ACTIVISM, datetStyle);
        prix.setIcon(prixImage);
        prix.setTextPosition(RIGHT);

        Label capacite = new Label(String.valueOf("Capacité:" + " " + e.getCapacite()) + "", "NewsBottomLine");
        FontImage capaciteImage = FontImage.createMaterial(FontImage.MATERIAL_THEATERS, datetStyle);
        capacite.setIcon(capaciteImage);
        capacite.setTextPosition(RIGHT);
        participants.setUIID("NewsTopLine");

        ServiceJaime aes = new ServiceJaime();

        Label like = new Label(aes.mentions((int) e.getReference()) + " likes ");
        Style heartStyle = new Style(like.getUnselectedStyle());
        heartStyle.setFgColor(0xff2d55);
        FontImage heartImage = FontImage.createMaterial(FontImage.MATERIAL_FAVORITE, heartStyle);
        like.setIcon(heartImage);
        like.setTextPosition(RIGHT);

        Label lparticiper = new Label("Participer");
        lparticiper.setUIID("NewsTopLine");
        Style participerStyle = new Style(lparticiper.getUnselectedStyle());

        lparticiper.setTextPosition(RIGHT);
        User u = new User(1, "mohamed", "rejeb", "mohamed.rejeb@esprit.tn", "bizerte");
        Reservation p = new Reservation(u, e);
        ServiceReservation ps = new ServiceReservation();

        if (ps.findReservation(p)) {
            lparticiper.setText("Abondonner");
            participerStyle.setFgColor(0xf21f1f);
            FontImage participerImage = FontImage.createMaterial(FontImage.MATERIAL_BOOKMARK, participerStyle);
            lparticiper.setIcon(participerImage);
        } else {
            lparticiper.setText("Participer");
            participerStyle.setFgColor(0xf21f1f);
            FontImage participerImage = FontImage.createMaterial(FontImage.MATERIAL_BOOKMARK_BORDER, participerStyle);
            lparticiper.setIcon(participerImage);
        }

        lparticiper.addPointerPressedListener(ev -> {
            if (lparticiper.getText().toUpperCase().equalsIgnoreCase("PARTICIPER")) {
                lparticiper.setText("Abondonner");
                participants.setText(String.valueOf((e.getNbParticipant()+1)-1) + " Participants  ");

                participerStyle.setFgColor(0xf21f1f);
                FontImage participerImage = FontImage.createMaterial(FontImage.MATERIAL_BOOKMARK, participerStyle);
                lparticiper.setIcon(participerImage);
                ps.participer(p);

                System.out.println("Participé");

                String mailAdmin = "mrejeb114@gmail.com";
                String Body = "Bonjour L'équipe V4VOLUNTEER." + "," + "\n" + "Je confirme ma réservation a l'evénement : " + " " + e.getNom() + " " + " qui se déroulera le " + e.getDate() + " à " + e.getLieu() + "." + "\n" + "Amicalement.";
                Message m = new Message(Body);
                Display.getInstance().sendMessage(new String[]{mailAdmin}, "V4VOLUNTEER APP", m);

//                 ServiceReservation sr = new ServiceReservation() ;
            } else {
                lparticiper.setText("Participer");
                participerStyle.setFgColor(0xf21f1f);
                FontImage participerImage = FontImage.createMaterial(FontImage.MATERIAL_BOOKMARK_BORDER, participerStyle);
                lparticiper.setIcon(participerImage);
                ps.abandonner(p);
               participants.setText(String.valueOf(e.getNbParticipant()-1) + " Participants  ");

                System.out.println("Abondonné");

            }

        });

        Button laimer = new Button();
        laimer.setUIID("NewsTopLine");
        Style aimerStyle = new Style(laimer.getUnselectedStyle());

        laimer.setTextPosition(RIGHT);

        Jaime ae = new Jaime(u.getId(), e.getReference());

        if (aes.findaimer(ae)) {
            laimer.setText("j'aime pas");
            aimerStyle.setFgColor(0xdd1616);
            FontImage aimerImage = FontImage.createMaterial(FontImage.MATERIAL_THUMB_DOWN, aimerStyle);
            laimer.setIcon(aimerImage);
        } else {
            laimer.setText("j'aime");
            aimerStyle.setFgColor(0x4286f4);
            FontImage aimerImage = FontImage.createMaterial(FontImage.MATERIAL_THUMB_UP, aimerStyle);
            laimer.setIcon(aimerImage);
        }

        laimer.addActionListener(ev -> {
            if (laimer.getText().toUpperCase().equalsIgnoreCase("J'AIME")) {

                laimer.setText("j'aime pas");

                aimerStyle.setFgColor(0xdd1616);
                FontImage aimerImage = FontImage.createMaterial(FontImage.MATERIAL_THUMB_DOWN, aimerStyle);
                laimer.setIcon(aimerImage);
                aes.aimer(ae);
                like.setText((aes.mentions(e.getReference())) + " likes ");
                System.out.println("AIMER");
                LocalNotification l = new LocalNotification();
                l.setAlertBody("jdjjdjjd");

            } else {
                laimer.setText("j'aime");

                aimerStyle.setFgColor(0x4286f4);
                FontImage aimerImage = FontImage.createMaterial(FontImage.MATERIAL_THUMB_UP, aimerStyle);
                laimer.setIcon(aimerImage);
                aes.aimerpas(ae);
                like.setText((aes.mentions(e.getReference())) + " likes ");
                System.out.println("aimer pas");

            }

        });

        ShareButton sb = new ShareButton();
        sb.setText("Partager sur facebook");
//       sb.setTextToShare("hello mather fucker");

        cnt.add(BorderLayout.NORTH,
                ttitre
        );
        cnt.add(BorderLayout.CENTER,
                BoxLayout.encloseY(
                        llieu, ldate, tdescription, capacite, prix, sb
                ));

        Container cn = BorderLayout.west(BoxLayout.encloseX(like, participants));
        add(cnt);
        add(createLineSeparator(0x4286f4));
        add(createLineSeparator(0x4286f4));

        if (e.getId_membre().getId() != u.getId()) {
            cn.add(BorderLayout.EAST,
                    BoxLayout.encloseX(
                            laimer, lparticiper
                    ));
            add(cn);
        }
        add(createLineSeparator(0x4286f4));
        add(createLineSeparator(0x4286f4));
//           add(createLineSeparator(0x4286f4));
//             add(createLineSeparator(0x4286f4));
//               add(createLineSeparator(0x4286f4));

        image.addActionListener(ev -> ToastBar.showMessage(e.getNom(), FontImage.MATERIAL_INFO));
    }

    private void addButtonpopulaire(Resources res, Evenement e) {
        ServiceEvenement es = new ServiceEvenement();

        int height = Display.getInstance().convertToPixels(14f);
        int width = Display.getInstance().convertToPixels(20f);

        Button image = new Button(photo(height, width, e.getImage()));
        image.setUIID("Label");
        Container cnt = BorderLayout.west(image);

        //cnt.setLeadComponent(image);
        TextArea ttitre = new TextArea(e.getNom());
        ttitre.setUIID("NewsTopLine");
        ttitre.setEditable(false);

        TextArea tlieu = new TextArea(e.getLieu());
        tlieu.setUIID("NewsTopLine");
        tlieu.setEditable(false);

        Label llieu = new Label(String.valueOf(e.getLieu()));
        llieu.setUIID("NewsTopLine");
        Style lieutStyle = new Style(llieu.getUnselectedStyle());
        lieutStyle.setFgColor(0x4286f4);
        FontImage lieuImage = FontImage.createMaterial(FontImage.MATERIAL_ROOM, lieutStyle);
        llieu.setIcon(lieuImage);
        llieu.setTextPosition(RIGHT);

        Label ldate = new Label(AffichageDate(String.valueOf(e.getDate())));
        ldate.setUIID("NewsTopLine");
        Style datetStyle = new Style(ldate.getUnselectedStyle());
        datetStyle.setFgColor(0x4286f4);
        FontImage dateImage = FontImage.createMaterial(FontImage.MATERIAL_DATE_RANGE, datetStyle);
        ldate.setIcon(dateImage);
        ldate.setTextPosition(RIGHT);

        TextArea tdescription = new TextArea(e.getDescription());
        tdescription.setUIID("NewsTopLine");
        tdescription.setEditable(false);

        Label prix = new Label(String.valueOf("Prix:" + " " + e.getPrix()) + " DT  ", "NewsBottomLine");
        FontImage prixImage = FontImage.createMaterial(FontImage.MATERIAL_VOLUNTEER_ACTIVISM, datetStyle);
        prix.setIcon(prixImage);
        prix.setTextPosition(RIGHT);

        Label capacite = new Label(String.valueOf("Capacité:" + " " + e.getCapacite()) + "", "NewsBottomLine");
        FontImage capaciteImage = FontImage.createMaterial(FontImage.MATERIAL_THEATERS, datetStyle);
        capacite.setIcon(capaciteImage);
        capacite.setTextPosition(RIGHT);

        Label participants = new Label(String.valueOf(e.getNbParticipant()) + " Participants  ", "NewsBottomLine");
        participants.setUIID("NewsTopLine");
        ServiceJaime aes = new ServiceJaime();

        Label like = new Label(aes.mentions(e.getReference()) + " likes ");

        Style heartStyle = new Style(like.getUnselectedStyle());
        heartStyle.setFgColor(0xff2d55);
        FontImage heartImage = FontImage.createMaterial(FontImage.MATERIAL_FAVORITE, heartStyle);
        like.setIcon(heartImage);
        like.setTextPosition(RIGHT);

        Label lparticiper = new Label("Participer");
        lparticiper.setUIID("NewsTopLine");
        Style participerStyle = new Style(lparticiper.getUnselectedStyle());

        lparticiper.setTextPosition(RIGHT);
        User u = new User(1, "mohamed", "rejeb", "mohamed.rejeb@esprit.tn", "bizerte");

        Reservation p = new Reservation(u, e);
        ServiceReservation ps = new ServiceReservation();

        if (ps.findReservation(p)) {
            lparticiper.setText("Abondonner");
            participerStyle.setFgColor(0xf21f1f);
            FontImage participerImage = FontImage.createMaterial(FontImage.MATERIAL_BOOKMARK, participerStyle);
            lparticiper.setIcon(participerImage);
        } else {
            lparticiper.setText("Participer");
            participerStyle.setFgColor(0xf21f1f);
            FontImage participerImage = FontImage.createMaterial(FontImage.MATERIAL_BOOKMARK_BORDER, participerStyle);
            lparticiper.setIcon(participerImage);
        }

        lparticiper.addPointerPressedListener(ev -> {
            if (lparticiper.getText().toUpperCase().equalsIgnoreCase("PARTICIPER")) {
                lparticiper.setText("Abondonner");
                participerStyle.setFgColor(0xf21f1f);
                FontImage participerImage = FontImage.createMaterial(FontImage.MATERIAL_BOOKMARK, participerStyle);
                lparticiper.setIcon(participerImage);
                ps.participer(p);
                participants.setText(String.valueOf(e.getNbParticipant()) + " Participants  ");
                 String mailAdmin = "mrejeb114@gmail.com";
                String Body = "Bonjour L'équipe V4VOLUNTEER." + "," + "\n" + "Je confirme ma réservation a l'evénement : " + " " + e.getNom() + " " + " qui se déroulera le " + e.getDate() + " à " + e.getLieu() + "." + "\n" + "Amicalement.";
                Message m = new Message(Body);
                Display.getInstance().sendMessage(new String[]{mailAdmin}, "V4VOLUNTEER APP", m);
                System.out.println("Participer");

//                System.out.println(p.toString());
                LocalNotification l = new LocalNotification();
                l.setAlertTitle("venement ajouté");
            } else {
                lparticiper.setText("Participer");
                participerStyle.setFgColor(0xf21f1f);
                FontImage participerImage = FontImage.createMaterial(FontImage.MATERIAL_BOOKMARK_BORDER, participerStyle);
                lparticiper.setIcon(participerImage);
                ps.abandonner(p);
                participants.setText(String.valueOf(e.getNbParticipant()) + " Participants  ");

                System.out.println("Abondonner");

            }

            removeAll();
            header(res);
            affichagepopulair(res);
        });

        Label laimer = new Label();
        laimer.setUIID("NewsTopLine");
        Style aimerStyle = new Style(laimer.getUnselectedStyle());

        laimer.setTextPosition(RIGHT);

        Jaime ae = new Jaime(u.getId(), e.getReference());

        if (aes.findaimer(ae)) {
            laimer.setText("j'aime pas");
            aimerStyle.setFgColor(0xdd1616);
            FontImage aimerImage = FontImage.createMaterial(FontImage.MATERIAL_THUMB_DOWN, aimerStyle);
            laimer.setIcon(aimerImage);
        } else {
            laimer.setText("j'aime");
            aimerStyle.setFgColor(0x4286f4);
            FontImage aimerImage = FontImage.createMaterial(FontImage.MATERIAL_THUMB_UP, aimerStyle);
            laimer.setIcon(aimerImage);
        }

        laimer.addPointerPressedListener(ev -> {
            if (laimer.getText().toUpperCase().equalsIgnoreCase("J'AIME")) {
                laimer.setText("j'aime pas");
                aimerStyle.setFgColor(0xdd1616);
                FontImage aimerImage = FontImage.createMaterial(FontImage.MATERIAL_THUMB_DOWN, aimerStyle);
                laimer.setIcon(aimerImage);
                aes.aimer(ae);
                like.setText((aes.mentions(e.getReference())) + " likes ");

                System.out.println("AIMER");

            } else {
                laimer.setText("j'aime");
                aimerStyle.setFgColor(0x4286f4);
                FontImage aimerImage = FontImage.createMaterial(FontImage.MATERIAL_THUMB_UP, aimerStyle);
                laimer.setIcon(aimerImage);
                aes.aimerpas(ae);
                like.setText((aes.mentions(e.getReference())) + " likes ");

                System.out.println("aimer pas");

            }

        });

        ShareButton sb = new ShareButton();
        sb.setText("Partager sur facebook");

        cnt.add(BorderLayout.NORTH,
                ttitre
        );
        cnt.add(BorderLayout.CENTER,
                BoxLayout.encloseY(
                        llieu, ldate, tdescription, capacite, prix, sb
                ));
        Container cn = BorderLayout.west(BoxLayout.encloseX(like, participants));

        add(cnt);
        add(createLineSeparator(0x4286f4));
        add(createLineSeparator(0x4286f4));
        if (e.getId_membre().getId() != u.getId()) {
            cn.add(BorderLayout.EAST,
                    BoxLayout.encloseX(
                            laimer, lparticiper
                    ));
            add(createLineSeparator(0x4286f4));
            add(createLineSeparator(0x4286f4));
            add(cn);

        }
        add(createLineSeparator(0x4286f4));
        add(createLineSeparator(0x4286f4));
        add(createLineSeparator(0x4286f4));
        image.addActionListener(ev -> ToastBar.showMessage(e.getNom(), FontImage.MATERIAL_INFO));
    }

    private void addButtonFavoris(Resources res, Evenement e) {
        ServiceEvenement es = new ServiceEvenement();

        int height = Display.getInstance().convertToPixels(14f);
        int width = Display.getInstance().convertToPixels(20f);

        Button image = new Button();
        image.setUIID("Label");
        Container cnt = BorderLayout.west(image);

        //cnt.setLeadComponent(image);
        TextArea ttitre = new TextArea(e.getNom());
        ttitre.setUIID("NewsTopLine");
        ttitre.setEditable(false);

        TextArea tlieu = new TextArea(e.getLieu());
        tlieu.setUIID("NewsTopLine");
        tlieu.setEditable(false);

        Label llieu = new Label(String.valueOf(e.getLieu()));
        llieu.setUIID("NewsTopLine");
        Style lieutStyle = new Style(llieu.getUnselectedStyle());
        lieutStyle.setFgColor(0x4286f4);
        FontImage lieuImage = FontImage.createMaterial(FontImage.MATERIAL_ROOM, lieutStyle);
        llieu.setIcon(lieuImage);
        llieu.setTextPosition(RIGHT);

        Label ldate = new Label(AffichageDate(String.valueOf(e.getDate())));
        ldate.setUIID("NewsTopLine");
        Style datetStyle = new Style(ldate.getUnselectedStyle());
        datetStyle.setFgColor(0x4286f4);
        FontImage dateImage = FontImage.createMaterial(FontImage.MATERIAL_DATE_RANGE, datetStyle);
        ldate.setIcon(dateImage);
        ldate.setTextPosition(RIGHT);

        TextArea tdescription = new TextArea(e.getDescription());
        tdescription.setUIID("NewsTopLine");
        tdescription.setEditable(false);

        Label prix = new Label(String.valueOf("Prix:" + " " + e.getPrix()) + " DT  ", "NewsBottomLine");
        FontImage prixImage = FontImage.createMaterial(FontImage.MATERIAL_VOLUNTEER_ACTIVISM, datetStyle);
        prix.setIcon(prixImage);
        prix.setTextPosition(RIGHT);

        Label capacite = new Label(String.valueOf("Capacité:" + " " + e.getCapacite()) + "", "NewsBottomLine");
        FontImage capaciteImage = FontImage.createMaterial(FontImage.MATERIAL_THEATERS, datetStyle);
        capacite.setIcon(capaciteImage);
        capacite.setTextPosition(RIGHT);

        Label participants = new Label(String.valueOf(e.getNbParticipant()) + " Participants  ", "NewsBottomLine");
        participants.setUIID("NewsTopLine");
        ServiceJaime aes = new ServiceJaime();

        Label like = new Label(aes.mentions(e.getReference()) + " likes ");

        Style heartStyle = new Style(like.getUnselectedStyle());
        heartStyle.setFgColor(0xff2d55);
        FontImage heartImage = FontImage.createMaterial(FontImage.MATERIAL_FAVORITE, heartStyle);
        like.setIcon(heartImage);
        like.setTextPosition(RIGHT);

        Label lparticiper = new Label("Participer");
        lparticiper.setUIID("NewsTopLine");
        Style participerStyle = new Style(lparticiper.getUnselectedStyle());

        lparticiper.setTextPosition(RIGHT);
        User u = new User(1, "mohamed", "rejeb", "mohamed.rejeb@esprit.tn", "bizerte");

        Reservation p = new Reservation(u, e);
        ServiceReservation ps = new ServiceReservation();

        if (ps.findReservation(p)) {
            lparticiper.setText("Abondonner");
            participerStyle.setFgColor(0xf21f1f);
            FontImage participerImage = FontImage.createMaterial(FontImage.MATERIAL_BOOKMARK, participerStyle);
            lparticiper.setIcon(participerImage);
        } else {
            lparticiper.setText("Participer");
            participerStyle.setFgColor(0xf21f1f);
            FontImage participerImage = FontImage.createMaterial(FontImage.MATERIAL_BOOKMARK_BORDER, participerStyle);
            lparticiper.setIcon(participerImage);
        }

        lparticiper.addPointerPressedListener(ev -> {
            if (lparticiper.getText().toUpperCase().equalsIgnoreCase("PARTICIPER")) {
                lparticiper.setText("Abondonner");
                participerStyle.setFgColor(0xf21f1f);
                FontImage participerImage = FontImage.createMaterial(FontImage.MATERIAL_BOOKMARK, participerStyle);
                lparticiper.setIcon(participerImage);
                ps.participer(p);
                participants.setText(String.valueOf(e.getNbParticipant()) + " Participants  ");

                System.out.println("Participer");

                System.out.println(p.toString());
                LocalNotification l = new LocalNotification();
                l.setAlertTitle("venement ajouté");
            } else {
                lparticiper.setText("Participer");
                participerStyle.setFgColor(0xf21f1f);
                FontImage participerImage = FontImage.createMaterial(FontImage.MATERIAL_BOOKMARK_BORDER, participerStyle);
                lparticiper.setIcon(participerImage);
                ps.abandonner(p);
                participants.setText(String.valueOf(e.getNbParticipant()) + " Participants  ");

                System.out.println("Abondonner");

            }

            removeAll();
            header(res);
            affichageFavoris(res);
        });

        Label laimer = new Label();
        laimer.setUIID("NewsTopLine");
        Style aimerStyle = new Style(laimer.getUnselectedStyle());

        laimer.setTextPosition(RIGHT);

        Jaime ae = new Jaime(u.getId(), e.getReference());

        if (aes.findaimer(ae)) {
            laimer.setText("j'aime pas");
            aimerStyle.setFgColor(0xdd1616);
            FontImage aimerImage = FontImage.createMaterial(FontImage.MATERIAL_THUMB_DOWN, aimerStyle);
            laimer.setIcon(aimerImage);
        } else {
            laimer.setText("j'aime");
            aimerStyle.setFgColor(0x4286f4);
            FontImage aimerImage = FontImage.createMaterial(FontImage.MATERIAL_THUMB_UP, aimerStyle);
            laimer.setIcon(aimerImage);
        }

        laimer.addPointerPressedListener(ev -> {
            if (lparticiper.getText().toUpperCase().equalsIgnoreCase("J'AIME")) {
                laimer.setText("j'aime pas");
                aimerStyle.setFgColor(0xdd1616);
                FontImage aimerImage = FontImage.createMaterial(FontImage.MATERIAL_THUMB_DOWN, aimerStyle);
                laimer.setIcon(aimerImage);
                ps.participer(p);
                System.out.println("AIMER");

            } else {
                laimer.setText("j'aime");
                aimerStyle.setFgColor(0x4286f4);
                FontImage aimerImage = FontImage.createMaterial(FontImage.MATERIAL_THUMB_UP, aimerStyle);
                laimer.setIcon(aimerImage);
                ps.abandonner(p);
                System.out.println("aimer pas");

            }

        });

        ShareButton sb = new ShareButton();
        sb.setText("Partager sur facebook");

        cnt.add(BorderLayout.NORTH,
                ttitre
        );
        cnt.add(BorderLayout.CENTER,
                BoxLayout.encloseY(
                        llieu, ldate, tdescription, capacite, prix, sb
                ));
        Container cn = BorderLayout.west(BoxLayout.encloseX(participants));

        add(cnt);
        add(createLineSeparator(0x4286f4));
        add(createLineSeparator(0x4286f4));
        if (e.getId_membre().getId() != u.getId()) {
            cn.add(BorderLayout.EAST,
                    BoxLayout.encloseX(
                            lparticiper
                    ));
//         add(createLineSeparator(0x4286f4));
//         add(createLineSeparator(0x4286f4));
            add(cn);

        }
//add(createLineSeparator(0x4286f4));
        add(createLineSeparator(0x4286f4));
        add(createLineSeparator(0x4286f4));
        image.addActionListener(ev -> ToastBar.showMessage(e.getNom(), FontImage.MATERIAL_INFO));
    }

    private void bindButtonSelection(Button b, Label arrow) {
        b.addActionListener(e -> {
            if (b.isSelected()) {
                updateArrowPosition(b, arrow);
            }
        });
    }

    public URLImage photo(int w, int h, String pa) {
        URLImage photo2 = URLImage.createToStorage(EncodedImage.createFromImage(Image.createImage(w, h, 0xffff0000), true), pa,
                "http://localhost/ProjetPII/web/images/" + pa
        );
        photo2.fetch();
        return photo2;
    }

    public String AffichageDate(String Date) {
        String dat = null;

        String day = NativeString.substr(Date, 0, 3);
        String m = NativeString.substr(Date, 4, 3);
        String d = NativeString.substr(Date, 8, 2);
        String a = NativeString.substr(Date, 24, 4);
        dat = day + " " + d + " " + m + " " + a;

        return dat;
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
//        tb.addMaterialCommandToSideMenu("Annonce ", FontImage.MATERIAL_UPDATE, e -> new AnnonceAccueil(res).show());
//        
//        tb.addMaterialCommandToSideMenu("Profile", FontImage.MATERIAL_CONTACTS, e -> new ProfileHome(res).show());
//        tb.addMaterialCommandToSideMenu("Logout", FontImage.MATERIAL_EXIT_TO_APP, e -> new WalkthruForm(res).show());
    }

    public Component createLineSeparator() {
        Label separator = new Label("", "WhiteSeparator");
        separator.setShowEvenIfBlank(true);
        return separator;
    }

    public Component createLineSeparator(int color) {
        Label separator = new Label("", "WhiteSeparator");
        separator.getUnselectedStyle().setBgColor(color);
        separator.getUnselectedStyle().setBgTransparency(255);
        separator.setShowEvenIfBlank(true);
        return separator;
    }
}
