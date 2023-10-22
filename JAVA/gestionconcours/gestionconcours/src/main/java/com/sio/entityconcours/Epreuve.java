/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.sio.entityconcours;

import com.sio.entityconcours.Obstacle;
import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.JoinTable;
import jakarta.persistence.ManyToMany;
import jakarta.persistence.ManyToOne;
import jakarta.persistence.OneToMany;
import jakarta.persistence.Table;
import java.sql.Time;
import java.time.LocalDate;
import java.time.LocalTime;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author aymer
 */
@Entity
@Table(name = "Epreuve")
public class Epreuve {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int id;
    private LocalDate date;
    private LocalTime heureDebut;
    private int prixAttribut;

    @OneToMany
    @JoinColumn(name = "numEpreuve")
    private List<Obstacle> listeObstacle;
    
    @ManyToOne
    @JoinColumn(name = "codeBareme")
    private Bareme objBareme;
    
    @ManyToOne
    @JoinColumn(name = "numConcours")
    private Concours numConcours;
    

    public Epreuve() {
    }

    public LocalDate getDate() {
        return date;
    }


    public LocalTime getHeureDebut() {
        return heureDebut;
    }

    public int getPrixAttribut() {
        return prixAttribut;
    }

    public int getId() {
        return id;
    }

    public void setDate(LocalDate date) {
        this.date = date;
    }

    public void setHeureDebut(LocalTime heureDebut) {
        this.heureDebut = heureDebut;
    }

    public void setPrixAttribut(int prixAttribut) {
        this.prixAttribut = prixAttribut;
    }

    private void setId(int id) {
        this.id = id;
    }

}
