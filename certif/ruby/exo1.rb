# puts "entrer un chifre:"
# nbr = gets.chomp.to_i
# if nbr.even?
#     puts " le chifre est paire"
    
# else
#     puts " le chifre est impaire"
# end

#  puts "entrer un chifre:"
#  nbr = gets.chomp.to_i
#  adeviner = 15

#  if nbr > adeviner
#     puts "le chifre est trop grand"
# if else nbr < adeviner
#     puts "le chiffre est trop petit"
# unless nbr == adeviner
#     puts "c'est pas le bon chiffre"

# else
#     puts "bravo c'est le meme chifre"
# end
# if (nbr != 0 && nbr == 4) || (nbr != 0 && nbr == 8 )
# puts " c'est ok"
# end

 puts "entrer un mot:"
 mot = gets.chomp.downcase
 motinverse = mot.reverse
if mot == motinverse # ou if mot == mot.reverse directement
    puts "c'est une palidrome"
else
    puts "c'est pas un palidrome"
end