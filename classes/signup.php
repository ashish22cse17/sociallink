<?php
class Signup
{
    public function create_userid($data){
        $length = rand(4,19);
        $number="";
        for ($i=0; $i < $length; $i++) { 
            $new_rand = rand(0, 9);
            $number = $number . $new_rand;
        }
        return $number; // Return the generated user ID
    }

    public function create_user($data){
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $gender = $data['gender'];
        $email = $data['email'];
        $password = $data['password'];
        $url_address = strtolower($first_name) . strtolower($last_name);
        $userid = $this->create_userid($data); // Call the create_userid() method of the same class
        $profile_pic=$data['profile_pic'];

        $query = "INSERT INTO users 
            (userid, first_name, last_name, gender, email, password, url_address,profile_pic )
            VALUES ('$userid', '$first_name', '$last_name', '$gender', '$email', '$password', '$url_address','$profile_pic')";

        $DB = new Database();
        $DB->save($query);
    }

    public $error = "";

    public function evaluate($data){
        $error = "";
        foreach ($data as $key => $value) {
            if (empty($value)) {
                $this->error .= $key . " is empty!<br>";
            }
        }
        if ($this->error == "") {
            $this->create_user($data);
        } else {
            return $this->error;
        }
    }
}
?>
