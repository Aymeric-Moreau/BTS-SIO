using System;
using LibAnimalerie;

namespace AppAnimalerie
{
    internal class Program
    {
        static void Main(string[] args)
        {
            // déclaration et instanciation d'objet de la classe animal 
            Animal nemo = new LibAnimalerie.Animal("Nemo", "Poisson rouge");
            LibAnimalerie.Animal felix = new LibAnimalerie.Animal("Félix", "Chat");
            LibAnimalerie.Animal pistache = new LibAnimalerie.Animal("Pistache", "Perruche");

            // la vie de nemo ce présente ainsi 
            nemo.SePresenter();
            nemo.Parler("Gloup");
            nemo.Manger();
            nemo.Dormir();

            //la vie de felix
            felix.SePresenter();
            felix.Parler("Miaou");
            felix.Manger();
            felix.Dormir();

            //la vie de pistache
            pistache.SePresenter();
            pistache.Parler("Cui");
            pistache.Manger();
            pistache.Dormir();

            //ménagerie 
            Menagerie zoo = new Menagerie();

            //enreistrement des animaux qui aarrivent dans la ménagerie
            zoo.Arriver(pistache);
            zoo.Arriver(nemo);
            zoo.Arriver(felix);

            //presentation de la ménagerie ainsi constituée 
            Console.WriteLine(" ");
            Console.WriteLine("le zoo comporte " + zoo.NombreAnimaux + " animaux");
            zoo.Presenter();

            //départ de felix 
            Console.WriteLine("=> Félix s'en va");
            zoo.Partir(felix);

            // re-presentaion de la ménagerie ainsi constituée 
            Console.WriteLine(" ");
            Console.WriteLine("le zoo comporte " + zoo.NombreAnimaux + " animaux");
            zoo.Presenter();

            //changement de nom
            Console.WriteLine("le poisson Nemo est rebatiser Maurice ");
            nemo.Nom = "Maurice";

            // re-presentaion de la ménagerie ainsi constituée 
            Console.WriteLine(" ");
            Console.WriteLine("le zoo comporte " + zoo.NombreAnimaux + " animaux");
            zoo.Presenter();

            Console.ReadKey();
        }
    }
}
