/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev.services;

import java.util.ArrayList;
import pidev.entities.Evenement;
import pidev.entities.Reservation;
import pidev.entities.User;

/**
 *
 * @author EliteBook
 */
public interface IReservation {

    public void reserver_Evenement(Evenement e, User u);

    public void annuler_reservation_Evenement(Evenement e, User u);

    public long recuperer_reservation(Evenement e, User u);

    public ArrayList<Reservation> afficher_Reservation();

    public void ajouterReservation(Reservation r);

    public void supprimerReservation(Reservation r);

    public void modifierReservation(Reservation r);

}
