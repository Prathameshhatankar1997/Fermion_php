function validation()
         {
            
            var Password = document.getElementById("pass").value;
            var Conpass= document.getElementById("conpass").value; 
            var Mobile= document.getElementById("mob").value;

            if(Password == "")
            {
                document.getElementById("passs").innerHTML="**Enter Password**";
                return false;
            }
            if(Password.length < 8)
            {
                document.getElementById("passs").innerHTML="**Enter atleast 8 characters**";
                return false;
            }
            if(Password.search(/[0-9]/)==-1)
            {
                document.getElementById("passs").innerHTML="**Enter atleast one number**";
                return false;
            }
            if(Password.search(/[A-Z]/)==-1)
            {
                document.getElementById("passs").innerHTML="**Please enter atleast one uppercase**";
                return false;
            }
            if(Password.search(/[!\@\#\%\^\&\*\\\_\+\=\-\/]/)==-1)
            {
                document.getElementById("passs").innerHTML="**Please enter atleast one symbol**";
                return false;
            }
            else
            {
                document.getElementById("passs").innerHTML="";
            }
            if(Conpass == "")
            {
                document.getElementById("conpasss").innerHTML="**Enter confirm pass**";
                return false;
            }
            if(Conpass!=Password)
            {
                document.getElementById("conpasss").innerHTML="**Password does not match**";
                return false;
            }
            else
            {
                document.getElementById("conpasss").innerHTML="";
            }
            if(Mobile == "")
            {
                document.getElementById("mobb").innerHTML="**please enter mobile no.**";
                return false;
            }
            if(isNaN(Mobile))
            {
                document.getElementById("mobb").innerHTML="**plesase enter numbers only**";
                return false;
            }
            if(Mobile.length < 10)
            {
                document.getElementById("mobb").innerHTML="**enter atleast 10 digits numbers**";
                return false;
            }
            if(Mobile.length > 10)
            {
                document.getElementById("mobb").innerHTML="**plesase enter 10 digits numbers only**";
                return false;
            }
            else
            {
                document.getElementById("mobb").innerHTML="";
            }
        }