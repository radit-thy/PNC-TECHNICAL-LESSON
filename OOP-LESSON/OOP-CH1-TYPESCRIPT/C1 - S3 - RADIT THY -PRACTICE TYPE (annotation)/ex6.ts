// Instructions:
// • Add type annotations (as explicit as possible)
// • Fix errors (if applicable)

let item1 = { name: "computer", quantity: 4 };
let item2 = { name: "chair" };

// TODO Replace "any" by the appropriate annotation
// TODO Add annotation for the return type
function getItemInfo(item: any) {
  return item.quantity + " " + item.name;
}

console.log(getItemInfo(item1));

// After aing the annotion, this instrution should be in error !
console.log(getItemInfo(item2));
