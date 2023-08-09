$("#BMIbtn").click(function(){
    var h = $("#h").val();
    var w = $("#w").val();
    var result= (w/(h*h))*10000;
    result= Math.round(result * 100) / 100;

    $("#BMIOutput").html(result);
    if (result > 25) {
        $("#BMIType").html("Over weight");}
        else if (result < 18.5) {
        $("#BMIType").html("Under weight");}
        else {
        $("#BMIType").html("Normal weight");}
})