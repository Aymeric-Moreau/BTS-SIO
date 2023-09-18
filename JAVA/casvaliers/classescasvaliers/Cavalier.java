package classescasvaliers;

import java.time.LocalDate;

public class Cavalier {

    /**
     * propriétés privées
     */
    private int numLicence;
    private LocalDate dateLicence;
    private String nomCavalier;
    private String prenomCavalier;
    private int sexe;  //1 pour masculin, 2 pour f�minin
    private Categorie categorieCavalier;

    /**
     * constructeur
     *
     * @param numLicence numéro de licence
     * @param dateLicence date de la licence
     * @param nomCavalier nom du cavalier
     * @param prenomCavalier prénom du cavalier
     * @param sexe sexe du vavalier
     * @param categorieCavalier catégorie du cavalier
     */
    public Cavalier(int numLicence, LocalDate dateLicence, String nomCavalier, String prenomCavalier, int sexe, Categorie categorieCavalier) {
        this.numLicence = numLicence;
        this.dateLicence = dateLicence;
        this.nomCavalier = nomCavalier;
        this.prenomCavalier = prenomCavalier;
        this.sexe = sexe;
        this.categorieCavalier = categorieCavalier;
    }

    /**
     * accesseurs et mutateurs
     */
    public int getNumLicence() {

        return numLicence;

    }

    public LocalDate getDateLicence() {

        return dateLicence;
    }

    public String getNomCavalier() {

        return nomCavalier;

    }

    public String getPrenomCavalier() {

        return prenomCavalier;

    }

    public Categorie getCategorieCavalier() {

        return categorieCavalier;
    }

    public void setCategorieCavalier(Categorie cat) {

        categorieCavalier = cat;

    }

    /**
     * Méthode qui retourne "Monsieur" ou "Madame"
     * @return la civilité du cavalier
     */
    public String civilite() {
        String chaine;
        if (sexe == 1) {
            chaine = "Monsieur";
        } else {
            chaine = "Madame";
        }
        return chaine;
    }
    /**
     * affiche des informations du cavalier
     */
    public void afficher() {
        System.out.println(civilite() + " " + nomCavalier + " " + prenomCavalier);
    }
}
