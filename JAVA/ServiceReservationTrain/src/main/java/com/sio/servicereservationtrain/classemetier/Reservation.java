/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.sio.servicereservationtrain.classemetier;




/**
 *
 * @author BTS-SIO
 */
public class Reservation {

    private String numReservation; 
    private Train objTrain;
    private int nombrePlaces;
 
    public Reservation() {
    }
    public Reservation(String numReservation, Train objTrain, int nombrePlaces) {
        this.numReservation = numReservation;
        this.objTrain = objTrain;
        this.nombrePlaces = nombrePlaces;
    }

    public String getNumReservation() {
        return numReservation;
    }

    public void setObjTrain(Train objTrain) {
        this.objTrain = objTrain;
    }

    public int getNombrePlaces() {
        return nombrePlaces;
    }

    public void setNombrePlaces(int nombrePlaces) {
        this.nombrePlaces = nombrePlaces;
    }

    public void setNumReservation(String numReservation) {
        this.numReservation = numReservation;
    }

    public Train getObjTrain() {
        return objTrain;
    }

}
