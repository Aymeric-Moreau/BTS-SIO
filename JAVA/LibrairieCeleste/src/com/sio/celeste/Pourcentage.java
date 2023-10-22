package com.sio.celeste;

import java.io.Serializable;
import java.util.HashMap;
import java.util.Map;

/**
 *
 * @author bc
 */
public class Pourcentage {
    

    private static final Map<Character, Integer> lesPourcentages = new HashMap<>();
    
    private Pourcentage(){
        throw new IllegalStateException("Utility class");
    }
    

    public static void addPourcentage(char type, int p) {
        if (type != ' ' && p != 0) {
           lesPourcentages.putIfAbsent(type, p);            
        }
    }
    
    public static int donnerPourcentage(char type){
        int p = 0;
        if (type != ' '){
            p= lesPourcentages.get(type);
        }
        return p;
    }

}
