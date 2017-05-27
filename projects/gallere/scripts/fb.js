

	/* Reference to the firebase forge */
	fb_url = "https://gallere-e.firebaseio.com/";
	
	function writeData(type,a,b,c,d,e,f,g,h) {
		if(type == "post") {
			var fb = new Firebase(fb_url+"post/");
			fb.push({
				painting_name : a,
				painting_price : b,
				painting_price_type : c,
				painting_category : d,
				painting_width : e,
				painting_height : f,
				painting_description : g,
				painting_url : h
			}, function(error) {
				if (error) {
	  				console.log("error");
	  			} else {
	  				console.log("success");
	  			}
			});
		}
	}
	
	


