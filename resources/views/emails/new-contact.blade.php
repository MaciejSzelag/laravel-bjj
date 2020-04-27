<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
            .mailRequest-wrap{
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 100%;
            }
            .mailRequest-wrap .wrap{
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                width: 50%;
                height: 80%;
                border-radius: 10px;
                background-color: rgb(208, 234, 215);
                border: 1px solid rgb(142, 216, 162);
                color: black;
                padding: 10px 20px 50px;
                text-align: center;



            }
            .mailRequest-wrap .wrap h1{
                margin: 50px 0;
                
            }
            .mailRequest-wrap .wrap .btn {
                width: 80%;
                height: 50px;
                border-radius: 10px;
                background-color:rgb(79, 164, 234);
                border: 1px solid rgb(0, 78, 142);
                margin-top:50px;
                font-size: 22px;
             
               

            }
            .mailRequest-wrap .wrap .btn a {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 100%;
                text-decoration: none;
                color: whitesmoke;
            }
            .mailRequest-wrap .wrap  p{
                margin: 20px 0;
          
            }


    </style>
</head>
<body>


    <div class="mailRequest-wrap">
        <div class="wrap">

                <h1>New Message</h1>

             <p> <strong> From: </strong> <br>{{$request->name}} </p>  
             <p> <strong> E-mail: </strong><br>{{$request->email}} </p>  
             <p> <strong> Message: <hr> </strong><br>{{$request->message}} </p>  

            <div class="btn"><a href="mailto:{{$request->email}}"> Write back</a></div>
        </div>
    </div>
</body>
</html>