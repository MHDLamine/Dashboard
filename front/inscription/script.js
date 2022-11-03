class verification 
{
    constructor (input,x,y)
    {
        this.input = document.getElementById(input)
        this.message = document.getElementsByClassName("message")[y]
        this.x = x
        this.confim = document.getElementById("mdp").value

    }
    result ()
    {
        
        if (this.input.value.trim() !="")
        {
         this.input.classList.add("is-valid");
         this.input.classList.remove("is-invalid");
         this.message.innerHTML = ""
         this.x++;
         return this.x;
        }
        if (this.input.value.trim() =="") 
        {
         this.input.classList.remove("is-valid");
         this.input.classList.add("is-invalid"); 
         this.message.innerHTML = "ce champs est requis"
         this.message.style.color = "red"
         this.x--;
         return this.x;
        }
    }
    resultmdp ()
    {
        if ( (this.input.value).length < 8 )
        {
         this.input.classList.remove("is-valid");
         this.input.classList.add("is-invalid");
         this.message.innerHTML = "le mot de passe doit contenir au minimum 8 caractères"
         this.message.style.color = "red"
         this.x--;
         return this.x;
        }
        if (this.input.value !="")
        {
         this.input.classList.add("is-valid");
         this.input.classList.remove("is-invalid");
         this.message.innerHTML = ""
         this.x++;
         return this.x;
        }
        if (this.input.value =="") 
        {
         this.input.classList.remove("is-valid");
         this.input.classList.add("is-invalid");
         this.message.innerHTML = "ce champs est requis"
         this.message.style.color = "red"
         this.x--;
         return this.x;
       
        }
    }
        resultmdpconfirm ()
        {
            if (this.input.value !== this.confim) 
            {
                this.input.classList.remove("is-valid");
                this.input.classList.add("is-invalid");
                this.message.innerHTML = "les mots de passe ne correspondent pas"
                this.message.style.color = "red"
                this.x--;
                return this.x;
            }
            else
            {
                this.input.classList.add("is-valid");
                this.input.classList.remove("is-invalid");
                this.message.innerHTML = ""
                this.x++;
                return this.x;
            }
        }
        resultMailCorrect ()
        {
        var pattern = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
        if (this.input.value.match(pattern))
        {
         this.input.classList.add("is-valid");
         this.input.classList.remove("is-invalid");
         this.message.innerHTML = ""
         this.x++;
         return this.x;
        }
        else{
            if (this.input.value.trim() == "") {
                this.input.classList.remove("is-valid");
                this.input.classList.add("is-invalid"); 
                this.message.innerHTML = "Ce champs est requis"
                this.message.style.color = "red"
                this.x--;
                return this.x;
            }
            if (this.input.value.trim() !== "") 
            {
            this.input.classList.remove("is-valid");
            this.input.classList.add("is-invalid"); 
            this.message.innerHTML = "le format du mail est incorrect"
            this.message.style.color = "red"
            this.x--;
            return this.x;
        
            }
            }

    } 
    resultRoleCorrect()
    {
        if ((this.input.value =="administrateur") || (this.input.value =="utilisateur"))
        {
         this.input.classList.add("is-valid");
         this.input.classList.remove("is-invalid");
         this.message.innerHTML = " "
         this.x++;
         return this.x;
       
        }
        else 
        {
         this.input.classList.remove("is-valid");
         this.input.classList.add("is-invalid");
         this.message.innerHTML = "Veuillez choisir un role"
         this.message.style.color = "red"
         this.x--;
         return this.x;
       
        }
    }
}


submit = document.getElementById("submit");

function prenomf()
{
    var prenom = new verification ("prenom",0,0)
    prenom.result();
    nb = prenom.result();
    prenomlab.classList.remove("valid");
    if (nb == 2) {
        prenomlab.classList.add("valid");
        validate ()
    }
}

function nomf()
{
    var nom = new verification ("nom",0,1)
    nom.result();
    nb =  nom.result();
    nomlab.classList.remove("valid");
    validate ()
    if (nb == 2) {
        nomlab.classList.add("valid");
        validate ()
    }
}
function emailf()
{
    var email = new verification ("email",0,2)
    email.resultMailCorrect();
    nb = email.resultMailCorrect();
    emaillab.classList.remove("valid");
    validate ()
    if (nb == 2) {
        emaillab.classList.add("valid");
        validate ()
    }
}
function rolef()
{
    var role = new verification ("role",0,3)
    role.resultRoleCorrect();
    nb = role.resultRoleCorrect();
    rolelab.classList.remove("valid");
    validate ()
    if (nb == 2) {
        rolelab.classList.add("valid");
        validate ()
    }
}
function mdpf()
{
    var mdp = new verification ("mdp",0,4)
    mdp.resultmdp();
    nb = mdp.resultmdp();
    mdplab.classList.remove("valid");
    validate ()
    if (nb == 2) {
        mdplab.classList.add("valid");
        validate ()
    }
}
function confirm_mdpf()
{
    var confirm_mdp = new verification ("confirm_mdp",0,5)
    confirm_mdp.resultmdpconfirm();
    nb = confirm_mdp.resultmdpconfirm();
    mdpclab.classList.remove("valid");
    validate ()
    if (nb == 2) {
        mdpclab.classList.add("valid");
        validate ()
    }
}

/*
 Si le saisie en cours est correct il appelle la fonction validate qui va mettre la classe valid à l'input
*/

prenomlab = document.getElementById("prenomlab");
nomlab = document.getElementById("nomlab");
emaillab = document.getElementById("emaillab");
rolelab = document.getElementById("rolelab");
mdplab = document.getElementById("mdplab");
mdpclab = document.getElementById("mdpclab");

function validate () {
    valid = document.getElementsByClassName("valid").length;
 
    if (valid == 6) {
        submit.disabled = false;
        submit.style.backgroundColor= "#14A3C2";
    }
    else{
        submit.style.backgroundColor= "#0087a45e";
        submit.disabled = true;
    }
   }