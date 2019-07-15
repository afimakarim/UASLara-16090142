<?php /* C:\xampp\htdocs\jadwalPertandingan\private\resources\views/navbarUser.blade.php */ ?>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #32CD32;">
    <a class="navbar-brand" Style="Text-size:42px;"Style ="color:#000000;"><b>Turnamen Futsal</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('/')); ?>"> 
                <i class='fas fa-home'></i> Home <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('jadwalUser')); ?>"> 
                <i class="fa fa-soccer-ball-o"></i>Jadwal Pertandingan <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('score')); ?>">
                <i class='fas fa-table'></i>
                Score Pertandingan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('Tim')); ?>">
                <i class='fas fa-user-friends'></i>
                Tim
                </a>
            </li>
        </ul>
            <ul class="navbar-nav  navbar-right">
                <li class="nav-item "> 
                <a class="nav-link" href="<?php echo e(url('login')); ?>">
                <i class='fas fa-sign-in-alt'></i>Login<span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>
        <!--<form class="form-inline my-2 my-log-0">
            <input class="form-control mr-sm-2"type="search" placeholder="Search" arial-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>-->
    </div>
</nav>