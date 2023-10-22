package com.sio.celeste;

import java.io.Serializable;

/**
 *
 * @author bc
 */
public class Particulier extends Client  implements Serializable {
    private static final long serialVersionUID = 1L; 
    private String nomParticulier;
    private String prenomParticulier;

    /**
     * Constructeur pour instancier des objets de type Particulier
     *
     * @param numClient
     * @param adresseClient
     * @param telephone
     * @param nomParticulier
     * @param prenomParticulier
     */
    public Particulier(int numClient, String adresseClient, String telephone, String nomParticulier, String prenomParticulier) {
        super(numClient, adresseClient, telephone);
        this.nomParticulier = nomParticulier;
        this.prenomParticulier = prenomParticulier;
    }

    /**
     * Get the value of prenomParticulier
     *
     * @return the value of prenomParticulier
     */
    public String getPrenomParticulier() {
        return prenomParticulier;
    }

    /**
     * Set the value of prenomParticulier
     *
     * @param prenomParticulier new value of prenomParticulier
     */
    public void setPrenomParticulier(String prenomParticulier) {
        this.prenomParticulier = prenomParticulier;
    }

    /**
     * Get the value of nomParticulier
     *
     * @return the value of nomParticulier
     */
    public String getNomParticulier() {
        return nomParticulier;
    }

    /**
     * Set the value of nomParticulier
     *
     * @param nomParticulier new value of nomParticulier
     */
    public void setNomParticulier(String nomParticulier) {
        this.nomParticulier = nomParticulier;
    }

    @Override
    public String toString() {
        return super.toString() +  nomParticulier + " " + prenomParticulier;
    }
    
    

}
