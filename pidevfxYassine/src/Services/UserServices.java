/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;

import java.sql.Connection;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.logging.Level;
import java.util.logging.Logger;
import Utils.DataSource;
import Entities.*;
import java.sql.ResultSet;
import java.util.List;
import java.util.ArrayList;
import Interfaces.IUserServices;
/**
 *
 * @author HP
 */
public class UserServices implements IUserServices {
     Connection cnx ;

    public UserServices() {
        cnx= DataSource.getInstance().getCnx();
    }
    
    
    @Override
    public void newUser(User u,String activationCode){
        String req="";
        
        if (u instanceof Ngo){
        req = "insert into fos_user(username,email,enabled,password,nom,confirmation_token,roles) values ('"+u.getUserName()+"','"+u.getEmail()+"',"+u.isEnabled()+",'"+u.getPw().hashCode()+"','"+((Ngo) u).getNgoName()+"',"+activationCode+",'"+u.getRole()+"')";    
        System.out.println("signing up as NGO");
            System.out.println(req);
        }
        else if (u instanceof Volunteer){
        req = "insert into fos_user(username,email,enabled,password,nom,prenom,addresse,tel,confirmation_token,roles) values ('"+u.getUserName()+"','"+u.getEmail()+"',"+u.isEnabled()+",'"+u.getPw().hashCode()+"','"+((Volunteer) u).getVolName()+"','"+((Volunteer) u).getVolFName()+"','"+((Volunteer) u).getVolAdr()+"','"+((Volunteer) u).getPhoneNumber()+"','"+activationCode+"','"+u.getRole()+"')";    
            System.out.println("signing up as volunteer");
        }
        
        try {
                        System.out.println("Adding ..");

            Statement st = cnx.createStatement();
            st.executeUpdate(req);
            System.out.println("Added user succesfully !");
            
        } catch (SQLException ex) {
            Logger.getLogger(UserServices.class.getName()).log(Level.SEVERE, null, ex);
        }
        
    }
    
     @Override
    public void deluserById(int id){
        String req = "delete from fos_user where (id="+id+")";
        try {
                        System.out.println("Deleting ..");

            Statement st = cnx.createStatement();
            st.executeUpdate(req);
            System.out.println("Deleted user succesfully !");
            
        } catch (SQLException ex) {
            Logger.getLogger(UserServices.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
     @Override
    public List<User> listUsers(){
        List<User> users = new ArrayList<>();
        String req = "SELECT username,email FROM fos_user";
        try {
         Statement st = cnx.createStatement();
         ResultSet rs = st.executeQuery(req);
         while (rs.next()){
             User u = new User();
             u.setEmail(rs.getString("email"));
             u.setUserName(rs.getString("username"));
             u.setId(rs.getInt("id"));
             users.add(u);
         }
        }
        catch (SQLException e){
             Logger.getLogger(UserServices.class.getName()).log(Level.SEVERE, null, e);
        }
        return users;
    }
    @Override
    public void enableUserByMail(String recipient){
            String req = "UPDATE fos_user SET enabled = true WHERE email = '"+recipient+"'";
        try {
                        System.out.println("Activating account...");

            Statement st = cnx.createStatement();
            st.executeUpdate(req);
            System.out.println("Enabled user succesfully !");
            
        } catch (SQLException ex) {
            Logger.getLogger(UserServices.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    @Override
    public void updateEmail(String mail,int id){
        String req = "UPDATE fos_user SET email = '"+mail+"' WHERE id = "+id;
        try {
                        System.out.println("Updating account...");
                        System.out.println(req);
            Statement st = cnx.createStatement();
            st.executeUpdate(req);
            System.out.println("Updated email succesfully !");
            
        } catch (SQLException ex) {
            Logger.getLogger(UserServices.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public void updatepw(String pw, int id) {
        String req = "UPDATE fos_user SET password = '"+pw.hashCode()+"' WHERE id = "+id;
        try {
                        System.out.println("Updating account...");
                        System.out.println(req);
            Statement st = cnx.createStatement();
            st.executeUpdate(req);
            System.out.println("Updated password succesfully !");
            
        } catch (SQLException ex) {
            Logger.getLogger(UserServices.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public void updateUN(String un, int id) {
        String req = "UPDATE fos_user SET username = '"+un+"' WHERE id = "+id;
        try {
                        System.out.println("Updating account...");
                        System.out.println(req);
            Statement st = cnx.createStatement();
            st.executeUpdate(req);
            System.out.println("Updated username succesfully !");
            
        } catch (SQLException ex) {
            Logger.getLogger(UserServices.class.getName()).log(Level.SEVERE, null, ex);
        }}

    @Override
    public void updateAdr(String adr, int id) {
        String req = "UPDATE fos_user SET addresse = '"+adr+"' WHERE id = "+id;
        try {
                        System.out.println("Updating account...");
                        System.out.println(req);
            Statement st = cnx.createStatement();
            st.executeUpdate(req);
            System.out.println("Updated address succesfully !");
            
        } catch (SQLException ex) {
            Logger.getLogger(UserServices.class.getName()).log(Level.SEVERE, null, ex);
        }}

    @Override
    public void updatePhone(int phone, int id) {
        String req = "UPDATE fos_user SET tel = "+phone+" WHERE id = "+id;
        try {
                        System.out.println("Updating account...");
                        System.out.println(req);
            Statement st = cnx.createStatement();
            st.executeUpdate(req);
            System.out.println("Updated phone succesfully !");
            
        } catch (SQLException ex) {
            Logger.getLogger(UserServices.class.getName()).log(Level.SEVERE, null, ex);
        }}

    @Override
    public void updateMacAdr(String macAddr,int id) {
        
        String req = "UPDATE fos_user SET macAdr = '"+macAddr+"' WHERE id = "+id;
        try {
                            
                 
            Statement st = cnx.createStatement();
            st.executeUpdate(req);
           
        } catch (SQLException ex) {
            Logger.getLogger(UserServices.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public void updateNgoName(String name, int id) {
        
        String req = "UPDATE fos_user SET Nom = '"+name+"' WHERE id = "+id;
        try {
                            
                 
            Statement st = cnx.createStatement();
            st.executeUpdate(req);
           
        } catch (SQLException ex) {
            Logger.getLogger(UserServices.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    
}
