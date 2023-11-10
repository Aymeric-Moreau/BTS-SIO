/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.sio.passerelle;

import com.sio.entityconcours.Bareme;
import com.sio.entityconcours.Concours;
import org.hibernate.Session;

/**
 *
 * @author aymer
 */
public class DAOBareme {
    
        public static Bareme getBaremeId(int num) {

        Session session = HibernateUtil.getSession();
        return (Bareme) session.createQuery("from Bareme where codeBareme = :num")
                .setParameter("num", num)
                .uniqueResult();

    }
}
