package com.sio.cnc;

/**
 * Classe Commune Permet d'instancier un objet de type Commune
 *
 * @author bc
 * @version 1.0
 */
public class Commune {

    private final String codePostal;
    private final String nomCommune;
    private static double limiteInfClassement;
    private static double limiteSupClassement;
    private double classement;

    /**
     * permet de créer une nouvelle commune
     *
     * @param codePostal code postal de la communne
     * @param nomCommune nom de la commune
     *
     */
    public Commune(String codePostal, String nomCommune) {

        this.codePostal = codePostal;
        this.nomCommune = nomCommune;

    }

    /**
     *accesseur
     * retourne le code postal
     * @return le code postal
     */
    public String getCodePostal() {
        return codePostal;
    }

    /**
     * accesseur
     *
     * @return le nom de la commune
     */
    public String getNomCommune() {

        return nomCommune;
    }

    /**
     * accesseur
     * modif la limite inf
     * @return la limite inférieur du classement
     */
    public static double getLimiteInfClassement() {
        return limiteInfClassement;
    }

    /**
     * accesseur
     * modifie la limit sup
     * @return la limite supérieur du classement
     */
    public static double getLimiteSupClassement() {
        return limiteSupClassement;
    }

    /**
     * accesseur
     * retourne le classement
     * @return le classement
     */
    public double getClassement() {
        return classement;
    }

    /**
     * mutateur
     * modif la limte inférieur du classement
     * @param limiteInfClassement la limite inférieur du classement voulu
     */
    public static void setLimiteInfClassement(double limiteInfClassement) {
        Commune.limiteInfClassement = limiteInfClassement;
    }

    /**
     * mutateur
     * modif la limte supérieur du classement
     * @param limiteSupClassement la limite supérieur du classement voulu
     */
    public static void setLimiteSupClassement(double limiteSupClassement) {
        Commune.limiteSupClassement = limiteSupClassement;
    }

    /**
     * mutateur pour la propriété "classement"
     *
     * @param leClassement le classement de la commune
     */
    public void setClassement(double leClassement) {
        if (leClassement < limiteInfClassement || leClassement > limiteSupClassement) {
            classement = 0;
        } else {
            classement = leClassement;
        }
    }

    /**
     * détermine la mention à afficher sur les étiquettes en fonction du
     * classement
     *
     * @return la mention
     */
    public String retourneMention() {
        String mention;
        if (classement == 0) {
            mention = "Non classé";
        } else {
            if (classement < 0.90) {
                mention = "Cru de Champagne";
            } else if (classement < 1) {
                mention = "Premier cru";
            } else {
                mention = "Grand cru";
            }
        }
        return mention;

    }

    /**
     *
     * retourne un string
     * @return un string avec le codepostal , le nom de la commune et la mention
     */
    @Override
    public String toString() {

        return "Commune{" + "codePostal=" + codePostal + ", nomCommune=" + nomCommune + ", mention = " + retourneMention() + '}';
    }

}
