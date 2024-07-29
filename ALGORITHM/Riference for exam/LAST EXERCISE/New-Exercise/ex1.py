

# Kanha record her score in list :
scores = [
  {"subject": "JavaScript", "score": 80, "teacher": "Yon"},
  {"subject": "Algorithm", "score": 40, "teacher": "Mengheang"},
  {"subject": "Software Deployment", "score": 69, "teacher": "Rady"},
]

#1 - Write program to find the subject that Kanha failed
# res = 50
# output = ''
# for i in range(len(scores)):
#     if scores[i]['score'] < res:
#         output = scores[i]['subject']
# print(output)
#2 - Write program to find average score of Kanha
# sum = 0
# count = 0
# for score in scores:
#     sum += score['score'] 
#     count += 1
# average = sum/count
# print('total =', sum,',','average =',average)

#3 - Write program to find teacher name who teach Algorithm
# output = ''
# for score in scores:
#     if score['subject'] == 'Algorithm':
#         output = score["teacher"]
# print('teacher teach algorithm is :',output)
        

# ===================================================================
pass_score = 50
result = ''
for i in range (len(scores)):
    if scores[i]['score'] < pass_score:
        result = scores[i]['subject']
print(result)
                
# ===================================================================
count = 0
sum = 0
for i in range (len(scores)):
    sum += scores[i]['score']
    count += 1
average = sum/count
print(average)

# ===================================================================
# result = ''
# for i in range(len(scores)):
#     if scores[i]['subject'] == 'Algorithm':
#         result = scores[i]['teacher']
# print(result)




