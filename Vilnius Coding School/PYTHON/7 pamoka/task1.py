# Susikurkite tris skaičių kintamuosius su norimomis reikšmėmis. Patikrinkite šias sąlygas (naudojant elif dalis):
# Ar pirmas skaičius didesnis už antrą?
# Ar antras skaičius didesnis už trečią?
# Ar trečias skaičius didesnis už pirmą?
# Ar pirmi du skaičiai yra lygūs?
# Ar paskutiniai du skaičiai yra lygūs?
# Ar pirmas skaičius yra lygus 0?
# Ar antras skaičius neigiamas?
# Ar trečias skaičius teigiamas?


a = 1
b = 2
c = 3

if a > b:
    print ('Pirmas skaicius didesnis uz antra')
elif b > c:
    print ('Antras skaicius didesnis uz trecia')
elif c > a:
    print ('Trecias skaicius didesnis uz pirma')
elif a == b:
    print ('Pirmi du skaiciai yra lygus')
elif b == c:
    print ('Paskutiniai du skaciai yra lygus')
elif a == 0:
    print ('Pirmas skaicius yra lygus 0')
elif b < 0:
    print ('Antras skaicius yra neigiamas')
elif c > 0:
    print ('Trecias skaicius yra teigiamas')
