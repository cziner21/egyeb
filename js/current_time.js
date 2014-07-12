$(document).ready(function() {
    
    var foo = jQuery('#clock');
  
    function updateTime() {
        var now = new Date(),
            d = [];
            
        d[0] = now.getFullYear().toString(),
        d[1] = now.getMonth()+1, //months are 0-based
        d[2] = now.getDate(),
        d[3] = now.getHours(),
        d[4] = now.getMinutes();
        d[5] = now.getSeconds();
        
        //doing YY manually as getYear() is deprecated
        //remove the next line if you want YYYY instead of YY
        d[0] = d[0].substring(d[0].length-2); //not using substr(-2) as it doesn't work in IE
        
        //leading zeroes
        for (var i=1; i<=5; i++)
            if (d[i] < 10) d[i] = '0' + d[i];

        foo.html(d[3] + ':' + d[4] + ':' + d[5]);
    }
  
    updateTime();
    setInterval(updateTime, 1000); // 5 * 1000 miliseconds*/
});