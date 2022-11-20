$(document).ready(function(){
    //console.log("pageready");
    $("#login").click(function(){
        var email = $("#email").val();
        //console.log(email);
        var password= $("#password").val();
        //console.log(password);
        if (email=="" || password=="")
            alert("Enter email and password");

        $.ajax(
            {
                url:'http://localhost/guvi-task/php/login.php',
                method:'POST',
                data:{
                    login:1,
                    email:email,
                    password:password,
                },
            success: function(response){
                console.log(response);
            },
            dataType:'text'
            });
    });
});