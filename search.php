$search = $_POST['findMe'];
//$search = "example";//THIS WOULD WORK, BUT I WAS SHOWING HOW TO USE FORM

//IF WORD FOUND IN HOME PAGE
if (stripos($home, $search) !== false) {//USING EXAMPLE.COM TO SHOW IT WORKS
    echo '<a href="'.$index.html.'">'.$index.html.'</a>';
}
