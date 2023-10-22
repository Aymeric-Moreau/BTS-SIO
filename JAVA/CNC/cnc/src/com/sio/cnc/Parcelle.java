package com.sio.cnc;

import java.util.ArrayList;
import java.util.List;

/**
 * Classe Parcelle Permet d'instancier un objet de type Parcelle Une parcelle
 * est constituée d'un nombre d'hectares et produit une quantité de raisin
 *
 * @author bc
 * @version 1.0
 */
public class Parcelle {

    private final int numParcelle;
    private int nbHectares;

    private Commune laCommune;
    private List<Production> lesProductions;

    /**
     * permet de créer une nouvelle parcelle
     *
     * @param numParcelle numéro de la parcelle
     * @param nbHa nombre d'hectares de la parcelle
     * @param commune la commune voulu
     */
    public Parcelle(int numParcelle, int nbHa, Commune commune) {
        // initialise les variables d'instances
        this.numParcelle = numParcelle;
        nbHectares = nbHa;

        this.laCommune = commune;
        lesProductions = new ArrayList<>();
    }

    /**
     * accesseur
     *
     * @return le l'objet laCommune
     */
    public Commune getLaCommune() {
        return laCommune;
    }

    /**
     * accesseur
     *
     * @return le numéro de parcelle
     */
    public int getNumParcelle() {
        // put your code here
        return numParcelle;
    }

    /**
     * accesseur
     *
     * @return le nombre d'hectares
     */
    public int getNbHectares() {
        return nbHectares;
    }

    /**
     * accesseur
     *
     * @return le quantité produite
     */
    public int getQteProduction() {
        int result = 0;
        for (Production prod : lesProductions) {
            result += prod.getQteProduit();
        }
        return result;
    }

    /**
     * accesseur
     *
     * @return la liste des production
     */
    public List<Production> getLesProduction() {
        return lesProductions;
    }

    /**
     * Ajoute une parcelle à la liste
     *
     * @param p représente une parcelle
     */
    public void addProduction(Production p) {
        boolean ok = true;

        for (Production prod : lesProductions) {
            if (p.getAnnee() == prod.getAnnee()) {
                ok = false;
            }

        }
        if (ok == true) {
            lesProductions.add(p);
        }

    }

    /**
     * Modifie le nombre d'hectares de la parcelle
     *
     * @param nbHectares nouveau nombre d'hectares
     */
    public void setNbHectares(int nbHectares) {
        this.nbHectares = nbHectares;
    }

    /**
     * donne la quantité produite pour une annee
     *
     * @param annee l'anne voulu
     *
     * @return le quantité produite pour une annee
     */
    public int getQteProductionAnne(int annee) {
        int result = 0;

        for (Production prod : lesProductions) {

            if (prod.getAnnee() == annee) {

                result = prod.getQteProduit(); // Ajoutez la quantité de production au résultat
            }
        }

        return result;
    }

    /**
     * to string
     *
     * @return un string avec le numéro de la parcelle, le nombre d'hectare et
     * la quantité de production
     */
    @Override
    public String toString() {
        return "Parcelle{" + "numParcelle=" + numParcelle + ", nbHectares=" + nbHectares + ", qteProduction=" + getQteProduction() + '}';
    }

}
