package com.sio.celeste;

import java.io.Serializable;

/**
 *
 * @author bc
 */
public class Entreprise extends Client  implements Serializable {

    private static final long serialVersionUID = 1L; 
    private String raisonSociale;
    private double remise;
    private String nomRepresentant;
    private String telRepresentant;

    /**
     * Constructeur pour instancier des objets de type Entreprise
     * @param numClient
     * @param adresseClient
     * @param telephone
     */
    public Entreprise(int numClient, String adresseClient, String telephone) {
        super(numClient, adresseClient, telephone);
    }

    /**
     * Get the value of telRepresentant
     *
     * @return the value of telRepresentant
     */
    public String getTelRepresentant() {
        return telRepresentant;
    }

    /**
     * Set the value of telRepresentant
     *
     * @param telRepresentant new value of telRepresentant
     */
    public void setTelRepresentant(String telRepresentant) {
        this.telRepresentant = telRepresentant;
    }

    /**
     * Get the value of nomRepresentant
     *
     * @return the value of nomRepresentant
     */
    public String getNomRepresentant() {
        return nomRepresentant;
    }

    /**
     * Set the value of nomRepresentant
     *
     * @param nomRepresentant new value of nomRepresentant
     */
    public void setNomRepresentant(String nomRepresentant) {
        this.nomRepresentant = nomRepresentant;
    }

    /**
     * Get the value of remise
     *
     * @return the value of remise
     */
    public double getRemise() {
        return remise;
    }

    /**
     * Set the value of remise
     *
     * @param remise new value of remise
     */
    public void setRemise(double remise) {
        this.remise = remise;
    }

    /**
     * Get the value of raisonSociale
     *
     * @return the value of raisonSociale
     */
    public String getRaisonSociale() {
        return raisonSociale;
    }

    /**
     * Set the value of raisonSociale
     *
     * @param raisonSociale new value of raisonSociale
     */
    public void setRaisonSociale(String raisonSociale) {
        this.raisonSociale = raisonSociale;
    }

    @Override
    public String toString() {
        return super.toString() + raisonSociale;
    }


}
