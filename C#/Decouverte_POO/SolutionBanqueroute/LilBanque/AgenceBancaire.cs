using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace libBanque
{
   

        public class AgenceBancaire
        {
            //propriété privé

            /// <summary>
            /// Propriétés privées liste (collection ) des compte bancaires 
            /// </summary>
            private List<CompteBancaires> lesComptes;
            private string nomAgence;

            /// <summary>
            /// initialise une nouvelle instance de la classe AgenceBancaire
            /// </summary>
            /// <param name="sonNom"> le nom de l'agence </param>
            public AgenceBancaire(string sonNom)
            {   // création (instanciation) de la liste de comptes
                // Elle sera vide pour commencer et lesComptes.count renverra 0 
                lesComptes = new List<CompteBancaires>();
                nomAgence = sonNom;
            }

            /// <summary>
            /// Obtien la liste des compte
            /// </summary>
            public List<CompteBancaires> LesComptes
            {
                get => lesComptes;
                set => lesComptes = value;
            }

            public string NomAgence
            {
                get => nomAgence;
                set => nomAgence = value;
            }

            public int NombreComptes()
            {
                return lesComptes.Count;
            }

            public void AjouterCompte(CompteBancaires unCompte)
            {
                lesComptes.Add(unCompte);
            }

            public void SupprimerCompte(CompteBancaires unCompte)
            {
                lesComptes.Remove(unCompte);

            }

        }
    }



