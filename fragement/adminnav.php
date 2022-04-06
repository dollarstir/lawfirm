<?php

$get = fetchAll('settings');
$lo = $get[0]['logo'];
$logo = $lo == '' ? '<img src="main/firm/img/logo.png" alt="">' : '<img src="yolkassets/upload/'.$lo.'" alt="">';
echo '<nav class="sidebar">
<div class="logo d-flex justify-content-between">
<a href="adminhome">'.$logo.'</a>
<div class="sidebar_close_icon d-lg-none">
<i class="ti-close"></i>
</div>
</div>
<ul id="sidebar_menu">
<li>
    <a class="" href="adminhome" >

    <img src="main/firm/img/menu-icon/1.svg" alt="">
    <span>Dashboard</span>
    </a>

</li>
<li class="class="mm-active"">
<a class="has-arrow" href="#" aria-expanded="false">
<img src="main/firm/img/menu-icon/2.svg" alt="">
<span>Home Slider</span>
</a>
<ul>
<li><a href="addslider">Add New Slider</a></li>
<li><a href="viewsliders">View Sliders</a></li>

</ul>
</li>


<li class="">
    <a class="has-arrow" href="#" aria-expanded="false">
    <img src="main/firm/img/menu-icon/2.svg" alt="">
    <span>Practices</span>
    </a>
    <ul>
    <li><a href="addpractice">Add Practice</a></li>
    <li><a href="viewpractices">View Practices</a></li>
   
    </ul>
</li>

<li class="">
    <a class="has-arrow" href="#" aria-expanded="false">
    <img src="main/firm/img/menu-icon/2.svg" alt="">
    <span>Awards</span>
    </a>
    <ul>
    <li><a href="addawards">Add Awards</a></li>
    <li><a href="viewawards">View Awards</a></li>
   
    </ul>
</li>

<li class="">
    <a class="has-arrow" href="#" aria-expanded="false">
    <img src="main/firm/img/menu-icon/2.svg" alt="">
    <span>Testimony</span>
    </a>
    <ul>
    <li><a href="addtestimoney">Add Testimony</a></li>
    <li><a href="Viewtestimoney">View Testimony</a></li>
   
    </ul>
</li>


<li class="">
    <a class="has-arrow" href="#" aria-expanded="false">
    <img src="main/firm/img/menu-icon/2.svg" alt="">
    <span>About CEO</span>
    </a>
    <ul>
    <li><a href="editceo">Edit CEO</a></li>
   
    
    </ul>
</li>

<li class="">
    <a class="has-arrow" href="#" aria-expanded="false">
    <img src="main/firm/img/menu-icon/2.svg" alt="">
    <span>About Company</span>
    </a>
    <ul>
    <li><a href="editabout">Edit About Page </a></li>
   
    
    </ul>
</li>

<li class="">
    <a class="has-arrow" href="#" aria-expanded="false">
    <img src="main/firm/img/menu-icon/2.svg" alt="">
    <span>Attorney</span>
    </a>
    <ul>
    <li><a href="addattorney">Add Attorney</a></li>
    <li><a href="viewattorney">View Attorney</a></li>
    
    </ul>
</li>

<li class="">
    <a class="has-arrow" href="#" aria-expanded="false">
    <img src="main/firm/img/menu-icon/2.svg" alt="">
    <span>Contact Info</span>
    </a>
    <ul>
    <li><a href="editcontact">Edit Contact</a></li>
   
    
    </ul>
</li>

<li class="">
    <a class="has-arrow" href="#" aria-expanded="false">
    <img src="main/firm/img/menu-icon/2.svg" alt="">
    <span>Settings</span>
    </a>
    <ul>
    <li><a href="profile">Profile</a></li>
    <li><a href="appsettings">App Settings</a></li>
    
    </ul>
</li>

<li class="">
    <a class="has-arrow" href="#" aria-expanded="false">
    <img src="main/firm/img/menu-icon/2.svg" alt="">
    <span>Admins</span>
    </a>
    <ul>
    <li><a href="newadmin">Add Admin</a></li>
    <li><a href="viewadmins">View Admins</a></li>
    
    </ul>
</li>

</ul>
</nav>';

function adminslide()
{
    $s = fetchall('homeslide');
    foreach ($s as $row) {
        echo '<tr>
        <!-- <th> <a href="main/firm/data_table.html#" class="question_content"> title here 1</a></th> -->
        <td>'.$row['slidetitle'].'e</td>
        <td>'.$row['slidesubtitle'].'</td>
        <td><img src="yolkassets/upload/'.$row['slideimage'].'" width="100px"/></td>
        <td>16</td>
        <td>$25.00</td>
        <td><button class="btn btn-danger delslide">'.Icons::far('trash').'</button></td>
        </tr>';
    }
}
