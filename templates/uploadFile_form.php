<!DOCTYPE html>
<html>

<script>
        $(document).ready(function() {
        //elements
        var progressbox     = $('#progressbox');
        var progressbar     = $('#progressbar');
        var statustxt       = $('#statustxt');
        var submitbutton    = $("#SubmitButton");
        var myform          = $("#UploadForm");
        var output          = $("#output");
        var completed       = '0%';
 
                $(myform).ajaxForm({
                    beforeSend: function() { //brfore sending form
                        submitbutton.attr('disabled', ''); // disable upload button
                        statustxt.empty();
                        progressbox.slideDown(); //show progressbar
                        progressbar.width(completed); //initial value 0% of progressbar
                        statustxt.html(completed); //set status text
                        statustxt.css('color','#000'); //initial color of status text
                    },
                    uploadProgress: function(event, position, total, percentComplete) { //on progress
                        progressbar.width(percentComplete + '%') //update progressbar percent complete
                        statustxt.html(percentComplete + '%'); //update status text
                        if(percentComplete>50)
                            {
                                statustxt.css('color','#fff'); //change status text to white after 50%
                            }
                        },
                    complete: function(response) { // on complete
                        output.html(response.responseText); //update element with received data
                        myform.resetForm();  // reset form
                        submitbutton.removeAttr('disabled'); //enable submit button
                        progressbox.slideUp(); // hide progressbar
                    }
            });
        });
 
</script>
<body>
<h2>Here is the latest picture</h2>
<center><img src="<?php echo $target ?>"  width="250px"><br>

<b><?= $title ?></center>
<form action="uploadFile.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input id="up" type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" id="SubmitButton" value="Upload Image" name="submit">
     <div id="progressbox"><div id="progressbar"></div ><div id="statustxt">0%</div ></div>
    <div id="output"></div>
</form>

      <a href ="delete.php"><span>
        <input id = "dltp" type="button" value = "Go To Viewer & Delete Page"></span></a></p>
       
             <a href ="https://pixlr.com/editor/" target="_blank"><span>
        <input  type="button" value = "Go To Pixlr EDITOR"></span></a></p>


</body>




</html>