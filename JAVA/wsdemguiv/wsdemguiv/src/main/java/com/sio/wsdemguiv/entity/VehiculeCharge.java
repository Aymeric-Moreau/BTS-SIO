/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.sio.wsdemguiv.entity;

import jakarta.json.bind.annotation.JsonbTransient;
import java.time.LocalDateTime;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import static jakarta.persistence.GenerationType.IDENTITY;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.ManyToOne;

import jakarta.persistence.Table;


/**
 *
 * @author BTS-SIO
 */
@Entity
@Table(name = "vehiculecharge")
public class VehiculeCharge {

  
    @Id
    @GeneratedValue(strategy = IDENTITY)
    @JsonbTransient 
    private int id;

    @ManyToOne
    @JoinColumn(name = "idvehicule", nullable=false)
    private Vehicule vehicule; //objet de type Vehicule 
    private LocalDateTime arrivee; //jour et heure arrivee sur le lieu du chargement
    private LocalDateTime depart; //jour et heure départ du lieu du chargement
    private int cubage; //cubage en m3 du chargement

    /**
     * Constructeur par défaut
     */
    public VehiculeCharge() {
       
    }

    /**
     * accesseur id
     *
     * @return l'id du véhicule chargé
     */
    public int getId() {
        return id;
    }

    /**
     * modifie l'id du véhicule chargé
     *
     * @param id nouvel objet de type Vehicule
     */
    public void setId(int id) {
        this.id = id;
    }

    /**
     * accesseur objet de type véhicule
     *
     * @return le véhicule lié au chargement
     */
    public Vehicule getVehicule() {
        return vehicule;
    }

    /**
     * modifie l'objet de type Vehicule
     *
     * @param vehicule nouvel objet de type Vehicule
     */
    public void setVehicule(Vehicule vehicule) {
        this.vehicule = vehicule;
    }

    /**
     * accesseur jour et heure arrivée
     *
     * @return le jour et l'heure de l'arrivée
     */
    public LocalDateTime getArrivee() {
        return arrivee;
    }

    /**
     * modifie le jour et l'heure d'arrivée
     *
     * @param arrivee nouveau jour et heure d'arrivée
     */
    public void setArrivee(LocalDateTime arrivee) {
        this.arrivee = arrivee;
    }

    /**
     * accesseur jour et heure départ
     *
     * @return le jour et l'heure du départ
     */
    public LocalDateTime getDepart() {
        return depart;
    }

    /**
     * modifie le jour et l'heure de départ
     *
     * @param depart nouveau jour et heure depart
     */
    public void setDepart(LocalDateTime depart) {
        this.depart = depart;
    }

    /**
     * accesseur cubage
     *
     * @return le cubage
     */
    public int getCubage() {
        return cubage;
    }

    /**
     * modifie le cubage
     *
     * @param cubage nouveau cubage
     */
    public void setCubage(int cubage) {
        this.cubage = cubage;
    }

}