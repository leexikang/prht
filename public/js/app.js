

$(document).ready(function(){

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
});



