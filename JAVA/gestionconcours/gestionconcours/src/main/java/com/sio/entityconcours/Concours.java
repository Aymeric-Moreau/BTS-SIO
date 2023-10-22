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
import jakarta.persistence.OneToMany;
import jakarta.persistence.Table;
import java.util.List;


/**
 *
 * @author aymer
 */
@Entity
@Table(name = "concours")
public class Concours {
    
    @Id
    @Column(length = 6)
    private String codeFFE;
    private String libelleConcours;
    
    @OneToMany(mappedBy="numConcours")
    private List<Epreuve> listeEpreuve;

    public Concours() {
        
    }

    public String getCodeFFE() {
        return codeFFE;
    }

    public String getLibelleConcours() {
        return libelleConcours;
    }

    public void setCodeFFE(String codeFFE) {
        this.codeFFE = codeFFE;
    }

    public void setLibelleConcours(String libelleConcours) {
        this.libelleConcours = libelleConcours;
    }
    
    
}
