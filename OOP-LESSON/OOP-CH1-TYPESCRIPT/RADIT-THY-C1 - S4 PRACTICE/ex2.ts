/*
INSTRUCTIONS

   We want to manage customer food orders in a restaurant:

 - An Order has:
		   - the customer name (string)
		   - the date of the order (string)
		   - the list of food orders (array of FoodOrder)



 - An FoodOrder has:
		   - the food name (string)
		   - the price (number)

   Q1 : Create the 2 types.

   Q2 : Create the following orders :
			   - customer = "HIM THE CRAZY"
			   - date = "SEP 9"
			   - food orders:
					   - food : "french fries", price : 12
					   - food  : "cambodian fries", price : 1
					   - food : "ice scream", price : 4


			   - customer = "RONAN THE CRAZY"
			   - date = "SEP 10"
			   - food orders:
					   - food : "coca", price : 12
					   - food  : "caco", price : 1
					   - food  : "snake", price : 14
					   - food  : "chiken", price : 11
				   	
				   	
   Q3 : Create a function that take as parameter a Order, and return the total price of the order
					   getTotalPrice(order : Order) : number
				   	
				   	
   Q4 : Create a function that take as parameter a list of Order, and return which order is the most expensive
 
		  getMostExpensive(orders : Order[]) : Order
	
*/

type order = {
	customer: string;
	date: string;
	FoodOder: [];
}

type FoodOders = {
	food: string;
	price: number;
}

let order = [
	{
		customer: "HIM THE CRAZY",
		date: "SEP 9",
		FoodOders: [
			{ food: "coca", price: 12 },
			{ food: "cambodian fries", price: 1 },
			{ food: "ice scream", price: 4 }
		]
	},
	{
		customer: "RONAN THE CRAZY",
		date: "SEP 10",
		FoodOders: [
			{ food: "coca", price: 12 },
			{ food: "caco", price: 1 },
			{ food: "snake", price: 14 },
			{ food: "chiken", price: 11 }
		]
	}

]


function getTotalPrice(order):number {
	return order.salary + order.salary;
}


function getMostExpensive(orders : Order[]):number {
	return orders.salary + orders.or;
}





