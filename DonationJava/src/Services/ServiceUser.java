/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;

import Entities.FosUser;
import Interfaces.IServiceUser;
import Utils.DataSource;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

/**
 *
 * @author ASUS-PC
 */
public class ServiceUser implements IServiceUser {
    
    Connection cnx;
    
    public ServiceUser() {
        cnx = DataSource.getInstance().getCnx();
    }

    public FosUser getUserById(int id) throws SQLException {
        Statement stm = cnx.createStatement();
        String query = "select * from `fos_user` where id= '"+id+"'";
        ResultSet rst = stm.executeQuery(query);
        
        FosUser a2 = new FosUser();
        
        while (rst.next()) {
            
            a2.setId(rst.getInt("id"));
            a2.setUsername(rst.getString("username"));
            a2.setUsernameCanonical(rst.getString("username_canonical"));
            a2.setEmail(rst.getString("email"));
            a2.setEmailCanonical(rst.getString("email_canonical"));
            a2.setEnabled(rst.getBoolean("enabled"));   
            a2.setSalt(rst.getString("salt"));
            a2.setPassword(rst.getString("password"));
            a2.setLastLogin(rst.getDate("last_login"));
            a2.setPasswordRequestedAt(rst.getDate("password_requested_at"));
            a2.setRoles(rst.getString("roles"));  
            a2.setNom(rst.getString("Nom"));
            a2.setPrenom(rst.getString("Prenom"));   
            a2.setTel(rst.getInt("tel"));
            a2.setAddresse(rst.getString("addresse"));
            a2.setCodePostal(rst.getInt("code_postal"));
            a2.setPays(rst.getString("pays"));
            a2.setConfirmationToken(rst.getString("confirmation_token"));
            

        }
     return a2;     }
    
}
