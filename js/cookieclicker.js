function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
function ereaseCookie(name) {   
    document.cookie = name+'=; Max-Age=-99999999;';  
}

const cookieImg = document.getElementById("cookie");
const upgrade1Button = document.getElementById("upgrade1");
const autoUpgradeButton = document.getElementById("autoupgrade");

let cookie = 0;
cookie = parseInt(getCookie("COOKIES"));
let upgrade = 1;
let cost1 = 50;
cost1 = parseInt(getCookie("COST1"));
let cost2 = 300;
cost2 = parseInt(getCookie("COST2"));
let autoupgraded = false;
let autointerval = 1000;
let timer;

window.addEventListener('load', (event) => {
    updateScore();

    if(getCookie("COST1") == null) {
        cost1 = 50;
        setCookie("COST1", cost1);
    }

    if(getCookie("COST2") == null) {
        cost1 = 300;
        setCookie("COST2", cost2);
    }
});

function clickCookie() {
    addScore(upgrade);
}

function addScore(value) {
    cookie+=value;
    updateScore();
    document.getElementById("score").classList.add('textchange');
    if(autointerval > 62.5) {
    timer2 = setInterval(function() {
        document.getElementById("score").classList.remove('textchange');
        clearInterval(timer2);
    }, 100);
    }
}

function updateScore() {
    document.getElementById("score").innerHTML=cookie;
    document.getElementById("upgrade1").textContent="Upgrade: " + cost1;
    document.getElementById("autoupgrade").textContent="Autoupgrade: " + cost2;

    setCookie("COOKIES", cookie);
    setCookie("COST1", cost1);
    setCookie("COST2", cost2);
    if(isNaN(cookie)) {
        cookie = 0;
        setCookie("COOKIES", cookie);
    }
    if(isNaN(cost1)) {
        cost1 = 50;
        setCookie("COST1", cost1);
    }
    if(isNaN(cost2)) {
        cost2 = 300;
        setCookie("COST2", cost2);
    }
}

function autoupgrade() {
    if(cookie >= cost2) {
        clearInterval(timer);
        if(autoupgraded == true) {
            autointerval = autointerval/2;
        }

        timer = setInterval(function() {
            if(autoupgraded === true) {
                addScore(1);
            }
        }, autointerval);

        cookie -= cost2;
        cost2 = Math.pow(cost2, 2);
        document.getElementById("autoupgrade").textContent=cost2;
        autoupgraded = true;
        updateScore();
    }
}

function upgrade1() {
    if(cookie >= cost1) {
        cost1 += 100*upgrade/10;
        cookie -= 50;
        upgrade += 10;
        updateScore();
    }
}

function reset() {
    setCookie("COOKIES", 0);
    setCookie("COST1", 50);
    setCookie("COST2", 300);
    cookie = 0;
    upgrade = 1;
    cost1 = 50;
    cost2 = 300;
    autoupgraded = false;
    autointerval = 1000;
    updateScore();
}