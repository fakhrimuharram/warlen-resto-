<!DOCTYPE html>
<html>
<head>
    <title>Blog Warlen</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style type="text/css">
        
            input.MyButton {
            width: 300px;
            padding: 15px;
            cursor: pointer;
            font-weight: bold;
            font-size: 100%;
            background: #3366cc;
            color: #fff;
            border: 1px solid #3366cc;
            border-radius: 10px;

            }
            input.MyButton:hover {
            color: #ffff00;
            background: #000;
            border: 1px solid #fff;
            }

    </style>
</head>
<body>
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 align="center">Detail Warteg</h2>
        </div>
        <div class="pull-right">
            <br>
            <center><input class="MyButton" type="button" value="BACK TO LIST" onclick="window.location.href='{{ route('blog.index') }}'" /></center>
           <!-- <a href="{{ route('blog.index') }}" class="label label-primary pull-right"> Back</a> --->
        </div>
    </div>
</div>
<div class="container">
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong><h1>   {{ $post->title }} </h1></strong>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Alamat:</strong>
            {{ $post->alamat }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <p> {{ $post->content }} </p>
        </div>
    </div>
</div>
</body>
</html>

