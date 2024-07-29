# How many letter each fruit => [6, 7, 5, 6]

fruits = ["banana", "coconut", "mango", "orange"]
count = 0
for i in range(len(fruits)):
    for j in range(len(fruits[i])):
        count += 1
print(count)
