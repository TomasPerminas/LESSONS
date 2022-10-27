# Paprašykite vartotojo įvesti vardą, amžių, ūgį (metais) (nepamirškite ką reikia iškonvertuoti iš str į int ar float). Išveskite gautus duomenis ir jų tipus.

print('Iveskite varda:')
name = input()

print('Iveskite amziu:')
age = int(input())

print('Iveskite ugi metrais:')
height = float(input())

print('Vartotojo vardas:',name,type(name))
print('Vartotojo amzius:',age,type(age))
print('Vartotojo ugis metrais:',height,type(height))