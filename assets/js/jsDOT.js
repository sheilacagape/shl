$(document).ready(function(){
   $(document).ajaxStart(function(){
        $("#wait").css("display", "block");
      });
      $(document).ajaxComplete(function(){
        $("#wait").css("display", "none");
      });

    
    $("#forms").click(function(){
        $("#reloadDiv").load("http://"+window.location.host+"/shl/main/getAllForms");
    });

    $("#forms").click();

    $("#openforms").click(function(){
        $("#reloadDiv").load("http://"+window.location.host+"/shl/main/getOpenForms");
    });

    $("#openforms").click();  

    $("#prevresponses").click(function(){
        $("#reloadDiv").load("http://"+window.location.host+"/shl/main/getVehicle");
    });
    
    $("#responses").click(function(){
        $("#reloadDiv").load("http://"+window.location.host+"/shl/main/getAllResponses");
    });

    $("#panelists").click(function(){
        $("#reloadDiv").load("http://"+window.location.host+"/shl/main/getAllPanelists");
    });
    
    $('.nav-list').on('click','a',function(){
        $('.nav-list a.active').removeClass('active');
        $(this).addClass('active');
     });

     $("[data-fancybox]").fancybox();
    
});

$(document).ready(function(){
    const firstFarm = document.querySelector('.farmSite').getAttribute('id').split("_")[0];
    $("#reloadDiv").load("http://"+window.location.host+"/shl/main/getonefarm",{id:firstFarm});

    $('.farmSite').on('click', function(){
        farm_id = $(this).attr("id");
        const splitString = farm_id.split("_")[0];
        $("#reloadDiv").load("http://"+window.location.host+"/shl/main/getonefarm",{id:splitString});

    });

    $("#trashh").click(function(){
        $("#reloadDiv").load("http://"+window.location.host+"/shl/main/getTrash");
    });
     
});