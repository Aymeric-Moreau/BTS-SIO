# i = 0
# while i != 5
#     i+= 1 
    
# end
# puts i 



nbr = 0
adeviner = 15
while nbr != adeviner #or until nbr == adeviner (c'est liverse)
    puts "entrer un chifre:"
    nbr = gets.chomp.to_i
    
    if nbr > adeviner
        puts "le chifre est trop grand"
    elsif nbr < adeviner
        puts "le chiffre est trop petit"
    end

end
puts "gg c'est le bon chiffre"