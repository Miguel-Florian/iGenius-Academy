let link = document.querySelectorAll("li a[href='#']");
  console.log(link)
    $("#dashboard").click(function(e){
        $(".informations").load("../includes/content.php");
        let dash = document.querySelector("#dashboard");
        if(dash.classList.contains("active")){
            dash.classList.remove("active")
        }else{
            dash.classList.add("active")
        }
    })
    $("#requete").click(function(e){
        $(".informations").load("../includes/requete.php");
        let req = document.querySelector("#requete");
        if(req.classList.contains("active")){
            req.classList.remove("active")
        }else{
            req.classList.add("active")
        }
    })
    $("#notes").click(function(e){
        $(".informations").load("../includes/note.php");
        let note = document.querySelector("#notes");
        if(note.classList.contains("active")){
            note.classList.remove("active")
        }else{
            note.classList.add("active")
        }
    })
    $("#cours").click(function(e){
        $(".informations").load("../includes/cour.php");
        let cour = document.querySelector("#cours");
        if(cour.classList.contains("active")){
            cour.classList.remove("active")
        }else{
            cour.classList.add("active")
        }
    })
    $("#inscription").click(function(e){
        $(".informations").load("../includes/ins-aca.php");
        let ins = document.querySelector("#inscription");
        if(ins.classList.contains("active")){
            ins.classList.remove("active")
        }else{
            ins.classList.add("active")
        }
    })
    $("#message").click(function(e){
        $(".informations").load("../includes/communique.php");
        let message = document.querySelector("#message");
        if(message.classList.contains("active")){
            message.classList.remove("active")
        }else{
            message.classList.add("active")
        }
    })
    $("#help").click(function(e){
        $(".informations").load("../includes/help.php");
        let help = document.querySelector("#help");
        if(help.classList.contains("active")){
            help.classList.remove("active")
        }else{
            help.classList.add("active")
        }
    })
    $("#lock").click(function(e){
        $(".informations").load("../includes/logout.php");
        let lock = document.querySelector("#lock");
        if(lock.classList.contains("active")){
            lock.classList.remove("active")
        }else{
            lock.classList.add("active")
        }
    })
   
