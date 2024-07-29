#  How to make value in array to even number : [2, 4, 4, 2, 6, 8, 10]

numbers = [1, 3, 4, 2, 6, 8, 9]
average = 0
countOdd= 0
countEvent= 0
for i in range(len(numbers)):
    if numbers[i]%2 == 0 :
        countEvent +=1
        if numbers[i]%2 != 0:
            countOdd += countEvent
            print(countOdd)
