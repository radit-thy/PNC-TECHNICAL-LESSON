# Sum only even number

numbers = [7, 3, 7, 5, 6, 8, 7]
sum = 0
for i in range(len(numbers)):
    if numbers[i]%2 == 0:
        sum += numbers[i]
print(sum)
