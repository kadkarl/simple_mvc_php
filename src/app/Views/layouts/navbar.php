    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <div class="container">
           <a class="navbar-brand" href="<?= SITE_URL ?>">Simple MVC</a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>

           <div class="collapse navbar-collapse" id="navbarColor02">
               <ul class="navbar-nav mr-auto">
                   <li class="nav-item active">
                       <a class="nav-link text-white" href="<?= SITE_URL ?>">Home <span class="sr-only">(current)</span></a>
                   </li>
                   <li class="nav-item active">
                       <a class="nav-link text-white" href="<?= SITE_URL ?>nobel/all">Tous les prix nobels <span class="sr-only">(current)</span></a>
                   </li>
               </ul>
               <form class="form-inline my-2 my-lg-0" action="<?= SITE_URL ?>" method="post">
                   <input class="form-control mr-sm-2" type="text" name="id_nobel" placeholder="Rechercher par N°..">
                   <button class="btn btn-secondary my-2 my-sm-0" type="submit">Rechercher</button>
               </form>
           </div>
       </div>
    </nav>
