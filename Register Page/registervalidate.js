		function registervalidate()
		{
			if(document.registration_form.Name.value=="" || document.registration_form.Name.value.indexOf("@",0)>0 || document.registration_form.Name.value.indexOf(".",0)>0)
			{
				alert("Please enter your name")
				document.registration_form.Name.focus();
				return false;
			}
			
			var expEmail= /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
			if(document.registration_form.Email.value=="" || !document.registration_form.Email.value.match(expEmail))
			{
				alert("Enter valid Email address");
				document.registration_form.Email.focus();
				return false;
			}
			
			if(document.registration_form.Password.value.length<8)
			{
				alert("Please enter valid password");
				document.registration_form.Password.focus();
				return false;
			}
			
			
			
			if(document.registration_form.Confirm_Password.value=="" || document.registration_form.Password.value!=document.registration_form.Confirm_Password.value)
			{
				alert("Password doesn't match");
				document.registration_form.Confirm_Password.focus();
				return false;
			}
			
			if(document.registration_form.Gender[0].checked!= true && document.registration_form.Gender[1].checked!= true)
			{
				alert("Choose atleast one option among Gender");
				document.registration_form.Gender[0].focus();
				document.registration_form.Gender[1].focus();
				return false;
			}
			
			if(document.registration_form.DOB.value=="" || document.registration_form.DOB.value.indexOf("@",0)>0 || document.registration_form.DOB.value.indexOf(".",0)>0)
			{
				alert("Please enter your Date of Birth")
				document.registration_form.DOB.focus();
				return false;
			}
			
			if(document.registration_form.Contact_Details[0].checked!= true && document.registration_form.Contact_Details[1].checked!= true && document.registration_form.Contact_Details[2].checked!= true && document.registration_form.Contact_Details[3].checked!= true)
			{
				alert("Choose atleast one option among Other Accounts");
				document.registration_form.Contact_Details[0].focus();
				document.registration_form.Contact_Details[1].focus();
				document.registration_form.Contact_Details[2].focus();
				document.registration_form.Contact_Details[3].focus();
				return false;
			}
			
			
			if(document.registration_form.Address.value=="")
			{
				alert("Please enter your actual address")
				document.registration_form.Address.focus();
				return false;
			}
		}
		
		function confirmpassword()
		{
			var p1=document.getElementById('pass1');
			var p2=document.getElementById('pass2');
			var bcolor= "#1E90FF";
			var mcolor= "#00FF00";
			var message=document.getElementById('confirm_message');
			
			if(p1.value == p2.value)
			{
				p2.style.backgroundColor=mcolor;
				message.innerHTML="PASSWORD MATCH!";
			}
			else
			{
				p2.style.backgroundColor=bcolor;
				message.innerHTML="PASSWORD DO NOT MATCH!";
			}
		}
				
				
			