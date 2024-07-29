# How many letter in each fruit : [6, 5, 7, 6]

fruits  = ["banana", "mango", "coconut", "orange"]
# all_letter= []
# for i in range(len(fruits)):
#     count_letter = 0
#     for j in range(len(fruits[i])):
#         count_letter += 1
#     all_letter.append(count_letter)
# print(all_letter)

# ===================================================



count_all = []
for i in range(len(fruits)):
    count_letter = 0    
    for j in range(len(fruits[i])):
        count_letter += 1
    count_all.append(count_letter)
print(count_all)
