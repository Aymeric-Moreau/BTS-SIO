package com.sio.classestechniques;


import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.time.format.DateTimeParseException;



/**
 *
 * @author
 */
public class ConversionDate {

    /**
     * Convertit une chaîne de caractères en objet LocalDate
     *
     * @param date une chaîne de caractères comportant une date au jour/mois/année
     * @return objet LocalDate ou null si la conversion n'est pas possible
     */
    public static LocalDate stringToLocalDate(String date) {
        try {
        DateTimeFormatter formatter = DateTimeFormatter.ofPattern("dd/MM/yyyy");
        LocalDate localDate = LocalDate.parse(date, formatter);
        return localDate;
        }catch(DateTimeParseException  | NullPointerException e){
            return null;
        }

    }

    /**
     * Convertit un objet LocalDate en chaîne de caractères
     * @param date un objet LocalDate
     * @return une chaîne au format jour/mois/année ou null si la conversion n'est pas possible
     */
    public static String  localDateToString(LocalDate date) {
        try {
           DateTimeFormatter formatter = DateTimeFormatter.ofPattern("dd/MM/yyyy");
           return formatter.format(date);
        } catch (NullPointerException e) {
            return null;
        }

    }
   

    }
