/*select regions*/
$(document).ready(function(){
    $('[id*=reg_').hover(function(){    
      
        let reg=$(this);
        let regId=$(this)["0"].id;
        let allReg=$('[id*=reg_'); 
       
        /*on click all regions are white 
        selected region is blue*/
        // $(reg).css("background-color", "yellow");
        // allReg.css('fill','#3d6abe');
        allReg.css('fill','#3d6abe');
        reg.css('fill','orange')  

        regId=regId.replace('reg_',''); 
              
       let boucle=true;

       do{
        regId=regId.replace('_',' ');
        if(regId.indexOf('_')==-1 )
        boucle=false; 
       }while(boucle);
       $('#infosRegion').text(regId);
       console.log(regId); 
    })
})



/* click region */
$(function(){
    $('[id*=reg_').on('click',function()
    {    

        // let reg=$(this);
        // let regId=$(this)["0"].id;
        // let allReg=$('[id*=reg_'); 
       
        // /*on click all regions are white 
        // selected region is blue*/

        // allReg.css('fill','#3d6abe');
        // reg.css('fill','orange')

    //     regId=regId.replace('reg_','');       
    

    //    let boucle=true;

    //    do{
    //     regId=regId.replace('_',' ');
    //     if(regId.indexOf('_')==-1 )
    //     boucle=false; 
    //    }while(boucle);
    //    $('#infosRegion').text(regId);
    //    console.log(regId); 
    })
})