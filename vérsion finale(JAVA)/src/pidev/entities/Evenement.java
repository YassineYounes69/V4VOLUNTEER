/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev.entities;

import java.util.Objects;

/**
 *
 * @author EliteBook
 */
public class Evenement {

    private long reference;
    private User id_membre;
    private String nom;
    private String description;
    private String date;
    private int capacite;
    private float prix;
    private int nbParticipant;
    private String lieu;
    private String createur;
    private String image;

   
    public Evenement() {
    }

    public Evenement(User id_membre, String nom, String description, String date, int capacite, float prix, int nbParticipant, String lieu, String createur, String image) {
        this.id_membre = id_membre;
        this.nom = nom;
        this.description = description;
        this.date = date;
        this.capacite = capacite;
        this.prix = prix;
        this.nbParticipant = nbParticipant;
        this.lieu = lieu;
        this.createur = createur;
        this.image = image;
    }
    
    public Evenement(long reference, User id_membre, String nom, String description, String date, int capacite, float prix, int nbParticipant, String lieu, String createur) {
        this.reference = reference;
        this.id_membre = id_membre;
        this.nom = nom;
        this.description = description;
        this.date = date;
        this.capacite = capacite;
        this.prix = prix;
        this.nbParticipant = nbParticipant;
        this.lieu = lieu;
        this.createur = createur;
    }

    public Evenement(long reference, String nom, String description, String date, int capacite, float prix, int nbParticipant, String lieu, String createur) {
        this.reference = reference;
        this.nom = nom;
        this.description = description;
        this.date = date;
        this.capacite = capacite;
        this.prix = prix;
        this.nbParticipant = nbParticipant;
        this.lieu = lieu;
        this.createur = createur;
    }

    public Evenement(String nom, String description, String date, int capacite, float prix, int nbParticipant, String lieu, String createur) {

        this.nom = nom;
        this.description = description;
        this.date = date;
        this.capacite = capacite;
        this.prix = prix;
        this.nbParticipant = nbParticipant;
        this.lieu = lieu;
        this.createur = createur;
    }

   
 public Evenement(String nom, String description, String date, int capacite, float prix, String lieu,String image) {

        this.nom = nom;
        this.description = description;
        this.date = date;
        this.capacite = capacite;
        this.prix = prix;
        this.lieu = lieu;
        this.image = image;
        this.nbParticipant = 0;
        

    }

    public Evenement(long reference, String nom, String description,String lieu, String createur) {
                this.createur = createur;

        this.reference = reference;
        this.description = description;
        this.nom = nom;
        this.lieu = lieu;
    }
    public long getReference() {
        return reference;
    }

    public void setReference(long reference) {
        this.reference = reference;
    }

    public User getId_membre() {
        return id_membre;
    }

    public void setId_membre(User id_membre) {
        this.id_membre = id_membre;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getDate() {
        return date;
    }

    public void setDate(String date) {
        this.date = date;
    }

    public int getCapacite() {
        return capacite;
    }

    public void setCapacite(int capacite) {
        this.capacite = capacite;
    }

    public float getPrix() {
        return prix;
    }

    public void setPrix(float prix) {
        this.prix = prix;
    }

    public int getNbParticipant() {
        return nbParticipant;
    }

    public void setNbParticipant(int nbParticipant) {
        this.nbParticipant = nbParticipant;
    }

    public String getLieu() {
        return lieu;
    }

    public void setLieu(String lieu) {
        this.lieu = lieu;
    }

    public String getCreateur() {
        return createur;
    }

    public void setCreateur(String createur) {
        this.createur = createur;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public String getImage() {
        return image;
    }

    @Override
    public String toString() {
        return "{"+ "reference=" + reference +", nom=" + nom + ", date=" + date + '}';
    }
    
    @Override
    public int hashCode() {
        int hash = 7;
        hash = 67 * hash + (int) (this.reference ^ (this.reference >>> 32));
        hash = 67 * hash + Objects.hashCode(this.nom);
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
        final Evenement other = (Evenement) obj;
        if (this.reference != other.reference) {
            return false;
        }
        if (!Objects.equals(this.nom, other.nom)) {
            return false;
        }
        if (!Objects.equals(this.description, other.description)) {
            return false;
        }
        return true;
    }

}
