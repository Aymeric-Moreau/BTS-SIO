using System;
using System.Collections.Generic;
using System.Linq;
using System.Security.Cryptography.X509Certificates;
using System.Text;
using System.Threading.Channels;
using System.Threading.Tasks;

namespace Enonce_2
{
    class Program
    {
        static void Main(string[] args)

        {           
            // Déclaration constante 



            // Déclaration des variables
            string chaine1;
            string chaine2;
            int ordAlpha;
            int long1 = 0;
            int long2 = 0;
            string ch22;
            string ch14;
            int derEs1 = 0;
            int derEs2 = 0;
            string derM1;
            string derM2;
            int ifv1 = 0;
            int ifv2 = 0;
            string art1;
            int premes = 0;


            chaine1 = "La vie est belle";
            // 
            Console.WriteLine("saisiser un chaine de charactére");
            chaine2 = Console.ReadLine();
            
            //convertit les chaine en minuscule
            chaine1 = chaine1.ToLower();
            chaine2 = chaine2.ToLower();


            // verif si chaine 1 et 2 sont différent et si il sont dans l'ordre alphabétique 
            ordAlpha = String.Compare(chaine1, chaine2);
            if(ordAlpha == 0)
            {
                Console.WriteLine("les 2 chaine de charactére sont égaux");
            } else if (ordAlpha == 1)
            {
                Console.WriteLine("les 2 chaine de charactére sont différent et dans le bonne ordre alphabétique");
            }else
            {
                Console.WriteLine("les 2 chaine de charactére sont différent mais pas dans le bonne ordre alphabétique");
            }

            // longueur de chaine1 et 2 
            long1 = chaine1.Length;
            long2 = chaine2.Length;
            Console.WriteLine("la longueur de la premiére chaine est de " + long1);
            Console.WriteLine("la longueur de la deuxieme chaine est de " + long2);

            //recupération des 2 premier charactére de chaine 2 
            ch22 = chaine2.Substring(0, 2);
            Console.WriteLine("les 2 premier charactére de chaine 2 sont " + ch22);

            // récupération des 4 derneir charactére de la chaine 1 
            ch14 = chaine1.Substring(chaine1.Length-4, 4);
            Console.WriteLine("les 2 premier charactére de chaine 2 sont " + ch14);

            // donne le dernier mot de chaine 1 
            derEs1 = chaine1.LastIndexOf(' ');
            derM1 = chaine1.Substring(derEs1 + 1);
            Console.WriteLine("le dernier mot de la premiére chaine est " + derM1);

            // verifie si il y a un v dans les chaine 1 et 2 et donne sa postion 
            ifv1 = chaine1.IndexOf("v");
            if (ifv1 != -1)
            {
                Console.WriteLine("le charactére v est bien présent dans la chaine 1 sa position est : " + ifv1);
            } else
            {
                Console.WriteLine("le charactére v n'est pas présent dans la chaine 1");
            }

            ifv2 = chaine2.IndexOf("v");
            if (ifv2 != -1)
            {
                Console.WriteLine("le charactére v est bien présent dans la chaine 1");
            }
            else
            {
                Console.WriteLine("le charactére v n'est pas présent dans la chaine 1");
            }

            // regarde si chaine 2 termine par le mot belle 
            derEs2 = chaine2.LastIndexOf(' ');
            derM2 = chaine2.Substring(derEs2 + 1);
            if (derM2 == "belle")
            { 
                Console.WriteLine("la chaine 2 ce termine bien par belle"); 
            }else
            {
                Console.WriteLine("la chaine 2 ne ce termine pas par belle");
            }

            premes = chaine2.IndexOf(" ");
            art1 = chaine2.Substring(0,premes - 1);

            if(art1 == "la")
            {
                Console.WriteLine("la chaine 2 commence bien par l'article la");
            }
            else
            {
                Console.WriteLine("la chaine 2 ne commence pas par l'article la");
            }


            //remplace les espace par des tiret du bas _
            chaine2 = chaine1.Replace(" ", "_");
            Console.WriteLine("la chaine 2 en remplacant les espance par des tiret du bas est éguale a : "+ chaine2);

            //
            Console.ReadKey();
        }
    }
}