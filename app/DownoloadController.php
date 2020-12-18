<?php
require './app/Model.php';

class DownoloadController extends Model{
    
    public function DownoloadFile(){
        $file = $_FILES['file'];
        if(!$file['error'] == 4){
            
            if($file['size'] > 1000){
                $message = 'Файл не должен превышать 1МБ';
                include "./views/downoload-page.php";
                exit;
            }
            
            $name = $file['name'];
            move_uploaded_file($file['tmp_name'],'./uploads/' . $name);
            

            $file = fopen('./uploads/'.$name,'r');
            while(($data = fgetcsv($file,1000,','))!== false){
                $name = $data[1];
                echo $name;
                
                $this->createLine($data[0],$name,$data[2],$data[3],$data[4],$data[5]);
                // $this->createLine('99','sdfdsf','4','sdfd','6','dsfdsfds');
                echo '<hr>';
            }


            // $message = 'Данные были успешно добавленны';
            // include "./views/downoload-page.php";

        }else{
            $message = 'нужно выбрать файл';
            include "./views/downoload-page.php";
        }


        
    }
}