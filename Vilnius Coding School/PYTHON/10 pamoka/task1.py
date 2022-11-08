# Leiskite vartotojui suvesti tris skaičius. Suraskite kuris iš šių skaičių yra didžiausias.

print ('Iveskite pirma skaiciu:')
num1 = int(input())

print ('Iveskite antra skaiciu:')
num2 = int(input())

print ('Iveskite trecia skaiciu:')
num3 = int(input())

if (num1 >= num2) and (num1 >= num3):
    largest = num1
elif (num2 >= num1) and (num2 >= num3):
    largest = num2
else:
    largest = num3

print("Didziausias skaicius is", num1, ",", num2, "ir", num3, "yra", largest)