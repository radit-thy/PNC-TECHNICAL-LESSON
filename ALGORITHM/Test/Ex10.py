# i = 0
# Is_false = False
# while i<3 and not Is_false :
#     number = int(input())
#     if number == 72 :
#         print('WIN')
#         Is_false = True
#     elif number!=72 and i==2 :
#         print('LOST')    
#     elif number !=72 :
#         print('AGAIN')
#     i+=1

array2D = [
    [1, 7, 3],
    [9, 3, 6],
    [4, 8, 5]
   
]
column_sums = []
colum = len(array2D[0])
row = len(array2D)
for i in range(row):
    sum = array2D[i][0]
    for j in range(colum):
        if array2D[i][j] > sum:
            sum = array2D[i][j]
    column_sums.append(sum)
print(column_sums)