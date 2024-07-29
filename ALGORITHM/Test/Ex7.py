def reverse(string):
    Re_string = ''
    last_index=len(string)-1
    for i in range(len(string)):
        Re_string += string[last_index-i]
    return Re_string
Input_string = '1234abcd'
Output_string = reverse(Input_string)
print(Output_string)