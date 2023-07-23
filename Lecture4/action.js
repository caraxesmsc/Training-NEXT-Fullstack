function sayHello(name){
    console.log("Hello");
    let message = (name === undefined) ?  "Welcome All!" : "Welcome "+name;
    console.log(message);
}
function myProduct (x,y){
    return x*y;
}
function authbool(user,pass){
    let presetUser="Ahmed";
    let presetEmail="Ahmed@gmail.com"; 
    let presetPass=123;
    if((user==presetUser || user==presetEmail) && pass==presetPass){
        return true;
    }else{
        return false;
    }
}
function auth(bool){
    let msg = bool ? "Access Granted" : "DENIED";
    return msg;
}