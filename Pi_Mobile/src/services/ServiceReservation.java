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
import entities.Evenement;
import entities.Reservation;
import entities.User;
import java.io.IOException;
import java.util.ArrayList;
import java.util.LinkedHashMap;
import java.util.List;
import java.util.Map;

/**
 *
 * @author EliteBook
 */
public class ServiceReservation {
     public void participer(Reservation r) {
        ConnectionRequest con = new ConnectionRequest();
        String Url = "http://localhost/ProjetPII/web/app_dev.php/mobile/participer/" + r.getId_evenement().getReference()+ "/" + r.getId_user().getId();
        con.setUrl(Url);

     //   System.out.println("tt");

        con.addResponseListener((e) -> {
            String str = new String(con.getResponseData());
          //  System.out.println(str);
//            if (str.trim().equalsIgnoreCase("OK")) {
//                f2.setTitle(tlogin.getText());
//             f2.show();
//            }
//            else{
//            Dialog.show("error", "login ou pwd invalid", "ok", null);
//            }
        });
        NetworkManager.getInstance().addToQueueAndWait(con);
    }
    
     public void abandonner(Reservation r) {
        ConnectionRequest con = new ConnectionRequest();
        String Url = "http://localhost/ProjetPII/web/app_dev.php/mobile/abandonner/" + r.getId_evenement().getReference()+ "/" + r.getId_user().getId();
        con.setUrl(Url);

     //   System.out.println("tt");

        con.addResponseListener((e) -> {
            String str = new String(con.getResponseData());
            //System.out.println(str);
//            if (str.trim().equalsIgnoreCase("OK")) {
//                f2.setTitle(tlogin.getText());
//             f2.show();
//            }
//            else{
//            Dialog.show("error", "login ou pwd invalid", "ok", null);
//            }
        });
        NetworkManager.getInstance().addToQueueAndWait(con);
    }
    

    public ArrayList<Reservation > getAllReservayion() {
       
        ArrayList<Reservation> listParticipation = new ArrayList<>();
        ConnectionRequest con = new ConnectionRequest();
        con.setUrl("http://localhost/ProjetPII/web/app_dev.php/mobile/recuppererReservation");
        con.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                //listTasks = getListTask(new String(con.getResponseData()));
                JSONParser jsonp = new JSONParser();
                
                try {
                    Map<String, Object> tasks = jsonp.parseJSON(new CharArrayReader(new String(con.getResponseData()).toCharArray()));
                    //System.out.println(tasks);
                    //System.out.println(tasks);
                    List<Map<String, Object>> list = (List<Map<String, Object>>) tasks.get("root");
                    for (Map<String, Object> obj : list) {
                       
                        Reservation r=new Reservation();
  
                        r.setRef((int) Float.parseFloat(obj.get("ref").toString()));
                        
                        LinkedHashMap<String,Object> objEvenement= (LinkedHashMap<String,Object> ) obj.get("idEvenement");
                      
                        Evenement e = new Evenement();

                        LinkedHashMap<String, Object> objUser = (LinkedHashMap<String, Object>) objEvenement.get("idMembre");

                        User u = new User();

                        u.setId((int) Float.parseFloat(objUser.get("id").toString()));
                        u.setNom(objUser.get("nom").toString());

                        e.setId_membre((User) u);

                        float id = Float.parseFloat(objEvenement.get("reference").toString());
                        e.setReference((int) id);

                        e.setNom(objEvenement.get("nom").toString());
                        e.setLieu(objEvenement.get("lieu").toString());
                        e.setDescription(objEvenement.get("description").toString());

                        float capacite = Float.parseFloat(objEvenement.get("capacite").toString());
                        e.setCapacite((int) capacite);

                        float nbr = Float.parseFloat(objEvenement.get("nbParticipant").toString());
                        e.setNbParticipant((int) nbr);

//                        e.setImage((String) objEvenement.get("image").toString());

                        LinkedHashMap<String,Object> date = (LinkedHashMap<String,Object>) objEvenement.get("date"); 
                        
                        /*
                        double t = (double) date.get("timestamp");
                        long x = (long) (t * 1000L);
                         e.setDate(new Date(x));
*/
                        r.setId_evenement(e);
                        
                        
                        
                        LinkedHashMap<String,Object> objUs= (LinkedHashMap<String,Object> ) obj.get("idUser");
                        User user1=new User();
                         user1.setId((int) Float.parseFloat(objUs.get("id").toString()));
                        user1.setNom(objUs.get("nom").toString());
                       
                        r.setId_user(user1);
                        
                        listParticipation.add(r);

                    }
                } catch (IOException ex) {
                }

            }
        });
        NetworkManager.getInstance().addToQueueAndWait(con);
        return listParticipation;
    }
     public boolean findReservation(Reservation p)
    {
        
        for (int i=0;i<getAllReservayion().size();i++)
        {
            if((p.getId_evenement().getReference()==getAllReservayion().get(i).getId_evenement().getReference()) &&(p.getId_user().getId()==getAllReservayion().get(i).getId_user().getId())  )
            {
                 return true;       
            }
        }
        return false;
    }
  
}
