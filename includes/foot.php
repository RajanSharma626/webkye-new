<!--  Link jquery Js -->
<script src="assets/js/jquery-1.12.4.min.js"></script>

<!--  Link Bootstrap Js -->
<script src="assets/bootstrap/bootstrap.min.js"></script>

<!--  Link slick slider Js -->
<script src="assets/js/slick.min.js"></script>

<!--  Link aos animation -->
<script src="assets/js/aos.js"></script>

<!--  Link magnific popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>

<!--  Link count up Js -->
<script src="assets/js/countUp.js"></script>

<!--  Link custom Js -->
<script src="assets/js/main.js"></script>

<script>
    $(document).ready(function () {
        $('#contact-form').submit(function (e) {
            e.preventDefault();
            $('#contact-submit').attr("disabled", true).addClass('disabled-btn');
            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var subject = $('#subject').val();
            var message = $('#message').val();


            var formData = {
                name: name,
                email: email,
                phone: phone,
                subject: subject,
                message: message
            };

            console.log(formData);
            // Send form data to PHP script for database insertion
            $.ajax({
                type: 'POST',
                url: 'ajax/process_form.php', // Specify the PHP file for form processing
                data: formData,
                success: function (response) {
                    if (response == 'success') {
                        // Show success message with SweetAlert2
                        Swal.fire({
                            icon: 'success',
                            title: 'Thank you for reaching out to us!🌟',
                            text: "We'll be in touch shortly!.",
                        });
                        $('#name').val('');
                        $('#email').val('');
                        $('#phone').val('');
                        $('#subject').val('');
                        $('#message').val('');
                    } else {
                        // Show error message with SweetAlert2
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'Form submission failed. Please try again.',
                        });
                    }
                    $('#contact-submit').removeAttr("disabled").removeClass('disabled-btn');
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                    // Show error message with SweetAlert2
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'An error occurred while processing your request. Please try again later.',
                    });
                    $('#contact-submit').removeAttr("disabled").removeClass('disabled-btn');
                }
            });
        });


        $('#subscribe-form').submit(function (e) {
            e.preventDefault();
            $('#subscribe-btn').attr("disabled", true).addClass('disabled-btn');

            var email = $('#newletter').val(); // Ensure the correct input field ID is used
            // Validate email format
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (!emailPattern.test(email)) {
                // Show error message with SweetAlert2
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Email',
                    text: 'Please enter a valid email address.',
                });
                $('#subscribe-btn').removeAttr("disabled").removeClass('disabled-btn');
                return; // Exit the function to prevent form submission
            }

            var formData = { email: email };

            $.ajax({
                type: 'POST',
                url: 'ajax/subscribe_form.php',
                data: formData,
                success: function (response) {
                    if (response == 'success') {
                        // Show enhanced success message with SweetAlert2
                        Swal.fire({
                            icon: 'success',
                            title: 'Subscription Successful! 🎉',
                            html: '<h4>Thank you for subscribing to our newsletter!</h4>',
                            confirmButtonText: 'Great!',
                            customClass: {
                                title: 'swal-title',
                                htmlContainer: 'swal-html',
                                confirmButton: 'swal-confirm-button'
                            }
                        });
                        $('#subscribe-form')[0].reset(); // Reset the form
                    } else if (response == 'exists') {
                        // Show email already exists message
                        Swal.fire({
                            icon: 'info',
                            title: 'Already Subscribed',
                            text: 'This email is already subscribed to our newsletter.',
                        });
                    } else {
                        // Show error message with SweetAlert2
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'Form submission failed. Please try again.',
                        });
                    }
                    $('#subscribe-btn').removeAttr("disabled").removeClass('disabled-btn');
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                    // Show error message with SweetAlert2
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'An error occurred while processing your request. Please try again later.',
                    });
                    $('#subscribe-btn').removeAttr("disabled").removeClass('disabled-btn');
                }
            });
        });
    });


</script>