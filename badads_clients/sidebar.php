<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="badads_image/ICON.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text"><img src="badads_image/340256441_165229769437999_3983724055254167768_n.png" width="50"></h4>
        </div>
        <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
        </div>
    </div>
<?php

if($_SESSION['subs-stats'] === "UNLPAFOM01"){

?>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li id="sideDashboard_btn1">
            <a href="#">
                <div class="parent-icon">
                    <i class="bi bi-house-fill"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li class="menu-label">Our Services(base on subscription)</li>
        <li id="sideChatSupport_btn1">
            <a href="#">
                <div class="parent-icon">
                    <i class="bi bi-chat-left-dots-fill"></i>
                </div>
                <div class="menu-title">Chat Support</div>
            </a>
        </li>
        <li id="sideRequestsGraphics_btn1">
            <a href="#">
                <div class="parent-icon">
                    <i class="bi bi-bezier"></i>
                </div>
                <div class="menu-title">Request Graphics</div>
            </a>
        </li>
        <li id="sideRequests1TimeVideo_btn1">
            <a href="#">
                <div class="parent-icon">
                    <i class="bi bi-camera-reels-fill"></i>
                </div>
                <div class="menu-title">Request 1 Time Video</div>
            </a>
        </li>
        <li id="sideRequestsList_btn1">
            <a href="#">
                <div class="parent-icon">
                    <i class="bi bi-list-check"></i>
                </div>
                <div class="menu-title">Requested List</div>
            </a>
        </li>
        <li>
            <div class="menu-title"><p>Subscription Status :<?php echo "Start Up"; ?></p></div>
        </li>
    </ul>
<?php

}

if($_SESSION['subs-stats'] === "UNLPAFOM02"){

?>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="#" id="btn-dashboard">
                <div class="parent-icon">
                    <i class="bi bi-house-fill"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li class="menu-label">Our Services(base on subscription)</li>
        <li>
            <a href="#">
                <div class="parent-icon">
                    <i class="bi bi-chat-left-dots-fill"></i>
                </div>
                <div class="menu-title">Chat Support</div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="parent-icon">
                    <i class="bi bi-bezier"></i>
                </div>
                <div class="menu-title">Request Graphics</div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="parent-icon">
                    <i class="bi bi-list-check"></i>
                </div>
                <div class="menu-title">Requested List</div>
            </a>
        </li>
        <br><br><br>
        <p>Subscription Status :<?php echo "Unlimited Graphic 1 Month"; ?></p>
    </ul>
<?php

}

if($_SESSION['subs-stats'] === "UNLPAFOM03"){

?>
    <ul class="metismenu" id="menu">
        <li id="sideDashboard_btn3">
            <a href="#">
                <div class="parent-icon">
                    <i class="bi bi-house-fill"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li class="menu-label">Our Services(base on subscription)</li>
        <li id="sideChatSupport_btn3">
            <a href="#">
                <div class="parent-icon">
                    <i class="bi bi-chat-left-dots-fill"></i>
                </div>
                <div class="menu-title">Chat Support</div>
            </a>
        </li>
        <li id="sideRequestGraphics_btn3">
            <a href="#">
                <div class="parent-icon">
                    <i class="bi bi-bezier"></i>
                </div>
                <div class="menu-title">Request Graphics</div>
            </a>
        </li>
        <li id="sideRequestVideoGraphs_btn3">
            <a href="#">
                <div class="parent-icon">
                    <i class="bi bi-camera-reels-fill"></i>
                </div>
                <div class="menu-title">Request Video</div>
            </a>
        </li>
        <li id="sideMixedVideoGraphicsRequest_btn3">
            <a href="#">
                <div class="parent-icon">
                    <i class="bi bi-ticket-detailed-fill"></i>
                </div>
                <div class="menu-title">Mixed Video and Graphics Request</div>
            </a>
        </li>
        <li id="sideRequestedList_btn3">
            <a href="#">
                <div class="parent-icon">
                    <i class="bi bi-list-check"></i>
                </div>
                <div class="menu-title">Requested List</div>
            </a>
        </li>
        <br><br><br>
        <p>Subscription Status :<?php echo "Unlimited Graphics & Video"; ?></p>
    </ul>
<?php

}

?>
</aside>
