/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev.interfaces;

import java.sql.SQLException;
import pidev.entities.FosUser;

/**
 *
 * @author ASUS-PC
 */
public interface IServiceUser {
    
    public FosUser getUserById(int id) throws SQLException;
    
}
