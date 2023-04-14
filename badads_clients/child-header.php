<?php

if($_SESSION['subs-stats'] === "UNLPAFOM01"){

?>
<header class="top-header">        
    <nav class="navbar navbar-expand gap-3 align-items-center" style="background: rgb(19,0,125);
background: linear-gradient(286deg, rgba(19,0,125,1) 34%, rgba(224,0,123,1) 100%);
">
        <div class="mobile-toggle-icon fs-3">
            <i class="bi bi-list text-white"></i>
        </div>
        <div class="top-navbar-right ms-auto">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item search-toggle-icon">
                    <a class="nav-link" href="#">
                        <div class="">
                            <i class="bi bi-search"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-user-setting">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                        <div class="user-setting d-flex align-items-center">
                            <?php echo "<img src='data:image;base64, ".base64_encode($client_data['img_url'])."' class='user-img' alt=''>" ?>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li id="realtime-userInfo">
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <!--<img src="assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="54" height="54">-->
                                    <?php echo "<img src='data:image;base64, ".base64_encode($client_data['img_url'])."' alt='' class='rounded-circle' width='54' height='54' >" ?>
                                    <div class="ms-3">
                                        <h6 class="mb-0 dropdown-user-name"><?php echo $client_data['first_name']." ".$middle_name_converted.". ".$client_data['last_name'] ?></h6>
                                        <small class="mb-0 dropdown-user-designation text-secondary"><?php echo $client_data['subscription'] ?></small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="pages-user-profile.html">
                                <div class="d-flex align-items-center">
                                    <div class=""><i class="bi bi-person-fill"></i></div>
                                    <div class="ms-3"><span>Profile</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <div class=""><i class="bi bi-gear-fill"></i></div>
                                    <div class="ms-3"><span>Setting</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" id="btn-logout-clients">
                                <div class="d-flex align-items-center">
                                    <div class=""><i class="bi bi-lock-fill"></i></div>
                                    <div class="ms-3"><span>Logout</span></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<?php

}

if($_SESSION['subs-stats'] === "UNLPAFOM02"){

?>
<header class="top-header">        
    <nav class="navbar navbar-expand gap-3 align-items-center" style="background: rgb(19,0,125);
background: linear-gradient(286deg, rgba(19,0,125,1) 34%, rgba(224,0,123,1) 100%);
">
        <div class="mobile-toggle-icon fs-3">
            <i class="bi bi-list"></i>
        </div>
        <div class="top-navbar-right ms-auto">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item search-toggle-icon">
                    <a class="nav-link" href="#">
                        <div class="">
                            <i class="bi bi-search"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-user-setting">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                        <div class="user-setting d-flex align-items-center">
                            <?php echo "<img src='data:image;base64, ".base64_encode($client_data['img_url'])."' class='user-img' alt=''>" ?>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li id="realtime-userInfo">
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <!--<img src="assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="54" height="54">-->
                                    <?php echo "<img src='data:image;base64, ".base64_encode($client_data['img_url'])."' alt='' class='rounded-circle' width='54' height='54' >" ?>
                                    <div class="ms-3">
                                        <h6 class="mb-0 dropdown-user-name"><?php echo $client_data['first_name']." ".$middle_name_converted.". ".$client_data['last_name'] ?></h6>
                                        <small class="mb-0 dropdown-user-designation text-secondary"><?php echo $client_data['subscription'] ?></small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="pages-user-profile.html">
                                <div class="d-flex align-items-center">
                                    <div class=""><i class="bi bi-person-fill"></i></div>
                                    <div class="ms-3"><span>Profile</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <div class=""><i class="bi bi-gear-fill"></i></div>
                                    <div class="ms-3"><span>Setting</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" id="btn-logout-clients">
                                <div class="d-flex align-items-center">
                                    <div class=""><i class="bi bi-lock-fill"></i></div>
                                    <div class="ms-3"><span>Logout</span></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<?php
 
}

if($_SESSION['subs-stats'] === "UNLPAFOM03"){

?>
<header class="top-header">        
    <nav class="navbar navbar-expand gap-3 align-items-center" style="background: rgb(19,0,125);
background: linear-gradient(286deg, rgba(19,0,125,1) 34%, rgba(224,0,123,1) 100%);">
        <div class="mobile-toggle-icon fs-3">
            <i class="bi bi-list"></i>
        </div>
        <div class="top-navbar-right ms-auto">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item search-toggle-icon">
                    <a class="nav-link" href="#">
                        <div class="">
                            <i class="bi bi-search"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-user-setting">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                        <div class="user-setting d-flex align-items-center">
                            <?php echo "<img src='data:image;base64, ".base64_encode($client_data['img_url'])."' class='user-img' alt=''>" ?>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li id="realtime-userInfo">
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <!--<img src="assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="54" height="54">-->
                                    <?php echo "<img src='data:image;base64, ".base64_encode($client_data['img_url'])."' alt='' class='rounded-circle' width='54' height='54' >" ?>
                                    <div class="ms-3">
                                        <h6 class="mb-0 dropdown-user-name"><?php echo $client_data['first_name']." ".$middle_name_converted.". ".$client_data['last_name'] ?></h6>
                                        <small class="mb-0 dropdown-user-designation text-secondary"><?php echo $client_data['subscription'] ?></small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="pages-user-profile.html">
                                <div class="d-flex align-items-center">
                                    <div class=""><i class="bi bi-person-fill"></i></div>
                                    <div class="ms-3"><span>Profile</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <div class=""><i class="bi bi-gear-fill"></i></div>
                                    <div class="ms-3"><span>Setting</span></div>
                                </div>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" id="btn-logout-clients">
                                <div class="d-flex align-items-center">
                                    <div class=""><i class="bi bi-lock-fill"></i></div>
                                    <div class="ms-3"><span>Logout</span></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header> 
<?php

}

?>