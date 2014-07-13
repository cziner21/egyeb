$(document).ready(function() {
    $('#megrendelo_megrendelo_id').keyup(function(){
        var search = $(this).val().replace(/^\s+$/g, "");
        var baseurl = "http://localhost/erp/";
        var felvitel = baseurl + 'index.php/projektek/searchMegrendelo';
        //alert(felvitel);
        $.ajax({
            url: felvitel,
            data: $("#megrendelo_megrendelo_id").val(),
	        type: "POST",
	        success: function(msg){
	                var aa = msg.length;
                    alert(aa);
	        }
        });
    });
    
   
    
    
    
   /* $("#addArajanlatBtn").click(function(){
        //alert("hmm");
       
                var baseurl = $("input[name=baseUrl]").val();
                var felvitel = baseurl + 'index.php/projektek/insertArajanlat';
                alert($('#arajanlatForm').serialize());
                  //alert(felvitel);             
                $.ajax({
                   url : felvitel,
                    data : $('#arajanlatForm').serialize(),
                    type: "POST",
                    success : function(msg){
                        $('#ajaxReply').removeClass().addClass('sMessage bra margin ok').fadeOut(200).fadeIn(200).find("div.message").html("Sikeres felvitel!");
                    },
                    error : function(){
                        $('#ajaxReply').removeClass().addClass('sMessage bra margin error').fadeOut(200).fadeIn(200).find("div.message").html("Nem sikerült az árajánatot hozzáadni!");                        
                    }               
                })
                return false; }); */
            
        
    
    
    
    
    

});