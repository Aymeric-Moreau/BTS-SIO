/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.sio.wsdemguiv.entity;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.Id;
import jakarta.persistence.Table;
import java.time.LocalDate;


/**
 *
 * @author BTS-SIO
 */
@Entity
@Table(name = "dossier")
public class Dossier {

    @Id
    private int dos_numero; //numéro du dossier
    @Column(nullable=false)
    private String dos_nomClient; //nom du client
    @Column(nullable=false)
    private LocalDate dos_dateOuverture; //date ouverture du dossier
    @Column(nullable=false)
    private LocalDate dos_dateDebutDem; //date début déménagement
    @Column(nullable=false)
    private LocalDate dos_dateFinDem; //date fin déménagement
    @Column(nullable=false)
    private int dos_volume; //volume à déménager
    @Column(nullable=false)
    private int dos_nombreKm; //nombre de kms
    @Column(nullable=false)
    private String dos_adresseChargement; //adresse du chargement
    @Column(nullable=false)
    private String dos_adresseLivraison; //adresse de livraison
    @Column(length=15,nullable=false)
    private String dos_etatDossier; //état du dossier ("en attente", "en cours", "terminé")
    private int dos_nbDemenageurs; //nombre de déménageurs
    private LocalDate dos_dateCloture; //date de cloture du dossier

    /**
     * Constructeur
     */
    public Dossier() {
    }

    /**
     * instancie un dossier
     *
     * @param dos_numero numéro du dossier
     * @param dos_nomClient nom du client
     * @param dos_dateOuverture date ouverture
     * @param dos_dateDebutDem date début déménagement
     * @param dos_dateFinDem date fin déménagement
     * @param dos_volume volume à transporter
     * @param dos_nombreKm nombre de kms
     * @param dos_adresseChargement adresse du chargement
     * @param dos_adresseLivraison adresse de livraison
     * @param dos_nbDemenageurs nombre de déménageurs
     */
    public Dossier(int dos_numero, String dos_nomClient, LocalDate dos_dateOuverture, LocalDate dos_dateDebutDem, LocalDate dos_dateFinDem, int dos_volume, int dos_nombreKm, String dos_adresseChargement, String dos_adresseLivraison, int dos_nbDemenageurs) {
        this.dos_numero = dos_numero;
        this.dos_nomClient = dos_nomClient;
        this.dos_dateOuverture = dos_dateOuverture;
        this.dos_dateDebutDem = dos_dateDebutDem;
        this.dos_dateFinDem = dos_dateFinDem;
        this.dos_volume = dos_volume;
        this.dos_nombreKm = dos_nombreKm;
        this.dos_adresseChargement = dos_adresseChargement;
        this.dos_adresseLivraison = dos_adresseLivraison;
        this.dos_etatDossier = "en attente";
        this.dos_nbDemenageurs = dos_nbDemenageurs;
    }

    /**
     * accesseur numéro du dossier
     *
     * @return le numéro du dossier
     */
    public int getDos_numero() {
        return dos_numero;
    }

    /**
     * modifie le numéro du dossier
     *
     * @param dos_numero nouveau numéro de dossier
     */

    public void setDos_numero(int dos_numero) {
        this.dos_numero = dos_numero;
    }

    /**
     * accesseur nom du client
     *
     * @return le nom du client
     */
    public String getDos_nomClient() {
        return dos_nomClient;
    }

    /**
     * modifie le nom du client
     *
     * @param dos_nomClient nouveau nom du client
     */
    public void setDos_nomClient(String dos_nomClient) {
        this.dos_nomClient = dos_nomClient;
    }

    /**
     * accesseur date ouverture du dossier
     *
     * @return la date d'ouverture du dossier
     */
    public LocalDate getDos_dateOuverture() {
        return dos_dateOuverture;
    }

    /**
     * modifie la date d'ouverture
     *
     * @param dos_dateOuverture nouvelle date d'ouverture
     */
    public void setDos_dateOuverture(LocalDate dos_dateOuverture) {
        this.dos_dateOuverture = dos_dateOuverture;
    }

    /**
     * accesseur date début du déménagement
     *
     * @return la date de début du déménagement
     */
    public LocalDate getDos_dateDebutDem() {
        return dos_dateDebutDem;
    }

    /**
     * modifie la date de début du déménagement
     *
     * @param dos_dateDebutDem nouvelle date
     */
    public void setDos_dateDebutDem(LocalDate dos_dateDebutDem) {
        this.dos_dateDebutDem = dos_dateDebutDem;
    }

    /**
     * accesseur date fin du déménagement
     *
     * @return la date de fin du déménagement
     */
    public LocalDate getDos_dateFinDem() {
        return dos_dateFinDem;
    }

    /**
     * modifie la date de fin du déménagement
     *
     * @param dos_dateFinDem nouvelle date
     */
    public void setDos_dateFinDem(LocalDate dos_dateFinDem) {
        this.dos_dateFinDem = dos_dateFinDem;
    }

    /**
     * accesseur volume
     *
     * @return le volume du déménagement
     */
    public int getDos_volume() {
        return dos_volume;
    }

    /**
     * modifie le volume du déménagement
     *
     * @param dos_volume nouveau volume
     */
    public void setDos_volume(int dos_volume) {
        this.dos_volume = dos_volume;
    }

    /**
     * accesseur nombre de kms
     *
     * @return le nombre de kms à parcourir
     */
    public int getDos_nombreKm() {
        return dos_nombreKm;
    }

    /**
     * modifie le nombre de kms
     *
     * @param dos_nombreKm novelle distance
     */
    public void setDos_nombreKm(int dos_nombreKm) {
        this.dos_nombreKm = dos_nombreKm;
    }

    /**
     * accesseur adresse du chargement
     *
     * @return l'adresse du chargement
     */
    public String getDos_adresseChargement() {
        return dos_adresseChargement;
    }

    /**
     * modifie l'adresse du chargement
     *
     * @param dos_adresseChargement nouvelle adresse
     */
    public void setDos_adresseChargement(String dos_adresseChargement) {
        this.dos_adresseChargement = dos_adresseChargement;
    }

    /**
     * accesseur adresse de livraison
     *
     * @return l'adresse de livraison
     */
    public String getDos_adresseLivraison() {
        return dos_adresseLivraison;
    }

    /**
     * modifie l'adresse de livraison
     *
     * @param dos_adresseLivraison nouvelle adresse de livraison
     */
    public void setDos_adresseLivraison(String dos_adresseLivraison) {
        this.dos_adresseLivraison = dos_adresseLivraison;
    }

    /**
     * accesseur état du dossier
     *
     * @return l'état du dossier
     */
    public String getDos_etatDossier() {
        return dos_etatDossier;
    }

    /**
     * modifie l'état du dossier
     *
     * @param dos_etatDossier nouvel état
     */
    public void setDos_etatDossier(String dos_etatDossier) {
        this.dos_etatDossier = dos_etatDossier;
    }

    /**
     * accesseur nombre de déménageurs
     *
     * @return le nombre de déménageurs
     */
    public int getDos_nbDemenageurs() {
        return dos_nbDemenageurs;
    }

    /**
     * modifie le nombre de déménageurs
     *
     * @param dos_nbDemenageurs nouveau nombre de déménageurs
     */
    public void setDos_nbDemenageurs(int dos_nbDemenageurs) {
        this.dos_nbDemenageurs = dos_nbDemenageurs;
    }

    /**
     * accesseur date de cloture
     *
     * @return la date de cloture
     */
    public LocalDate getDos_dateCloture() {
        return dos_dateCloture;
    }

    /**
     * modifie la date de cloture
     *
     * @param dos_dateCloture nouvelle date de cloture
     */
    public void setDos_dateCloture(LocalDate dos_dateCloture) {
        this.dos_dateCloture = dos_dateCloture;
    }

}
