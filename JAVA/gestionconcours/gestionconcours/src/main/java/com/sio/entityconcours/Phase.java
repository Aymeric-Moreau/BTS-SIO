/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.sio.entityconcours;

import jakarta.persistence.DiscriminatorColumn;
import static jakarta.persistence.DiscriminatorType.STRING;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import static jakarta.persistence.InheritanceType.SINGLE_TABLE;
import jakarta.persistence.Inheritance;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.ManyToOne;
import jakarta.persistence.Table;

/**
 *
 * @author aymeric
 */
@Entity
@Table(name = "phase_epreuve")
@Inheritance(strategy = SINGLE_TABLE)
@DiscriminatorColumn(name = "typePhase", discriminatorType = STRING, length = 7)
public abstract class Phase {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int idPhase;
    private int distanceParcours;

    @ManyToOne
    @JoinColumn(name = "idepreuve")
    private Epreuve objEpreuve;

    public int getIdPhase() {
        return idPhase;
    }

    public int getDistanceParcours() {
        return distanceParcours;
    }

    public Epreuve getObjEpreuve() {
        return objEpreuve;
    }

    public void setIdPhase(int idPhase) {
        this.idPhase = idPhase;
    }

    public void setDistanceParcours(int distanceParcours) {
        this.distanceParcours = distanceParcours;
    }

    public void setObjEpreuve(Epreuve objEpreuve) {
        this.objEpreuve = objEpreuve;
    }

}
