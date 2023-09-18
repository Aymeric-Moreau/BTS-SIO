public class openclasseroom {
   
    //fonction princiaple
    public static void main(String[] args) {
        //variable
       int epargne = 500;
       int revenus = 2000;
       //Ajoutez 100 à votre épargne (Yeah!)
       epargne = epargne + 100;
 
       //Enlevez 50 à votre indemnité (Snif)
       revenus = revenus - 50;
       //Faites une mise à jour sur votre délai d'épargne
       int nombreDeJoursEpargne = (5000 - revenus) / 500;
     
       //Mettez à jour à nouveau votre indemnité (encore)
       revenus = revenus + (30 - 10) * 7;
            //aficher un message
       System.out.println("salut : "+nombreDeJoursEpargne);

       // déclaration d'une constante
       final int NUMBEROFWEEKDAYS = 7;
       final String MYFAVOURITEFOOD = "Icecream";

       // variable boolean 
       boolean isCodingInJava = false;

       //une déclaration de package : package hello;
       // on definit le nom de la class : public class HelloWorld 
       // commentaires de documentation = /** */


       /**public : visible pour tous et par conséquent le moins restrictif ;

        protected (protégé) : visible pour le package et l'ensemble de ses sous-classes ;

        package-protected (protégé par paquet) : généralement visible uniquement par le package dans lequel il se trouve (paramètres par défaut). Ne pas mettre de mot clé déclenche ce niveau de contrôle ;

        private (privé) : accessible uniquement dans le contexte dans lequel les variables sont définies (à l'intérieur de la classe dans laquelle il est situé). */


        //boucle for 
        for (int i=0; i<5;i++) {
            System.out.println("Clap your hands!");
         }
         // tableau + boucle for pour faire toutes les valeur du tableau avec length
         int[] myArray = new int[]{7,2,4};
        for (int i=0; i<myArray.length; i++) {
            System.out.println(myArray[i]);
        }
        // ouvire tous les élément d'un tableau sant length : for each 
        for (int number: myArray){
            System.out.println(number);
         }

         //boucle while 
         int numberOfTrees = 0;
        while (numberOfTrees < 10) {
            numberOfTrees += 1;
            System.out.println("I planted " + numberOfTrees + " trees");
            }

        //boucle do while 
        int pushUpGoal = 10;
        do{
            System.out.println ("Push up!");
            pushUpGoal -= 1;
        } while(pushUpGoal > 0);
        // on peut arréter le tableau une fois que l'on a trouver ce que l'on chercher avec break et un if 
        int [] myArray = { 10, 20, 30, 40, 50, 60, 70, 80, 90, 100 };

        for (int i =0; i<myArray.length;i++) {
        if (myArray[i] == "50") {
        System.out.println ("J’ai trouvé mon  " +basket[i]+ " !");
        break;
        }
        System.out.println ("J’en suis à " +basket[i]+ " ...");
        }


        // le String[] args dans le nom de de la fonction veut dire qu'il accepte des parametre lors de l'activation en ligne de commande 
        
        // equals  est une méthode de la classe   String  qui permet de comparer deux chaînes.
        String weatherToday="The weather is good";
        String weatherTomorrow="The weather is good";
        weatherToday.equals(weatherTomorrow); // -> true

         // le switch 
         public static void main(String[] args) {
            switch(args.length) {
                case 0: // aucun argument n'a été envoyé
                    sayHelloTo("world");
                    break;
                case 1: // l'utilisateur a fourni un argument dans le terminal
                    sayHelloTo(args[0]);
                    break;
                case 2: // l'utilisateur a fourni 2 arguments
                    sayHelloTo(args[0] + "-" + args[1]);
                    break;
                default: // l'utilisateur a fourni plus d'arguments qu'on peut en gérer !
                    System.out.println("Sorry, I don't know how to manage more than 2 names!");
            }
        }
        

    }
 }