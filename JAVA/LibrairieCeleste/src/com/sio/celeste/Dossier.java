package com.sio.celeste;

import java.io.Serializable;
import java.time.LocalDate;


/**
 * Classe Dossier Instancie des objets de type Dossier
 *
 * @author bc
 * @version 1.0
 */
public class Dossier implements Serializable {
    
    
    private static final long serialVersionUID = 1L; 

    private final int numDossier;
    private String position;
    private char typeProduit;
    private LocalDate dateOuverture;
    private double montant;
    private Client leClient;
    private Vendeur leVendeur;

    /**
     * Constructeur pour instancier un objet de type Dossier
     * @param numDossier numéro du dossier
     * @param typeProduit Type de produit du prêt
     * @param dateOuverture date d'ouverture du dossier
     * @param montant montant du prêt
     * @param leClient référence le client du dossier
     * @param leVendeur référence le vendeur du dossier
     */
    public Dossier(int numDossier, char typeProduit, LocalDate dateOuverture, double montant, Client leClient, Vendeur leVendeur) {
        this.numDossier = numDossier;
        this.position = "Attente";
        this.typeProduit = typeProduit;
        this.dateOuverture = dateOuverture;
        this.montant = montant;
        this.leClient = leClient;
        this.leVendeur = leVendeur;
    }

    /**
     * Donne l'objet Vendeur
     *
     * @return le vendeur
     */
    public Vendeur getLeVendeur() {
        return leVendeur;
    }

    /**
     * Modifie le vendeur
     *
     * @param leVendeur nouveau vendeur
     */
    public void setLeVendeur(Vendeur leVendeur) {
        this.leVendeur = leVendeur;
    }

    /**
     * Donne l'objet Client
     *
     * @return the value of leClient
     */
    public Client getLeClient() {
        return leClient;
    }

    /**
     * Set the value of leClient
     *
     * @param leClient new value of leClient
     */
    public void setLeClient(Client leClient) {
        this.leClient = leClient;
    }

    /**
     * Get the value of montant
     *
     * @return the value of montant
     */
    public double getMontant() {
        return montant;
    }

    /**
     * Set the value of montant
     *
     * @param montant new value of montant
     */
    public void setMontant(double montant) {
        this.montant = montant;
    }

    /**
     * Get the value of dateOuverture
     *
     * @return the value of dateOuverture
     */
    public LocalDate getDateOuverture() {
        return dateOuverture;
    }

    /**
     * Set the value of dateOuverture
     *
     * @param dateOuverture new value of dateOuverture
     */
    public void setDateOuverture(LocalDate dateOuverture) {
        this.dateOuverture = dateOuverture;
    }

    /**
     * Get the value of typeProduit
     *
     * @return the value of typeProduit
     */
    public char getTypeProduit() {
        return typeProduit;
    }

    /**
     * Set the value of typeProduit
     *
     * @param typeProduit new value of typeProduit
     */
    public void setTypeProduit(char typeProduit) {
        this.typeProduit = typeProduit;
    }

    /**
     * Get the value of position
     *
     * @return the value of position
     */
    public String getPosition() {
        return position;
    }

    /**
     * Set the value of position
     *
     * @param position new value of position
     */
    public void setPosition(String position) {
        this.position = position;
    }

    /**
     * Get the value of numDossier
     *
     * @return the value of numDossier
     */
    public int getNumDossier() {
        return numDossier;
    }
    /**
     * Retourne le pourcentage de commission en fonction du type de produit du dossier
     * @return le poucentage de commission 
     */
    public int donnerPourcentageCom(){
     
       char typeProduit = getTypeProduit();
    int pourcentageCom = 0;

    
    switch (typeProduit) {
        case 'C':
            pourcentageCom = Pourcentage.donnerPourcentage('C');
            break;
        case 'T':
            pourcentageCom = Pourcentage.donnerPourcentage('T');
            break;
        case 'L':
            pourcentageCom = Pourcentage.donnerPourcentage('L');
            break;
        case 'B':
            pourcentageCom = Pourcentage.donnerPourcentage('B');
            break;
        default:
            
            break;
    }

    
    return pourcentageCom;
       
}

    @Override
    public String toString() {
        return "Dossier{" + "numDossier=" + numDossier + ", position=" + position + ", montant=" + montant + ", leClient=" + leClient + '}';
    }

    
}
