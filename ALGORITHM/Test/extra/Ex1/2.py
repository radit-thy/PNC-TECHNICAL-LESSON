# - Find average value in array
array = [10, 3, 13, 6, 7, 9]
sum = 0
total = ''
for i in range(len(array)):
   sum += array[i]
total = sum/len(array)
print(total)