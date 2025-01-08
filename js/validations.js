$(function(){
  $("form[name='reg']").validate({
      rules:{
        fname:{
            required:true,
            fnamechk:true
        },
        lname:{
            required:true,
            lnamechk:true
        },
        year:{
            required:true,
            datechk:true,
            monthchk:true,
            minlength:4,
            maxlength:4,
            yearchk:true  
        },
        phno:{
            required:true,
            phnochk:true
        },
        email:{
            required:true,
            emailchk:true
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
        house:{
            required:true,
            housechk:true
        },
        dist:{
            distchk:true
        },
        pro:{
            prochk:true
        },
        pic:{
            picchk:true
        },
        town:{
          townchk:true
        },
        city:{
          citychk:true
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
        year:{
          required:"<img src='img/welcome/Login-Signup/warn.png' height='20px' width='20px'>"+"Please enter your date of birth",
          datechk:"<img src='img/welcome/Login-Signup/score.png' height='20px' width='20px'>"+"Invalid birth date",
          monthchk:"<img src='img/welcome/Login-Signup/score.png' height='20px' width='20px'>"+"Invalid birth month",
          minlength:"<img src='img/welcome/Login-Signup/score.png' height='20px' width='20px'>"+"Invalid birth year",
          maxlength:"<img src='img/welcome/Login-Signup/score.png' height='20px' width='20px'>"+"Invalid birth year",
          yearchk:"<img src='img/welcome/Login-Signup/score.png' height='20px' width='20px'>"+"Invalid birth year"
        },
        phno:{
            required:"<img src='img/welcome/Login-Signup/warn.png' height='20px' width='20px'>"+"Please enter your phone number",
            phnochk:"<img src='img/welcome/Login-Signup/score.png' height='20px' width='20px'>"+"Invalid phone number"
        },
        email:{
            required:"<img src='img/welcome/Login-Signup/warn.png' height='20px' width='20px'>"+"Please enter your email",
            emailchk:"<img src='img/welcome/Login-Signup/score.png' height='20px' width='20px'>"+"Invalid email"
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
        house:{
          required:"<img src='img/welcome/Login-Signup/warn.png' height='20px' width='20px'>"+"Enter your house number",
          housechk:"<img src='img/welcome/Login-Signup/score.png' height='20px' width='20px'>"+"Invalid house number"
        },
        dist:{
          distchk:"<img src='img/welcome/Login-Signup/warn.png' height='20px' width='20px'>"+"Select your district"
        },
        pro:{
          prochk:"<img src='img/welcome/Login-Signup/warn.png' height='20px' width='20px'>"+"Select your province"
        },
        pic:{
          picchk:"<img src='img/welcome/Login-Signup/score.png' height='20px' width='20px'>"+"Invalid file(.jpeg,.jpg,.svg,.tiff,.gif,.bmp)"
        },
        town:{
          townchk:"<img src='img/welcome/Login-Signup/warn.png' height='20px' width='20px'>"+"Select your town"
        },
        city:{
          citychk:"<img src='img/welcome/Login-Signup/warn.png' height='20px' width='20px'>"+"Select your city"
        },
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
   $.validator.addMethod("datechk",function(){
      var Regex = /^([1-9]{1}|1[0-9]{1}|2[0-9]{1}|30|31)$/;
      if($('#date').val().match(Regex)){
        return true;
      } else {
        return false;
      }
   });
   $.validator.addMethod("monthchk",function(){
    var Regex = /^(0[1-9]{1}|10|11|12)$/;
    if($('#month').val().match(Regex)){
      return true;
    } else {
      return false;
    }
   });
   $.validator.addMethod("yearchk" ,function(){
      var a = new Date();
      var b = a.getFullYear();
      if(($('#year').val() < b)||($('#year').val() == b-60)){
         return true; 
      }else{
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
     var Regex = /^([a-zA-Z0-9#$!%^&*_+=:;"'<,>\.?/~`{}]+)(@)(gmail\.com)$/;
     var Regex1 = /^([a-zA-Z0-9#$!%^&*_+=:;"'<,>\.?/~`{}]+)(@)(yahoo\.com)$/;
     var Regex2 = /^([a-zA-Z0-9#$!%^&*_+=:;"'<,>\.?/~`{}]+)(@)(outlook\.com)$/;
     if(($('#email').val().match(Regex))||($('#email').val().match(Regex1))||($('#email').val().match(Regex2))){
       return true;
     }else{
       return false;
     }
   });
   $.validator.addMethod("prochk" ,function(){
     var Regex = /(Central Province|Eastern Province|North Central Province)/;
     var Regex1 = /(Nothern Province|North Western Province|Sabaragamuwa Province)/;
     var Regex2 = /(Sothern Province|Uva Province|Western Province)/;
     if(($('#pro').val().match(Regex))||($('#pro').val().match(Regex1))||($('#pro').val().match(Regex2))){
       return true;
     }else{
       return false;
     }
   });
   $.validator.addMethod("distchk" ,function(){
      var Regex = /(Ampara|Anuradhapura|Badulla|Batticaloa|Colombo)/;
      var Regex1 = /(Galle|Gampaha|Hambantota|Jaffna|Kalutara)/;
      var Regex2 = /(Kandy|Kegalle|Kilinochchi|Kurunegala|Mannar)/;
      var Regex3 = /( Matale|Matara|Monaragala|Mullativu|Nuwara Eliya)/;
      var Regex4 = /(Polonnaruwa|Puttalam|Ratnapura|Trincomalee|Vavuniya)/;
      if(($('#dist').val().match(Regex))||($('#dist').val().match(Regex1))||($('#dist').val().match(Regex2))||($('#dist').val().match(Regex3))||($('#dist').val().match(Regex4))){
        return true;
      }else{
        return false;
      }
   });
   $.validator.addMethod("picchk" ,function(){
      var Regex = /^([A-Z]:)([a-zA-Z0-9\\()\s_-]+)(\.png|\.jpeg|\.gif|\.bmp|\.tiff|\.svg|\.JPEG|\.PNG|\.GIF|\.BMP|\.TIFF|\.SVG)$/;
      if(($('#pic').val() == "")||($('#pic').val().match(Regex))){
          return true;
      }else{
          return false;
      }  
   });
   $.validator.addMethod("housechk" ,function(){
      var Regex = /^([A-Z0-9]+)$/;
      var Regex1 = /^([A-Z0-9]+)(\/)([A-Z0-9]+)$/;
      var Regex2 = /^([A-Z0-9]+)(\/)([A-Z0-9]+)(\/)([A-Z0-9]+)$/;
      var Regex3 = /^([A-Z0-9]+)(\/)([A-Z0-9]+)(\/)([A-Z0-9]+)(\/)([A-Z0-9]+)$/;
      var Regex4 = /^([A-Z0-9]+)(\/)([A-Z0-9]+)(\/)([A-Z0-9]+)(\/)([A-Z0-9]+)(\/)([A-Z0-9]+)$/;
      if(($('#house').val().match(Regex))||($('#house').val().match(Regex1))||($('#house').val().match(Regex2))||($('#house').val().match(Regex3))||($('#house').val().match(Regex4))){
          return true;
      }else{
          return false;
      }
   });
   $.validator.addMethod("citychk" ,function(){
      var Regex = /(Colombo|Dehiwala-Mount Lavinia|Moratuwa|Sri Jayawardenepura Kotte)/;
      var Regex1 = /(Negombo|Kandy|Kalmunai|Vavuniya)/;
      var Regex2 = /(Galle|Trincomalee|Batticaloa|Jaffna)/;
      var Regex3 = /(Katunayake|Dambulla|Kolonnawa|Anuradhapura|Ratnapura)/;
      if(($('#city').val().match(Regex))||($('#city').val().match(Regex1))||($('#city').val().match(Regex2))||($('#city').val().match(Regex3))){
        return true;
      }else{
        return false;
      }
   });
   $.validator.addMethod("townchk" ,function(){
      var Regex = /(Ambalangoda|Ampara|Avissawella|Badulla|Balangoda|Bandarawela|Beruwala)/;
      var Regex1 = /(Chavakachcheri|Chilaw|Dambulla|Eravur|Gampaha|Gampola|Hambantota)/;
      var Regex2 = /(Haputale|Hatton|Horana|Ja-Ela|Kalutara|Kattankudy|Kegalle)/;
      var Regex3 = /(Kelaniya|Kuliyapitiya|Kurunegala|Mannar|Matale|Matara|Minuwangoda)/;
      var Regex4 = /(Monaragala|Nawalapitiya|Nuwara Eliya|Panadura|Peliyagoda|Point Pedro|Puttalam)/;
      var Regex5 = /(Tangalle|Vaddukoddai|Valvettithurai|Wattala|Wattegama|Weligama)/;
      if(($('#town').val().match(Regex))||($('#town').val().match(Regex1))||($('#town').val().match(Regex2))||($('#town').val().match(Regex3))||($('#town').val().match(Regex4))||($('#town').val().match(Regex5))){
         return true;
      }else{
         return false;
      }
   });
});

function showpass(){
   var x = document.getElementById("pass");
   if(x.type === "password"){
      x.type = "text";
   } else {
      x.type = "password";
   }
}