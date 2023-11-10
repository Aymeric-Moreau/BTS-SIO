package com.sio.classestechniques;

import java.time.LocalDate;
import java.time.LocalDateTime;
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
     * @param date une chaîne de caractères comportant une date au
     * jour/mois/année
     * @return objet LocalDate ou null si la conversion n'est pas possible
     */
    public static LocalDate stringToLocalDate(String date) {
        try {
            DateTimeFormatter formatter = DateTimeFormatter.ofPattern("dd/MM/yyyy");
            LocalDate localDate = LocalDate.parse(date, formatter);
            return localDate;
        } catch (DateTimeParseException | NullPointerException e) {
            return null;
        }

    }

        /**
     * Convertit une chaîne de caractères en objet LocalDate
     *
     * @param date une chaîne de caractères comportant une date 
     * @param patern une chaine de caractére comportant le paterne que l'on souhaite 
     * jour/mois/année
     * @return objet LocalDate ou null si la conversion n'est pas possible
     */
    public static LocalDate stringToLocalDate(String date, String patern) {
        try {
            DateTimeFormatter formatter = DateTimeFormatter.ofPattern(patern);
            LocalDate localDate = LocalDate.parse(date, formatter);
            return localDate;
        } catch (DateTimeParseException | NullPointerException e) {
            return null;
        }

    }

    /**
     * Convertit un objet LocalDate en chaîne de caractères
     *
     * @param date un objet LocalDate
     * @return une chaîne au format jour/mois/année ou null si la conversion
     * n'est pas possible
     */
    public static String localDateToString(LocalDate date) {
        try {
            DateTimeFormatter formatter = DateTimeFormatter.ofPattern("dd/MM/yyyy");
            return formatter.format(date);
        } catch (NullPointerException e) {
            return null;
        }

    }
    
    /**
     * Convertit un objet LocalDate en chaîne de caractères
     *
     * @param date un objet LocalDate
     * @return une chaîne au format jour/mois/année ou null si la conversion
     * n'est pas possible
     */
    public static String localDateToString(LocalDate date , String patern) {
        try {
            DateTimeFormatter formatter = DateTimeFormatter.ofPattern(patern);
            return formatter.format(date);
        } catch (NullPointerException e) {
            return null;
        }

    }

    
        /**
     * Convertit une chaîne de caractères en objet LocalDateTime
     *
     * @param date une chaîne de caractères comportant une date au
     * jour/mois/année/heure/minute/seconde
     * @return objet LocalDate ou null si la conversion n'est pas possible
     */
    public static LocalDateTime stringToLocalDateTime(String date) {
        try {
           DateTimeFormatter formatter = DateTimeFormatter.ofPattern("dd/MM/yyyy HH:mm:ss");

            LocalDateTime localDateTime = LocalDateTime.parse(date, formatter);
            return localDateTime;
        } catch (DateTimeParseException | NullPointerException e) {
            return null;
        }

    }
    
     /**
     * @param date un objet LocalDateTime
     * @return une chaîne au format jour/mois/annéeheure/minute/seconde ou null si la conversion
     * n'est pas possible
     **/
    public static String localDateTimeToString(LocalDate date , String patern) {
        try {
            DateTimeFormatter formatter = DateTimeFormatter.ofPattern(patern);
            return formatter.format(date);
        } catch (NullPointerException e) {
            return null;
        }

    }
}
