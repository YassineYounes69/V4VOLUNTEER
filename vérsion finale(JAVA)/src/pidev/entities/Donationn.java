/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev.entities;

public class Donationn {

   
    private Integer id;
    private String typeDonation;
  
    private int etatDonation;
   
    private int quantiteDonation;
    
    private int demandeId;

    private int userId;

    public Donationn() {
    }

    public Donationn(Integer id) {
        this.id = id;
    }

    public Donationn(Integer id, int demandeId, int userId, int etatDonation, int quantiteDonation, String typeDonation) {
        this.id = id;
        this.etatDonation = etatDonation;
        this.quantiteDonation = quantiteDonation;
        this.demandeId = demandeId;
        this.userId = userId;
        this.typeDonation = typeDonation;
    }

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getTypeDonation() {
        return typeDonation;
    }

    public void setTypeDonation(String typeDonation) {
        this.typeDonation = typeDonation;
    }

    public int getEtatDonation() {
        return etatDonation;
    }

    public void setEtatDonation(int etatDonation) {
        this.etatDonation = etatDonation;
    }

    public int getQuantiteDonation() {
        return quantiteDonation;
    }

    public void setQuantiteDonation(int quantiteDonation) {
        this.quantiteDonation = quantiteDonation;
    }

    public int getDemandeId() {
        return demandeId;
    }

    public void setDemandeId(int demandeId) {
        this.demandeId = demandeId;
    }

    public int getUserId() {
        return userId;
    }

    public void setUserId(int userId) {
        this.userId = userId;
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
        if (!(object instanceof Donationn)) {
            return false;
        }
        Donationn other = (Donationn) object;
        if ((this.id == null && other.id != null) || (this.id != null && !this.id.equals(other.id))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "Entities.Donation[ id=" + id + " ]";
    }


}
