function validarFormulario(formulario){
  if(formulario.user_name.value === "" || formulario.user_name.value === null) {
    alert("O campo Nome não pode ficar vazio.");
    formulario.user_name.focus();
    return false;
  }
  if(formulario.cpf_number.value.length != 11) {
    alert("O campo CPF precisa ter 11 caracteres.");
    formulario.cpf_number.focus();
    return false;
  }
  //o campo e-mail precisa ser válido, ou seja, deve : "@" e "."
  if(formulario.email_account.value.indexOf("@") == -1 || formulario.email_account.value.indexOf(".") == -1) {
    alert("O campo E-mail não é válido.");
    formulario.email_account.focus();
    return false;
  }
  if(formulario.data_nasc.value === "" || formulario.data_nasc.value === null) {
    alert("O campo Data de Nascimento não pode ficar vazio.");
    formulario.data_nasc.focus();
    return false;
  }
}