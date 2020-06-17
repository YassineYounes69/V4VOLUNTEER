/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;

import java.util.Objects;
/**
 *
 * @author WiKi Kef
 */
public class agee {
    private int id;
    private String nom;
    private String prenom;
    private int age;
    private String adresse;
    private int id_membre;
    private int donation;

    public agee(int id, String nom, String prenom, int age, String adresse, int id_membre, int donation) {
        this.id = id;
        this.nom = nom;
        this.prenom = prenom;
        this.age = age;
        this.adresse = adresse;
        this.id_membre = id_membre;
        this.donation = donation;
    }

    public agee(String ahmed) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    public int getId() {
        return id;
    }

    public String getNom() {
        return nom;
    }

    public String getPrenom() {
        return prenom;
    }

    public int getAge() {
        return age;
    }

    public String getAdresse() {
        return adresse;
    }

    public int getId_membre() {
        return id_membre;
    }

    public int getDonation() {
        return donation;
    }

    public void setId(int id) {
        this.id = id;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }

    public void setAge(int age) {
        this.age = age;
    }

    public void setAdresse(String adresse) {
        this.adresse = adresse;
    }

    public void setId_membre(int id_membre) {
        this.id_membre = id_membre;
    }

    public void setDonation(int donation) {
        this.donation = donation;
    }

    @Override
    public int hashCode() {
        int hash = 7;
        hash = 89 * hash + this.id;
        hash = 89 * hash + Objects.hashCode(this.nom);
        hash = 89 * hash + Objects.hashCode(this.prenom);
        hash = 89 * hash + this.age;
        hash = 89 * hash + Objects.hashCode(this.adresse);
        hash = 89 * hash + this.id_membre;
        hash = 89 * hash + this.donation;
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
        final agee other = (agee) obj;
        if (this.id != other.id) {
            return false;
        }
        if (this.age != other.age) {
            return false;
        }
        if (this.id_membre != other.id_membre) {
            return false;
        }
        if (this.donation != other.donation) {
            return false;
        }
        if (!Objects.equals(this.nom, other.nom)) {
            return false;
        }
        if (!Objects.equals(this.prenom, other.prenom)) {
            return false;
        }
        return Objects.equals(this.adresse, other.adresse);
    }

    @Override
    public String toString() {
        return "agee{" + "id=" + id + ", nom=" + nom + ", prenom=" + prenom + ", age=" + age + ", adresse=" + adresse + ", id_membre=" + id_membre + ", donation=" + donation + '}';
    }

}
