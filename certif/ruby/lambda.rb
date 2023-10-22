def a_lambda
    a = lambda {return "salut"} # = "salut" equivalent a = -> {return "salut"} 
    a.call
    return "Au revoir"

end

def a_proc
    a = Proc.new {return "salut"} # = return "salut"
    a.call
    return "Au revoir"

end

puts a_lambda
puts a_proc

#Lambda = verifie les paramétre et return renvoie à la fonction
# proc = peu importe les paramétre, fais le return au sein méme de la fonction 

a = ["2",1,"23"]
a.map{ |n| n.to_i}
a.map(&:to_i) # les 2 font la méme chose 