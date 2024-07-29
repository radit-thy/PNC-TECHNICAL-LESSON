list1=eval(input())
list2=eval(input())
if len(list1) == 0 and len(list2) == 0:
    print("NOTHING TO COMBINE")
else:
    for i in range(len(list2)):
        list1.insert(i + (i + 1), list2[i])

    print(list1)


