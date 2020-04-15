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
public class Refugies {
    
    private int id_ref ;
    private int id_membere ;
    private String pays_ref ;
    private String etat_ref ;
    private String nom_ref ;
    private String prenom_ref ;
    private int age_ref ;
    private String gender_ref ;
    private String image ;

    public Refugies(String pays_ref, String nom_ref, String prenom_ref, int age_ref, String gender_ref) {
        this.pays_ref = pays_ref;
        this.nom_ref = nom_ref;
        this.prenom_ref = prenom_ref;
        this.age_ref = age_ref;
        this.gender_ref = gender_ref;
    }

    public Refugies(int id_ref, int id_membere, String pays_ref, String etat_ref, String nom_ref, String prenom_ref, int age_ref, String gender_ref, String image) {
        this.id_ref = id_ref;
        this.id_membere = id_membere;
        this.pays_ref = pays_ref;
        this.etat_ref = etat_ref;
        this.nom_ref = nom_ref;
        this.prenom_ref = prenom_ref;
        this.age_ref = age_ref;
        this.gender_ref = gender_ref;
        this.image = image;
    }

    public Refugies(String pays_ref, String etat_ref, String nom_ref, String prenom_ref, int age_ref, String gender_ref, String image) {
        this.pays_ref = pays_ref;
        this.etat_ref = etat_ref;
        this.nom_ref = nom_ref;
        this.prenom_ref = prenom_ref;
        this.age_ref = age_ref;
        this.gender_ref = gender_ref;
        this.image = image;
    }

    public Refugies(String pays_ref, String nom_ref, String prenom_ref, int age_ref, String gender_ref, String image) {
        this.pays_ref = pays_ref;
        this.nom_ref = nom_ref;
        this.prenom_ref = prenom_ref;
        this.age_ref = age_ref;
        this.gender_ref = gender_ref;
        this.image = image;
    }

    
    
    
    public Refugies() {
    }

    public int getId_ref() {
        return id_ref;
    }

    public void setId_ref(int id_ref) {
        this.id_ref = id_ref;
    }

    public int getId_membere() {
        return id_membere;
    }

    public void setId_membere(int id_membere) {
        this.id_membere = id_membere;
    }

    public String getPays_ref() {
        return pays_ref;
    }

    public void setPays_ref(String pays_ref) {
        this.pays_ref = pays_ref;
    }

    public String getEtat_ref() {
        return etat_ref;
    }

    public void setEtat_ref(String etat_ref) {
        this.etat_ref = etat_ref;
    }

    public String getNom_ref() {
        return nom_ref;
    }

    public void setNom_ref(String nom_ref) {
        this.nom_ref = nom_ref;
    }

    public String getPrenom_ref() {
        return prenom_ref;
    }

    public void setPrenom_ref(String prenom_ref) {
        this.prenom_ref = prenom_ref;
    }

    public int getAge_ref() {
        return age_ref;
    }

    public void setAge_ref(int age_ref) {
        this.age_ref = age_ref;
    }

    public String getGender_ref() {
        return gender_ref;
    }

    public void setGender_ref(String gender_ref) {
        this.gender_ref = gender_ref;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    @Override
    public int hashCode() {
        int hash = 5;
        hash = 23 * hash + this.id_ref;
        hash = 23 * hash + this.id_membere;
        hash = 23 * hash + Objects.hashCode(this.pays_ref);
        hash = 23 * hash + Objects.hashCode(this.etat_ref);
        hash = 23 * hash + Objects.hashCode(this.nom_ref);
        hash = 23 * hash + Objects.hashCode(this.prenom_ref);
        hash = 23 * hash + this.age_ref;
        hash = 23 * hash + Objects.hashCode(this.gender_ref);
        hash = 23 * hash + Objects.hashCode(this.image);
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
        final Refugies other = (Refugies) obj;
        if (this.id_ref != other.id_ref) {
            return false;
        }
        if (this.id_membere != other.id_membere) {
            return false;
        }
        if (this.age_ref != other.age_ref) {
            return false;
        }
        if (!Objects.equals(this.pays_ref, other.pays_ref)) {
            return false;
        }
        if (!Objects.equals(this.etat_ref, other.etat_ref)) {
            return false;
        }
        if (!Objects.equals(this.nom_ref, other.nom_ref)) {
            return false;
        }
        if (!Objects.equals(this.prenom_ref, other.prenom_ref)) {
            return false;
        }
        if (!Objects.equals(this.gender_ref, other.gender_ref)) {
            return false;
        }
        if (!Objects.equals(this.image, other.image)) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "Refugies{" + "id_ref=" + id_ref + ", id_membere=" + id_membere + ", pays_ref=" + pays_ref + ", etat_ref=" + etat_ref + ", nom_ref=" + nom_ref + ", prenom_ref=" + prenom_ref + ", age_ref=" + age_ref + ", gender_ref=" + gender_ref + ", image=" + image + '}';
    }
    
    
    
    
}
