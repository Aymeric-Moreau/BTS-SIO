/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.sio.passerelle;

import com.sio.entityconcours.Bareme;
import com.sio.entityconcours.Concours;
import com.sio.entityconcours.Epreuve;
import com.sio.entityconcours.Obstacle;
import com.sio.entityconcours.TypeObstacle;
import java.time.LocalDate;
import java.time.LocalTime;

/**
 *
 * @author aymer
 */
public class TestNouvelleEpreuve {

    public static void main(String[] args) {

        //récupération du type d'obstacle souhaité dans la BD
        Concours c1 = DAOConcours.getConcoursId("02-159");
        Bareme b1 = DAOBareme.getBaremeId(2);
        TypeObstacle t1 = DAOTypeObstacle.getTypeObstacleId(3);
        TypeObstacle t2 = DAOTypeObstacle.getTypeObstacleId(5);
        Manche

        Obstacle o1 = new Obstacle();
        o1.setHauteur(1);
        o1.setLargeur(300);
        o1.setObjTypeObstacle(t1);

        Obstacle o2 = new Obstacle();
        o2.setHauteur(1);
        o2.setLargeur(300);
        o2.setObjTypeObstacle(t2);

        Epreuve e1 = new Epreuve();
        e1.setDateEpreuve(LocalDate.of(2023, 04, 11));
        e1.setHeureDebut(LocalTime.of(9, 30));
        e1.setObjConcours(c1);
        e1.setObjBareme(b1);
        e1.setPrixAttribue(900);
    }

}
