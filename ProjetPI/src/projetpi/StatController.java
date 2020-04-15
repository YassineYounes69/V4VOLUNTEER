/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projetpi;

import connection.MyConnexion;
import controller.refcont;
import entities.Refugies;
import java.net.URL;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.Scene;
import javafx.scene.chart.PieChart;
import static sun.java2d.loops.SurfaceType.Custom;

/**
 * FXML Controller class
 *
 * @author dEll
 */
public class StatController implements Initializable {

    @FXML
    private PieChart pieChart;
    
    private ObservableList data;
    


    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        
        /* try {
            Stat();
            // TODO
            } catch (SQLException ex) {
            Logger.getLogger(StatController.class.getName()).log(Level.SEVERE, null, ex);
            }*/
        
        
        try {
            
            statref();
        } catch (SQLException ex) {
            Logger.getLogger(StatController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
    }    
    
    
    
  
   
    
    
    public void statref() throws SQLException{
    
    
        buildata();
        pieChart.setData(data);
              
 
    }
    
    
    public void buildata() throws SQLException{
    
    Connection cn = MyConnexion.getInstance().getCnx();
    
     data = FXCollections.observableArrayList();
    
     /*String SQL="  select\n" +
                "  m1.id_ref,\n" +
                "  m1.pays_ref,\n" +
                "  m2.c\n" +
                "  from\n" +
                "  refugies m1\n" +
                "  join (SELECT pays_ref, COUNT(pays_ref) as c FROM refugies GROUP BY pays_ref) m2\n" +
                "  on (m1.pays_ref = m2.pays_ref)";*/
     /*String SQL="SELECT pays_ref, COUNT(*) \n" +
                "FROM refugies \n" +
                "GROUP BY pays_ref";*/
        String SQL ="select pays_ref,count(pays_ref) from refugies group BY pays_ref ";
        System.out.println(SQL);
        Statement stm = cn.createStatement();
        ResultSet rst = stm.executeQuery(SQL);
    
            while(rst.next()){
                
                //data.add(new PieChart.Data(rst.getString(2),rst.getDouble(1)));
                data.add(new PieChart.Data(rst.getString(1),rst.getDouble(2)));
            }
         pieChart.setData(data);
    }
    
    
    
    
    /*public  void output(String[] args) throws SQLException {
                        refcont ref = new refcont();

		ArrayList<Refugies> list ;
                list = (ArrayList<Refugies>) ref.afficherRef();

		Map<String, Integer> frequencyMap = new HashMap<>();
		for (Refugies s: list) {
			Integer count = frequencyMap.get(s.getPays_ref());
			if (count == null)
				count = 0;

			frequencyMap.put(s.toString(), count + 1);
		}

		for (Map.Entry<String, Integer> entry : frequencyMap.entrySet()) {
			System.out.println(entry.getKey() + ": " + entry.getValue());
		}
	}
*/
    
    }

    

