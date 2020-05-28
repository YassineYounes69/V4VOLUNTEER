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
import entities.Jaime;
import java.io.IOException;
import java.util.ArrayList;
import java.util.LinkedHashMap;
import java.util.List;
import java.util.Map;

/**
 *
 * @author EliteBook
 */
public class ServiceJaime {
    public void aimer(Jaime a) {
        ConnectionRequest con = new ConnectionRequest();
        String Url = "http://localhost/ProjetPII/web/app_dev.php/mobile/like/" + a.getId_evenement() + "/" + a.getId_user() ;
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
    
     public void aimerpas(Jaime a) {
        ConnectionRequest con = new ConnectionRequest();
        String Url = "http://localhost/ProjetPII/web/app_dev.php/mobile/aimepas/" + a.getId_evenement() + "/" + a.getId_user() ;
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
    

    public ArrayList<Jaime> getAllJaime() {
       
        ArrayList<Jaime> listJaime = new ArrayList<>();
        ConnectionRequest con = new ConnectionRequest();
        con.setUrl("http://localhost/ProjetPII/web/app_dev.php/mobile/recuppererJaime");
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
                       
                        Jaime p=new Jaime();
  
                        p.setId((int) Float.parseFloat(obj.get("id").toString()));
                        
                        LinkedHashMap<String,Object> objEvenement= (LinkedHashMap<String,Object> ) obj.get("idEvenement");
                        p.setId_evenement((int) Float.parseFloat(objEvenement.get("reference").toString()));
                        
                        LinkedHashMap<String,Object> objUser= (LinkedHashMap<String,Object> ) obj.get("idUser");
                        p.setId_user((int)Float.parseFloat(objUser.get("id").toString()));
                       
                       
                        listJaime.add(p);

                    }
                } catch (IOException ex) {
                }

            }
        });
        NetworkManager.getInstance().addToQueueAndWait(con);
        return listJaime;
    }
    
    public boolean findaimer(Jaime p)
    {
        
        for (int i=0;i<getAllJaime().size();i++)
        {
            if((p.getId_evenement()==getAllJaime().get(i).getId_evenement()) &&(p.getId_user()==getAllJaime().get(i).getId_user())  )
            {
                 return true;       
            }
        }
        return false;
    }
    
    public int mentions(int id)
    {
        int nbr=0;
        for (int i=0;i<getAllJaime().size();i++)
        {
           if(getAllJaime().get(i).getId_evenement()==id)
           {
               nbr++;
           }
        }
        return nbr;
    } 
}
