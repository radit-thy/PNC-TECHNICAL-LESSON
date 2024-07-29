fruit_store = ["banana", "mango", "coconut", "orange"]
count_each_letter = []
for i in range(len(fruit_store)):
    count_All_letter = 0
    for j in range(len(fruit_store[i])):
        count_All_letter += 1
    count_each_letter.append(count_All_letter)
print(count_each_letter)

