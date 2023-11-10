/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.sio.wsdemguiv.entity;


import jakarta.json.bind.annotation.JsonbTransient;
import jakarta.persistence.CascadeType;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import static jakarta.persistence.GenerationType.IDENTITY;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.OneToMany;
import jakarta.persistence.Table;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author BTS-SIO
 */
@Entity
@Table(name = "chargement")
public class Chargement {
    @JsonbTransient 
    @Id
    @GeneratedValue(strategy = IDENTITY)
    private int id;
    private int tempsEmballage; //temps d'emballage en heures lors du chargement
   
    @OneToMany(cascade = CascadeType.ALL)
    @JoinColumn(name = "idchargement")
    private List<VehiculeCharge> vehicules; //liste de véhicules chargés

    /**
     * constructeur
     */
    public Chargement() {
        vehicules = new ArrayList<>();
    }
    /**
     * accesseur id
     *
     * @return l'id du chargement
     */
    public int getId() {
        return id;
    }

     /**
     * modifie l'id du chargement
     *
     * @param id id du chargement
     */
    public void setId(int id) {
        this.id = id;
    }

    /**
     * modifie la liste de véhicules
     *
     * @param vehicule nouvelle liste de véhicules
     */
    public void setVehicules(List<VehiculeCharge> vehicule) {
        this.vehicules = vehicule;
    }

    /**
     * accesseur liste de véhicules
     *
     * @return la liste de véhicules
     */
    public List<VehiculeCharge> getVehicules() {
        return vehicules;
    }

   

    /**
     * accesseur temps emballage
     *
     * @return retourne le temps d'emballage
     */
    public int getTempsEmballage() {
        return tempsEmballage;
    }
    /**
     * modifie le temps d'emballage
     *
     * @param tempsEmballage nouveau temps d'emballage
     */
    public void setTempsEmballage(int tempsEmballage) {
        this.tempsEmballage = tempsEmballage;
    }
   

    /**
     * ajoute un véhicule à la liste des véhicules chargés
     *
     * @param vc objet de type VehiculeCharge
     */
    public void addVehicule(VehiculeCharge vc) {
        vehicules.add(vc);
    }
   
}
