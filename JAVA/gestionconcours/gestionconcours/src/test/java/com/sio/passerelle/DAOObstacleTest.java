/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/UnitTests/JUnit5TestClass.java to edit this template
 */
package com.sio.passerelle;

import com.sio.entityconcours.Obstacle;
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
public class DAOObstacleTest {

    public static void main(String[] args) {

        List<Obstacle> listeObstacle = DAOObstacle.getListeObstacleHauteurLargeur(30, 80);
        for (Obstacle o : listeObstacle) {

            System.out.println("Obstacle numéro : " + o.getIdObstacle());

        }
    }

}
