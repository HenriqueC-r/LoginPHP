const usuario = document.getElementById("usuario");
const senha = document.getElementById("senha");
const botao = document.getElementById("entrar");

// TABELA DE USUÁRIOS

fetch("usuarios.php")
.then(response => response.json())
.then(usuarios => {

    const tabela = document.getElementById("tabela-usuarios");

    if (!tabela) return;

    tabela.innerHTML = "";

    usuarios.forEach(usuario => {
        tabela.innerHTML += `
            <tr>
                <td>${usuario.id}</td>
                <td>${usuario.nome}</td>
                <td>${usuario.senha}</td>
                <td>
                    <button onclick="excluir(${usuario.id})">
                        Excluir
                    </button>
                </td>
            </tr>
        `;
    });

});

function excluir(id){

    if(confirm("Deseja excluir este usuário?")){

        window.location.href = `excluir.php?id=${id}`;

    }

}