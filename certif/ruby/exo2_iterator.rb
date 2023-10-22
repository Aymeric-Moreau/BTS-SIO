# nbr = 0
# adeviner = 15
# s'arrete quand il execute la ligne break
# loop do
#     puts "entrer un chifre:"
#     nbr = gets.chomp.to_i
    
#     if nbr > adeviner
#         puts "le chifre est trop grand"
#     elsif nbr < adeviner
#         puts "le chiffre est trop petit"
#     else
#         puts "gg c'est le bon chiffre"
#         break
#     end
# end
 
#equivalent for
# 3.times do |num|
#     puts num
# end

#equivalent foreach
# eleves = ['j', "a", "r"]
# eleves.each do |eleve| #each_index pour avoir l'index de la valeur au lieu de la valeur
#     puts  "bonjour #{eleve}"

# end

marine = { age: 4 , taille: 150 , nom: "fab"}
marine.each do |cle, valeur|
    puts "#{cle}: est #{valeur}"
end