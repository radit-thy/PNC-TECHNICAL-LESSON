
i = 0
while i<3:
    number = int(input())
    if number == 72:
        print('win')
        i=3
    elif number !=72 and i==2:
        print('lost')
    elif number !=72:
        print('again')
    i +=1

