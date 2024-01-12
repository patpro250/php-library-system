//  DompDf Data Sending
function ExportPdf() {
    var data = Number(prompt("Enter Start ID:"));
    if (!data) {
        alert("Please No data Entered!");
}else{
    // Ajax Requests To ExportPdf.php
           location.href ="./export.php?data="+data;
        }

}