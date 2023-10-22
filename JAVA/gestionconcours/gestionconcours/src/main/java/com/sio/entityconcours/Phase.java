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
import jakarta.persistence.Table;

/**
 *
 * @author aymer
 */
@Entity
@Table(name="Phase")
@Inheritance(strategy=SINGLE_TABLE)
@DiscriminatorColumn(name="TYPE", discriminatorType=STRING, length=10)
public abstract class Phase {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int id;
    private int distanceParcours;

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getDistanceParcours() {
        return distanceParcours;
    }

    public void setDistanceParcours(int distanceParcours) {
        this.distanceParcours = distanceParcours;
    }

}
