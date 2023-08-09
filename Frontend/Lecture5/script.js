document.getElementById("addButton").onclick=function(){
    var data1 = document.getElementById("parameter1").value;
    var data2 = document.getElementById("parameter2").value;
    function sum2(n1,n2){
        return parseInt(n1)+parseInt(n2);
    }
    var data3 = sum2(data1,data2);
    var data4 = (data3%2 == 0) ? "even" : "odd";
    document.getElementById("sumhere").innerHTML=data3;
    document.getElementById("evenoddhere").innerHTML=data4;
}
document.getElementById("image1").onmouseover=function(){
    document.getElementById("image1").style.cssText="width:500px";
}
document.getElementById("image1").onmouseleave=function(){
    document.getElementById("image1").style.cssText="width:50px";
}
document.getElementById("live1").onmouseover=function(){
    this.style.cssText="color:blue;background-color:antiquewhite;";
}
document.getElementById("live1").onmouseleave=function(){
    this.style.cssText="";
}
