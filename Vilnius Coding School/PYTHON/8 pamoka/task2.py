# Leiskite vartotojui suvesti norimą skaičių. Patikrinkite ar šis skaičius dalinasi iš 7, jei taip išveskite vieną tekstą, jei ne - kitą.

print ('Iveskite skaiciu:')
number = int(input())

if (number % 7) == 0:
    print ('Skaicius dalinasi is 7 be liekanos')
else:
    print ('Skaicius nesidalina is 7 be liekanos')