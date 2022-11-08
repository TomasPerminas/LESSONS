# Susikurkite tris skaičius arba leiskite visus skaičius suvesti vartotojui. Tikrinkite (naudojant visas if sąlygos dalis):
# Ar pirmi du skaičiai lygūs?
# Ar pirmas ir trečias skaičiai lygūs?
# Ar trečias skaičius didesnis už pirmą?
# Ar antras skaičius lygus dvigubai trečio skaičiaus reikšmei?
# Ar pirmas skaičius dalinasi iš 3?
# Jei nieko nepavyko rasti, išveskite klaidos pranešimą.

print ('Iveskite pirma skaiciu:')
num1 = int(input())

print ('Iveskite antra skaiciu:')
num2 = int(input())

print ('Iveskite trecia skaiciu:')
num3 = int(input())

if num1 == num2:
    print ('Pirmi du skaiciai yra lygus')
elif num1 == num3:
    print ('Pirmas ir trecias skaicius yra lygus')
elif num3 > num1:
    print ('Trecias skaicius yra didesnis uz pirma')
elif num2 == num3*2:
    print ('Antras skaicius lygus dvigubai trecio skaiciaus reiksmei')
elif (num1 % 3) == 0:
    print ('Skaicius dalinasi is 3 be liekanos')
else:
    print ('Ivyko klaida, bandykite kita skaiciu')