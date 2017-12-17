function sendMail(email, callback){    
    $.post("./controllers/php/sendMail.php", {"email" : email}, function(results){
        callback(results);
    })
}