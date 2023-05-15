using System;
using System.Collections.Generic;
using System.Text;

namespace ClassesHeritage
{
    public class Eleve : Personne
    {
        //propriété priver 
        private string section;
        private float noteAnglais;
        private float noteFrançais;
        private float noteMaths;
        private List<string> option;
        
        //Constructeur de la classe Eleve
        public Eleve (string nomEleve, string prenomEleve, string sectionEleve):base(nomEleve, prenomEleve)
        {
            section = sectionEleve;
            noteAnglais = -1f; //-1 valeur par défaut
            noteFrançais = -1f;
            noteMaths = -1f;
            option = new List<String>();
        }
        //public Eleve(string nomEleve, string prenomEleve) : base(nomEleve, prenomEleve)
        //{
            
        //    noteAnglais = -1; //-1 valeur par défaut
        //    noteFrançais = -1;
        //    noteMaths = -1;
        //    option = new List<String>();
        //}
        public Eleve(string nomEleve, string prenomEleve, string sectionEleve, List<string> optionEleve) : base(nomEleve, prenomEleve)
        {
            
            section = sectionEleve;
            noteAnglais = -1f; //-1 valeur par défaut
            noteFrançais = -1f;
            noteMaths = -1f;
            //option = new List<String>(optionEleve);
            option = optionEleve;
        }

        // Property de la classe 

        public string Section
        {
            get => section;
            set => section = value;
        }

        public List<string> Option
        {
           get => option;
            set => option = value;


        }

        //méthode

        public void EvaluerEleve(float anglais, float francais, float maths)
        {
            noteAnglais = anglais;
            noteFrançais = francais;
            noteMaths = maths;
        }
        public override string GetIdentite()
        {
            return (base.GetIdentite() + ", élève de : " + Section);
        }

        private float calculerMoyenne()
        {
            return ((noteAnglais + noteFrançais + noteMaths) / 3);
        }


        public string RecupererBulletin()
        {


            return "le bulletin de l'éléve " + GetIdentite() + "\n" + "Anglais : " + noteAnglais + "\n" + "Francais : " + noteFrançais + "\n" + "Math : " + noteMaths + "\n" + "\n " + " moyenne générale : " + calculerMoyenne().ToString("0.00") + "\n";
        }
    }
}
