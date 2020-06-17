/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;

import com.codename1.io.ConnectionRequest;
import entities.Refugies;
import java.util.ArrayList;

/**
 *
 * @author dEll
 */
public class Refserv {
    
    public ArrayList<Refugies> tasks;
    public static Refserv instance=null;
    public boolean resultOK;
    private ConnectionRequest req;
    
    
    private Refserv() {
         req = new ConnectionRequest();
    }
    
    public static Refserv getInstance() {
        if (instance == null) {
            instance = new Refserv();
        }
        return instance;
    }
    
    
    
}
