using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace BibliothèqueKES {
    public class Client {
        #region Propriétés privées de la classe
        private int numero;
        private string nom;
        private string adresse;
        private string codePostal;
        private string ville;
        private int nbKm; /*distance du client à la société KES en km*/
        #endregion

        #region Constructeur
        /// <summary>
        /// instancie un objet de type Client
        /// </summary>
        /// <param name="n">numéro du client</param>
        /// <param name="nom">nom du client</param>
        /// <param name="a">adresse du client</param>
        /// <param name="cp">code postal du client</param>
        /// <param name="v">ville du client</param>
        /// <param name="nb">nombre de kms entre le client et la société</param>

        public Client(int n, string nom, string a, string cp, string v, int nb) {
            numero = n;
            this.nom = nom;
            adresse = a;
            codePostal = cp;
            ville = v;
            nbKm = nb;
        }      
        #endregion

        #region Accesseurs 

        /// <summary>
        /// Obtient la distance en km qui sépare le site du client de la société KES
        /// </summary>
        public int NbKm {
            get => nbKm;
        }
        /// <summary>
        /// Obtient le numéro du client
        /// </summary>
        public int Numero { 
            get => numero; 
        }
        /// <summary>
        /// Obtient le nom du client
        /// </summary>
        public string Nom { 
            get => nom; 
        }
        /// <summary>
        /// Obtient l'adresse du client
        /// </summary>
        public string Adresse { 
            get => adresse; 
        }
        /// <summary>
        /// Obtient le code postal du client
        /// </summary>
        public string CodePostal {
            get => codePostal; 
        }
        /// <summary>
        /// Obtient la ville du client
        /// </summary>
        public string Ville { 
            get => ville; 
        }
        #endregion

    }
}
