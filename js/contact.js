$(function(){

  //set global variables and cache DOM elements for reuse later
  var form = $('#contactForm'),
  formElements = form.find('input[type!="submit"],textarea'),
  formSubmitButton = form.find('button[type="submit"]'),
  errorNotice = $('#errors'),
  successNotice = $('#success'),
  errorMessages = {
    required: ' is a required field *',
    email: 'You have not entered a valid email address'
  }
  
  //to ensure compatibility with HTML5 forms, we have to validate the form on submit button click event rather than form submit event. 
  //An invalid html5 form element will not trigger a form submit.
  formSubmitButton.on('click',function(){
    var formok = true,
    errors = [];

    $('.error-message').hide();


    formElements.each(function(){
      // Remove error styles from form
      $(this).removeClass('error');
      
      var name = this.name,
          nameUC = name.ucfirst(),
          value = this.value,
          placeholderText = this.getAttribute('placeholder'),
          type = this.getAttribute('type'), //get type old school way
          isRequired = this.getAttribute('required');
              
          //if HTML5 formfields are supported            
          if( (this.validity) && !this.validity.valid ){
            formok = false;

              //if there is a value missing
              if(this.validity.valueMissing){
                $(this).addClass('error');
                $(this).after('<p class="error-message">' + nameUC + errorMessages.required + '</p>');
                  // errors.push(nameUC + errorMessages.required);    
                }

              //if this is an email input and it is not valid
              else if(this.validity.typeMismatch && type == 'email'){
                $(this).addClass('error');
                $(this).after('<p class="error-message">' + errorMessages.email + '</p>');
                  // errors.push(errorMessages.email);
                }

              this.focus(); //safari does not focus element an invalid element
              return false;
            }

          //if this is a required element
          if(isRequired){    
              //if HTML5 input required attribute is not supported
              if(!Modernizr.input.required){
                if(value == placeholderText){
                  this.focus();
                  formok = false;
                  $(this).addClass('error');
                  $(this).after('<p class="error-message">' + nameUC + errorMessages.required + '</p>');
                      // errors.push(nameUC + errorMessages.required);
                      return false;
                    }
                  }
                }

          //if HTML5 input email input is not supported
          if(type == 'email'){     
            if(!Modernizr.inputtypes.email){ 
              var emailRegEx = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
              if( !emailRegEx.test(value) ){    
                this.focus();
                formok = false;
                $(this).addClass('error');
                $(this).after('<p class="error-message">' + errorMessages.email + '</p>');
                      // errors.push(errorMessages.email + nameUC);
                      $('#email').addClass('error');
                      return false;
                    }
                  }
                }

              });

      //if form is not valid
      if(!formok){

          //show error message 
          showNotice('error',errors);
          
        }
      //if form is valid
      else {
        $.ajax({
          url: form.attr('action'),
          type: form.attr('method'),
          data: form.serialize(),
          success: function(){
            showNotice('success');
            form.get(0).reset();
          }
        });
      }
      
      return false; //this stops submission off the form and also stops browsers showing default error messages
      
    });

  //other misc functions
  function showNotice(type,data) {
    $('body').animate({
      scrollTop: $('.error').offset().top - 80
    }, 400);
    if(type == 'error'){
      successNotice.hide();
    }
    else {
      successNotice.show(); 
      form.hide();
      setTimeout(function () {
        successNotice.hide(); 
        form.fadeIn(300);
      }, 2000);   
    }
  }
  
  String.prototype.ucfirst = function() {
    return this.charAt(0).toUpperCase() + this.slice(1);
  }
  
});