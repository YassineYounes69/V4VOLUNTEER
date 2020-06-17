/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Interfaces;

import Entities.User;
import java.sql.Connection;

/**
 *
 * @author HP
 */
public interface ISessionServices {
     public void disconnect();
    
    public Object connect(String userName,String pw);
}
