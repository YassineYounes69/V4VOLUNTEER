/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package utils;

import java.util.HashMap;
import java.util.Map;
import org.apache.commons.validator.EmailValidator;



/**
 *
 * @author HP
 */
public class InputControl {
    public static Boolean isAlphaNumeric(String s) {
		for (int i = 0; i < s.length(); i++) {
			char c = s.charAt(i);
			if (!(c >= 'A' && c <= 'Z') &&
					!(c >= 'a' && c <= 'z') &&
					!(c >= '0' && c <= '9')) {
				return Boolean.FALSE;
			}
		}
		return Boolean.TRUE;
	}
    public static boolean isValidEmail(String email) {
       // create the EmailValidator instance
       EmailValidator validator = EmailValidator.getInstance();

       // check for valid email addresses using isValid method
       return validator.isValid(email);
   }
    
    public static boolean isNumeric(String phoneNumber){
        try {  
    Double.parseDouble(phoneNumber);  
    return true;
  } catch(NumberFormatException e){  
    return false;  
  }  
    }
    
    public static boolean isPhoneNumber(String phoneNumber){
        return phoneNumber.length()==8;
    }
    public static boolean isPassword(String pw){
        return pw.length() >= 8;
    }
    
    public static Map<String, Object> createListEntry(String role) {
    Map<String, Object> entry = new HashMap<>();
    entry.put("Line1", role);
    return entry;
}
}
