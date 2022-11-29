
<!-- navbar -->
<nav class="navbar navbar-expand-md navbar-light">
      <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="myNavbar">
        <div class="container-fluid">
          <div class="row">
            <!-- sidebar -->
            <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
              <a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-2 bottom-border" style="font-size: 9px;"><?php echo $_SESSION['DR_Dname']; ?></a>
              <a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-2 bottom-border" style="text-align: center;font-size: 12px;font-weight:bolder;"><?php echo $_SESSION['DR_Uname'];?></a>
            
            <ul class="navbar-nav flex-column mt-4">
              <li class="nav-item"><a href="index.php" class="nav-link text-white p-3 mb-2 current"><i class="fas fa-fw fa-tachometer-alt text-light fa-lg mr-3"></i>Tableau de Bord</a></li>
              <li class="nav-item"><a href="parcInfo.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-database text-light fa-lg mr-3"></i>Parc Informatique</a></li>
              <li class="nav-item"><a href="stock.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-truck text-light fa-lg mr-3"></i>Stock</a></li>
              <li class="nav-item"><a href="cimetiere.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-cubes text-light fa-lg mr-3"></i>Cimetière</a></li>
              <li class="nav-item"><a href="intervention.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-file-alt text-light fa-lg mr-3"></i>Interventions</a></li>
              <li class="nav-item"><a href="techniciens.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-users text-light fa-lg mr-3"></i>Techiciens DSI</a></li>

            </ul>
          </div>
            <!-- end of sidebar -->

            <!-- top-nav -->
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
              <div class="row align-items-center">
              
                <div class="col-md-6 ml-auto">
                  <form>
                    <div class="input-group">
                      <input type="text" id="search" name="search" class="form-control search-input" placeholder="Search...">
                      <button type="button" class="btn btn-white search-button"><i class="fas fa-search text-danger"></i></button>
                    </div>
                  </form>
                </div>
                <div class="col-md-3">
                  <ul class="navbar-nav">
                    <li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet"><i class="fas fa-comments text-muted fa-lg"></i></a></li>
                    <li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet"><i class="fas fa-bell text-muted fa-lg"></i></a></li>
                    <li class="nav-item ml-md-auto"><a href="logout.php" class="nav-link" ><i class="fas fa-sign-out-alt text-danger fa-lg"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- end of top-nav -->
          </div>
        </div>
      </div>
    </nav>
    <!-- end of navbar -->

     <!-- modal -->
     <div class="modal fade" id="sign-out">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">voulez vous quitter cette page?</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
          <h6>Appuyez sur déconnexion pour quitter</h6>
          </div>
          <div class="modal-footer">
          
            <button type="submit" name="logout_btn" class="btn btn-success" data-dismiss="modal">Deconnexion</button>
           
            <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
          </div>
        </div>
      </div>
    </div>

    
    <!-- end of modal -->