array2D = [
    [1, 7, 3],
    [9, 3, 6],
    [4, 8, 5]
   
]
column_sums = []
colum = len(array2D[0])
row = len(array2D)
for i in range(colum):
    sum = array2D[0][i]
    for j in range(row):
        if array2D[j][i] < sum:
            sum = array2D[j][i]
    column_sums.append(sum)
print(column_sums)