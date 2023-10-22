/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.sio.servicereservationtrain.resources;


import com.sio.servicereservationtrain.classemetier.Reservation;
import com.sio.servicereservationtrain.classemetier.Train;
import java.time.LocalTime;
import java.util.ArrayList;
import java.util.List;


/**
 *
 * @author BTS-SIO
 */

public class TrainBD {

    private static List<Train> trains = new ArrayList<Train>();
    private static List<Reservation> reservations = new ArrayList<Reservation>();
   
    static {
        Train train = new Train("TR123", "Nantes",  "Paris",LocalTime.of(12, 50));
        trains.add(train);
        trains.add(new Train("TR127", "Poitiers", "Paris", LocalTime.of(14, 20)));
        trains.add(new Train("TR129", "Poitiers", "Bordeaux", LocalTime.of(17, 10)));
        reservations.add(new Reservation("1", train, 5));
        
    }

    public static List<Train> getTrains() {
        
        return trains;
    }

    public static List<Reservation> getReservations() {
        return reservations;
    }

    public static void setReservations(List<Reservation> reservations) {
        TrainBD.reservations = reservations;
    }

    public static void setTrains(List<Train> trains) {
        TrainBD.trains = trains;
    }
   
}
