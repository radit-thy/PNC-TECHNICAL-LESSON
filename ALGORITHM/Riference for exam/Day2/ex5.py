
# Find average of odd number

# ===========My code 1===============
# numbers = [1, 3, 4, 2, 6, 8, 9]
# average = 0
# for i in range(len(numbers)):
#     if numbers[i]%2 != 0 :
#         average += numbers[i]/len(numbers)
# print(average)


# ===========My code 2 correct===============
numbers = [1, 3, 4, 2, 6, 8, 9]
sum = 0
count = 0
for i in range(len(numbers)):
    if numbers[i]%2 != 0 :
        sum += numbers[i]
        count += 1
average = sum/count
print(average)