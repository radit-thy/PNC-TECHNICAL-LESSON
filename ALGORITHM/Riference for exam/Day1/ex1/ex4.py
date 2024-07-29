# Count odd and event value in array
# ============= 1 ===============
# array = [10, 3, 13, 6, 7, 9]
# Odd = 0
# Event = 0
# for i in range(len(array)):
#     if array[i]%2 ==0:
#         Event = array[i]
#         print('Event:',Event)
#     else:
#         Odd = array[i]
#         print('Odd:',Odd)

# ============= 2 ===============

array = [10, 3, 13, 6, 7, 9]
Odd = 0
Event = 0
for i in range(len(array)):
    if array[i]%2 ==0:
        Event += 1
    else:
        Odd += 1
print('Odd:',Event)
print('event:',Odd)


# ============= 3 ===============

array = [10, 3, 13, 6, 7, 9]
odd_numbers = 0
event_numbers = 0
for number in array:
    if number % 2 == 0:
        event_numbers += 1
    else:
        odd_numbers += 1
print("This is event:", odd_numbers)
print("This is odd:", event_numbers)
