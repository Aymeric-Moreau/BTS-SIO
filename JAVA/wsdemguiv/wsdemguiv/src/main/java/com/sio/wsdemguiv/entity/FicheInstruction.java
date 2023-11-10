/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.sio.wsdemguiv.entity;

import jakarta.persistence.CascadeType;
import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.OneToOne;
import jakarta.persistence.Table;
import java.time.LocalDate;



/**
 *
 * @author BTS-SIO
 */

@Entity
@Table(name = "ficheinstruction")
public class FicheInstruction {

    @Id
    private long numero; //numero de la fiche
    @Column(nullable=false)
    private LocalDate dateCreation; //date de creation de la fiche

    @OneToOne(cascade = CascadeType.ALL)
    @JoinColumn(name = "idchargement")
    private Chargement chargement; //objet de type Chargement qui comporte les informations du chargement

    @OneToOne(cascade = CascadeType.ALL)
    @JoinColumn(name = "idlivraison")
    private Livraison livraison; //objet de type Livraison qui comporte les informations de la livraison

    @OneToOne
    @JoinColumn(name = "dosnumero", nullable=false)
    private Dossier leDossier; //dossier concerné

    /**
     * constructeur
     */
    public FicheInstruction() {

    }

    /**
     * constructeur
     *
     * @param leDossier dossier concerné par la fiche
     */
    public FicheInstruction(Dossier leDossier) {

        this.leDossier = leDossier;

    }

    /**
     * accesseur numero
     *
     * @return le numéro de la fiche d'instruction
     */
    public long getNumero() {
        return numero;
    }

    /**
     * modifie le numéro de la fiche
     *
     * @param numero numéro de la fiche
     */
    public void setNumero(long numero) {
        this.numero = numero;
    }

    /**
     * accesseur dossier
     *
     * @return l'objet Dossier concerné par la fiche
     */
    public Dossier getLeDossier() {
        return leDossier;
    }

    public void setLeDossier(Dossier leDossier) {
        this.leDossier = leDossier;
    }

    /**
     * accesseur date de creation
     *
     * @return la date de création de la fiche
     */
    public LocalDate getDateCreation() {
        return dateCreation;
    }

    /**
     * modifie la date de création de la fiche
     *
     * @param dateCreation nouvelle date
     */
    public void setDateCreation(LocalDate dateCreation) {
        this.dateCreation = dateCreation;
    }

    /**
     * accesseur chargement
     *
     * @return l'objet de type Chargement de la fiche
     */
    public Chargement getChargement() {
        return chargement;
    }

    /**
     * modifie l'objet de type Chargement
     *
     * @param chargement objet de type Chargement
     */
    public void setChargement(Chargement chargement) {
        this.chargement = chargement;
    }

    /**
     * accesseur livraison
     *
     * @return l'objet de type Livraison de la fiche
     */
    public Livraison getLivraison() {
        return livraison;
    }

    /**
     * modifie l'objet de type Livraison
     *
     * @param livraison objet de type Livraison
     */
    public void setLivraison(Livraison livraison) {
        this.livraison = livraison;
    }

}
