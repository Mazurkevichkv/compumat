//Функция скрытия меню
function menustripOff()
{
    $('#block-category').slideUp(1000);
    $('.vertical-menu').show();
    $('#block-content').css("width","1040px");
    $('.bgviolet').css("width","1040px");
    $('#block-right').css("width","0px");
    $('#clock img').css("margin-left","248px");
    $('.bgviolet').css("padding-left","100px");
}
function menustripOn()
{
    $('.vertical-menu').hide();
    $('#block-category').slideDown(1000);
    $('#block-content').css("width","870px");
     $('.bgviolet').css("width","870px");
    $('#block-right').css("width","230px");
     $('#clock img').css("margin-left","160px");
     $('.bgviolet').css("padding-left","20px");
}


/* таймер сесии */
        function updateDeadline() {
			var deadline = new Date(2015, 11, 24); // december
			var beforeDeadline = 'Before the session left ';
			var onDeadline = 'The session started!';
			var fontColor = '#ff0000';

			var diff = deadline - new Date();
			diff /= 1000;

			var minutes = Math.floor(diff / 60);
			var hours = Math.floor(minutes / 60);
			var days = Math.floor(hours / 24);
			var seconds = Math.floor(diff % 60);

			hours = hours % 24;
			minutes = minutes % 60;

			// console.log('Time left', days, hours, minutes, seconds);
			var $deadlineTimer = $('#deadline-timer');
			$deadlineTimer.css('color', fontColor);
			if ( diff > 0 ) {
				$deadlineTimer.html(beforeDeadline + days + ' days ' + hours + ' hours ' + minutes + ' minutes ' + seconds + ' seconds');
			} else {
				$deadlineTimer.html(onDeadline);
			}
		}
		setInterval(updateDeadline, 1000);
        
        
          //Регистрация
              
          $(document).ready(function() {	
      $('#form_reg').validate(
				{	
					// правила для проверки
					rules:{
						"reg_login":{
							required:true,
							minlength:5,
                            maxlength:15,

						},
						"reg_pass":{
							required:true,
							minlength:5,
                            maxlength:15
						},
					
						"reg_email":{
						    required:true,
							email:true
						},

					},

					// выводимые сообщения при нарушении соответствующих правил
					messages:{
						"reg_login":{
							required:"Enter login!",
                            minlength:"From 5 to 15 characters!",
                            maxlength:"From 5 to 15 characters!",
						},
						"reg_pass":{
							required:"Enter password!",
                            minlength:"From 5 to 15 characters!",
                            maxlength:"From 5 to 15 characters!"
						},
					
						"reg_email":{
						    required:"Enter E-mail!",
							email:"Не корректний E-mail!"
						},
					},

			});
    	});
        
		
					//Функция показа
			function show(){
			 $('#block-top-auth').hide();
 $('#window').toggle();
 
						
			}

                   

            
        
       
        
         /* вход */
function hideShowDiv(){
    $('#window').hide();
    $('#block-top-auth').toggle();
    var statuspass = $('#button-enter').attr("class");
    if (statuspass == "top-auth")
    {
      $('#button-enter').attr("class","in-top-auth");
    }
    else{
      $('#button-enter').attr("class","top-auth");   
    }  
      			
}

/* глаз */
function eye(){
 
 var statuspass = $('#button-pass-show-hide').attr("class");
  
    if (statuspass == "pass-hide")
    {
       $('#button-pass-show-hide').attr("class","pass-show");
       
     			            var $input = $("#auth-pass");
			                var change = "text";
			                var rep = $("<input placeholder='Пароль' type='" + change + "' />")
			                    .attr("id", $input.attr("id"))
			                    .attr("name", $input.attr("name"))
			                    .attr('class', $input.attr('class'))
			                    .val($input.val())
			                    .insertBefore($input);
			                $input.remove();
			                $input = rep;
        
    }else
    {
        $('#button-pass-show-hide').attr("class","pass-hide");
        
     			            var $input = $("#auth-pass");
			                var change = "password";
			                var rep = $("<input placeholder='Пароль' type='" + change + "' />")
			                    .attr("id", $input.attr("id"))
			                    .attr("name", $input.attr("name"))
			                    .attr('class', $input.attr('class'))
			                    .val($input.val())
			                    .insertBefore($input);
			                $input.remove();
			                $input = rep;        
       
    }
    


  }; 
 function reg_button()  
  {
      
 var reg_login = $("#reg_login").val();
 var reg_pass = $("#reg_pass").val();
var reg_email = $("#reg_email").val();
 
 
        $.ajax({
  type: "POST",
  url: "../reg/save_user.php",
  data: "reg_login="+reg_login+"&reg_pass="+reg_pass+"&reg_email="+reg_email,
  dataType: "html",
  cache: false,
  success: function(data) {
  if (data == 'yes_reg')
  { 
     $("#message-haveuser").hide();
     $("#message-no-reg").hide();
          $("#wrongdata").  hide(); 
           $("#noinfo").hide();    
    $("#message-yes-reg").slideDown(500);
   
      location.reload();
  }
    if (data == 'no_reg')
  {  $("#message-haveuser").hide();
   $("#noinfo").hide();
         $("#wrongdata").  hide();    
             $("#message-no-reg").slideDown(400);
 
  }
    if (data == 'haveuser')
  { 
         $("#wrongdata").  hide();    
      $("#message-no-reg").hide();
       $("#noinfo").hide();
    $("#message-haveuser").slideDown(400); 

  }
  if (data=='wrongdata')
  {
      $("#message-haveuser").hide();
     $("#message-no-reg").hide();
      $("#noinfo").hide();
     $("#wrongdata").slideDown(400);     
      
  }    
  if (data=='noinfo')
  {
      $("#message-haveuser").hide();
     $("#message-no-reg").hide();
      $("#wrongdata").  hide();  
     $("#noinfo").slideDown(400);     
      
  } 
   
}
});
  };
  
 /* кнопка аутентификации */ 
 function auth_button() {
        
 var auth_login = $("#auth-login").val();
 var auth_pass = $("#auth-pass").val();

 
 if (auth_login == "" || auth_login.length > 30 )
 {
    $("#auth-login").css("borderColor","#FDB6B6");
    send_login = 'no';
 }else {
    
   $("#auth-login").css("borderColor","#DBDBDB");
   send_login = 'yes'; 
      }

 
if (auth_pass == "" || auth_pass.length > 15 )
 {
    $("#auth-pass").css("borderColor","#FDB6B6");
    send_pass = 'no';
 }else { $("#auth-pass").css("borderColor","#DBDBDB");  send_pass = 'yes'; }



 if ($("#rememberme").prop('checked'))
 {
    auth_rememberme = 'yes';

 }else { auth_rememberme = 'no'; }


 if ( send_login == 'yes' && send_pass == 'yes' )
 { 
  $("#button-auth").hide();
  $(".auth-loading").show();
    
    $.ajax({
  type: "POST",
  url: "../includes/auth.php",
  data: "login="+auth_login+"&pass="+auth_pass+"&rememberme="+auth_rememberme,
  dataType: "html",
  cache: false,
  success: function(data) {

  if (data == 'yes_auth')
  {
      location.reload();
      
  }else
  {
      $("#message-auth").slideDown(400);
      $(".auth-loading").hide();
      $("#button-auth").show();
      
  }
  
}
});  
}
}; 

function outuser()
{
     $.ajax({
  type: "POST",      
  url: "../includes/outuser.php",
  dataType: "html",
  cache: false,
  success: function(data) {
 if (data=='logout')
  {
      location.reload();    
  }
  }
});
}

function savemat_mod($id)
{
  $("#save-mat-mod").fadeIn(400);
  setTimeout(function(){$("#save-mat-mod").fadeOut('slow')},2000);
  $.ajax({
  type: "POST",      
  url: "../includes/savemat_mod.php",
  data: "id="+$id,
  dataType: "html",
  cache: false,
  success: function(data) {

  }
});  
}


function save_video($id)
{ 
  $("#save-video").fadeIn(400);
  setTimeout(function(){$("#save-video").fadeOut('slow')},2000);
  $.ajax({
  type: "POST",      
  url: "../includes/save_video.php",
  data: "id="+$id,
  dataType: "html",
  cache: false,
  success: function(data) {

  }
});  
}


function removemat_mod($id)
{
  $("#remove-mat-mod").fadeIn(400);
  setTimeout(function(){$("#remove-mat-mod").fadeOut('slow')},2000);
  $.ajax({
  type: "POST",      
  url: "../includes/removemat_mod.php",
  data: "id="+$id,
  dataType: "html",
  cache: false,
  success: function(data) {
  location.reload();  
  }
});  
}


function remove_video($id)
{ 
  $("#remove-video").fadeIn(400);
  setTimeout(function(){$("#remove-video").fadeOut('slow')},2000);
  $.ajax({
  type: "POST",      
  url: "../includes/remove_video.php",
  data: "id="+$id,
  dataType: "html",
  cache: false,
  success: function(data) {
      location.reload();    
  }
});  
}