/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entities;

/**
 *
 * @author HP
 */
public class UserY {
    private int id,phoneNumber;
    private String username,email,pw,role,prenom,nom,nomAssoc;
    private boolean enabled;

    public UserY(int phoneNumber, String username, String email, String pw,String role) {
        this.phoneNumber = phoneNumber;
        this.username = username;
        this.email = email;
        this.pw = pw;
        this.role = role;
    }

    public UserY() {
        
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getUsername() {
        return username;
    }

    public void setUsername(String username) {
        this.username = username;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getPw() {
        return pw;
    }

    public void setPw(String pw) {
        this.pw = pw;
    }

    public boolean isEnabled() {
        return enabled;
    }

    public void setEnabled(boolean enabled) {
        this.enabled = enabled;
    }

    public int getPhoneNumber() {
        return phoneNumber;
    }

    public void setPhoneNumber(int phoneNumber) {
        this.phoneNumber = phoneNumber;
    }

    @Override
    public String toString() {
        return "User{" + "id=" + id + ", phoneNumber=" + phoneNumber + ", username=" + username + ", email=" + email + ", pw=" + pw + ", role=" + role + ", enabled=" + enabled + '}';
    }

    public String getRole() {
        return role;
    }

    public void setRole(String role) {
        this.role = role;
    }

    public String getPrenom() {
        return prenom;
    }

    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getNomAssoc() {
        return nomAssoc;
    }

    public void setNomAssoc(String nomAssoc) {
        this.nomAssoc = nomAssoc;
    }
    
    
   
    
}
