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
import java.util.List;
import pidev.entities.agee;
import pidev.interfaces.Pagee;
import pidev.utils.DataSource;


/**
 *
 * @author WiKi Kef
 */
public class Serviceagee implements Pagee<agee> {
    
    Connection cnx = DataSource.getInstance().getCnx();
    
    @Override
    public void ajouter(agee t) {
        try {
            String requete = "INSERT INTO agee (id,nom,prenom,age,adresse,id_membre,donation) VALUES (?,?,?,?,?,?,?)";
            PreparedStatement pst = cnx.prepareStatement(requete);
            pst.setInt(1, t.getId());
            pst.setString(2, t.getNom());
            pst.setString(3, t.getPrenom());
            pst.setInt(4, t.getAge());
            pst.setString(5, t.getAdresse());
            pst.setInt(6, t.getId_membre());
            pst.setInt(7, t.getDonation());
            pst.executeUpdate();
            System.out.println("agée ajoutée !");

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public void supprimer(agee t) {
        try {
            String requete = "DELETE FROM agee WHERE id=?";
            PreparedStatement pst = cnx.prepareStatement(requete);
            pst.setInt(1, t.getId());
            pst.executeUpdate();
            System.out.println("agée supprimée !");

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public void modifier(agee t) {
        try {
            String requete = "UPDATE agee SET nom=?,prenom=?,age=?,adresse=?,id_membre=?,donation=? WHERE id=?";
            PreparedStatement pst = cnx.prepareStatement(requete);
            pst.setInt(7, t.getId());
            pst.setString(1, t.getNom());
            pst.setString(2, t.getPrenom());
            pst.setInt(3, t.getAge());
            pst.setString(4, t.getAdresse());
            pst.setInt(5, t.getId_membre());
            pst.setInt(6, t.getDonation());
            pst.executeUpdate();
            System.out.println("agée modifiée !");

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public List<agee> afficher() {
        List<agee> list = new ArrayList<>();

        try {
            String requete = "SELECT * FROM agee";
            PreparedStatement pst = cnx.prepareStatement(requete);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
                list.add(new agee(rs.getInt("id"), rs.getString("nom"), rs.getString("prenom"), rs.getInt("age"), rs.getString("adresse"), rs.getInt("id_membre"), rs.getInt("donation")));
            }

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }

        return list;
    }
    
}
