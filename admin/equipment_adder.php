<?php
    // print_r($_POST);
    if(!empty($_POST)){
        $con = mysqli_connect('localhost','root','','gms');
                
        if(!$con){
            die("Connection Error".mysqli_connect_error());
        }
        $sql = "INSERT INTO equipment (Tdate,exercise_bike, treadmills, step_machines, lat_pulldown, seated_row, cable_machine, leg_extension, smith_mac,angled_leg_curl, incline_press, ped_dec, cable_cross_over)
                VALUES('$_POST[Tdate]',
                    '$_POST[Estatus]',
                        '$_POST[Tstatus]',
                        '$_POST[Sstatus]',
                        '$_POST[Lstatus]',
                        '$_POST[Rstatus]',
                        '$_POST[Cstatus]',
                        '$_POST[legstatus]',
                        '$_POST[smithstatus]',
                        '$_POST[curlstatus]',
                        '$_POST[Istatus]',
                        '$_POST[Pstatus]',
                        '$_POST[Ostatus]'
                         )";
                
        $result = mysqli_query($con,$sql);
        
    header("Location: equipment.php");
    
                                                }
?>