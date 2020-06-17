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
import pidev.entities.aide;
import pidev.interfaces.Paide;
import pidev.utils.DataSource;

/**
 *
 * @author WiKi Kef
 */
public class Serviceaide implements Paide<aide> {
     
    Connection cnx = DataSource.getInstance().getCnx();
    
    @Override
    public void ajouter(aide t) {
        try {
            String requete = "INSERT INTO aide (id,id_user,id_PA,donation) VALUES (?,?,?,?)";
            PreparedStatement pst = cnx.prepareStatement(requete);
            pst.setInt(1, t.getId());
            pst.setInt(2, t.getId_user());
            pst.setInt(3, t.getId_PA());
            pst.setInt(4, t.getDonation());
            pst.executeUpdate();
            System.out.println("aide ajoutée !");

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public void supprimer(aide t) {
         try {
            String requete = "DELETE FROM aide WHERE id=?";
            PreparedStatement pst = cnx.prepareStatement(requete);
            pst.setInt(1, t.getId());
            pst.executeUpdate();
            System.out.println("aide supprimée !");

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public void modifier(aide t) {
        try {
            String requete = "UPDATE aide SET id_user=?,id_PA=?,donation=? WHERE id=?";
            PreparedStatement pst = cnx.prepareStatement(requete);
            pst.setInt(4, t.getId());
            pst.setInt(1, t.getId_user());
            pst.setInt(2, t.getId_PA());
            pst.setInt(3, t.getDonation());
            pst.executeUpdate();
            System.out.println("aide modifiée !");

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public List<aide> afficher() {
      List<aide> list = new ArrayList<>();

        try {
            String requete = "SELECT * FROM aide";
            PreparedStatement pst = cnx.prepareStatement(requete);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
                list.add(new aide(rs.getInt("id"), rs.getInt("id_user"), rs.getInt("id_PA"), rs.getInt("donation")));
            }

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }

        return list;  
    }
    
    public int sommeDonnation() {

        int somme=0;
        try {
            String requete = "SELECT sum(donation) FROM aide";
            PreparedStatement pst = cnx.prepareStatement(requete);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
             somme=rs.getInt(1);
            }

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }

        return somme;  
    }
    
}
