<?php 
	#echo $_POST['q'];
	
	 $imgname = $_FILES['q']['name'];
    $tmp = $_FILES['q']['tmp_name'];
    $filepath = './python_script/upload_img/'.time().'.jpg';
    if(move_uploaded_file($tmp,$filepath)){
        echo "ta是：";
    }else{
        echo "上传失败";
    }
    $output = shell_exec('python python_script/src.py --query_dir '.$filepath);
	echo $output;
 ?>