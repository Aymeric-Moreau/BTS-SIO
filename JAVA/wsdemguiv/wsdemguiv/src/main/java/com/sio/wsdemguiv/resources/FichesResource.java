/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/WebServices/GenericResource.java to edit this template
 */
package com.sio.wsdemguiv.resources;

import jakarta.ws.rs.core.Context;
import jakarta.ws.rs.core.UriInfo;
import jakarta.ws.rs.Produces;
import jakarta.ws.rs.Consumes;
import jakarta.ws.rs.GET;
import jakarta.ws.rs.Path;
import jakarta.ws.rs.PUT;
import jakarta.enterprise.context.RequestScoped;

/**
 * REST Web Service
 *
 * @author aymer
 */
@Path("fiches")
@RequestScoped
public class FichesResource {

    @Context
    private UriInfo context;

    /**
     * Creates a new instance of FichesResource
     */
    public FichesResource() {
    }

    /**
     * Retrieves representation of an instance of com.sio.wsdemguiv.resources.FichesResource
     * @return an instance of java.lang.String
     */
    @GET
    @Produces(jakarta.ws.rs.core.MediaType.APPLICATION_JSON)
    public String getJson() {
        //TODO return proper representation object
        throw new UnsupportedOperationException();
    }

    /**
     * PUT method for updating or creating an instance of FichesResource
     * @param content representation for the resource
     */
    @PUT
    @Consumes(jakarta.ws.rs.core.MediaType.APPLICATION_JSON)
    public void putJson(String content) {
    }
}
