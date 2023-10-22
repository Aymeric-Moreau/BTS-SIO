package com.sio.passerelle;

import org.hibernate.HibernateException;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.cfg.Configuration;

/**
 *
 * @author SIO
 */
public class HibernateUtil {
    private static final SessionFactory sessionFactory;
    static {
        try {
            sessionFactory = new Configuration().configure().buildSessionFactory();
        } catch (HibernateException ex) {
            throw new ExceptionInInitializerError(ex);
        }
    }

    /**
     *
     * @return une session hibernate
     * @throws HibernateException
     */
    public static Session getSession() throws HibernateException {
        return sessionFactory.openSession();
    }
}
