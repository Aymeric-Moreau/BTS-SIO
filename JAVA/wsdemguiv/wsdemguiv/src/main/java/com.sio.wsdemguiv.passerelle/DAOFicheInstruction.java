/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.sio.wsdemguiv.passerelle;

import com.sio.wsdemguiv.entity.FicheInstruction;
import java.util.List;
import jakarta.persistence.NoResultException;
import org.hibernate.Session;

/**
 *
 * @author bc
 */
public class DAOFicheInstruction {
    /**
     * Recherche les fiches d'instruction
     * @return une collection de fiches d'instruction
     */
    public static List<FicheInstruction> getFiches() {
        Session session = HibernateUtil.getSession();
        return session.createQuery("from FicheInstruction").list();
    }

    /**
     * Recherche la fiche d'instruction dont le numéro de dossier est passé en paramètre
     * @param num numéro de dossier
     * @return la fiche d'instruction correspondant au numéro de dossier 
     * ou null si la fiche n'est pas trouvée
     */
    public static FicheInstruction getFiche(int num) {
     
        try {
            Session session = HibernateUtil.getSession();
            return (FicheInstruction) session.createQuery("from FicheInstruction where leDossier.dos_numero = :num")
                    .setParameter("num", num)
                    .uniqueResult();
        } catch (NoResultException e) {
            return null;
        }

    }

    /**
     * Enregistre une nouvelle fiche d'instruction
     * @param fiche un objet de type FicheInstruction
     */
    public static void addFicheInstruction(FicheInstruction fiche) {

        Session session = HibernateUtil.getSession();
        org.hibernate.Transaction trans = session.beginTransaction();

        session.persist(fiche);
        trans.commit();
    }


}
