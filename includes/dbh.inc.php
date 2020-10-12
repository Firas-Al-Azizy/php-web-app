<?php
$server = "localhost";
$username = "hussein";
$password = "hussein";
$dbname = "babab";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (!$conn) {
    die("connection failed" . mysqli_connect_error());
}
$mysqli = new mysqli($server, $username, $password, $dbname);



/***************** *
 ***************
 **************
    checkout an example on article page from line: 100 to know 
    how to work with these functions
 **************
 ***************
 ******************** */

//remeber to write $mysqli->close(); after using functions that
//returns objects or arrays




//@DESC GETS THE USER ROW FROM THE DATABASE
//@COLUMNS  uid , username , email , password ,pic
function getCurrentUser($mysqli)
{
    if (isset($_COOKIE["id"])) {
        $id = $_COOKIE['id'];
        $select = "select * from users where uid =$id";

        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }
        $res = $mysqli->query($select);
          if ($res->num_rows > 0) {
        return $res;
    }
    }
}
function getSignedupUser($mysqli, $username, $email)
{

    $select = "select * from users where username = '$username' && '$email'";

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    $res = $mysqli->query($select);
    if ($res->num_rows > 0) {
        return $res;
    }
}
//@DESC GETS THE USER ROW FROM THE DATABASE WITH ID
//@COLUMNS  uid , username , email , password ,pic
function getUserWithID($mysqli, $id)
{

    $select = "select * from users where uid =$id";

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    $res = $mysqli->query($select);
    return $res->num_rows > 0 ? $row = $res->fetch_assoc() : "mysql error or user dosent exist";
    //if it returns false it means there were an error
    //ECHO THIS TO SHOW ERROR $res->error
}
//@DESC GETS ARTICLES WITH LIMIT
//@COLUMNS  id , uid , author , content , title
//@USEFUL LINK FOR PAGINATION https://www.myprogrammingtutorials.com/create-pagination-with-php-and-mysql.html
function getArticlePage($mysqli, $id, $limit)
{

    $select = "select * from article where id = $id  limit $limit";

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    } else {
        $res = $mysqli->query($select);

        return $res->num_rows > 0 ? $row = $res->fetch_assoc() : false;
    }
}
//@DESC ADD Article
//@COLUMNS  `date_published`, `author`, `title`, `content`, `id`, `uid` 
//@DESC THE UID CAN BE BROUGHT THROUGH COOKIES 
function addArticle($mysqli, $uid, $timestamp, $author, $title, $content)
{

    $select = "INSERT INTO `article`(`date_published`, `author`, `title`, `content`,  `uid`) VALUES ($timestamp , $author , $title , $content , $uid )";

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    } else {
        return  $mysqli->query($select) === TRUE ? true : false;
    }
}
//@DESC GETS THE ARTICLE FROM THE DATABASE
//@COLUMNS  id , uid , author , content , title , timestamp
function getArticle($mysqli, $id)
{

    $select = "select * from article where id = $id";

    if ($mysqli->connect_error) {

        die("Connection failed: " . $mysqli->connect_error);
    } else {
        $res = $mysqli->query($select);

        $res = $mysqli->query($select);
        if ($res->num_rows > 0) {
            return $res;
        }
    }
}


//@DESC DELETES USER FROM THE DATABASE
function deleteUser($mysqli, $uid)
{

    $select = "delete from users where uid =$uid";

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    } else {
        return  $mysqli->query($select) === TRUE ? true : false;
    }
}

//@DESC ADD COMMMENT
//@COLUMNS  comment_id , article_id , uid , timestamp [can-be-null]
//@DESC THE UID AND ARTICLE CAN BE BROUGHT THROUGH COOKIES 
function addComment($mysqli, $uid, $article_id, $content, $timestamp)
{

    $select = "insert into(`uid`, `comment_id`, `article_id`, `content`, `timestamp`) comments ($uid , $article_id , $content , $timestamp )";

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    } else {
        return  $mysqli->query($select) === TRUE ? true : false;
    }
}
//@DESC GET COMMENTES
//@COLUMNS  comment_id , article_id , uid , timestamp [can-be-null]

function getCommentes($mysqli, $article_id)
{

    $select = "select comments.comment_id , comments.content , comments.timestamp , comments.uid from article left join comments on article.id = comments.article_id where article.id = $article_id";
    //this will result with the c
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    } else {
        $res = $mysqli->query($select);
        if ($res->num_rows > 0) {
            return $res;
        }
    }
}
