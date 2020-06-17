/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;
import Utils.DataSource;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author HP
 */
public class Session {
    Connection cnx ;
    User onlineUser;
    boolean online;

    public Session() {
         cnx= DataSource.getInstance().getCnx();
         this.online=false;
         this.onlineUser=null;
    }

    public User getOnlineUser() {
        return onlineUser;
    }

    public void setOnlineUser(User onlineUser) {
        this.onlineUser = onlineUser;
    }

    public boolean isOnline() {
        return online;
    }

    public void setOnline(boolean online) {
        this.online = online;
    }
    
   
}
