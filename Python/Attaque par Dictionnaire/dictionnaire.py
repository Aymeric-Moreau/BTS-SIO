import hashlib
import time
import sys

# Fonction permettant de transformer une chaine de caractère en un condensat
# SHA-256
def GetHash(plainpass):
  passutf = (plainpass).encode('UTF-8')
  hashpass = hashlib.sha256(passutf).hexdigest()
  return hashpass


#variable
ok = False
nbr = 0

# Récupérer les arguments passés lors de l'exécution du programme
args1 = sys.argv[1:]
args2 = sys.argv[2:]

#ouverture du fichier dictionnaire
file = open(args1)
fileM = open(args2)
#file = open('C:\\Users\\aymer\\source\\repos\\Attaque par Dictionnaire\\nmap.txt')
#fileM = open('C:\\Users\\aymer\\source\\repos\\Attaque par Dictionnaire\\hash1.txt')

#file = open('nmap.txt')
#fileM = open('hash1.txt')
fileA = open('C:\\Users\\aymer\\source\\repos\\Attaque par Dictionnaire\\ascii.txt')

lineA = fileA.readline()

while(lineA!=""):
  
      print(lineA,end='')
      lineA = fileA.readline()
      


#lecture d'une ligne
lineM = fileM.readline()
line = file.readline()

line = line.strip()
lineM = lineM.strip()
nblignes = len(file.readlines() )
file.seek(0,0)


#la boucle while verifie si ok est bien eguale a false donc que le mot de passe n'a pas été trouver et si l'on a parcouru toutes les ligne du fichier (nbr)
while(ok==False and line!=""):
    line = file.readline()
    line = line.strip()

    if GetHash(line)== lineM:
        ok = True
    else:
        #line = file.readline()
        #line = line.strip()
        nbr+=1

    


if(ok==False):
  print('erreur le mot de passe na pas été trouvé')

if(ok==True):
  print('le mot de passe a été trouver ! le mot de passe est : ', line,'qui correspond au hash : ',GetHash(line),"il a était trouver en ",nbr,' essaies')



