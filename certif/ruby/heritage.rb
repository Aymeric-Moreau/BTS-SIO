class Eleve

    def initialize(nom)
        @nom = nom
        @note = []
    end

    attr_reader :nom
    def Note
        @note.inspect
    end

    def ajouterNote(note)
        @note << note.to_i
    end

    def moyenne?
        all = 0
        @note.each do |valeur| 
            all += valeur
        end
        
        return true if (all / @note.length) >= 10 
            
        false
    end

    def moyenne
        all = 0
        @note.each do |valeur|
            all += valeur
        end
        
         all / @note.length
    end
end

class Delegue < Eleve # la classe Delegue a hériter de eleve

    def participeConseilClasse
        if moyenne?
            puts "je participe au conseil de classe"
        end
    end

    # def moyenne # on peut réecrie les methode
    #     18
    # end

     def moyenne # on peut juste la modifier avec le mots clé super
        moyenne = super
         moyenne + 2 #super + 2 fonctionne aussie 
     end

end
fab = Eleve.new("fab")
fab.ajouterNote(9)
fab.ajouterNote(5)
fab.ajouterNote(0)
fab.ajouterNote(2)

jean = Delegue.new("jean")
jean.ajouterNote(11)
jean.ajouterNote(15)
jean.ajouterNote(20)
jean.ajouterNote(15)
puts jean.nom

puts jean.moyenne
puts fab.moyenne # si l'eleve est un deleguer cela execute en priorité les metohde déléguer si c'est juste un eleve il execute les methode d'eleve
jean.participeConseilClasse
puts jean.class #pour savoir a quelle classe appartien l'objet
puts jean.class.superclass #pour voir la class de base de l'objet 