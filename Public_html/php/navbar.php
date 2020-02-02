<nav>
    <a href= "index.php">Homepage</a>
    <a href= "Information.php"> More about me </a>
    <a href= "Friends.php"> School </a>

    <div class= "extra">
        <a href="CV.php">My CV</a>
        <a href="Pta.php">PTA and PTB</a>
        <a href="grading.php">Grading sheet!</a> 
    </div>
</nav>
<script>
var root = document.URL
var text = root.split("/")[root.split("/").length - 1]
var a = document.querySelectorAll("nav a")

switch(text) {
  case "index.php":
    a[0].classList.add("active")
    break;
  case "Information.php":
    a[1].classList.add("active")
    break;
  case "Friends.php":
    a[2].classList.add("active")
    break;
  case "CV.php":
    a[3].classList.add("active")
    break;
  case "Pta.php":
    a[4].classList.add("active")
    break;
  case "grading.php":
    a[5].classList.add("active")
    break;
  default:
    a[0].classList.add("active")
}
</script>