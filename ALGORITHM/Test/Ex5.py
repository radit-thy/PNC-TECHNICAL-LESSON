def countChar(word, char):
    count = 0
    for i in range(len(word)):
        if word[i]==char:
            count += 1
    return count
words = eval(input())
character = input()
counter =0
letter = ""
for i in range(len(words)):
    letter = words[i]
    counter += countChar(letter, character)
print(counter)