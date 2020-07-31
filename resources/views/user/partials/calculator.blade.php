@extends('user/home')

@section('container')

<div class="right_col" role="main">
 <!-- form input knob -->
 <div class="col-md-12">
    <div class="container">

        <br>
        <h5 class="row justify-content-center"> Currency Conventor(Calculatrice)</h5>
        <br>
         <div class="alert alert-success">

             Convert devise in your currency ( convertissez une devise en votre monnaie)

         </div>
         <div class="card">

              <div class="card-body">

                 <div class="row ">
                     
                 <label>Monnaie </label>
                    <select type="number" class="form-control" id="monnaie"  name="devise" value="$"> 
                               
                            <option value="XOF">XOF</option>
                            <option  value="$">$</option>

                    </select> 
                
                    
                    <label>Devise </label>
                    <select type="number" class="form-control" id="devise"  name="devise" value="$"> 
                               
                               <option value="$">$</option>
                               <option  value="XOF">XOF</option>
   
                       </select> 
                   </div>
                  
                  
                     <label>Montant</label>
                     <input type="number" class="form-control" id="devicy">
                     <br>
                     <br>
                     <span id="montant"></span>

              </div>
         </div>

    </div>

</div>
</div>

<script>

var monnaie =document.getElementById('monnaie');
var devise=document.getElementById('devise');
var responce=document.getElementById('devicy');
var montant=document.getElementById('montant');
var val=null;
var calcule=null;

var calcule=function(monnaie,devise,montant){

   var calcule=null;
   if(monnaie=="$"){
            if(devise=="XOF"){
               calcule=montant*600;
            }
   }else{
         if(monnaie=="XOF"){
            if(devise=="$"){
                calcule=montant/600;           
          }
   }
   }
   return "<div class='alert alert-success'> <b>"+montant+monnaie+"  =  "+calcule+devise+"</b></div>";
}

monnaie.addEventListener('click',()=>{

    devise.addEventListener('click',()=>{
  
        responce.addEventListener('keyup',()=>{
               
                montant.innerHTML=calcule(monnaie.value,devise.value,responce.value);
                
        });
         
    });

});










</script>

@stop