$(function () {


  var blabber_check=0;

  var db = [ ["what","your","name"],
             ["hello"],
             ["hey"],
             ["there"],
             ["hi"]


           ];

  var answers = [ ["Baymax","Personal Assistant , .. , on health care "],
                  ["yes","hi","hello","ask me ","I am always here"],
                  ["yes","hi","hello","ask me ","I am always here"],
                  ["yes","hi","hello","ask me ","I am always here"],
                  ["yes","hi","hello","ask me ","I am always here"]

               ];
  var close=3;

  var machineName = "Baymax";
  $(".status-text").hide();
  function addMessage(message, author, machine) {
    $("#messages").append('<li class="listStyle" style="display: none;"><span style="color:lightblue">' + author + ': </span><span style="color:green">' + message +  '</span></li>');
    if (typeof machine == "boolean")
      $(".status-text").fadeOut();
    else
      $("textarea").val("");
    $("#messages li:last").fadeIn();
    if (typeof machine != "boolean")
      setTimeout(function () {

        var i=0;
        var j=0;
        var randomNumber;
        for(i=0;i<db.length;i++)
        {
            j=0;
            for(j=0;j<db[i].length;j++)
            {
                if(!message.includes(db[i][j]))
                {
                    //addMessage("not found",machineName,true);
                    break;
                }
                if(j==db[i].length-1)
                {
                    randomNumber = Math.floor(Math.random()*answers[i].length);
                    addMessage(answers[i][randomNumber],machineName,true);
                }
            }
        }
        if(message.includes('book'))
        {
            addMessage("Go on for a appointment ", machineName, true);
            $(".but_1").show();
        }


        /*switch (message.toLowerCase()) {

          case "book":

            addMessage("Hello, " + localStorage.username + "! How are you?", machineName, true);

        $(".but_1").show();
            break;


          case "hello":
          case "hi":
            addMessage("Hey there! Have a good day.", machineName, true);
            break;



          case "die":
            var randomNumber = Math.floor(Math.random()*sample.length);
            addMessage(sample[randomNumber], machineName, true);
            close--;
            if (close==0)
              {
                alert("Thanks for stopping by !! :)");
                window.close();
              }

            break;




          case "help":
          case "manual":
            addMessage("You can use the following commands:", machineName, true);
            break;



          case "time":
            addMessage("The time now is: see the bottom right clock is there, ha ha.", machineName, true);
            break;



          case "what is your name?":
          case "what is your name":
            addMessage("My name is " + machineName + ". I thought you knew it already!", machineName, true);
            break;



          default:
            addMessage("What are you blabbering?", machineName, true);
            break;



        } */
      }, 500);
  }
  if (typeof localStorage != "undefined")
    if (typeof localStorage.username == "undefined")
      localStorage.username = prompt("What is your good name?");
  $("#chatInput").submit(function (e) {
    e.preventDefault();
    addMessage($("textarea").val(), localStorage.username);
  });
  $("textarea").keydown(function (e) {
    if (e.which == 13) {
      addMessage($(this).val(), localStorage.username);
      return false;
    }
  });
});
