drink = [
{"name": "cocacola", "price": 8},
{"name": "Hansum_drinkan", "price": 10},
{"name": "Water", "price": 5},
]
total_money = 100
sum_drink = 0
result = 0
for i in range(len(drink)):
    sum_drink += drink[i]['price']
result = total_money - sum_drink
print('Remaining money after his spent on drink is:',result,'$')