# Leiskite vartotojui suvesti tris skaičius. Suraskite kuris iš šių skaičių yra mažiausias.

print ('Iveskite pirma skaiciu:')
num1 = int(input())

print ('Iveskite antra skaiciu:')
num2 = int(input())

print ('Iveskite trecia skaiciu:')
num3 = int(input())

if (num1 <= num2) and (num1 <= num3):
    smallest = num1
elif (num2 <= num1) and (num2 <= num3):
    smallest = num2
else:
    smallest = num3

print("Maziausias skaicius is", num1, ",", num2, "ir", num3, "yra", smallest)