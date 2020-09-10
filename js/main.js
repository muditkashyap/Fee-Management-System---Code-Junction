

$("#login-btn").click(function(){

    var form= new FormData();
    var email = $("#email").val();
    var password = $("#password").val();

    form.append('email',email);
    form.append('password',password);

    $.ajax({
        url:'login_check.php',
        type:'post',
        data: form,
        contentType: false,
        cache: false,
        processData:false,
        success:function (data){
            $("#login_result").html(""+data+"");
        }
    });


});