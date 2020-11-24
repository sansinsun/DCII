$(document).ready(function(){
       $(".form_update").click(function(){ 
             
            var ccode = $(this).attr("data-code");   
            var cbuilding = $(this).attr("data-building");
            var cfloor = $(this).attr("data-floor");
            var croom = $(this).attr("data-room");
            var ccubicle = $(this).attr("data-cubicle");
            var ctype = $(this).attr("data-type");
            var celement = $(this).attr("data-component");
            var cdate = $(this).attr("data-date");
            var cnote = $(this).attr("data-notes");

            $("#cc").val(ccode);
            $("#cb").val(cbuilding);
            $('#cf option:contains(' + cfloor + ')').prop({selected: true});
            $('#cr option:contains(' + croom + ')').prop({selected: true});
            $('#ccb option:contains(' + ccubicle + ')').prop({selected: true});
            $('#ct option:contains(' + ctype + ')').prop({selected: true});
            $('#ce option:contains(' + celement + ')').prop({selected: true});
            $("#cd").val(cdate);
            $("#cn").val(cnote);


}       }};
   });