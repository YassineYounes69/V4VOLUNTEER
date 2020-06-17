/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;
import Entities.Ngo;
import Entities.Session;
import Entities.User;
import Entities.Volunteer;
import Interfaces.ISessionServices;
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
public class SessionServices implements ISessionServices{
    Connection cnx ;
    Session session = new Session();
    public SessionServices(){
        cnx= DataSource.getInstance().getCnx();
    }
    
    @Override
    public void disconnect() {
        session.setOnline(false);
        session.setOnlineUser(null);
    }

    @Override
    public Object connect(String userName, String pw) {
        int hashedPw = pw.hashCode();
        Object u=null;
        
       
        String req = "select * from fos_user where (username='"+userName+"' AND password='"+hashedPw+"')";
        try {
           
            Statement st = cnx.createStatement();
             ResultSet rs = st.executeQuery(req);
                
               
                if (rs.next()){
                    
                    if (rs.getString("roles").contains("VOLUN")){
                    u = new User();    
                    Volunteer uv = new Volunteer();
                    uv.setId(rs.getInt("id"));
                    uv.setEmail(rs.getString("email"));
                    uv.setUserName(rs.getString("username"));
                    uv.setPw(rs.getString("password"));
                    uv.setVolFName(rs.getString("Prenom"));
                    uv.setVolName(rs.getString("Nom"));
                    uv.setPhoneNumber(rs.getInt("tel"));
                    uv.setVolAdr(rs.getString("addresse"));
                    uv.setMacAdr(rs.getString("macAdr"));
                    uv.setRole("VOLUN");
                    u=uv;
                }
                else
                    if (rs.getString("roles").contains("ASSO")) {
                        u = new User();
                        Ngo un = new Ngo();
                        un.setId(rs.getInt("id"));
                        un.setEmail(rs.getString("email"));
                        un.setUserName(rs.getString("username"));
                        un.setPw(rs.getString("password"));
                        un.setMacAdr(rs.getString("macAdr"));
                        un.setNgoName(rs.getString("Nom"));
                        un.setRole("ASSO");
                        u=un;
                    }
               else
                    if (rs.getString("roles").contains("ADMIN"))
                    {
                        u = new User();
                        User ua = new User();
                        ua.setId(rs.getInt("id"));
                        ua.setEmail(rs.getString("email"));
                        ua.setUserName(rs.getString("username"));
                        ua.setPw(rs.getString("password"));
                        ua.setMacAdr(rs.getString("macAdr"));
                        ua.setRole("ADMIN");
                        u=ua;
                    }
                   
               
                }    
              
        }
        catch (SQLException e){
            Logger.getLogger(Session.class.getName()).log(Level.SEVERE, null, e);
        }
        return u;
    }
}
