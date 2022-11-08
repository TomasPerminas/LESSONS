# Susikurkite du skaičius. Patikrinkite (naudojant 4 atskirus if’us):
# ar pirmas skaičius yra didesnis už antrąjį arba yra lygus 0;
# ar antras skaičius yra didesnis už pirmąjį arba yra lygus 5;
# ar pirmas skaičius yra didesnis už antrąjį ir yra lygus 20;
# ar antras skaičius yra didesnis už pirmąjį ir yra mažesnis už 100;

print ('Iveskite pirma skaiciu:')
num1 = int(input())

print ('Iveskite antra skaiciu:')
num2 = int(input())

if (num1 > num2) or (num1 == 0):
    print ('Pirmas skaičius yra didesnis už antrąjį arba yra lygus 0')

if (num2 > num1) or (num2 == 5):
    print ('Antras skaičius yra didesnis už pirmąjį arba yra lygus 5')

if (num1 > num2) and (num1 == 30):
    print ('Pirmas skaičius yra didesnis už antrąjį ir yra lygus 30')

if (num2 > num1) and (num2 < 100):
    print ('Antras skaičius yra didesnis už pirmąjį ir yra mažesnis už 100')