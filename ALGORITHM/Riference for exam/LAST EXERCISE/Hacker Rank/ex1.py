numbers = [1,2,3,7,6,8]
res = ''
for i in range(len(numbers)):
    if numbers[i] == 6:
        res = i
print(res)