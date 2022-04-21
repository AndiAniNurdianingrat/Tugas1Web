<?php 
     $conn = mysqli_connect('localhost','root','','web2');
     if(mysqli_connect_errno()){
         echo "gagal" . mysqli_connect_error();
     }
     
     function tambah_data($data){
        global $conn;

        //tangkap data dari form dan masukan ke variabel

       
        $title = htmlspecialchars($data["title"]);
        $content = htmlspecialchars($data["content"]);

        //tambah file kedatabase
        mysqli_query($conn,"INSERT INTO curhatan VALUES('','$title','$content')");

        return mysqli_affected_rows($conn);
    }

    function query($query){

        global $conn;
        $result = mysqli_query($conn,$query);
        $rows = []; 
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }
    function hapus($data) {
        global $conn;
        $id = $data['id'];
        mysqli_query($conn, "DELETE FROM curhatan WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function edit($data){
        global $conn;

        $id = $data['id'];

      
        $title = htmlspecialchars($data['title']);
        $content = htmlspecialchars($data['content']);

    


        //update 
        $query = "UPDATE curhatan SET
                title = '$title',
                content = '$content'
                WHERE id = $id";

        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);

    }
   
    function cari($keyword){
        $query = "SELECT * FROM curhatan WHERE title LIKE '%$keyword%' OR content LIKE '%$keyword%'";
        

        return query($query);
    }

     ?>
   