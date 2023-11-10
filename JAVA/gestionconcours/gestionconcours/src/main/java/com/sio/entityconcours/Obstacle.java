/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.sio.entityconcours;

import jakarta.persistence.Column;
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
 * @author aymeric
 */
@Entity
@Table(name = "Obstacle")
public class Obstacle {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int idObstacle;
    @Column(name = "hauteurObstacle")
    private int hauteur;

    @Column(name = "largeurObstacle")
    private int largeur;

    @ManyToOne
    @JoinColumn(name = "numTypeObstacle")
    private TypeObstacle objTypeObstacle;

    public Obstacle() {
    }

    public int getHauteur() {
        return hauteur;
    }

    public int getLargeur() {
        return largeur;
    }

    public int getIdObstacle() {
        return idObstacle;
    }

    public void setObjTypeObstacle(TypeObstacle objTypeObstacle) {
        this.objTypeObstacle = objTypeObstacle;
    }

    public void setHauteur(int hauteur) {
        this.hauteur = hauteur;
    }

    public void setLargeur(int largeur) {
        this.largeur = largeur;
    }

    private void setIdObstacle(int idObstacle) {
        this.idObstacle = idObstacle;
    }

    public TypeObstacle getObjTypeObstacle() {
        return objTypeObstacle;
    }

}
