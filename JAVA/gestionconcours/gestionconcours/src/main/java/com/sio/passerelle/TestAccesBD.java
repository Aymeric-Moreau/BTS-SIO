/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.sio.passerelle;

import org.hibernate.Session;

/**
 *
 * @author aymer
 */
public class TestAccesBD {
    public static void main(String[] args) {
    // récupération d'une session Gibernate
    Session s = HibernateUtil.getSession();
    s.close();
    }
    
    
}
