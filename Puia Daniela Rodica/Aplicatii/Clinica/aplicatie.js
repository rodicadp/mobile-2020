// get modal element
var modal=document.getElementById('simpleModal');
//get open modal button
var modalBtn=document.getElementById('modalBtn');
//get clode button
var closeBtn=document.getElementsByClassName('closeBtn')[0];

//listen for open click
modalBtn.addEventListener('click',openModal);

//listen for clode click
closeBtn.addEventListener('click',closeModal);

//outside click
window.addEventListener('click', Outsideclick);

//functia de deschidere
function openModal(){
    modal.style.display='block';
}

//functia de inchidere
function closeModal(){
    modal.style.display='none';
}

//functia de inchidere - outside click
function Outsideclick(e){
    if(e.target == modal){
    modal.style.display='none';
}
}
