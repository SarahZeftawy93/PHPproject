$( "#birth" ).datepicker();
$( "#birth" ).datepicker("option", "dateFormat", "yy-mm-dd");
$(function()
{
	
$("#sub").on('click', function(event) {
	// console.log('fdgvbn');
	if($(":input[type=checkbox]").prop('checked')==false)
	{
		event.preventDefault();
		// alert("Not Checked");
		$("#sp1").show();
		$("#sp1").html("you must choose at least one");
	}
	else
	{
		// alert("not checked");
		$("#sp1").html("");
	}
});
$("#checkDiv").on('click',".check", function(event) {
		// alert(" checked ");
		// console.log($(this).val());
		// console.log(event);
		$("#sp1").html("");
	});

// $("checkbox").on('checking', function(event) {
// 	alert("alert");
// 	console.log("checked");
// });
// console.log('adfzgn');
// $("#d1")
// $.ajax({
// 	url: 'valid.php',
// 	type: 'POST',
// 	dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
// 	data: {param1: 'value1'},
// })
// .done(function() {
// 	console.log("success");
// })
// .fail(function() {
// 	console.log("error");
// })
// .always(function() {
// 	console.log("complete");
// });
	
	$("#pass").on('blur', function() {
		// console.log('zfzdfh');
		var pattern=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
		if($(this).val().match(pattern))   
			{   
				$("#cpass").focus();
				$("#sp3").html("");
				// console.log('zbzfbzfb');
			}  
			else  
			{   
				// console.log('SDzdfhzn');
				// alert('8 to 15 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character')
				$("#sp3").html(" 8 to 15 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character");
				$(this).focus();
				// this.select();
			}  
		
	});
	$("#cpass").on('blur', function() {
		if($("#cpass").val().match($("#pass").val()))
		{
			$("#sp4").html("");
		}
		else
		{
			// alert("it's must match password")
			$("#sp4").html("it's must match password");
			$("#cpass").focus();
			// upassword.select();
		}
		
	});
	$("#email").on('blur',function(event) {
		event.preventDefault();
		var pattern=  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if($(this).val().match(pattern))   
			{   
				$.ajax({
					url: 'valid1.php',
					type: 'GET',
					// async: false,
					data: {email: $(this).val()},
				})
				.done(function(event) {
					console.log(event);
					if (event == "invalid"){
						$("#sp2").html("enter another email");
						// $("#email").focus();
					}
					else if(event == "valid") 
					{
						$("#sp2").html("");
						console.log('asdfghbjnkm');
					}
				})
				.fail(function() {
					// console.log("error");
				})
				.always(function() {
					// console.log("complete");
				});
				// $("#sp1").html("");
				// console.log('zbzfbzfb');
			}  
			else  
			{   
				// console.log('SDzdfhzn');
				// alert('8 to 15 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character')
				$("#sp2").html("enter a valid email");
				$(this).focus();
				// this.select();
			}  
		/* Act on the event */
			
	});
	
	// var ajax = new XMLHttpRequest();
	// ajax.onreadystatechange = function() {
	// 	if (ajax.readyState == 4 && ajax.status == 200) {
	// 		var response = ajax.responseText;
	// 	}
	// };
	// ajax.open(method, URL, true);
	// ajax.setRequestHeader("Content-type", "application/json");
	// ajax.send(data);
});