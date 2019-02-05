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

    $(".prevoyancesante2").mouseenter(function(){
        $(".dLabelsante2").css("display", "block");
    });
    $(".prevoyancesante2").mouseleave(function(){
        $(".dLabelsante2").css("display", "none");
    });
    $(".dLabelsante2").mouseenter(function(){
        $(".dLabelsante2").css("display", "block");
    });
    $(".dLabelsante2").mouseleave(function(){
        $(".dLabelsante2").css("display", "none");
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
            url: '/Allassur/' + $(this).data('action'),
            data: postdata,
            dataType: 'json',
            success: function(json) {
                 
                if(json.isSuccess) 
                {
                    $('#contact-form').append("<p class='thank-you' style='padding: 10px; margin-top: 20px; margin-bottom: 30px;font-size: 24px; text-align: center; color: white; background-color: #683114;'>Merci d'avoir rempli ce formulaire de demande de devis.<br/> Vous recevrez votre devis par mail dans quelques de jours.</p>");
                    $('#contact-form')[0].reset();
                }
                else
                {
                    $('#firstname + .comments').html(json.firstnameError);
                    $('#firstname3 + .comments').html(json.firstnameError);
                    $('#choice .comments').html(json.choiceError);
                    $('#sexe .comments').html(json.sexeError);
                    $('#name + .comments').html(json.nameError);
                    $('#email + .comments').html(json.emailError);
                    $('#phone + .comments').html(json.phoneError);
                    $('#name3 + .comments').html(json.nameError);
                    $('#email3 + .comments').html(json.emailError);
                    $('#phone3 + .comments').html(json.phoneError);
                    $('#date + .comments').html(json.dateError);
                    $('#postale + .comments').html(json.postaleError);
                    $('#choicecontact .comments').html(json.choicecontactError);
                    $('#siret + .comments').html(json.siretError);
                    $('#activite + .comments').html(json.activiteError);
                    $('#statut .comments').html(json.statutError);
                    $('#affaires + .comments').html(json.affairesError);
                    $('#prime + .comments').html(json.primeError);

                    
                }                
            }
        });
    });

    $('#contact-formfooter').submit(function(e) {
        e.preventDefault();
        $('.comments').empty();
        var postdata = $('#contact-formfooter').serialize();
        
        $.ajax({
            type: 'POST',
            url: '/Allassur/' + $(this).data('action'),
            data: postdata,
            dataType: 'json',
            success: function(json) {
                 
                if(json.isSuccess) 
                {
                    $('#contact-formfooter').append("<p class='thank-you' style='color:red; padding: 10px; margin-top: 30px; font-size: 24px; text-align: center; color: white; background-color: #683114;'>Merci, un conseiller va vous contacter dans quelques jours. </p>");
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
