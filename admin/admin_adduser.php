<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/jquery-3.2.1.min.js
">
    <title>Admin_user</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="admin_adduser.css">
    <link rel="stylesheet" type="text/css" href="common.css">
    <style type="text/css" media="screen">
      
    </style>
  </head>
  <body>
      <header class="container-fluid">
        <div class="row">
            <h2>Administrator Page</h2>
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
                    <li><a class="list-group-item roles child" href="admin_roles.html"><i class="fa fa-genderless fa-fw" aria-hidden="true"></i>&nbsp; Admin</a>
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
                <h4>Add new user</h4>
              </div>
              <div class="content-content">
                <form action="#" id="adduser">
                  <label>Fisrtname</label>
                  <input type="text" id="firstname" name="firstname">

                  <label>Lastname</label>
                  <input type="text" id="lastname" name="lastname">

                  <label>Old password</label>
                  <input type="password" id="oldpassword" name="oldpassword">

                  <label>New password</label>
                  <input type="password" id="newpassword" name="newpassword">

                  <label>Email</label>
                   <input type="text" id="username" name="username">
                  <div class="clearfix"></div>
                  <div class="row add_cancel" style="text-align: right;">
                    <input type="submit" value="Add" id="btnadd">
                    <button class="btncancel">Cancel</button>
                  </div>
                </form>
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
        $("#adduser")[0].reset();
        $(".btncancel").click(function(){
          window.location.replace("admin_users.php");
        });

      }); 
    </script>
  </body>
</html> 