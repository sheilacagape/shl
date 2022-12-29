$(document).ready(function(){
   $(document).ajaxStart(function(){
        $("#wait").css("display", "block");
      });
      $(document).ajaxComplete(function(){
        $("#wait").css("display", "none");
      });

    $("#farms").click(function(){
        $("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/main/getFarm");
    });

    $("#tspots").click(function(){
        $("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/main/getTspots");
    });

    $("#tspots").click();

    $("#feeds").click(function(){
        $("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/main/getFeeds");
    });

    $("#oprof").click(function(){
        var today = new Date();
        var year = today.getFullYear();
        $("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/main/getFeeds",{date:year});
    });

    $("#mforms").click(function(){
        $("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/main/getForms");
    });

    $("#routes").click(function(){
        $("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/route/routes");
    });

    $("#acuchart").click(function(){
        $("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/main/getCharts");
    });

    $("#trash").click(function(){
        $("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/main/getTrash");
    });

    $("#listvehicle").click(function(){
        $("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/main/getVehicle");
    });

    
    $("#listbldg").click(function(){
        $("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/main/getBuilding");
    });


    $('.nav-list').on('click','a',function(){
        $('.nav-list a.active').removeClass('active');
        $(this).addClass('active');
     });

     $("[data-fancybox]").fancybox();
    
});

$(document).ready(function(){
    const firstFarm = document.querySelector('.farmSite').getAttribute('id').split("_")[0];
    $("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/main/getonefarm",{id:firstFarm});

    $('.farmSite').on('click', function(){
        farm_id = $(this).attr("id");
        const splitString = farm_id.split("_")[0];
        $("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/main/getonefarm",{id:splitString});

    });

    $("#trashh").click(function(){
        $("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/main/getTrash");
    });
     
});