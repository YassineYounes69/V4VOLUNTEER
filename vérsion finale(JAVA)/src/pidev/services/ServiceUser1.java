/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev.services;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import pidev.entities.User;
import pidev.utils.DataSource;

/**
 *
 * @author EliteBook
 */
public class ServiceUser1 {
    
    Connection cnx = DataSource.getInstance().getCnx();
    
    
    public ArrayList<User> afficherUser() {
        String query = "Select * from fos_user";
        ArrayList<User> myList = new ArrayList<>();
        try {
            PreparedStatement pst = cnx.prepareStatement(query);
            ResultSet rs= pst.executeQuery();
            while(rs.next())
            {
                User c = new User();
                c.setId(rs.getInt("id"));
                c.setNom(rs.getString("nom"));
                c.setPrenom(rs.getString("prenom"));
                c.setEmail(rs.getString("email"));
                c.setAdresse(rs.getString("addresse"));
               
                myList.add(c);
            }
        } catch (SQLException ex) {
             System.out.println(ex.getMessage());
        }
        return myList;
    }
  public long recuperer_user(User u) {
        ArrayList<User> cl= new ArrayList<User>();
        cl=this.afficherUser();
        long id=-1;
        //System.out.println("size: " + cl.size());
        for (int i = 0; i <cl.size(); i++) {
            if((cl.get(i).getEmail().equals(u.getEmail()))&&(cl.get(i).getNom().equals(u.getNom())))
            {
                //System.out.println("exist");
                id=cl.get(i).getId();
                break;
            }
            
        }
        return id;
        
    }  
  

}
