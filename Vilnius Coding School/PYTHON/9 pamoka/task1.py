# Susikurkite skaičiui saugoti skirtą kintamąjį, arba reikšmę leiskite suvesti vartotojui. Tikrinkite (naudojant visas if sąlygos dalis):
# Ar skaičius yra lyginis?
# Ar dalinasi iš 5?
# Ar skaičius lygus 3?
# Jeigu nieko nepavyko rasti, išveskite klaidos pranešimą.

print ('Iveskite skaiciu:')
number = int(input())

if (number % 2) == 0:
    print ('Skaicius yra lyginis')
elif (number % 5) == 0:
    print ('Skaicius dalinasi is 5 be liekanos')
elif number == 3:
    print ('Skaicius yra lygus 3')
else:
    print('Ivyko klaida, bandykite kita skaiciu')