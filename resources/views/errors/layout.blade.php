<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Styles -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Arvo'>
    </head>
    <body>
        <style>
            .page_404{ padding:40px 0; background:#fff; font-family: 'Arvo', serif;
            }

            .page_404  img{ width:100%;}

            .four_zero_four_bg{
            
            background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
                height: 400px;
                background-position: center;
            }
            
            
            .four_zero_four_bg h1{
            font-size:80px;
            }
            
            .four_zero_four_bg h3{
                        font-size:80px;
                        }
                        
                        .link_404{			 
                color: #fff!important;
                padding: 10px 20px;
                background: #39ac31;
                margin: 20px 0;
                display: inline-block;}
                .contant_box_404{ margin-top:-50px;}
        </style>
        <section class="page_404">
            <div class="container">
                <div class="row">	
                <div class="col-sm-12 ">
                <div class="col-sm-10 col-sm-offset-1  text-center">
                <div class="four_zero_four_bg">
                    <h1 class="text-center "> @yield('code')</h1>
                
                
                </div>
                
                <div class="contant_box_404">
                <h3 class="h2">
                ¿Que pasó?
                </h3>
                
                <p>@yield('message')</p>
                
                <a href="{{route('home')}}" class="link_404">Go to Home</a>
            </div>
                </div>
                </div>
                </div>
            </div>
        </section>
    </body>
</html>
