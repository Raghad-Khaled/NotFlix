let A2=document.getElementById("A2");
let A3=document.getElementById("A3");

let G2=document.getElementById("G2");
let G3=document.getElementById("G3");

let P3=document.getElementById("P3");
let P2=document.getElementById("P2");

let addactor=document.getElementById("addactor");
let addgenre=document.getElementById("addgenre");
let addcompany=document.getElementById("addcompany");

addactor.addEventListener("click",()=>{
if(A2.style.display=="none")
{
    A2.style.display="block";
}
else if(A3.style.display=="none"){
    A3.style.display="block";   
}
})

addgenre.addEventListener("click",()=>{
    if(G2.style.display=="none")
    {
        G2.style.display="block";
    }
    else if(G3.style.display=="none"){
        G3.style.display="block";   
    }
})

addcompany.addEventListener("click",()=>{
    if(P2.style.display=="none")
    {
        P2.style.display="block";
    }
    else if(P3.style.display=="none"){
        P3.style.display="block";   
    }
})
