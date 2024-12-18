$(document).ready(function () {
    $('#registrationForm').on('submit', function (e) {
        let valid = true;

        $('input, textarea').each(function () {
            if ($(this).val() === '') {
                alert('All fields are required!');
                valid = false;
                return false;
            }
        });

        if (!valid) {
            e.preventDefault();
        }
    });
});
