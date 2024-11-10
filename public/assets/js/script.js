const form = document.getElementById('loginForm');
const username = document.getElementById('username');
const password = document.getElementById('password');
const errorMessage = document.getElementById('error-message');


form.addEventListener('submit', function (event) {
    event.preventDefault(); /

    if (username.value.trim() === "") {
        errorMessage.textContent = "O campo de email não pode estar vazio.";
        errorMessage.style.display = 'block';

        return;
    }

    if (password.value.trim() === "") {
        errorMessage.textContent = "O campo de senha não pode estar vazio.";
        errorMessage.style.display = 'block';

        return;
    }

    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

    if (!emailPattern.test(username.value)) {
        errorMessage.textContent = "Por favor, insira um email válido.";
        errorMessage.style.display = 'block';

        return;
    }

    form.submit();
});
