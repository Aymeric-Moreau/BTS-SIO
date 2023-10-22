package com.sio.celeste;

import java.io.Serializable;
import java.util.ArrayList;
import java.util.List;

/**
 * Classe Vendeur Instancie des objets de type Vendeur
 *
 * @author bc 03/09/2023
 * @version 1.0
 */
public class Vendeur implements Serializable {
    
    private static final long serialVersionUID = 1L; 

    private final String numVendeur;

    private String nomVendeur;
    private List<Dossier> lesDossiers = new ArrayList<>();

    /**
     * Constructeur pour instancier un objet de type Vendeur
     *
     * @param numVendeur
     * @param nomVendeur
     */
    public Vendeur(String numVendeur, String nomVendeur) {
        this.numVendeur = numVendeur;
        this.nomVendeur = nomVendeur;
       
    }

    /**
     * Get the value of nomVendeur
     *
     * @return the value of nomVendeur
     */
    public String getNomVendeur() {
        return nomVendeur;
    }

    /**
     * Set the value of nomVendeur
     *
     * @param nomVendeur new value of nomVendeur
     */
    public void setNomVendeur(String nomVendeur) {
        this.nomVendeur = nomVendeur;
    }

    /**
     * Get the value of lesDossiers
     *
     * @return the value of lesDossiers
     */
    public List<Dossier> getLesDossiers() {
        return lesDossiers;
    }

    /**
     * Get the value of numVendeur
     *
     * @return the value of numVendeur
     */
    public String getNumVendeur() {
        return numVendeur;
    }

    /**
     * Calcule le montant de la commission en fonction de la position du dossier
     * reçu en paramètre
     *
     * @param unDossier objet de type Dossier
     * @return le montant de la commission pour le dossier
     */
    public double donnerMontantCom(Dossier unDossier) {
        
        String position = unDossier.getPosition();
        double result = 0;
        
        if("Accepté".equals(position) || "Accepté après étude".equals(position)){
            result = (unDossier.getMontant() * unDossier.donnerPourcentageCom()  ) / 100;
        
        }

        return result;
    }

    /**
     * Calcule le montant total de la commission en fonction des dossiers ayant
     * obtenu le prêt
     *
     * @return le montant total de la commission
     */
    public double donnerMontantTotal() {
        double result = 0;
        
        for (int i = 0; i < lesDossiers.size(); i++){
            result += donnerMontantCom(lesDossiers.get(i));
        }

        return result;
    }

    /**
     * Calcule le nombre total de dossiers acceptés ou acceptés après étude
     *
     * @return le nombre total de dossiers acceptés ou acceptés après étude
     */
    public int donnerNbDosAcceptes() {

                int result = 0;
        
        for (int i = 0; i < lesDossiers.size(); i++){
             if ("Accepté".equals(lesDossiers.get(i).getPosition())){
                 result += 1 ;
             }
        }

        return result;
    }

    /**
     * Calcule le nombre total de dossiers refusés
     *
     * @return le nombre total de dossiers refusés
     */
    public int donnerNbDosRefuses() {

         int result = 0;
        
        for (int i = 0; i < lesDossiers.size(); i++){
             if ("Refusé".equals(lesDossiers.get(i).getPosition())){
                 result += 1 ;
             }
        }

        return result;
    }

    /**
     * Ajoute un dossier à la collection de dossiers
     *
     * @param leDossier le dossier à ajouter
     */
    public void addDossier(Dossier leDossier) {
        if (leDossier != null) {

            this.lesDossiers.add(leDossier);
        }
    }

    @Override
    public String toString() {
        return numVendeur + " " + nomVendeur;
    }

}
