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

guests = [
{"name": "rady", "pay": 20},
{"name": "sokhom", "pay": 10},
{"name": "yon", "pay": 25},
{"name": "mengheang", "pay": 5},
{"name": "dara", "pay": 15},
]
total_money = 100
result_money = 0
remaning_money = 0
total_spends =0
sum_Of_guestsPay = 0
sum_drink = 0
sum_foods = 0
for i in range(len(foods) and len(drink)):
    sum_foods += foods[i]['price'] 
    sum_drink += drink[i]['price']
    total_spends = sum_foods + sum_drink
    remaning_money = total_money - total_spends
for i in range(len(guests)):
    sum_Of_guestsPay += guests[i]['pay']
result_money = remaning_money + sum_Of_guestsPay
print('His money remaining include with guest pay back is:',result_money,'$')
