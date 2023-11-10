/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/UnitTests/JUnit5TestClass.java to edit this template
 */
package com.sio.passerelle;

import com.sio.entityconcours.Bareme;
import com.sio.entityconcours.Concours;
import com.sio.entityconcours.Epreuve;
import com.sio.entityconcours.Obstacle;
import com.sio.entityconcours.Phase;
import java.util.List;
import org.junit.jupiter.api.AfterEach;
import org.junit.jupiter.api.AfterAll;
import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.BeforeAll;
import org.junit.jupiter.api.Test;
import static org.junit.jupiter.api.Assertions.*;

/**
 *
 * @author aymer
 */
public class DAOConcoursTest {

    public DAOConcoursTest() {
    }

    @BeforeAll
    public static void setUpClass() {
    }

    @AfterAll
    public static void tearDownClass() {
    }

    @BeforeEach
    public void setUp() {
    }

    @AfterEach
    public void tearDown() {
    }

    @org.junit.jupiter.api.Test
    public void testSomeMethod() {
    }

    public static void main(String[] args) {
        List<Concours> listeconcours = DAOConcours.getListeConcours();

        for (Concours c : listeconcours) {
            System.out.println(c.getCodeFFE() + " " + c.getLibelleConcours());

            List<Epreuve> listeepreuve = c.getListeEpreuve();
            for (Epreuve e : listeepreuve) {
                System.out.println("epreuve numero ");

                System.out.println(e.getId());
                Bareme objBareme = e.getObjBareme();
                System.out.println(objBareme.getLibelle());

                List<Obstacle> listeObstacle = e.getListeObstacle();
                

                for (Obstacle o : listeObstacle) {
                    System.out.println("Obstacle numero :");
                    System.out.println(o.getIdObstacle());
                }

            }
        }


    }
}
