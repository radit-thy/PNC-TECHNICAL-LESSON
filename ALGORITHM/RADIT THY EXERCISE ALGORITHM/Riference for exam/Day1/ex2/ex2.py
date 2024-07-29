# How many letter "A" in array => 5
# ===================== 1 =====================

fruits = ["banana", "coconut", "mango", "orange"]
count = 0
for i in range(len(fruits)):
    for j in range(len(fruits[i])):
        if fruits[i][j] == 'a' or  fruits[i][j] == 'A':
            count += 1
print(count)

# ===================== 2 =====================

# fruits = ["banana", "coconut", "mango", "orange"]
# count = 0
# for fruit in fruits:
#     for letter in fruit:
#         if letter == 'a' or letter == 'A':
#             count += 1
# print(count)
