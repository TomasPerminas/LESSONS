# Leiskite vartotojui suvesti norimą skaičių. Patikrinkite ar jis yra lyginis, jei taip išveskite vieną informaciją, jei ne - kitą.

print ('Iveiskite skaiciu:')
number = int(input())

if (number % 2) == 0:
    print ('Skaicius yra lyginis')
else:
    print ('Skaicius yra nelyginis')