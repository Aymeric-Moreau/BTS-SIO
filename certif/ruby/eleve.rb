# cours pdo

test = "a" # c'est une variable local en dehors de la classe elle ne peut pas être utiliser dedant telle quelle 
$test = "a" # elle doit être précéder d'un dollar pour être utilisable n'importe ou
class Eleve

    #methode d'instance

    def initialize(nom,age)
        @nom = nom
        @age = age
       
    
    end

    def bonjour
        puts "Bonjour je suis #{@nom} j'ai #{@age} ans"
        if isMajeur?
            puts " je suis majeur"
        else
            puts "je ne suis pas majeur"
        
        end

    end

    def isMajeur?
        # if @age >= 18
        #     puts "#{@nom} est majeur"
        # end
        @age >= 18 # plus simple
    end


    #setter
    def Taille=(taille)
        @taille = taille.to_i
    end

    #guetter
    def Taille
        @taille
    end

    attr_accessor :classe, :poids # créer automatiquement un guetter et un asseceur pour ces élement 
    #attr_writer pour juste metre le setter
    #attr_reader pour juste mettre le guetter

    #methode de clase

    #variable de classe
    @@majorite = 18

    MAJORITE = 18 # c'est une constante elle doit être entiérement en majuscule 

    def self.salut
        puts "salut #{@@majorite}"
    end

    def isMajeur2?
        @age >= @@majorite 
    end



    private # elle ne peut pas être utiliser en dehors de ma classe

    def demo
        puts "demo"
    end
end

#methode d'instance
# eleve1 = Eleve.new("jean", 12)
# eleve2 = Eleve.new("janne", 19)

# eleve1.Taille =120
# puts eleve1.Taille 

# eleve1.classe = "ce1"
# puts eleve1.classe

# eleve2.poids = 51
# puts eleve2.poids

# eleve1.bonjour
# eleve2.bonjour

#eleve1.demo ne fonctionne pas vue quelle est privé 


#methode de clase

Eleve.salut