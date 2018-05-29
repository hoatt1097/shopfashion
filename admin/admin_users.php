<?php 
  include 'database.php';
  $dt = new Database;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/jquery-3.2.1.min.js
">
    <title>Admin_users</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="admin_users.css">
    <link rel="stylesheet" type="text/css" href="common.css">

    <style type="text/css" media="screen">
      
    </style>
  </head>
  <body>
      <header class="container-fluid">
        <div class="row">
            <h2>Quản lý admin</h2>
              <div class="row login_logout" >
                <a class="login" title="Account" href="#">
                  <i class="fa fa-user" aria-hidden="true"></i>&nbsp;
                   admin
                </a>
                <a class="logout" title="Logout" href="#">
                  <i class="fa fa-sign-out"></i>
                </a>
              </div>  
          </div>
      </header>
      <div class="container-fluid">
        <div class="row">
          <div class="menu col-xs-3 col-sm-3 col-lg-3">
             <div class="list-group">
              <ul>
                <li><a class="list-group-item" href="#" title="Homepage"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Trang chủ</a></li>
                <li><a class="list-group-item user-management" href="#" ><i class="fa fa-users fa-fw" aria-hidden="true"></i>&nbsp; Quản lý người dùng</a>
                  <ul class="menu-usesmanagement" >
                    <li><a class="list-group-item users child" href="admin_users.php"><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Users</a>
                    <li><a class="list-group-item roles child" href="listadmin.php"><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Admin</a>
                  </ul>
                </li>
                <li><a class="list-group-item user-management" href="#" ><i class="fa fa-users fa-fw" aria-hidden="true"></i>&nbsp; Quản lý sản phẩm</a>
                  <ul class="menu-usesmanagement" >
                    <li><a class="list-group-item users child" href="admin_users.html" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Danh sách sản phẩm</a>
                    <li><a class="list-group-item roles child" href="admin_roles.html" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Các sản phẩm đã hết</a  >
                  </ul>
                </li>
                <li><a class="list-group-item user-management" href="#" ><i class="fa fa-users fa-fw" aria-hidden="true"></i>&nbsp; Lập báo cáo</a>
                  <ul class="menu-usesmanagement" >
                    <li><a class="list-group-item users child" href="admin_users.html" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Báo cáo tồn</a>
                    <li><a class="list-group-item roles child" href="admin_roles.html" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Báo cáo doanh thu</a  >
                    <li><a class="list-group-item roles child" href="admin_roles.html" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Báo cáo công nợ</a  >
                  </ul>
                </li>
                <li><a class="list-group-item user-management" href="#" ><i class="fa fa-users fa-fw" aria-hidden="true"></i>&nbsp; Quản lý chung</a>
                  <ul class="menu-usesmanagement" >
                    <li><a class="list-group-item users child" href="admin_users.html" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Danh sách nhà cung cấp</a>
                    <li><a class="list-group-item users child" href="admin_users.html" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Danh sách hóa đơn</a>
                    <li><a class="list-group-item users child" href="admin_users.html" ><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Danh sách phiếu chi</a>
                  </ul>
                </li>
              </ul>
            </div>
          </div> 
          <div class="content col-xs-9 col-sm-9 col-lg-9">
            <div class="container">
              <div class="header-content">
                <h2>Users</h2>
                <a class="add-user" title="Add user" href="admin_adduser.php">
                  <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;
                  Add user
                </a>
              </div>
              <div class="content-content">
                <table>
                  <tr>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Daybirth</th>
                    <th>Actions</th>
                  </tr>
              <?php
                $dt -> select("SELECT * FROM user");
                while( $r = $dt->fetch())
                {
                  $email = $r["email"];
                  $name = $r["lastname"] . " " . $r["firstname"];
                  $datebirth = $r["datebirth"];
                  $iduser = $r["iduser"];
              ?>
                  <tr>
                    <td><?=$email?></td>
                    <td><?=$name?></td>
                    <td><?=$datebirth?></td>
                    <td>
                      <li><a href="" title="Detail"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                      <li><a href="admin_edituser.php?id=<?=$r["iduser"]?>" title="Edit" class="edit" itemprop="<?=$r["iduser"]?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></li>
                      <li><a href="" title="Delete" class="remove" itemprop="<?=$r["iduser"]?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></li>
                    </td>
                  </tr>
              <?php
                }
              ?>
                  
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        $(".remove").click(function(){
          var id_remove = $(".remove").attr("itemprop");
          $.ajax({
            url : "removeuser.php",
            type : 'post',
            dataType : 'text',
            data : {
                "id_remove"    : id_remove
            },
            success : function(result) {
              alert(result);
              window.location.replace("cart.php");
            }
          });
        });
      }); 
    </script>
  </body>
</html>