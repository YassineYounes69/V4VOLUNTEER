/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;

/**
 *
 * @author HP
 */
public class User {
   //General attributes
    int id;
    String userName;
    String email;
    boolean enabled;
    String pw;
    String role;
    String macAdr;

    public String getRole() {
        return role;
    }

    public void setRole(String role) {
        this.role = role;
    }

    public String getMacAdr() {
        return macAdr;
    }

    public void setMacAdr(String macAdr) {
        this.macAdr = macAdr;
    }

    public User(String userName, String email, boolean enabled, String pw, String role) {
        this.userName = userName;
        this.email = email;
        this.enabled = enabled;
        this.pw = pw;
        this.role=role;
    }

    public User() {
      
    }

  

    public String getUserName() {
        return userName;
    }

    public void setUserName(String userName) {
        this.userName = userName;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public boolean isEnabled() {
        return enabled;
    }

    public void setEnabled(boolean enabled) {
        this.enabled = enabled;
    }

    public String getPw() {
        return pw;
    }

    public void setPw(String pw) {
        this.pw = pw;
    }

    @Override
    public String toString() {
        return "User{" + "userName=" + userName + ", email=" + email + '}';
    }

    public void setId(int id) {
        this.id=id;
    }
    
    public int getId(){
        return this.id;
    }
    
}
