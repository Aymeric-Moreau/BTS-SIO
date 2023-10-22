package com.sio.celeste;

import org.junit.After;
import org.junit.AfterClass;
import static org.junit.Assert.*;
import org.junit.Before;
import org.junit.BeforeClass;
import org.junit.Test;

import java.time.LocalDate;

/**
 *
 * @author bc
 */
public class DossierTest {

    private static Vendeur leVendeur;
    private static Client leClient;
    private static Dossier unDossier1;
    private static Dossier unDossier2;
    private static Dossier unDossier3;
    private static Dossier unDossier4;

    /**
     * ce code s'execute avant l'execution de la classe entiére
     */
    @BeforeClass
    public static void setUpClass() {
        //initialisation des objets pour les tests
        leVendeur = new Vendeur("Martin", "Jean");
        leClient = new Particulier(1, "Tours", "0247281015", "Durand", "Martine");
        unDossier1 = new Dossier(1, 'C', LocalDate.now(), 1000.0, leClient, leVendeur);
        unDossier2 = new Dossier(2, 'T', LocalDate.now(), 2000.0, leClient, leVendeur);
        unDossier3 = new Dossier(3, 'L', LocalDate.now(), 3000.0, leClient, leVendeur);
        unDossier4 = new Dossier(4, 'B', LocalDate.now(), 4000.0, leClient, leVendeur);

        //le dictionnaire des pourcentages est rempli
        Pourcentage.addPourcentage('C', 7);
        Pourcentage.addPourcentage('L', 9);
        Pourcentage.addPourcentage('T', 8);
        Pourcentage.addPourcentage('B', 10);
    }

    /**
     * ce code s'execute aprés l'execution de la classe entiére
     */
    @AfterClass
    public static void tearDownClass() {
    }

    /**
     *
     */
    public DossierTest() {
    }

    /**
     * ce code s'execute avant l'execution de caque test
     */
    @Before
    public void setUp() {
    }

    /**
     * ce code s'execute aprés l'execution de chaque test
     */
    @After
    public void tearDown() {
    }

    /**
     * Test de la méthode DonnerPourcentageCom de la classe Dossier. Cas pour un
     * type de produit C
     */
    @Test
    public void testDonnerPourcentageComCasC() {
        int pourcentageCom = unDossier1.donnerPourcentageCom();
        assertEquals(7, pourcentageCom);
    }

    /**
     * Test de la méthode DonnerPourcentageCom de la classe Dossier. Cas pour un
     * type de produit T
     */
    @Test
    public void testDonnerPourcentageComCasT() {
        int pourcentageCom = unDossier2.donnerPourcentageCom();
        assertEquals(8, pourcentageCom);

    }

    /**
     * Test de la méthode DonnerPourcentageCom de la classe Dossier. Cas pour un
     * type de produit L
     */
    @Test
    public void testDonnerPourcentageComCasL() {
        int pourcentageCom = unDossier3.donnerPourcentageCom();
        assertEquals(9, pourcentageCom);
    }

    /**
     * Test de la méthode DonnerPourcentageCom de la classe Dossier. Cas pour un
     * type de produit B
     */
    @Test
    public void testDonnerPourcentageComCasB() {
        int pourcentageCom = unDossier4.donnerPourcentageCom();
        assertEquals(10, pourcentageCom);
    }

}
