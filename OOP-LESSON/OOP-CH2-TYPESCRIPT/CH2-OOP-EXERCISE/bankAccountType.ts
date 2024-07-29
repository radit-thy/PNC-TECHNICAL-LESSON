type bankAccount = {
  balance: number, 
  name: string
}

function debit(account: bankAccount, valueDollar:number){
  // TODO
  let save = account.balance + valueDollar;
  return save;


}

function credit(account: bankAccount, valueDollar:number){
  //TODO
  let pay = account.balance - valueDollar;
  return pay;


}