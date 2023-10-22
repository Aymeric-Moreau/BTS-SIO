/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.sio.celeste;

import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.io.Serializable;
import java.util.List;

/**
 *
 * @author aymer
 */
public class Persistance {
    

    /**
     * Permet de sérialiser une collection de dossiers
     *
     * @param liste collection des dossier à sérialiser
     * @param nomFichier nom du fichier dans lequel seront stockés les objets
     * @return true si la sérialisation s'est bien déroulée, false dans le cas
     * contraire
     */
    public static boolean serialisation(List<Dossier> liste, String nomFichier) {
        try {
            FileOutputStream fic = new FileOutputStream(nomFichier);

            ObjectOutputStream out = new ObjectOutputStream(fic);

           
                out.writeObject(liste);

            
            out.close();
            fic.close();

            return true;
        } catch (Exception e) {
            e.printStackTrace();

            return false;
        }

    }

    /**
     * permet de désérialiser la collection d'objets de type Dossier
     *
     * @param nomFichier nom du fichier dans lequel sont stockés les objets
     * @return une collection de dossier ou null si la désérialisation n'a pas
     * pu être effectuée
     */
    public static List<Dossier> deserialisation(String nomFichier) {
        List<Dossier> lesDossier = null;
        try {
            FileInputStream fos = new FileInputStream(nomFichier);

            ObjectInputStream in = new ObjectInputStream(fos);

            lesDossier = (List<Dossier>) in.readObject();

            in.close();
            fos.close();

            return lesDossier;
        } catch (Exception e) {

            e.printStackTrace();
            return lesDossier;

        }

    }
}
