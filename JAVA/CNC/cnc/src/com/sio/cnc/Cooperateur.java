package com.sio.cnc;

import java.util.ArrayList;
import java.util.List;

/**
 * Classe Cooperateur Permet d'instancier un objet de type Cooperateur un
 * cooperateur cultive un ensemble de parcelles et est situé sur une commune
 *
 * @author bc
 * @version 1.0
 */
public class Cooperateur {

    private final String nomCoop;
    private Commune laCommune;
    private List<Parcelle> lesParcelles;

    /**
     * permet de créer un coopérateur
     *
     * @param nom nom du coopérateur
     * @param c commune du coopérateur
     */
    public Cooperateur(String nom, Commune c) {
        // initialise les variables d'instances
        nomCoop = nom;
        laCommune = c;
        lesParcelles = new ArrayList<>();
    }

    /**
     * accesseur
     *
     * @return nom du coopérateur
     */
    public String getNomCoop() {

        return nomCoop;
    }

    /**
     * accesseur
     *
     * @return retourne la commune du cooperateur
     */
    public Commune getLaCommune() {
        return laCommune;
    }

    /**
     * Modifie la commune du cooperateur
     *
     * @param laCommune nouvelle commune
     */
    public void setLaCommune(Commune laCommune) {
        this.laCommune = laCommune;
    }

    /**
     * accesseur
     *
     * @return la liste des parcelles
     */
    public List<Parcelle> getLesParcelles() {
        return lesParcelles;
    }

    /**
     * Ajoute une parcelle à la liste
     *
     * @param p représente une parcelle
     */
    public void addParcelle(Parcelle p) {
        if (!existeParcelle(p)) {
            lesParcelles.add(p);
        }

    }

    /**
     * permet de calculer la quantité totale de raisin produite
     *
     * @return la quantité totale de raisin produite
     */
    public int donneQuantiteTotale() {
        int total = 0;
        for (Parcelle p : lesParcelles) {
            total = total + p.getQteProduction();
        }
        return total;
    }

    /**
     * permet de calculer la quantité totale de raisin produite pour une anné
     *
     * @param anne l'annee voulu
     * 
     * @return la quantité totale de raisin produite
     */
    public int donneQuantiteTotaleAnne(int anne) {
        int total = 0;
        for (Parcelle p : lesParcelles) {
            total = total + p.getQteProductionAnne(anne);
        }
        return total;
    }

    /**
     * Vérifie si l'objet Parcelle passé en paramètre existe dans la collection
     * des parcelles
     *
     * @param laParcelle un objet de type Parcelle
     * @return true si la parcelle existe dans la collection, false dans le cas
     * contraire
     */
    public boolean existeParcelle(Parcelle laParcelle) {
        boolean trouve = false;
        for (Parcelle p : lesParcelles) {
            if (p.getNumParcelle() == laParcelle.getNumParcelle()) {
                trouve = true;

            }

        }
        return trouve;
    }

    /**
     * tostring
     * 
     * @return le string avec le nom du cooperateur et la commune
     */
    @Override
    public String toString() {
        return "Cooperateur{" + "nomCoop=" + nomCoop + ", laCommune=" + laCommune + '}';
    }

}
