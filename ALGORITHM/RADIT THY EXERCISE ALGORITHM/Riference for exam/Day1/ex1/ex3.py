# Find min and max value in array
array = [10, 3, 13, 6, 7, 9]
min = array[0]
max = array[0]
for i in range(len(array)):
    if min > array[i]:
        min = array[i]
    if max < array[i]:
        max = array[i]
print(min)
print(max)


