$(document).ready(function(){
    $(".prevoyancesante").mouseenter(function(){
        $(".dLabelsante").css("display", "block");
    });
    $(".prevoyancesante").mouseleave(function(){
        $(".dLabelsante").css("display", "none");
    });
    $(".dLabelsante").mouseenter(function(){
        $(".dLabelsante").css("display", "block");
    });
    $(".dLabelsante").mouseleave(function(){
        $(".dLabelsante").css("display", "none");
    });
    $("#dLabel2").mouseenter(function(){
        $(".dropdown-menu2").css("display", "block");
    });
    $("#dLabel2").mouseleave(function(){
        $(".dropdown-menu2").css("display", "none");
    });
    $(".dropdown-menu2").mouseenter(function(){
        $(".dropdown-menu2").css("display", "block");
    });
    $(".dropdown-menu2").mouseleave(function(){
        $(".dropdown-menu2").css("display", "none");
    });

    $("#obsequehref").click(function () {
        $('html, body').animate({ scrollTop: 305 }, '5000000')
    });
    $("#contactnoir").click(function () {
        $('html, body').animate({ scrollTop: 1835 }, '5000000')
    });

    $('#contact-form').submit(function(e) {
        e.preventDefault();
        $('.comments').empty();
        var postdata = $('#contact-form').serialize();
        
        $.ajax({
            type: 'POST',
            url: $(this).data('action'),
            data: postdata,
            dataType: 'json',
            success: function(json) {
                 
                if(json.isSuccess) 
                {
                    $('#contact-form').append("<p class='thank-you' style='padding: 10px; margin-top: 20px; margin-bottom: 30px;font-size: 24px; text-align: center; color: white; background-color: #683114;'>Merci d'avoir rempli ce formulaire de demande de devis.<br/> Vous recevrez votre devis par mail dans peu de jours.</p>");
                    $('#contact-form')[0].reset();
                }
                else
                {
                    $('#firstname + .comments').html(json.firstnameError);
                    $('#choice .comments').html(json.choiceError);
                    $('#sexe .comments').html(json.sexeError);
                    $('#name + .comments').html(json.nameError);
                    $('#email + .comments').html(json.emailError);
                    $('#phone + .comments').html(json.phoneError);
                    $('#date + .comments').html(json.dateError);
                    $('#postale + .comments').html(json.postaleError);
                    $('#siret + .comments').html(json.siretError);
                    $('#statut + .comments').html(json.statutError);
                    
                }                
            }
        });
    });

    $('#contact-formfooter').submit(function(e) {
        e.preventDefault();
        $('.comments').empty();
        var postdata = $('#ccontact-formfooter').serialize();
        
        $.ajax({
            type: 'POST',
            url: $(this).data('action'),
            data: postdata,
            dataType: 'json',
            success: function(json) {
                 
                if(json.isSuccess) 
                {
                    $('#contact-formfooter').append("<p class='thank-you' style='color:red; padding: 10px; margin-top: 30px; font-size: 24px; text-align: center; color: white; background-color: #683114;'>Merci, un conseiller va vous contacter dans peu de temps. </p>");
                    $('#contact-formfooter')[0].reset();
                }
                else
                {
                    $('#firstname2 + .comments').html(json.firstnameError);
                    $('#name2 + .comments').html(json.nameError);
                    $('#email2 + .comments').html(json.emailError);
                    $('#phone2 + .comments').html(json.phoneError);
                    
                }                
            }
        });
    });

});
