$(document).ready(function(){
    //console.log("pageready");
    $("#register").click(function(){
        var name = $("#name").val();
        var email = $("#email").val();
        //console.log(email);
        var password= $("#password").val();
        //console.log(password);
        var age= $("#age").val();
        var dob=$("#dob").val();
        var contactno = $("#contactno").val();
        var country = $("#country").val();
        // if (email=="" || password==""||name=="" ||age=="" ||dob=="" ||country=="" || contactno=="")
        //     alert("Fields should be entered correctly");

        $.ajax(
            {
                url:'http://localhost/guvi-task/php/register.php',
                method:'POST',
                data:{
                    register:1,
                    name:name,
                    email:email,
                    password:password,
                    age:age,
                    dob:dob,
                    contactno:contactno,
                    country:country,
                },
            success: function(response){
                console.log(response);
            },
            dataType:'text'
            });
    });
});