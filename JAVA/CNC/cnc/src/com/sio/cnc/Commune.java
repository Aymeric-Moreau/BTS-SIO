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
    private static double classement;

    /**
     * permet de créer une nouvelle commune
     *
     * @param codePostal code postal de la communne
     * @param nomCommune nom de la commune
     * @param classement classement de la commune
     */
    public Commune(String codePostal, String nomCommune, double classement) {

        this.codePostal = codePostal;
        this.nomCommune = nomCommune;
        this.classement = classement;
    }

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

    public static double getLimiteInfClassement() {
        return limiteInfClassement;
    }

    public static double getLimiteSupClassement() {
        return limiteSupClassement;
    }

    public static void setLimiteInfClassement(double limiteInfClassement) {
        Commune.limiteInfClassement = limiteInfClassement;
    }

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
     * détermine la mention à afficher sur les étiquettes en fonction du classement
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

    @Override
    public String toString() {

        return "Commune{" + "codePostal=" + codePostal + ", nomCommune=" + nomCommune + ", mention = " + retourneMention() + '}';
    }

}
