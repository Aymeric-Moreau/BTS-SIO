texte = "Dans l'immensite de l'univers, les etoiles brillent comme des joyaux scintillants, et chaque etoile est le reflet d'un reve, d'une aspiration, d'une quete infinie, car notre quete de sens, notre quete d'amour, notre quete de connaissance, toutes convergent vers les etoiles, ces phares mysterieux qui eclairent notre chemin dans l'obscurite de l'inconnu"

frequence = Hash.new(0)
mots = texte.tr(',.":', '').downcase.split ' '
mots.each do |mot|
    
        frequence[mot] += 1
end

frequence = frequence.sort_by {|mot, count| count}   

frequence.reverse!

puts "Le mot le plus fréquent dans le texte est : #{frequence.first[0]}"


frequence.each do |mot|
    puts "Le mot \"#{mot[0]}\" apparait #{mot[1]} fois"
end

