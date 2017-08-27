 <div class="navbar navbar-inverse navbar-fixed-top"   >
      <div class="container"> 
        <div class="navbar-header" >
          <a href="{{route('home')}}" class="navbar-brand" style="color:white;">HertiBook </a>

          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
           
           <!--  <li>
              <a href="https://bootswatch.com/help/">Help</a>
              </li> -->
         </ul>

          <ul class="nav navbar-nav navbar-right">

            <li>
       <p class="navbar-btn">
            <a href="{{route('Register.create')}}" class="btn btn-danger" style="color:white;"><i class="fa fa-plus"></i> Creer un compte</a>
           </p>
            
            </li>
          
            <li>
            <p class="navbar-btn">
            <a href="{{route('login.index')}} " class="btn btn-primary" style="color:white;"><i class="fa fa-plus"></i> Connexion</a>
            </p>

            </li>
           </ul>

        </div>
      </div>
    </div>