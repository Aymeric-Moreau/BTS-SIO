/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.sio.entityconcours;

import com.sio.entityconcours.Obstacle;
import com.sio.entityconcours.Phase;
import jakarta.persistence.CascadeType;
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
 * @author aymeric
 */
@Entity
@Table(name = "Epreuve")
public class Epreuve {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int id;
    private LocalDate dateEpreuve;
    private LocalTime heureDebut;
    private int prixAttribue;

    @OneToMany(mappedBy = "objEpreuve")
    private List<Phase> lesPhase = new ArrayList<>();

    @OneToMany(cascade = {CascadeType.MERGE})
    @JoinColumn(name = "numEpreuve")
    private List<Obstacle> listeObstacle = new ArrayList<>();

    @ManyToOne
    @JoinColumn(name = "codeBareme")
    private Bareme objBareme;

    @ManyToOne
    @JoinColumn(name = "numConcours")
    private Concours objConcours;

    public Epreuve() {
    }

    public LocalDate getDateEpreuve() {
        return dateEpreuve;
    }

    public LocalTime getHeureDebut() {
        return heureDebut;
    }

    public int getPrixAttribue() {
        return prixAttribue;
    }

    public int getId() {
        return id;
    }

    public List<Phase> getLesPhase() {
        return lesPhase;
    }

    public List<Obstacle> getListeObstacle() {
        return listeObstacle;
    }

    public Bareme getObjBareme() {
        return objBareme;
    }

    public Concours getObjConcours() {
        return objConcours;
    }
    
    

    public void setDateEpreuve(LocalDate dateEpreuve) {
        this.dateEpreuve = dateEpreuve;
    }

    public void setHeureDebut(LocalTime heureDebut) {
        this.heureDebut = heureDebut;
    }

    public void setPrixAttribue(int prixAttribue) {
        this.prixAttribue = prixAttribue;
    }

    private void setId(int id) {
        this.id = id;
    }

    public void ajoutPhase(Phase phase) {
        lesPhase.add(phase);
        phase.setObjEpreuve(this);
    }

    public void setLesPhase(List<Phase> lesPhase) {
        this.lesPhase = lesPhase;
    }

        public void ajoutObstacle(Obstacle obstacle) {
        listeObstacle.add(obstacle);
        
    }
    
    public void setListeObstacle(List<Obstacle> listeObstacle) {
        this.listeObstacle = listeObstacle;
    }

    public void setObjBareme(Bareme objBareme) {
        this.objBareme = objBareme;
    }

    public void setObjConcours(Concours objConcours) {
        this.objConcours = objConcours;
    }
    
    
}
