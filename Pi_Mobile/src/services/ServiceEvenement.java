/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;
import com.codename1.io.JSONParser;
import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.events.ActionListener;
import entities.Evenement;
import entities.User;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Date;
import java.util.LinkedHashMap;
import java.util.List;
import java.util.Map;
import utils.Statics;

/**
 *
 * @author EliteBook
 */
public class ServiceEvenement {
     public ArrayList<Evenement> evenements;
    
    public static ServiceEvenement instance=null;
    public boolean resultOK;
    private ConnectionRequest req;

    public ServiceEvenement() {
         req = new ConnectionRequest();
    }

    public static ServiceEvenement getInstance() {
        if (instance == null) {
            instance = new ServiceEvenement();
        }
        return instance;
    }
    
    
    public void AjouterEvenement(Evenement e) {
       ConnectionRequest con = new ConnectionRequest();
        System.out.println("debut ajout evnement");
        User u = new User(1, "mohamed", "rejeb", "mohamed.rejeb@esprit.tn", "bizerte");

        
        String Url = "http://localhost/ProjetPII/web/app_dev.php/ajouterEvenement"
                + "/" + u.getId()
                + "/" + e.getNom()
                + "/" + e.getDescription()
                + "/"+ e.getDate()
                + "/"+ e.getCapacite()
                + "/"+ e.getPrix()
                + "/" + e.getNbParticipant()
                + "/" + e.getLieu()
                + "/" + e.getImage();
          con.setUrl(Url);
        System.out.println("set  URL");
        System.out.println(Url);
       

        con.addResponseListener((event) -> {
            String str = new String(con.getResponseData());
            System.out.println(str);
           
        });
        NetworkManager.getInstance().addToQueueAndWait(con);
        System.out.println("ajout avec succce");
       
    } 
    public ArrayList<Evenement> AfficheEvenement() {
      ArrayList<Evenement> evenements = new ArrayList<>();
      ConnectionRequest con = new ConnectionRequest();
      con.setUrl(Statics.BASE_URL+"/mobile/recupperer");
      con.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                //listOffres = getListOffre(new String(con.getResponseData()));
                JSONParser jsonp = new JSONParser();
                try {
                    Map<String, Object> restaurant = jsonp.parseJSON(new CharArrayReader(new String(con.getResponseData()).toCharArray()));
                    
                    List<Map<String, Object>> list = (List<Map<String, Object>>) restaurant.get("root");
                    for (Map<String, Object> obj : list) {  
                        Evenement e = new Evenement();
                float id = Float.parseFloat(obj.get("reference").toString());
                e.setReference((int)id);
                e.setNom(obj.get("nom").toString());
                e.setCreateur(obj.get("createur").toString());
                e.setLieu(obj.get("lieu").toString());
                
                e.setDescription(obj.get("description").toString());
               e.setImage(obj.get("image").toString());                
                e.setCapacite(((int)Float.parseFloat(obj.get("capacite").toString())));
                e.setNbParticipant(((int)Float.parseFloat(obj.get("nbParticipant").toString())));
                e.setPrix(((float)Float.parseFloat(obj.get("prix").toString())));

                
                LinkedHashMap<String, Object> obgtype = (LinkedHashMap<String, Object>) obj.get("idMembre");
                        User u = new User();
                        
                        u.setId((int) Float.parseFloat(obgtype.get("id").toString()));
                        u.setNom(obgtype.get("nom").toString());
                        System.out.println("user= "+u);
                        
                e.setId_membre((User) u);
                 LinkedHashMap<String,Object> date = (LinkedHashMap<String,Object>) obj.get("date"); 
                        
                        double t = (double) date.get("timestamp");
                        long x = (long) (t * 1000L);
                         e.setDate(new Date(x));
                
                evenements.add(e);
                    }
                } catch (IOException ex) {
                }
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(con);
        return evenements;
    }
}
