<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- Styles -->
        <style>

        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">


<div class="card">
    <h2>Clinical Support </h2>
  <div class="card-body">
      <div class="col-md-12">
          <div class="row">
          <h3>Dynamic Form:</h3>

          @php $formData = \App\Models\Form::getJson()['fields']; @endphp
           <x-dynamic-form data="{{json_encode($formData,true)}}"/>
          <form>
           <button type="submit" class="btn btn-primary mt-10">Save</button>
            </form>
        </div>
    </div>
    
  </div>
</div>

          <!-- ============================================================== -->
            <!-- All Jquery -->
            <!-- ============================================================== -->
        <script src="{{ asset('/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>  
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>
