# for num in 1..10
#     next if num == 5
#     puts num
# end

a = 0
adeviner = 4
for num in 1..3
    next if a == adeviner
    puts "entrer votre chiffre"
    a = gets.chomp.to_i
    if a > adeviner
        puts "chiffre trop grand"
    elsif a < adeviner
        puts "chiffre trop petit"
    end
end

puts "bravo " if a == adeviner