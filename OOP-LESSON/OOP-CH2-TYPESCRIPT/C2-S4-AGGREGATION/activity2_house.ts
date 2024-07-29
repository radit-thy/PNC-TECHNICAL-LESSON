//house
class House {
    owner: string;
    rooms:Rooms[] = [];
    constructor(owner:string) {
        this.owner = owner;
        
    }
    //add rooms function
    addRoom(room:Rooms){
        this.rooms.push(room);

    }
}
//doors
class Doors {
    numberDoor: number;
    constructor(numberDoor: number) {
        this.numberDoor = numberDoor;
        
    }

}
//rooms
class Rooms {
    numberRoom: string;
    doors: Doors[] = [];
    constructor(numberRoom:string){
        this.numberRoom = numberRoom;
    }
    //add  doors to room 
    addDoor(door:Doors){
        this.doors.push(door);
    }

}

//=======add roomes to house==========
let Myhouse = new House("Radit");
let room1 = new Rooms("Rada");
let room2 = new Rooms("Rado");

//add rooms to house
Myhouse.addRoom(room1);
Myhouse.addRoom(room2);

console.log(Myhouse);


//======add door and to the house and rooms======
let Mydoor = new Rooms("Radit");
let door1 = new Doors(200);
let door2 = new Doors(300);

Mydoor.addDoor(door1);
Mydoor.addDoor(door2);


console.log(Mydoor);

