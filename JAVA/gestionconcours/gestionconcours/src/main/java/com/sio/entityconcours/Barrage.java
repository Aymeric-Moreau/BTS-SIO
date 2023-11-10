/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.sio.entityconcours;

import jakarta.persistence.DiscriminatorValue;
import jakarta.persistence.Entity;

/**
 *
 * @author aymeric
 */
@Entity
@DiscriminatorValue(value="Barrage")
public class Barrage extends Phase{

    public Barrage() {
    }
    
}
