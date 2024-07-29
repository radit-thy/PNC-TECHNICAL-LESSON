

# word = 'mondy'
# char = ''
# result = ''
# for i in range(len(word)):
#     char = word[i]
# result += word[0]
# result += word[len(word)-1]
# print(result)

word = 'monday'
chr = ''
result = ''
def contains (word , char):
    for i in range(len(word)):
        char = word[i]
    result += word[0]
    result += word[len(word)-1]

    return contains