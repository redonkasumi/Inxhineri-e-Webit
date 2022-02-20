
var place = ["New York", "Berlin", "Paris"];
var s = [/new\s*york/i, /berlin/i, /paris/i];
var startDate;
var endDate;
var guests;


function start() {
  var enterButton = document.getElementById("button1");
  enterButton.addEventListener("click", load, false);
}

function load() {

  var isgood = false;
  var isnotempty = false;
  search_value = document.getElementById("myInput").value;
  startDate = document.getElementById("myDate1").value;
  sessionStorage.setItem("startDatetext", startDate);
  endDate = document.getElementById("myDate2").value;
  sessionStorage.setItem("endDatetext", endDate);
  guests = document.getElementById("myInput2").value;
  sessionStorage.setItem("guestsText", guests);
  sessionStorage.setItem("numdays", getDays());


  var a = search_value.match(/[1-4]/g);
  console.log(a);

  for (var i in s) {
    if (s[i].test(search_value) && !(typeof a != "undefined" && a != null
      && a.length != null && a.length > 0)) {
      var k = search_value.replace(s[i], place[i]);
      sessionStorage.setItem("placeText", k);
      isgood = true;
    }
  }


  //  for (var i in s) {
  //    if(search_value.match(s[i])!=""){
  //       var k=search_value.replace(s[i],place[i]);
  //       sessionStorage.setItem("placeText",k); 
  //       isgood=true;
  //    }
  // }

  if (startDate != "" && endDate != "" && guests.toString() != "") {
    isnotempty = true;
  }

  if (isgood) {
    console.log(isnotempty);
    if (isnotempty) {
      if (isSmaller()) {
        window.location.href = "places.html";
      }
      else {
        window.alert("Start date must be smaller");
      }
    }

    else {
      window.alert("A field is empty");
    }
  }
  else {
    window.alert("There is no " + search_value + " in this website");
  }


  //var obj=new SDate();

  //document.getElementById("demo").innerHTML = obj.getStartDate();


  // document.getElementById("demo").innerHTML = search_value;

  //window.location.href="ushtrime2.html";
}




function convertDateToString(date) {
  try {
    var dateArr = date.split('-');
    var dateString;

    if (dateArr.length > 1) {
      dateString = (dateArr[2] + '/' + dateArr[1] + '/' + dateArr[0]);
    }
  }
  catch (e) {
    console.log("Error, the value is null or undefined!")
  }
  return dateString;
}


function getDays() {
  var Difference_In_Time = (new Date(endDate)).getTime() - (new Date(startDate)).getTime();
  var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
  if(Number.isFinite(Difference_In_Days)){
  return Difference_In_Days + 1;}
  else{
    console.warn("To many days");
  }
}


function isSmaller() {
  return (new Date(startDate)) <= (new Date(endDate));
}

function getStartDate() {
  return startDate;
}




window.addEventListener("load", start, false);








