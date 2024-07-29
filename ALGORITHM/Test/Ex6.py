def multiplyNum(n1, n2):
    multiply = n1 * n2
    return multiply
def multiplywithinrang(startnum, endnum):
    total = 1
    res= 0
    if startnum > endnum:
        total = 0
    else:
        while startnum <= endnum:
            total= multiplyNum(startnum, total)
            startnum += 1
        res=total
    return res
startnum = int(input())
endnum = int(input())
print(multiplywithinrang(startnum, endnum))