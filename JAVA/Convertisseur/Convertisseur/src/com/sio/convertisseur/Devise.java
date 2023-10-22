/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.sio.convertisseur;

/**
 *
 * @author aymer
 */
public class Devise {

    private String nom;
    private double tauxChange;

    public Devise(String nom, double tauxChange) throws Exception {
        if(nom.length() == 3){
        this.nom = nom;
        
        }else {
        throw new Exception("Le nom"+ nom + "est incorrect !");
        }
        
        if(tauxChange >= 0.0){
        
        this.tauxChange = tauxChange;
        }else {
        throw new Exception("Le taux "+ tauxChange + " est incorrect il est trop petit !");
        }
    }

    
    
    public String getNom(){
        return nom;

    }

    public double getTauxChange() {
        return tauxChange;
    }

}
