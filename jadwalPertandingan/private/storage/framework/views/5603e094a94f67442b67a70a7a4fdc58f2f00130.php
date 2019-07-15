<?php /* C:\xampp\htdocs\jadwalPertandingan\private\resources\views/navbar.blade.php */ ?>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #32CD32;">
    <a class="navbar-brand" style="text-size:42px; color:#000000;"><b>Admin Turnamen</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('admin')); ?>"> 
                <i class="fa fa-soccer-ball-o"></i>Jadwal Pertandingan <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('daftarTim')); ?>">
                <i class='fas fa-list-alt'></i>
                Daftar Tim
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('daftarPemain')); ?>">
                <i class='fas fa-user-friends'></i>
                Daftar Pemain
                </a>
            </li>
        </ul>
            <ul class="navbar-nav  navbar-right">
                <li class="nav-item "> 
                    <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i>Logout <span class="sr-only">(current)</span>
                    </a>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                </li>
            </ul>
        <!--<form class="form-inline my-2 my-log-0">
            <input class="form-control mr-sm-2"type="search" placeholder="Search" arial-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>-->
    </div>
</nav>