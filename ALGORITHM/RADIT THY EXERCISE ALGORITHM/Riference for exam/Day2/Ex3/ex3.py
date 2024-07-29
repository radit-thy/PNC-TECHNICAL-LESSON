# - Find average of numbers : answer (37/4 = 9.25)

numbers = "10 2 5 20"
count_numbers = numbers.split()
sum_number = 0
count = 0
for i in range(len(count_numbers)):
    sum_number += int(count_numbers[i])
    count +=1
average = sum_number/count
print(average)