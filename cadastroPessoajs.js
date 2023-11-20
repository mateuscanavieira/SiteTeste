


    function validarCadastro() {
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;
    var confirmarSenha = document.getElementById('confirmarSenha').value;

    if (!nome || !email || !senha || !confirmarSenha) {
    alert('Por favor, preencha todos os campos.');
    return;
}

    if (email.indexOf('@') === -1) {
    alert('E-mail inválido. Certifique-se de incluir o @.');
    return;
}

    if (senha !== confirmarSenha) {
    alert('As senhas não coincidem.');
    return;
}

    // Aqui você pode adicionar código para enviar o formulário ou realizar outras ações.
    alert('Cadastro realizado com sucesso!');
}