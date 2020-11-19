<script>

$(function(){
    $("#code").autocomplete({
      source :function( request, response ) {
        $.ajax({
           url: "http://188.166.221.219:5000/api/registry/",
           dataType: "json",
           data: {
              q: request.term
           },
           success: function( data ) {
               response($.map(data, function(item) {
                     return {
                         code : '1',
                     };
               }));
           }
        });
       },
       select: function (event, ui) {
             $("#code").val(ui.item.code);
             return false;
       }
   });
   </script>