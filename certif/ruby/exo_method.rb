#methode/fonction

def convert_to_min(seconde)
        #return 0 if !seconde.is_a? Integer  si la valeur de sonde n'est pas un entier cela retourne 0
    seconde = seconde.to_i # convertie la valeur en un entier si on lui donne des lettre cela retourn 0
     seconde / 60 #pas obliger de mettre return sela donne la derniere valeur du programme 

end

def bonjour(nom)
     "salut #{nom}"
end

def salutation(nom,prefix = "madame")
    puts "#{prefix} #{nom}"
end

def listeA (nom,nom1,nom2)
    print "- #{nom}\n" #\n pour sauter une ligne manuellement
    puts "- #{nom1}" #puts retourne a la ligne pas print
    print "- #{nom2}"
end

def liste (prefixe ,*noms) # * pour qtocker toutes les prochaine valeur mis en paramétre dans le tablea noms
    noms.each do |nom|
        puts "- #{prefixe} #{nom}"
    end
end

# puts convert_to_min(3600)
# puts convert_to_min(600)
# puts convert_to_min("600")
# puts convert_to_min("ad")
# puts convert_to_min("ad")
# puts bonjour("paul")
# puts salutation("paul","mr")
# puts salutation("paul")
# listeA("paule","jena","fab")

# liste("mr","paule","jena","fab","brice","louis","bastomos")


def reorganiser_liste(ok, *noms)
    result = []
    noms.each do |nom|
      result << "#{nom}".to_s.downcase
    end
  
    if ok == true
      result = result.sort
    else
      result = result.sort { |a, b| b <=> a }
    end
    return result
  end
  
  # Exécution de la fonction avec les arguments donnés
  resultat_tri = reorganiser_liste(false, 'Marc', 'Jean', 'Marion', :Manon, :Jonathan, 'Antoine', 'Y')
  
  puts "Résultat du tri false : #{resultat_tri}"
  
  resultat_tri2 = reorganiser_liste(true, 'Marc', 'Jean', 'marion', :Manon, :Jonathan, 'Antoine', 'B')
  
  puts "Résultat du tri true : #{resultat_tri2}"
  