/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Interfaces;

import Entities.Demande;
import java.sql.SQLException;
import java.util.List;

/**
 *
 * @author ASUS-PC
 */
public interface IServiceDemande {
    
    public void addDemande(Demande d) throws SQLException;

    public List<Demande> getDemandes() throws SQLException;
    
    public List<Demande> TrierDemandes(int i) throws SQLException;

    public Demande getById(int id) throws SQLException;

    public void deleteDemande(Demande d) throws SQLException;

    public void deleteeDemande(int id) throws SQLException;

    public void updateDemande(Demande d) throws SQLException;   
    
    public List<Demande> SearchDemandes(String character) throws SQLException;
    
    public List<String> SearchDemandesNames(String character) throws SQLException;
    
}
