using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace BibliothèqueKES {
    public class Contrat
    {
        #region Propriétés privées de la classe
        //Propiétés privées
        private int numero;
        private DateTime dateContrat;
        private float montantContrat; /*montant payé par le client*/
        private List<Intervention> listeInterventions; /*liste des interventions*/
        public Client leClient;
        #endregion

        #region Constructeur
        /// <summary>
        /// instancie un objet de type Contrat
        /// </summary>
        /// <param name="n">numéro du contrat</param>
        /// <param name="date">date du contrat</param>
        /// <param name="m">montant  payé par le client</param>
        public Contrat(int n, DateTime date, float m, Client client)
        {
            numero = n;
            dateContrat = date;
            montantContrat = m;
            leClient = client;
            listeInterventions = new List<Intervention>();
           
        }
        #endregion

        #region Accesseurs 
        /// <summary>
        /// Obtient le montant du contrat payé par le client
        /// </summary>
        public float MontantContrat
        {
            get => montantContrat;
        }
        /// <summary>
        /// Obtient la liste des interventions du contrat 
        /// </summary>
        public List<Intervention> ListeInterventions {
            get => listeInterventions;
        }
        /// <summary>
        /// Obtient le numéro du contrat 
        /// </summary>
        public int Numero { 
            get => numero; 
        }
        /// <summary>
        /// Obtient la date du contrat
        /// </summary>
        public DateTime DateContrat { 
            get => dateContrat;
        }
        #endregion

        #region Méthodes de la classe
        /// <summary>
        /// détermine l'écart entre le montant du contrat et le coût des interventions effectuées sur ce contrat
        /// </summary>
        /// <returns>l'écart entre le montant du contrat et le coût des interventions</returns>
        public float Ecart()
        {
            float coupTotal = 0;
            float result = 0;
            foreach (Intervention intervention in listeInterventions)
            {
                coupTotal += intervention.FraisMo() + intervention.FraisKm(leClient.NbKm);

                
            }

            result = montantContrat - coupTotal;

            return result;
        }
        #endregion  

    }
}
