/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package controller;

import connection.MyConnexion;
import entities.Logement;
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
public class logcont {
    
    Connection cn = MyConnexion.getInstance().getCnx();
    MyConnexion cnx = MyConnexion.getInstance();

    /*public void ajouterLog(Logement lo) throws SQLException, ParseException {

        String req = "INSERT INTO `logement`(`nb__chambre`, `id_log`,`id_user`,`adresse`, `etat_log`,`id_ref`, `nom_log`) VALUES (?,?,?,?,?,?,?)";
        PreparedStatement pstm = cn.prepareStatement(req);

        pstm.setInt(1, lo.getNb__chambre());
        pstm.setInt(2, lo.getId_log());
        pstm.setInt(3, lo.getId_user());
        pstm.setString(4, lo.getAdresse());
        pstm.setString(5, lo.getEtat_log());
        pstm.setInt(6, lo.getId_ref());
        pstm.setString(7, lo.getNom_log());
        pstm.executeUpdate();

    }*/

    /*public void ajouterLog1(Logement lo) throws SQLException, ParseException {

        String req = "INSERT INTO `logement`(`nb__chambre`,`id_log`, `adresse`, `etat_log`,`nom_log`) VALUES (?,?,?,?,?)";
        PreparedStatement pstm = cn.prepareStatement(req);

        pstm.setInt(1, lo.getNb__chambre());
        pstm.setInt(2, lo.getId_log());
        pstm.setString(3, lo.getAdresse());
        pstm.setString(4, lo.getEtat_log());
        pstm.setString(5, lo.getNom_log());
        pstm.executeUpdate();

    }*/

   /* public void ajouterLog2(Logement lo) throws SQLException, ParseException {

        String req = "INSERT INTO `logement`(`nb__chambre`, `adresse`, `etat_log`,`nom_log`) VALUES (?,?,?,?)";
        PreparedStatement pstm = cn.prepareStatement(req);

        pstm.setInt(1, lo.getNb__chambre());
        pstm.setString(2, lo.getAdresse());
        pstm.setString(3, lo.getEtat_log());
        pstm.setString(4, lo.getNom_log());
        pstm.executeUpdate();

    }*/
    
    public void ajouterLog(Logement lo) throws SQLException, ParseException {

        String req = "INSERT INTO `logement`(`nb__chambre`, `adresse`, `nom_log`) VALUES (?,?,?)";
        PreparedStatement pstm = cn.prepareStatement(req);

        pstm.setInt(1, lo.getNb__chambre());
        pstm.setString(2, lo.getAdresse());
        pstm.setString(3, lo.getNom_log());
        pstm.executeUpdate();

    }

    public List<Logement> afficherLog() throws SQLException {

        List<Logement> lo = new ArrayList<Logement>();
        String req = "select *  from logement";
        Statement stm = cn.createStatement();
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {
            Logement l;
            l = new Logement(rst.getInt("nb__chambre"),
                    rst.getInt("id_log"),
                    rst.getInt("id_user"),
                    rst.getString("adresse"),
                    rst.getString("etat_log"),
                    rst.getInt("id_ref"),
                    rst.getString("nom_log"));
                    lo.add(l);
        }
         return lo;
    }

    public void ModifierLog(Logement l, int id) throws SQLException {
        String req = "UPDATE logement SET `nb__chambre`='" + l.getNb__chambre() + "',`adresse`='"
                + l.getAdresse() + "',`nom_log`='"
                + l.getNom_log() + "'WHERE id_log="+id;
        Statement s = cn.createStatement();
        s.executeUpdate(req);
    }
     
    
    
    
    public void SupprimerLog(int id_log) throws SQLException {
        String re = "DELETE FROM `logement` WHERE id_log="+id_log;
        Statement stm = cn.createStatement();
        stm.executeUpdate(re);
    }

    

    
}
