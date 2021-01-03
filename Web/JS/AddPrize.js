var form1=document.getElementById("form1");
var form2=document.getElementById("form2");
var form3=document.getElementById("form3");
var form4=document.getElementById("form4");
var form5=document.getElementById("form5");
form1.style.display="none";
form2.style.display="none";
form3.style.display="none";
form4.style.display="none";
form5.style.display="block";

document.getElementById('btn1').addEventListener("click",()=>{
form1.style.display="block";
form2.style.display="none";
form3.style.display="none";
form4.style.display="none";
form5.style.display="none";
});
document.getElementById('btn2').addEventListener("click",()=>{
    form2.style.display="block";
    form1.style.display="none";
    form3.style.display="none";
    form4.style.display="none";
    form5.style.display="none";
});
document.getElementById('btn3').addEventListener("click",()=>{
    form3.style.display="block";
    form1.style.display="none";
    form2.style.display="none";
    form4.style.display="none";
    form5.style.display="none";
});
document.getElementById('btn4').addEventListener("click",()=>{
    form4.style.display="block";
    form1.style.display="none";
    form3.style.display="none";
    form2.style.display="none";
    form5.style.display="none";
});

document.getElementById('btn5').addEventListener("click",()=>{
    form5.style.display="block";
    form1.style.display="none";
    form3.style.display="none";
    form2.style.display="none";
    form4.style.display="none";
});


