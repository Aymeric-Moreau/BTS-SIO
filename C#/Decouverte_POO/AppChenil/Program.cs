using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using LibAnimalerie;

namespace AppChenil
{
    internal class Program
    {
        static void Main(string[] args)
        {
            //création de la ménagerie 
            Menagerie leChenil = new Menagerie();

            //les chien prennent vie
            Chien medor = new Chien("Medor", "Batard", 19);
            Chien saucisse = new Chien("Saucisse", "teckel", 9);
            Chien pongo = new Chien("Pongo", "Dalmatien", 70);
            Chien perdita = new Chien("Perdita", "Dalmatien", 50);


            //changement de taille pour saucisse 

            saucisse.Taille = 11; 

            //les chien aboient quand
            Console.WriteLine("La caravane passe ...");
            medor.Aboyer();
            saucisse.Aboyer();
            Console.WriteLine("quelle est la taille de Saucisse ? " + saucisse.Taille + "cm");
            pongo.Aboyer();
            perdita.Aboyer();

            //les chien vont en pension au chenil
            leChenil.Arriver(medor);
            leChenil.Arriver(saucisse);
            leChenil.Arriver(pongo);
            leChenil.Arriver(perdita);

            //presentation des pensionnaire
            leChenil.Presenter();
            Console.ReadKey();

        }
    }
}
