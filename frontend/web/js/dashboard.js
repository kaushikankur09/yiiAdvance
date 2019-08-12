(function ($) {  
    $(document).ready(function(){
        var test    =    setInterval(function(){ 
                        setDynamic();
                        }, 3000);
    });
    function setDynamic(){
        if($("#testImg1").is(":hidden")){
            $('#testImg').hide();
            $('#testImg1').fadeIn(700);
        }else{
            $('#testImg1').hide();
            $('#testImg').fadeIn(700);
        }
    }
})(window.jQuery);
