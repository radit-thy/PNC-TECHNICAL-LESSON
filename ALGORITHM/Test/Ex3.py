# list1 = []
# list2 = []

# if len(list1) == 0 and len(list2) == 0:
#     print("NOTHING TO COMBINE")
# else:
#     for i in range(len(list2)):
#         list1.insert(i + (i + 1), list2[i])

#     print(list1)
text = input()
sum = 0
for i in range(len(text)):
    if text[i]=="X":
        sum += i
print(sum)