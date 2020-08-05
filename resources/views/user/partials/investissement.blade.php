@extends('user/home')

@section('container')


<div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                       
                        
                    </div>
                    <div class="clearfix"></div>


                    <div class="alert alert-danger">

                    the trasaction must be done after the choice of your investment plan (la trasaction doit se faire après le choix de votre plan d'investissement)
                    
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                
                                <div class="x_content">
                                    <form class="" action="" method="post" >
                                        
                                         
                                        <h2>Choose your pack (choisissez votre pack)</h2>
                                        <br>
                                        <br>

                                        @csrf
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Pack<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="row">
                                                <h6 class="col-md-3">Sponsorship: (Parrainage)<input    type="radio" id="parainage"name="pack" value="parainage"  /> </h6>
                                                <h6 class="col-md-3">Crew (Association):<input  type="radio" id="association" name="pack" value="association" /></h6>
                                                <h6  class="col-md-3">Hour (Heure):<input   type="radio" name="pack" id="heure" value="heure" /></h6>
                                                <h6  class="col-md-3">Day ( Jours 100% ):<input   type="radio" name="pack" id="day" value="day" /></h6>
                                                
                                               </div>
                                                
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Montant(Account)<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                               <select class="form-control" id="montant"  name="montant" required>
                                                   <option></option>
                                                   <option></option>
                                               </select></div>
                                        </div>

                                        
                                        <br>
                                        <br>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Time (durée)<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control" id="duree" name="duree" required>
                                                   <option></option>
                                                   <option></option>
                                               </select>
                                                </div>
                                        </div>
                                        <br>
                                        <br>

                                            <div id="person" name="personne" class="col-md-6 offset-md-3">
                                           

  


                                            </div>

                                            

                                            <div class="form-group">


                                            
                                                <div class="col-md-6 offset-md-3">
                                                   
                                                <br>
                                                <br>
                                                <br>
                                           
                                                    <button type='submit' class=" col-md-12 btn btn-success">Submit</button>
                                                    
                                                </div>
 
                                            </div>  
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>

                var referal=document.getElementById('parainage');
                var crew=document.getElementById('association');
                var heure=document.getElementById('heure');
                var  montant=document.getElementById('montant');
                var duree=document.getElementById('duree');
                var person=document.getElementById('person');
                var day=document.getElementById('day');

                crew.addEventListener('click',()=>{
                    montant.innerHTML="<select class=\"form-control\" id=\"montant\"><option value='500000'>500.000 (835$) </option><option value='1000000'>1.000.000 (1667$)</option><option value='1500000'>1.500.000 (2500$) </option><option value='2000000'>2.000.000 (3334$)</option><option value='3000000'>3.000.000 (5000$)</option></select>"
                    montant.addEventListener('click',()=>{

                         if(montant.value=="500000"){
                              person.innerHTML="<select class=\"form-control\" id=\"person\" name='personne'><option value='5'>5 personnes</option></select>"
                         }
                         if(montant.value=="1000000" ){
                            person.innerHTML="<select class=\"form-control\" id=\"person\" name='personne'><option value='10'>10 personnes</option></select>"
                        }
                        if(montant.value=="1500000"  ){
                            person.innerHTML="<select class=\"form-control\" id=\"person\" name='personne'><option value='15'>15 personnes</option></select>"
                        }
                        if(montant.value=="2000000"  ){
                            person.innerHTML="<select class=\"form-control\" id=\"person\" name='personne'><option value='20'>20 personnes</option></select>"
                        }
                        if(montant.value=="3000000"  ){
                           person.innerHTML="<select class=\"form-control\" id=\"person\" name='personne'><option value='25'>25 personnes</option></select>"
                        }
                    })
                    duree.innerHTML="<select class=\"form-control\" name='duree' id=\"duree\"><option value='14'>14 jours (days) </option></select>"
                });


                heure.addEventListener('click',()=>{

                    person.innerHTML="";
                   montant.innerHTML="<select name=\"montant\" class=\"form-control\" id=\"montant\"><option value='300000'>300.000 (500$)</option><option value='500000'>500.000 (835$)</option><option value='800000'>800.000 (1335$)</option><option value='1200000'>1.200.000 (2000$)</option><option value='1500000'>1.500.000 (2500$) </option><option value='2000000'>2.000.000 (3335$)</option></select>"
                   duree.innerHTML="<select class=\"form-control\" name=\"duree\" id=\"duree\"><option value='6'>6 heures (hours) </option><option value='12'>12 heures (hours) </option><option value='24'>24 heures (hours) </option></select>"
                   montant.addEventListener('click',()=>{

                    if(montant.value=="500000"){
                        person.innerHTML=""
                    }
                    if(montant.value=="300000"){
                        person.innerHTML=""
                    }
                    if(montant.value=="800000"){
                        person.innerHTML=""
                    }
                    if(montant.value=="1000000" ){
                    person.innerHTML=""
                    }
                    if(montant.value=="1200000"  ){
                    person.innerHTML=""
                    }
                    if(montant.value=="1500000"  ){
                    person.innerHTML=""
                    }
                    if(montant.value=="2000000"  ){
                    person.innerHTML=""
                    }
                    })

                });

                day.addEventListener('click',()=>{


                
                   montant.innerHTML="<select name=\"montant\" class=\"form-control\" id=\"montant\"><option value='2000000'>2.000.000 (3335$)</option><option value='1000000'>1.000.000 (1667$)</option><option value='500000'>500.000 (835$) </option><option value='300000'>300.000 (500$)</option><option value='200000'>200.000 (335$) </option><option value='100000'>100.000 (167$)</option></select>"
                   duree.innerHTML="<select  name=\"duree\" class=\"form-control\" id=\"duree\"><option value='7'>7 jours (days) </option></select>"
                   person.innerHTML="";
                   montant.addEventListener('click',()=>{

                    if(montant.value=="500000"){
                        person.innerHTML=""
                    }
                    if(montant.value=="100000"){
                        person.innerHTML=""
                    }
                    if(montant.value=="300000"){
                        person.innerHTML=""
                    }
                    if(montant.value=="1000000" ){
                    person.innerHTML=""
                    }
                    if(montant.value=="1500000"  ){
                    person.innerHTML=""
                    }
                    if(montant.value=="2000000"  ){
                    person.innerHTML=""
                    }
                    if(montant.value=="3000000"  ){
                    person.innerHTML=""
                    }
                    })
                });
            </script>



@stop