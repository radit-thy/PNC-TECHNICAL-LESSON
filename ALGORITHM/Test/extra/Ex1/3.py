# - Find min and max value in array
array = [10, 3, 13, 6, 7, 9]
# sum = 0
min = array[0]
max = array[0]
for i in range(len(array)):
    if array[i] > max:
        max = array[i]
        print('Max: '+str(max))
    elif array[i] < min:
        min = array[i]
        print('Min: '+str(min))
