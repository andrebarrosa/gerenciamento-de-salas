// function atualizarTabela(lista) {
//     document.getElementById("tbody").innerHTML = '';

//     lista.map((cada) => {
//         document.getElementById('tbody').innerHTML +=
//         `
//             <tr>
//                 <td>${document.getElementById('input_nome').value}</td>
//                 <td>${document.getElementById('input_capacidade').value}</td>
//                 <td>${document.getElementById('input_recursos').value}</td>
//                 <td>${document.getElementById('input_classificacao').value}</td>
//             </tr>
//         `;
//     });
// }

function atualizarTabela() {

    var nome = document.getElementById('input_nome').value;
    var capacidade = document.getElementById('input_capacidade').value;
    var recursos = document.getElementById('input_recursos').value;
    var classificacao = document.getElementById('input_classificacao').value;
    var foto = document.getElementById('input_foto').value;
  
    var tableBody = document.getElementById("tbody");
  
    var newRow = document.createElement('tr');
    newRow.innerHTML = `
      <td>${nome}</td>
      <td>${capacidade}</td>
      <td><button onclick="excluir(this)" class="btn btn-sm btn-light">Vizualizar</button></td>
      <td>${classificacao}</td>
      <td>${foto ? `<img src="${URL.createObjectURL(foto)}" alt="Uploaded Image" width="50">` : ''}</td>
      <td>
      <button onclick="editar(this)" class="btn btn-sm btn-primary">Edit</button>
      <button onclick="excluir(this)" class="btn btn-sm btn-danger">Delete</button>
      
      </td>
    `;
    
    tableBody.appendChild(newRow);

    form_cadastro.reset();

    fechar_cadastro2.dispatchEvent(new Event('click'));
  }

  function excluir(button) {
    var row = button.parentNode.parentNode;
    row.parentNode.removeChild(row);
  }

  document.getElementById('input_foto').addEventListener('change', function() {
    var reader = new FileReader();
  
    reader.onload = function(e) {
      var preview = document.getElementById('imagePreview');
      var image = new Image();
      image.src = e.target.result;
  
      preview.innerHTML = '';
      preview.appendChild(image);
      image.style.maxWidth = '100%';
      image.style.maxHeight = '200px';
    };
  
    reader.readAsDataURL(this.files[0]);
  });