<?php

$conn = mysqli_connect("localhost","root","12345@","college_chat");

if(!$conn){
    die("Database error");
}

$msg = strtolower(trim($_POST['message']));
$key = "";

/* ================== GREETINGS & HELP ================== */

if(preg_match("/\b(hi|hello|hey|hola|greetings|yo)\b/", $msg)){
    echo "Hello! I am AskBunts, your College Assistant. How can I help you today? You can ask me about courses, fees, admissions, and more!";
    exit;
}

if(strpos($msg,"how are you")!==false){
    echo "I am fine, thank you!";
    exit;
}

if(strpos($msg,"who are you")!==false){
    echo "I am AskBunts, your College Assistant. How can I help you today? You can ask me about courses, fees, admissions, and more!";
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

/* ================== SPECIFIC FLOORS (check before general floor) ================== */
elseif(strpos($msg,"first floor")!==false){
    $key="first floor";
}

elseif((strpos($msg,"administrative office")!==false || strpos($msg,"admin office")!==false) || strpos($msg,"main staff room")!==false){
    $key="administrative office";
}

elseif(strpos($msg,"third floor")!==false){
    $key="third floor";
}

elseif(strpos($msg,"fourth floor")!==false || strpos($msg,"4th floor")!==false){
    $key="fourth floor";
}

elseif((strpos($msg,"computer lab")!==false && strpos($msg,"location")!==false) || strpos($msg,"4th floor")!==false && strpos($msg,"computer")!==false){
    $key="computer labs location";
}

elseif((strpos($msg,"medical room")!==false || strpos($msg,"medical")!==false && strpos($msg,"fourth")!==false)){
    $key="medical room";
}

elseif(strpos($msg,"fifth floor")!==false || strpos($msg,"5th floor")!==false){
    $key="fifth floor";
}

elseif(strpos($msg,"asjc")!==false || (strpos($msg,"administrative office")!==false && strpos($msg,"asjc")!==false)){
    $key="administrative office asjc";
}

elseif(strpos($msg,"sixth floor")!==false || strpos($msg,"6th floor")!==false){
    $key="sixth floor";
}

elseif(strpos($msg,"rph")!==false){
    $key="rph";
}

/* ================== GENERAL FLOOR ================== */
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