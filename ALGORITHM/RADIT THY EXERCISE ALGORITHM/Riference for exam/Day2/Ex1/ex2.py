# Count number less than 5

numbers = [1, 3, 4, 2, 6, 8, 9]
count = 0
for i in range(len(numbers)):
    if numbers[i] < 5:
        count = numbers[i]
        print(count)