/* 5/24 class */
jQuery(document).ready(function(){
	// jQuery("p").click(function(){
	// 	jQuery(this).hide();
	// });

	jQuery("p#the-child").click(
		function(){
			// if(!jQuery(this).hasClass('daragdsan')) {
			// 	jQuery(this).addClass('daragdsan');
			// } else {
			// 	jQuery(this).removeClass('daragdsan');
			// }

			jQuery(this).toggleClass('daragdsan');
			jQuery(this).fadeToggle();
		}
	);
	console.log('query document ready');
});

function pthechildDaragdsan() {
	console.log('p#the-child daragdsan');
}









/* javaSCRIPT ornoo * /
// 5/21
// console.log('bi end log bichig baina');
// console.error('bi end aldaa gargaj baina');

// alert('Sanuulga');

// console.error('alerting daraa aldaa');

// console.log(variable_name);
function submittingForm() {
    console.log('form submitting');
}
// $variable_name = 'variable holder';
var variable_name = 'variable holder';

// console.log(variable_name);

// end yu bolj bainaa gedegiig tailbalraarai!!

function eneIdtaiElementSoli(elementId) {
    var el = document.getElementById(elementId);
    el.innerText = 'xooson';
    console.log(el);
}

//Method = Function

function tooBod(variable) {
    // function happens here
    console.log(variable, 'tooBod function yavj duuslaa');
    return variable;
}

// tooBod('zov zov');
// tooBod(variable_name);

var buxButtons = document.getElementsByClassName('btn');
tooBod(buxButtons);

// document.getElementById('with-child').removeChild('p');


function dangerDarsan() {
    var successButton = document.getElementById('success');
    console.log(successButton);
    // alert('succes soligdloo shuu');
    successButton.innerHTML = 'Hi';
    successButton.setAttribute('value', 'HI hi');
    successButton.setAttribute('type', 'text');
}
*/