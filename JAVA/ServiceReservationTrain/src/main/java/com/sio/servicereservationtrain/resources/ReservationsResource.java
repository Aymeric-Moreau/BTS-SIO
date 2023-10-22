/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/WebServices/GenericResource.java to edit this template
 */
package com.sio.servicereservationtrain.resources;

import com.sio.servicereservationtrain.classemetier.Train;
import com.sio.servicereservationtrain.classemetier.Reservation;
import jakarta.ws.rs.Consumes;
import jakarta.ws.rs.DELETE;
import jakarta.ws.rs.FormParam;
import jakarta.ws.rs.GET;
import jakarta.ws.rs.POST;
import jakarta.ws.rs.Path;
import jakarta.ws.rs.PathParam;
import jakarta.ws.rs.Produces;
import jakarta.ws.rs.core.Context;
import jakarta.ws.rs.core.GenericEntity;
import jakarta.ws.rs.core.MediaType;
import jakarta.ws.rs.core.Response;
import jakarta.ws.rs.core.UriInfo;
import java.time.LocalTime;
import java.util.List;

/**
 * REST Web Service
 *
 * @author bc
 */
@Path("reservations")
public class ReservationsResource {

    @Context
    private UriInfo context;

    /**
     * Creates a new instance of ReservationsResource
     */
    public ReservationsResource() {
    }

    /**
     * Retrieves representation of an instance of
     * com.sio.servicereservationtrainrest.ReservationsResource
     *
     * @return an instance of java.lang.String
     *
     * @GET
     * @Produces(MediaType.APPLICATION_JSON) public String getJson() { //TODO
     * return proper representation object throw new
     * UnsupportedOperationException(); }
     *
     * /**
     * récupère la liste des reseervation
     *
     * @return une instance de jakarta.ws.rs.core.Response;
     */
    @GET
    @Produces("application/json")
    public Response getReservations() {
        List<Reservation> reservations = TrainBD.getReservations();
        GenericEntity<List<Reservation>> liste = new GenericEntity<List<Reservation>>(reservations) {
        };
        return Response
                .status(Response.Status.OK)
                .entity(liste)
                .build();

    }

    /**
     * permet de créer une nouvelle Reservation 
     * numReservation, Train numTrain, int nombrePlaces)
     *
     * @param numReservation numéro du train
     * @param numTrain heure de départ
     * @param nombrePlaces ville de départ
     * @return une instance de javax.ws.rs.core.Response
     */
    @POST
    @Consumes(MediaType.APPLICATION_FORM_URLENCODED)
    public Response createReservation(@FormParam("numReservation") String numReservation, @FormParam("numTrain") String numTrain, @FormParam("nombrePlaces") int nombrePlaces) {
        List<Train> ListeTrain = TrainBD.getTrains();
        for (Train train : ListeTrain) {
            if (train.getNumTrain().equals(numTrain)) {
                Reservation newReservation = new Reservation();
                newReservation.setNumReservation(numReservation);
                newReservation.setObjTrain(train);
                newReservation.setNombrePlaces(nombrePlaces);
                TrainBD.getReservations().add(newReservation);
            }
        }

        return Response
                .status(Response.Status.CREATED)
                .build();
    }
    
     /**
     * permet de supprimer une Reservation
     *
     * @param numReservation numéro de Reservation à supprimer
     * @return une instance de javax.ws.rs.core.Response
     */
    @DELETE
    @Path("{id}")
    public Response supprimerTrain(@PathParam("id") String numReservation) {
        Response reponse;
        Reservation leReservationTrouve = null;
        List<Reservation> reservations = TrainBD.getReservations();
        for (Reservation current : reservations) {

            if (current.getNumReservation().equals(numReservation)) {
                leReservationTrouve = current;
            }
        }
        if (leReservationTrouve != null) {
            reservations.remove(leReservationTrouve);
            String message = "La Reservation a été supprimé";
            reponse = Response.status(Response.Status.OK).entity(message).build();
        } else {
            reponse = Response
                    .status(Response.Status.NO_CONTENT)
                    .build();
        }
        return reponse;

    }
}
