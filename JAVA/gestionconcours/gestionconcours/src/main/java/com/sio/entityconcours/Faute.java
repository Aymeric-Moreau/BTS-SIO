/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.sio.entityconcours;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.Table;

/**
 *
 * @author aymer
 */
@Entity
@Table(name = "Faute")
public class Faute {
    
      @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int codeFaute;
    private String libelleFaute;

    public Faute() {
    }

    public int getCodeFaute() {
        return codeFaute;
    }

    public void setCodeFaute(int codeFaute) {
        this.codeFaute = codeFaute;
    }

    public String getLibelleFaute() {
        return libelleFaute;
    }

    public void setLibelleFaute(String libelleFaute) {
        this.libelleFaute = libelleFaute;
    }
    
    
    
}
