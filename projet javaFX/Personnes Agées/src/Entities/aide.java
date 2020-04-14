/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;

/**
 *
 * @author WiKi Kef
 */
public class aide {
    private int id;
    private int id_user;
    private int id_PA;
    private int donation;

    public aide(int id, int id_user, int id_PA, int donation) {
        this.id = id;
        this.id_user = id_user;
        this.id_PA = id_PA;
        this.donation = donation;
    }

    public aide(String string) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
    public int getId() {
        return id;
    }

    public int getId_user() {
        return id_user;
    }

    public int getId_PA() {
        return id_PA;
    }

    public int getDonation() {
        return donation;
    }

    public void setId(int id) {
        this.id = id;
    }

    public void setId_user(int id_user) {
        this.id_user = id_user;
    }

    public void setId_PA(int id_PA) {
        this.id_PA = id_PA;
    }

    public void setDonation(int donation) {
        this.donation = donation;
    }

    @Override
    public int hashCode() {
        int hash = 7;
        hash = 59 * hash + this.id;
        hash = 59 * hash + this.id_user;
        hash = 59 * hash + this.id_PA;
        hash = 59 * hash + this.donation;
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
        final aide other = (aide) obj;
        if (this.id != other.id) {
            return false;
        }
        if (this.id_user != other.id_user) {
            return false;
        }
        if (this.id_PA != other.id_PA) {
            return false;
        }
        return this.donation == other.donation;
    }

    @Override
    public String toString() {
        return "aide{" + "id=" + id + ", id_user=" + id_user + ", id_PA=" + id_PA + ", donation=" + donation + '}';
    }
     
}
