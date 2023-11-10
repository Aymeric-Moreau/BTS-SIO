/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.sio.passerelle;

import com.sio.entityconcours.Epreuve;
import com.sio.entityconcours.TypeObstacle;
import java.util.List;
import org.hibernate.Session;
import org.hibernate.Transaction;

/**
 *
 * @author aymer
 */
public class DAOTypeObstacle {
    
        public static TypeObstacle getTypeObstacleId(int num) {

        Session session = HibernateUtil.getSession();
        return (TypeObstacle) session.createQuery("from TypeObstacle where id = :num")
                .setParameter("num", num)
                .uniqueResult();

    }
    
    public static void setTypeObstacle(TypeObstacle t){
        //récupération d'une session hibernate
        Session session = HibernateUtil.getSession();
        //démarrage d'une transaction
        Transaction trans = session.beginTransaction();
        //demande de persistance d'un objet TypeObstacle
        session.persist(t);
        // validation de la transaction
        trans.commit();
    
    }
}
