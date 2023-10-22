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
public class DeviseIT {

    private static Devise devise;
    private static final String nom = "USD";
    private static final double tauxChange = 1.0;
    
    

    public DeviseIT() {
        
    }

    @BeforeClass
    public static void setUpClass() throws Exception {
//        devise = new Devise(nom, tauxChange);
    }

    @AfterClass
    public static void tearDownClass() {
    }

    @Before
    public void setUp() throws Exception {
         devise = new Devise(nom, tauxChange);

    }

    @After
    public void tearDown() {
    }



    @Test
    public void testGetNom() throws Exception {

        assertEquals(nom, devise.getNom());
    }

    @Test
    public void testGetTauxChange() throws Exception {

        assertEquals(tauxChange, devise.getTauxChange(), 0.0); // Utilisez 0.0 pour autoriser une petite marge d'erreur.
    }
    
    @Test
    public void testRegleMetierNomIncorrect(){
    
        try {
        devise = new Devise ("EURO",0);
        fail("Erreur non détectée : nom incorrect");
        }catch (Exception e) {
        System.out.println(e.getMessage());
        }
    }
    
    @Test
    public void testReglesMetierTauxNegatif(){
    try {
        devise = new Devise ("EUR",-2);
        fail("Erreur non détectée : tauxChange incorrect");
        }catch (Exception e) {
        System.out.println(e.getMessage());
        }
    }

}
