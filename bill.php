<html>
<body>
YEAR : <input type="text" id="year_get"><br>
MONTH : <input type="text" id="month_get"><br>
<input type="button" id="subtn"value="Display Calender" onclick="generate()"><br>
<div id="content"></div>
</body>
<script>
function generate()
{
var init_content = "<table BORDER=1
id='calender'><tr><th>Sun</th><th>Mon</th><th>Tue<th>Wed/th><th>Thu</th>
<th>Fri</th><th>Sat</th></tr><tr>;
var year_get = document.getElementById("year_get").value;
var month_get = document.getElementById("month_get").value;
month_get -=1;
var date = new Date(year_get,month_get);
var day = date.getDay();
for (var i = 0; i &lt; day; i++)
{
init_content += "<td></td>";
}
while (date.getMonth() == month_get)
{
init_content += "<td>"+ date.getDate() + "</td>";
if (date.getDay() == 6)
{
init_content +="</tr><tr>";
}

20MCA133 WEB PROGRAMMING LAB Dept. of Computer Applications

Amal Jyothi College of Engineering Kanjirappally 15
date.setDate(date.getDate() + 1);
}
init_content += "</table>";
document.getElementById("content").innerHTML = init_content;
}
</script>
</html>