function compte_a_rebours()
{

  var bid=document.getElementById('bid');
  
  var ask=document.getElementById('ask');
  
  var bid_value=Math.random().toPrecision(4);
  var ask_value=Math.random().toPrecision(4);
  
  bid.innerHTML=bid_value;
  ask.innerHTML=ask_value;


 




  var actualisation = setTimeout("compte_a_rebours();", 1000);


};




compte_a_rebours();