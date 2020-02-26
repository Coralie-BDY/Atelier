$(document).ready(function () {	
	
	$(".css_btn").on('click',function(){
		$(".reset_css input").css({"border":"1px solid transparent"});
		$(".reset_css textarea").css({"border":"1px solid transparent"});
	});
	
	
//=============Request More Info==============//	
    $(".load_spiner").hide();
    $("#request_more_info_submit").on('click',function(){
		validationStr = false;
        var textArray = [
        	"rmi_name",            		
        	"rmi_email",
            "rmi_phone",
			"rmi_password"
        ]; 
		for (var n = 0; n < textArray.length; n++) {
        	str = textArray[n];			
            e = document.getElementById(str);                    
            if (e) {
        		$('#'+str).css({"border":"1px solid transparent"});
                if (e.value == "") {  
                    validationStr = true;
        			$('#'+str).css({"border-style":"solid","border-width":"1px 1px 1px 1px","border-color":"red"});
        		}
                if (str == "rmi_email") {                     
                    var varTestExp=/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    var varEmail = e.value; 
                    if (varEmail.search(varTestExp) == -1) {
                        validationStr = true;
                        $('#'+str).css({"border-style":"solid","border-width":"1px 1px 1px 1px","border-color":"red"});                                                
                    }
                }   
        	}
        }
        if (validationStr) {    		
    	   return false;
        }   
		
        $(".load_spiner").show();
        $.ajax({
            type : "POST",
            dataType:'json',
            url : "php/ajax-form.php",
            data : $('#rmi_form').serialize(),
            success : function (data) {
            	$('#rmi_message').fadeIn();
            	$('#rmi_message').html(data.msg).delay(4000).fadeOut('slow');
            	$(".load_spiner").hide();
            	$("#rmi_form")[0].reset();
				grecaptcha.reset(recaptcha1);
            	$('select').find('option').prop("selected", false);
            },
            error: function(msg){
    			alert('Something went wrong!');                
    		}
        });
        return false;
    });
	
	
//=============Schedule Test Drive===============//	
    $(".load_spiner").hide();
    $("#schedule_test_drive_submit").on('click',function(){
		validationStr = false;
        var textArray = [
        	"std_firstname",            		
        	"std_email",
			"std_phone",
			"std_day",
			"std_time"
        ]; 
		for (var n = 0; n < textArray.length; n++) {
        	str = textArray[n];			
            e = document.getElementById(str);                    
            if (e) {
        		$('#'+str).css({"border":"1px solid transparent"});			
                if (e.value == "") {                                              
        			validationStr = true;
                    $('#'+str).css({"border-style":"solid","border-width":"1px 1px 1px 1px","border-color":"red"});
        		}
                
                if (str == "std_email") {                     
                    var varTestExp=/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    var varEmail = e.value; 
                    if (varEmail.search(varTestExp) == -1) {
                        validationStr = true;
                        $('#'+str).css({"border-style":"solid","border-width":"1px 1px 1px 1px","border-color":"red"});                                                
                    }
                }   
        	}
            
        }
        
        if (validationStr) {    		
    	   return false;
        }
        
        $(".load_spiner").show();
        $.ajax({
            type : "POST",
            dataType:'json',
            url : "php/ajax-form.php",
            data : $('#std_form').serialize(),
            success : function (data) {
            	$('#std_message').fadeIn();
            	$('#std_message').html(data.msg).delay(4000).fadeOut('slow');
            	$(".load_spiner").hide();
            	$("#std_form")[0].reset();
				grecaptcha.reset(recaptcha2);
            	$('select').find('option').prop("selected", false);
            },
            error: function(msg){
    			alert('Something went wrong!');                
    		}
        });
        return false;
    });
	
	
//=============Make An Offer================// 
    $(".load_spiner").hide();
    $("#make_an_offer_submit").on('click',function(){
		validationStr = false;
        var textArray = [
        	"mao_name",            		
        	"mao_email",
			"mao_phone",
			"mao_price",
			"mao_comments"
        ]; 
		for (var n = 0; n < textArray.length; n++) {
        	str = textArray[n];			
            e = document.getElementById(str);                    
            if (e) {
        		$('#'+str).css({"border":"1px solid transparent"});			
                if (e.value == "") {
                    validationStr = true;
        			$('#'+str).css({"border-style":"solid","border-width":"1px 1px 1px 1px","border-color":"red"});
        		}
                
                if (str == "mao_email") {                     
                    var varTestExp=/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    var varEmail = e.value; 
                    if (varEmail.search(varTestExp) == -1) {
                        validationStr = true;
                        $('#'+str).css({"border-style":"solid","border-width":"1px 1px 1px 1px","border-color":"red"});                                                
                    }
                }    
        	}
                       
        }
        if (validationStr) {    		
    	   return false;
        }
        $(".load_spiner").show();
        $.ajax({
            type : "POST",
            dataType:'json',
            url : "php/ajax-form.php",
            data : $('#mao_form').serialize(),
            success : function (data) {
            	$('#mao_message').fadeIn();
            	$('#mao_message').html(data.msg).delay(4000).fadeOut('slow');
            	$(".load_spiner").hide();
            	$("#mao_form")[0].reset();
				grecaptcha.reset(recaptcha3);
            	$('select').find('option').prop("selected", false);
            },
            error: function(msg){
    			alert('Something went wrong!');                
    		}
        });
        return false;
    }); 
	
	
//===============Email To Friend================//
	$(".load_spiner").hide();
    $(document).on('click','#email_to_friend_submit',function(){
        validationStr = false;
		var textArray = [
        	"etf_name",            		
        	"etf_email",
			"etf_fmail",
			"etf_fmessage"
        ]; 
		for (var n = 0; n < textArray.length; n++) {
        	str = textArray[n];			
            e = document.getElementById(str);                    
            if (e) {
        		$('#'+str).css({"border":"1px solid transparent"});			
                if (e.value == "") {
                    validationStr = true;
        			$('#'+str).css({"border-style":"solid","border-width":"1px 1px 1px 1px","border-color":"red"});
        		} 
                if (str == "etf_email") {                     
                    var varTestExp=/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    var varEmail = e.value; 
                    if (varEmail.search(varTestExp) == -1) {
                        validationStr = true;
                        $('#'+str).css({"border-style":"solid","border-width":"1px 1px 1px 1px","border-color":"red"});                                                
                    }
                } 
                  
        	}
        }
        
        if (validationStr) {    		
    	   return false;
        }
		$(".load_spiner").show();
        $.ajax({
            type : "POST",
            dataType:'json',
            url : "php/ajax-form.php",
            data : $('#etf_form').serialize(),
            success : function (data) {
            	$('#etf_message').fadeIn();
            	$('#etf_message').html(data.msg).delay(4000).fadeOut('slow');
            	$(".load_spiner").hide();
            	$("#etf_form")[0].reset();
				grecaptcha.reset(recaptcha4);
            	$('select').find('option').prop("selected", false);
            },
            error: function(msg){
    			alert('Something went wrong!');                
    		}
        });
        return false;
    });
	
	
//================Trade In Appraisal===================//	
    $(".load_spiner").hide();
/*    $(document).on('click','#trade_in_appraisal_submit',function(){
        validationStr = false;
		var textArray = [
        	"tia_firstname",            		
        	"tia_lastname",
			"tia_workphone",
			"tia_phone",
			"tia_email",
			"tia_comments",
			"tia_year",
			"tia_make",
			"tia_model",
			"tia_colour",
			"tia_vin",
			"tia_kilometers",
			"tia_engine"
        ]; 
		for (var n = 0; n < textArray.length; n++) {
        	str = textArray[n];			
            e = document.getElementById(str);                    
            if (e) {
        		$('#'+str).css({"border":"1px solid transparent"});			
                if (e.value == "") {
                    validationStr = true;
        			$('#'+str).css({"border-style":"solid","border-width":"1px 1px 1px 1px","border-color":"red"});
        		}
                if (str == "tia_email") {                     
                    var varTestExp=/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    var varEmail = e.value; 
                    if (varEmail.search(varTestExp) == -1) {
                        validationStr = true;
                        $('#'+str).css({"border-style":"solid","border-width":"1px 1px 1px 1px","border-color":"red"});                                                
                    }
                }                
        	}
        }
        if (validationStr) {    		
    	   return false;
        }
		var g = $("#g-recaptcha-response").val();
		$(".load_spiner").show();
        $.ajax({
            type : "POST",
            dataType:'json',
            url : "php/ajax-form.php",
            data : $('#tia_form').serialize(),
            success : function (data) {
            	$('#tia_message').fadeIn();
            	$('#tia_message').html(data.msg).delay(4000).fadeOut('slow');
            	$(".load_spiner").hide();
            	//$("#tia_form")[0].reset();
				grecaptcha.reset(recaptcha5);
            	$('select').find('option').prop("selected", false);
            },
            error: function(msg){
    			alert('Something went wrong!');                
    		}
        });
        return false;
    });*/
});