/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package cnc;

import com.sio.cnc.Commune;
import com.sio.cnc.Cooperateur;
import com.sio.cnc.Parcelle;
import com.sio.cnc.Production;

/**
 *  auteur du ficher
 * @author Aymeric moreau
 */
public class Cnc {

    /**
     * fonction main
     * 
     * @param args the command line arguments
     */
    public static void main(String[] args) {

        Commune.setLimiteInfClassement(0.8);
        Commune.setLimiteSupClassement(1);

        // Déclaration des variables d'instances
        Commune commune1;
        Commune commune2;
        Parcelle parcelle;
        Cooperateur cooperateur1;
        Production production1;
        Production production2;

        //instanciation d'un objet de type Commune
        commune1 = new Commune("51430", "Dizy");

        //valorisation et affichage du classement  de la commune 1
        commune1.setClassement(0.8);
        System.out.println("le classement de la commune1 : " + commune1.getClassement());

        //instanciation d'un objet de type Commune
        commune2 = new Commune("51200", "Epernay");

        //valorisation et affichage du classement  de la commune 2
        commune2.setClassement(0.7);
        System.out.println("le classement de la commune2 : " + commune2.getClassement());

        //modification et affichage du classement de la commune 2
        commune2.setClassement(1.2);
        System.out.println("le classement de la commune2 : " + commune2.getClassement());

        //Instanciation d'un objet de type Cooperateur
        cooperateur1 = new Cooperateur("Boivin", commune1);

        //instanciation et ajout d'un objet de type Parcelle
        parcelle = new Parcelle(1, 2, commune1);
        cooperateur1.addParcelle(parcelle);
        
        System.out.println("la commune de la passerelle est : " + parcelle.getLaCommune().getNomCommune());

        //instanciation et ajout de 2 objet de type Production
        production1 = new Production(1990, 100);
        parcelle.addProduction(production1);

        production2 = new Production(1995, 200);
        parcelle.addProduction(production2);

        System.out.println("la quantité total de produit qu'a produit la parcelle1 est de  : " + parcelle.getQteProduction());

        System.out.println("la quantité total de produit qu'a produit la parcelle1 en 1990 est de  : " + parcelle.getQteProductionAnne(1990));

        //ajout de la parcelle et affichage du nombre de parcelles du cooperateur1
        cooperateur1.addParcelle(parcelle);
        System.out.println("le nombre de parcelles du cooperateur 1 : " + cooperateur1.getLesParcelles().size());

        //instanciation d'un nouvel objet de type Parcelle avec numéro different
        parcelle = new Parcelle(2, 3, commune2);

        //ajout de la parcelle et affichage du nombre de parcelles du cooperateur1
        cooperateur1.addParcelle(parcelle);
        System.out.println("le nombre de parcelles du cooperateur 1 : " + cooperateur1.getLesParcelles().size());

    }

}
