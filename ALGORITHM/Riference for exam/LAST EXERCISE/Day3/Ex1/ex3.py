# Remove last 7 value from array

numbers = [7, 3, 7, 5, 6, 8, 7]
number = []
for i in range(len(numbers)):
    rovme = []
    if numbers[i] == 7 and i == 6:  
        rovme.pop(numbers[i])
    numbers.append(numbers)
print(numbers)