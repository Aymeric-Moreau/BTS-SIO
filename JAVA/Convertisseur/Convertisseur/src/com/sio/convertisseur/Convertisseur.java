/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.sio.convertisseur;

import java.util.HashMap;

/**
 *
 * @author aymer
 */
public class Convertisseur {

    private HashMap<String, Devise> listeDevises = new HashMap<>();

    public void ajouterDevise(String nom, double tauxChange) throws Exception {
        if (listeDevises.containsKey(nom)) {
            throw new Exception("La devise est déja dans la liste");
        } else {
            Devise devise = new Devise(nom, tauxChange);
            listeDevises.put(nom, devise);
        }

    }

    public double convertir(double montant, String nomDeviseDepart, String nomDeviseCible) throws Exception {

        double result;
        double deviseD = 0;
        double deviseC = 1;

        if (!listeDevises.containsKey(nomDeviseCible) || !listeDevises.containsKey(nomDeviseDepart)) {
            throw new Exception("Une des Devise n'est pas dans la liste !");

        } else {
            deviseD = listeDevises.get(nomDeviseDepart).getTauxChange();
            deviseC = listeDevises.get(nomDeviseCible).getTauxChange();

            result = montant * deviseD / deviseC;
        }

        return result;
    }

    public Devise getDevise(String nom) {
        return listeDevises.get(nom);
    }
}
