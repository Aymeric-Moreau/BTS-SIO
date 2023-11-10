/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.sio.passerelle;

import com.sio.entityconcours.TypeObstacle;

/**
 *
 * @author aymer
 */
public class TestPersistanceTypeObstacle {
    
    public static void main(String[] args) {
    TypeObstacle t1 = new TypeObstacle();
    t1.setLibelle("petit mur");
    DAOTypeObstacle.setTypeObstacle(t1);
    }
    
}
