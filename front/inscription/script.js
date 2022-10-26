class verification 
{
    constructor (input,x)
    {
        this.input = document.getElementById(input)
        this.x = x

    }
    result ()
    {
        
        if (this.input.value.trim() !="")
        {
         this.input.classList.add("is-valid");
         this.input.classList.remove("is-invalid");
         this.x++;
         return this.x;
        }
        if (this.input.value.trim() =="") 
        {
         this.input.classList.remove("is-valid");
         this.input.classList.add("is-invalid"); 
         this.x--;
         return this.x;
        }
    }
    resultmdp ()
    {
        
        if (this.input.value !="")
        {
         this.input.classList.add("is-valid");
         this.input.classList.remove("is-invalid");
       
        }
        if (this.input.value =="") 
        {
         this.input.classList.remove("is-valid");
         this.input.classList.add("is-invalid"); 
       
        }
    }
 resultMailCorrect ()
    {
        var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if (this.input.value.match(pattern))
        {
         this.input.classList.add("is-valid");
         this.input.classList.remove("is-invalid");
       
        }
        else
        {
         this.input.classList.remove("is-valid");
         this.input.classList.add("is-invalid"); 
       
        }

    } 
    resultRoleCorrect()
    {
        if ((this.input.value =="administrateur") || (this.input.value =="utilisateur"))
        {
         this.input.classList.add("is-valid");
         this.input.classList.remove("is-invalid");
       
        }
        else 
        {
         this.input.classList.remove("is-valid");
         this.input.classList.add("is-invalid"); 
       
        }
    }
}
submit = document.getElementById("submit");
function prenomf()
{
    var prenom = new verification ("prenom",0)
    prenom.result();
    nb =  prenom.result();
    console.log(nb)
    submit.disabled = true;
    if (nb == 2) {
    return 1
    }
 
}
function nomf()
{
    var nom = new verification ("nom",0)
    nom.result();
    nb =  nom.result();
    console.log(nb)
    submit.disabled = true;
    if (nb == 2) {
    return 1  
    }
}
function emailf()
{
    var email = new verification ("email")
    email.resultMailCorrect();
}
function rolef()
{
    var role = new verification ("role")
    role.resultRoleCorrect();
}
function mdpf()
{
    var mdp = new verification ("mdp")
    mdp.resultmdp();
}
function confirm_mdpf()
{
    var confirm_mdp = new verification ("confirm_mdp")
    confirm_mdp.resultmdp();
}

console.log(document.getElementsByClassName("is-valid"))