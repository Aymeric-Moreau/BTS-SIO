cmd = "quoi"
case cmd
when "quoi" 
       puts "feur"
when "oui" then puts "fdp"
else
    puts "pas compris"
end

#si a < b alors qa affiche a inférieur a b sinon a supérieur ou égual a b
puts a < b ? "a inférieur a b" : "a supérieur ou égual a b"
 
# si a est égualea quelque chose cela affiche a si c'est b il affiche b si les 2 on une valeur il affiche le 1er
puts a || b

# si a n'a pas de valeur il met default dedans 
a ||= "default"

# nom.respond_to?(:upcase) permet de verifier si upcase est applicanle sur la variable nom 
def majuscule(nom) 
    if nom.respond_to?(:upcase)
        nom.upcase
    end

end