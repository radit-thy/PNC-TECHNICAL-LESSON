
//customer
class Customer {
    firstName: string;
    lastName: string;
    address:string;
    constructor(firstName:string, lastName:string,address:string) {
        this.firstName = firstName;
        this.lastName = lastName;
        this.address= address;
        
    }
}

//trip
class Trip {
    busName: string;
    Departure:string;
    Arrival:string;
    Customers:Customer[];
    Datetimes:dateTime[];
    constructor (busName:string,Departure:string,Arrival:string,Customer:Customer[],Datetime:dateTime[]) { 
        this.busName= busName; 
        this.Departure= Departure;
        this.Arrival= Arrival;
        this.Customers = Customer;
        this.Datetimes= Datetime;
    }
}

//datetime
class dateTime {
    start: Date;
    end:Date;
    constructor(start:Date,end:Date) {
        this.start = start;
        this.end = end;
        
    }
}

//add customer
let Radit = new Customer ("Radit","Rada","Phnom Penh, Cambodia");
let Rady = new Customer ("Rady","Radav","Kompot, Cambodia");
let Rado = new Customer ("Rado","Radov","No address");


//Add date time
const startDate = new  Date('03/25/2024');
const endDate =   new  Date('03/30/2024');

//add trip
let Trip1 = new Trip("Radit Express", "Phnom Penh, Cambodia","OMC, Cambodia",[Radit,Rady],[new dateTime(startDate,endDate)]);
let Trip2 = new Trip("Rady hosting", "Phnom Penh, Cambodia","BMC, Cambodia",[Radit,Rady,Rado],[new dateTime(startDate,endDate)]);

console.log(Trip1);
console.log(Trip2);
