/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev.entities;

/**
 *
 * @author EliteBook
 */
public class Reservation {

    private long ref;
    private User id_user;
    private Evenement id_evenement;

    public Reservation() {
    }

    public Reservation(long ref, User id_user, Evenement id_evenement) {
        this.ref = ref;
        this.id_user = id_user;
        this.id_evenement = id_evenement;
    }

    public Reservation(User id_user, Evenement id_evenement) {
        this.id_user = id_user;
        this.id_evenement = id_evenement;
    }

    public long getRef() {
        return ref;
    }

    public void setRef(long ref) {
        this.ref = ref;
    }

    public User getId_user() {
        return id_user;
    }

    public void setId_user(User id_user) {
        this.id_user = id_user;
    }

    public Evenement getId_evenement() {
        return id_evenement;
    }

    public void setId_evenement(Evenement id_evenement) {
        this.id_evenement = id_evenement;
    }

    @Override
    public String toString() {
        return "Reservation{" + "ref=" + ref + ", id_user=" + id_user.getId() + ", id_evenement=" + id_evenement.getReference() + '}';
    }

    @Override
    public int hashCode() {
        int hash = 3;
        hash = 17 * hash + (int) (this.ref ^ (this.ref >>> 32));
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
        final Reservation other = (Reservation) obj;
        if (this.ref != other.ref) {
            return false;
        }
        return true;
    }

}
