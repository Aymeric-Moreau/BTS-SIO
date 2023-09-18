package classescasvaliers;

import java.util.ArrayList;

public class Epreuve {

    private int numEpreuve;
    private String nomEpreuve;
    private Categorie categorieEpreuve;
    private ArrayList<Cavalier> mesEngages;

    /**
     * constructeur
     * @param numEpreuve numéro de l'épreuve
     * @param nomEpreuve nom de l'épreuve
     * @param categorieEpreuve catégorie de l'épreuve
     */
    public Epreuve(int numEpreuve, String nomEpreuve, Categorie categorieEpreuve) {
        this.numEpreuve = numEpreuve;
        this.nomEpreuve = nomEpreuve;
        this.categorieEpreuve = categorieEpreuve;
        mesEngages = new ArrayList<Cavalier>();
    }
   
   
   /**
    * accesseur pour le numéro de l'épreuve
    * @return le numéro de l'épreuve
    */
    public int getNumEpreuve() {

        return numEpreuve;

    }

    /**
     * accesseur pour le nom de l'épreuve
     * @return le nom de l'épreuve
     */
    public String getNomEpreuve() {

        return nomEpreuve;
    }

    /**
     * mutateur pour le nom de l'épreuve
     * @param nom nouveau nom de l'épreuve
     */
    public void setNomEpreuve(String nom) {
        nomEpreuve = nom;

    }

    /**
     * accesseur pour la liste des engagés
     * @return la liste des engagés
     */
    public ArrayList<Cavalier> getMesEngages() {

        return mesEngages;
    }

    /**
     * mutateur pour la liste des engagés
     * @param liste nouvelle liste des engagés
     */
    public void setMesEngages(ArrayList<Cavalier> liste) {
        mesEngages = liste;

    }

    /**
     * accesseur pour la categorie de l'épreuve
     * @return la catégorie de l'épreuve
     */
    public Categorie getCategorieEpreuve() {

        return categorieEpreuve;

    }

    /**
     * ajoute un cavalier à la liste des engagés
     * @param c nouveau cavalier
     */
    public void affecter(Cavalier c) {
        if (categorieEpreuve == c.getCategorieCavalier()) {
            mesEngages.add(c);
        }
    }

    /**
     * affiche la liste des engagés
     */
    public void afficherEngages() {
		System.out.println();
        System.out.println(nomEpreuve);
               for (Cavalier c : mesEngages) {
            c.afficher();
        }
    }

    /**
     * compte le nombre d'engagés qui ont obtenu la licence dans l'année
     * passée en paramètre
     * @param annee année souhaitée
     * @return le nombre d'engagés
     */
    public int compterEngages(int annee) {
        int nb = 0;
        for (Cavalier c : mesEngages) {
            if (c.getDateLicence().getYear() == annee) {
                nb++;
            }
        }
        return nb;
    }
}
