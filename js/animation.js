// var btn = document.getElementById('btn');
// 		var loading = 	document.getElementById('loading');
// 		btn.addEventListener('click' , () => {
// 			console.log('clicked');
// 			loading.style.display= 'block';
			
//         });
        
        /*type writer effect
		var txt= "Sign Up Now\!";
		var app = document.getElementById('text');
        
		var typewriter = new Typewriter(app, {
			loop: true
		});

		typewriter.typeString('Hello Freind')
			.pauseFor(2500)
			.deleteAll()
			.typeString('Sign Up').pauseFor(1000)
			.typeString(' Now!')
			.pauseFor(2500).deleteAll()
			.typeString('Join Us').pauseFor(3000)
            .start();
            */
            var app = document.getElementById('text2');
        
            var typewriter = new Typewriter(app, {
                loop: true
            });
            
            typewriter.typeString('Nice to see you back!')
                .pauseFor(2500)
                .deleteAll()
                .typeString('Login to your account')
                .pauseFor(2500).deleteAll()
                .typeString('Happy to see you again').pauseFor(3000)
                .start();
            
            