var uname, pass;
function validate() {
uname=document.getElementById("name").value;
    pass = document.getElementById("pass").value;

            if (uname.length == 0 || pass.length == 0) {
                alert("enter required fields");
            } else {
                if (pass.length > 8) {
                    alert("pass must contain below 8 chars");
                } else {
                   document.getElementById("myForm").action = "insert.php"; 
                }
            }
        }

var sub = document.getElementById("submit").onclick = validate;