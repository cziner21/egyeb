$(document).ready(function() {
    $("#addDolgozoBtn").click(function(){
        var username = $("input[name=username]").val();
        var password = $("input[name=password]").val();
        var password2 = $("input[name=password2]").val();
        //$('#osztaly :selected').text();
        if(password != password2 || password.length < 6){
            var error = "A jelszavak nem egyeznek vagy pedig túl rövidek! Minimum 6 karakterből kell állnia a jelszónak!";
            $('#ajaxReply').removeClass().addClass('sMessage bra margin error').fadeOut(200).fadeIn(200).find("div.message").html(error);           
            return false;
        }
        else{        
            if(check(username)){
                var error = "A felhasználónév nem tartalmazhat ékezeteket, szóközt és egyéb speciális karaktereket, illetve legalább 3 karakternek kell lennie!";
                $('#ajaxReply').removeClass().addClass('sMessage bra margin error').fadeOut(200).fadeIn(200).find("div.message").html(error);                
                return false;        
            }
            else{
                var baseurl = $("input[name=baseUrl]").val();
                var felvitel = baseurl + 'index.php/auth/addDolgozo';
                               
                $.ajax({
                   url : felvitel,
                    data : $('#userAddForm').serialize(),
                    type: "POST",
                    success : function(msg){
                        $('#ajaxReply').removeClass().addClass('sMessage bra margin ok').fadeOut(200).fadeIn(200).find("div.message").html("Sikeres felvitel!");
                    },
                    error : function(msg){
                        alert(msg);
                        //$('#ajaxReply').removeClass().addClass('sMessage bra margin error').fadeOut(200).fadeIn(200).find("div.message").html(msg);                        
                    }               
                })
                return false;  
            }
        }
    });
    
    
    /*username mező ellenörző*/
    var specialChars = " áéíóöőúüűÁÉÍÓÖŐÚÜŰ<>@!#$%^&*()+[]{}?:;|'\"\\,./~`-=";
    var check = function(string){
        if(string.length < 3){
            return true;
        }
        else{
         for(i = 0; i < specialChars.length;i++){
           if(string.indexOf(specialChars[i]) > -1){
               return true
            }
         }
         return false;
        }
    }
    
    

});