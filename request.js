
//Add Book Request To Server
var form = document.getElementById('form');
form.onsubmit = (e)=>{
    e.preventDefault();
}
var text = document.getElementsByClassName('text');
function AddBook() {
    var xhr = new XMLHttpRequest();
    xhr.open("POST","./automate.php",true);
    xhr.onload = ()=>{
        if (xhr.status === 200 && xhr.readyState === 4) {
            var data = xhr.responseText;
            alert(data);

            for (let k = 0; k < text.length; k++) {
                var input = text[k].getElementsByTagName('input')[0];
                input.value = "";
                
            }
        }
    }
    var formdata = new FormData(form);
    xhr.send(formdata);
}
