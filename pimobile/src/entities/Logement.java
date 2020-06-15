/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entities;

import java.util.Objects;

/**
 *
 * @author dEll
 */
public class Logement {
    
    private int nb__chambre;
    private int id_log;
    private int id_user;
    private String adresse;
    private String etat_log;
    private int id_ref;
    private String nom_log;

    public Logement(int nb__chambre, int id_log, int id_user, String adresse, String etat_log, int id_ref, String nom_log) {
        this.nb__chambre = nb__chambre;
        this.id_log = id_log;
        this.id_user = id_user;
        this.adresse = adresse;
        this.etat_log = etat_log;
        this.id_ref = id_ref;
        this.nom_log = nom_log;
    }

    public Logement() {
    }

    public Logement(int nb__chambre, String adresse, String etat_log, String nom_log) {
        this.nb__chambre = nb__chambre;
        this.adresse = adresse;
        this.etat_log = etat_log;
        this.nom_log = nom_log;
    }

    public Logement(int nb__chambre, String adresse, String nom_log) {
        this.nb__chambre = nb__chambre;
        this.adresse = adresse;
        this.nom_log = nom_log;
    }
    
    
    public int getNb__chambre() {
        return nb__chambre;
    }

    public void setNb__chambre(int nb__chambre) {
        this.nb__chambre = nb__chambre;
    }

    public int getId_log() {
        return id_log;
    }

    public void setId_log(int id_log) {
        this.id_log = id_log;
    }

    public int getId_user() {
        return id_user;
    }

    public void setId_user(int id_user) {
        this.id_user = id_user;
    }

    public String getAdresse() {
        return adresse;
    }

    public void setAdresse(String adresse) {
        this.adresse = adresse;
    }

    public String getEtat_log() {
        return etat_log;
    }

    public void setEtat_log(String etat_log) {
        this.etat_log = etat_log;
    }

    public int getId_ref() {
        return id_ref;
    }

    public void setId_ref(int id_ref) {
        this.id_ref = id_ref;
    }

    public String getNom_log() {
        return nom_log;
    }

    public void setNom_log(String nom_log) {
        this.nom_log = nom_log;
    }

    @Override
    public int hashCode() {
        int hash = 7;
        hash = 97 * hash + this.nb__chambre;
        hash = 97 * hash + this.id_log;
        hash = 97 * hash + this.id_user;
        hash = 97 * hash + Objects.hashCode(this.adresse);
        hash = 97 * hash + Objects.hashCode(this.etat_log);
        hash = 97 * hash + this.id_ref;
        hash = 97 * hash + Objects.hashCode(this.nom_log);
        return hash;
    }

    @Override
    public boolean equals(Object obj) {
        if (this == obj) {
            return true;
        }
        if (obj == null) {
            return false;
        }
        if (getClass() != obj.getClass()) {
            return false;
        }
        final Logement other = (Logement) obj;
        if (this.nb__chambre != other.nb__chambre) {
            return false;
        }
        if (this.id_log != other.id_log) {
            return false;
        }
        if (this.id_user != other.id_user) {
            return false;
        }
        if (this.id_ref != other.id_ref) {
            return false;
        }
        if (!Objects.equals(this.adresse, other.adresse)) {
            return false;
        }
        if (!Objects.equals(this.etat_log, other.etat_log)) {
            return false;
        }
        if (!Objects.equals(this.nom_log, other.nom_log)) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "Logement{" + "nb__chambre=" + nb__chambre + ", id_log=" + id_log + ", id_user=" + id_user + ", adresse=" + adresse + ", etat_log=" + etat_log + ", id_ref=" + id_ref + ", nom_log=" + nom_log + '}';
    }

   
    
    
    
}
