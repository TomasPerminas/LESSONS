# Susikurkite kintamąjį, kuriame nurodytumėte kelią iki norimo failo. Patikrinkite ar šis failas yra .py tipo, jei taip išveskite vieną tekstą, jei ne - kitą.

path = 'docs/file.py'

if path.endswith('.py'):
    print ('Failas yra Python')
else:
    print ('Failas nėra Python')