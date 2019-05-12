<script type="text/javascript">
//Global Variables
var valuechange = new Array();
valuechange["A1"] = 1;
valuechange["A2"] = 1;
valuechange["A3"] = 1;
valuechange["A4"] = 1;

function count()
{
  var clickedtotal = 0;
  var clickedone = document.forms["formcheck"]["seat"];

  for (var i = 0; i < clickedone.length; i++)
  {
    if (clickedone[i].checked)
        clickedtotal += valuechange[clickedone[i].value]
  }

  document.getElementById("counter").value = clickedtotal;
if(clickedtotal<1){{Session::flash ('alert("choice your seat first")');

}//End of function getRealisticCareer()
</script>
