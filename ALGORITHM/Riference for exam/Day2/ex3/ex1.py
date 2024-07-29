# - Sum all number in string : answer (37)

# numbers = "10 2 5 20"
# sum =0
# for i in range(len(numbers)):
#     sum += int(numbers[i])
#     print(numbers)


# ==============================

numbers = "10 2 5 20"
count_numbers = numbers.split()
sum_number = 0
for i in range(len(count_numbers)):
    sum_number += int(count_numbers[i])
print(sum_number)