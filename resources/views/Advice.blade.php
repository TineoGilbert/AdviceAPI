<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

   <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Document</title>
</head>
<body>

    <div class="container">

      

        <div class="row">
            <div class="col s12 m12">
              <div class="card grey darken-4">
                <div class="card-content white-text">
                  <span class="card-title">
                    <center>
                      <h1 class="animate__animated animate__lightSpeedInLeft" style="color: darkorange">My Daily Advice</h1>
                    </center>
                  </span>
                  
                </div>
                <div class="card-action">
          

                 <center>
                  <h3 class="animate__animated animate__fadeInUp" style="color: darkseagreen"> {{$a['slip']['advice']}}</h3>
                 </center>

                 
                 <div class="row">
                  <form class="col s12">
                    <div class="row">
                      <div class="input-field col s5">
                       
                      </div>
                      
                      <div class="input-field col s5">
                       
                      </div>
                    </div>
                  </form>
                </div>
                 


                <center>
                  
              <a href="{{route('Consejos')}}" class="waves-effect waves-light btn-large orange darken-2"><b>GO</b></a>
                </center>
                </div>

                <div class="card-action">
                  <h5 style="color: blanchedalmond">Note:</h5> <p style="color: blanchedalmond">Press the GO button to get a new advice.  <i class="material-icons prefix">mood</i></p>
                  
                  <center>
                    <p style="color: blanchedalmond">This project was created by Gilbert E. Tineo</p>
                  </center>
                </div>
                
              </div>
            </div>
          </div>
                  
    </div>
              
   

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>