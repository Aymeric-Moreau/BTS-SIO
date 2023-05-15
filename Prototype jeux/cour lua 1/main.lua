print("Hello world !")
-- c'est un commentaire 
pv = 100
print(pv)
degat = 1.5
print(degat)
pseudo = "Conan"

score = 0.0
titre = "Lupin the first"
print(score,titre)

score = "salut"
titre = 2
print(score,titre)

score = 0.0
titre = "Lupin the first"

score = score + 1
scorex2 = score + score
print(score,scorex2)

version = " 2 "
titre = titre..version
print(titre)

-- une table / une instance sa y ressemble 
heros = {}
heros.energie = 100
heros.blesse = false
function dommage(degats)
heros.energie = heros.energie - degats
heros.blesse = true
end
print("Energie avant : "..heros.energie)
print("Blessure avant : "..tostring(heros.blesse))
dommage(10)
print("Energie après : "..heros.energie)
print("Blessure après : "..tostring(heros.blesse))

function gerison 




 
