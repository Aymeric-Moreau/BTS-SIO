package classescasvaliers;

public class Categorie {

    /**
     * propriétés privées
     */
    private String numCategorie;
    private String nomCategorie;

    /**
     * Constructeur de la classe
     *
     * @param n numéro de la catégorie
     * @param nom nom de la catégorie
     */
    public Categorie(String n, String nom) {
        numCategorie = n;
        nomCategorie = nom;
    }

    /**
     * accesseur pour le nom de la catégorie
     *
     * @return le nom de la catégorie
     */
    public String getNomCategorie() {

        return nomCategorie;

    }

}
