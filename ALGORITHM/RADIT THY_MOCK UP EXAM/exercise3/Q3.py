fruit_store = ["banana", "mango", "coconut", "orange"]
count_each_letter = []
count_All_letter = True
for i in range(len(fruit_store)):
    for j in range(len(fruit_store[i])):
        if fruit_store[i][j] == 'o':
            count_All_letter = True
        else:
            count_each_letter.append(fruit_store[i])
        print(count_each_letter)
