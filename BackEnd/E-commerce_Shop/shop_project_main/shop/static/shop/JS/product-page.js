var amount="1";
document.getElementById("amount").innerHTML=amount;

function amount_plus(){
    amount++;
    document.getElementById("amount").innerHTML=amount;
}

function amount_minus(){
    amount--;
    document.getElementById("amount").innerHTML=amount;
    if(amount<1)
    {
        amount=1;
        document.getElementById("amount").innerHTML=amount;
    }
}