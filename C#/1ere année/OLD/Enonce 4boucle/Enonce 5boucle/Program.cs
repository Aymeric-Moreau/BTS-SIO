using System;



namespace enonce5

{

    class Program

    {

        static void Main(string[] args)
        {
            //variable 
            int temp1=0;
            float fres20=0f;
            string on;
             
            float nbrepeat = 0f;
            float pourcent;

            do
            {
                nbrepeat++;

                Console.WriteLine("saisisez une température");
                temp1 = Int32.Parse(Console.ReadLine());

                if (temp1 == 20)
                {
                    fres20++;
                }
                Console.WriteLine("Voulez vous saisir une autre température ? (o/n)");
                on = (Console.ReadLine());
               // on = on.ToLower();
                
                

            } while (on == "o"||on == "O");

            pourcent = (fres20 / nbrepeat) * 100;

            Console.WriteLine("il y a "+ fres20 + " 20 et sont pourcentage d'apparition est de " + fres20 / nbrepeat + " sur " + nbrepeat );
            Console.WriteLine("il y a " + fres20 + " 20 et sont pourcentage d'apparition est de " + pourcent);

            Console.ReadKey();




        }
    }
}