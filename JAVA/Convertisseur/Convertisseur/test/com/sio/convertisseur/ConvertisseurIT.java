/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/UnitTests/JUnit4TestClass.java to edit this template
 */
package com.sio.convertisseur;

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
public class ConvertisseurIT {

    private static Convertisseur convertisseur;

    public ConvertisseurIT() {
    }

    @BeforeClass
    public static void setUpClass() throws Exception {
        convertisseur = new Convertisseur();
        convertisseur.ajouterDevise("EUR", 1.10);

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
     * Test of ajouterDevise method, of class Convertisseur.
     */
    @Test
    public void testAjouterDevise() throws Exception {

        try {
            convertisseur.ajouterDevise("EUR", 1.10);
            fail("Erreur non détectée : devise déja ajoutée");
        } catch (Exception e) {
            System.out.println(e.getMessage());
        }
    }

    /**
     * Test of convertir method, of class Convertisseur.
     */
    @Test
    public void testConvertir() throws Exception {

        convertisseur.ajouterDevise("USD", 1.0);
        convertisseur.ajouterDevise("GBP", 1.6);

        //conversion d'un euro en euro
        double resultat = convertisseur.convertir(1.0, "EUR", "EUR");
        assertEquals(1.0, resultat, 0);
        //conversion d'un livre en dollar
        resultat = convertisseur.convertir(1.0, "GBP", "USD");
        assertEquals(1.6, resultat, 0);
        //conversion de 20 euro en livre 
        resultat = convertisseur.convertir(20.0, "EUR", "GBP");
        assertEquals(13.75, resultat, 0);

        try {
            convertisseur.convertir(1.0, "YEN", "USD");
            fail("Erreur no détectée : devise inconnue");

        } catch (Exception e) {
            System.out.println(e.getMessage());

        }
    }

}
