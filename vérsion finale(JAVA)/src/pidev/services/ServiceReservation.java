/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev.services;

import pidev.interfaces.IReservation;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.logging.Level;
import java.util.logging.Logger;
import pidev.entities.Evenement;
import pidev.entities.Jaime;
import pidev.entities.Reservation;
import pidev.entities.User;
import pidev.utils.DataSource;

/**
 *
 * @author EliteBook
 */
public class ServiceReservation implements IReservation {

    Connection cnx = DataSource.getInstance().getCnx();

    @Override
    public void reserver_Evenement(Evenement e, User u) {

        try {
            //ajouter les reservations
            String query = "INSERT INTO `reservation`(`id_user`,`id_evenement`) VALUES (?,?)";

            ServiceEvenement se = new ServiceEvenement();
            ServiceUser1 su = new ServiceUser1();
            PreparedStatement pst = cnx.prepareStatement(query);
            pst.setLong(1, su.recuperer_user(u));
            pst.setLong(2, se.recuperer_evenement(e));
            //reccuperer le nombre des participants  
            String query2 = "select `nbParticipant` from `evenement` WHERE reference=?  ";
            PreparedStatement st = cnx.prepareStatement(query2);
            st.setLong(1, se.recuperer_evenement(e));
            ResultSet rs = st.executeQuery();

            while (rs.next()) {
                e.setNbParticipant(rs.getInt("nbParticipant"));
                //incrémenter le nombre des participants
                String querry1 = "UPDATE `evenement` SET `nbParticipant` =? WHERE reference=?";
                PreparedStatement pst1 = cnx.prepareStatement(querry1);
                pst1.setInt(1, e.getNbParticipant() + 1);
                pst1.setLong(2, se.recuperer_evenement(e));
                pst1.executeUpdate();
            }

            pst.executeUpdate();
           
            System.out.println("Votre Réservation a été effectuée avec succés ! \n");
        } catch (SQLException ex) {
            System.out.println("erreur lors de la reservation \n " + ex.getMessage());
        }

    }

    @Override
    public void annuler_reservation_Evenement(Evenement e, User u) {

        try {
            Reservation r = new Reservation();
            ServiceEvenement se = new ServiceEvenement();
            ServiceUser1 su = new ServiceUser1();

            //reccuperer le nbre de places dispo
            String query3 = "select `nbParticipant` from `evenement` WHERE reference=? ";
            PreparedStatement st3 = cnx.prepareStatement(query3);
            st3.setLong(1, se.recuperer_evenement(e));
            ResultSet rs3 = st3.executeQuery();
            while (rs3.next()) {
                e.setNbParticipant(rs3.getInt("nbParticipant"));
                System.out.println(e.getNbParticipant());

                //diminuer nbre de place dispo 
                String querry1 = "UPDATE `evenement` SET `nbParticipant` =? WHERE reference=?";
                PreparedStatement pst1 = cnx.prepareStatement(querry1);
                pst1.setInt(1, e.getNbParticipant() - 1);
                pst1.setLong(2, se.recuperer_evenement(e));
                pst1.executeUpdate();
            }
            // System.out.println(v.getNb_place_dispo());
            String query = "DELETE FROM `reservation`WHERE id_user=? and id_evenement=?";
            PreparedStatement pst = cnx.prepareStatement(query);
            pst.setLong(1, su.recuperer_user(u));
            pst.setLong(2, se.recuperer_evenement(e));
            pst.executeUpdate();
            System.out.println("Votre Réservation a été annulée ! \n");
        } catch (SQLException ex) {
            System.out.println("erreur lors de l'annulation \n " + ex.getMessage());

        }

    }

    @Override
    public long recuperer_reservation(Evenement e, User u) {
        long id = -1;
        ArrayList<Reservation> reservations = new ArrayList<Reservation>();
        reservations = this.afficher_Reservation();
        for (int i = 0; i < reservations.size(); i++) {
            if ((reservations.get(i).getId_evenement().getReference() == e.getReference()) && (reservations.get(i).getId_user().getId() == u.getId())) {
                id = reservations.get(i).getRef();
                System.out.println(id);
                break;
            }

        }

        return id;

    }

    @Override
    public ArrayList<Reservation> afficher_Reservation() {

        ArrayList<Reservation> list = new ArrayList<Reservation>();
        String querry = "SELECT * FROM reservation ";
        try {
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(querry);
            Reservation r = new Reservation();
            while (rs.next()) {
               
                list.add(recupereResultatR(rs));
            }
        } catch (SQLException ex) {
            System.out.println("Erreur lors d'extraction des données \n" + ex.getMessage());
        }

        return list;
    }

    @Override
    public void ajouterReservation(Reservation r) {

        ServiceReservation sr = new ServiceReservation();

        try {
            String requete = "INSERT INTO reservation (ref,id_user,id_evenement) VALUES (?,?,?)";
            PreparedStatement pst = cnx.prepareStatement(requete);
            pst.setLong(1, r.getRef());
            pst.setLong(2, r.getId_user().getId());
            pst.setLong(3, r.getId_evenement().getReference());

            pst.executeUpdate();
            System.out.println("Réservation ajoutée avec succés ! \n");
        } catch (SQLException ex) {

            System.out.println("erreur d'ajout \n " + ex.getMessage());

        }

    }

    @Override
    public void supprimerReservation(Reservation r) {
        try {
            String requete = "DELETE FROM reservation WHERE ref=?";
            PreparedStatement pst = cnx.prepareStatement(requete);
            pst.setLong(1, r.getRef());
            pst.executeUpdate();
            System.out.println("Réservation supprimée avec succés  ! \n");
        } catch (SQLException ex) {
            System.out.println("erreur lors de la suppression \n" + ex.getMessage());
        }

    }

    @Override
    public void modifierReservation(Reservation r) {

        try {
            String requete = "UPDATE `reservation` SET `id_user`=?,`id_evenement`=? WHERE `ref`= ? ";

            PreparedStatement pst = cnx.prepareStatement(requete);
            pst.setLong(1, r.getId_user().getId());
            pst.setLong(2, r.getId_evenement().getReference());
            pst.setLong(3, r.getRef());
            pst.executeUpdate();
            System.out.println("Réservation modifié avec succés \n ");
        } catch (SQLException ex) {
            System.out.println("erreur lors de la modification \n " + ex.getMessage());
        }

    }
 public Reservation recupereResultatR(ResultSet x) {
        Reservation r = new Reservation();
        ServiceEvenement s = new ServiceEvenement();
        try {

            r.setRef(x.getInt("ref"));
            r.setId_user(s.retournerUser(x.getLong("id_user")));
            r.setId_evenement(retournerEv(x.getLong("id_evenement")));
           

        } catch (SQLException ex) {

        }

        return r;
    }

  public Evenement retournerEv(long id) {
        try {
            PreparedStatement pt = cnx.prepareStatement("select * from evenement where reference=?");
            pt.setLong(1, id);
            ResultSet rs = pt.executeQuery();
            while (rs.next()) {
                return recupereResultatM(rs);
            }
        } catch (SQLException ex) {

        }
        return null;
    }
    
    public Evenement recupereResultatM(ResultSet x) {
        Evenement q = new Evenement();
        try {
            q.setReference(x.getInt("reference"));

        } catch (SQLException ex) {

        }

        return q;
    }
    public void ajouterJaime(Evenement e,User u) {
         Jaime j =new Jaime();
        ServiceReservation sr = new ServiceReservation();

        try {
            
             ServiceEvenement se = new ServiceEvenement();
            ServiceUser1 su = new ServiceUser1();
            
            String requete = "INSERT INTO jaime (id_user,id_evenement) VALUES (?,?)";
            PreparedStatement pst = cnx.prepareStatement(requete);
            pst.setLong(1, su.recuperer_user(u));
            pst.setLong(2, se.recuperer_evenement(e));

            pst.executeUpdate();
            System.out.println(" ajoutée avec succés ! \n");
        } catch (SQLException ex) {

            System.out.println("erreur d'ajout \n " + ex.getMessage());

        }

    }

    public void supprimerJaime(Evenement e,User u) {
        
        try {
             ServiceEvenement se = new ServiceEvenement();
            ServiceUser1 su = new ServiceUser1();
            
            String requete = "DELETE FROM `jaime`WHERE id_user=? and id_evenement=?";
            PreparedStatement pst = cnx.prepareStatement(requete);
            pst.setLong(1, su.recuperer_user(u));
            pst.setLong(2, se.recuperer_evenement(e));
            pst.executeUpdate();
            System.out.println(" supprimée avec succés  ! \n");
        } catch (SQLException ex) {
            System.out.println("erreur lors de la suppression \n" + ex.getMessage());
        }

    }

 public long recuperer_Jaime(Evenement e, User u) {
        long id = -1;
        ArrayList<Jaime> jaimes = new ArrayList<Jaime>();
        jaimes = this.afficher_Jaime();
        for (int i = 0; i < jaimes.size(); i++) {
            if ((jaimes.get(i).getId_evenement().getReference() == e.getReference()) && (jaimes.get(i).getId_user().getId() == u.getId())) {
                id = jaimes.get(i).getId();
                System.out.println(id);
                break;
            }

        }

        return id;

    }
  public ArrayList<Jaime> afficher_Jaime() {

        ArrayList<Jaime> list = new ArrayList<Jaime>();
        String querry = "SELECT * FROM jaime ";
        try {
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(querry);
            Reservation r = new Reservation();
            while (rs.next()) {
               
                list.add(recupereResultatJ(rs));
            }
        } catch (SQLException ex) {
            System.out.println("Erreur lors d'extraction des données \n" + ex.getMessage());
        }

        return list;
    }
   public Jaime recupereResultatJ(ResultSet x) {
        Jaime j = new Jaime();
        ServiceEvenement s = new ServiceEvenement();
        try {

            j.setId(x.getInt("id"));
            j.setId_user(s.retournerUser(x.getLong("id_user")));
            j.setId_evenement(retournerEv(x.getLong("id_evenement")));
           

        } catch (SQLException ex) {

        }

        return j;
    }

}
