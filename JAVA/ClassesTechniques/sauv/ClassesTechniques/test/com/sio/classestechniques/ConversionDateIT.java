/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/UnitTests/JUnit5TestClass.java to edit this template
 */
package com.sio.classestechniques;

import org.junit.jupiter.api.AfterEach;
import org.junit.jupiter.api.AfterAll;
import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.BeforeAll;
import org.junit.jupiter.api.Test;
import static org.junit.jupiter.api.Assertions.*;


import java.time.LocalDate;

/**
 *
 * @author aymer
 */
public class ConversionDateIT {
    
    String dates;
    LocalDate datel;
    
    public ConversionDateIT() {
    }
    
    @BeforeAll
    public static void setUpClass() {
    }
    
    @AfterAll
    public static void tearDownClass() {
    }
    
    @BeforeEach
    public void setUp() {
    }
    
    @AfterEach
    public void tearDown() {
    }

    /**
     * Test of stringToLocalDate method, of class ConversionDate.
     */
    @Test
    public void testStringToLocalDate() {
        LocalDate test = LocalDate.parse("2023-09-25");
        dates = "2023-09-25";
        LocalDate result = ConversionDate.stringToLocalDate(dates);
        assertEquals(test, result);
        
    }

    /**
     * Test of localDateToString method, of class ConversionDate.
     */
    @Test
    public void testLocalDateToString() {
        
        
        LocalDate datel = LocalDate.parse("2023-09-25");
         
        dates = "2023-09-25";
        String result = ConversionDate.localDateToString(datel);
        assertEquals(datel, result);
    }
    
}
