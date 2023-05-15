from random import *
from math import *

def peri_cercle(ray):

    perimetre = pi * ray * 2




    print ("le perimiétre est égale a :",perimetre )
    return perimetre

def air_carre(airc):
    aircresult = airc * airc

    print ("l'aire d'un carré est égale a :",aircresult )
    return aircresult

def aire_cercle(airce):
    aireceresult = pi * airce**2

    print ("l'aire d'un cercle est égale a :",aireceresult )
    return aireceresult

def peri_aire_cercle(pace):
    paceaire = pi * pace * 2
    paceperi = pi * pace**2

    print ("l'aire d'un cercle est égale a :",paceaire )
    print ("le perimiétre est égale a :",paceperi )
    return paceaire,paceperi

def peri_aire_rectangle(lr,lar):
    airer = lr*lar
    perir = (lr+lar)*2

    print ("l'aire d'un rectangle est égale a :",airer )
    print ("le perimiétre du rectangle est égale a :",perir )
    return perir,airer

def rayon_cercle(rayc):
    rayonc= sqrt(rayc/pi)

    print ("le rayon d'un cercle' est égale a :",rayonc )
    return rayonc

def troisrc(n1,n2,n3):
    result3= sqrt(n1**2 +n2**2 +n3**2)

    print ("la racine carré de la  somme des 3 chifre au caré est égale a :",result3 )
    return result3

def max_dif(n1,n2,n3):
    c1=n1 - n2
    c2=n2 - n1
    c3 =n1 - n3
    c4=n3 - n1
    c5=n2-n3
    c6=n3-n2
    result = max(c1,c2,c3,c4,c5,c6)
    print ("la plus grande différence est :",result )
    return result

def double (chaine):
    result= len(chaine)*2
    print ("ce mot comporte :",result)
    return result

def nombre_u(chaine):
    result=chaine.count("u")
    print ("le nombre de u dans ce mot est de  :",result)
    return result

def nombre_voyelles(chaine):
    result1=chaine.count("a")
    result2=chaine.count("e")
    result3=chaine.count("i")
    result4=chaine.count("o")
    result5=chaine.count("u")
    result6=chaine.count("y")
    result = result1+result2+result3+result4+result5+result6
    print ("le nombre de voyelle dans ce mot est de  :",result)
    return result

def nombre_consonnes(chaine):
    result= len(chaine) - nombre_voyelles(chaine)
    print ("le nombre de consonne dans ce mot est de :",result)
    return result

def verlan(chaine):
    result = chaine[::-1]
    print ("le mot de verlan est :",result)
    return result

def double_debut_fin(chaine):
    prem = chaine[0]
    der = chaine[-1]
    result = prem + chaine + der
    return result

def suprime_o(chaine):
    o = chaine.find("o")
    print(o)
    if o == -1:
        return chaine
    result = chaine[0:o]+chaine[o+1:]
    return result

def supprime_car(chaine,cara):
    car = chaine.find(cara)
    if car == -1:
        return chaine
    result = chaine[0:car]+chaine[car+1:]
    return result

def supprime_voyelles(chaine):
    result = chaine.replace("a","")
    result = result.replace("e","")
    result = result.replace("i","")
    result = result.replace("o","")
    result = result.replace("u","")
    result = result.replace("y","")
    return result

def nombre_mots (chaine):
    result = chaine.strip()
    nbr = result.count(" ") + 1
    return nbr

def binaire (chaine):
    nbrchaine = len(chaine)
    m = 0
    result = 0
    while m != nbrchaine :
        result = result + int(chaine[m:m+1]) * 2**(nbrchaine -1 - m)
        m = m+ 1
    return result

def hexa (int):

    result3 =0
    result2 =0
    result1 =0
    result0 =0

    if int >= 4096 :
        result3 = int//16**3
        int = int%16**3
    if int >= 256 :
        result2 = int//16**2
        int = int%16**2
    if int >= 16 :
        result1 = int//16**1
        int = int%16**1
    if int < 16 :
        result0 = int//16**0
        int = int%16**0
    return convert_lettre (result3)+ convert_lettre(result2)+ convert_lettre(result1)+ convert_lettre(result0)

def convert_lettre(nb1):
    if (nb1 < 10):
        return str(nb1)
    if (nb1 ==10):
        return "A"
    if (nb1 ==11):
        return "B"
    if (nb1 ==12):
        return "C"
    if (nb1 ==13):
        return "D"
    if (nb1 ==14):
        return "E"
    if (nb1 ==15):
        return "F"

def hexaW (int):
    result=[0]*4
    for i in range(3, -1, -1):
        if int >= 16**i :
            result[3-i] = int//16**i
            int = int%16**i
    for i in range(0, len(result)):
        result[i]=convert_lettre(result[i])
    return result

def nbrprem (int):
    nbr=0
    for i in range(1, int+1, +1):
        verif=int/i
        if verif % 1 == 0:
            nbr = nbr +1
    if nbr ==2:
        return "c'est bien un chiffre premier"
    else:
        return "ce n'est pas un chifre premier"

C = [k*k for k in range (0,20)]
# liste
individue1 = ['Harry','potter', '31/07/1980', 1.72, 65]
individue2 = ['hermione','Granger', '19/09/1979', 1.70, 60]
individue3 = ['Ronald','Weasley', '19/09/1980', 1.81, 74]
individue4 = ['Ginny','Weasley', '11/08/1981', 1.61, 48]



tailleM = (individue1[3]+individue2[3]+individue3[3]+individue4[3]) / 4

# ajouer une valeur a la fin de la liste
individue1.append('Noirs')
individue2.append('Bruns')
individue3.append('Roux')
individue4.append('Roux')

individue1.append(42)
individue2.append(43)
individue3.append(42)
individue4.append(41)


pairs = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100]

impairs = [1, 3, 5, 7, 9, 11, 13, 15, 17, 19, 21, 23, 25, 27, 29, 31, 33, 35, 37, 39, 41, 43, 45, 47, 49, 51, 53, 55, 57, 59, 61, 63, 65, 67, 69, 71, 73, 75, 77, 79, 81, 83, 85, 87, 89, 91, 93, 95, 97, 99, 101, 103, 105, 107, 109, 111, 113, 115, 117, 119, 121, 123, 125, 127, 129, 131, 133, 135, 137, 139, 141, 143, 145, 147, 149, 151, 153, 155, 157, 159, 161, 163, 165, 167, 169, 171, 173, 175, 177, 179, 181, 183, 185, 187, 189, 191, 193, 195, 197, 199]

inverse = [1.0, 0.5, 0.3333333333333333, 0.25, 0.2, 0.16666666666666666, 0.14285714285714285, 0.125, 0.1111111111111111]

def somme_liste(liste):
    result =0
    for i in range(0, len(liste), +1):
        result += liste[i]

    return result

def moyenne_liste(liste):
    result =0
    for i in range(0, len(liste), +1):
        result += liste[i]
    result/= len(liste)
    return result

def un_sur_deux(liste):
    result=[]
    for i in range(0, len(liste), +2):
        result.append(liste[i])
    return result

def un_sur_n(liste,n):
    result=[]
    for i in range(0, len(liste), +n):
        result.append(liste[i])
    return result

def f(x):
    result = (x**2)-3*x+2
    return result

def image_liste(liste):
    result=[]
    for i in range(0, len(liste), +1):
        result.append(f(liste[i]))
    return result

def liste_diviseur(n):
    result=[]
    for i in range(1, n+1, +1):
        v = n % i
        if v==0 :
            result.append(i)
    return result

def calcule_somme(n):
    somme = 0
    for i in range(0, n, +1):
        somme = somme +i
    return somme

def calcule_somme_carres(n):
    somme = 0
    for i in range(0, n, +1):
        somme = somme +i**2
    return somme

def calcule_somme_inverse_carres(n):
    somme = 0
    for i in range(1, n, +1):
        somme = somme +1/i
    return somme

def calcule_somme_impairs(n):
    if n%2 ==0:
        return 'erreur veillez saisir un nombre impaire'
    else:
        somme = 0
        for i in range(1, n, +2):
            somme = somme +i
        return somme

def calcule_somme_pairs(n):
    if n%2 !=0:
        return 'erreur veillez saisir un nombre pairs'
    else:
        somme = 0
        for i in range(2, n, +2):
            somme = somme +i
        return somme

def calcule_somme_pairs2(n):
    if n%2 !=0:
        return 'erreur veillez saisir un nombre pairs'
    else:
        somme = int(calcule_somme(n))- int(calcule_somme_impairs(n+1))
        return somme

def calcule_factoriel(n):
    somme = 1
    for i in range(1, n+1, +1):
        somme = somme *i
    return somme

def moyenne_nombres_aleatoirs(n):
    somme = 0
    for i in range(1, n, +1):
        somme = somme + randint(1,100)
    result = somme/n
    return result

def for_imbriqu():
    somme = 0
    for i in range(0, 10, +1):
        for ii in range(0, 10-i, +1):
            somme =somme +(i*ii)
    return somme


test = [99,5,45,3,8,6]


def trieCroissant(liste):
    result = liste.copy()
    nbr =0
    for i in range(0, len(liste), +1):
        nbr =0
        for ii in range(0, len(liste), +1):
            if liste[i]>liste[ii] :
                nbr = nbr+1
        result[nbr] = liste[i]
    #result.reverse()
    return result

def trieDecroissant(liste):
    result = liste.copy()
    nbr =0
    for i in range(0, len(liste), +1):
        nbr =0
        for ii in range(0, len(liste), +1):
            if liste[i]<liste[ii] :
                nbr = nbr+1
        result[nbr] = liste[i]
    #result.reverse()
    return result


def minValue (t,k):
    save = t[k:]
    result = t[k:]
    nbr =0
    for i in range(0, len(save), +1):
        nbr =0
        for ii in range(0, len(save), +1):
            if save[i]>save[ii] :
                nbr = nbr+1
        result[nbr] = save[i]
    #result.reverse()
    return result[0]

def minValue2 (t,k):
    save = t[k:]
    min_value = somme_liste(t)
    for i in range(0,len(save),+1):
        if save[i] < min_value:
            min_value = save[i]
    return min_value

T = [15,48,23,99,7,3,75,20,34,64]

def trieSelec(liste):
    result = liste.copy()
    cache = 0
    indexMin = 0
    for i in range(0,len(result),+1):
        cache = result[i] # on sauvegarde la valeur de result[i]
        indexMin = result.index( minValue2(result,i)) #on rcupére l'emplacement du nombre plus petit
        result[i] = minValue2(result,i) # on met a la place de result[i] la valeur trouver par la fonction minValue2
        result[indexMin] = cache
    return result


def somme_plus_grande(n):
    somme = 0
    nombre = 1

    while somme<n:
        somme += nombre
        nombre +=1

    return nombre,somme

def somme_inverses(n):
    somme = 0
    nombre = 1

    while somme<n:
        somme += 1/nombre
        nombre +=1

    return nombre,somme

def nombre_aleatoire_990():
    somme = 0
    nombre = 1

    while somme < 989:
        somme = randint(1,1000)
        nombre +=1

    return nombre,somme

def diviseur(n):
    result=[]
    for i in range(1, n+1, +1):
        v = n % i
        if v==0 :
            result.append(i)
    return result


def parfait(n):
    if somme_liste(diviseur(n))-n == n:
        return True
    else:
        return False

def nombre_parfait(n):
    result=[]
    for i in range(1, n+1, +1):
        if parfait(i)== True:
            result.append(i)
    return result

def nombre_premier (int):
    nbr=0
    for i in range(1, int+1, +1):
        verif=int/i
        if verif % 1 == 0:
            nbr = nbr +1
    if nbr ==2:
        return True
    else:
        return False

def nombre_premier2(n):
    result=[]
    somme = 0
    for i in range(1, n+1, +1):
        if nombre_premier(i)== True:
            result.append(i)
            somme += 1
    return result,somme

def nbr_secret():
    A = randint(1,100)
    B = 0
    foix = 0
    while B !=A:
        B = int(input('Entrer un nombre entre 0 et 100 : '))
        foix +=1
        if B<A:
            print ("Trop Petit")
        if B>A:
            print ("Trop grand")
        if B==A:
            print ("Bravo ! vous avez gagnez")
    return foix

def strategie_a(nbr_S):
    proposition = 0
    compteur = 0
    while proposition != nbr_S:
        proposition = randint(1,100)
        compteur +=1
    return compteur

def strategie_b(nbr_S):
    proposition = 0
    compteur = 0
    nombre_propose = []
    while proposition != nbr_S:
        proposition = randint(1,100)
        while proposition in nombre_propose :
            proposition = randint(1,100)
        nombre_propose.append(proposition)
        compteur +=1
    return compteur


def strategie_c(nbr_S):
    proposition = 0
    compteur = 0
    min =1
    max=100
    while proposition != nbr_S:
        proposition = randint(min,max)
        if proposition > nbr_S:
            max = proposition -1
        else:
            min = proposition + 1
        compteur += 1
    return compteur

def strategie_d(nbr_S):
    proposition = 0
    compteur = 0
    min =1
    max=101
    while proposition != nbr_S:
        proposition = int((min + max)/2)
        if proposition > nbr_S:
            max = proposition
        else:
            min = proposition
        # print(min,max,proposition)
        compteur += 1
    return compteur


def joue(N):
    a = 0
    b = 0
    c = 0
    d = 0
    for i in range(N):
        a+= strategie_a(randint(1,100))
    for i in range (N):
        b+= strategie_b(randint(1,100))
    for i in range(N):
        c+= strategie_c(randint(1,100))
    for i in range(N):
        d+= strategie_d(randint(1,100))
    print ("Pour la strategie a :",a/N , "pour la b : ", b/N, " pour la c : ", c/N, "et enfin pour la d : ", d/N)





def echange(matrice,ligne1,ligne2):
    save = matrice.copy()
    matrice[ligne1] = save[ligne2]
    matrice[ligne2] = save[ligne1]
    return matrice

def somme1(matrice1):
    somme = 0
    for i in range(0, len(matrice1), +1):
        for y in range(0, len(matrice1[-1]), +1):
            somme = somme + matrice1[i][y]
    return somme

def somme2(matrice1,matrice2):
    result = somme1(matrice1) + somme1(matrice2)
    return result

def indice_colonne(matrice1):
    result = 0
    somme = 0
    for y in range(0, len(matrice1[-1]), +1): #boucle for colonne
        for i in range(0, len(matrice1), +1): #boucle for ligne
            somme = somme + matrice1[i][y]
        if(somme > result):
            result = y
    return result



def produitFaux(matrice1,matrice2):
    save = matrice1.copy()
    len1 = len(matrice1) + len(matrice1[-1])
    len2 = len(matrice2) + len(matrice2[-1])
    if(len1 == len2):
        for y in range(0, len(matrice1[-1]), +1): #boucle for colonne
            for i in range(0, len(matrice1), +1): #boucle for ligne
                save[i][y]= matrice1[i][y] * matrice2[y][i]

    else:
        return 'erreur veillez renter 2 matrice de méme taille'

    return save



# def produit(matrice1,matrice2):
#     valeur = 0
#     save = [[0]*3]*3
#     for a in range(0, len(matrice1[0]), +1): #boucle for ligne pour matrice result
#         for b in range(0, len(matrice2), +1): #boucle for colonne pour matrice result
#             for c in range(0, len(matrice1[0]), +1): #boucle for ligne pour la valeur a ajouter
#                 for d in range(0, len(matrice2), +1): #boucle for colonne
#
#             valeur = 0
#
#             valeur += matrice1[0][b]* matrice2[b][0]
        #
        #
        # print(valeur)
        # save[a][a]= valeur

    # return save

def produit_ligne_colonne(ligne , colonne):
    somme = 0
    for a in range(0, len(ligne), +1):
        somme += ligne[a] * colonne[a]
    return (somme)


def colonne(matrice, num):
    result = []
    for a in range(0, len(matrice[0]), +1):
        result.append(matrice[a][num])
    return result

def produit_matrix(matrice1,matrice2):
    save = cree_matrice_vide(matrice1)
    for a in range(0, len(matrice1[0]), +1): #boucle for ligne pour matrice result
        for b in range(0, len(matrice2), +1): #boucle for colonne pour matrice result
            save[a][b]= produit_ligne_colonne(matrice1[a], colonne(matrice2,b))
            print (save)
    return save

def cree_matrice_vide(matrice):
    save = []
    for b in range(0, len(matrice), +1): #boucle for colonne pour matrice result
        save.append(cree_ligne_vide(matrice))
    return save


def cree_ligne_vide(matrice):
    save = []
    for a in range(0, len(matrice[0]), +1): #boucle for ligne pour matrice result
        save.append(0)
    return save

def r_ligne(matrice, num):
    result = []
    for a in range(0, len(matrice[0]), +1):
        result.append(matrice[num][a])
    return result

m = [[1,2,-1],[1,1,1],[-1,1,-4]]
mm = [[1,2,3],[4,5,6],[7,8,9]]
mmm = [[0.1,0.2,0.3],[0.4,0.5,0.6],[0.7,0.8,0.9]]
sto = [[0.5,0.2,0.3],[0.6,0.1,0.3],[0.7,0.2,0.1]]

def zero_et_un(matrice):
    result = True
    for a in range(0, len(matrice[0]), +1): #boucle for ligne
        for b in range(0, len(matrice), +1): #boucle for colonne
            if(matrice[a][b]>1):
                result = False
    print (result)
    return result

def ligne_matrice_eguale_un(matrice):
    result = True
    for ligne in matrice:
        somme = round( sum(ligne),1)

        if somme != 1:
            result = False
            print (somme)
    print (result)
    return result



def stochastique(matrice):
    if(zero_et_un(matrice) and ligne_matrice_eguale_un(matrice)):
        return True
    else:
        return False

def cree_ligne_videN(n):
    save = []
    for a in range(0,n, +1): #boucle for ligne pour matrice result
        save.append(0)
    return save

def cree_matrice_videN(n):
    save = []
    for b in range(0, n, +1): #boucle for colonne pour matrice result
        save.append(cree_ligne_videN(n))
    return save


def puissance_ligne(ligne,n): # prend une ligne de la matrice et multiplie chaque valeur = numéro de la ligne puissance numero de la colonne
    for b in range(0, len(ligne), +1): #boucle for colonne
        ligne[n][b] = b ** n
    return ligne

def ajout_ligne_matrice(matrice, ligne,n):
    for b in range(0, len(ligne), +1): #boucle for colonne
        matrice[n][b] = ligne(b)
    return matrice

def matrice(n):
    matrice = cree_matrice_videN(n)
    print (matrice)
    for a in range(0, len(matrice[0]), +1): #boucle for ligne
            matrice = ajout_ligne_matrice(matrice, puissance_ligne(cree_ligne_videN(n),n),n)
    return matrice





























