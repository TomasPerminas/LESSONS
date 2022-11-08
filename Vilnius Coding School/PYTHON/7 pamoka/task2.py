# Susikurkite kintamąjį egzamino pažymiui saugoti [0-10]. Naudojant elif dalis patikrinkite šias sąlygas ir išveskite atitinkamą tekstą:
# Jei pažymys yra lygus 10 išvesti “puiku”.
# Jei pažymys yra lygus arba didesnis nei 9 išvesti “labai gerai”.
# Jei pažymys yra lygus arba didesnis nei 7 išvesti “gerai”.
# Jei pažymys yra lygus arba didesnis nei 5 išvesti “patenkinamai”.
# Jei pažymys mažesnis nei 5 išvesti “egzaminas neišlaikytas”.

print ('Iveskite egzamino bala nuo 1 iki 10:')

score = int(input())

if score > 10:
    print ('Irasytas per didelis skaicius')
elif score == 10:
    print ('Puiku')
elif score >= 9:
    print ('Labai gerai')
elif score >= 7:
    print ('Gerai')
elif score >= 5:
    print ('Patenkinamai')
elif score >= 1 < 5:
    print ('Egzaminas neislaikytas')
elif score < 1:
    print ('Irasytas per mazas skaicius')