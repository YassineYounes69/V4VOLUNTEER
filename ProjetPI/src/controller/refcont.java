/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package controller;

import connection.MyConnexion;
import entities.Refugies;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.text.ParseException;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author dEll
 */
public class refcont {
    
    Connection cn = MyConnexion.getInstance().getCnx();
    MyConnexion cnx = MyConnexion.getInstance();
    
    public void ajouterRef(Refugies r) throws SQLException, ParseException {

        String req = "INSERT INTO `refugies`(`pays_ref`, `etat_ref`,`nom_ref`,`prenom_ref`, `age_ref`,`gender_ref`, `image`) VALUES (?,?,?,?,?,?,?)";
        PreparedStatement pstm = cn.prepareStatement(req);

        pstm.setString(1, r.getPays_ref());
        pstm.setString(2, r.getEtat_ref());
        pstm.setString(3, r.getNom_ref());
        pstm.setString(4, r.getPrenom_ref());
        pstm.setInt(5, r.getAge_ref());
        pstm.setString(6, r.getGender_ref());
        pstm.setString(7, r.getImage());
        pstm.executeUpdate();

    }
    
    
    public void ajouterRef1(Refugies r) throws SQLException, ParseException {

        String req = "INSERT INTO `refugies`(`pays_ref`, `nom_ref`,`prenom_ref`, `age_ref`,`gender_ref`, `image`) VALUES (?,?,?,?,?,?)";
        PreparedStatement pstm = cn.prepareStatement(req);

        pstm.setString(1, r.getPays_ref());
        pstm.setString(2, r.getNom_ref());
        pstm.setString(3, r.getPrenom_ref());
        pstm.setInt(4, r.getAge_ref());
        pstm.setString(5, r.getGender_ref());
        pstm.setString(6, r.getImage());
        pstm.executeUpdate();

    }

    
     public void ajouterRef11(Refugies r) throws SQLException, ParseException {

        String req = "INSERT INTO `refugies`(`pays_ref`, `nom_ref`,`prenom_ref`, `age_ref`,`gender_ref`) VALUES (?,?,?,?,?)";
        PreparedStatement pstm = cn.prepareStatement(req);

        pstm.setString(1, r.getPays_ref());
        pstm.setString(2, r.getNom_ref());
        pstm.setString(3, r.getPrenom_ref());
        pstm.setInt(4, r.getAge_ref());
        pstm.setString(5, r.getGender_ref());
        pstm.executeUpdate();

    }
    public List<Refugies> afficherRef() throws SQLException {

        List<Refugies> re = new ArrayList<Refugies>();
        String req = "select *  from refugies";
        Statement stm = cn.createStatement();
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {
            Refugies r = new Refugies(rst.getInt("id_ref"),
                     rst.getInt("id_membre"),
                     rst.getString("pays_ref"), 
                     rst.getString("etat_ref"), 
                     rst.getString("nom_ref"),
                     rst.getString("prenom_ref"),
                     rst.getInt("age_ref"),
                     rst.getString("gender_ref"),
                     rst.getString("image"));
            re.add(r);
        }
           return re;
    }
    
    
    public void ModifierRef(Refugies r, int id_ref) throws SQLException {
        String req = "UPDATE refugies SET `pays_ref`='" + r.getPays_ref() + "',`etat_ref`='"
                + r.getEtat_ref()+ "',`nom_ref`='"
                + r.getNom_ref() + "',`prenom_ref`='"
                + r.getPrenom_ref()+ "',`age_ref`='"
                + r.getAge_ref() + "',`gender_ref`='"
                + r.getGender_ref()+ "',`image`='"
                + r.getImage()+ "'WHERE id_ref="+id_ref;
        Statement s = cn.createStatement();
        s.executeUpdate(req);
    }
    
    public void ModifierRef1(Refugies r, int id_ref) throws SQLException {
        String req = "UPDATE refugies SET `pays_ref`='" + r.getPays_ref()+ "',`nom_ref`='"
                + r.getNom_ref() + "',`prenom_ref`='"
                + r.getPrenom_ref()+ "',`age_ref`='"
                + r.getAge_ref() + "',`gender_ref`='"
                + r.getGender_ref()+ "',`image`='"
                + r.getImage()+ "'WHERE id_ref="+id_ref;
        Statement s = cn.createStatement();
        s.executeUpdate(req);
    }

    public void SupprimerRef(int id_ref) throws SQLException {
        String re = "DELETE FROM `refugies` WHERE id_ref="+id_ref;
        Statement stm = cn.createStatement();
        stm.executeUpdate(re);
    }
    
    
}
