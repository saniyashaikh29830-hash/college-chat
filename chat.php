<?php

$conn = mysqli_connect("localhost","root","12345@","college_chat");

if(!$conn){
    die("Database error");
}

$msg = strtolower(trim($_POST['message']));
$key = "";

/* ================== GREETINGS & HELP ================== */

if(preg_match("/\b(hi|hello|hey|hola|greetings)\b/", $msg)){
    echo "Hello! I am your College Assistant. How can I help you today? You can ask me about courses, fees, admissions, and more!";
    exit;
}

if(strpos($msg,"help")!==false || strpos($msg,"what can you do")!==false){
    echo "I can help you with information regarding: Admissions, Fees, Courses, Faculty, Facilities (Library, Canteen, Gym), and Campus locations. What would you like to know?";
    exit;
}

/* ================== KEYWORD MATCHING ================== */

if(strpos($msg,"name")!==false || strpos($msg,"college name")!==false){
    $key="name";
}

elseif(strpos($msg,"address")!==false || strpos($msg,"location")!==false || strpos($msg,"located")!==false){
    $key="address";
}

elseif(strpos($msg,"contact")!==false || strpos($msg,"phone")!==false || strpos($msg,"number")!==false){
    $key="contact";
}

elseif(strpos($msg,"website")!==false || strpos($msg,"site")!==false){
    $key="website";
}

elseif(strpos($msg,"institution")!==false || strpos($msg,"campus")!==false){
    $key="institutions";
}

elseif(strpos($msg,"floor")!==false || strpos($msg,"building")!==false){
    $key="floors";
}

elseif(strpos($msg,"course")!==false || strpos($msg,"program")!==false || strpos($msg,"degree")!==false){
    $key="courses";
}

elseif(strpos($msg,"admission")!==false || strpos($msg,"apply")!==false){
    $key="admission";
}

elseif(strpos($msg,"document")!==false || strpos($msg,"required")!==false){
    $key="documents";
}

elseif(strpos($msg,"fee")!==false || strpos($msg,"fees")!==false || strpos($msg,"cost")!==false){
    $key="fees";
}

elseif(strpos($msg,"scholarship")!==false){
    $key="scholarship";
}

elseif(strpos($msg,"department")!==false || strpos($msg,"stream")!==false){
    $key="departments";
}

elseif(strpos($msg,"computer")!==false || strpos($msg,"it lab")!==false){
    $key="computer lab";
}

elseif(strpos($msg,"science")!==false){
    $key="labs";
}

elseif(strpos($msg,"lab")!==false){
    $key="labs";
}

elseif(strpos($msg,"library")!==false || strpos($msg,"books")!==false){
    $key="library";
}

elseif(strpos($msg,"time")!==false || strpos($msg,"timing")!==false || strpos($msg,"hours")!==false){
    $key="timing";
}

elseif(strpos($msg,"teacher")!==false || strpos($msg,"faculty")!==false){
    $key="teachers";
}

/* IMPORTANT: staff room first */
elseif(strpos($msg,"staff room")!==false){
    $key="staff room";
}

elseif(strpos($msg,"staff")!==false || strpos($msg,"office staff")!==false){
    $key="staff";
}

elseif(strpos($msg,"facility")!==false || strpos($msg,"facilities")!==false){
    $key="facilities";
}

elseif(strpos($msg,"canteen")!==false || strpos($msg,"food")!==false){
    $key="canteen";
}

elseif(strpos($msg,"gym")!==false || strpos($msg,"gymkhana")!==false || strpos($msg,"sports")!==false){
    $key="gymkhana";
}

elseif(strpos($msg,"playground")!==false || strpos($msg,"ground")!==false){
    $key="playground";
}

elseif(strpos($msg,"wifi")!==false || strpos($msg,"internet")!==false){
    $key="wifi";
}

elseif(strpos($msg,"office")!==false || strpos($msg,"admin")!==false){
    $key="office";
}

elseif(strpos($msg,"washroom")!==false || strpos($msg,"toilet")!==false){
    $key="washroom";
}

elseif(strpos($msg,"activity")!==false || strpos($msg,"extra")!==false){
    $key="activities";
}

elseif(strpos($msg,"event")!==false || strpos($msg,"fest")!==false){
    $key="events";
}

elseif(strpos($msg,"sport")!==false){
    $key="sports";
}

elseif(strpos($msg,"club")!==false){
    $key="clubs";
}

/* ================== DEFAULT ================== */

else{
    echo "I'm sorry, I didn't quite catch that. Try asking about **admissions, fees, courses, or timings!**";
    exit;
}

/* ================== DATABASE FETCH ================== */

$stmt = mysqli_prepare($conn,"SELECT answer FROM info WHERE question=?");
mysqli_stmt_bind_param($stmt,"s",$key);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if($row = mysqli_fetch_assoc($result)){
    echo $row['answer'];
}else{
    echo "Data not available.";
}

?>