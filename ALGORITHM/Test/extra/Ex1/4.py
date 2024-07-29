# - Count odd and event value in array
array = [10, 3, 13, 6, 7, 9]
result1=0
result2=0
for i in range(len(array)):
    if array[i]%2==0:
        result1+=array[i]
    elif array[i]%2==1:
        result2+=array[i]
print('Count event: '+str(result1))
print('Count old: '+str(result2))


