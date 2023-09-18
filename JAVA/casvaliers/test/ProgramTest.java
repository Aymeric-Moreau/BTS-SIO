package test;
import java.time.LocalDate;
import classescasvaliers.*;
public class ProgramTest{
	public static void main(String[] args) {

            //declaration et instanciation des categories
            Categorie cat1 = new Categorie("N1", "National 1");
            Categorie cat2 = new Categorie("N2", "National 2");
            Categorie cat3 = new Categorie("D", "Departemental");
       
            //declaration et instanciation des cavaliers
            Cavalier cavalier1 = new Cavalier(1, LocalDate.of(2010, 3, 10), "Durand", "Jacky", 1, cat1);
            Cavalier cavalier2 = new Cavalier(2, LocalDate.of(2011, 4, 15), "Durand", "Annabelle", 2, cat1);
            Cavalier cavalier3 = new Cavalier(3, LocalDate.of(2012, 10, 20), "Lucky", "Luke", 1, cat3);
			
			
			Epreuve epreuve1 = new Epreuve(1, "Epreuve en deux manches", cat1);
            Epreuve epreuve2 = new Epreuve(2, "Epreuve a barrage immediat", cat3);

            //modification de la categorie du cavalier 3
            cavalier3.setCategorieCavalier(cat1);

            //inscription des cavaliers aux epreuves
            epreuve1.affecter(cavalier1);
            epreuve1.affecter(cavalier2);
            epreuve1.affecter(cavalier3);
            epreuve2.affecter(cavalier3);
			//affichage des engages e l'epreuve 1
            epreuve1.afficherEngages();

            //affichage des engages e l'epreuve 2
            epreuve2.afficherEngages();
                
        }
}