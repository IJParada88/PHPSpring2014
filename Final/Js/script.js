/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// XML HTTP Request
var xhRequest = new XMLHttpRequest();

xhRequest.onreadystatechange = function() { 
    if ( xhRequest.readyState === 4 && xhRequest.status === 200 ) {  
        callback();  
   } 
};  

var websiteField = document.querySelector('#website');
var websiteInfo = document.querySelector('.websitetaken');

websiteField.addEventListener('blur',makeAJAXCall);


function makeAJAXCall(){
       
    xhRequest.open('POST', 'websitetaken.php', true);
    xhRequest.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    xhRequest.send('website='+websiteField.value);

}


function callback() {
        var response = JSON.parse(xhRequest.responseText);  

        websiteInfo.innerHTML = response.taken;
       
}


