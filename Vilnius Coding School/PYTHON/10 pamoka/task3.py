# Susikurkite trijų egzaminų rezultatų kintamuosius arba paprašykite, kad vartotojas suvestų šias reikšmes. Suraskite pažymių vidurkį. Atlikite šiuos patikrinimus:
# ar gautas vidurkis yra [8-10];
# ar gautas vidurkis yra [5-8);
# ar gautas vidurkis yra < 5.

print ('Iveskite pirmo egzamino rezultata nuo 1 iki 10:')
num1 = int(input())

print ('Iveskite antro egzamino rezultata nuo 1 iki 10:')
num2 = int(input())

print ('Iveskite trecio egzamino rezultata nuo 1 iki 10:')
num3 = int(input())

median = (num1 + num2 + num3) / 3

if median > 10:
    print ('Ivesti blogi pazymiai, bandykite dar karta')
elif (median >= 8) and (median <= 10):
    print ('Vidurkis yra tarp 8 ir 10')
elif (median >= 5) and (median < 8):
    print ('Vidurkis yra tarp 5 ir 7')
elif median < 0:
    print ('Ivesti blogi pazymiai, bandykite dar karta')
else:
    print ('Vidurkis yra zemiau 5')