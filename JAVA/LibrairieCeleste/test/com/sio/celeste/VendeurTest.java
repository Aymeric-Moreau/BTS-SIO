package com.sio.celeste;

import java.time.LocalDate;
import org.junit.After;
import org.junit.AfterClass;
import static org.junit.Assert.*;
import org.junit.Before;
import org.junit.BeforeClass;
import org.junit.Test;

/**
 * Classe Test de la classe Vendeur
 *
 * @author bc
 */
public class VendeurTest {

    private static Dossier unDossier;

    private static Dossier unDossier1;
    private static Dossier unDossier2;
    private static Dossier unDossier3;
    private static Dossier unDossier4;
    private static Dossier unDossier5;
    private static Dossier unDossier6;
    private static Vendeur leVendeur;
    private static Client clientParticulier;

    /**
     *
     */
    @BeforeClass
    public static void setUpClass() {
        //initialisation des objets pour les tests
        leVendeur = new Vendeur("Martin", "Jean");
        clientParticulier = new Particulier(1, "Tours", "0247281015", "Durand", "Martine");
        unDossier = new Dossier(1, 'C', LocalDate.of(2021, 9, 11), 10000.00, clientParticulier, leVendeur);

        //Ajout du dossier 1 avec la position Accepté à la collection de dossiers du vendeur
        unDossier1 = new Dossier(1, 'C', LocalDate.of(2021, 9, 1), 12240.00, clientParticulier, leVendeur);
        unDossier1.setPosition("Accepté");
        leVendeur.addDossier(unDossier1);

        //Ajout du dossier 2 avec la position par défaut Attente à la collection de dossiers du vendeur
        unDossier2 = new Dossier(2, 'C', LocalDate.of(2021, 9, 1), 5000.00, clientParticulier, leVendeur);
        leVendeur.addDossier(unDossier2);

        //Ajout du dossier 2 avec la position Accepté après étude à la collection de dossiers du vendeur
        unDossier3 = new Dossier(3, 'T', LocalDate.of(2021, 9, 1), 9130.00, clientParticulier, leVendeur);
        unDossier3.setPosition("Accepté après étude");
        leVendeur.addDossier(unDossier3);

        //Ajout du dossier 2 avec la position Refusé à la collection de dossiers du vendeur
        unDossier4 = new Dossier(4, 'T', LocalDate.of(2021, 9, 1), 10000.00, clientParticulier, leVendeur);
        unDossier4.setPosition("Refusé");
        leVendeur.addDossier(unDossier4);

        unDossier5 = new Dossier(5, 'C', LocalDate.of(2021, 9, 1), 12240.00, clientParticulier, leVendeur);
        unDossier5.setPosition("Attente");
        leVendeur.addDossier(unDossier5);

        unDossier6 = new Dossier(6, 'C', LocalDate.of(2021, 9, 1), 12240.00, clientParticulier, leVendeur);
        unDossier6.setPosition("Etude");
        leVendeur.addDossier(unDossier6);

        //Le dictionnaire des pourcentages est rempli
        Pourcentage.addPourcentage('C', 7);
        Pourcentage.addPourcentage('L', 9);
        Pourcentage.addPourcentage('T', 8);
        Pourcentage.addPourcentage('B', 10);

    }

    /**
     *
     */
    @AfterClass
    public static void tearDownClass() {
    }

    /**
     *
     */
    public VendeurTest() {
    }

    /**
     *
     */
    @Before
    public void setUp() {

    }

    /**
     *
     */
    @After
    public void tearDown() {
    }

    /**
     * Test de la méthode donnerNbDosAcceptes de la classe Vendeur.
     */
    @Test
    public void testDonnerNbDosAcceptes() {
        int result = leVendeur.donnerNbDosAcceptes();
        assertEquals(1, result, 0.1);
    }

    /**
     * Test de la méthode donnerNbDosRefuses de la classe Vendeur.
     */
    @Test
    public void testDonnerNbDosRefuses() {
               int result = leVendeur.donnerNbDosRefuses();
        assertEquals(1, result, 0.1);
    }

    /**
     * Test de la méthode testDonnerMontantComCasDossierAttente de la classe
     * Vendeur.
     */
    @Test
    public void testDonnerMontantComCasDossierAttente() {
        double result = (double) leVendeur.donnerMontantCom(unDossier5);
        assertEquals(0, result, 0.1);

    }

    /**
     * Test de la méthode testDonnerMontantComCasDossierEtude de la classe
     * Vendeur.
     */
    @Test
    public void testDonnerMontantComCasDossierEtude() {
        double result = (double) leVendeur.donnerMontantCom(unDossier6);
        assertEquals(0, result, 0.1);
    }

    /**
     * Test de la méthode testDonnerMontantComCasDossierRefuse de la classe
     * Vendeur.
     */
    @Test
    public void testDonnerMontantComCasDossierRefuse() {
        double result = (double) leVendeur.donnerMontantCom(unDossier4);
        assertEquals(0, result, 0.1);
    }

    /**
     * Test de la méthode testDonnerMontantComCasDossierAccepte de la classe
     * Vendeur.
     */
    @Test
    public void testDonnerMontantComCasDossierAccepte() {

        double result = (double) leVendeur.donnerMontantCom(unDossier1);
        assertEquals(856.8, result, 0.1);

    }

    /**
     * Test de la méthode testDonnerMontantComCasDossierAccepteApresEtude de la
     * classe Vendeur.
     */
    @Test
    public void testDonnerMontantComCasDossierAccepteApresEtude() {
        double result = (double) leVendeur.donnerMontantCom(unDossier3);
        assertEquals(730.4, result, 0.1);
    }

    /**
     * Test de la méthode testDonnerMontantTotal de la classe Vendeur.
     */
    @Test
    public void testDonnerMontantTotal() {
        double result = leVendeur.donnerMontantTotal();
        assertEquals(1587.2,result,0.1);
    }

}
