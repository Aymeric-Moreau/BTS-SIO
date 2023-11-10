/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.sio.passerelle;

import com.sio.entityconcours.Concours;
import com.sio.entityconcours.TypeObstacle;
import java.util.List;
import org.hibernate.Session;

/**
 *
 * @author aymer
 */
public class DAOConcours {

    public static List<Concours> getListeConcours() {

        Session session = HibernateUtil.getSession();
        return (List<Concours>) session.createQuery("from Concours").list();

    }

    public static Concours getConcoursId(String num) {

        Session session = HibernateUtil.getSession();
        return (Concours) session.createQuery("from Concours where codeFFE = :num")
                .setParameter("num", num)
                .uniqueResult();

    }
}
