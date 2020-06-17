/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev.services;


import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import pidev.entities.Donationn;
import pidev.interfaces.IServiceDonation;
import pidev.utils.DataSource;

/**
 *
 * @author ASUS-PC
 */
public class ServiceDonation implements IServiceDonation {
     Connection cnx;
    public static Donationn currentAssociation = new Donationn();
    
    public ServiceDonation() {
        cnx = DataSource.getInstance().getCnx();
    }

    @Override
    public void addDonation(Donationn d) throws SQLException {
    Statement stm = cnx.createStatement();
        String query = "INSERT INTO `donation` (`id`, `user_id`, `demande_id`, `type_donation`, `etat_donation`, `quantite_donation`)"
                + "     VALUES (NULL, '"+d.getUserId()+"', '"+d.getDemandeId()+"', '"+d.getTypeDonation()+"', '"+d.getEtatDonation()+"', '"+d.getQuantiteDonation()+"')";
         stm.executeUpdate(query);     
         System.out.println("Ajoutee");    }    

    @Override
    public List<Donationn> getDonations() throws SQLException {
        Statement stm = cnx.createStatement();
        String query = "select * from `donation`";
        ResultSet rst = stm.executeQuery(query);
        List<Donationn> donations = new ArrayList<>();
        while (rst.next()) {
            
            Donationn a2 = new Donationn();
            a2.setId(rst.getInt("id"));
            a2.setUserId(rst.getInt("user_id"));
            a2.setDemandeId(rst.getInt("demande_id"));
            a2.setTypeDonation(rst.getString("type_donation"));
            a2.setEtatDonation(rst.getInt("etat_donation"));
            a2.setQuantiteDonation(rst.getInt("quantite_donation"));            
            
            
            
            donations.add(a2);
        }
     return donations;    }
    
    
    
     @Override
    public List<Donationn> getDonationsD(int demande_id) throws SQLException{
        Statement stm = cnx.createStatement();
        String query = "select * from `donation` where demande_id= '"+demande_id+"'";
        ResultSet rst = stm.executeQuery(query);
        List<Donationn> donations = new ArrayList<>();
        while (rst.next()) {
            
            Donationn a2 = new Donationn();
            a2.setId(rst.getInt("id"));
            a2.setUserId(rst.getInt("user_id"));
            a2.setDemandeId(rst.getInt("demande_id"));
            a2.setTypeDonation(rst.getString("type_donation"));
            a2.setEtatDonation(rst.getInt("etat_donation"));
            a2.setQuantiteDonation(rst.getInt("quantite_donation"));            
            
            
            
            donations.add(a2);
        }
     return donations; 
    }
    
    
    

    @Override
    public List<Donationn> TrierDonations(int i) throws SQLException {
        Statement stm = cnx.createStatement();
        String query = "";
        if (i==1) {
            query = "select * from `donation` ORDER BY quantite_donation ASC";
        }else if (i==2) {
            query = "select * from `donation` ORDER BY quantite_donation DESC";
        }
        
        ResultSet rst = stm.executeQuery(query);
        List<Donationn> donations = new ArrayList<>();
        while (rst.next()) {
            
            Donationn a2 = new Donationn();
            a2.setId(rst.getInt("id"));
            a2.setUserId(rst.getInt("user_id"));
            a2.setDemandeId(rst.getInt("demande_id"));
            a2.setTypeDonation(rst.getString("type_donation"));
            a2.setEtatDonation(rst.getInt("etat_donation"));
            a2.setQuantiteDonation(rst.getInt("quantite_donation"));             
            
            
            
            donations.add(a2);
        }
     return donations;    }

    @Override
    public Donationn getById(int id) throws SQLException {
        Statement stm = cnx.createStatement();
        String query = "select * from `donation` where id= '"+id+"'";
        ResultSet rst = stm.executeQuery(query);
        
        Donationn a2 = new Donationn();
        
        while (rst.next()) {
            
            a2.setId(rst.getInt("id"));
            a2.setUserId(rst.getInt("user_id"));
            a2.setDemandeId(rst.getInt("demande_id"));
            a2.setTypeDonation(rst.getString("type_donation"));
            a2.setEtatDonation(rst.getInt("etat_donation"));
            a2.setQuantiteDonation(rst.getInt("quantite_donation"));    
             
        }
     return a2;    }

    @Override
    public void deleteDonation(Donationn d) throws SQLException {
        Statement stm = cnx.createStatement();
        String query = "DELETE FROM donation where id= '"+d.getId()+"'";
        stm.executeUpdate(query);          }

    @Override
    public void deleteDonation(int id) throws SQLException {
        Statement stm = cnx.createStatement();
        String query = "DELETE FROM donation where id= '"+id+"'";
        stm.executeUpdate(query);          }

    @Override
    public void updateDonation(Donationn d) throws SQLException {
        Statement stm = cnx.createStatement();
        String query = "UPDATE donation SET type_donation= '"+d.getTypeDonation()+"', etat_deonation= '"+d.getEtatDonation()+"', demande_id= '"+d.getDemandeId()+"', user_id= '"+d.getUserId()+"', quantite_donation= '"+d.getQuantiteDonation()+"'WHERE id='"+d.getId()+"'";
        stm.executeUpdate(query);    }

    @Override
    public List<Donationn> SearchDonations(String character) throws SQLException {
Statement stm = cnx.createStatement();
        String req="select * from donation where type_donation  LIKE '%"+character+"%'" ;
        ResultSet rst = stm.executeQuery(req);
        List<Donationn> donations = new ArrayList<>();
        while (rst.next()) {
            Donationn a2 = new Donationn();
            a2.setId(rst.getInt("id"));
            a2.setUserId(rst.getInt("user_id"));
            a2.setDemandeId(rst.getInt("demande_id"));
            a2.setTypeDonation(rst.getString("type_donation"));
            a2.setEtatDonation(rst.getInt("etat_donation"));
            a2.setQuantiteDonation(rst.getInt("quantite_donation"));             
            
            
            
            donations.add(a2);
        }
     return donations;    }

    @Override
    public List<String> SearchDonationsNames(String character) throws SQLException {
        Statement stm = cnx.createStatement();
        String req="select * from donation where type_donation  LIKE '%"+character+"%'" ;
        ResultSet rst = stm.executeQuery(req);
        List<String> donations = new ArrayList<>();
        while (rst.next()) {
            String a2 = "";
            a2=rst.getString("type_donation");
            donations.add(a2);
        }
     return donations;    }
    
}
