/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/UnitTests/JUnit4TestClass.java to edit this template
 */
package com.sio.celeste;

import java.time.LocalDate;
import java.util.ArrayList;
import java.util.List;
import org.junit.After;
import org.junit.AfterClass;
import org.junit.Before;
import org.junit.BeforeClass;
import org.junit.Test;
import static org.junit.Assert.*;

/**
 *
 * @author aymer
 */
public class PersistanceTest {

    public PersistanceTest() {
    }

    @BeforeClass
    public static void setUpClass() {
    }

    @AfterClass
    public static void tearDownClass() {
    }

    @Before
    public void setUp() {
    }

    @After
    public void tearDown() {
    }

    /**
     * Test of serialisation method, of class Persistance.
     */
    @Test
    public void testSerialisation() {
        Particulier particulier1 = new Particulier(1, "2 rue du moulin", "0632523232", "Paule", "franc");
        Vendeur vendeur1 = new Vendeur("1", "pauline");
        Dossier dossier1 = new Dossier(1, '1', LocalDate.now(), 20, particulier1, vendeur1);
        Dossier dossier2 = new Dossier(2, '2', LocalDate.now(), 220, particulier1, vendeur1);
        List<Dossier> lesDossier = new ArrayList<>();
        lesDossier.add(dossier1);
        lesDossier.add(dossier2);
        boolean ok = Persistance.serialisation(lesDossier, "dossier.bin");

        assertEquals(true, ok);
    }

    /**
     * Test of deserialisation method, of class Persistance.
     */
    @Test
    public void testDeserialisation() {
        Particulier particulier1 = new Particulier(1, "2 rue du moulin", "0632523232", "Paule", "franc");
        Vendeur vendeur1 = new Vendeur("1", "pauline");
        Dossier dossier1 = new Dossier(1, '1', LocalDate.now(), 20, particulier1, vendeur1);
        Dossier dossier2 = new Dossier(2, '2', LocalDate.now(), 220, particulier1, vendeur1);
        List<Dossier> lesDossier = new ArrayList<>();
        lesDossier.add(dossier1);
        lesDossier.add(dossier2);
        List<Dossier> result = new ArrayList<>();
//        boolean ok = Persistance.serialisation(lesDossier, "dossier.bin");
        result = Persistance.deserialisation("dossier.bin");

        assertEquals(lesDossier.get(0).getNumDossier(), result.get(0).getNumDossier());

    }

}
