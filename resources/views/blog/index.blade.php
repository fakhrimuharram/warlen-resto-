<!DOCTYPE html>
<html>
<head>
    <title>Blog Warlen</title>

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
    <!-- Posts list -->
    @if(!empty($posts))
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Posts List </h2>
                </div>
            </div>
        </div>
        <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                    
    
                    <!-- Table Body -->
        
                    @foreach($posts as $post)
                        <tr>
                            <div class="thumbnail">
                                <h2 style="color: brown">{{$post->title}}</h2>
                                
                                <div>Dipos pada : {{$post->created}}</div>
                           
                                <div>Alamat : {{$post->alamat}}</div>
                           
                            <?php
                            if (!function_exists('limit_kata'))   {
                        function limit_kata($string, $kata_limit){
                            $kalimat = explode(" ",$string);
                        return implode(" ",array_splice($kalimat,0,$kata_limit));
                            }
                        }
                                $long_string = $post->content;
                                $limited_string = limit_kata($long_string, 20);
                                echo $limited_string;
                              
                        
                            ?>                            
                                <a href="{{ route('blog.details', $post->id) }}" class="label label-success"><h3>Lanjut baca ...</h3></a>
                            </div>
                        </tr>
                    @endforeach
            </div>
        </div>
    @endif
    </div>
</div>
</div>
</body>
</html>
