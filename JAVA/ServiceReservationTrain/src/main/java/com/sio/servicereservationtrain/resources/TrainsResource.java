/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/WebServices/GenericResource.java to edit this template
 */
package com.sio.servicereservationtrain.resources;

import com.sio.servicereservationtrain.classemetier.Reservation;
import com.sio.servicereservationtrain.classemetier.Train;
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
import java.util.ArrayList;
import java.util.List;

/**
 * REST Web Service
 *
 * @author bc
 */
@Path("trains")
public class TrainsResource {

    @Context
    private UriInfo context;

    /**
     * Creates a new instance of TrainsResource
     */
    public TrainsResource() {
    }

    /**
     * récupère la liste des trains
     *
     * @return une instance de jakarta.ws.rs.core.Response;
     */
    @GET
    @Produces("application/json")
    public Response getTrains() {
        List<Train> trains = TrainBD.getTrains();
        GenericEntity<List<Train>> liste = new GenericEntity<List<Train>>(trains) {
        };
        return Response
                .status(Response.Status.OK)
                .entity(liste)
                .build();

    }
    
    

    /**
     * récupère un train
     *
     * @param numTrain numéro du train
     * @return une instance de jakarta.ws.rs.core.Response;
     */
    @GET
    @Path("{id}")
    @Produces("application/json")
    public Response getTrain(@PathParam("id") String numTrain) {
        Response reponse;
        Train leTrainTrouve = null;
        for (Train leTrain : TrainBD.getTrains()) {
            if (numTrain.equals(leTrain.getNumTrain())) {
                leTrainTrouve = leTrain;
            }
        }

        if (leTrainTrouve != null) {
            reponse = Response
                    .status(Response.Status.OK)
                    .entity(leTrainTrouve)
                    .build();
        } else {
            reponse = Response
                    .status(Response.Status.NO_CONTENT)
                    .build();
        }
        return reponse;
    }
    
    /**
     * récupère des train en fonction de la ville de départ
     *
     * @param villeDepart la ville deDepart du train
     * @return une instance de jakarta.ws.rs.core.Response;
     */
    @GET
    @Path("depart/{villeDepart}")
    @Produces("application/json")
    public Response getTrainVilleDepart(@PathParam("villeDepart") String villeDepart) {
        Response reponse;
        List<Train> leTrainTrouve = new ArrayList<Train>();

        for (Train leTrain : TrainBD.getTrains()) {
            if (villeDepart.equals(leTrain.getVilleDepart())) {
                leTrainTrouve.add(leTrain);
            }
        }

        if (leTrainTrouve != null) {
            reponse = Response
                    .status(Response.Status.OK)
                    .entity(leTrainTrouve)
                    .build();
        } else {
            reponse = Response
                    .status(Response.Status.NO_CONTENT)
                    .build();
        }
        return reponse;
    }

    /**
     * permet de créer un nouveau train
     *
     * @param numTrain numéro du train
     * @param heureDepart heure de départ
     * @param villeDepart ville de départ
     * @param villeArrivee ville d'arrivée
     * @return une instance de javax.ws.rs.core.Response
     */
    @POST
    @Consumes(MediaType.APPLICATION_FORM_URLENCODED)
    public Response createTrain(@FormParam("numTrain") String numTrain, @FormParam("heureDepart") String heureDepart, @FormParam("villeDepart") String villeDepart, @FormParam("villeArrivee") String villeArrivee) {
        Train newTrain = new Train();
        newTrain.setNumTrain(numTrain);
        newTrain.setHeureDepart(LocalTime.parse(heureDepart));
        newTrain.setVilleArrivee(villeDepart);
        newTrain.setVilleDepart(villeArrivee);
        TrainBD.getTrains().add(newTrain);
        return Response
                .status(Response.Status.CREATED)
                .build();
    }

    /**
     * permet de supprimer un train
     *
     * @param numTrain numéro du train à supprimer
     * @return une instance de javax.ws.rs.core.Response
     */
    @DELETE
    @Path("{id}")
    public Response supprimerTrain(@PathParam("id") String numTrain) {
        Response reponse;
        Train leTrainTrouve = null;
        List<Train> trains = TrainBD.getTrains();
        for (Train current : trains) {

            if (current.getNumTrain().equals(numTrain)) {
                leTrainTrouve = current;
            }
        }
        if (leTrainTrouve != null) {
            trains.remove(leTrainTrouve);
            String message = "Le train a été supprimé";
            reponse = Response.status(Response.Status.OK).entity(message).build();
        } else {
            reponse = Response
                    .status(Response.Status.NO_CONTENT)
                    .build();
        }
        return reponse;

    }

    @Path("/reservations") // Chemin suivant /trains/reservations pour invoquer cette méthode
    public ReservationsResource getReservationResource() {
        return new ReservationsResource();
    }
}
