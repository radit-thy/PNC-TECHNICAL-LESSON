
enum Gender{
    MALE,
    FEMALE
}

enum Major{
    WEP,
    SNA
}

enum Topic{
    JAVASCRIPT,
    PHP,
    HTML,
    TS,
    VEU
}

class Student {
    private name:string;
    private gender: Gender.FEMALE;
    private major:Major.WEP;
    results:Result[] = [];

    constructor(name:string, major:Major.WEP, gender:Gender.FEMALE) {
        this.name = name;
        this.major = major;
        this.gender = gender;
        
    }
}

class Result {
    private score:number;
    private topic:Topic;
    constructor(score:number,topic:Topic) {
        this.score = score;
        this.topic = topic;
        
    }
}

const student1 = new Student("Class A",Major.WEP,Gender.FEMALE);
const result1 = new Result(10,Topic.JAVASCRIPT);
const result2 = new Result(10,Topic.PHP);
const result3 = new Result(10,Topic.HTML);
const result4 = new Result(10,Topic.TS);
const result5 = new Result(10,Topic.VEU);
student1.results.push(result1,result2,result3,result4,result5);
console.log(student1);
