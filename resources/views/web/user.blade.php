<!DOCTYPE html>
<html>
<head>
    <title>Laravel Update User Status Using Toggle Button Example - ItSolutionStuff.com</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Laravel Update User Status Using Toggle Button Example - ItSolutionStuff.com</h1>
        <table class="table table-bordered">
            <thead>
               <tr>
                  <th>No.</th>
                  <th>No pelatlihan</th>
                  <th>Name</th>
                  <th>Jenis Kelamin</th>
                  <th>Email</th>
                  <th>No Telepon</th>
                  <th>Alamat</th>
                  <th>Status</th>
               </tr> 
            </thead>
            <tbody>
                <?php $i=1; ?>
               @foreach($user as $ser)
                  <tr>
                    <td><?= $i;?> </td>
                     <td>{{ $ser->std_id }}</td>
                     <td>{{ $ser->nama }}</td>
                     <td>{{ $ser->jenis_k }}</td>
                     <td>{{ $ser->email }}</td>
                     <td>{{ $ser->tlp }}</td>
                     <td>{{ $ser->alamat }}</td>
                     <td>
                        <input data-id="{{$ser->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $ser->status ? 'checked' : '' }}>
                     </td>
                  </tr>
                  <?php $i++;?>
               @endforeach
            </tbody>
        </table>
    </div>
</body>
<script>
 $(document).ready(function(){
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
      
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/listpost',
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });

    })
  })
</script>
</html>