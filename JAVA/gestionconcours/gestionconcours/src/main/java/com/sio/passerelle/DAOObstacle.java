/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.sio.passerelle;

import com.sio.entityconcours.Epreuve;
import com.sio.entityconcours.Obstacle;
import com.sio.entityconcours.TypeObstacle;
import java.util.List;
import org.hibernate.Session;
import org.hibernate.Transaction;

/**
 *
 * @author aymer
 */
public class DAOObstacle {
    
        public static List<Obstacle> getListeObstacleHauteurLargeur(int haut , int large) {

        Session session = HibernateUtil.getSession();
        return (List<Obstacle>) session.createQuery("from Obstacle where hauteur > :haut AND largeur > :large ")
                .setParameter("haut", haut)
                .setParameter("large", large)
                .list();

    }
        
        public static void setObstacle(Obstacle o){
        //récupération d'une session hibernate
        Session session = HibernateUtil.getSession();
        //démarrage d'une transaction
        Transaction trans = session.beginTransaction();
        //demande de persistance d'un objet Obstacle
        session.persist(o);
        // validation de la transaction
        trans.commit();
    
    }
}
