/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.sio.wsdemguiv.entity;

import jakarta.json.bind.annotation.JsonbTransient;
import java.util.ArrayList;
import java.util.List;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import static jakarta.persistence.GenerationType.IDENTITY;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.OneToMany;
import jakarta.persistence.Table;

/**
 *
 * @author BTS-SIO
 */
@Entity
@Table(name = "livraison")
public class Livraison {

    @JsonbTransient
    @Id
    @GeneratedValue(strategy = IDENTITY)
    private int id;

    private String observationsClient; //observations du client
    private String observationsChef; //observations du chef des déménageurs

    @OneToMany
    @JoinColumn(name = "idlivraison")
    private List<VehiculeDecharge> vehicules; //liste des véhicules téléchargés

    /**
     * constructeur par défaut
     */
    public Livraison() {
        vehicules = new ArrayList<>();
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    /**
     * accesseur observations du client
     *
     * @return les observations du client
     */
    public String getObservationsClient() {
        return observationsClient;
    }

    /**
     * modifie les observations du client
     *
     * @param observationsClient nouvelles observations
     */
    public void setObservationsClient(String observationsClient) {
        this.observationsClient = observationsClient;
    }

    /**
     * accesseur observations du chef des déménageurs
     *
     * @return les observations du chef des déménageurs
     */
    public String getObservationsChef() {
        return observationsChef;
    }

    /**
     * modifie les observations du client
     *
     * @param observationsChef nouvelles observations
     */
    public void setObservationsChef(String observationsChef) {
        this.observationsChef = observationsChef;
    }

    /**
     * accesseur liste des véhicules déchargés
     *
     * @return liste des véhicules déchargés
     */
    public List<VehiculeDecharge> getVehicules() {
        return vehicules;
    }

    /**
     * modifie la liste des véhicules déchargés
     *
     * @param vehicules nouvelle liste des véhicules déchargés
     */
    public void setVehicules(List<VehiculeDecharge> vehicules) {
        this.vehicules = vehicules;
    }

    /**
     * ajoute un véhicule déchargé à la liste
     *
     * @param v objet de type VehiculeDecharge
     */
    public void addVehicule(VehiculeDecharge v) {
        vehicules.add(v);
    }

}
