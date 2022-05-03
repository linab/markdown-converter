;(function($){
    'use strict';

    function convertMarkdown(){
        $("#markdown_form").on("submit", function(e){
            e.preventDefault();

            var textbox = $('#markdown').val(),
                form_data = {
                markdown: $('#markdown').val()
            },
            postURL = "./results.php";

            //If textbox is empty
            if(textbox == ""){
                var message = "Please enter text to convert into html.";
                $('#form_validation').css({color: 'red'});
                $('#form_validation').html(message);
                //Delay error message disappearing
                setTimeout(function() {
                    $("#form_validation").fadeOut().text("");
                }, 4000);
                return;
            }

            $.ajax({
                type:'POST',
                url: postURL,
                data:form_data,
                dataType: 'json',
                success:function(data, status, settings){
                    console.log(data);
                    if(settings.status === 200){
                        //Response success 200
                        $('#html_content').html(data);
                    } else {
                        //API Failure to return 200
                        $('#form_validation').text(data.message);
                    }
                },
                error: function(data){
                    console.log(data.message);
                }
            });
        });
    }    

    $(function(){
        convertMarkdown();
    });
}(jQuery));