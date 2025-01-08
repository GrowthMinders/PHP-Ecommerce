$(function(){
  $("form[name='reg1']").validate({
      rules:{
        fname:{
            required:true,
            fnamechk:true
        },
        lname:{
            required:true,
            lnamechk:true
        },
        phno:{
            required:true,
            phnochk:true
        },
        email:{
            required:true,
            emailchk:true
        },
        email1:{
            required:true
        },
        nic:{
            required:true,
            nicvalid:true
        },
        pass:{
            required:true,
            digits:true,
            capital:true,
            special:true,
            simple:true,
            minlength:8,  
            maxlength:48
        },
        cpass:{
            required:true,
            equalTo:"#pass"
        },
        pic:{
            required:true,
            picchk:true
        },
        gen:{
          genchk:true
        }
      },
      messages:{
        fname:{
            required:"<img src='img/welcome/Login-Signup/warn.png' height='20px' width='20px'>"+"Please enter your first name",
            fnamechk:"<img src='img/welcome/Login-Signup/score.png' height='20px' width='20px'>"+"Invalid first name"            
        },
        lname:{
            required:"<img src='img/welcome/Login-Signup/warn.png' height='20px' width='20px'>"+"Please enter your last name",
            lnamechk:"<img src='img/welcome/Login-Signup/score.png' height='20px' width='20px'>"+"Invalid last name"
        },
        phno:{
            required:"<img src='img/welcome/Login-Signup/warn.png' height='20px' width='20px'>"+"Please enter your phone number",
            phnochk:"<img src='img/welcome/Login-Signup/score.png' height='20px' width='20px'>"+"Invalid phone number"
        },
        email:{
            required:"<img src='img/welcome/Login-Signup/warn.png' height='20px' width='20px'>"+"Please enter your email",
            emailchk:"<img src='img/welcome/Login-Signup/score.png' height='20px' width='20px'>"+"Invalid email"
        },
        email1:{
            required:"<img src='img/welcome/Login-Signup/warn.png' height='20px' width='20px'>"+"Please enter your email"
        },
        nic:{
            required:"<img src='img/welcome/Login-Signup/warn.png' height='20px' width='20px'>"+"Please enter your NIC",
            nicvalid:"<img src='img/welcome/Login-Signup/score.png' height='20px' width='20px'>"+"Invalid NIC"
        },
        pass:{
            required:"<img src='img/welcome/Login-Signup/warn.png' height='20px' width='20px'>"+"Please enter a password",
            digits:"<img src='img/welcome/Login-Signup/score.png' height='20px' width='20px'>"+"Use digits",
            capital:"<img src='img/welcome/Login-Signup/score.png' height='20px' width='20px'>"+"Use capital letters",
            special:"<img src='img/welcome/Login-Signup/score.png' height='20px' width='20px'>"+"Use special characters",
            simple:"<img src='img/welcome/Login-Signup/score.png' height='20px' width='20px'>"+"Use simple letters",
            minlength:"<img src='img/welcome/Login-Signup/score.png' height='20px' width='20px'>"+"Password is weak",
            maxlength:"<img src='img/welcome/Login-Signup/score.png' height='20px' width='20px'>"+"Password is too long" 
        },
        cpass:{
          required:"<img src='img/welcome/Login-Signup/warn.png' height='20px' width='20px'>"+"Enter the same password",
          equalTo:"<img src='img/welcome/Login-Signup/score.png' height='20px' width='20px'>"+"Passwords do not match"
        },
        pic:{
          required:"<img src='img/welcome/Login-Signup/warn.png' height='20px' width='20px'>"+"Please Upload a profile pic",
          picchk:"<img src='img/welcome/Login-Signup/score.png' height='20px' width='20px'>"+"Invalid file(.jpeg,.jpg,.svg,.tiff,.gif,.bmp)"
        },
        gen:{
          genchk:"<img src='img/welcome/Login-Signup/warn.png' height='20px' width='20px'>"+"Select your gender"
        }
      }
  });
   $.validator.addMethod("digits",function(){
       var Regex = /[0-9]/;
       if($('#pass').val().match(Regex)){
          return true;
       } else {
         return false;
       }
   });
   $.validator.addMethod("capital",function(){
      var Regex = /[A-Z]/;
      if($('#pass').val().match(Regex)){
         return true;
      } else {
         return false;
      }
   });
   $.validator.addMethod("special",function(){
      var Regex = /[~,`,!,@,#,$,%,^,&,*,(,),_,-,+,=,{,},|,:,;,",',<,>,,,.,?,/]/;
      if($('#pass').val().match(Regex)){
        return true;
      } else {
        return false;
      }
   });
   $.validator.addMethod("simple",function(){
    var Regex = /[a-z]/;
    if($('#pass').val().match(Regex)){
       return true;
    } else {
      return false;
    }
});
   $.validator.addMethod("nicvalid",function(){
       var Regex = /^[0-9]{12}$/;
       var Regex1 = /(^[0-9]{9}V$)/;
       if(($('#nic').val().match(Regex))||($('#nic').val().match(Regex1))){
          return true;
       } else {
          return false;
       }
   });
   $.validator.addMethod("phnochk",function(){
     var Regex = /^(\+94)(70|71|72|73|74|75|76|77|78)([0-9]{7})$/;
     var Regex1 = /^(\+94)(777)([0-9]{6})$/;
     var Regex2 = /^(070|071|072|073|074|075|076|077|078)([0-9]{7})$/;
     var Regex3 = /^(0777)([0-9]{6})$/;
     if(($('#phno').val().match(Regex))||($('#phno').val().match(Regex1))||($('#phno').val().match(Regex2))||($('#phno').val().match(Regex3))){
        return true;
     } else {
        return false;
     }
   });
   $.validator.addMethod("fnamechk",function(){
      var Regex = /^[a-zA-Z]{3,75}$/;  
      if(($('#fname').val().match(Regex))){
         return true;
      } else {
         return false;
      }  
   });
   $.validator.addMethod("lnamechk",function(){
    var Regex = /^[a-zA-Z]{3,75}$/;
    if($('#lname').val().match(Regex)){
      return true;
    } else {
      return false;
    }
   });
   $.validator.addMethod("emailchk" ,function(){
     var Regex = /^([a-zA-Z0-9#$!%^&*_+=:;"'<,>\.?~`{}]+)(@)(lfmart\.com)$/;
     if($('#email').val().match(Regex)){
       return true;
     }else{
       return false;
     }
   });
   $.validator.addMethod("picchk" ,function(){
      var Regex = /^([A-Z]:)([a-zA-Z0-9\\()\s_-]+)(\.png|\.jpeg|\.gif|\.bmp|\.tiff|\.svg|\.JPEG|\.PNG|\.GIF|\.BMP|\.TIFF|\.SVG)$/;
      if($('#pic').val().match(Regex)){
          return true;
      }else{
          return false;
      }  
   });
   $.validator.addMethod("genchk" ,function(){
      var Regex = /(Male|Female|Other)/;
      if($('#gen').val().match(Regex)){
        return true;
      }else{
        return false;
      }
   });
});