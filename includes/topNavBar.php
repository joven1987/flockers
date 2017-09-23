<?php
require '../db_connection.php';
require '../notification/count_notification.php';
$_SESSION['user_interest_id'] = '3,13';
$i_id = $_SESSION['user_interest_id'];
?>
<div class="nav_menu" >
    <nav >
        <div class="nav toggle" >
            <a id="menu_toggle" ><i class="fa fa-bars" style="color:white;"></i ></a >
        </div >

        <ul class="nav navbar-nav navbar-right" >
            <li class="" >
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                   aria-expanded="false" >
                    <img src="../images/user.jpg" alt="" ><?php echo $_SESSION['first_name'];?>
                    <span class=" fa fa-angle-down" ></span >
                </a >
                <ul class="dropdown-menu dropdown-usermenu pull-right" >
                    <li ><a href="javascript:;" > Profile</a ></li >
                    <li >
                        <a href="javascript:;" >
                            <span class="badge bg-red pull-right" >50%</span >
                            <span >Settings</span >
                        </a >
                    </li >
                    <li ><a href="javascript:;" >Help</a ></li >
                    <li ><a href="../logout.php" ><i class="fa fa-sign-out pull-right" ></i > Log Out</a ></li >
                </ul >
            </li >

            <li role="presentation" class="dropdown" >
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                   aria-expanded="false" >
                    <i class="fa fa-envelope-o" ></i >
                    <span class="badge bg-white" >6</span >
                </a >
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu" >
                    <li >
                        <a >
                            <span class="image" ><img src="../images/user.jpg" alt="Profile Image" /></span >
                            <span >
                          <span >John Smith</span >
                          <span class="time" >3 mins ago</span >
                        </span >
                            <span class="message" >
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span >
                        </a >
                    </li >
                    <li >
                        <a >
                            <span class="image" ><img src="../images/user.jpg" alt="Profile Image" /></span >
                            <span >
                          <span >John Smith</span >
                          <span class="time" >3 mins ago</span >
                        </span >
                            <span class="message" >
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span >
                        </a >
                    </li >
                    <li >
                        <a >
                            <span class="image" ><img src="../images/img.jpg" alt="Profile Image" /></span >
                            <span >
                          <span >John Smith</span >
                          <span class="time" >3 mins ago</span >
                        </span >
                            <span class="message" >
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span >
                        </a >
                    </li >
                    <li >
                        <a >
                            <span class="image" ><img src="../images/img.jpg" alt="Profile Image" /></span >
                            <span >
                          <span >John Smith</span >
                          <span class="time" >3 mins ago</span >
                        </span >
                            <span class="message" >
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span >
                        </a >
                    </li >
                    <li >
                        <div class="text-center" >
                            <a >
                                <strong >See All Alerts</strong >
                                <i class="fa fa-angle-right" ></i >
                            </a >
                        </div >
                    </li >
                </ul >
            </li >
            <li role="presentation" class="dropdown" >
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                   aria-expanded="false" >
                   <i class="fa fa-bell-o" aria-hidden="true"></i>
                    <span class="badge bg-white" ><?php $count_notify = count_notification($db, $i_id, 1); echo $count_notify>0 ? $count_notify: '';?></span >
<!--                    <input type="hidden" id="event_ids" value='--><?php //$count = count_notification($db, $i_id, 0); echo $count;?><!--' />-->
                    <?php $count = count_notification($db, $i_id, 0);?>
                </a >
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list notification" role="menu" >
                    <?php echo $count_notify>0 ? get_event_details($db, $count): '';?>
                </ul >
            </li >
        </ul >
    </nav >
</div >
