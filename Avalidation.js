var nname=document.getElementById("nname");
var age=document.getElementById("age");
var matric=document.getElementById("matric");
var inter=document.getElementById("inter");
var bachelor=document.getElementById("bachelor");
var master=document.getElementById("master");
var phd=document.getElementById("phd");
var language_i=document.getElementById("language_i");
var language_ii=document.getElementById("language_ii");
var language_iii=document.getElementById("language_iii");
var email=document.getElementById("email");
var cellno=document.getElementById("cellno");

var xHr=new XMLHttpRequest();
nname.addEventListener('change',(e)=>
{
    
    var nnval=e.target.value;
    xHr.open('GET','Avalidation.php?value='+ nnval +"&type=nname",true);
    xHr.send();
    xHr.onreadystatechange=Data_Receive;
    
});
function Data_Receive()
{
    if(xHr.readyState==XMLHttpRequest.DONE)
    {
       
        var div=document.getElementById('Nname');
        div.innerHTML=xHr.responseText;
        
       
    }
}


age.addEventListener('change',(e)=>
{
    var aval=e.target.value;
    xHr.open('GET','Avalidation.php?value='+ aval +"&type=age",true);
    xHr.send();
    xHr.onreadystatechange=receive;
});
function receive()
{
    if(xHr.readyState==XMLHttpRequest.DONE)
    {
        var div=document.getElementById('AGE');
        div.innerHTML=xHr.responseText;
    }
}
matric.addEventListener('change',(e)=>
{
    var maval=e.target.value;
    xHr.open('GET','Avalidation.php?value='+ maval +"&type=matric",true);
    xHr.send();
    xHr.onreadystatechange=receive_matric;
});
function receive_matric()
{
    if(xHr.readyState==XMLHttpRequest.DONE)
    {
        var div=document.getElementById('Matric');
        div.innerHTML=xHr.responseText;
    }
}
inter.addEventListener('change',(e)=>
{
    var ival=e.target.value;
    xHr.open('GET','Avalidation.php?value='+ ival +"&type=inter",true);
    xHr.send();
    xHr.onreadystatechange=receive_inter;
   
});
function receive_inter()
{
    if(xHr.readyState==XMLHttpRequest.DONE)
    {
        var div=document.getElementById('Inter');
        div.innerHTML=xHr.responseText;
       
       
    }
}
bachelor.addEventListener('change',(e)=>
{
    var bval=e.target.value;
    xHr.open('GET','Avalidation.php?value='+ bval +"&type=bachelor",true);
    xHr.send();
    xHr.onreadystatechange=receive_bachelor;
});
function receive_bachelor()
{
    if(xHr.readyState==XMLHttpRequest.DONE)
    {
        var div=document.getElementById('Bachelor');
        div.innerHTML=xHr.responseText;
    }
}
master.addEventListener('change',(e)=>
{
    var masterval=e.target.value;
    xHr.open('GET','Avalidation.php?value='+ masterval +"&type=master",true);
    xHr.send();
    xHr.onreadystatechange=receive_master;
});
function receive_master()
{
    if(xHr.readyState==XMLHttpRequest.DONE)
    {
        var div=document.getElementById('Master');
        div.innerHTML=xHr.responseText;
    }
}

phd.addEventListener('change',(e)=>
{
    var pval=e.target.value;
    xHr.open('GET','Avalidation.php?value='+ pval +"&type=phd",true);
    xHr.send();
    xHr.onreadystatechange=receive_phd;
});
function receive_phd()
{
    if(xHr.readyState==XMLHttpRequest.DONE)
    {
        var div=document.getElementById('PHD');
        div.innerHTML=xHr.responseText;
    }
}
language_i.addEventListener('change',(e)=>
{
    var lival=e.target.value;
    xHr.open('GET','Avalidation.php?value='+ lival +"&type=language_i",true);
    xHr.send();
    xHr.onreadystatechange=receive_languagei;
});
function receive_languagei()
{
    if(xHr.readyState==XMLHttpRequest.DONE)
    {
        var div=document.getElementById('Language1');
        div.innerHTML=xHr.responseText;
    }
}
language_ii.addEventListener('change',(e)=>
{
    var liival=e.target.value;
    xHr.open('GET','Avalidation.php?value='+ liival +"&type=language_ii",true);
    xHr.send();
    xHr.onreadystatechange=receive_languageii;
});
function receive_languageii()
{
    if(xHr.readyState==XMLHttpRequest.DONE)
    {
        var div=document.getElementById('Language2');
        div.innerHTML=xHr.responseText;
    }
}
language_iii.addEventListener('change',(e)=>
{
    var liiival=e.target.value;
    xHr.open('GET','Avalidation.php?value='+ liiival +"&type=language_iii",true);
    xHr.send();
    xHr.onreadystatechange=receive_languageiii
});
function receive_languageiii()
{
    if(xHr.readyState==XMLHttpRequest.DONE)
    {
        var div=document.getElementById('Language3');
        div.innerHTML=xHr.responseText;
    }
}

cellno.addEventListener('change',(e)=>
{
    var cellval=e.target.value;
    xHr.open('GET','Avalidation.php?value='+ cellval +"&type=cellno",true);
    xHr.send();
    xHr.onreadystatechange=cell_receive;
});
function cell_receive()
{
    if(xHr.readyState==XMLHttpRequest.DONE)
    {
        var div=document.getElementById('phone');
        div.innerHTML=xHr.responseText;
    }
}


email.addEventListener('change',(e)=>
{
    var eval=e.target.value;
    xHr.open('GET','Avalidation.php?value='+ eval +"&type=email",true);
    xHr.send();
    xHr.onreadystatechange=receive_email;
});
function receive_email()
{
    if(xHr.readyState==XMLHttpRequest.DONE)
    {
        var div=document.getElementById('Email');
        div.innerHTML=xHr.responseText;
    }
}
