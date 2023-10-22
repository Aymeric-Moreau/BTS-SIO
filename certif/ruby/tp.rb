texte = "Dans l'immensite de l'univers, les etoiles brillent comme des joyaux scintillants, et chaque etoile est le reflet d'un reve, d'une aspiration, d'une quete infinie, car notre quete de sens, notre quete d'amour, notre quete de connaissance, toutes convergent vers les etoiles, ces phares mysterieux qui eclairent notre chemin dans l'obscurite de l'inconnu"

num = 0
liste = []
mot = ""
for i in 0..texte.length
    
    if texte[i] != " " && texte[i] != ","
        mot << texte[i].to_s
        
    else
        liste << mot.chomp
        mot = ""
    end
end

# pour faire tout ce début de code j'aurais plus utiliser la fonction split()


result = {mot: ,nbr:}
m = []
n = []


  liste.each do |mots| # 1er parcour de tout les mot de la liste 
    nb = 0 # nombre de repetition de base a 0 
    liste.each do |test| # liste des mots sur quoi on vas tester les mot de la site mots
        if "#{mots}" == "#{test}" # si le mots est éguale au mot test
            nb += 1 # nombre de repetition + 1
            ok = true # de base a true 
            m.each do |exemple| # parcourire la liste ou son stoké les mots deja trouver
                if "#{mots}" == "#{exemple}" # si le mot y est présent dans dans la liste ok = false cela donc n'ajoute pas dans la liste 
                    ok == false
                end
                if ok == true # si ok est toujour a true cela l'ajoute dans la liste 
                    m << "#{mots}" # ajoute le mot dans la liste m 
                end
            end
            
            
        end
    end
     n << nb
 end



 result[:mot] = m
 result[:nbr] = n

 nbrplusgrand = 0
 motresult = ""


result.each do |cle, valeur|
    if cle == :nbr
        if "#{valeur}" > nbrplusgrand
            nbrplusgrand = "#{valeur}"dft
          
          
        end
    end
 end

puts "le chiffre qui ai apparu le plus de fois est apparu " + nbrplusgrand + "fois"



# on fais une autre liste dés qu'un mot a été comparer avec toute les liste 
# puts "entrer le mot"
#     a_chercher = gets.chomp


#  liste.each do |mots| 
#     puts "#{mots}"
#     if a_chercher == "#{mots}"
#         puts "------#{mots}"
#         num += 1 
#     end
# end

# puts "le mot est apparu #{num} fois"