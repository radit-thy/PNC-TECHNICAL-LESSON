# How many letter A in text

text = "I like banana"
count = 0
for i in range(len(text)):
    if text[i] == 'a' or text[i] == 'A':
        count +=1
print(count)
