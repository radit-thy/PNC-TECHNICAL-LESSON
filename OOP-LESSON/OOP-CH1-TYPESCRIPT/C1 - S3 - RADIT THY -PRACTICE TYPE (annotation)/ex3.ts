// Instructions:
// • Run TSC with no NULL check:  tsc  .\ex3.ts
//       check no error are displayed

// Go to the docuement of typescript docuementation :
// https://www.typescriptlang.org/tsconfig
// And undertand the eaning of   strictNullChecks option

// • Now  Run TSC with  the -strictNullChecks option :  tsc --strictNullChecks  .\ex3.ts
//        An error is display :  understand it and fix the code


let isMark: boolean=false;

if (isMark) {
  console.log("you are Mark");
} else {
  console.log("i don't knwo you");
}
