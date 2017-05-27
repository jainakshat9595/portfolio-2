/*!
 * Start Bootstrap - Agnecy Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
})

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

// JavaScript for validating contact form
function valcontactform() 
{
	var x1 = document.forms["sentMessage"]["name"].value;
	var b1 = document.forms["sentMessage"]["email"].value;
	var c1 = document.forms["sentMessage"]["phone"].value;
	var d1 = document.forms["sentMessage"]["message"].value;
	if (x1==null || x1=="" || b1==null || b1=="" || c1==null || c1=="" || d1==null || d1=="") 
	{
		alert("All the fields must be filled out.");
		return false;
	}
}
// JavaScript for validating contact form
function valnewuserform() 
{
	var x2 = document.forms["newUser"]["fname"].value;
	var b2 = document.forms["newUser"]["mobile"].value;
	var c2 = document.forms["newUser"]["email"].value;
	var d2 = document.forms["newUser"]["password"].value;
	var e2 = document.forms["newUser"]["conpassword"].value;
	if (x2==null || x2=="")
	{
		document.forms["newUser"]["fname"].focus();
		alert("All the fields must be filled out.");
		return false;
	}
	else if(b2==null || b2=="")
	{
		document.forms["newUser"]["mobile"].focus();
		alert("All the fields must be filled out.");
		return false;
	}
	else if(c2==null || c2=="")
	{
		document.forms["newUser"]["email"].focus();
		alert("All the fields must be filled out.");
		return false;
	}
	else if(d2==null || d2=="")
	{
		document.forms["newUser"]["password"].focus();
		alert("All the fields must be filled out.");
		return false;
	}
	else if(e2=="" || e2==null) 
	{
		document.forms["newUser"]["conpassword"].focus();
		alert("All the fields must be filled out.");
		return false;
	}
	else if(d2 != e2)
	{
		document.forms["newUser"]["conpassword"].focus();
		document.forms["newUser"]["password"].focus();
		alert("Password and Confirm Password do not match.");
		return false;
	}
}

// JavaScript for validating Confirming ID Form
function valconfirmidform() 
{
	var x3 = document.forms["confirmUser"]["Scode"].value;
	if (x3==null || x3=="") 
	{
		alert("All the fields must be filled out.");
		return false;
	}
}
// JavaScript for validating Log In Form
function valloginform() 
{
	var x4 = document.forms["loginform"]["emaillog"].value;
	var y4 = document.forms["loginform"]["passwordlog"].value;
	if (x4==null || x4=="" || y4==null || y4=="") 
	{
		alert("All the fields must be filled out.");
		return false;
	}
}