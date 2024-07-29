
array = [ [0,0,0],
          [0,0,0],
          [7,7,7]
         ]

result = ''
count = 0
for i in range(len(array)):
    for j in range(len(array[i])):
        if array[i][j]==7:
            count+=1
    if count == 3:
        result='win'
    else:
        result='lost'
print(result)










