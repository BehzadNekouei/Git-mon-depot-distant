$(document).ready(function() {
  // declare regex valariables to test with form inputs
  const validName = new RegExp(/^[A-Za-z]+$/);
  const validMail = new RegExp(/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/);
  const validSujet = new RegExp(/^[A-Za-z]+$/);
  const validMessage = new RegExp(/[_a-z0-9-]+(\.[_a-z0-9-]+)*/);
  // declare variables to take form inputs
  const name = $('#name');
  const mail = $('#mail');
  const sujet = $('#sujet');
  const message = $('#message');
  // declare variables to take the elements for error messages
  const nameError =  $('#nameError');
  const mailError =  $('#mailError');
  const sujetError =  $('#sujetError');
  const messageError =  $('#messageError');
  const i = '<i class="fas fa-exclamation-triangle"></i>';
  // declare variables to check if every input is correct
  let nameCheck, mailCheck , sujetCheck , messageCheck = false;
  // function to valadate the form inputs
  function validForm(input, regex , error){
    // take the value of the form input
    let value = input.val();
    // take the grandparent of the input to add class
    let grandParent = input.parent().parent();
    // if the input value is note empty
    if(!value == ''){
      // if the input value is not match
      if (!regex.test(value)){
        // error message for incorect input
        error.html(i+'entrée invalide.');
        grandParent.addClass("w3-panel w3-pale-red w3-padding-16");
        return false;
      }
      else {
        // clear error 
        error.text('');
        grandParent.removeClass("w3-panel w3-pale-red w3-padding-16");
        return true;
      }
    }
    else {
    // error message for empty input
    error.html(i+'Veuillez renseigner ce champ.');
    grandParent.addClass("w3-panel w3-pale-red w3-padding-16");
    return false;
    }
  }
  // check inputs on blur
  name.blur(() => validForm(name, validName, nameError));
  mail.blur(() => validForm(mail, validMail, mailError));
  sujet.blur(() => validForm(sujet, validSujet, sujetError));
  message.blur(() => validForm(message, validMessage, messageError));
  // check inputs on submit
  $('#submit').click(function(){
    nameCheck = validForm(name, validName, nameError);
    mailCheck = validForm(mail, validMail, mailError);
    sujetCheck = validForm(sujet, validSujet, sujetError);
    messageCheck = validForm(message, validMessage, messageError);
    if(nameCheck && mailCheck && sujetCheck && messageCheck){
      return true;
    }
    else{
      return false;
    }
  });
});
