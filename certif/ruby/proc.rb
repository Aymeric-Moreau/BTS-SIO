=begin
tableau = [1,2,6]
puts tableau.map { |variable|  variable * 2}

def demo
    puts "bonjour"
    yield ('marc') # cette methode attend un bloc en paramétre le code du bloc s'executera a cette endroit
    puts "Aurevoir"
    yield ('jena')
end

demo { |nom| puts " comment #{nom} vas ?"}
=end

eleves = [
    {note: 15, nom: 'paul'},
    {note: 1, nom: 'pauline'},
    {note: 14, nom: 'marc'},
    {note: 9, nom: 'polo'},
]

# def alamoyenne(eleves)
#     eleves.each do |eleve|
#         if eleve[:note] >= 10
#             yield(eleve) # si l'eleve a la moyen cela execute le bloc qui prévue 
#         end
#     end
# end

# def alamoyenne(eleves) do |eleve|
#     puts "#{eleve[:nom]} a la moyenne"
# end

a = [1,2,3,5]
b = [10,20,30,50]

#pour sauvegarder un bloc
bloc = Proc.new { |n| n**2 }
a.map!(&bloc) # pour executer le proc il faut ajouter un & 
b.map!{ |n| n**2 }

puts a.inspect
puts b.inspect

# sauvegarde le bloc dans un proc est l'execute avec un paramétre
afficherQuiALaMoyenne = Proc.new { |eleve| puts "#{eleve[:nom]} a la moyenne" }
afficherQuiALaPasMoyenne = Proc.new { |eleve| puts "#{eleve[:nom]} a pas la moyenne" }

def alamoyenne2(eleves, moyenne, pasmoyenne)
    eleves.each do |eleve|
        if eleve[:note] >= 10
            moyenne.call(eleve)
        else 
            pasmoyenne.call(eleve)
        end
    end
end



alamoyenne2(eleves, afficherQuiALaMoyenne, afficherQuiALaPasMoyenne)

#pOUR UN LAMBDA il faut un nombre de paramétre définis










