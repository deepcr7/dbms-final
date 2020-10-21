<?php
    if(isset($_POST['fir_prisoner_add'])){
        require 'dbh.inc.php';
        $fir_no=$_POST['fir_no'];
        $date_fir=$_POST['date_fir'];
        $crime_done=$_POST['crime_done'];
        $officer_id=$_POST['officer_id'];
        $description=$_POST['description'];
        $f_name=$_POST['f_name'];
        $l_name=$_POST['l_name'];
        $date_in=$_POST['date_in'];
        $date_out=$_POST['date_out'];
        $dob=$_POST['dob'];
        $height=$_POST['height'];
        $addr=$_POST['addr'];
        $section_id=$_POST['section_id'];

        if(empty($fir_no)||empty($date_fir)||empty($crime_done)||empty($officer_id)||empty($description)||empty($f_name)||empty($l_name)||empty($date_in)||empty($date_out)||empty($dob)||empty($height)||empty($addr)||empty($section_id)){
              
            
            header("Location: ../fir.php?error=emptyfields");
            exit();
        }else{
                $sql1="INSERT INTO fir(Fir_no,Description,Fir_date,Case_type,Officer_id) VALUES
                (?,?,?,?,?) ";
                $stmt1=mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt1,$sql1)){
                    header("Location: ../fir.php?error=sqlerror");
                    exit();
                }else{
                    //hashing the password:
                    mysqli_stmt_bind_param($stmt1,"sssss",$fir_no,$description,$date_fir,$crime_done,$officer_id);
                    mysqli_stmt_execute($stmt1);
                   // header("Location: ../fir.php?insert=success");
                    //exit();

                }
                $sql2="INSERT INTO prisoner(First_name,Last_name,Date_in,DOB,Height,Date_out,Address,Section_id) VALUES
                (?,?,?,?,?,?,?,?) ";
                $stmt2=mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt2,$sql2)){
                    header("Location: ../fir.php?error=sqlerror");
                    exit();
                }else{
                    //hashing the password:
                    mysqli_stmt_bind_param($stmt2,"ssssssss",$f_name,$l_name,$date_in,$dob,$height,$date_out,$addr,$section_id);
                    mysqli_stmt_execute($stmt2);
                    header("Location: ../successfir_prisoner.php?insert=success");
                    exit();

                }

        }
    }