/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.sio.entityconcours;

import com.sio.entityconcours.Obstacle;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.ManyToOne;
import jakarta.persistence.OneToMany;
import jakarta.persistence.Table;
import java.util.List;

/**
 *
 * @author aymer
 */
@Entity
@Table(name = "TypeObstacle")
public class TypeObstacle {

    @Id
     @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int id;
    private String libelle;

    @OneToMany
    @JoinColumn(name = "numTypeObstacle")
    private List<Obstacle> objTypeObstacle;

    public TypeObstacle() {
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }



    public String getLibelle() {
        return libelle;
    }

    public void setLibelle(String libelle) {
        this.libelle = libelle;
    }

}
