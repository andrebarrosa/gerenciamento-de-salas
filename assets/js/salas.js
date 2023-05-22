const newClient = document.getElementById("btn-new-client");
const formClient = document.getElementById("form-new-client");
const tableClient = document.getElementById("new-table-client");
const titleClient = document.getElementById("title-client");

newClient.addEventListener('click', () => {
    formClient.style.display = 'block';
    tableClient.style.display = 'none';
    titleClient.style.display = 'none';
});
