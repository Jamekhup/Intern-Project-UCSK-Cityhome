const contact = document.querySelector('.contact-form');

contact.addEventListener('submit',sendMail);

function error(id,sms){
	document.getElementById(id).innerHTML = sms;
}

function sendMail(e){
	e.preventDefault();

	let name = document.querySelector('#uname').value;
	let email = document.querySelector('#uemail').value;
	let subject = document.querySelector('#subject').value;
	let sms = document.querySelector('#sms').value;

	let nameErr = emailErr = subjectErr = smsErr = true;

	if (!name) {
		error('nameErr','Name is required');
	}else{
		error('nameErr','');
		nameErr = false;
	}


	if (!email) {
		error('emailErr','Email is required');
	}else{
		error('emailErr','');
		emailErr = false;
	}

	if (!subject) {
		error('subjectErr','Subject is required');
	}else{
		error('subjectErr','');
		subjectErr = false;
	}

	if (!sms) {
		error('smsErr','Message is required');

	}else{
		error('smsErr','');
		smsErr = false;
	}


	//finalize
	if ((nameErr || emailErr || subjectErr || smsErr) == false) {

		$.ajax({
			method:"POST",
			url:"sendMail.php",
			data:{name:name,email:email,subject:subject,sms:sms},

			success:function(sendmailText){
				$('#mailSuccess').html(sendmailText);
				contact.reset();
			}
		});
	}
}