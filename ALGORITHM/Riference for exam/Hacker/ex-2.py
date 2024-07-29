
# list1 = ['pnc','pnv','pnp']
# list2 = ['2022','2023','2024']

# list1 = input()
# list2 = input()

# for i in range(len(list1)):
#     for j in range(len(list2)):

#      print(list1,list2)


#===============Ex2=============
# array2D = eval(input())

array2D = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
]
for i in range(len(array2D)):
    for j in range(len(array2D[i])):
        if array2D[i][j] == 7:
            print('Row:'+ str(i) + " and Column:" + str(j))

