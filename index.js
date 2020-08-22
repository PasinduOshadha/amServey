$(document).ready(function () {
    
    //@TODO
    // add border danger classes to fields
    // emoji select
    $('#next1').click(function (e) { 
        e.preventDefault();

        if($('#vehicle_no').val() == '') {
            $('#vehicle_no_err').html('Enter Vehicle No');
            $('#vehicle_no').addClass('border-danger');
            return false;
        }
        else {
            $('#second').show();
            $('#first').hide();

            // progress bar
            $('#progressBar').css('width', '50%');
            $('#progressBar').html('50%');

            $('#vehicle_no_err').html('');
            $('#vehicle_no').removeClass('border-danger');

        }

        
    });

    $('#next2').click(function (e) { 
        e.preventDefault();
        

        //validation
        // empty checking
        if($('#cus_name').val() == '') {
            $('#cus_name_error').html('This field cannot be empty');
            return false;
        } else {
            $('#cus_name_error').html('');
        }

        // phn no validation
        if($('#phn_no').val() == '') {
            $('#cus_phn_no_error').html('This field cannot be empty');
            return false;
        }
        
        else if(isNaN($('#phn_no').val())) {
            $('#cus_phn_no_error').html('Only numbers are allowed');
            return false;
        }

        // check for phn no lenght
       
        else if($('#phn_no').val().length != 10 ) {
            
            $('#cus_phn_no_error').html('Phone No must be 10 digits long');
            return false;
        }
        else {
            $('#cus_phn_no_error').html('');
        }

        // NIC checking
        if($('#nic_no').val() == '') {
            $('#nic_error').html('This field cannot be empty');
            return false;
        }
        else if($('#nic_no').val().length > 12 || $('#nic_no').val().length < 9) {
            $('#nic_error').html('Check NIC No');
            return false;
        }
        else {
            $('#nic_error').html('');
        }

        if($('#make_model').val() == '') {
            $('#make_model_error').html('This field cannot be empty');
            return false;
        }
        else {
            $('#make_model_error').html('');
        }

        if($('#details_check').prop("checked") !== true) {
            $('#check_error').html('Please check here if details are correct');
            return false;
        }
        else {
            $('#check_error').html('');
        }

        if($('#cus_email').val() != '') {
            if(!validateEmail($('#cus_email').val())) {
                $('#cus_email_error').html('Enter a valid email address');
                return false;  
            }
            else {
                $('#check_error').html('');
            }
        
        }

        // email validation using regex
        function validateEmail(email) {
            const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }
        
        $('#third').show();
        $('#second').hide();
        $('#first').hide();

        // progress bar
        $('#progressBar').css('width', '75%');
        $('#progressBar').html('75%');
    });

    $('#next3').click(function (e) { 
        e.preventDefault();
        $('#final').show();
        $('#second').hide();
        $('#third').hide();

        // progress bar
        $('#progressBar').css('width', '100%');
        $('#progressBar').html('100%');
    });

    $('#prev1').click(function (e) { 
        e.preventDefault();
        $('#second').hide();
        $('#third').hide();
        $('#first').show();
        
        // progress bar
        $('#progressBar').css('width', '25%');
        $('#progressBar').html('25%');
    });

    $('#prev2').click(function (e) { 
        e.preventDefault();
        $('#second').show();
        $('#third').hide();
        $('#final').hide();
        $('#first').hide();
        
        // progress bar
        $('#progressBar').css('width', '50%');
        $('#progressBar').html('50%');
    });
});