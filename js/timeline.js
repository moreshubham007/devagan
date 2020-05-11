// Add Friend
function addFri(nf,task) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("addf"+nf+task).innerHTML = this.responseText;
      var delr=document.getElementById("addf"+nf+task).innerHTML;
      if(delr == "Deleted")
      {
        document.getElementById("delreq").style.display="display";
      }
    }
  };
  xhttp.open("POST", "php/timeline/addfriend.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("fid="+nf+"*"+task);

  if(task=="delete")
  {
    document.getElementById("addf"+nf+"confirm").style.display='none';
  }
}


// Friend request and approve
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
// document.getElementById("defaultOpen").click();

// comments
function comment(pid,action) {
  var xhttp = new XMLHttpRequest();
  var comm=document.getElementById("inputComment"+pid).value;
  var sr=document.getElementById("updateComm"+pid).value;
  if(comm!="" || sr!="" )
  {
    if(action=="post")
    {
      document.getElementById('delComm'+pid).style.display="block";
      document.getElementById('updateComm'+pid).style.display="block";
      document.getElementById('postComm'+pid).style.display="none";
      document.getElementById('userComm'+pid).style.display="block";
    }
    if(action=="delete")
    {
      document.getElementById('delComm'+pid).style.display="none";
      document.getElementById('updateComm'+pid).style.display="none";
      document.getElementById('postComm'+pid).style.display="block";
    }
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("shComm"+pid).innerHTML = this.responseText;
        // document.getElementById("commentb"+pid).innerHTML="update";
        // document.getElementById("commentd"+pid).style.display="block";
        // document.getElementById("shimgs"+pid).style.display="block";        
      }
    };
    xhttp.open("POST", "php/timeline/comment.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("pid="+pid+"&action="+action+"&comment="+comm+"&sr="+sr);
  }
  else
  {
    alert("Comment box won't be empty");
  }
}