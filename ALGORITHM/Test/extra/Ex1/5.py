# - Reverse array from [10, 3, 13, 6, 7, 9] => [9, 7, 6, 13, 3, 10]
array = [10, 3, 13, 6, 7, 9]
newarr=[]
lastindex=len(array)-1
for i in range(len(array)):
    newarr.append(array[lastindex-i])
print(newarr)