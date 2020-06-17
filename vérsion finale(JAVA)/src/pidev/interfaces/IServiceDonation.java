/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev.interfaces;

import java.sql.SQLException;
import java.util.List;
import pidev.entities.Donationn;

/**
 *
 * @author ASUS-PC
 */
public interface IServiceDonation {
    
    public void addDonation(Donationn d) throws SQLException;

    public List<Donationn> getDonations() throws SQLException;
    
    public List<Donationn> TrierDonations(int i) throws SQLException;

    public Donationn getById(int id) throws SQLException;
    
    public List<Donationn> getDonationsD(int demande_id) throws SQLException ;

    public void deleteDonation(Donationn d) throws SQLException;

    public void deleteDonation(int id) throws SQLException;

    public void updateDonation(Donationn d) throws SQLException;   
    
    public List<Donationn> SearchDonations(String character) throws SQLException;
    
    public List<String> SearchDonationsNames(String character) throws SQLException;
    
}
