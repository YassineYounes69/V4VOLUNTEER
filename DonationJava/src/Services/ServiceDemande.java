/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;

import Entities.Demande;
import Interfaces.IServiceDemande;
import Utils.DataSource;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author ASUS-PC
 */
public class ServiceDemande implements IServiceDemande {
    Connection cnx;
    public static Demande currentDemande = new Demande();
    
    public ServiceDemande() {
        cnx = DataSource.getInstance().getCnx();
    }

    @Override
    public void addDemande(Demande d) throws SQLException {
        Statement stm = cnx.createStatement();
        String query = "INSERT INTO `demande` (`id`, `type_demande`, `etat_demande`, `description_demande`, `titre_demande`, `photo_demande`)"
                + "     VALUES (NULL, '"+d.getTypeDemande()+"', '"+d.getEtatDemande()+"', '"+d.getDescriptionDemande()+"', '"+d.getTitreDemande()+"', '"+d.getPhotoDemande()+"')";
         stm.executeUpdate(query);     
         System.out.println("Ajoutee");    }

    @Override
    public List<Demande> getDemandes() throws SQLException {
        Statement stm = cnx.createStatement();
        String query = "select * from `demande`";
        ResultSet rst = stm.executeQuery(query);
        List<Demande> demandes = new ArrayList<>();
        while (rst.next()) {
            
            Demande a2 = new Demande();
            a2.setId(rst.getInt("id"));
            a2.setTypeDemande(rst.getString("type_demande"));
            a2.setEtatDemande(rst.getInt("etat_demande"));
            a2.setDescriptionDemande(rst.getString("description_demande"));
            a2.setTitreDemande(rst.getString("titre_demande"));
            a2.setPhotoDemande(rst.getString("photo_demande"));            
            
            
            
            demandes.add(a2);
        }
     return demandes;    }

    @Override
    public List<Demande> TrierDemandes(int i) throws SQLException {
        Statement stm = cnx.createStatement();
        String query = "";
        if (i==1) {
            query = "select * from `demande` ORDER BY titre_demande ASC";
        }else if (i==2) {
            query = "select * from `demande` ORDER BY type_demande ASC";
        }
        
        ResultSet rst = stm.executeQuery(query);
        List<Demande> demandes = new ArrayList<>();
        while (rst.next()) {
            
            Demande a2 = new Demande();
            a2.setId(rst.getInt("id"));
            a2.setTypeDemande(rst.getString("type_demande"));
            a2.setEtatDemande(rst.getInt("etat_demande"));
            a2.setDescriptionDemande(rst.getString("description_demande"));
            a2.setTitreDemande(rst.getString("titre_demande"));
            a2.setPhotoDemande(rst.getString("photo_demande"));            
            
            
            
            demandes.add(a2);
        }
     return demandes;    }

    @Override
    public Demande getById(int id) throws SQLException {
        Statement stm = cnx.createStatement();
        String query = "select * from `demande` where id= '"+id+"'";
        ResultSet rst = stm.executeQuery(query);
        
        Demande a2 = new Demande();
        
        while (rst.next()) {
            
            a2.setId(rst.getInt("id"));
            a2.setTypeDemande(rst.getString("type_demande"));
            a2.setEtatDemande(rst.getInt("etat_demande"));
            a2.setDescriptionDemande(rst.getString("description_demande"));
            a2.setTitreDemande(rst.getString("titre_demande"));
            a2.setPhotoDemande(rst.getString("photo_demande"));   
             
        }
     return a2;    }

    @Override
    public void deleteDemande(Demande d) throws SQLException {
        Statement stm = cnx.createStatement();
        String query = "DELETE FROM demande where id= '"+d.getId()+"'";
        stm.executeUpdate(query);       }

    @Override
    public void deleteeDemande(int id) throws SQLException {
        Statement stm = cnx.createStatement();
        String query = "DELETE FROM demande where id= '"+id+"'";
        stm.executeUpdate(query);      }

    @Override
    public void updateDemande(Demande d) throws SQLException {
        Statement stm = cnx.createStatement();
        String query = "UPDATE demande SET type_demande= '"+d.getTypeDemande()+"', etat_demande= '"+d.getEtatDemande()+"', description_demande= '"+d.getDescriptionDemande()+"', titre_demande= '"+d.getTitreDemande()+"', photo_demande= '"+d.getPhotoDemande()+"'WHERE id='"+d.getId()+"'";
        stm.executeUpdate(query);     }

    @Override
    public List<Demande> SearchDemandes(String character) throws SQLException {
        Statement stm = cnx.createStatement();
        String req="select * from demande where titre_demande  LIKE '%"+character+"%'" ;
        ResultSet rst = stm.executeQuery(req);
        List<Demande> demandes = new ArrayList<>();
        while (rst.next()) {
            Demande a2 = new Demande();
            a2.setId(rst.getInt("id"));
            a2.setTypeDemande(rst.getString("type_demande"));
            a2.setEtatDemande(rst.getInt("etat_demande"));
            a2.setDescriptionDemande(rst.getString("description_demande"));
            a2.setTitreDemande(rst.getString("titre_demande"));
            a2.setPhotoDemande(rst.getString("photo_demande"));            
            
            
            
            demandes.add(a2);
        }
     return demandes;    }

    @Override
    public List<String> SearchDemandesNames(String character) throws SQLException {
        Statement stm = cnx.createStatement();
        String req="select * from demande where titre_demande  LIKE '%"+character+"%'" ;
        ResultSet rst = stm.executeQuery(req);
        List<String> demandes = new ArrayList<>();
        while (rst.next()) {
            String a2 = "";
            a2=rst.getString("titre_demande");
            demandes.add(a2);
        }
     return demandes;    }
    
}
