package com.sio.cnc;

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
    private int qteProduction;

    /**
     * permet de créer une nouvelle parcelle
     *
     * @param numParcelle
     * @param nbHa nombre d'hectares de la parcelle
     */
    public Parcelle(int numParcelle, int nbHa) {
        // initialise les variables d'instances
        this.numParcelle = numParcelle;
        nbHectares = nbHa;
        qteProduction = 0;
    }

    /**
     * permet de créer une nouvelle parcelle avec la quantité produite
     *
     * @param numParcelle numéro de la parcelle
     * @param nbHa nombre d'hectares de la parcelle
     * @param qteProd quantité de raisin produite par la parcelle exprimée en
     * kilogrammes
     */
    public Parcelle(int numParcelle, int nbHa, int qteProd) {
        // initialise les variables d'instances
        this.numParcelle = numParcelle;
        nbHectares = nbHa;
        qteProduction = qteProd;
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
        return qteProduction;
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
     * Modifie la quantité de production de la parcelle
     *
     * @param qteProduction nouvelle production
     */
    public void setQteProduction(int qteProduction) {
        this.qteProduction = qteProduction;
    }

    /**
     *
     * @return
     */
    @Override
    public String toString() {
        return "Parcelle{" + "numParcelle=" + numParcelle + ", nbHectares=" + nbHectares + ", qteProduction=" + qteProduction + '}';
    }

}
