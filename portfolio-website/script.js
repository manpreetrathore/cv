let theme = localStorage.getItem('theme')

if(theme == null){
	setTheme('light')
}else{
	setTheme(theme)
}

let themeDots = document.getElementsByClassName('theme-dot')


for (var i=0; themeDots.length > i; i++){
	themeDots[i].addEventListener('click', function(){
		let mode = this.dataset.mode
		console.log('Option clicked:', mode)
		setTheme(mode)
	})
}

function setTheme(mode){
	if(mode == 'light'){
		document.getElementById('theme-style').href = 'default.css'
	}

	if(mode == 'blue'){
		document.getElementById('theme-style').href = 'blue.css'
	}

	localStorage.setItem('theme', mode)
}
document.getElementById('contact-form').addEventListener('submit',sendMail);
function sendMail(e){
	e.preventDefault();
    var name = document.getElementById('name').value;
    var subject = document.getElementById('subject').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;
    var pharams = 'name=' + name + '&subject=' + subject + '&email=' + email + '&message=' + message ;
	var xhr = new XMLHttpRequest();
	xhr.open('POST','contact.php',true);
              xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
              xhr.onload = function (){
                console.log(this.responseText);
              }
              xhr.send(pharams);
}