/*
* @Author: Thedijje
* @Date:   2017-11-26 12:17:57
* @Last Modified by:   Thedijje
* @Last Modified time: 2017-11-26 12:53:32
*/

function contact_send(){
	$('#form_message').html('');
	var name 	=	 $('#name').val();
	var phone 	=	 $('#phone').val();
	var email 	=	 $('#email').val();
	var hear 	=	 $('#hear').val();
	var msg 	=	 $('#msg').val();

	 	data = 'name='+name+'&phone='+phone+'&email='+email+'&hear='+hear+'&msg='+msg;
        URL = 'script/mail.php';
        $.ajax({
            type:"POST",
            url:URL,
            data:data,
            success:function(html) {
            $('#form_message').show(100);
            $("#form_message").html(html);
            },
            failure:function(html){
            }
        });  
}