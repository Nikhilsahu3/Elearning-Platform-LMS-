<?php
    include('header.php');
    include('dbconnection.php');
    session_start();
    $id = $_SESSION['id'];
?>

   <title>Profile</title>

   <style>
      .shopping-cart
      {
         padding-left: 20%;
         color: white;
          margin: 10px;
          width: 20%;
      }



      .student-profile py-4  {
        padding: 0;
        margin: 10%;
        font-family: 'Lato', sans-serif;
        color: #eeebeb;
      }

      .ccontainer{
        font-size: larger;
        font-family: 'Lato', sans-serif;
        color: #eeebeb;
      }
      
      .student-profile .card {
        border-radius: 10px;
      }
      
      .student-profile .card .card-header .profile_img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        margin: 10px auto;
        border: 10px solid #ccc;
        border-radius: 50%;
      }
      
      .student-profile .card h3 {
        font-size: 20px;
        font-weight: 700;
      }
      
      .student-profile .card p {
        font-size: 16px;
        color: #f9f9f9;
      }
      
      .student-profile .table th,
      .student-profile .table td {
        font-size: 14px;
        padding: 5px 10px;
        color: #fcfcfc;
      }

   </style>
  

</head>
<?php 'SELECT * FROM user WHERE id = :id'; ?>
<body>
    <div class="student-profile py-4">
        <div class="ccontainer">
          <div class="row">
            <div class="col-lg-4">
              <div class="card shadow-sm">
                <div class="card-header bg-transparent text-center">
                  <img class="profile_img" src="https://placeimg.com/640/480/arch/any" alt="">
                  <h3><? echo  $name['name']; ?></h3>
                </div>
                <div class="card-body">
                  <p class="mb-0"><strong class="pr-1">Email:</strong></p>
                  <p class="mb-0"><strong class="pr-1">female:</strong>4</p>
                  <p class="mb-0"><strong class="pr-1">Phone:</strong>A</p>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card shadow-sm">
                <div class="card-header bg-transparent border-0">
                  <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                </div>
                <div class="card-body pt-0">
                  <table class="table table-bordered">
                    <tr>
                      <th width="30%">Roll</th>
                      <td width="2%">:</td>
                      <td>125</td>
                    </tr>
                    <tr>
                      <th width="30%">Academic Year	</th>
                      <td width="2%">:</td>
                      <td>2020</td>
                    </tr>
                    <tr>
                      <th width="30%">Gender</th>
                      <td width="2%">:</td>
                      <td>Male</td>
                    </tr>
                    <tr>
                      <th width="30%">Religion</th>
                      <td width="2%">:</td>
                      <td>Group</td>
                    </tr>
                    <tr>
                      <th width="30%">blood</th>
                      <td width="2%">:</td>
                      <td>B+</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>
