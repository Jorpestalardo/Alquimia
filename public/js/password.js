const togglePasswordVisibility = () => {
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.querySelector('.toggle-password ion-icon');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.name = 'eye-off-outline';
    } else {
        passwordInput.type = 'password';
        toggleIcon.name = 'eye-outline';
    }
};