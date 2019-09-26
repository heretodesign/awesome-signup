<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="container">    
                <br />
                 <h3 align="center">Enroll for 10+, 20+, 30+ Students</h3>
                 <br />
                <div class="table-responsive">
                    <form method="post" id="dynamic_form">
                             <span id="result"></span>
                             <table class="table table-bordered table-striped" id="user_table">
                           <thead>
                            <tr>
                                <th width="25%">Student Fullname</th>
                                <th width="15%">university</th>
                                <th width="15%">class</th>
                                <th width="15%">year</th>
                                <th width="15%">Action</th>
                            </tr>
                           </thead>
                           <tbody>

                           </tbody>
                           <tfoot>
                            <tr>
                                <td colspan="2" align="right">&nbsp;</td><td>
                                  @csrf
                                  <input type="submit" name="save" id="save" class="btn btn-primary" value="Save" />
                                </td>
                            </tr>
                           </tfoot>
                       </table>
                    </form>
                </div>
            </div>     
        </div>
<script>
$(document).ready(function(){

 var count = 1;

 dynamic_field(count);

 function dynamic_field(number)
 {  
  html = '<tr>';
            html += '<td><input type="text" name="fullname[]" class="form-control" /></td>';
            html += '<td><input type="text" name="university[]" class="form-control" /></td>';
            html += '<td><input type="text" name="class[]" class="form-control" /></td>';
            html += '<td><input type="text" name="year[]" class="form-control" /></td>';
        if(number > 1)
        {
            html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td></tr>';
            $('tbody').append(html);
        }
        else
        {   
            html += '<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td></tr>';
            $('tbody').html(html);
        }
 }

 $(document).on('click', '#add', function(){
  count++;
  dynamic_field(count);
 });

 $(document).on('click', '.remove', function(){
  count--;
  $(this).closest("tr").remove();
 });

 $('#dynamic_form').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url:'{{ route("dynamic-field.insert") }}',
            method:'post',
            data:$(this).serialize(),
            dataType:'json',
            beforeSend:function(){
                // $('#save').attr('disabled','disabled');
            },
            success:function(data)
            {
                if(data.error)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<p>'+data.error[count]+'</p>';
                    }
                    $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                }
                else
                {
                    dynamic_field(1);
                    $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
                }
                $('#save').attr('disabled', false);
                window.location = '/checkouts/create';
            },
            error:function(data){
                $('#result').html('<div class="alert alert-danger">'+data+'</div>');
            }
        })
 });

});
</script>
    </body>
</html>
