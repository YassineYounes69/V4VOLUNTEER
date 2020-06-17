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
public class Volunteer extends User{
    String volName;
    String volFName;
    String volAdr;
    int phoneNumber;

    public Volunteer(String volName, String volFName, String volAdr, int phoneNumber, String userName, String email, boolean enabled, String pw,String role) {
        super(userName, email, enabled, pw,role);
        this.volName = volName;
        this.volFName = volFName;
        this.volAdr = volAdr;
        this.phoneNumber = phoneNumber;
    }
    
    public Volunteer(){
        
    }

    public String getVolName() {
        return volName;
    }

    public void setVolName(String volName) {
        this.volName = volName;
    }

    public String getVolFName() {
        return volFName;
    }

    public void setVolFName(String volFName) {
        this.volFName = volFName;
    }

    public String getVolAdr() {
        return volAdr;
    }

    public void setVolAdr(String volAdr) {
        this.volAdr = volAdr;
    }

    public int getPhoneNumber() {
        return phoneNumber;
    }

    public void setPhoneNumber(int phoneNumber) {
        this.phoneNumber = phoneNumber;
    }
    
    
    
}
