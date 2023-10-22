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
public class ConvertisseurBasiqueIT {

    public ConvertisseurBasiqueIT() {
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
     * Test de la méthode convertirEnEuros de la calsse ConvertisseurBasique
     * Test avec la valeur 0
     */
    @Test
    public void testConvertitEnEurosCasZero() {
        ConvertisseurBasique instance = new ConvertisseurBasique();
        assertEquals(0.0, instance.convertirEnEuros(0), 0);
    }

    /**
     * Test of convertirEnEuros method, of class ConvertisseurBasique.
     */
    @Test
    public void testConvertirEnEurosTauxOfficiel() {
        ConvertisseurBasique instance = new ConvertisseurBasique();
        assertEquals(1, instance.convertirEnEuros(0.96), 0);
    }

    /**
     * Test of convertirEnEuros method, of class ConvertisseurBasique.
     */
    @Test
    public void testConvertirEnEurosAutreMontant() {
        ConvertisseurBasique instance = new ConvertisseurBasique();
        assertEquals(83.41, instance.convertirEnEuros(80), 0.1);
    }

    /**
     * Test of convertirEnFrancSuisse method, of class ConvertisseurBasique
     */
    @Test
    public void testConvertirEnFrancSuisseCasZero() {
        ConvertisseurBasique instance = new ConvertisseurBasique();
        assertEquals(0.0, instance.convertirEnFrancSuisse(0), 0);

    }
    
       /**
     * Test of convertirEnFrancSuisse method, of class ConvertisseurBasique
     */
    @Test
    public void testConvertirEnFrancSuisseTauxOfficiel() {
        ConvertisseurBasique instance = new ConvertisseurBasique();
        assertEquals(0.96, instance.convertirEnFrancSuisse(1), 0);

    }
    
       /**
     * Test of convertirEnFrancSuisse method, of class ConvertisseurBasique
     */
    @Test
    public void testConvertirEnFrancSuisseAutreMontant() {
        ConvertisseurBasique instance = new ConvertisseurBasique();
        assertEquals(76.72, instance.convertirEnFrancSuisse(80), 0.1);

    }

}
