/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.sio.servicereservationtrain.classemetier;


import java.time.LocalTime;


/**
 *
 * @author BTS-SIO
 */
public class Train {

    private String numTrain;
    private String villeDepart;
   
    private LocalTime heureDepart; // Format : 12:30
     private String villeArrivee;

    public Train() {
    }

    public Train(String numTrain, String villeDepart, String villeArrivee, LocalTime heureDepart) {
        this.numTrain = numTrain;
        this.villeDepart = villeDepart;      
         this.villeArrivee = villeArrivee;
         this.heureDepart = heureDepart;
    }

    public String getNumTrain() {
        return numTrain;
    }

    public String getVilleDepart() {
        return villeDepart;
    }

    public void setVilleDepart(String villeDepart) {
        this.villeDepart = villeDepart;
    }

    public void setNumTrain(String numTrain) {
        this.numTrain = numTrain;
    }

    public void setVilleArrivee(String villeArrivee) {
        this.villeArrivee = villeArrivee;
    }

    public String getVilleArrivee() {
        return villeArrivee;
    }

   public LocalTime getHeureDepart() {
        return heureDepart;
    }

    public void setHeureDepart(LocalTime heureDepart) {
        this.heureDepart = heureDepart;
    }
}
