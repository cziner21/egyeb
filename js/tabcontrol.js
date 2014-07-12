$(document).ready(function(){                       
             $( "#dialog" ).dialog({ width: 700 });
             var width = $( "#dialog" ).dialog( "option", "width" );
             // setter
             $( "#dialog" ).dialog( "option", "width", 700 );
             $( "#dialog" ).dialog({ autoOpen: true });
             $( "#opener" ).click(function() {
                
                $( "#dialog" ).dialog( "open" );
                
             });
              /*tabcontrol*/
              
                $( "#tabs" ).tabs();
              
              
              
});