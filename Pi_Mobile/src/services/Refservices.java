/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.Log;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.processing.Result;
import com.codename1.ui.events.ActionListener;
import entities.Refugies;
import java.io.ByteArrayInputStream;
import java.io.IOException;
import java.io.InputStreamReader;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;


/**
 *
 * @author dEll
 */
public class Refservices {

    ArrayList<Refugies> listEvents;
    public static Refservices instance=null;
    public boolean resultOK;
    private ConnectionRequest req;

    public Refservices() {
         req = new ConnectionRequest();
    }

    public static Refservices getInstance() {
        if (instance == null) {
            instance = new Refservices();
        }
        return instance;
    }
    
    public ArrayList<Refugies> parseListEventJson(String json) {

        listEvents = new ArrayList<>();

        try {
            JSONParser j = new JSONParser();// Instanciation d'un objet JSONParser permettant le parsing du résultat json

            Map<String, Object> events = j.parseJSON(new CharArrayReader(json.toCharArray()));

            List<Map<String, Object>> list = (List<Map<String, Object>>) events.get("root");

            for (Map<String, Object> obj : list) {

                Refugies ref = new Refugies();

                float id_ref = Float.parseFloat(obj.get("idRef").toString());
                ref.setId_ref((int) id_ref);
                ref.setPays_ref(obj.get("paysRef").toString());
                ref.setNom_ref(obj.get("nomRef").toString());
                ref.setPrenom_ref(obj.get("prenomRef").toString());
                ref.setAge_ref(((int) Float.parseFloat(obj.get("ageRef").toString())));
                ref.setGender_ref(obj.get("genderRef").toString());
                listEvents.add(ref);

            }

        } catch (IOException ex) {
        }

        return listEvents;

    }

    public ArrayList<Refugies> ShowRef() {
        ConnectionRequest con = new ConnectionRequest();
        //lien bundle
        con.setUrl("http://localhost/ProjetPII/web/app_dev.php/mobile/Showref");
        con.addResponseListener((NetworkEvent evt) -> {
            String str = new String(con.getResponseData());//Récupération de la réponse du serveur
            System.out.println(str);//Affichage de la réponse serveur sur la console
            Refservices ser = new Refservices();
            listEvents = ser.parseListEventJson(new String(con.getResponseData()));
        });
        NetworkManager.getInstance().addToQueueAndWait(con);

        return listEvents;

    }

    public void UpdateRef(Refugies u) {
        ConnectionRequest conn = new ConnectionRequest();
        String Url = "http://localhost/ProjetPII/web/app_dev.php/mobile/Upref/" + u.getId_ref()+"?paysRef="+u.getPays_ref()+"&nomRef="+u.getNom_ref()+"&prenomRef="+u.getPrenom_ref()+"&ageRef="+u.getAge_ref()+"&genderRef="+u.getGender_ref();

        conn.setUrl(Url);

        conn.addResponseListener((ref) -> {
            String str = new String(conn.getResponseData());

        });
        NetworkManager.getInstance().addToQueueAndWait(conn);
    }

    public void DeleteRef(Refugies ch) {
        ConnectionRequest con = new ConnectionRequest();
        String Url = "http://localhost/ProjetPII/web/app_dev.php/mobile/Delref/" + ch.getId_ref();
        con.setUrl(Url);
        con.addResponseListener((ref) -> {
            String str = new String(con.getResponseData());//Récupération de la réponse du serveur

        });
        NetworkManager.getInstance().addToQueueAndWait(con);
    }

    public void Addrefugies(Refugies u) 
    {
        
        ConnectionRequest con = new ConnectionRequest();// création d'une nouvelle demande de connexion

        String Url = "http://localhost/ProjetPII/web/app_dev.php/mobile/Addref?paysRef="+u.getPays_ref()+"&nomRef="+u.getNom_ref()+"&prenomRef="+u.getPrenom_ref()+"&ageRef="+u.getAge_ref()+"&genderRef="+u.getGender_ref();// création de l'URL
        con.setUrl(Url);// Insertion de l'URL de notre demande de connexion

        con.addResponseListener((e) -> {
            String str = new String(con.getResponseData());//Récupération de la réponse du serveur
            System.out.println(str);//Affichage de la réponse serveur sur la console

        });
        NetworkManager.getInstance().addToQueueAndWait(con);// Ajout de notre demande de connexion à la file d'attente du NetworkManager
    }

    public void payer(Refugies c) {
        ConnectionRequest con = new ConnectionRequest();
        String Url = "http://localhost/ProjetPII/web/app_dev.php/mobile/Donate";
        con.setUrl(Url);
        con.addResponseListener((e) -> {
            String str = new String(con.getResponseData());//Récupération de la réponse du serveur

        });
        NetworkManager.getInstance().addToQueueAndWait(con);
    }
        
    
    public void searchhh(Refugies refu) {
        ConnectionRequest con = new ConnectionRequest();
        String Url = "http://localhost/ProjetPII/web/app_dev.php/mobile/lawej";
        con.setUrl(Url);
        con.addResponseListener((e) -> {
            String str = new String(con.getResponseData());//Récupération de la réponse du serveur
            System.out.println(str);
        });
        NetworkManager.getInstance().addToQueueAndWait(con);
    }
    
    String[] searchLocations(String text) {        
    try {
        if(text.length() > 0) {
            ConnectionRequest r = new ConnectionRequest();
            r.setPost(false);
            r.setUrl("http://localhost/ProjetPII/web/app_dev.php/mobile/Showref");
            
            NetworkManager.getInstance().addToQueueAndWait(r);
            Map<String,Object> result = new JSONParser().parseJSON(new InputStreamReader(new ByteArrayInputStream(r.getResponseData()), "UTF-8"));
            String[] res = Result.fromContent(result).getAsStringArray("//description");
            return res;
        }
    } catch(IOException err) {
        Log.e(err);
    }
    return null;
}
    
}
