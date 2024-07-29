class House {
  private chairs: Chair[] = [];

  /**
   * Add a chair of given ID
   * @param chairID the chair ID
   * @return the created chair
   */
   addChair(chairID: number, house:House): Chair {
    let chair = new Chair(chairID, house);
    this.chairs.push(chair);
    return chair;
    //todo
  }
}

class Chair {
  constructor(private chairId: number, private house: House) {}
}

// MAIN
let newHouse = new House();
let newChair = newHouse.addChair(45, newHouse); // Add a chair of id 45
