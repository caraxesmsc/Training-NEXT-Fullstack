function sayHello(name){
    console.log("Hello");
    let message = (name === undefined) ?  "Welcome All!" : "Welcome "+name;
    console.log(message);
}