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
public class Ngo extends User{
    String ngoName;

    public Ngo(String ngoName, int id, String userName, String email, boolean enabled, String pw,String role) {
        super(userName, email, enabled, pw,role);
        this.ngoName = ngoName;
    }

    public Ngo() {
        
    }
    
    
    
    public String getNgoName() {
        return ngoName;
    }

    public void setNgoName(String ngoName) {
        this.ngoName = ngoName;
    }
    
    
}
