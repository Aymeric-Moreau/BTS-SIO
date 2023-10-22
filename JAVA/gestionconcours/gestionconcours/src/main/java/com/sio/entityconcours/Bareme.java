/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.sio.entityconcours;

import com.sio.entityconcours.Epreuve;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.JoinTable;
import jakarta.persistence.ManyToMany;
import jakarta.persistence.OneToMany;
import jakarta.persistence.Table;
import jakarta.persistence.UniqueConstraint;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author aymer
 */
@Entity
@Table(name = "Bareme")
public class Bareme {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int codeBareme;
    private String libelleBareme;

    @ManyToMany
    @JoinTable(name = "Eliminatoire",
            joinColumns = {
                @JoinColumn(name = "codeBareme")},
            inverseJoinColumns = {
                @JoinColumn(name = "codeFaute")},
            uniqueConstraints = {
                @UniqueConstraint(name = "uniquecodeBaremecodeFaute",
                        columnNames = {"codeBareme", "codeFaute"})}
    )
    private List<Faute> listeFauteEliminatoire;

    public Bareme() {
    }

    public int getCodeBareme() {
        return codeBareme;
    }

    public void setCodeBareme(int codeBareme) {
        this.codeBareme = codeBareme;
    }

    public String getLibelleBareme() {
        return libelleBareme;
    }

    public void setLibelleBareme(String libelleBareme) {
        this.libelleBareme = libelleBareme;
    }

    public List<Faute> getListeFauteEliminatoire() {
        return listeFauteEliminatoire;
    }

    public void setListeFauteEliminatoire(List<Faute> listeFauteEliminatoire) {
        this.listeFauteEliminatoire = listeFauteEliminatoire;
    }

}
