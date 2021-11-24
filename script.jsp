function validation() {
    var Name= document.getElementById("Name").value;
    var Emailid=document.getElementById("Emailid").value;
    
    var Message=document.getElementById("Message").value;
    var error_message=document.getElementById("error_message");

    var text;

    error_message.style.padding="10px";

    if(Name.length<5)
    {
        text="Please Enter Valid Name";
        error_message.innerHTML=text;
        return false;
    }

    if(Emailid.indexOf("@") == -1 || email.length<6)
    {
        text="Please Enter Valid Email";
        error_message.innerHTML=text;
        return false;
    }

    if(Dish.length<20)
    {
        text="Please Enter Valid Name";
        error_message.innerHTML=text;
        return false;
    }

    if(Message.length<100)
    {
        text="Please Enter more than 100 characters";
        error_message.innerHTML=text;
        return false;
    }

    alert("Form Submitted Successfully!")
    return true;
}