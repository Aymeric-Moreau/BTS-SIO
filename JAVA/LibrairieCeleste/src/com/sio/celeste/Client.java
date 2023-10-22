package com.sio.celeste;

import java.io.Serializable;

/**
 * Classe Client Instancie des objets de type Client
 *
 * @version 1.0
 * @author bc
 */
public abstract class Client implements Serializable {

    private static final long serialVersionUID = 1L; 
    private final int numClient;
    private String adresseClient;
    private String telephone;

    /**
     * Constructeur pour instancier un objet de type Client
     *
     * @param numClient
     * @param adresseClient
     * @param telephone
     */
    protected Client(int numClient, String adresseClient, String telephone) {
        this.numClient = numClient;
        this.adresseClient = adresseClient;
        this.telephone = telephone;
    }

    /**
     * Get the value of telephone
     *
     * @return the value of telephone
     */
    public String getTelephone() {
        return telephone;
    }

    /**
     * Set the value of telephone
     *
     * @param telephone new value of telephone
     */
    public void setTelephone(String telephone) {
        this.telephone = telephone;
    }

    /**
     *
     * @return
     */
    public String getAdresseClient() {
        return adresseClient;
    }

    /**
     * Set the value of adresseClient
     *
     * @param adresseClient new value of adresseClient
     */
    public void setAdresseClient(String adresseClient) {
        this.adresseClient = adresseClient;
    }

    /**
     * Get the value of numClient
     *
     * @return the value of numClient
     */
    public int getNumClient() {
        return numClient;
    }

    @Override
    public String toString() {
        return numClient + " ";
    }
}
