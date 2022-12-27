<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});




// composer require yajra/laravel-datatables-buttons


// public\vendor\datatables\buttons.server-side.js

// Nonem said how aer you manager ?
// i'm fine AbdEl-Monem 'manager said'

// right now I think time is passing slowly when mo sabry came wo what s

// JQuery Ajax Form Submit with FormData Example
// http://www.nicesnippets.com/blog/jquery-ajax-form-submit-with-formdata-example#at_pco=smlwn-1.0&at_si=63aadf0110af7bab&at_ab=per-2&at_pos=0&at_tot=1



//<!DOCTYPE html>
//<html>
//    <title>jQuery Ajax Form Submit with FormData Example - NiceSnippets.com</title>
//    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
//<body>
//    <h1>jQuery Ajax Form Submit with FormData Example - NiceSnippets.com</h1>
//    <form method="POST" enctype="multipart/form-data" id="my-form">
//        <input type="text" name="title"/><br/><br/>
//        <input type="file" name="files"/><br/><br/>
//        <input type="submit" value="Submit" id="btnSubmit"/>
//    </form>
//    <span id="output"></span>
//    <script type="text/javascript">
//    	$(document).ready(function () {
//            $("#btnSubmit").click(function (event) {
//                //stop submit the form, we will post it manually.
//                event.preventDefault();
//
//                // Get form
//                var form = $('#my-form')[0];
//
//                // FormData object
//                var data = new FormData(form);
//
//                // If you want to add an extra field for the FormData
//                data.append("CustomField", "This is some extra data, testing");
//
//                // disabled the submit button
//                $("#btnSubmit").prop("disabled", true);
//
//                $.ajax({
//                    type: "POST",
//                    enctype: 'multipart/form-data',
//                    url: "/upload.php",
//                    data: data,
//                    processData: false,
//                    contentType: false,
//                    cache: false,
//                    timeout: 800000,
//                    success: function (data) {
//                        $("#output").text(data);
//                        console.log("SUCCESS : ", data);
//                        $("#btnSubmit").prop("disabled", false);
//                    },
//                    error: function (e) {
//                        $("#output").text(e.responseText);
//                        console.log("ERROR : ", e);
//                        $("#btnSubmit").prop("disabled", false);
//                    }
//                });
//            });
//        });
//    </script>
//</body>
//</html>
