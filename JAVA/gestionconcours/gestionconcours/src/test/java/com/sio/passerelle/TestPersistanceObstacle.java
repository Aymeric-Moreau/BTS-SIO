/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.sio.passerelle;

import com.sio.entityconcours.Epreuve;
import com.sio.entityconcours.Obstacle;
import com.sio.entityconcours.TypeObstacle;

/**
 *
 * @author aymer
 */
public class TestPersistanceObstacle {
    
    public static void main(String[] args) {
    //récupération du type d'obstacle souhaité dans la BD
    TypeObstacle t1 = DAOTypeObstacle.getTypeObstacleId(8);
    
    //création et initialisation des valeur de l'obstacle
    Obstacle o1 = new Obstacle();
    o1.setHauteur(20);
    o1.setLargeur(120);
    o1.setObjTypeObstacle(t1);
    
    //Récupération de l'epreuve souhaité dans le BD
    Epreuve e = DAOEpreuve.getEpreuveId(1);
    //ajout du nouvel obstacle à l'épreuve récupéré
    e.ajoutObstacle(o1);
    
    //demande de persister l'objet
    DAOObstacle.setObstacle(o1);
    
    }
    
}
