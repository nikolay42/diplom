$(document).ready(function(){
 	  $('#datepicker1').datepicker({
	  changeMonth:true,
	  	  changeYear:true,
		  	  yearRange:"1950:2000",
			  dateFormat:"yy-mm-dd",
	  }  
	  );
	    $('#datepicker2').datepicker({
	  changeMonth:true,
	  	  changeYear:true,
		  	  yearRange:"1950:2010",
			  dateFormat:"yy-mm-dd",
	  }  
	  );
	    $('#datepicker').datepicker({
	  changeMonth:true,
	  	  changeYear:true,
		  	  yearRange:"1995:2010",
			  dateFormat:"yy-mm-dd",
	  }  
	  );
	   $.validator.addMethod('validName', function (value) {
      var result = true;
      var iChars = "!@#$%^&*()+=-[]\\\';,/{}|\":<>?"+"йцукенгшщзхъфывапролджэ€чсмитьбю…÷” ≈Ќ√Ўў«’Џ‘џ¬јѕ–ќЋƒ∆Ёя„—ћ»“№Ѕё";
      for (var i = 0; i < value.length; i++) {
          if (iChars.indexOf(value.charAt(i)) != -1) {
              return false;
          }
      }
      return result;
  }, '');
  $.validator.addMethod('validNamer', function (value) {
      var result = true;
      var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?012789"+"qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM"+" ";
      for (var i = 0; i < value.length; i++) {
          if (iChars.indexOf(value.charAt(i)) != -1) {
              return false;
          }
      }
      return result;
  }, '');

	   $ ('#signup').validate({
	   rules:{
	   login: {
	   minlength:6,
	   validName: true,
	   },
	   pass: {
	   minlength:6,
	   validName: true,
	   },
	   conpass: {
	   equalTo:'#pass'
	   }
	   },
	   messages:{
	   login:{minlength:"Ќе менее шести символов",
	   validName: "“олько латинский алфавит и цифры",
	   },
	   pass:{minlength:"Ќе менее шести символов",
	   validName: "“олько латинский алфавит и цифры",
	   },
	   conpass:{equalTo:"ѕароли не совпадают"
	   }
	   },
		   });
    $(this).corner();
	 });