 function total() {
    var table = document.getElementById("trips");

    //sum the cols
    var i = 1;
    var sum = 0;
    while (i !== 5) {
        for (var j = 0; j < 10; j++) 
            sum +=this.parseInt(table.rows[j + 1].cells[i].innerHTML);
        
        document.getElementById("total").cells[i].innerHTML = sum//.toExponential();
        sum = 0;

        i++;
    }

}


function avgRate(){
    var stars=document.querySelectorAll(".prog");
    var sum=0;
    var avg=0;
    var count=5;
    for(var i=0; i<stars.length;i++){
        sum += parseInt(stars[i].innerHTML);
        avg += parseInt(stars[i].innerHTML)*count;
        count--;
    }
    console.log(sum);
    const average=(avg/sum).toFixed(2);
    document.getElementById("average").innerHTML="Average based on reviews: "+average;
}

window.onload=function(){
    total();
    avgRate();
}

