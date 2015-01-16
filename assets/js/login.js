function tabHandler(object){
//  console.log(object.href);
  var parent = object.parentNode  ; //ini LI
  var ulParent = parent.parentNode; //ini UL
  
  var active = ulParent.querySelector('li.active');
  
  active.className = "";
  parent.className= "active";
  
  var tabTarget = document.querySelectorAll('.tab-target');
  
  for(i=0;i<tabTarget.length;i++){
    tabTarget[i].style.display='none';
  }
  
  var href = object.href.split('#'); 
  var target = href[1];
//  
  document.querySelector('#'+target).style.display = "block";
  // '#'+target = #register
}