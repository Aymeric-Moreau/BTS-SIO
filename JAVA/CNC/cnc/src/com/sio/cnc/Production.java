/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.sio.cnc;

/**
 * aymeric moreau
 * @author aymer
 */
public class Production {

    private int annee;
    private int qteProduit;

    /**
     * permet de créer une nouvelle prdoduction
     *
     * @param annee l'année
     * @param qteProduit nombre de produit
     */
    public Production(int annee, int qteProduit) {
        // initialise les variables d'instances
        this.annee = annee;
        this.qteProduit = qteProduit;
    }

    /**
     * accesseur
     *
     * @return l'anne
     */
    public int getAnnee() {
        // put your code here
        return annee;
    }

    /**
     * accesseur
     *
     * @return le numéro de parcelle
     */
    public int getQteProduit() {
        // put your code here
        return qteProduit;
    }

    /**
     * Modifie l'anne
     *
     * @param annee nouvelle annee
     */
    public void setAnne(int annee) {
        this.annee = annee;
    }

    /**
     * Modifie la quandtité produit
     *
     * @param qteProduit nouveau nombre de produit
     */
    public void setQteProduit(int qteProduit) {
        this.qteProduit = qteProduit;
    }

}
