#pour inclure des module :
require 'Date'

#si l'on veut inclure une classe que l'on a faite nous méme :
require_relative 'Eleve'

module Geometrie
    module Cercle #un module est comme une class mais il ne peut pas être instancier ou herité l'intéret est de mieux s'organiser et de ranger certaine chose 

        PI = 3.1415

        def self.perimetre(rayon)
            2 * PI * rayon
        end
    end
end
# puts Cercle.perimetre(10)
# puts Cercle::PI

# puts Date.today #pour fonctionner il a besoin de la classe date qui n'est pas de base inclue dans le programme il faut donc le require
# puts Date.today.monday? #true si on a lundi
# puts Eleve.new('jean',29).bonjour

#maintenant que j'ai mis la class Eleve et date dans le module Grafikart il faut que j'ajoute Grafikart:: pour pouvoir les executer
# puts Grafikart::Date.new.demo;
# puts Grafikart::Eleve.new('paul',10).bonjour

# si je ne veux pas avoir besoin d'écrire Grafikart:: il faut écrire tous ça dans le module
# module Grafikart

#     puts Date.new.demo;
#     puts Eleve.new('paul',10).bonjour
# end

puts Geometrie::Cercle::PI