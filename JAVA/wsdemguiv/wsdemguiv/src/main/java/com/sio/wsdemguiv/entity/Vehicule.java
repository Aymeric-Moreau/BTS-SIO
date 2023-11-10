/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.sio.wsdemguiv.entity;

import jakarta.json.bind.annotation.JsonbTransient;
import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import static jakarta.persistence.GenerationType.IDENTITY;
import jakarta.persistence.Id;
import jakarta.persistence.Table;




/**
 *
 * @author BTS-SIO
 */
@Entity
@Table(name = "vehicule")
public class Vehicule {

    @JsonbTransient
    @Id
    @GeneratedValue(strategy = IDENTITY)
    private int id;
    @Column(length=9,nullable=false)
    private String immat; //numéro d'immatriculation
    private int volume; //volume en m3

    /**
     * constructeur
     */
    public Vehicule() {
    }

    /**
     * constructeur
     *
     * @param immat numero de l'immatriculation
     * @param volume volume
     */
    public Vehicule(String immat, int volume) {
        this.immat = immat;
        this.volume = volume;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    /**
     * accesseur volume
     *
     * @return le volume
     */
    public int getVolume() {
        return volume;
    }

    /**
     * modifie le volume
     *
     * @param volume nouveau volume
     */
    public void setVolume(int volume) {
        this.volume = volume;
    }

    /**
     * accesseur immatriculation
     *
     * @return l'immatriculation du véhicule
     */
    public String getImmat() {
        return immat;
    }

    /**
     * modifie l'immatriculation du véhicule
     *
     * @param immat nouvelle immatriculation
     */
    public void setImmat(String immat) {
        this.immat = immat;
    }

}
