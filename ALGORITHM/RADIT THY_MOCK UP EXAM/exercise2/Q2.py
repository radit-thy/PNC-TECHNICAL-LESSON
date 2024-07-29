drink = [
{"name": "cocacola", "price": 8},
{"name": "Hanuman", "price": 10},
{"name": "Water", "price": 5},
]

foods = [
{"name": "fish", "price": 9},
{"name": "meat", "price": 12},
{"name": "chicken", "price": 7},
]

total_money = 100
total_spends =0
sum_drink = 0
sum_foods = 0
for i in range(len(foods) and len(drink)):
    sum_foods += foods[i]['price'] 
    sum_drink += drink[i]['price']
total_spends = sum_foods + sum_drink
print('His spent on drink and food is:',total_spends,'$')
