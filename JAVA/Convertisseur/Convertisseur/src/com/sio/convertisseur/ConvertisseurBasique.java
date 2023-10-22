/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.sio.convertisseur;

/**
 *
 * @author aymer
 */
public class ConvertisseurBasique {

    private static final double TAUX_CONVERSION = 0.96;

    public double convertirEnEuros(double nombreEnFrancSuisse) {
        double result;
        result = nombreEnFrancSuisse / TAUX_CONVERSION;

        return result;

    }

    public double convertirEnFrancSuisse(double nombreEnEuros) {

        double result;
        result = nombreEnEuros * TAUX_CONVERSION;

        return result;

    }

}
