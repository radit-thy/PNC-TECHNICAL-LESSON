i = 0
Is_false = False
while i<3 and not Is_false:
    number =int(input())
    if number == 72:
        print('WIN')
        Is_false = True
    elif number!=72 and i==2:
        print('LOST')    
    elif number !=72:
        print('AGAIN')
    i+=1