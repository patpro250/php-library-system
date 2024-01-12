var form = document.getElementsByClassName('col2')[0];
form.onsubmit = function(Event){
    Event.preventDefault();
}
var btn = document.getElementsByClassName('btn0')[0];
btn.onclick = () =>{
    var xhr = new XMLHttpRequest();
    xhr.open('post','./authorise.php',true);
    xhr.onload = () =>{
        if (xhr.status === 200 && xhr.readyState === 4) {
            var data = xhr.responseText;
            var text = form.getElementsByClassName('text');
            for(let k=0; k < text.length; k++){
                var inputs = text[k].getElementsByTagName('input')[0];
                inputs.value = "";
            }
            if(data == "code04"){
                location.href = "./admin.php";
            }else{
               alert(data); 
            }
            
        }
    }
    var formData = new FormData(form);
    xhr.send(formData);
}