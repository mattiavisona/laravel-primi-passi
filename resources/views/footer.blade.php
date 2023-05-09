<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Footer</title>
</head>
<body>
    <style>
        h1{
            text-transform: uppercase;
            
            color: rgba(62, 68, 68, 0.61);
            
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .name:hover{
            cursor: pointer;
            color: red;
            transition: .5s;
            border: 2px solid rgba(131, 29, 29, 0.308);
            border-radius: 15px;
            padding: 7px
        }
    
        #link{
            text-align: center;
            padding-top: 45px;
            font-size: 40px
        }
    </style>
    <body>
        <div class="container">
            <h1>
                questo è il footer della prima pagina fatta con <span  class="name"> Laravel </span> 
            </h1>
    
            
        </div>
</body>
</html>