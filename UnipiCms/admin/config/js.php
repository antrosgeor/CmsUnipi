<!-- jQuery -->
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>

<!-- jQuery UI -->
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<!-- JqueryUI mobile sortable -->
<script src="js/jquery.ui.touch-punch.min.js"></script>

<!-- Bootstrap switch js-->
<script src="js/bootstrap-switch.js"></script>

<!-- TinyMCE -->
<script src="js/tinymce/tinymce.min.js"></script>

<!-- Dropzone -->
<script src="js/dropzone.js"></script>



<script>

// When DOM is Ready
$( document ).ready(function() {

    // BootstrapSwitch Test
    $("[name='my-checkbox']").bootstrapSwitch();

    //Ajax Delete Buttons-----------------------------------------------------------
    
    // Page Delete Button
    $(".btn-delete").on("click", function() {

        var selected = $(this).attr("id");
        var pageid = selected.split("del_").join("");
        var confirmed = confirm("Are you sure you want to delete this Page?")
        console.log(pageid);

        if (confirmed == true) {
            //Ajax call
            $.get("ajax/pages.php?id="+pageid)
            //Remove element from Dom
            $("#page_"+pageid).remove();
        };
    
    })

    // User Delete Button
    $(".btn-delete-user").on("click", function() {

        var selected = $(this).attr("id");
        var userid = selected.split("del_").join("");
        var confirmed = confirm("Are you sure you want to delete this User?")
        console.log(userid);

        if (confirmed == true) {
            //Ajax call
            $.get("ajax/users.php?id="+userid)
            //Remove element from Dom
            $("#user_"+userid).fadeOut(300, function() {
                 $(this).remove(); 
            });
        };
    
    })

    // News Delete Button
    $(".btn-delete-post").on("click", function() {

        var selected = $(this).attr("id");
        var postid = selected.split("del_").join("");
        var confirmed = confirm("Are you sure you want to delete this Post?")
        console.log(postid);

        if (confirmed == true) {
            //Ajax call
            $.get("ajax/news.php?id="+postid)
            //Remove element from Dom
            $("#news_"+postid).fadeOut(300, function() {
                 $(this).remove(); 
            });
        };
    
    })

    //End Delete Buttons--------------------------------------------------------

    $("#sort-nav").sortable({
            cursor: "move",
            update: function() {
                var order = $(this).sortable("serialize");
                $.get("ajax/list-sort.php", order);
            }
        });

    $(".nav-form").submit(function(event){

        var navData = $(this).serializeArray();
        var navLabel = $('input[name=label]').val();
        var navID = $('input[name=id]').val();

        $.ajax({
                
            url: "ajax/navigation.php",
            type: "POST",
            data: navData
         
        }).done(function(){

            $("#label_"+navID).html(navLabel);  

        });

        event.preventDefault();
    });


});//End document Ready


// debug console tinymce
tinymce.init({
    selector: ".editor",
    theme: "modern",	    
    plugins: [
         "code advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
   content_css: "css/content.css",
   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons", 
   style_formats: [
        {title: 'Bold text', inline: 'b'},
        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
        {title: 'Example 1', inline: 'span', classes: 'example1'},
        {title: 'Example 2', inline: 'span', classes: 'example2'},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ]
 }); 

// debug console
$(document).ready(function() {
        $('#console-debug').hide();
        $('#btn-debug').click(function(){
            $('#console-debug').toggle();
        });
    });

</script>