

$(document).ready(function(){


    // Comfirm Delete moadal box

    $(".delete-button").on('click', function(e){

        $("#confirm-text").text("");

        var link = $(this).data("link");
        var confirmText = $(this).data("confirm");


        $("#confirm-delete").attr("action", link);
        $("#confirm-text").text(confirmText);

    });

    $("form #state").on('change', function(e){
        $("form #city").attr("disabled", false);
        $("form #search").attr("disabled", false);
    });










//    $.ajaxPrefilter(function(options, originalOptions, xhr) {
//      var token = $('meta[name="csrf_token"]').attr('content');
//
//      if (token) {
//            return xhr.setRequestHeader('X-XSRF-TOKEN', token);
//      }
//        console.log(token);
//});

    //Mutiple Photos Upload
    $("#photos").on('change', function(evt){
        var files =  evt.target.files;

        for(var i = 0; i < files.length; i++){
            var file = files[i];

           var reader = new FileReader();
            reader.onload = function (e) {
                var img = $("<img>");
                img.attr("src", e.target.result);
                $("#thumbnail-list").append(img);
            };
            reader.readAsDataURL(file);
        }
    });



    //
    //$("#updateImage").on('submit', function(evt){
    //
    //    evt.preventDefault();
    //    var postData = $(this).serializeArray();
    //    var formURL = $(this).attr("action");
    //
    //    $.ajax({
    //        url: formURL,
    //        type: "POST",
    //       data: postData,
    //        cache: false,
    //        processData: false,
    //        success: function(data){
    //            console.log(data);
    //            console.log(formdata);
    //        },
    //        error:  function(){
    //
    //            console.log(postData);
    //        }
    //    });
    //
    //
    //
    //});

});



