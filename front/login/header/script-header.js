class activeLink
    {
        constructor(elementActive,other1, other2)
        {
     
            this.elementActive = document.getElementById(elementActive)
            this.other1 = document.getElementById(other1)
            this.other2 = document.getElementById(other2)
        }
        styler() 
        {
            this.elementActive.style.borderBottom = "2px solid #14A3C2"
            this.other1.style.borderBottom = "none"
            this.other2.style.borderBottom = "none"
      
            
        }
    }
    const myTimeout = setTimeout(nav_u, 10);
    function nav_u()
    {
        var active1 = new activeLink("user","archive","compte")
        active1.styler()
    }
    function nav_a()
    {
        var active2 = new activeLink("archive","user","compte")
        active2.styler()
    }
    function nav_c()
    {
        var active3 = new activeLink("compte", "user","archive")
        active3.styler()
    }
    

    //pop pup pour notification

    class notification 
        {
            constructor(txt, action)
            {
                this.txt = txt;
                this.action = action;
    
            }
            alerter()
            {
                document.getElementById('txt').innerHTML = this.txt;
                document.getElementById('action').innerHTML = this.action;
            }
            invisible ()
            {
                document.getElementById('anul').classList.add('annuler');
            }

            visible ()
            {
                document.getElementById('anul').classList.remove('annuler');
            }

        }

        function invisibl ()
        {
            var anull = new notification()
            anull.invisible ();
        }
        function visibl (a,b)
        {
            var walid = new notification(a, b)
            walid.alerter();
            walid.visible ();
        }
        function invisiblvalid ()
        {
            var anull = new notification()
            anull.invisible ();
                if (document.getElementById('action').innerHTML == "confirmer") 
                {
                   document.getElementById('supprimer').click()
                }
                else
                {
                   document.getElementById('modifier').click()
                }
            
        }

