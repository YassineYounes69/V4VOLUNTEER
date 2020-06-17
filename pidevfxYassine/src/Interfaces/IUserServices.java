/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Interfaces;

import Entities.User;
import java.util.List;

/**
 *
 * @author HP
 */
     public interface IUserServices {
     public void newUser(User u,String act);
     public void deluserById(int id);
     public List<User> listUsers();
     public void enableUserByMail(String recipient);
     public void updateEmail(String mail,int id);
     public void updatepw(String pw,int id);
     public void updateUN(String un,int id);
     public void updateAdr(String adr,int id);
     public void updatePhone(int phone,int id);
     public void updateMacAdr(String macAddr,int id);
     public void updateNgoName(String name,int id);
     
     
}
