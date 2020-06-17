package gui;

import com.codename1.ui.Container;
import com.codename1.ui.Form;
import com.codename1.ui.Dialog;
import com.codename1.ui.util.Resources;


public class Addrefugies extends Form  {
    public Addrefugies(com.codename1.ui.util.Resources resourceObjectInstance) {
        initGuiBuilderComponents(resourceObjectInstance);
    }

//-- DON'T EDIT BELOW THIS LINE!!!
    protected com.codename1.ui.spinner.Picker gui_Picker = new com.codename1.ui.spinner.Picker();


// <editor-fold defaultstate="collapsed" desc="Generated Code">                          
    private void initGuiBuilderComponents(com.codename1.ui.util.Resources resourceObjectInstance) {
        setLayout(new com.codename1.ui.layouts.LayeredLayout());
        setInlineStylesTheme(resourceObjectInstance);
        setScrollableY(true);
                setInlineStylesTheme(resourceObjectInstance);
        setTitle("Addrefugies");
        setName("Addrefugies");
        gui_Picker.setText("...");
                gui_Picker.setInlineStylesTheme(resourceObjectInstance);
        gui_Picker.setName("Picker");
        gui_Picker.setType(4);
        addComponent(gui_Picker);
        ((com.codename1.ui.layouts.LayeredLayout)gui_Picker.getParent().getLayout()).setInsets(gui_Picker, "11.261262% auto auto 28.38428%").setReferenceComponents(gui_Picker, "-1 -1 -1 -1").setReferencePositions(gui_Picker, "0.0 0.0 0.0 0.0");
    }// </editor-fold>
//-- DON'T EDIT ABOVE THIS LINE!!!
}
