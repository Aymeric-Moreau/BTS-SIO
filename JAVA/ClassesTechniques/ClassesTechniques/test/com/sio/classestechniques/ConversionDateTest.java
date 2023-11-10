/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/UnitTests/JUnit4TestClass.java to edit this template
 */
package com.sio.classestechniques;

import org.junit.After;
import org.junit.AfterClass;
import org.junit.Before;
import org.junit.BeforeClass;
import org.junit.Test;
import static org.junit.Assert.*;

import java.time.LocalDate;
import java.time.LocalDateTime;
import java.time.Month;

/**
 *
 * @author aymer
 */
public class ConversionDateTest {

    String dates;
    LocalDate datel;
    String paterne;

    public ConversionDateTest() {

    }

    @BeforeClass
    public static void setUpClass() {

    }

    @AfterClass
    public static void tearDownClass() {
    }

    @Before
    public void setUp() {
    }

    @After
    public void tearDown() {
    }

    /**
     * Test of stringToLocalDate method, of class ConversionDate.
     */
    @Test
    public void testStringToLocalDate() {
        LocalDate test = LocalDate.of(2023, 9, 25);
        dates = "25/09/2023";
        LocalDate result = ConversionDate.stringToLocalDate(dates);
        assertEquals(test, result);
    }

        /**
     * Test of stringToLocalDate surchargé method, of class ConversionDate.
     */
    @Test
    public void testStringToLocalDateS() {
        LocalDate test = LocalDate.of(2023, 9, 25);
        dates = "25/09/2023";
        paterne = "dd/MM/yyyy";
        LocalDate result = ConversionDate.stringToLocalDate(dates,paterne);
        assertEquals(test, result);
    }
    /**
     * Test of localDateToString method, of class ConversionDate.
     */
    @Test
    public void testLocalDateToString() {
        datel = LocalDate.of(2023, 9, 25);

        dates = "25/09/2023";
        String result = ConversionDate.localDateToString(datel);
        assertEquals(dates, result);
    }
    
     /**
     * Test of localDateToString surchargé method, of class ConversionDate.
     */
    @Test
    public void testLocalDateToStringS() {
        datel = LocalDate.of(2023, 9, 25);

        dates = "25/09/2023";
        paterne = "dd/MM/yyyy";
        String result = ConversionDate.localDateToString(datel, paterne);
        assertEquals(dates, result);
    }

    
        /**
     * Test of stringToLocalDateTime method, of class ConversionDate.
     */
    @Test
    public void testStringToLocalDateTime() {
        LocalDateTime test = LocalDateTime.of(2023, 9, 25,10,23,30);
        dates = "25/09/2023  10:23:30";
        LocalDateTime result = ConversionDate.stringToLocalDateTime(dates);
        assertEquals(test, result);
    }
}
