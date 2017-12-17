$(document).ready(function () {
    $("#signUpBtn").click(function(){
        sendMail($("#email").val(), function(results){
            console.log(results);
        })
    })
})