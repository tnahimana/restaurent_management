<?php  
 $connect = mysqli_connect("localhost", "root", "kigali@kigali", "restaurent_management");  
 $query ="SELECT * FROM users ORDER BY user_id ASC";  
 $result = mysqli_query($connect, $query); 
 $i = 1;   
 ?> 
 <style>
 td{
     color: gray;
     text-align:center;
 }
 </style> 
   
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

           <!-- Offline Tables -->
           <link rel="stylesheet" type="text/css" href="./css/datatables.min.css">
            <script src="./css/jquery.dataTables.min.js"></script>
            <script src="./css/dataTables.bootstrap.min.js"></script>
            <script src="./css/datatables.min.js"></script>
            <script src="./css/datatables.js"></script>
           <br /><br />  
           <div class="container">  
                <h3><strong><i>Users</i></strong></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                <th>S.N</th>
                                <th>First Name</th>
                                <th>Last name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>Birth Date</th>  
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$i.'</td>  
                                    <td style="text-transform: capitalize;">'.$row["user_fname"].'</td>  
                                    <td style="text-transform: capitalize;">'.$row["user_lname"].'</td>  
                                    <td>'.$row["user_email"].'</td>  
                                    <td>'.$row["user_phone"].'</td>  
                                    <td style="text-transform: capitalize;">'.$row["user_gender"].'</td>  
                                    <td>'.$row["user_dob"].'</td>  
                               </tr>  
                               ';  
                               $i++;
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>   
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>  