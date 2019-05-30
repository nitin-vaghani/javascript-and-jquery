<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function () {
                console.log("myModal=" + $.cookie('myModal'));
                if ($.cookie('myModal') != 'seen') {
                    var date = new Date();
                    date.setTime(date.getTime() + (60 * 1000));
                    console.log("date=" + date);

                    $.cookie('myModal', 'seen', {expires: date, path: '/'}); // Set it to last a year, for example.
                    $("#myModal").delay(2000).modal('show');
                    $('#myModal').click(function (e) {
                        $('#myModal').fadeOut();
                    });
                }
            });
        </script>
    </head>
    <body>

        <div class="container">
            <h2>Modal Example</h2>
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                            <p>Some text in the modal.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>
