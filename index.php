<!DOCTYPE html>
<html>
<head>
    <title>Riot JS</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script type="riot/tag" src="./user-app.tag.html"></script>
</head>
<body>

    <user class="container">
        <user-app  />
    </user>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#mytable #checkall").click(function () {
                if ($("#mytable #checkall").is(':checked')) 
                {
                    $("#mytable input[type=checkbox]").each(function () {
                        $(this).prop("checked", true);
                    });
                } 
                else 
                {
                    $("#mytable input[type=checkbox]").each(function () {
                        $(this).prop("checked", false);
                    });
                }
            });
        
            $("[data-toggle=tooltip]").tooltip();

            $('#edit').on('hidden.bs.modal', function(e) {
                $('#edit').modal( 'hide' ).data( 'bs.modal', null );
                $(this).removeData('bs.modal');
            });
        });

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/riot/3.6.1/riot+compiler.js"></script>
    <script>
        var url     = 'http://localhost:8000/api'
        riot.tag('user', '<yield/>');
        riot.mount('user');
        this.title = "Bootstrap Snipp for Datatable";


    </script>
</body>
</html>