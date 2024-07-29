# Find average value in array

# =============1=============
# array = [10, 3, 13, 6, 7, 9]
# average = 0
# for i in range(len(array)):
#     average += array[i]/len(array)
# print(average)

# =============2=============
array = [10, 3, 13, 6, 7, 9]
sum = 0
count = 0
for i in range(len(array)):
    sum += array[i]
    count += 1
average = sum/count
print(average)