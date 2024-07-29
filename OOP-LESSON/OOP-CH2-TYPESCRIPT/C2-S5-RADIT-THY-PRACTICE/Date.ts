// Define DateTime class
class DateTime {
    year: number;
    month: number;
    day: number;
    hour: number;
    minute: number;

    constructor(year: number, month: number, day: number, hour: number, minute: number) {
        this.year = year;
        this.month = month;
        this.day = day;
        this.hour = hour;
        this.minute = minute;
    }

    toString(): string {
        return `${this.year}-${this.month}-${this.day} ${this.hour}:${this.minute}`;
    }
}

// Customer class remains the same
class Customer {
    firstName: string;
    lastName: string;
    address: string;

    constructor(firstName: string, lastName: string, address: string) {
        this.firstName = firstName;
        this.lastName = lastName;
        this.address = address;
    }
}

// Trip class using DateTime instead of Date
class Trip {
    busName: string;
    Departure: DateTime;
    Arrival: DateTime;
    Customers: Customer[];

    constructor(busName: string, Departure: DateTime, Arrival: DateTime, Customers: Customer[]) {
        this.busName = busName;
        this.Departure = Departure;
        this.Arrival = Arrival;
        this.Customers = Customers;
    }
}

// Create customers
let Radit = new Customer("Radit", "Rada", "Phnom Penh, Cambodia");
let Rady = new Customer("Rady", "Radav", "Kompot, Cambodia");
let Rado = new Customer("Rado", "Radov", "No address");

// Create DateTime objects
let startDate = new DateTime(2021, 9, 30, 8, 0); // Example date and time
let endDate = new DateTime(2021, 10, 5, 16, 30); // Example date and time

// Create trips
let Trip1 = new Trip("Radit Express", startDate, endDate, [Radit, Rady]);
let Trip2 = new Trip("Rady hosting", startDate, endDate, [Radit, Rady, Rado]);

// Output
console.log(Trip1);
console.log(Trip2);
