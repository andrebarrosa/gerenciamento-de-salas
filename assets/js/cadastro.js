function validarFormulario(event) {
    event.preventDefault(); 
    
    var login = document.getElementById("login").value;
    var id = document.getElementById("id").value;
    var email = document.getElementById("email").value;
    var telefone = document.getElementById("telefone").value;
    var foto = document.getElementById("foto").value;
    var cpf = document.getElementById("cpf").value;

   
    if (login === "") {
      alert("Por favor, preencha o campo Login.");
      return;
    }

    if (id === "") {
      alert("Por favor, preencha o campo ID.");
      return;
    }

    if (email === "") {
      alert("Por favor, preencha o campo Email.");
      return;
    }

    if (telefone === "") {
      alert("Por favor, preencha o campo Telefone.");
      return;
    }

    if (foto === "") {
      alert("Por favor, anexe uma foto.");
      return;
    }

    if (cpf === "") {
      alert("Por favor, preencha o campo CPF.");
      return;
    }

    alert("Formulário enviado com sucesso!");
    document.getElementById("login").value = "";
    document.getElementById("id").value = "";
    document.getElementById("email").value = "";
    document.getElementById("telefone").value = "";
    document.getElementById("foto").value = "";
    document.getElementById("cpf").value = "";
  }