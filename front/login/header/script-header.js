class activeLink
    {
        constructor(elementActive,other1, other2,x,y)
        {
            this.x = document.getElementById(x)
            this.y = document.getElementById(y)
            this.elementActive = document.getElementById(elementActive)
            this.other1 = document.getElementById(other1)
            this.other2 = document.getElementById(other2)
        }
        styler() 
        {
            this.elementActive.style.borderBottom = "2px solid #14A3C2"
            this.other1.style.borderBottom = "none"
            this.other2.style.borderBottom = "none"
            this.x.classList.add('view')
            this.y.classList.remove('view')
            
        }
    }
    const myTimeout = setTimeout(nav_u, 10);
    function nav_u()
    {
        var active1 = new activeLink("user","archive","compte","list2","list")
        active1.styler()
    }
    function nav_a()
    {
        var active2 = new activeLink("archive","user","compte","list","list2")
        active2.styler()
    }
    function nav_c()
    {
        var active3 = new activeLink("compte", "user","archive")
        active3.styler()
    }
