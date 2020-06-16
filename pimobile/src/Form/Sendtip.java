/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Form;

import com.codename1.ui.Button;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.twilio.Twilio;
import com.twilio.rest.api.v2010.account.Message;
import com.twilio.type.PhoneNumber;
import entities.Refugies;
import services.Refservices;

/**
 *
 * @author dEll
 */
public class Sendtip {
    
    
    Form don;
    Refugies c ;
    public Sendtip(){


don = new Form("Donate Here",BoxLayout.y());
Label Cardnum =new Label();
TextField Cardnumber = new TextField("","Write your card number");
Button payer = new Button("Donate");
     payer.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                Refservices a = new Refservices();
                 a.payer(c);
                 Twilio.init("ACea2ba225eab1b4d9d5762dcd26b7d52e", "64c8fcd92b080ea9ce97e61b2b0431ad");

             Message message = Message.creator(new PhoneNumber("+21699786912"),
             new PhoneNumber("+12019924237"), "Votre Don a bien été validée ,  Merci pour votre aide ").create();

                 Label pay = new Label("Votre don a été effectué , Merci ");
                 
            getTipform().show();     
               
               
            }
        });
     
            Toolbar tb3 = don.getToolbar();
            don.getToolbar().addCommandToRightBar("Back", null, new ActionListener() { //retouuuuuuuuuuuuuuuuuuuurrr
            @Override
            public void actionPerformed(ActionEvent evt) {
            AffichRef cc = new AffichRef();                   
            cc.getF().show();
                }
            });  
     
     
     don.add(Cardnum);
     don.add(Cardnumber);
     don.add(payer);
     
}
    
    public Form getTipform() {
        return don;
    }

    public void setTipFrom(Form f) {
        this.don = don;
    }
}
