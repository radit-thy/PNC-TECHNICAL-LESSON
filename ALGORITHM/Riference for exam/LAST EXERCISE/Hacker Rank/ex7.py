
def reverse(string):
    Return_string = ''
    last_index = len(string)-1
    for i in range(len(string)):
        Return_string += string[last_index-i]
    return Return_string
number = input()
output_string = reverse(number)
print(output_string)








# =================================================
# number = "ABC"
# texR=""
# for i in range(len(number)):
#     text =number[len(number)-i-1]
#     texR+=text
# print(texR)

# print(number[::-1])