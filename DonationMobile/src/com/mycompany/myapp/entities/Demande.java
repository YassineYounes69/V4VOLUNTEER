/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.entities;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



public class Demande {


    private Integer id;

    private String typeDemande;

    private int etatDemande;

    private String descriptionDemande;

    private String titreDemande;

    private String photoDemande;



    public Demande() {
    }

    public Demande(Integer id) {
        this.id = id;
    }

    public Demande(Integer id, int etatDemande,String typeDemande, String descriptionDemande, String titreDemande, String photoDemande) {
        this.id = id;
        this.etatDemande = etatDemande;
        this.typeDemande = typeDemande;
        this.descriptionDemande = descriptionDemande;
        this.titreDemande = titreDemande;
        this.photoDemande = photoDemande;
    }

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getTypeDemande() {
        return typeDemande;
    }

    public void setTypeDemande(String typeDemande) {
        this.typeDemande = typeDemande;
    }

    public int getEtatDemande() {
        return etatDemande;
    }

    public void setEtatDemande(int etatDemande) {
        this.etatDemande = etatDemande;
    }

    public String getDescriptionDemande() {
        return descriptionDemande;
    }

    public void setDescriptionDemande(String descriptionDemande) {
        this.descriptionDemande = descriptionDemande;
    }

    public String getTitreDemande() {
        return titreDemande;
    }

    public void setTitreDemande(String titreDemande) {
        this.titreDemande = titreDemande;
    }

    public String getPhotoDemande() {
        return photoDemande;
    }

    public void setPhotoDemande(String photoDemande) {
        this.photoDemande = photoDemande;
    }



    @Override
    public int hashCode() {
        int hash = 0;
        hash += (id != null ? id.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Demande)) {
            return false;
        }
        Demande other = (Demande) object;
        if ((this.id == null && other.id != null) || (this.id != null && !this.id.equals(other.id))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "Entities.Demande[ id=" + id + titreDemande + "....." + typeDemande +" ]";
    }
    
}
