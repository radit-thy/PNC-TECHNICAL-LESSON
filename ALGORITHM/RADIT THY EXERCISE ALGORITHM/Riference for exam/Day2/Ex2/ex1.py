# how many character in text (don't count space)

text = "I like banana"
count = 0
for i in range(len(text)):
    if text[i] != ' ':
        count +=1
print(count)
