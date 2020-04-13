/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev.services;

import java.io.File;
import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.Calendar;
import java.util.Date;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import pidev.entities.Evenement;
import pidev.entities.SendHTMLEmail;
import pidev.entities.User;
import pidev.utils.DataSource;

/**
 *
 * @author EliteBook
 */
public class ServiceEvenement implements IEvenement {

    Connection cnx = DataSource.getInstance().getCnx();

    private String getExtension(File f) {
        return f.getName().substring(f.getName().lastIndexOf(".") + 1);
    }

    public void sendEmail(User c) {
        String host = "smtp.gmail.com";
        String port = "587";
        String mailFrom = "mrejeb114@gmail.com";
        String password = "PAOLOcorleone123";

        // outgoing message information
        String mailTo = c.getEmail();
        String subject = "Validating email registration";

        // message contains HTML markups
        String message = "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">	\n"
                + "		<tr>\n"
                + "			<td style=\"padding: 10px 0 30px 0;\">\n"
                + "				<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"border: 1px solid #cccccc; border-collapse: collapse;\">\n"
                + "					<tr>\n"
                + "						<td align=\"center\" bgcolor=\"#5770c2\" style=\"padding: 40px 0 30px 0; color: #153643; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;\">\n"
                + "							<img src=\"https://image.ibb.co/iL1HQf/registration.png\" alt=\"registration\" width=\"400\" height=\"225\" style=\"display: block;\" />\n"
                + "						</td>\n"
                + "					</tr>\n"
                + "					<tr>\n"
                + "						<td bgcolor=\"#ffffff\" style=\"padding: 40px 30px 40px 30px;\">\n"
                + "							<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
                + "								<tr>\n"
                + "									<td style=\"color: #153643; font-family: Arial, sans-serif; font-size: 24px;\">\n"
                + "										<b>Thank you for subscribing!</b>\n"
                + "									</td>\n"
                + "								</tr>\n"
                + "								<tr>\n"
                + "									<td style=\"padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;\">\n"
                + "										You have been successfuly registred on our events , Thank you for supporting us charity activities.\n"
                + "                                                                                we hope you will enjoy your stay with us .\n"
                + "									</td>\n"
                + "								</tr>\n"
                + "                                <tr>\n"
                + "                                    <td style=\"text-align: center; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;\">\n"
                + "                                        Booking for: <br>\n"
                + c.getNom() + "<br><br>\n"
                + "                                    </td>\n"
                + "                                </tr>\n"
                + "								<tr>\n"
                + "									<td>\n"
                + "										<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
                + "											<tr>\n"
                + "												<td width=\"260\" valign=\"top\">\n"
                + "													<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
                + "														<tr>\n"
                + "															<td>\n"
                + "																<img src=\"https://image.ibb.co/dtxDy0/left1.png\" alt=\"\" width=\"100%\" height=\"140\" style=\"display: block;\" />\n"
                + "															</td>\n"
                + "														</tr>\n"
                + "														<tr>\n"
                + "															<td style=\"padding: 25px 0 0 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px; text-align: justify;\">\n"
                + "																You can already use our mobile app for better experience by downloading it from \n"
                + "                                                                AppStore for iOs devices or PlayStore for Android version.\n"
                + "															</td>\n"
                + "														</tr>\n"
                + "													</table>\n"
                + "												</td>\n"
                + "												<td style=\"font-size: 0; line-height: 0;\" width=\"20\">\n"
                + "													&nbsp;\n"
                + "												</td>\n"
                + "												<td width=\"260\" valign=\"top\">\n"
                + "													<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
                + "														<tr>\n"
                + "															<td>\n"
                + "																<img src=\"https://image.ibb.co/eNXDy0/right1.png\" alt=\"\" width=\"100%\" height=\"140\" style=\"display: block;\" />\n"
                + "															</td>\n"
                + "														</tr>\n"
                + "														<tr>\n"
                + "															<td style=\"padding: 25px 0 0 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px; text-align: justify;\">\n"
                + "																\n"
                + "															</td>\n"
                + "														</tr>\n"
                + "													</table>\n"
                + "												</td>\n"
                + "											</tr>\n"
                + "										</table>\n"
                + "									</td>\n"
                + "								</tr>\n"
                + "							</table>\n"
                + "						</td>\n"
                + "					</tr>\n"
                + "					<tr>\n"
                + "						<td bgcolor=\"#ee4c50\" style=\"padding: 30px 30px 30px 30px;\">\n"
                + "							<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
                + "								<tr>\n"
                + "									<td style=\"color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;\" width=\"75%\">\n"
                + "										&reg; GeekGods 2018<br/>\n"
                + "									</td>\n"
                + "									<td align=\"right\" width=\"25%\">\n"
                + "										<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n"
                + "											<tr>\n"
                + "												<td style=\"font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;\">\n"
                + "													<a href=\"http://www.twitter.com/\" style=\"color: #ffffff;\">\n"
                + "														<img src=\"https://image.ibb.co/g4c2rL/tw.gif\" alt=\"Twitter\" width=\"38\" height=\"38\" style=\"display: block;\" border=\"0\" />\n"
                + "													</a>\n"
                + "												</td>\n"
                + "												<td style=\"font-size: 0; line-height: 0;\" width=\"20\">&nbsp;</td>\n"
                + "												<td style=\"font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;\">\n"
                + "													<a href=\"http://www.twitter.com/\" style=\"color: #ffffff;\">\n"
                + "														<img src=\"https://image.ibb.co/jwOmJ0/fb.gif\" alt=\"Facebook\" width=\"38\" height=\"38\" style=\"display: block;\" border=\"0\" />\n"
                + "													</a>\n"
                + "												</td>\n"
                + "											</tr>\n"
                + "										</table>\n"
                + "									</td>\n"
                + "								</tr>\n"
                + "							</table>\n"
                + "						</td>\n"
                + "					</tr>\n"
                + "				</table>\n"
                + "			</td>\n"
                + "		</tr>\n"
                + "	</table>";

        SendHTMLEmail mailer = new SendHTMLEmail();

        try {
            mailer.SendHTMLEmail(host, port, mailFrom, password, mailTo, subject, message);
            System.out.println("Email sent.");
        } catch (Exception ex) {
            System.out.println("Failed to sent email.");
            ex.printStackTrace();
        }
    }

    @Override
    public void ajouterEvenement(Evenement e, User u) {

        ServiceEvenement se = new ServiceEvenement();
        //e.getId_membre().setId(u.getId());
        if (se.existe(e) == false) {
            try {
                String requete = "INSERT INTO evenement (id_membre,nom,description,date,capacite,prix,nbParticipant,lieu,createur,image) VALUES (?,?,?,?,?,?,?,?,?,?)";
                PreparedStatement pst = cnx.prepareStatement(requete);
                pst.setLong(1, u.getId());
                pst.setString(2, e.getNom());
                pst.setString(3, e.getDescription());
                pst.setString(4, e.getDate());
                pst.setInt(5, e.getCapacite());
                pst.setFloat(6, e.getPrix());
                pst.setInt(7, e.getNbParticipant());
                pst.setString(8, e.getLieu());
                pst.setString(9, u.getNom());
                pst.setString(10, e.getImage());
                pst.executeUpdate();
                System.out.println("Evénement ajoutée avec succés ! \n");
            } catch (SQLException ex) {

                System.out.println("erreur d'ajout \n " + ex.getMessage());

            }
        } else {
            System.out.println("Evénement existe déja ! \n ");
        }
    }

    @Override
    public void supprimerEvenement(Evenement e) {

        try {
            String requete = "DELETE FROM evenement WHERE reference=?";
            PreparedStatement pst = cnx.prepareStatement(requete);
            pst.setLong(1, e.getReference());
            pst.executeUpdate();
            System.out.println("Evénement supprimée avec succés  ! \n");
        } catch (SQLException ex) {
            System.out.println("erreur lors de la suppression \n" + ex.getMessage());
        }

    }

    @Override
    public void modifierEvenement(Evenement e) {
        try {
            String requete = "UPDATE `evenement` SET `reference`=?,`nom`=?,`description`=?,"
                    + "`date`=?,`capacite`=?,`prix`=?,`nbParticipant`=?,`lieu`=?,`createur`=? WHERE `reference`= ?";
            PreparedStatement pst = cnx.prepareStatement(requete);
            pst.setLong(1, e.getReference());
            pst.setString(2, e.getNom());
            pst.setString(3, e.getDescription());
            pst.setString(4, e.getDate());
            pst.setInt(5, e.getCapacite());
            pst.setFloat(6, e.getPrix());
            pst.setInt(7, e.getNbParticipant());
            pst.setString(8, e.getLieu());
            pst.setString(9, e.getCreateur());
            pst.setLong(10, e.getReference());

            pst.executeUpdate();
            System.out.println("Evenement modifié avec succés \n ");
        } catch (SQLException ex) {
            System.out.println("erreur lors de la modification \n " + ex.getMessage());
        }

    }

    @Override
    public ArrayList<Evenement> afficherEvenement() {
        ArrayList<Evenement> evenements = new ArrayList<>();
        String requete = "Select * from evenement";

        try {
            PreparedStatement pst = cnx.prepareStatement(requete);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {

                evenements.add(recupereResultat(rs));
            }
        } catch (SQLException ex) {
            System.out.println("Erreur lors d'extraction des données \n" + ex.getMessage());
        }
        return evenements;

    }

    @Override
    public long recuperer_evenement(Evenement e) {
        ArrayList<Evenement> cl = new ArrayList<Evenement>();
        cl = this.afficherEvenement();
        long id = -1;
        //System.out.println("size: " + cl.size());
        for (int i = 0; i < cl.size(); i++) {
            if ((cl.get(i).getReference() == e.getReference()) && (cl.get(i).getDescription().equals(e.getDescription())) && (cl.get(i).getNom().equals(e.getNom()))) {
                //System.out.println("exist");
                id = cl.get(i).getReference();
                break;
            }

        }
        return id;
    }

    public boolean existe(Evenement e) {
        ServiceEvenement se = new ServiceEvenement();
        if (se.recuperer_evenement(e) == -1) {
            return false;
        } else {
            return true;
        }
    }

    public User retournerUser(long id) {
        try {
            PreparedStatement pt = cnx.prepareStatement("select * from fos_user where id=?");
            pt.setLong(1, id);
            ResultSet rs = pt.executeQuery();
            while (rs.next()) {
                return recupereResultatU(rs);
            }
        } catch (SQLException ex) {

        }
        return null;
    }

    public User recupereResultatU(ResultSet x) {
        User u = new User();
        try {
            u.setId(x.getLong("id"));
            u.setNom(x.getString("nom"));
            u.setPrenom(x.getString("prenom"));
            u.setAdresse(x.getString("addresse"));
            u.setEmail(x.getString("email"));

        } catch (SQLException ex) {

        }

        return u;
    }

    public Evenement recupereResultat(ResultSet x) {
        Evenement e = new Evenement();
        try {

            e.setReference(x.getInt("reference"));
            e.setId_membre(retournerUser(x.getInt("id_membre")));
            e.setNom(x.getString("nom"));
            e.setDescription(x.getString("description"));
            e.setDate(x.getString("date"));
            e.setCapacite(x.getInt("capacite"));
            e.setPrix(x.getFloat("prix"));
            e.setNbParticipant(x.getInt("nbParticipant"));
            e.setLieu(x.getString("lieu"));
            e.setCreateur(x.getString("createur"));
            e.setImage("file:C:\\3A16\\ressources\\" + x.getString("image"));

        } catch (SQLException ex) {

        }

        return e;
    }

}
