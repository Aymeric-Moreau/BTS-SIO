/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/UnitTests/JUnit5TestClass.java to edit this template
 */
package com.sio.passerelle;

import com.sio.entityconcours.Concours;
import com.sio.entityconcours.Epreuve;
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
public class DAOEpreuveTest {

    public static void main(String[] args) {
        List<Concours> listeconcours = DAOConcours.getListeConcours();

        List<Epreuve> listepreuve = DAOEpreuve.getListeEpreuve();
        System.out.println("les epreuve par ordre chronologique ");
        for (Epreuve e : listepreuve) {

            System.out.println("epreuve numero ");

            System.out.println(e.getDateEpreuve() + " " + e.getHeureDebut() + " " + e.getObjConcours().getLibelleConcours() + " " + e.getPrixAttribue());

            List<Phase> listePhase = e.getLesPhase();
            for (Phase p : listePhase) {

                System.out.println(" phase : " + p.getClass().getSimpleName() + " " + p.getDistanceParcours());
            }
        }
        List<Epreuve> listepreuve02159 = DAOEpreuve.getListeEpreuveNumConcours("02-159");
        for (Epreuve e : listepreuve02159) {

            System.out.println("epreuve numéro : " + e.getId());

        }

    }
}
