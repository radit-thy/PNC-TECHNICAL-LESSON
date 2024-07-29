
class Hotel {
    name:string;
    address:string;
    rooms: Rooms[] =[];
    constructor(name: string,address:string){
        this.name=name;
        this.address=address;
    }
    
    //add room to the hotel
    customerIsInHotel(customer: Customers): boolean{
        for(let room of this.rooms){
            if (room.customer.find(cus => cus === customer)){
                return true;
            }
        }
        return false;
    }

    //
    registerCustomer(customer: Customers, room: Rooms): boolean{
        if(!this.customerIsInHotel(customer) && room.customer.length < room.numberOfBed){
            room.customer.push(customer);
            return true;
        }
        return false;
    }


}

class Address {
    street: string;
    cityName: string;
    country: string;
    constructor(street:string, cityName:string, country:string) {
        this.street = street;
        this.cityName = cityName;
        this.country = country;
        
    }
}


class Customers {
    firstName: string;
    lastName: string;
    address: string;
    constructor(firstName:string,lastName:string,address:string) {
        this.firstName = firstName;
        this.lastName = lastName;
        this.address = address;
        
    }
}

class Rooms {
    roomID:number;
    numberOfBed:number;
    customer: Customers[] = [];
    constructor(roomID:number, numberOfBed:number) {
        this.roomID=roomID;
        this.numberOfBed=numberOfBed;
        
    }
}