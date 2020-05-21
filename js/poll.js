// Poll lock/unlock functions
function myFunction() {
    var x = document.getElementById('poll_status');
    if (x.innerHTML === 'Unlock') {
      x.innerHTML = 'Locked';
      x.style.color = 'rgb(181, 1, 1)';
    } else {
      x.innerHTML = 'Unlock';
      x.style.color = 'green';
    }
  }

// Add Button
function addOpt()
{
  document.getElementById('addOpt').style.display='none';
  document.getElementById('hideOpt').style.display='block';
  document.getElementById('dispOpt').style.display='block';
}

// Hide Button
function hideOpt()
{
  document.getElementById('addOpt').style.display='block';
  document.getElementById('hideOpt').style.display='none';
  document.getElementById('dispOpt').style.display='none';

}

// Add Option box or remove
function addopt(opt)
{
document.getElementById(opt).style.display='block';
if(opt=="opt3")
{
  document.getElementById('opt2add').style.display='none';
}
if(opt=="opt4")
{
  document.getElementById('opt3add').style.display='none';
  document.getElementById('opt3rem').style.display='none';
}
if(opt=="opt5")
{
  document.getElementById('opt4add').style.display='none';
  document.getElementById('opt4rem').style.display='none';
}
}

function delopt(opt)
{
document.getElementById(opt).style.display='none';
if(opt=="opt3")
{
  document.getElementById('opt2add').style.display='block';
}
if(opt=="opt4")
{
  document.getElementById('opt3add').style.display='block';
  document.getElementById('opt3rem').style.display='block';
}
if(opt=="opt5")
{
  document.getElementById('opt4add').style.display='block';
  document.getElementById('opt4rem').style.display='block';
}

}
