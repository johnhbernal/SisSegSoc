$(document).ready(function() {
//	$("#formUsuarioSubmit").click(function() {
	
//	define(["jquery", "jquery.validate"], function( $ ) {
//		$("form").validate();
//		
//		alert ('lllllllllll');
//	});
		
//		alert('kkkkkkkkkkkkkkkkkkkkkkkkk');

		$("#formUsuario").validate({
	
	ignore: ":hidden",
	rules: {		
		"TIPO_DOCUMENTO" : {
			required : true,
		},
		"NUM_IDENTIFICACION" : {
			required : true,
			minlength: 6,
		},
		"PRIMER_NOMBRE" : {
			required : true,
		},
		"SEGUNDO_NOMBRE" : {
			required : true,
		},
		"PRIMER_APELLIDO" : {
			required : true,
		},
		"SEGUNDO_APELLIDO" : {
			required : true,
		},
		"FECHA_DE_NACIMIENTO" : {
			required : true,
		},
		"SEXO" : {
			required : true,
		},
		"GRUPO_SANGUINEO" : {
			required : true,
		},
		"FACTOR_RH" : {
			required : true,
		},
		"ETNIA" : {
			required : true,
		},
		"ESTADO_CIVIL" : {
			required : true,
		},
		"VINCULO_LABORAL" : {
			required : true,
		},
		"ESTADO" : {
			required : true,
		},
		"DISCAPACIDAD" : {
			required : true,
		},
		"CONDICION_DISCAPACIDAD" : {
			required : true,
		},
		"TIPO_DISCAPACIDAD" : {
			required : true,
		},

	},
	messages: {
		
		TIPO_DOCUMENTO : {
			required : "El campo primer nombre, es requerido."
		},
		NUM_IDENTIFICACION : {
			required : " El campo segundo nombre, es requerido.",
			minlength: "Un minimo de "
		},
		PRIMER_NOMBRE : {
			required : " El campo primer apellido, es requerido."
		},
		SEGUNDO_NOMBRE : {
			required : " El campo primer apellido, es requerido."
		},
		PRIMER_APELLIDO : {
			required : " El campo primer apellido, es requerido."
		},
		SEGUNDO_APELLIDO : {
			required : " El campo primer apellido, es requerido."
		},
		FECHA_DE_NACIMIENTO : {
			required : " El campo primer apellido, es requerido."
		},
		SEXO : {
			required : " El campo primer apellido, es requerido."
		},
		GRUPO_SANGUINEO : {
			required : " El campo primer apellido, es requerido."
		},
		FACTOR_RH : {
			required : " El campo primer apellido, es requerido."
		},
		ETNIA : {
			required : " El campo primer apellido, es requerido."
		},
		ESTADO_CIVIL : {
			required : " El campo primer apellido, es requerido."
		},
		VINCULO_LABORAL : {
			required : " El campo primer apellido, es requerido."
		},
		ESTADO : {
			required : " El campo primer apellido, es requerido."
		},
		DISCAPACIDAD : {
			required : " El campo primer apellido, es requerido."
		},
		CONDICION_DISCAPACIDAD : {
			required : " El campo primer apellido, es requerido."
		},
		TIPO_DISCAPACIDAD : {
			required : " El campo primer apellido, es requerido."
		},
//		select : {
//			required : "Seleccione el Tipo de comprobante, es requerido."
//		},
	},
	errorElement: "em",
	errorPlacement: function ( error, element ) {
		// Add the `help-block` class to the error element
		error.addClass( "help-block" );

		// Add `has-feedback` class to the parent div.form-group
		// in order to add icons to inputs
		element.parents( ".col-sm-5" ).addClass( "has-feedback" );

		if ( element.prop( "type" ) === "checkbox" ) {
			error.insertAfter( element.parent( "label" ) );
		} else {
			error.insertAfter( element );
		}

		// Add the span element, if doesn't exists, and apply the icon classes to it.
		if ( !element.next( "span" )[ 0 ] ) {
			$( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
		}
	},
	success: function ( label, element ) {
		// Add the span element, if doesn't exists, and apply the icon classes to it.
		if ( !$( element ).next( "span" )[ 0 ] ) {
			$( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
		}
	},
	highlight: function ( element, errorClass, validClass ) {
		$( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
		$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
	},
	unhighlight: function ( element, errorClass, validClass ) {
		$( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
		$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
	}
});
//	});
	});

// $(document).ready(function() {
// $('#contact_form').bootstrapValidator({
// // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
// feedbackIcons: {
// valid: 'glyphicon glyphicon-ok',
// invalid: 'glyphicon glyphicon-remove',
// validating: 'glyphicon glyphicon-refresh'
// },
// fields: {
// first_name: {
// validators: {
// stringLength: {
// min: 2,
// },
// notEmpty: {
// message: 'Please supply your first name'
// }
// }
// },
// last_name: {
// validators: {
// stringLength: {
// min: 2,
// },
// notEmpty: {
// message: 'Please supply your last name'
// }
// }
// },
// email: {
// validators: {
// notEmpty: {
// message: 'Please supply your email address'
// },
// emailAddress: {
// message: 'Please supply a valid email address'
// }
// }
// },
// phone: {
// validators: {
// notEmpty: {
// message: 'Please supply your phone number'
// },
// phone: {
// country: 'US',
// message: 'Please supply a vaild phone number with area code'
// }
// }
// },
// address: {
// validators: {
// stringLength: {
// min: 8,
// },
// notEmpty: {
// message: 'Please supply your street address'
// }
// }
// },
// city: {
// validators: {
// stringLength: {
// min: 4,
// },
// notEmpty: {
// message: 'Please supply your city'
// }
// }
// },
// state: {
// validators: {
// notEmpty: {
// message: 'Please select your state'
// }
// }
// },
// zip: {
// validators: {
// notEmpty: {
// message: 'Please supply your zip code'
// },
// zipCode: {
// country: 'US',
// message: 'Please supply a vaild zip code'
// }
// }
// },
// comment: {
// validators: {
// stringLength: {
// min: 10,
// max: 200,
// message:'Please enter at least 10 characters and no more than 200'
// },
// notEmpty: {
// message: 'Please supply a description of your project'
// }
// }
// }
// }
// })
// .on('success.form.bv', function(e) {
// $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something
// ...
// $('#contact_form').data('bootstrapValidator').resetForm();
//
// // Prevent form submission
// e.preventDefault();
//
// // Get the form instance
// var $form = $(e.target);
//
// // Get the BootstrapValidator instance
// var bv = $form.data('bootstrapValidator');
//
// // Use Ajax to submit form data
// $.post($form.attr('action'), $form.serialize(), function(result) {
// console.log(result);
// }, 'json');
// });
// });

