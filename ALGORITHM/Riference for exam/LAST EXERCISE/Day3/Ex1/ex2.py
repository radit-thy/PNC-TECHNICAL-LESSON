# Find index of first 7

numbers = [7, 3, 7, 5, 6, 8, 7]

for i in range(len(numbers)):
    if numbers[i] == 7 and i==0:
        print(i)
    