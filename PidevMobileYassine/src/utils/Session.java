/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package utils;

import entities.User;

/**
 *
 * @author HP
 */
public class Session {
    public static User currentUser;
    
    public static void connect(User user){
        Session.currentUser=user;
    }
    public static void disconnect(){
        Session.currentUser=null;
    }
}
