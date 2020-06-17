/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev.interfaces;

import java.util.ArrayList;
import pidev.entities.Evenement;
import pidev.entities.User;

/**
 *
 * @author EliteBook
 */
public interface IEvenement {
   
    public void ajouterEvenement(Evenement e,User u);
    public void supprimerEvenement(Evenement e);
    public void modifierEvenement(Evenement e);   
    public ArrayList<Evenement> afficherEvenement();
    public long recuperer_evenement(Evenement e) ;


}
