/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Utils;

import java.awt.BorderLayout;
import java.util.Properties;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.mail.*;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;
/**
 *
 * @author HP
 */
public class JavaMail {

    public static void sendMail(String recipient,String subject,String emailBody) throws Exception{
        System.out.println("preparing to send mail");
        Properties properties = new Properties();
        properties.put("mail.smtp.auth","true");
        properties.put("mail.smtp.starttls.enable","true");
        properties.put("mail.smtp.host","smtp.gmail.com");
        properties.put("mail.smtp.port","587");
        
        String myAccount="v4volunteerpidev@gmail.com";
                                                                                                                                                                                                                                                                        String password="23300160a";
        Session session =  Session.getInstance(properties, new Authenticator() {
            @Override
            protected PasswordAuthentication getPasswordAuthentication(){
                return new PasswordAuthentication(myAccount,password);
            }
        });
        
        Message message = prepareMessage(session, myAccount, recipient,subject,emailBody);
        
        Transport.send(message);
        System.out.println("Message sent succesfully");
    }
    
    private static Message prepareMessage(Session session, String myAccountEmail, String recipient,String subject,String emailBody){
        try {
            Message message = new MimeMessage(session);
            message.setFrom(new InternetAddress(myAccountEmail));
            message.setRecipient(Message.RecipientType.TO, new InternetAddress(recipient));
            message.setSubject(subject);
            message.setText(emailBody);
            return message;
        } catch (MessagingException ex) {
            Logger.getLogger(JavaMail.class.getName()).log(Level.SEVERE, null, ex);
        }
     
     return null;
    }
    
}
