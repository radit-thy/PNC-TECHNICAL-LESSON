def average(arr):
    sum=0
    aver=1
    for i in range(len(arr)):
        sum+=arr[i]
    aver = sum/len(arr)
    return aver
 
number=int(input())
sumAll = 0
total = 0
for i in range(number):
    arr=eval(input())
    sumAll += average(arr)
total = sumAll/number

print(total) 