<?php
session_start();
?>
<div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
        <a href="upcomingevents.php" class="site_title"><span><img src="../landing_page/images/icon/logo.png" alt="" style="max-height: 45px;max-width: 190px;opacity: 1;top:8px;"></span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
        <div class="profile_pic">
            <img src="../images/user.jpg" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
            <span>Welcome,</span>
            <h2>Joven Novo</h2>
        </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
            <!--<h3>General</h3>-->
            <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Flockers Events <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="../manage_event/upcomingevents.php">Upcoming Events</a></li>
                        <li><a href="../manage_event/createevents.php">Create Events</a></li>
                        <li><a href="../manage_event/attendedevents.php">Attended Events</a></li>
                        <li><a href="../manage_event/evaluateevent.php">Evaluate Event</a></li>
                        <li><a href="../manage_event/myevents.php">My Events</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-user"></i> Profile <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="../manage_account/personalinfo.php">Personal Info</a></li>
                        <li><a href="../manage_account/accountsettings.php">Account Settings</a></li>
                        <li><a href="../manage_account/privacysettings.php">Privacy Settings</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-envelope"></i> Messages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="../manage_message/groupmessage.php">Group Message(s)</a></li>
                        <li><a href="../manage_message/message_main.php">Private Message(s)</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-group"></i> My Groups <span class="fa fa-chevron-down"></span></a>
                    <!--populate groups joined from database-->
                    <ul class="nav child_menu">
                        <li><a href="../manage_group/tables.php">ex. Group 1</a></li>
                        <li><a href="../manage_group/tables_dynamic.php">ex. Group 2</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>