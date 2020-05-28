<?php

if(!empty($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = '';
}

// FOR CREATE
if(isset($_POST['create'])) {
    $id = time();
    $name = trim($_POST["name"]);
    $phone = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $relationship = trim($_POST["relationship"]);
    $save_info = trim($_POST["save_info"]);
    $gender = trim($_POST["gender"]);

    $contacts_data = [
        $id,
        $name,
        $phone,
        $email,
        $relationship,
        $save_info,
        $gender
    ];
    $handle_contacts = fopen('./database/contacts.csv', 'a+');
    fputcsv($handle_contacts, $contacts_data);
    fclose($handle_contacts);


    // $read_contacts = fopen('./database/contacts.csv', 'r');
    // $result = [];
    // while (!feof($read_contacts)) {
    //     $result[] = fgetcsv($read_contacts, 1000, ",");
    // }
    // array_shift($result);

    // fclose($read_contacts);
    // // var_dump($result);
    // foreach ($result as $line) {
    //     var_dump($line);
    // }
}


// CONTACTS
$handle_contacts = fopen('./database/contacts.csv', 'r');
$contacts = [];
while(!feof($handle_contacts)) {
    $contacts[] = fgetcsv($handle_contacts);
}
fclose($handle_contacts);
array_shift($contacts);

// RELATIONSHIP
$handle_relationship = fopen('./database/relationship.csv', 'r');
$relationship = [];
while(!feof($handle_relationship)) {
    $relationship[] = fgetcsv($handle_relationship);
}
fclose($handle_relationship);
array_shift($relationship);

// SAVE INFO
$handle_save_info = fopen('./database/save_info.csv', 'r');
$saveinfo = [];
while(!feof($handle_save_info)) {
    $saveinfo[] = fgetcsv($handle_save_info);
}
fclose($handle_save_info);
array_shift($saveinfo);

// GENDER
$handle_gender = fopen('./database/gender.csv', 'r');
$gender = [];
while(!feof($handle_gender)) {
    $gender[] = fgetcsv($handle_gender);
}
fclose($handle_gender);
array_shift($gender);



// // // FOR UPDATE
// if(isset($_POST["update"])) {
//     $id = time();
//     $update_name = trim($_POST["update_name"]);
//     $update_phone = trim($_POST["update_name"]);
//     $update_email = trim($_POST["update_email"]);
//     $update_relationship = trim($_POST["update_relationship"]);
//     $update_save_info = trim($_POST["update_save_info"]);
//     $update_gender = trim($_POST["update_gender"]);

//     $update_contacts_data = $id.",".$update_name.",".$update_phone.",".$update_email.",".$update_relationship.",".$update_save_info.",".$update_gender;
//     $handle_contacts = fopen('./database/contacts.csv', 'a+');
//     $update = [];
    
//     while (!feof($handle_contacts)) {
//         $result[] = fgetcsv($handle_contacts);
//     }
//     foreach ($result as $line) {
//         var_dump($line);
//         if (in_array($line[0], $update_name)){
//             $update_name[] = $line[0];
//         }
//     }

//     fputcsv($handle_contacts, explode(",", $update_contacts_data));
//     fclose($handle_contacts);
// }

// FOR DELETE
if(isset($_POST["delete"])) {
        $handle_contacts = fopen('./database/contacts.csv', 'a+');
        $delete = [];

        while (!feof($handle_contacts)) {
            $delete[] = fgetcsv($handle_contacts);
            foreach ($handle_contact as $line) {
                $line = " ";
            }
        }
        $delete = [];

    fclose($handle_contacts);
}
