(function (jQuery, Firebase, Path) {
	"use strict";

	$('.logout-btn').hide();

	var rootRef = new Firebase('https://gallere-e.firebaseio.com/seller/');
	
	function createuserForge(id, userEmail, provider) {
		var t = (Math.floor((Math.random() * 10) + 1));
		var hash = CryptoJS.MD5(t.toString());
        var userRef = rootRef.child(id);
        userRef.set({
        	"hash" : hash.toString(),
        	"email": userEmail,
        	"provider" : provider
        });
        return (hash.toString());
    }

    rootRef.onAuth(function(authData) {
		if (authData) {
			console.log("User " + authData.uid + " is logged in with " + authData.provider);
			login();
		} else {
			console.log("User is logged out");
		}
	});

	function createUser(userObj) {
        rootRef.createUser(userObj, function (err,userData) {
            if (err) {
                switch (err.code) {
    				case "EMAIL_TAKEN":
    					console.log("The new user account cannot be created because the email is already in use.");
    					break;
    				case "INVALID_EMAIL":
    					console.log("The specified email is not a valid email.");
    					break;
    				default:
    					console.log("Error creating user:", error);
    			}
            } else {
            	console.log("Successfully created user account with uid:", userData.uid);
                var hash = createuserForge(userData.uid, userObj.email, "With Password");
                var tmp = userData.uid.split(":")[1];
                var complete_profile_url = "http://www.jainakshat.in/gallere/complete_profile.html?mail="+userObj.email+"&hash="+hash+"&sl="+tmp;
				console.log(complete_profile_url);
                //authWithPassword(userObj);
            }
        });
    }

    function authWithPassword(userObj) {
        rootRef.authWithPassword(userObj, function(err, user) {
            if (err) {
				console.log("Login Failed!", err);
			} else {
				console.log("Authenticated successfully with payload:", user);
				login();
			}
        });
    }

	function element(e) {
		return(document.getElementById(e));
	}
	
	function painting_submit_fun() {
		var a1 = element("painting_name");
		var b1 = element("painting_price");
		var c1 = element("painting_price_radio1");
		var d1 = element("painting_price_radio2");
		var e1 = element("painting_category");
		var f1 = element("painting_width");
		var g1 = element("painting_height");
		var h1 = element("painting_description");
		var i1 = element("fileIploadimg");
		if (c1.checked) {
	  		price_type = c1.value;
		}
		else if(d1.checked) {
			price_type = d1.value;
		}
		writeData("post",a1.value,b1.value,price_type,e1.value,f1.value,g1.value,h1.value,i1.src);
	}
	
	$('#register_form').on('submit', function (e) {
		e.preventDefault();
		var userAndPass = {
			email: $('#register_form').find('#register_email').val(),
			password: $('#register_form').find('#register_pass').val()
		};
		console.log(userAndPass);
		createUser(userAndPass);
	});

	$('#login_form').on('submit', function (e) {
		e.preventDefault();
		var userAndPass = {
			email: $('#login_form').find('#login_email').val(),
			password: $('#login_form').find('#login_password').val()
		};
		console.log(userAndPass);
		authWithPassword(userAndPass);
	});

	$('#registration_complete_form').on('submit', function (e) {
		e.preventDefault();
		var formVal = {
			first_name : $('#registration_complete_form').find('#seller_fname').val(),
			last_name : $('#registration_complete_form').find('#seller_lname').val(),
			phone: $('#registration_complete_form').find('#seller_phone').val(),
			image_url : $('#fileIploadimg_complete_profile').attr('src'),
			profession: $('#registration_complete_form').find('#seller_profession').val(),
			area: $('#registration_complete_form').find('#seller_area').val(),
			info: $('#registration_complete_form').find('.userInfo').html(),
		};
		console.log(formVal);
		;
		var userRef = rootRef.child("simplelogin:"+formVal.info.split("#")[0]);
		userRef.on("value", function(snapshot) {
			console.log(snapshot.val());
			var dbRef = snapshot.val();
			if( dbRef.hash === formVal.info.split("#")[1] ) {
				var userRef2 = rootRef.child("simplelogin:"+formVal.info.split("#")[0]);
				userRef2.update(formVal);
			}
			else {
				console.log('INVALID_LINK');
			}
		}, function (errorObject) {
			console.log("The read failed: " + errorObject.code);
		});
	});

	function login() {
		console.log('User Logged IN');
		$('.login-btn').hide();
		$('.logout-btn').show();
		$('#login-block').removeClass('show');
        $('#login-block').addClass('hide');
	}
	$('#logout-btn-dashboard').click(function logout() {
		rootRef.unauth();
		console.log('User Logged OUT');
		$('.login-btn').show();
		$('.logout-btn').hide();
		$('#logout-block').removeClass('show');
        $('#logout-block').addClass('hide');
	});
	$('#social-login-fb').click(function() {
		console.log('fb clicked');
		rootRef.authWithOAuthPopup("facebook", function(error, authData) {
  			if (error) {
    			console.log("Login Failed!", error);
  			} else {
    			console.log("Authenticated successfully with payload:", authData);
    			login();
  			}
		});
	});

	
}(window.jQuery, window.Firebase, window.Path))