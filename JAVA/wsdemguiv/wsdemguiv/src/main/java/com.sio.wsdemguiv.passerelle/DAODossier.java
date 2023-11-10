/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.sio.wsdemguiv.passerelle;

import com.sio.wsdemguiv.entity.Dossier;
import java.util.List;
import jakarta.persistence.NoResultException;
import org.hibernate.Session;


/**
 *
 * @author bc
 */
public class DAODossier {

    /**
     * Retourne les dossiers
     * @return une collection de dossiers
     */
    public static List<Dossier> getDossier() {
        Session session = HibernateUtil.getSession();
        return session.createQuery("from Dossier").list();
    }

    /**
     * Retourne le dossier dont le numéro est passé en paramètre
     * @param num num du dossier
     * @return un objet de type Dossier ou null si le dossier n'est pas trouvé
     */
    public static Dossier getDossier(int num) {
       
        try {
            Session session = HibernateUtil.getSession();
            return (Dossier) session.createQuery("from Dossier where dos_numero = :num")
                    .setParameter("num", num)
                    .uniqueResult();
          
        } catch (NoResultException e) {
            return null;
        }
    }

    /**
     * Ajoute un nouveau dossier 
     * @param dossier un objet de type dossier
     */
    public static void addDossier(Dossier dossier) {

        Session session = HibernateUtil.getSession();
        org.hibernate.Transaction trans = session.beginTransaction();

        session.persist(dossier);
        trans.commit();
    }
}
