/*
// Assignment : 2
// Referencing and Copying in Objects
const firstObj = {
  id: 1,
  name: "First",
  referencing: true,
};
// In Objects it is always referencing ; not copying
const secondObj = firstObj;

console.log(firstObj, secondObj);

secondObj.copying = false;

console.log(firstObj, secondObj);

// Referencing and Copying in Arrays
const firstArray = [1, 2, 3, 4, 5];

// Copying in Array
let secondArray = [...firstArray]; // using ES6 spread operator
firstArray.push(6);
console.log(firstArray, secondArray);

// Referencing in Array
secondArray = firstArray;
console.log(firstArray, secondArray);


// Income tax - Exercise

// Using Constructor in Class
class Taxation {
  constructor(baseSal) {
    this.baseSal = baseSal;
  }

  calTax() {
    return (this.baseSal * 10) / 100;
  }

  calPF() {
    return (this.baseSal * 5) / 100;
  }
}

const taxation = new Taxation(25000);

const tax = taxation.calTax();
const pf = taxation.calPF();

console.log(`Tax: ${tax} || PF: ${pf}`);


// Passing Argument to Methods in Class
class Taxation {
  calTax(baseSal) {
    this.baseSal = baseSal;
    return (this.baseSal * 10) / 100;
  }

  calPF(baseSal) {
    this.baseSal = baseSal;
    return (this.baseSal * 5) / 100;
  }
}

const taxation = new Taxation();

const tax = taxation.calTax(25000);
const pf = taxation.calPF(25000);

console.log(`Tax: ${tax} || PF: ${pf}`);
*/

/*
// JS - Fundamentals I
// Coding Challenge : 1
const markHeight = 1.88;
const johnHeight = 1.76;
const markWeight = 95;
const johnWeight = 85;

const markBMI = markWeight / markHeight ** 2;
const johnBMI = johnWeight / johnHeight ** 2;

const markHigherBMI = markBMI > johnBMI;

console.log(markBMI, johnBMI, markHigherBMI);

// Coding Challenge : 2

if (markBMI > johnBMI) {
  console.log(`Mark's BMI (${markBMI}) is higher than John's (${johnBMI}) BMI`);
} else if (markBMI < johnBMI) {
  console.log(`Mark's BMI (${markBMI}) is lower than John's (${johnBMI}) BMI`);
} else {
  console.log(`Mark's BMI (${markBMI}) and John's (${johnBMI} BMI are equal)`);
}


// Coding Challenge : 3
let dolphinMatch1 = 196;
let dolphinMatch2 = 108;
let dolphinMatch3 = 189;
let koalasMatch1 = 188;
let koalasMatch2 = 191;
let koalasMatch3 = 108;
const averageDolphins = (dolphinMatch1 + dolphinMatch2 + dolphinMatch3) / 3;
const averageKoalas = (koalasMatch1 + koalasMatch2 + koalasMatch3) / 3;

const minimumScore = 100;

if (averageDolphins > minimumScore && averageDolphins > minimumScore) {
  console.log(
    `Dolphins are the Champion with a average score ${averageDolphins}`
  );
} else if (averageKoalas > minimumScore && averageKoalas > averageDolphins) {
  console.log(`Koalas are the Champion with a average score ${averageKoalas}`);
} else if (
  averageDolphins >= minimumScore &&
  averageKoalas >= minimumScore &&
  averageKoalas === averageDolphins
) {
  console.log(`It's a Draw! with average score ${averageKoalas}`);
} else {
  console.log("Both team failed to achieve minimum average score!!");
}


//Coding Challenge : 4
let bill = 300;
const tip =
  bill >= 50 && bill <= 300
    ? (bill * 15) / 100
    : bill > 300
    ? (bill * 20) / 100
    : 0;
console.log(
  `The bill was ${bill}, the tip was ${tip} and the total value is ${
    bill + tip
  }`
);


// JS - Fundamentals II
// Coding Challenge : 1
function calAverage(score1, score2, score3) {
  return (score1 + score2 + score3) / 3;
}

const avgDolphins = calAverage(65, 59, 45);
const avgKoalas = calAverage(85, 54, 41);
console.log(avgDolphins, avgKoalas);
*/

/*
// Values, Variables, let, const and var, basic operators
const country = "India";
const continent = "Asia";
let population = 110;
console.log(country, continent, population + " million");

const isIsland = false;
let language;
console.log(
  typeof isIsland,
  typeof population,
  typeof country,
  typeof language
);

language = "Hindi";
console.log(
  typeof isIsland,
  typeof population,
  typeof country,
  typeof language
);

let halfPopulation = population / 2;
console.log(halfPopulation);

population++;
console.log(population);

let populationFinland = 6;
const moreThanFinland = population > populationFinland;
console.log(moreThanFinland);

const averagePopulation = 33;

const lessPopulation = population < averagePopulation;
console.log(lessPopulation);

// Template Literals
const description = `${country} is in ${continent} and its ${population} million people speak ${language}`;
console.log(description);

// if-else Statements
if (population > averagePopulation) {
  console.log(`${country}'s population is above average`);
} else {
  console.log(
    `${country}'s population is ${averagePopulation - population} below average`
  );
}
*/
