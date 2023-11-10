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
        @note.each do |valeur| # j'aurais du avant de faire cette fonction faire moyenne pour pouvoir la réutiliser dans cette methode 
            all += valeur
        end
        
        return true if (all / @note.length) >= 10 # jaurais du faire une constante moyenne 
            
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








eleve1 = Eleve.new("jean")
eleve1.ajouterNote(11)
eleve1.ajouterNote(1)
eleve1.ajouterNote(20)
eleve1.ajouterNote(1)
puts eleve1.moyenne?
puts eleve1.moyenne
puts eleve1.Note
puts eleve1.nom