/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.sio.wsdemguiv.passerelle;

import org.hibernate.Session;

/**
 *
 * @author bc
 */
public class CreationBD {
    public static void main(String[] args){
        Session s = HibernateUtil.getSession();
        s.close();
    }
}
