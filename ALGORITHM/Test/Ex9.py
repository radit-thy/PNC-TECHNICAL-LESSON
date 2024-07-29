array2D = [
    [1, 7, 3],
    [9, 3, 6],
    [4, 8, 5]
   
]
column_sums = []
colum = len(array2D[0])
row = len(array2D)
for i in range(colum):
    sum = 0
    average = 1
    for j in range(row):
        sum += array2D[j][i]
    average =int(sum/row)
    column_sums.append(average)

print(column_sums)