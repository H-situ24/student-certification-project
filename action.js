function signup(){
    var un=document.getElementById("txt1");
    var ui=document.getElementById("txt2");
    var pa=document.getElementById("txt3");
    if(un.value=="" || ui.value=="" || pa.value==""){
        alert("All field fill should be mandatory");
        return false;
    
    }
    else if(un.value.length<3){
        return false;
    }
    else if(ui.value.length<4){
        return false;
}
else if(pa.value.length<5){
    document.getElementById("s3").innerHTML="password must be 5 charactor";
    return false;
}
// else{
//     return true;
// }
}
function username(){
    var un=document.getElementById("txt1");
    if(un.value==""){
        document.getElementById("s1").innerHTML="Name Can't be blanks";
        return false;

    }
    else if(un.value.length<3){
        document.getElementById("s1").innerHTML="Name atleast 3 charactor";
        return false;
    }
    else{
        document.getElementById("s1").innerHTML=""
        return true;
    }
}
function userid(){
    var ui=document.getElementById("txt2");
    if(ui.value==""){
        document.getElementById("s2").innerHTML="Uid Can't be blanks";
        return false;
    }
    else if(ui.value.length<4){
        document.getElementById("s2").innerHTML="uid must atleast 4 charactor";
        return false;
    }
    else{
        document.getElementById("s2").innerHTML="";
        return true;

    }
}
function upassword(){
    var pa=document.getElementById("txt3");
    if(pa.value==""){
        document.getElementById("s3").innerHTML="password can't blanks";
        return false;
    }
    else if(pa.value.length<5){
        document.getElementById("s3").innerHTML="password must be 5 charactor";
        return false;
    }
    else{
        document.getElementById("s3").innerHTML="";
        return true;
    }
}