/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.events.ActionListener;
import entities.Task;
import entities.agee;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author bhk
 */
public class ServiceTask {

    public ArrayList<Task> agee;
    
    public static ServiceTask instance=null;
    public boolean resultOK;
    private ConnectionRequest req;

    public ServiceTask() {
         req = new ConnectionRequest();
    }

    public static ServiceTask getInstance() {
        if (instance == null) {
            instance = new ServiceTask();
        }
        return instance;
    }

    public void ajouter(agee t) {
        ConnectionRequest con = new ConnectionRequest();
        System.out.println("debut ajout agee");
        
        
       
        String Url = "http://localhost/ProjetPII/web/app_dev.php/mobile/new?nom="+ t.getNom()
                + "&prenom=" + t.getPrenom()
                + "&age=" + t.getAge()
                + "&adresse=" + t.getAdresse()
                + "&id_membre=" + t.getId_membre()
                + "&donation=" + t.getDonation();
        
        con.setUrl(Url);
        System.out.println("set  URL");
        System.out.println(Url);
       

        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this); //Supprimer cet actionListener
                /* une fois que nous avons terminé de l'utiliser.
                La ConnectionRequest req est unique pour tous les appels de 
                n'importe quelle méthode du Service task, donc si on ne supprime
                pas l'ActionListener il sera enregistré et donc éxécuté même si 
                la réponse reçue correspond à une autre URL(get par exemple)*/

            }
        });
        NetworkManager.getInstance().addToQueueAndWait(con);
        System.out.println("ajout avec succce");
    }

    public ArrayList<agee> afficherAll() {
        ArrayList<agee> listagee = new ArrayList<>();

        ConnectionRequest con = new ConnectionRequest();
        con.setUrl("http://localhost/ProjetPII/web/app_dev.php/mobile/affichage");
        con.setPost(false);
        con.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                //listTasks = getListTask(new String(con.getResponseData()));
                JSONParser jsonp = new JSONParser();

                try {
                    Map<String, Object> event = jsonp.parseJSON(new CharArrayReader(new String(con.getResponseData()).toCharArray()));
                   
                    List<Map<String, Object>> list = (List<Map<String, Object>>) event.get("root");
                    for (Map<String, Object> obj : list) {
                        agee t = new agee();
                        
                        float id = Float.parseFloat(obj.get("id").toString());
                        t.setId((int) id);

                        t.setNom(obj.get("nom").toString());
                        
                        t.setPrenom(obj.get("prenom").toString());
                        
                        float Age = Float.parseFloat(obj.get("age").toString());
                        t.setAge((int) Age);
                        
                        t.setAdresse(obj.get("adresse").toString());
                        
                       // float id_membre = Float.parseFloat(obj.get("id_membre").toString());
                       // t.setId_membre((int) id);
                        
                        float donn = Float.parseFloat(obj.get("donation").toString());
                        t.setDonation((int) donn);

                        
                        listagee.add(t);

                    }
                } catch (IOException ex) {
                }

            }
        });
        NetworkManager.getInstance().addToQueueAndWait(con);
        return listagee;
    }

     public void Supprimeragee(int id) {
        ConnectionRequest con = new ConnectionRequest();
        System.out.println("debut suppression agee");
        String Url = "http://localhost/ProjetPII/web/app_dev.php/mobile/Supprimer?id="+id;
        
        con.setUrl(Url);
        System.out.println("set  URL");
       

        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this); //Supprimer cet actionListener
                /* une fois que nous avons terminé de l'utiliser.
                La ConnectionRequest req est unique pour tous les appels de 
                n'importe quelle méthode du Service task, donc si on ne supprime
                pas l'ActionListener il sera enregistré et donc éxécuté même si 
                la réponse reçue correspond à une autre URL(get par exemple)*/

            }
        });
        NetworkManager.getInstance().addToQueueAndWait(con);
        
        System.out.println("suppression avec succce");
    }
    
     
    
    
   
}
