/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package donation;

import Entities.Demande;
import Services.ServiceDemande;
import java.sql.SQLException;

/**
 *
 * @author ASUS-PC
 */
public class test {
    
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) throws SQLException {
        // TODO code application logic here
        
//    DataSource ds = DataSource.getInstance();
//    DataSource ds2 = DataSource.getInstance();
//    DataSource ds3 = DataSource.getInstance();
//
//    System.out.println(ds.hashCode());
//    System.out.println(ds2.hashCode());
//    System.out.println(ds3.hashCode());
        
Demande p = new Demande(94,1,"vetements","hhhhhhhhhhhhhhhhh","uuuuuuuu","yyyyyyyyyyyy");
ServiceDemande ps =new ServiceDemande();
ps.addDemande(p);

//PersonneService ps =new PersonneService();
//ps.afficher();




    }
    
    
}
