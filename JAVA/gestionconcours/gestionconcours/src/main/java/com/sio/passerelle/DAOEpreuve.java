/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.sio.passerelle;

import com.sio.entityconcours.Concours;
import com.sio.entityconcours.Epreuve;
import com.sio.entityconcours.TypeObstacle;
import java.util.List;
import org.hibernate.Session;
import org.hibernate.Transaction;

/**
 *
 * @author aymer
 */
public class DAOEpreuve {

    public static List<Epreuve> getListeEpreuve() {

        Session session = HibernateUtil.getSession();
        return (List<Epreuve>) session.createQuery("from Epreuve order by dateEpreuve , heureDebut").list();

    }

    public static List<Epreuve> getListeEpreuveNumConcours(String num) {

        Session session = HibernateUtil.getSession();
        return (List<Epreuve>) session.createQuery("from Epreuve where numConcours = :num").setParameter("num", num).list();

    }

    public static Epreuve getEpreuveId(int num) {

        Session session = HibernateUtil.getSession();
        return (Epreuve) session.createQuery("from Epreuve where id = :num")
                .setParameter("num", num)
                .uniqueResult();

    }

    public static void setEpreuve(Epreuve e) {
        //récupération d'une session hibernate
        Session session = HibernateUtil.getSession();
        //démarrage d'une transaction
        Transaction trans = session.beginTransaction();
        //demande de persistance d'un objet TypeObstacle
        session.merge(e);
        // validation de la transaction
        trans.commit();

    }
}
