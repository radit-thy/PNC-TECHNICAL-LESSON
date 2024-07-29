array2D = [
    [1, 7, 3],
    [9, 3, 6],
    [4, 8, 5]
   
]
column_sums = []
colum = len(array2D[0])
row = len(array2D)
for i in range(row):
    sum = 0
    for j in range(colum):
        sum += array2D[i][j]
    column_sums.append(sum)

print(column_sums)