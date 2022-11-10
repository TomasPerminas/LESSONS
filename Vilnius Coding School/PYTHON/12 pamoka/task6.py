# Išveskite visus skaičius nuo 1 iki 15, prie kiekvieno jų nurodant tai lyginis ar nelyginis skaičius. Pvz:
# 1 - nelyginis
# 2 - lyginis
# # 3 - nelyginis

for i in range(1,16):
    if (i%2 == 0):
        print(i,'- lyginis')
    else:
        print(i,'- nelyginis')