#  How many letter "N" in each fruit => [2, 1, 1, 1]

fruits = ["banana", "coconut", "mango", "orange"]
count = 0
for i in range(len(fruits)):
    for j in range(len(fruits[i])):
        count += 1
print(count)