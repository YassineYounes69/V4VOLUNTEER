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

import com.codename1.ui.Display;
import com.codename1.ui.events.ActionListener;
import entities.UserY;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;
import utils.Security;
import com.twilio.Twilio;
import com.twilio.rest.api.v2010.account.Message;
import com.twilio.type.PhoneNumber;
import utils.Statics;
import utils.Statics_1;

/**
 *
 * @author HP
 */
public class ServiceUser {
    
    public static final String ACCOUNT_SID = "AC180e609f59a229e1593e3e1842a639ef";
    public static final String AUTH_TOKEN = "70366b4508b289926980b0a15645c8b5";

    public ArrayList<UserY> users;
    String Body;
    UserY user = new UserY();
    boolean phoneNumberOK;
    public static ServiceUser instance=null;
    public boolean resultOK;
    public boolean mailExiste;
    private ConnectionRequest req;
    private ConnectionRequest req2;
    private ConnectionRequest req3;

    public ServiceUser() {
         req = new ConnectionRequest();
         req2 = new ConnectionRequest();
         req3 = new ConnectionRequest();
    }

    public static ServiceUser getInstance() {
        if (instance == null) {
            instance = new ServiceUser();
        }
        return instance;
    }

    public boolean addUser(UserY u) {
        String email = u.getEmail();
        int phone = u.getPhoneNumber();
        String pw = u.getPw();
        String username = u.getUsername();
        
        String url = Statics_1.BASE_URL + "/users/createUser?username=" + username + "&email=" + email + "&password=" + pw + "&phoneNumber=" + phone+"&role="+u.getRole();  //création de l'URL
        System.out.println(url);
        req.setUrl(url);// Insertion de l'URL de notre demande de connexion
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                
                    String user = new String(req.getResponseData());
                    System.out.println(user);
                    try {
                    JSONParser j = new JSONParser();
            Map<String, Object> userMap = j.parseJSON(new CharArrayReader(user.toCharArray()));
            float id = Float.parseFloat(userMap.get("id").toString());
            int idLastUser = (int) id;
            String recipient = (String) userMap.get("email");
            String uname = (String) userMap.get("username");
            Body = "<h1>Hello " + uname + "!</h1>"
                    + "Welcome to our community, where you can help those in need or get help, click on the link below to activate your account : <br>"
                    + "<a href='http://localhost/ProjetPII/web/app_dev.php/mobile/users/enableUser/"+idLastUser+"'>"+"Activate your account ! </a>";
           
                        
                    } catch (Exception ex) {
            System.out.println(ex);
        }
                   
                    resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                    req.removeResponseListener(this); //Supprimer cet actionListener
                    /* une fois que nous avons terminé de l'utiliser.
                    La ConnectionRequest req est unique pour tous les appels de
                    n'importe quelle méthode du Service task, donc si on ne supprime
                    pas l'ActionListener il sera enregistré et donc éxécuté même si
                    la réponse reçue correspond à une autre URL(get par exemple)*/
                
                
            }
        }
               
     
        
        );
        NetworkManager.getInstance().addToQueueAndWait(req);
        
        String urlMail = Statics_1.BASE_URL + "/users/sendMail?recipient=" + email + "&body=" + Body;
        System.out.println(urlMail);
        req2.setUrl(urlMail);// Insertion de l'URL de notre demande de connexion
        req2.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                    resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                    req2.removeResponseListener(this); //Supprimer cet actionListener
                    /* une fois que nous avons terminé de l'utiliser.
                    La ConnectionRequest req est unique pour tous les appels de
                    n'importe quelle méthode du Service task, donc si on ne supprime
                    pas l'ActionListener il sera enregistré et donc éxécuté même si
                    la réponse reçue correspond à une autre URL(get par exemple)*/
                
                
            }
        }
               
 
        
        );
        NetworkManager.getInstance().addToQueueAndWait(req2);
        return resultOK;
    }
    public boolean verifyMailExistance(String mail){
        
        
        String url = Statics_1.BASE_URL + "/users/validateEmail?email=" + mail;  //création de l'URL
        System.out.println(url);
        req3.setUrl(url);// Insertion de l'URL de notre demande de connexion
        req3.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                
                    String reponse = new String(req3.getResponseData());
                    System.out.println(reponse);
                    if ("false".equals(reponse))
                        mailExiste=false;
                    else
                        mailExiste=true;
                    
                   
                    resultOK = req3.getResponseCode() == 200; 
                    req3.removeResponseListener(this); 
                
             
            }
            
        });
NetworkManager.getInstance().addToQueueAndWait(req3);
        return mailExiste;
    }//fin verify
    
    public UserY login(String username,String pw){
        String url = Statics_1.BASE_URL + "/users/login?username="+username+"&pw="+pw;
        
        
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
             String response = new String(req.getResponseData());
                System.out.println(response);
             try {
                    JSONParser j = new JSONParser();
            Map<String, Object> userMap = j.parseJSON(new CharArrayReader(response.toCharArray()));
            if (!(userMap.isEmpty()))
            {
            float idd = Float.parseFloat(userMap.get("id").toString());
            int id = (int) idd;
            String uname = (String) userMap.get("username");
            float tell = Float.parseFloat(userMap.get("tel").toString());
            int tel = (int) tell+1;
            String email = (String) userMap.get("email");
            String prenom = (String) userMap.get("prenom");
            String nom = (String) userMap.get("nom");
            boolean enabled = Boolean.parseBoolean(userMap.get("enabled").toString());
            ArrayList roleArray = (ArrayList) userMap.get("roles");
            String role = (String) roleArray.get(0);
            user.setId(id);
            user.setUsername(uname);
            user.setPhoneNumber(tel);
            user.setEmail(email);
            user.setEnabled(enabled);
            user.setRole(role);
            if(prenom==null)
            user.setPrenom("");
            else
                user.setPrenom(prenom);
            if(nom==null)
            user.setNom("");
            else
                user.setNom(nom);
            System.out.println(user.toString());
            }
            else 
            {
                user=null;
            }
            
           
                        
                    } catch (Exception ex) {
            System.out.println(ex);
        }
             resultOK = req.getResponseCode() == 200; 
                    req.removeResponseListener(this); 
            }
            
        });
        
       NetworkManager.getInstance().addToQueueAndWait(req); 
        return user;
    }
    public boolean validatePhoneNumber(int phone){
        String url = "http://apilayer.net/api/validate?access_key=3f226f9f3c46461b2e2a08db26e80cf5&number="+phone+"&country_code=TN&format=1";
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
             String response = new String(req.getResponseData());
                System.out.println(response);
             try {
            JSONParser j = new JSONParser();
            Map<String, Object> phoneMap = j.parseJSON(new CharArrayReader(response.toCharArray()));
            if (phoneMap.get("valid").toString().equals("true"))
            {
                phoneNumberOK=true;
            }
            else 
            {
                phoneNumberOK=false;
            }    
                    } catch (Exception ex) {
            System.out.println(ex);
        }
             resultOK = req.getResponseCode() == 200; 
                    req.removeResponseListener(this); 
            }
            
        }); 
       NetworkManager.getInstance().addToQueueAndWait(req); 
        return phoneNumberOK;
    }
    public boolean resetPw(String email){
        String pw = Security.generateBase32Secret(8);
        String url = Statics_1.BASE_URL + "/users/resetPw?pw="+pw+"&email="+email;
        System.out.println(url);
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
             String response = new String(req.getResponseData());
                System.out.println(response);
             try {
            JSONParser j = new JSONParser();
            Map<String, Object> userMap = j.parseJSON(new CharArrayReader(response.toCharArray()));
            if (!(userMap.isEmpty())){
              float phoneNumberr = Float.parseFloat(userMap.get("tel").toString());
            int phoneNumber = (int) phoneNumberr+1;
                 System.out.println(phoneNumber);
            Twilio.init(ACCOUNT_SID, AUTH_TOKEN);
            Message message = Message.creator(new PhoneNumber("+216"+phoneNumber),
            new PhoneNumber("+12058285434"), 
            "This is your new password : "+pw).create();
            System.out.println(message.getSid());  
            resultOK = req.getResponseCode() == 200; 
            }
            else 
                resultOK=false;
            
             } catch (Exception ex) {
            System.out.println(ex);
        }
             
                    req.removeResponseListener(this); 
            }
            
        }); 
       NetworkManager.getInstance().addToQueueAndWait(req); 
        return resultOK;
        
    }
    
    public boolean updateUN(String username,int id){
        
        String url = Statics_1.BASE_URL + "/users/updateUN?id="+id+"&username="+username;
        
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
             String response = new String(req.getResponseData());
                System.out.println(response);
            
             
            resultOK = req.getResponseCode() == 200; 
            
             
                    req.removeResponseListener(this); 
            }
            
        }); 
       NetworkManager.getInstance().addToQueueAndWait(req); 
        return resultOK;
        
    }
    
    public boolean updatePW(String pw,int id){
        
        String url = Statics_1.BASE_URL + "/users/updatePw?id="+id+"&pw="+pw;
        
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
             String response = new String(req.getResponseData());
                System.out.println(response);
            
             
            resultOK = req.getResponseCode() == 200; 
            
             
                    req.removeResponseListener(this); 
            }
            
        }); 
       NetworkManager.getInstance().addToQueueAndWait(req); 
        return resultOK;
        
    }
    
    public boolean updateEM(String em,int id){
        
        String url = Statics_1.BASE_URL + "/users/updateEM?id="+id+"&email="+em;
        
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
             String response = new String(req.getResponseData());
                System.out.println(response);
            
             
            resultOK = req.getResponseCode() == 200; 
            
             
                    req.removeResponseListener(this); 
            }
            
        }); 
       NetworkManager.getInstance().addToQueueAndWait(req); 
        return resultOK;
        
    }
    
    public boolean updatePN(String pn,int id){
        
        String url = Statics_1.BASE_URL + "/users/updatePN?id="+id+"&tel="+pn;
        
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
             String response = new String(req.getResponseData());
                System.out.println(response);
            
             
            resultOK = req.getResponseCode() == 200; 
            
             
                    req.removeResponseListener(this); 
            }
            
        }); 
       NetworkManager.getInstance().addToQueueAndWait(req); 
        return resultOK;
        
    }
    
    public boolean updatePRE(String pre,int id){
        
        String url = Statics_1.BASE_URL + "/users/updatePRE?id="+id+"&prenom="+pre;
        
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
             String response = new String(req.getResponseData());
                System.out.println(response);
            
             
            resultOK = req.getResponseCode() == 200; 
            
             
                    req.removeResponseListener(this); 
            }
            
        }); 
       NetworkManager.getInstance().addToQueueAndWait(req); 
        return resultOK;
        
    }
    
    public boolean updateNOM(String nom,int id){
        
        String url = Statics_1.BASE_URL + "/users/updateNOM?id="+id+"&nom="+nom;
        
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
             String response = new String(req.getResponseData());
                System.out.println(response);
            
             
            resultOK = req.getResponseCode() == 200; 
            
             
                    req.removeResponseListener(this); 
            }
            
        }); 
       NetworkManager.getInstance().addToQueueAndWait(req); 
        return resultOK;
        
    }
    
    
    
    
    
}